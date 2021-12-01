<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    @include('admin/theme.css')

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
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-center"> العملاء </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>الاسم</th>
                                <th>نوع الاثبات	</th>
                                <th>رقم الأثبات	</th>
                                <th>مكان الاصدار</th>
                                <th>جوال</th>
                                <th>البريد الالكتروني</th>
                                <th>العمليات</th>
                                
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>الاسم</th>
                                <th>نوع الاثبات	</th>
                                <th>رقم الأثبات	</th>
                                <th>مكان الاصدار</th>
                                <th>جوال</th>
                                <th>البريد الالكتروني</th>
                                <th>العمليات</th>
                                
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>{{ $table_of_clients }}</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <th><ul>
                                    <li><i class="fas fa-fw fa-table"></i>
                                    <li><i class="fas fa-fw fa-table"></i>
                                    <li><i class="fas fa-fw fa-table"></i>
                                    </ul>
                                </th>
                            </tr>
                            
                             
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

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
@include('admin/theme.js')
</body>

</html>