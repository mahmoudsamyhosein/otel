{{-- بسم الله الرحمن الرحيم --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>   أوتيل  لادارة الفنادق | العملاء </title>
    @include('admin/theme/css')
</head>
<body id="page-top" dir="rtl">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('admin\theme.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('admin/theme.topbar')
                <!-- Begin Page Content -->
                <div class="container-fluid">  
            </div>
            <!-- End of Main Content -->
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="text-center">
            <h2>الأعدادات</h2>
        </div>
        <!-- Color System -->
        <div class="row text-center" >
            {{-- <div class="col-lg-6 mb-4 ">
                <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                        <a href="">أعدادات أسعار الشقق</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-success text-white shadow">
                    <div class="card-body">
                       <a href=""> أدارة المستخدمين</a>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-info text-white shadow">
                    <div class="card-body">
                       <a href="">أعدادات الرسائل</a> 
                        
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-6 mb-4">
                <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                        <a href="{{ route('Rush_Hours.index') }}">اعدادات أوقات الذروة</a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6 mb-4">
                <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                        
                     <a href="">اعدادات الحجوزات</a>   
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                       
                        <a href=""> اعدادات بيانات الشركة</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-light text-black shadow">
                    <div class="card-body">
                        
                      <a href="">اعدادات شروط التعاقد</a>  
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-dark text-white shadow">
                    <div class="card-body">
                    <a href="">اعدادات بنود الصرف</a>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                        <a href="">الحسابات</a>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-success text-white shadow">
                    <div class="card-body">
                        <a href="">أدارة الخدمات</a>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-info text-white shadow">
                    <div class="card-body">
                        <a href="">الأسماء في شموس</a>
                        
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-6 mb-4">
                <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                        <a href="{{ route ('categories.index') }}">تصنيف العملاء</a>
                        
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6 mb-4">
                <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                        <a href="">أدارة الضرائب والرسوم</a>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                       <a href=""> الأثاث</a>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-light text-black shadow">
                    <div class="card-body">
                      <a href="">اسعار أنواع الشقق</a>
                        
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-6 mb-4">
                <div class="card bg-dark text-white shadow">
                    <div class="card-body">
                       <a href="{{ route('rooms.index')}}"> أعدادات الغرف</a>
                        
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6 mb-4">
                <div class="card bg-dark text-white shadow">
                    <div class="card-body">
                       <a href="">أدارة الأشتراكات</a> 
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-dark text-white shadow">
                    <div class="card-body">
                       <a href=""> موظفين خدمة الغرف </a>
                    </div>
                </div>
            </div> --}}
        </div>
           
    </div>
<!-- End of Main Content -->
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>جميع الحقوق محفوظة &copy; أوتيل 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
@include('admin/theme/js')

</body>

</html>
