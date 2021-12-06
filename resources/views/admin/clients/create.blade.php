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
        var table = $('#guestsTable').DataTable({
            //processing: true,
            serverSide: true,
            ajax: "{{ route('edit_clients') }}",
            columns: [
                {data: 'DT_RowIndex',           name: 'DT_RowIndex'},
                
                {data: 'name',                  name: 'name'},
                {data: 'guest_type',            name: 'guest_type'},
                {data: 'approve_type',          name: 'approve_type'},
                {data: 'place_of_issue',        name: 'place_of_issue'},
                {data: 'date_of_birth',         name: 'date_of_birth'},
                {data: 'email',                 name: 'email'},
                {data: 'phone_of_work',         name: 'phone_of_work'},
                {data: 'category',              name: 'category'},
                {data: 'nationalty',            name: 'nationalty'},
                {data: 'id_copy',               name: 'id_copy'},
                {data: 'date_of_expiry',        name: 'date_of_expiry'},
                {data: 'kind',                  name: 'kind'},
                {data: 'phone',                 name: 'phone'},
                {data: 'place_of_work',         name: 'place_of_work'},
                {data: 'address',               name: 'address'},
                {data: 'note',                  name: 'note'},
                {data: 'notes_2',               name: 'notes_2'},
                
                {data: 'action',                name: 'action'}
            ]
        });
    });
  </script>
</body>

</html>



        