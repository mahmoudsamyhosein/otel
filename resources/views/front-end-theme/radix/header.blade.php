 <!-- Start Header -->
 <header id="header" class="header" dir="rtl">
 
   
    <!-- Middle Bar -->
    <div class="middle-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="#"><img src="{{ asset ('radix/images/logo.png') }}" alt="logo"></a>
                    </div>
                    
                  
                    <div class="link"><a href="#"><span>أ</span>وتيل</a></div>
                    <!--/ End Logo -->
                    <button class="mobile-arrow"><i class="fa fa-bars"></i></button>
                    <div class="mobile-menu "></div>
                </div>
                <div class="col-lg-10 col-12">
                    <!-- Main Menu -->
                    <div class="mainmenu">
                        <nav class="navigation">
                            <ul class="nav menu">
                                <li class="active"><a href="/">{{__('radix.Home') }}</a></li>
                                <li><a href="/">{{__('radix.about_us') }}<i class="fa fa-caret-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="/">{{__('radix.about_us') }}</a></li>
                                        <li><a href="/">{{__('radix.Our_Team') }}</a></li>
                                        <li><a href="/">{{__('radix.Pricing') }}</a></li>
                                    </ul>
                                </li>	
                                <li><a href="/">{{__('radix.know_system') }}</a></li>	
                                <li><a href="/">{{__('radix.blog') }}<i class="fa fa-caret-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="/">{{__('radix.Blog_layout') }}</a></li>
                                        <li><a href="/">{{__('radix.Blog_Single') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="/">{{__('radix.faq') }}</a></li>
                            </ul>
                        </nav>
                        <!-- Button -->
                                @if(route::has('login'))
                                @auth
                                  <ul class="button">
                                      <a  class="btn"  href="{{ route('login')}}">دخول النظام</a>
                                  </ul>
                                  @else 
                                  <ul class="button">
                                    <a  class="btn" href="{{ route('register')}}">سجل الأن</a>
                                  </ul>
                                @endauth
                              @endif
                            <a href="#" class="btn">{{__('radix.ask_for_register') }}</a>
                        <!--/ End Button -->
                    </div>
                    <!--/ End Main Menu -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Middle Bar -->
</header>
<!--/ End Header -->