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
    <!-- Bootstrap Date-Picker Plugin -->
<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
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
            <!-- هيدر العملاء -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold  text-center p-3 mb-2 bg-info text-white"> أدارة التصنيفات  </h4>
                    <a  href="#exampleModalCenter5"  data-toggle="modal" data-target="#exampleModalCenter5" class="btn btn-info btn-sm">أضافة تصنيف جديد</a>
                </div>
                {{-- بيانات العملاء --}}
                <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"  name='guestsTable' id="guestsTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr  class="table-info text-center">
                                            <th>رقم</th>
                                            <th> الاسم بالعربية</th>
                                            <th>الأسم بالأنجليزية</th>
                                            <th>الخصم</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allcatgories as $allcatgory)
                                        <tr class="text-center">
                                            <td>    {{ $allcatgory->category_id }}  </td>
                                            <td>    {{ $allcatgory->eng_name }}     </td>
                                            <td>    {{ $allcatgory->ar_name}}       </td>
                                            <td>    {{ $allcatgory->discount}}      </td>
                                            
                                            <td>
                                                <a href="#exampleModalCenter20" data-toggle="modal" data-target="#exampleModalCenter20" class="btn btn-warning btn-sm">عرض</a>
                                                <a href="#exampleModalCenter20"  data-toggle="modal" data-target="#exampleModal20" class="btn btn-info btn-sm">تعديل</a>
                                                    {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $allcatgory->category_id],'style'=>'display:inline']) !!}
                                                    {!! Form::submit('حذف', ['class' => 'btn btn-danger btn-sm']) !!}
                                                    {!! Form::close() !!}
                                            </td>
                                        </tr>
                                        @endforeach    
                                    </tbody>
                                    <tfoot>
                                        <tr class="text-center table-info">
                                            <th>رقم</th>
                                            <th> الاسم بالعربية</th>
                                            <th>الأسم بالأنجليزية</th>
                                            <th>الخصم</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </tfoot>
                                
                                </table>
                            <div class="d-flex">
                                 {!! $allcatgories->links() !!}
                            </div>
                            </div>
                        </div>
            </div>
                        <!-- بداية أضافة بيانات العملاء -->
                        <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle5" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle5">أضافة تصنيف جديد</h5>
                                            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                <span style="padding-left:50px;" aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                        <div class="modal-body">
                                                    <form class="form" method="POST" action="{{ route('categories.create',$allcatgory->id ) }} " enctype="multipart/form-data" >
                                                        @csrf
                                                            <div class="form-row">
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="eng_name"><span>الأسم بالأنجليزية</span> </label>
                                                                        <input type="text"  name='eng_name' class="form-control" id="eng_name" >
                                                                    </div>

                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="ar_name"><span>الأسم بالعربية</span> </label>
                                                                        <input type="text"  name='ar_name' class="form-control" id="ar_name" >
                                                                    </div>

                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="discount"><span>الخصم</span> </label>
                                                                        <input type="text"  name='discount' class="form-control" id="discount" >
                                                                    </div>

                                                                    
                                                            </div>
                                                        <button type="submit" class="btn btn-primary">أرسال</button>
                                                    </form>
                                        </div>
                                </div>
                        </div>
                        </div>                                                
                        <!-- نهاية أضافة بيانات العملاء -->
                         {{-- programedbyMSHM --}}
               <!-- بداية عرض  بيانات العملاء -->
                        <div class="modal fade" id="exampleModalCenter20" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle20" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle20">عرض بيانات العميل  </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            <div class="modal-body">
                                            <form action="{{route('categories.show',$allcatgory->category_id )}}" method="GET">
                                                @csrf
                                                        <table class="table">
                                                            <thead class="thead-dark">
                                                            <tr class="text-center ">
                                                                <th class="p-3 mb-2 bg-info text-white" scope="col">المعلومات الرئيسية </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody class="text-right">
                                                            <tr>
                                                                <td>الرقم</td>
                                                                <td>{{$allcatgory->category_id}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>الأسم بالأنجليزية</td>
                                                                <td>{{$allcatgory->eng_name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>الأسم بالعربية</td>
                                                                <td>{{$allcatgory->ar_name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>الخصم</td>
                                                                <td>{{$allcatgory->discount}}</td>
                                                            </tr>
                                                            
                                                            </tbody>
                                                        </table>
                                            </form>
                                            </div>

                                        </div>  
                                </div>
                        </div>
                    <!-- نهاية عرض  بيانات العملاء --> 
                     {{-- programedbyMSHM                         --}}
                         <!-- Modal -->
                        <div class="modal fade" id="exampleModal20" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel20" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel20">تعديل التصنيف</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form" method="POST" action="{{ route('categories.update', $allcatgory->category_id )}}" enctype="multipart/form-data" >
                                        @method('patch')
                                        @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="eng_name"><span>الأسم بالأنجليزية</span> </label>
                                                        <input type="text"  name='eng_name' class="form-control" id="eng_name" >
                                                    </div>

                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="ar_name"><span>الأسم بالعربية</span> </label>
                                                        <input type="text"  name='ar_name' class="form-control" id="ar_name" >
                                                    </div>

                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="discount"><span>الخصم</span> </label>
                                                        <input type="text"  name='discount' class="form-control" id="discount" >
                                                    </div>                                 
                                                </div>
                                            </div>
                                        <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">أغلاق</button>
                                                <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
                                        </div>
                                    </form>
                                    
                            </div>
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
{{-- <script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datepicker({
            locale: 'en'
           
        });
        $('#datenew').datepicker({
            locale: 'en'
           
        }); 
        $('#datetimepicker5').datepicker({
            locale: 'en'
           
        }); 
        $('#datetimepicker4').datepicker({
            locale: 'en'
           
        });  
    });
 </script> --}}
</body>

</html>
