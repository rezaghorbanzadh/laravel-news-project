<!DOCTYPE html>
<html lang="en">

<head>
@include("auth.layouts.hed_tag")
</head>

<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{asset("loginregister/assets/images/img-01.png")}}" alt="IMG">
            </div>

            <form method="post" action="{{ route('register') }}" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title">
                        Register
                    </span>


                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100 @error('name') is-invalid @enderror" id="name" type="text" name="name" placeholder="name" value="{{ old('name') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                </div>
                @error('name')
                <div class="alert alert-danger" role="alert" dir="rtl" style="border-radius: 25px;">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="float: left;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror



                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100 @error('email') is-invalid @enderror" id="email" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                </div>
                @error('email')
                <div class="alert alert-danger" role="alert" dir="rtl" style="border-radius: 25px;">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="float: left;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror



                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100 @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                </div>
                @error('password')
                <div class="alert alert-danger" role="alert" dir="rtl" style="border-radius: 25px;">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="float: left;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100 " id="password-confirm" type="password" name="password_confirmation" placeholder="password-confirm">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                </div>



                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Register
                    </button>
                </div>



                <div class="text-center p-t-136">
                    <a class="txt2" href="{{ route('login') }}">
                        Login your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="text-center p-t-13">
                    <a class="txt2" href="{{ route('auth.google') }}">
                        login with google
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


@include("auth.layouts.script")



</body>

