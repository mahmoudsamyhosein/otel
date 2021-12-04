<!DOCTYPE html>
<html lang="en">
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
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-center">الحجوزات</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered"  name='bookingTable' id="bookingTable" width="10%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>رقم العقد</th>
                                <th>حالة الحجز	</th>
                                <th>الشقة	</th>
                                <th>نوع الشقة</th>
                                <th>نوع الحجز</th>
                                <th>دخول في</th>
                                <th>خروج في</th>
                                <th>المدة</th>
                                <th>الايجار</th>
                                <th>المبلغ</th>
                                <th>الضرائب</th>
                                <th>الاجمالي</th>
                                <th>التأمينات</th>
                                <th>المدفوع</th>
                                <th>الرصيد</th>
                                <th>العمليات</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $bookings as $booking )
                                <tr>
                                    <td> {{ $booking->contract_no }}</td>
                                    
                                    <td> {{ $booking->booking_status }}</td>
                                    <td> {{ $booking->flat }}</td>  
                                    <td> {{ $booking->flat_kind }}</td> 
                                    <td> {{ $booking->booking_kind }}</td> 
                                    <td> {{ $booking->sign_in }}</td> 
                                    <td> {{ $booking->sign_out }}</td> 
                                    <td> {{ $booking->duration }}</td> 
                                    <td> {{ $booking->rent_value }}</td>
                                    <td> {{ $booking->amount }}</td>
                                    <td> {{ $booking->taxes }}</td>
                                    <td> {{ $booking->total }}</td>
                                    <td> {{ $booking->insurances }}</td>                        
                                    <td> {{ $booking->paid_up }}</td>
                                    <td> {{ $booking->Balance }}</td>
                                  
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>رقم العقد</th>
                                <th>حالة الحجز	</th>
                                <th>الشقة	</th>
                                <th>نوع الشقة</th>
                                <th>نوع الحجز</th>
                                <th>دخول في</th>
                                <th>خروج في</th>
                                <th>المدة</th>
                                <th>الايجار</th>
                                <th>المبلغ</th>
                                <th>الضرائب</th>
                                <th>الاجمالي</th>
                                <th>التأمينات</th>
                                <th>المدفوع</th>
                                <th>الرصيد</th>
                                <th>العمليات</th>
                            </tr>
                        </tfoot>
                     
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
@include('admin/theme/js')
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#bookingTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('bookings') }}",
            columns: [
                {data: 'DT_RowIndex',             name: 'DT_RowIndex'},
                {data: 'action',                  name: 'action'}
            ]
            
        });
    });

</body>

</html>