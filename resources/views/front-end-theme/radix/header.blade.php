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
                            <a href="#exampleModalCenter"  data-toggle="modal" data-target="#exampleModalCenter" class="btn">{{__('radix.ask_for_register') }}</a>
                        <!--/ End Button -->
                    </div>
                    <!--/ End Main Menu -->
                        <!-- Button trigger modal -->
                                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">لطلب نسخة تجريبية يرجى تعبئة البيانات أدناه

                            </h5>
                            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                <span style="padding-left:50px;" aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                        <form class="form" method="POST" action="{{route('index')}}" enctype="multipart/form-data" >
                                        @csrf
                                            <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4"><span>الاسم بالكامل</span> </label>
                                                <input type="text"  name='name' class="form-control" id="inputEmail4" placeholder="محمود سامي حسين متولي">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">رقم الجوال</label>
                                                <input type="text" name='phone' class="form-control" id="inputPassword4" placeholder="0541321789">
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="inputAddress">المدينة</label>
                                            <input type="text" name='city' class="form-control" id="inputAddress" placeholder="الرياض">
                                            </div>
                                            <div class="form-group">
                                            <label  for="inputAddress2">العنوان</label>
                                            <input type="text" name='address' class="form-control" id="inputAddress2" placeholder="الرياض , شارع خالد بن الوليد">
                                            </div>
                                            <div class="form-group">
                                                <label  for="inputEmail4">البريد الالكتروني</label>
                                                <input type="email" name='email' class="form-control" placeholder='otel@gmail.com' id="inputEmail4">
                                            </div>
                                            <div class="form-group ">
                                                <label  for="inputEmail4">أسم الفندق</label>
                                                <input type="text" name='hotel_name' class="form-control" id="inputEmail4" placeholder="فندق تيرا">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputState">كيف تعرفت علي أوتيل</label>
                                                <select id="inputState"  type='text' class="form-control">
                                                <option selected>...أختر</option>
                                                <option value="" name='how_know_us' >جوجل</option>
                                                <option value="" name='how_know_us' >فيس بوك</option>
                                                </select>
                                            </div>
                                        <button type="submit" class="btn btn-primary">أرسال</button>
                                        </form>
                        </div>
                        {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div> --}}
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Middle Bar -->
</header>
<!--/ End Header -->