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
      <title>أوتيل  لادارة الفنادق |  ترجمة الموقع </title>
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
                <h2  class="text-center" for="auth"> ترجمة ملف الثيم </h2>
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
                                                @foreach ($radixs as $radix )
                                                <tr class="text-center">
                                                    <td><textarea value="{{ $radix }}" class="form-control" placeholder="{{ $radix }}"></textarea></td>      
                                                   <td><input type="text" name="{{ $radix }}" class="form-control" id="auth"></td>
                                                </tr>
                                                @endforeach    
                                            </tbody>
                                            <tfoot>
                                                <tr class="text-center table-info">
                                                    <th>الكلمة بالأنجيلزية</th>
                                                    <th>الترجمة</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                <h2  class="text-center">ترجمة auth</h2>
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
                                                    @foreach ($au2ths as $au2th )
                                                    <tr class="text-center">
                                                        <td><textarea value="{{ $au2th }}" class="form-control" placeholder="{{ $au2th }}"></textarea></td>      
                                                    <td><input type="text" name="{{ $au2th }}" class="form-control" id="auth"></td>
                                                    </tr>
                                                    @endforeach    
                                                </tbody>
                                                <tfoot>
                                                    <tr class="text-center table-info">
                                                        <th>الكلمة بالأنجيلزية</th>
                                                        <th>الترجمة</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
            
     
                <h2  class="text-center">ترجمة pagination</h2>
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
                                                @foreach ( $pag2inations as  $pag2ination  )
                                                <tr class="text-center">
                                                    <td><textarea value="{{  $pag2ination  }}"  class="form-control" placeholder="{{  $pag2ination  }}"></textarea></td>      
                                                   <td><input type="text" name="{{  $pag2ination  }}" class="form-control" id="auth"></td>
                                                </tr>
                                                @endforeach    
                                            </tbody>
                                            <tfoot>
                                                <tr class="text-center table-info">
                                                    <th>الكلمة بالأنجيلزية</th>
                                                    <th>الترجمة</th>
                                                </tr>
                                            </tfoot>
                                        </table>
        
                <h2  class="text-center">ترجمة password</h2>

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
                                                    @foreach ($pass2words as $pass2word )
                                                    <tr class="text-center">
                                                        <td><textarea value="{{ $pass2word }}" class="form-control" placeholder="{{ $pass2word }}"></textarea></td>      
                                                    <td><input type="text" name="{{ $pass2word }}" class="form-control" id="auth"></td>
                                                    </tr>
                                                    @endforeach    
                                                </tbody>
                                                <tfoot>
                                                    <tr class="text-center table-info">
                                                        <th>الكلمة بالأنجيلزية</th>
                                                        <th>الترجمة</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                {{-- <h2  class="text-center">ترجمة validations</h2>

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
                                                            @foreach ($vali2dations as $vali2dation)
                                                            <tr class="text-center">
                                                                <td><textarea value="{{ $vali2dation }}" class="form-control" placeholder="{{ $vali2dation }}"></textarea></td>      
                                                            <td><input type="text" name="{{ $vali2dation }}" class="form-control" id="auth"></td>
                                                            </tr>
                                                            @endforeach    
                                                        </tbody>
                                                        <tfoot>
                                                            <tr class="text-center table-info">
                                                                <th>الكلمة بالأنجيلزية</th>
                                                                <th>الترجمة</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                     --}}
                                            
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">أغلاق</button>
                        <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
                </div>
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
