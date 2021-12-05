<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <!--radix theme -->
        <!-- Meta tag -->
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="Otel" content="Otel cms mangment system ">
		<meta name='copyright' content='Radix'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
		<!-- Meta tag -->
		<!-- Title Tag -->
        <title>@yield('title','اوتيل | لأدارة الفنادق')</title>
        <!-- Title Tag -->
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="{{ asset ('radix/images/favicon.png') }}">
        <!-- Favicon -->	
        <!--css-->
        @include('front-end-theme/radix/css')
        <!--css-->
    </head>
    <body class="antialiased" >
        
        <!--radix theme -->
         @include('front-end-theme/radix/header')
         @include('front-end-theme/radix/preload-get-pro')
         @include('front-end-theme/radix/heroarea')
         @include('front-end-theme/radix/aboutus')
         @include('front-end-theme/radix/services')
         @include('front-end-theme/radix/fun-facts')
         @include('front-end-theme/radix/profilo')
         @include('front-end-theme/radix/calltoaction')
         @include('front-end-theme/radix/blog')
         @include('front-end-theme/radix/partner')
         @include('front-end-theme/radix/footer')
         @include('front-end-theme/radix/js')
        <!--radix theme -->
        
    </body>
</html>
