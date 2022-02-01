<!-- Preloader -->
<div class="preloader">
    <div class="preloader-inner">
      <div class="single-loader one"></div>
      <div class="single-loader two"></div>
      <div class="single-loader three"></div>
      <div class="single-loader four"></div>
      <div class="single-loader five"></div>
      <div class="single-loader six"></div>
      <div class="single-loader seven"></div>
      <div class="single-loader eight"></div>
      <div class="single-loader nine"></div>
    </div>
  </div>
  <!-- End Preloader -->
  
  <!--دخول النظام والتسجيل -->
      @if(route::has('login'))
        @auth
          <ul class="pro-features">
              <a class="get-pro" href="{{ route('login')}}">دخول النظام</a>
          </ul>
          @else 
          <ul class="pro-features">
            <a class="get-pro" href="{{ route('register')}}">سجل الأن</a>
          </ul>
        @endauth
      @endif
  <!--النهاية-->
  