{{-- بسم الله الرحمن الرحيم --}}
<!DOCTYPE html>
<html lang="ar">
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
        <form class="form" method="POST" action=" 'lang/ar/radix.php' " enctype="multipart/form-data" >
            @method('patch')
            @csrf
                <h2  class="text-center" for="auth"> الهيدر</h2>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered"  width="100%" cellspacing="0">
                                            <thead>
                                                <tr  class="table-info text-center">
                                                    <th>الكلمة بالأنجيلزية</th>
                                                    <th>الترجمة</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 
                                            </tbody>
                                            <tfoot>
                                                <tr class="text-center table-info">
                                                    <th>الكلمة بالأنجيلزية</th>
                                                    <th>الترجمة</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                <h2  class="text-center" for="auth">السلايدر</h2>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered"  width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr  class="table-info text-center">
                                                            <th>الكلمة بالأنجيلزية</th>
                                                            <th>الترجمة</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                         
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="text-center table-info">
                                                            <th>الكلمة بالأنجيلزية</th>
                                                            <th>الترجمة</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                <h2  class="text-center" for="auth"> عن  الموقع </h2>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered"  width="100%" cellspacing="0">
                                                            <thead>
                                                                <tr  class="table-info text-center">
                                                                    <th>الكلمة بالأنجيلزية</th>
                                                                    <th>الترجمة</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                 
                                                            </tbody>
                                                            <tfoot>
                                                                <tr class="text-center table-info">
                                                                    <th>الكلمة بالأنجيلزية</th>
                                                                    <th>الترجمة</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                <h2  class="text-center" for="auth"> الخدمات</h2>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered"  width="100%" cellspacing="0">
                                                                    <thead>
                                                                        <tr  class="table-info text-center">
                                                                            <th>الكلمة بالأنجيلزية</th>
                                                                            <th>الترجمة</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                         
                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr class="text-center table-info">
                                                                            <th>الكلمة بالأنجيلزية</th>
                                                                            <th>الترجمة</th>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                <h2  class="text-center" for="auth"> calltoaction</h2>
                                                                <div class="card-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered"  width="100%" cellspacing="0">
                                                                            <thead>
                                                                                <tr  class="table-info text-center">
                                                                                    <th>الكلمة بالأنجيلزية</th>
                                                                                    <th>الترجمة</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                 
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr class="text-center table-info">
                                                                                    <th>الكلمة بالأنجيلزية</th>
                                                                                    <th>الترجمة</th>
                                                                                </tr>
                                                                            </tfoot>
                                                                        </table>
                <h2  class="text-center" for="auth">الحقائق</h2>
                                                                        <div class="card-body">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered"  width="100%" cellspacing="0">
                                                                                    <thead>
                                                                                        <tr  class="table-info text-center">
                                                                                            <th>الكلمة بالأنجيلزية</th>
                                                                                            <th>الترجمة</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                         
                                                                                    </tbody>
                                                                                    <tfoot>
                                                                                        <tr class="text-center table-info">
                                                                                            <th>الكلمة بالأنجيلزية</th>
                                                                                            <th>الترجمة</th>
                                                                                        </tr>
                                                                                    </tfoot>
                                                                                </table>
                <h2  class="text-center" for="auth"> البروفايو</h2>
                                                                                <div class="card-body">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table table-bordered"  width="100%" cellspacing="0">
                                                                                            <thead>
                                                                                                <tr  class="table-info text-center">
                                                                                                    <th>الكلمة بالأنجيلزية</th>
                                                                                                    <th>الترجمة</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                 
                                                                                            </tbody>
                                                                                            <tfoot>
                                                                                                <tr class="text-center table-info">
                                                                                                    <th>الكلمة بالأنجيلزية</th>
                                                                                                    <th>الترجمة</th>
                                                                                                </tr>
                                                                                            </tfoot>
                                                                                        </table>
                <h2  class="text-center" for="auth"> الشركاء</h2>
                                                                                        <div class="card-body">
                                                                                            <div class="table-responsive">
                                                                                                <table class="table table-bordered"  width="100%" cellspacing="0">
                                                                                                    <thead>
                                                                                                        <tr  class="table-info text-center">
                                                                                                            <th>الكلمة بالأنجيلزية</th>
                                                                                                            <th>الترجمة</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                         
                                                                                                    </tbody>
                                                                                                    <tfoot>
                                                                                                        <tr class="text-center table-info">
                                                                                                            <th>الكلمة بالأنجيلزية</th>
                                                                                                            <th>الترجمة</th>
                                                                                                        </tr>
                                                                                                    </tfoot>
                                                                                                </table>
                <h2  class="text-center" for="auth"> الفوتور</h2>
                                                                                        <div class="card-body">
                                                                                            <div class="table-responsive">
                                                                                                <table class="table table-bordered"  width="100%" cellspacing="0">
                                                                                                    {{-- <thead>
                                                                                                        <tr  class="table-info text-center">
                                                                                                            <th>جميع التعديلات  التي تتم هنا يتم تحدبثها تلفائيا</th>
                                                                                                        </tr>
                                                                                                    </thead> --}}
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td>العنوان</td>
                                                                                                            <td>روابط تهمك</td>
                                                                                                            <td>تويتر</td>
                                                                                                            <td>القائمة البريدية</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>   
                                                                                                        </tr>
                                                                                                            
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                        <tr>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>    
                                                                                                        </tr>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                        <tr>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>    
                                                                                                        </tr>
                                                                                                         
                                                                                                    </tbody>
                                                                                                    {{-- <tfoot>
                                                                                                        <tr class="text-center table-info">
                                                                                                            <th>من فضلك ألتزم بشرح العناصر حتي تحصل علي أفضل نتيجة</th>
                                                                                                            
                                                                                                        </tr>
                                                                                                    </tfoot> --}}
                                                                                                </table>
        </form>
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
