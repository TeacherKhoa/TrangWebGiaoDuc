@extends('layouts.app')
@section('link')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@section('content')
    <div>
        <div class="row">
            <div class="col">
                <div class="Page">
                    <!--Logo Đầu Trang-->
                    <div class="Header"><span class="Logo">physical</span></div>
                    <!--Chọn Vai Trò-->
                    <div class="RoleIndicator">
                        <div class="v2_1003">
                            <div class="v2_1004"></div><span class="v2_1005">Tôi là Học Sinh</span>
                        </div>
                        <div class="v2_1006">
                            <div class="v2_1007"></div><span class="v2_1008">Tôi là Giáo Viên</span>
                        </div>
                        <div class="v2_1009"></div>
                    </div>

                    <!--Thanh Chia Dọc-->
                    <div class="Login_Divider"></div>
                    <!--Khu vực Đăng Ký-->
                    <div class="SignUpArea">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="SignUp_LeftGray"></div>
                                <div class="SignUp_RightGray"></div>
                                <div class="v2_972">Thông tin đăng nhập</div>
                                <div class="v2_973">Giúp bạn khi quên mật khẩu</div>
                                <div class="v2_974">Đăng Ký</div>
                                <input id="username" name="username" type="text" spellcheck="false" required class="SignUp_Input_Name"></input>
                                <input name="email" type="email" spellcheck="false" required class="SignUp_Input_Email"></input>
                                <input name="email_confirmation" type="email" spellcheck="false" required class="SignUp_Input_ConfirmEmail"></input>
                                <input name="password" type="password" spellcheck="false" required class="SignUp_Input_Password"></input>
                                <input name="type" type="hidden" value="0"></input>
                                <button type="button" class="Google_SignUp">Đăng ký bằng tài khoản Google</button>
                                <div class="v2_980">
                                    <button type="submit" class="v2_981">Đăng Ký</button>
                                </div>
                                <div class="v2_982"></div>
                                <span class="v2_983">Hoặc</span>
                                <span class="v2_985">Tên Đăng Nhập:</span>
                                <span class="v2_986">Tài khoản email:</span>
                                <span class="v2_987">Xác nhận lại tài khoản email</span>
                                <span class="v2_988">Password:</span>
                            </div>
                        </form>
                    </div>
                    <!--Khu vực Đăng Nhập-->
                    <div class="SignInArea"><span class="v2_990">Đăng Nhập</span>
                        <form method="POST" action="{{ route('post_login') }}">
                            @csrf
                            <input type="text" name="username" spellcheck="false" required class="SignIn_Input_Name"></input>
                            <input type="password" name="password" spellcheck="false" required class="SignIn_Input_Password"></input>
                            <div class="Google_SignIn">Đăng nhập bằng tài khoản Google</div>
                            <div class="v2_994"><button class="v2_995">Đăng Nhập</button></div>
                            <div class="v2_996"></div>
                            <span class="v2_997">Hoặc</span>
                            <span class="v2_999">Tên Đăng Nhập:</span>
                            <span class="v2_1000">Password:</span>
                            <span class="v2_1001">Quên mật khẩu</span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
