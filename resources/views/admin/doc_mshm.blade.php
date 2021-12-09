<!doctype html>  
<!--[if IE 6 ]><html lang="en-us" class="ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en-us" class="ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en-us" class="ie8"> <![endif]-->
<!--[if (gt IE 7)|!(IE)]><!-->
<html lang="ar" dir="rtl" ><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>تصميم موقع أوتيل لأدارة الفنادق</title>
	<link rel="stylesheet" href="{{ asset ('doc/assets/css/documenter_style.css') }}" media="all">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="{{ asset ('doc/assets/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset ('doc/style/css') }}">
</head>
<body class="documenter-project-mp-price" dir="rtl"  >
	<div  id="documenter_sidebar" >
		<h1 class="title">otel-cms</h1>
		<ul id="documenter_nav">
			<li><a class="current" href="#documenter_cover">عرض المشروع</a></li>
			<li><a href="#installation" title="html">قاعدة البيانات</a></li>
			<li><a href="#html" title="html">الفرونت أند</a></li>
			<li><a href="#css" title="css">الباك أند</a></li>
			<li><a href="#js" title="js">الربط مع الخدمات</a></li>	
		</ul>
		<div id="documenter_copyright">جميع الحقوق محفوظة لموقع أوتيل
		</div>
	</div>
	<div id="documenter_content">
	<section id="documenter_cover">
		<div class="text-center"> 
			<h1>بسم الله الرحمن الرحيم</h1>
			<h1>أوتيل لأدارة الفنادق</h1>
			<h2>الهدف من المشروع توفير نظام تجاري لأدارة الفنادق والشقق المفروشة بالمملكة العربية السعودية وغيرها من الدول </h2>
		</div>
	<hr>
	<img src="{{ asset ('doc/assets/images/8.jpg') }}" alt="">
	<hr>
	</section>
		<!-- HTML Structure -->
		<section id="html">
			<div class="page-header text-center">
				<h3>الفرونت أند أو الواجهة الرئيسية</h3>
				<hr class="notop">
				<h2><b>أوتيل لأدارة الفنادق</b> </h2>
				<h2>تم أختيار القالب <h2><a class="btn btn-success"  href="#">عرض </a></h2></h2>
				<h1> الاصدار المستخدم من بوتستراب 4.6</h1>
				<img src="{{ asset ('doc/assets/images/5.PNG') }}" alt="">
			</div>
			<hr>
			<div class="page-header text-center">
				<h3>لوحة التحكم</h3>
				<hr class="notop">
				<h2><b>أوتيل لأدارة الفنادق</b> </h2>
				<h1>تم أختيار القالب    <h2>
				<a class=" btn btn-danger" href="#">عرض</a></h2></h1>
				<h1> الاصدار المستخدم من بوتستراب 4.3</h1>
				<img src="{{ asset ('doc/assets/images/6.webp') }}" alt="">
			</div>
		</section>
		<!--/ End HTML Structure -->

		<!-- Installation -->
		<section id="installation">
			<div class="page-header text-center inverse"><h3>تصميم قاعدة البيانات</h3><hr class="notop"></div>
			<h3 class="text-center">جدول العملاء</h3>
			<p class="text-center"> جدول العملاء عرض index</p>
			<section>
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary"></h6>
					</div>
					<div class="card-body">
						<div class="table-responsive dir="rtl">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
						<tr>
							<th scope="col">الاسم</th>
							<th scope="col">نوع الاثبات</th>
							<th scope="col">رقم الأثبات</th>
							<th scope="col">مكان الاصدار</th>
							<th scope="col">جوال</th>
							<th scope="col">البريد الالكتروني</th>
							<th scope="col">العمليات</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<th scope="row">نص text</th>
							<td>بطاقة هوية مدنية ,جواز السفر دفتر العائلة من نوع select</td>
							<td>integer=10</td>
							<td>نص text</td>
							<td>integer=10</td>
							<td>text->unique</td>
							<td>العمليات عرض وتعديل وحذف</td>
						</tr>
						</tbody>
					</table>
			</section>
			<section>
					<p class="text-center">جدول العملاء عند عرض البيانات </p>
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary"></h6>
					</div>
					<div class="card-body">
						<div class="table-responsive dir="rtl">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
						<tr>
							<th scope="col">الاسم</th>
							<th scope="col">نوع الاثبات</th>
							<th scope="col">رقم الأثبات</th>

							<th scope="col">مكان الاصدار</th>
							<th scope="col">تاريخ الميلاد</th>
							<th scope="col">تاريخ  الأنتهاء</th>

							<th scope="col">العنوان</th>
							<th scope="col">رقم الجوال</th>
							<th scope="col">البريد الالكتروني</th>

							<th scope="col">مكان العمل</th>
							<th scope="col">هاتف العمل</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<th scope="row">نص text</th>
							<td>بطاقة هوية مدنية ,جواز السفر دفتر العائلة من نوع select</td>
							<td>integer=10</td>	
							<td>نص text</td>
							<td>integer date</td>
							<td>text->unique</td>

							<td>نص text</td>
							<td>integer=10</td>
							<td>نص text</td>
							<td>نص text</td>
							<td>integer=12</td>
						</tr>
					</tbody>
				</table>
			</section>
			<section>

				
				<p class="text-center">جدول العملاء عند أنشاء عميل جديد</p>
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary"></h6>
				</div>
				<div class="card-body">
					<div class="table-responsive dir="rtl">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
					<tr>
						<th scope="col">الاسم</th>
						<th scope="col">نوع العميل</th>
						<th scope="col">نوع الاثبات</th>
						<th scope="col">مكان الاصدار</th>
						<th scope="col">تاريخ الميلاد</th>

						<th scope="col">البريد الالكتروني</th>
						<th scope="col">هاتف العمل</th>
						<th scope="col">التصنيف</th>
						<th scope="col">الجنسية</th>
						<th scope="col">نسخة البطاقة</th>

						<th scope="col">تاريخ  الأنتهاء</th>
						<th scope="col">الجنس</th>
						<th scope="col">رقم الجوال</th>
						<th scope="col">مكان العمل</th>
						<th scope="col">العنوان</th>
						<th scope="col">ملاحظات</th>
						<th scope="col">ملاحظات خاصة</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row">نص text</th>
						<td>نص text</td>
						<td>بطاقة هوية مدنية ,جواز السفر دفتر العائلة من نوع select</td>
						<td>نص text</td>
						<td>integer date</td>

						<td>text->unique</td>
						<td>integer=12</td>
						<td>نص text</td>
						<td>نص text</td>
						<td>integer=1to30</td>

						<td>text-date</td>
						<td>نص text غيرمعروف , ذكر ,أنثي</td>
						<td>integer=10</td>
						<td>text</td>
						<td>نص text</td>
						<td>نص text</td>
						<td>نص text</td>
					</tr>
					</tbody>
				</table>
			</section>




			<section>

				<div class="page-header text-center"><h3>تصميم قاعدة البيانات</h3><hr class="notop"></div>
				<p class="text-center">جدول عرض الحجوزات</p>
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary"></h6>
				</div>
				<div class="card-body">
					<div class="table-responsive dir="rtl">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
					<tr>

						<th scope="col">رقم العقد</th>
						<th scope="col">حالة الحجز</th>
						<th scope="col">الشقة</th>
						<th scope="col">نوع الشقة</th>
						<th scope="col">العميل</th>

						<th scope="col">نوع الحجز</th>
						<th scope="col">الدخول في</th>
						<th scope="col">الخروج في</th>
						<th scope="col">المدة</th>
						<th scope="col">الايجار	</th>

						<th scope="col">المبلغ</th>
						<th scope="col">الضرائب	</th>
						<th scope="col">الاجمالي</th>
						<th scope="col">التأمينات</th>
						<th scope="col">المدفوع	</th>
						<th scope="col">الرصيد</th>
						<th scope="col">العمليات</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row"> integer يعرض رابط العقد</th>
						<td>نص text</td>
						<td>بطاقة هوية مدنية ,جواز السفر دفتر العائلة من نوع select</td>
						<td>نص text</td>
						<td>integer date</td>

						<td>text->unique</td>
						<td>integer=12</td>
						<td>نص text</td>
						<td>نص text</td>
						<td>integer=1to30</td>

						<td>text-date</td>
						<td>نص text غيرمعروف , ذكر ,أنثي</td>
						<td>integer=10</td>
						<td>text</td>
						<td>نص text</td>
						<td>نص text</td>
						<td>نص text</td>
					</tr>
					</tbody>
				</table>
			</section>
		
		</section>
		<!-- End Installation -->
		<!-- CSS Structure -->
		<section id="css">
			<div class="page-header text-center"><h3></h3><hr class="notop"></div>
				
		</section>
		<!-- End CSS Structure -->

		<!-- Javascript	-->
		<section id="js">
			<div class="page-header text-center"><h3>الربط مع الخدمات أو المواقع الأخري</h3><hr class="notop"></div>
			<p class="text-center"> عرض الخدمات المطلوب ربطها بالموقع </p>
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary"></h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
					<tr>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						
					</tr>
					</thead>
					<tbody>
					<tr>
						
						<td>المنصة الوطنية للرصد السياحي</td>
						<td> موقع شموس</td>
						<td>خدمة الدفع paytabs</td>
						<td>بوابة الرسائل sms</td>
						<td>نظام محاسبي odoo</td>
						<td>نظام محاسبي  أخر </td>
						
					</tr>
					
					</tbody>
				</table>
		</section>
		<!-- End Javascript	-->







		<!-- Icons	-->
		<section id="icons">
			<div class="page-header"><h3></h3><hr class="notop"></div>
		</section>
		<!--/ End Icons	-->

		<!-- Video Popup -->
		<section id="popup">
			<div class="page-header"><h3></h3><hr class="notop"></div>	
		</section>
		<!--/ End Video Popup -->

		<!-- Faq -->
		<section id="faq">	
		</section>
		<!--/ End Faq -->

		<!-- Credits -->
		<section id="credits">
		<div class="page-header"><h3></h3><hr class="notop"></div>
		
		</section>
		<!--/ End Credits -->

		<!-- Support -->
		<section id="support">
		</section>
		<!--/ End Support --> 

















	</div>
	<script src="{{ asset('doc/assets/js/jquery.js') }}"></script>
	<script src="{{ asset('doc/assets/js/jquery.scrollTo.js') }}"></script>
	<script src="{{ asset('doc/assets/js/jquery.easing.js') }}"></script>
	<script src="{{ asset('doc/assets/js/script.js') }}"></script>	

</body>
</html>
