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
									<li class="active"><a href="blogs-single-left.html"><i class="fa fa-clone"></i>Blog Single Left</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<!--/ End Breadcrumbs -->
				
				<!-- Blogs Area -->
				<section class="blogs-main archives single section">
					<div class="container">
						<div class="row">
							<div class="col-lg-10 offset-lg-1 col-12">
								<div class="row">
									<div class="col-12">
										<!-- Single Blog -->
										<div class="single-blog">
											<div class="blog-head">
												<img src="images/blogs/blog1.jpg" alt="#">
											</div>
											<div class="blog-inner">
												<div class="blog-top">
													<div class="meta">
														<span><i class="fa fa-bolt"></i><a href="#">Marketing</a></span>
														<span><i class="fa fa-calendar"></i>03 May, 2018</span>
														<span><i class="fa fa-eye"></i><a href="#">333k</a></span>
													</div>
													<ul class="social-share">
														<li><a href="#"><i class="fa fa-facebook"></i></a></li>
														<li><a href="#"><i class="fa fa-twitter"></i></a></li>
														<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
														<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
														<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
													</ul>
												</div>
												<h2><a href="blog-single.html">Recognizing the need is the primary</a></h2>
												<p>dolor sit amet, consectetur adipiscing elit. Fusce porttitor tristique mi, sed rhoncus sapien mollis vitae. Pellentesque at mauris neque. Vestibulum pulvinar ac sagittis ex consectetur sed. Ut viverra elementum libero, nec tincidunt orci vehicula quis. Vivamus vehicula quis <b>Lorem ipsum</b> nunc quis rutrum. Aliquam consectetur dapibus tortor, blandit lobortis erat dictum sed. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed vitae quam dolor.</p>
												<p>sed eleifend lectus purus id sem. Morbi eget interdum ligula. Cras tincidunt tincidunt odio et accumsan. Aliquam erat volutpat. In iaculis tortor ac congue cursus. In hac habitasse platea dictumst. Maecenas eu dignissim nisi. Donec feugiat, massa vel egestas dapibus, libero purus lacinia eros,  <u>magna enim</u> eu pellentesque lorem purus id orci. Cras tempor, mauris vitae congue sollicitudin, ex justo viverra ipsum, sit amet viverra justo odio ac metus. Aenean tristique odio id lectus accumsan convallis. Praesent tempor elit pulvinar elit ultricies, sed gravida nulla cursus. In condimentum mi ex, vel dapibus arcu accumsan ut. </p>
												<blockquote>Trending Title in ullamcorper sollicitudin, ligula nisi hendrerit magna, eget rhoncus purus urna at risus. Nullam volutpat augue at orci malesuada sollicitudin ut id risus. Ut tincidunt, erat eget feugiat eleifend, eros magna dapibus diam, eu aliquam dolor ipsum fringilla nulla</blockquote>
												<p>dolor sit amet, consectetur adipiscing elit. Fusce porttitor tristique mi, sed rhoncus sapien mollis vitae. Pellentesque at mauris neque. Vestibulum pulvinar ac sagittis ex consectetur sed. Ut viverra elementum libero, nec tincidunt orci vehicula quis. Vivamus vehicula quis nunc quis rutrum. Aliquam consectetur dapibus tortor, blandit lobortis erat dictum sed. Interdum et malesuada fames ac ante ipsum primis in .</p>
												<div class="bottom-area">
													<!-- Next Prev -->
													<ul class="arrow">
														<li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i>Previews Posts</a></li>
														<li class="next"><a href="#">Next Posts<i class="fa fa-angle-double-right"></i></a></li>
													</ul>
													<!--/ End Next Prev -->
												</div>
											</div>
										</div>
										<!-- End Single Blog -->
									</div>
									<div class="col-12">
										<div class="author-details">
											<div class="author-left">
												<img src="images/t4.jpg" alt="#">
												<h4>About Author<span>Senior Author</span></h4>
												<p><a href="#"><i class="fa fa-pencil"></i>33 posts</a></p>
											</div>
											<div class="author-content">
												<p>Hi My name is Lamp! quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alterations. Vivamus vehicula quis cursus. In hac habitasse platea dictumst Aenean tristique odio id lectus solmania trundard lamp!</p>
												<ul class="social-share">
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
													<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
													<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="blog-comments">
											<h2 class="title">37 Comments Found!</h2>
											<div class="comments-body">
												<!-- Single Comments -->
												<div class="single-comments">
													<div class="main">
														<div class="head">
															<img src="images/client1.jpg" alt="#">
														</div>
														<div class="body">
															<h4>Lufia Roshan</h4>
															<div class="comment-info"> 
																<p><span>03 May, 2018 at<i class="fa fa-clock-o"></i>12:20PM,</span><a href="#"><i class="fa fa-comment-o"></i>replay</a></p>
															</div>
															<p>some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
														</div>
													</div>
													<div class="comment-list">
														<div class="head">
															<img src="images/client2.jpg" alt="#">
														</div>
														<div class="body">
															<h4>Josep Bambo</h4>
															<div class="comment-info"> 
																<p><span>03 May, 2018 at<i class="fa fa-clock-o"></i>12:40PM,</span><a href="#"><i class="fa fa-comment-o"></i>replay</a></p>
															</div>
															<p>sagittis ex consectetur sed. Ut viverra elementum libero, nec tincidunt orci vehicula quis</p>
														</div>
													</div>
												</div>
												<!--/ End Single Comments -->
												<!-- Single Comments -->
												<div class="single-comments">
													<div class="main">
														<div class="head">
															<img src="images/client3.jpg" alt="#">
														</div>
														<div class="body">
															<h4>Trolia Ula</h4>
															<div class="comment-info"> 
																<p><span>05 May, 2018 at<i class="fa fa-clock-o"></i>08:00AM,</span><a href="#"><i class="fa fa-comment-o"></i>replay</a></p>
															</div>
															<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica</p>
														</div>
													</div>
												</div>		
												<!--/ End Single Comments -->	
												<!-- Single Comments -->
												<div class="single-comments">
													<div class="main">
														<div class="head">
															<img src="images/client4.jpg" alt="#">
														</div>
														<div class="body">
															<h4>James Romans</h4>
															<div class="comment-info"> 
																<p><span>06 May, 2018 at<i class="fa fa-clock-o"></i>02:00PM,</span><a href="#"><i class="fa fa-comment-o"></i>replay</a></p>
															</div>
															<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam</p>
														</div>
													</div>
												</div>		
												<!--/ End Single Comments -->											
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="comments-form">
											<h2 class="title">Leave a comment</h2>
											<!-- Contact Form -->
											<form class="form" method="post" action="mail/mail.php">
												<div class="row">
													<div class="col-lg-4 col-12">
														<div class="form-group">
															<input type="text" name="name" placeholder="Full Name" required="required">
														</div>
													</div>
													<div class="col-lg-4 col-12">
														<div class="form-group">
															<input type="email" name="email" placeholder="Your Email" required="required">
														</div>
													</div>
													<div class="col-lg-4 col-12">
														<div class="form-group">
															<input type="url" name="website" placeholder="Website" required="required">
														</div>
													</div>
													<div class="col-12">
														<div class="form-group">
															<textarea name="message" rows="5" placeholder="Type Your Message Here" ></textarea>
														</div>
													</div>
													<div class="col-12">
														<div class="form-group button">	
															<button type="submit" class="btn primary">Submit Comment</button>
														</div>
													</div>
												</div>
											</form>
											<!--/ End Contact Form -->
										</div>
									</div>
								</div>
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