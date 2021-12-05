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
        
        <form action="{{ route('bookings.create')}}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>رقم العقد:</strong>
                        <input type="text" name="contract_no" class="form-control" placeholder="رقم العقد">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>حالة الحجز:</strong>
                        <textarea class="form-control" style="height:150px" name="booking_status" placeholder="حالة الحجز"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>الشقة:</strong>
                        <input type="text" name="flat" class="form-control" placeholder="الشقة">
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>نوع الشقة:</strong>
                        <input type="text" name="flat_kind" class="form-control" placeholder="نوع الشقة">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>دخول في:</strong>
                        <textarea class="form-control" style="height:150px" name="sign_in" placeholder="دخول في"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>خروج في:</strong>
                        <input type="text" name="sign_out" class="form-control" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>المدة:</strong>
                        <textarea class="form-control" style="height:150px" name="duration" placeholder="Enter Description"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>الايجار:</strong>
                        <input type="text" name="rent_value" class="form-control" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>القيمة:</strong>
                        <textarea class="form-control" style="height:150px" name="amount" placeholder="Enter Description"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>الضريبة:</strong>
                        <input type="text" name="taxes" class="form-control" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>الأجمالي:</strong>
                        <textarea class="form-control" style="height:150px" name="total" placeholder="Enter Description"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>التأمينات:</strong>
                        <input type="text" name="insurances" class="form-control" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>المدفوع:</strong>
                        <textarea class="form-control" style="height:150px" name="paid_up" placeholder="Enter Description"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>الرصيد:</strong>
                        <textarea class="form-control" style="height:150px" name="Balance" placeholder="Enter Description"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">أدخال</button>
                </div>
            </div>
        </form>
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