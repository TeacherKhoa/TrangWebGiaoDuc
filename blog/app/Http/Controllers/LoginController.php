<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
    }

    public function login(Request $request)
    {
        $inputs = $request->all();
        $validator = $this->validator($inputs);

        if($validator->passes()) {
            $user = User::where('username', $inputs['username'])->first();
            if ($user) {
                if (Hash::check($inputs['password'], $user->password)) {
                    Auth::login($user);
                    if($user->active === 0) {
                        return redirect()->route('update_user');
                    } else {
                        return redirect()->route('home');
                    }
                } else {
                    return back()->with('errors', ['Password invalid.']);
                }
            } else {
                return back()->with('errors', ['Username invalid']);
            }
        } else {
            return back()->with('errors', $validator->errors());
        }
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    protected function validatorRegister(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'confirmed'],
            'email_confirmation' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'active' => 0,
            'type' => $data['type'],
        ]);
    }

    public function register(Request $request)
    {
        $inputs = $request->all();
        $validator = $this->validatorRegister($inputs);
        if ($validator->passes()) {
            $result = $this->create($inputs);
            return back()->with('success', 'Register success.');
        } else {
            return back()->with('errors', $validator->errors()->toArray());
        }
    }

    public function logout()
    {
        Auth::logout();
        return view('auth.login');
    }

    /**
     * Redirect the user to the provider authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    public function callbackGoogle(Request $request)
    {
        $googleUser = Socialite::driver('google')->user();
        if ($googleUser) {
            $user = User::where('username', $googleUser->getEmail())->first();
            if (!$user) {
                $user = User::create([
                    'username' => $googleUser->getEmail(),
                    'email' => $googleUser->getEmail(),
                    'password' => Hash::make($this->randomPassword()),
                    'active' => 0,
                    'type' => 0,
                    'avatar' => $googleUser->getAvatar(),
                ]);
            }
            Auth::login($user);
            if($user->active === 0) {
                return redirect()->route('update_user');
            } else {
                return redirect()->route('home');
            }
        }
    }

    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
}
