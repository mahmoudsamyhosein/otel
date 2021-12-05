          <!-- Footer -->
          <footer id="footer" class="footer wow fadeIn " dir="rtl">
            <!-- Top Arrow -->
            <div class="top-arrow">
                <a href="#header" class="btn"><i class="fa fa-angle-up"></i></a>
            </div>
            <!--/ End Top Arrow -->
            <!-- Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- About Widget -->
                            <div class="single-widget about text-right">
                                <h2 >عنوان مكتبنا</h2>
                                <p>جدة المملكة العربية السعودية</p>
                                <ul class="list">
                                    <li><i class="fa fa-map-marker"></i>العنوان: جدة المملكة العربية السعودية</li>
                                    <li><i class="fa fa-headphones"></i>هاتف : +966555555</li>
                                    <li><i class="fa fa-headphones"></i>بريدالكتروني :<a href="mailto:Info@otel.com">Info@otel.com</a></li>
                                </ul>	
                            </div>
                            <!--/ End About Widget -->
                        </div>	
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Links Widget -->
                            <div class="single-widget links text-right">
                                <h2>{{__('radix.Quick_Links') }}</h2>
                                <ul class="list">
                                    <li><a href="#"><i class="fa fa-caret-right"></i>{{__('radix.about_us') }}</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i>{{__('radix.know_system') }}</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i>{{__('radix.register')}}</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i>{{ __('radix.blog')}}</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i>{{ __('radix.Contact')}}</a></li>
                                    
                                </ul>
                            </div>
                            <!--/ End Links Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Twitter Widget -->
                            <div class="single-widget twitter text-right">
                                <h2>{{ __('radix.Recent_Tweets') }}</h2>
                                <div class="single-tweet">
                                    <i class="fa fa-twitter"></i>
                                    <p><a href="#">@Otel</a>هذا النص يمكن ان يكون اي شيء يتم وضع النص بناء علي اي شيء </p>
                                </div>
                                <div class="single-tweet ">
                                    <i class="fa fa-twitter"></i>
                                    <p><a href="#">@Otel</a>هذا النص يمكن ان يكون اي شيء يتم وضع النص بناء علي اي شيءة</p>
                                </div>
                                <div class="single-tweet">
                                    <i class="fa fa-twitter"></i>
                                    <p><a href="#">@Otel</a>هذا النص يمكن ان يكون اي شيء يتم وضع النص بناء علي اي شيءة</p>
                                </div>
                            </div>
                            <!--/ End Twitter Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Newsletter Widget -->
                            <div class="single-widget newsletter text-right">
                                <h2>{{ __('radix.Newsletter') }} </h2>
                                <p>أشترك في القائمة البريدية لتصلك أحدث العروض وخصم حصري علي الأشتراكات</p>
                                <form action="{{route('index')}}" method="POST">
                                  @csrf
                                    <input placeholder="{{__('radix.Your_Name') }}" type="text" name="name">
                                    <input placeholder="{{__('radix.your_email') }}" type="email" name="email">
                                    <button type="submit" class="button primary">{{ __('radix.Subscribe_Now!')}}</button>
                                </form>	
                            </div>
                            <!--/ End Newsletter Widget -->
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Footer Top -->
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="bottom-top">
                                <!-- Social -->
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                                <!--/ End Social -->
                                <!-- Copyright -->
                                <div class="copyright">
                                    <p> جميع الحقوق محفوظة لموقع أوتيل &copy; 2021 <a target="_blank" href="/"></a> <a target="_blank" href="/">by:MSHM</a></p>
                                </div>
                                <!--/ End Copyright -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Footer Bottom -->
        </footer>
        <!--/ End footer -->