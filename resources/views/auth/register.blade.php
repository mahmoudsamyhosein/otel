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
{{---------------------------------------------------- الاسم الاول والاخير --}}
                                                        <input name="first_name" class="form-control @error ('first_name') is-invalid @enderror " id="first_name" type="text"  value="{{ old('first_name') }}" placeholder="{{__('radix.Enter your first name')}}"/>
                                                        {{-- <label for="first_name">{{__('radix.First name')}}</label> --}}
                                                        @error('first_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input name='last_name' class="form-control @error ('last_name') is-invaild @enderror " id="last_name" type="text" value="{{ old('last_name') }}" placeholder="{{__('radix.Enter your last name')}}"/>
                                                        {{-- <label for="last_name">{{__('radix.Last name')}}</label> --}}
                                                        @error('last_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                
{{--------------------------------------------- الهاتف والمدينة -----------------------------------------------------------------}}
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name='phone' class="form-control @error ('phone') is-invalid @enderror " id="phone" type="text"  value="{{ old('phone') }}" placeholder="{{__('radix.phone')}}" required  />
                                                        {{-- <label for="phone">{{__('radix.phone')}}</label> --}}
                                                        @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input  name='city' class="form-control @error ('city') is-invaild @enderror " id="city" type="text" value="{{ old('city') }}" placeholder="{{__('radix.city')}}" />
                                                        {{-- <label for="city">{{__('radix.city')}}</label> --}}
                                                        @error('city')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
{{---------------------------------------------  النهاية الهاتف والمدينة -----------------------------------------------------------------}}


{{--------------------------------------------- الهاتف والمدينة -----------------------------------------------------------------}}
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name='neighborhood' class="form-control @error ('neighborhood') is-invalid @enderror " id="neighborhood" type="text"  value="{{ old('neighborhood') }}" placeholder="{{__('radix.neighborhood')}}"/>
                                                        {{-- <label for="neighborhood">{{__('radix.neighborhood')}}</label> --}}
                                                        @error('neighborhood')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input  name= 'address' class="form-control @error ('address') is-invaild @enderror " id="address" type="text" value="{{ old('address') }}" placeholder="{{__('radix.address')}}"/>
                                                        {{-- <label for="address">{{__('radix.address')}}</label> --}}
                                                        @error('address')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
{{---------------------------------------------  النهاية الهاتف والمدينة -----------------------------------------------------------------}}

{{---------------------------------------------------- البريد الالكتروني واسم الفندق --}}
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input name='hotel_name' class="form-control @error ('hotel_name') is-invaild @enderror " id="last_name" type="text" value="{{ old('hotel_name') }}" placeholder="{{__('radix.hotel_name')}}"/>
                                                        {{-- <label for="hotel_name">{{__('radix.hotel_name')}}</label> --}}
                                                        @error('hotel_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name='email' class="form-control @error ('email') is-invaild @enderror" id="email" type="email" value="{{ old('email') }}" placeholder="{{__('radix.name@example.com')}}" required  />
                                                {{-- <label for="email">{{__('radix.Email address')}}</label> --}}
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
{{----------------------------------- النهاية البريد الالكتروني و أسم الفندق-------------------------------------------------------------------------}}
                                                    
{{---------------------------------------------------- كلمة المرور البداية --}}
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="password" class="form-control @error ('password') is-invaild @enderror" id="password" type="password" placeholder="{{__('radix.Create a password')}}" required />
                                                        {{-- <label for="password">{{__('radix.Password')}}</label> --}}
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name='password_confirm' class="form-control @error ('password_confirm') is-invaild @enderror" id="password_confirm" type="password" placeholder="{{__('radix.Confirm password')}}" required />
                                                        <label for="password">{{__('radix.Confirm Password')}}</label>
                                                        @error('password_confirm')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
{{---------------------------------------------------- كلمة المرور النهاية --}}

                                
                                        <button type ='submit' class="btn btn-primary btn-block">{{__('radix.Create Account')}}</button>
                                            
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
