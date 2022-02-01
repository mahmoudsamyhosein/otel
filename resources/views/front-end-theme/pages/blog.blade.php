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
		<!-- Breadcrumbs -->
		<section class="breadcrumbs">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h2><i class="fa fa-pencil"></i>Our Blogs</h2>
								<ul>
									<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
									<li><a href="#"><i class="fa fa-clone"></i>Blogs</a></li>
									<li class="active"><a href="blogs.html"><i class="fa fa-clone"></i>Grid Layout</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<!--/ End Breadcrumbs -->
				
				<!-- Blogs Area -->
				<section class="blogs-main archives section">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src="images/blogs/blog1.jpg" alt="#">
									</div>
									<div class="blog-bottom">
										<div class="blog-inner">
											<h4><a href="blog-single.html">Recognizing the need is the primary</a></h4>
											<p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
											<div class="meta">
												<span><i class="fa fa-bolt"></i><a href="#">Marketing</a></span>
												<span><i class="fa fa-calendar"></i>03 May, 2018</span>
												<span><i class="fa fa-eye"></i><a href="#">333k</a></span>
											</div>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src="images/blogs/blog2.jpg" alt="#">
									</div>
									<div class="blog-bottom">
										<div class="blog-inner">
											<h4><a href="blog-single.html">How to grow your business with blank table!</a></h4>
											<p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
											<div class="meta">
												<span><i class="fa fa-bolt"></i><a href="#">Business</a></span>
												<span><i class="fa fa-calendar"></i>28 April, 2018</span>
												<span><i class="fa fa-eye"></i><a href="#">5m</a></span>
											</div>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src="images/blogs/blog3.jpg" alt="#">
									</div>
									<div class="blog-bottom">
										<div class="blog-inner">
											<h4><a href="blog-single.html">10 ways to improve your startup Business</a></h4>
											<p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
											<div class="meta">
												<span><i class="fa fa-bolt"></i><a href="#">Brand</a></span>
												<span><i class="fa fa-calendar"></i>15 April, 2018</span>
												<span><i class="fa fa-eye"></i><a href="#">10m</a></span>
											</div>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src="images/blogs/blog4.jpg" alt="#">
									</div>
									<div class="blog-bottom">
										<div class="blog-inner">
											<h4><a href="blog-single.html">Recognizing the need is the primary</a></h4>
											<p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
											<div class="meta">
												<span><i class="fa fa-bolt"></i><a href="#">Online</a></span>
												<span><i class="fa fa-calendar"></i>25 March, 2018</span>
												<span><i class="fa fa-eye"></i><a href="#">38k</a></span>
											</div>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src="images/blogs/blog5.jpg" alt="#">
									</div>
									<div class="blog-bottom">
										<div class="blog-inner">
											<h4><a href="blog-single.html">How to grow your business with blank table!</a></h4>
											<p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
											<div class="meta">
												<span><i class="fa fa-bolt"></i><a href="#">Marketing</a></span>
												<span><i class="fa fa-calendar"></i>10 March, 2018</span>
												<span><i class="fa fa-eye"></i><a href="#">100k</a></span>
											</div>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src="images/blogs/blog6.jpg" alt="#">
									</div>
									<div class="blog-bottom">
										<div class="blog-inner">
											<h4><a href="blog-single.html">10 ways to improve your startup Business</a></h4>
											<p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
											<div class="meta">
												<span><i class="fa fa-bolt"></i><a href="#">Website</a></span>
												<span><i class="fa fa-calendar"></i>21 February, 2018</span>
												<span><i class="fa fa-eye"></i><a href="#">320k</a></span>
											</div>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src="images/blogs/blog7.jpg" alt="#">
									</div>
									<div class="blog-bottom">
										<div class="blog-inner">
											<h4><a href="blog-single.html">Recognizing the need is the primary</a></h4>
											<p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
											<div class="meta">
												<span><i class="fa fa-bolt"></i><a href="#">Marketing</a></span>
												<span><i class="fa fa-calendar"></i>03 May, 2018</span>
												<span><i class="fa fa-eye"></i><a href="#">333k</a></span>
											</div>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src="images/blogs/blog2.jpg" alt="#">
									</div>
									<div class="blog-bottom">
										<div class="blog-inner">
											<h4><a href="blog-single.html">How to grow your business with blank table!</a></h4>
											<p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
											<div class="meta">
												<span><i class="fa fa-bolt"></i><a href="#">Business</a></span>
												<span><i class="fa fa-calendar"></i>28 April, 2018</span>
												<span><i class="fa fa-eye"></i><a href="#">5m</a></span>
											</div>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src="images/blogs/blog3.jpg" alt="#">
									</div>
									<div class="blog-bottom">
										<div class="blog-inner">
											<h4><a href="blog-single.html">10 ways to improve your startup Business</a></h4>
											<p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
											<div class="meta">
												<span><i class="fa fa-bolt"></i><a href="#">Brand</a></span>
												<span><i class="fa fa-calendar"></i>15 April, 2018</span>
												<span><i class="fa fa-eye"></i><a href="#">10m</a></span>
											</div>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<!-- Start Pagination -->
								<div class="pagination-main">
									<ul class="pagination">
										<li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
										<li><a href="#">1</a></li>
										<li class="active"><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
									</ul>
								</div>
								<!--/ End Pagination -->
							</div>
						</div>			
					</div>
				</section>
				<!--/ End Blogs Area -->

			
        
				<!--radix theme -->
				 @include('front-end-theme/radix/header')
				 @include('front-end-theme/radix/preload-get-pro')
				 
				 @include('front-end-theme/radix/footer')
				 @include('front-end-theme/radix/js')
				<!--radix theme -->
				
	</body>
</html>