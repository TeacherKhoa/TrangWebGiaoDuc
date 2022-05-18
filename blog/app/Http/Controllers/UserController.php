<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function updateUser(Request $request)
    {
        return view('update-user');
    }

    public function updateUserPost(Request $request)
    {
        $inputs = $request->all();
        $validator = $this->validateUpdateUser($inputs);
        if ($validator->passes()) {
            User::where('id', Auth::user()->id)
            ->update([
                'lastname' => $inputs['lastname'],
                'firstname' => $inputs['firstname'],
                'class' => $inputs['class'],
                'school' => $inputs['school'],
                'forte' => $inputs['forte'],
                'province' => $inputs['province'],
                'active' => 1,
            ]);
            return redirect()->route('home');
        } else {
            return back()->with('errors', $validator->errors()->toArray());
        }
    }

    private function validateUpdateUser($data)
    {
        return Validator::make($data, [
            'lastname' => ['required', 'string'],
            'firstname' => ['required', 'string', 'min:10'],
            'class' => ['required', 'string'],
            'school' => ['required', 'string'],
            'forte' => ['required', 'string'],
            'province' => ['required', 'string'],
        ]);
    }
}
