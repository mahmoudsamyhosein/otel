<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="أوتيل لأدارة الفنادق | تسجيل" />
        <meta name="author" content="أوتيل لأدارة الفنادق | تسجيل" />
        <title>أوتيل لأدارة الفنادق | تسجيل</title>
        @include('admin/theme/css')
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">{{__('radix.Create Account') }}</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register')}}">
                                         @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control @error ('name') is-invalid @enderror " id="name" type="text"  value="{{ old('name') }}" placeholder="{{__('radix.Enter your first name')}}" required autocomplete="name" />
                                                        <label for="name">{{__('radix.First name')}}</label>
                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control @error ('name') is-invaild @enderror " id="name" type="text" value="{{ old('name') }}" placeholder="{{__('radix.Enter your last name')}}"  required autocomplete="name"/>
                                                        <label for="inputLastName">{{__('radix.Last name')}}</label>
                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control @error ('email') is-invaild @enderror" id="email" type="email" value="{{ old('email') }}" placeholder="{{__('radix.name@example.com')}}" required autocomplete="email" />
                                                <label for="email">{{__('radix.Email address')}}</label>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control @error ('password') is-invaild @enderror" id="password" type="password" placeholder="{{__('radix.Create a password')}}" required autocomplete="password"/>
                                                        <label for="password">{{__('radix.Password')}}</label>
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control @error ('password') is-invaild @enderror" id="password" type="password" placeholder="{{__('radix.Confirm password')}}" required autocomplete="password"/>
                                                        <label for="password">{{__('radix.Confirm Password')}}</label>
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type ='submit' class="btn btn-primary btn-block" href="{{ route('register')}}">{{__('radix.Create Account')}}</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    @if(route::has('login'))
                                        <div class="card-footer text-center py-3">
                                            <div class="small"><a href="{{ route('login')}}">{{__('radix.Have an account? Go to login')}}</a></div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">{{__('radix.Copyright')}} &copy; {{__('radix.Your Website 2021')}}</div>
                            <div>
                                <a href="#"></a>
                                &middot;
                                <a href="#">{{__('radix.Terms')}} &amp; {{__('radix.Conditions')}}</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        @include('admin/theme/js')
    </body>
</html>
