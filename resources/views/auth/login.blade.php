<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>أوتيل لأدارة الفنادق | تسجيل الدخول</title>

    @include('admin/theme/css')

</head>

<body class="bg-gradient-primary" >

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="{{ asset ('admin/img/6.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">{{__('radix.Welcome_Back!')}}</h1>
                                    </div>
                                    <form method="POST" action="{{ route('login')}}" class="user">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control @error('email') is-invaild @enderror" value='{{old ('email')}}' required autocomplete="email" autofocus
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="{{__('radix.Enter Email Address...') }}">
                                            @error('email')
                                                <span class='invaild-feedback' role="alert">
                                                    <strong>{{ $message}}</strong>
                                                </span>
                                                
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password"  class="form-control  @error('password') is-invaild @enderror " value="{{ old ('password')}}" required autocomplete="password" autofocus
                                                id="Password" placeholder="{{ __('radix.Password') }}">
                                            @error('password')
                                                <span class="invaild-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input {{ old('remember') ? 'checked' : '' }} " id="remember" >
                                                <label class="custom-control-label" for="remember">{{__('radix.RememberMe')}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                {{__('radix.Login')}}
                                            </button>
                                        </div>
                                        
                                        <a href="" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i>
                                            {{__('radix.Login with Google')}} 
                                        </a>
                                        <a href="" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> 
                                            {{__('radix.Login with Facebook')}}
                                        </a>
                                    </form>
                                    <hr>
                                    @if(Route::has('password.request'))
                                        <div class="text-center">
                                            <a class="small" href="{{ route('password.request')}}">{{__('radix.Forgot Password?')}}</a>
                                        </div>
                                    @endif
                                    @if(Route::has('register'))
                                        <div class="text-center">
                                            <a class="small" href="{{ route('register')}}">{{__('radix.Create an Account!')}}</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @include('admin/theme/js')

</body>

</html>


