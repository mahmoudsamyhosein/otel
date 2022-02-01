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
            <!-- هيدر العملاء -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold  text-center p-3 mb-2 bg-info text-white">أوقات الذروة</h4>
                    <a  href="#exampleModalCenter5"  data-toggle="modal" data-target="#exampleModalCenter5" class="btn btn-info btn-sm">أضافة وقت ذروة جديد</a>
                </div>
                {{-- بيانات العملاء --}}
                <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr  class="table-info text-center">
                                            <th>من</th>
                                            <th>الي</th>
                                            <th>التصنيف</th>
                                            <th>السبت</th>
                                            <th>الأحد</th>
                                            <th>الأثنين</th>
                                            <th>الثلاثاء</th>
                                            <th>الأربعاء</th>
                                            <th>الخميس</th>
                                            <th>الجمعة</th>
                                            

                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_Rush_Hours as $all_Rush_Hour)
                                        <tr class="text-center">
                                            <td>{{ $all_Rush_Hour->from }}</td>
                                            <td>{{ $all_Rush_Hour->to }}</td>
                                            <td>{{ $all_Rush_Hour->category }}</td>
                                            <td>{{ $all_Rush_Hour->sa }}</td>
                                            <td>{{ $all_Rush_Hour->su }}</td>
                                            <td>{{ $all_Rush_Hour->mo }}</td>
                                            <td>{{ $all_Rush_Hour->tu }}</td>
                                            <td>{{ $all_Rush_Hour->we }}</td>
                                            <td>{{ $all_Rush_Hour->th }}</td>
                                            <td>{{ $all_Rush_Hour->fr }}</td>
                                            
                                            <td>
                                                <a href="#exampleModalCenter20" data-toggle="modal" data-target="#exampleModalCenter20" class="btn btn-warning btn-sm">عرض</a>
                                                <a href="#exampleModalCenter20"  data-toggle="modal" data-target="#exampleModal20" class="btn btn-info btn-sm">تعديل</a>
                                                    {!! Form::open(['method' => 'DELETE','route' => ['Rush_Hours.destroy', $all_Rush_Hour->id],'style'=>'display:inline']) !!}
                                                    {!! Form::submit('حذف', ['class' => 'btn btn-danger btn-sm']) !!}
                                                    {!! Form::close() !!}
                                            </td>
                                        </tr>
                                        @endforeach    
                                    </tbody>
                                    <tfoot>
                                        <tr class="text-center table-info">
                                            <th>من</th>
                                            <th>الي</th>
                                            <th>التصنيف</th>
                                            <th>السبت</th>
                                            <th>الأحد</th>
                                            <th>الأثنين</th>
                                            <th>الثلاثاء</th>
                                            <th>الأربعاء</th>
                                            <th>الخميس</th>
                                            <th>الجمعة</th>
                                            

                                            <th>العمليات</th>
                                        </tr>
                                    </tfoot>
                                
                                </table>
                            <div class="d-flex">
                                 {!! $all_Rush_Hours->links() !!}
                            </div>
                            </div>
                        </div>
            </div>
                        <!-- بداية أضافة بيانات العملاء -->
                        <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle5" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle5">أضافة وقت ذروة جديد</h5>
                                            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                <span style="padding-left:50px;" aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                        <div class="modal-body">
                                                    <form class="form" method="POST" action="{{ route('Rush_Hours.create',$all_Rush_Hour->id ) }} " enctype="multipart/form-data" >
                                                        @csrf
                                                            <div class="form-row">
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="from"><span>من</span> </label>
                                                                        <input type="text"  name='from' class="form-control" id="from" >
                                                                    </div>

                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="to"><span>الي</span> </label>
                                                                        <input type="text"  name='to' class="form-control" id="to" >
                                                                    </div>

                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="category">التصنيف</label>
                                                                        <input type="text"  name='category' class="form-control" id="category" >
                                                                    </div>


                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="sa">السبت</label>
                                                                        <input type="text"  name='sa' class="form-control" id="sa" >
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="su">الأحد</label>
                                                                        <input type="text" name='su' class="form-control" id="su" >
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="mo">الأثنين</label>
                                                                        <input type="text" name='mo' class="form-control" id="mo" >
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="tu">الثلاثاء</label>
                                                                        <input type="text" name='tu' class="form-control" id="tu">
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="we">الأربعاء</label>
                                                                        <input type="text" name='we' class="form-control" id="we">
                                                                    </div>

                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="th">الخميس</label>
                                                                        <input type="text"  id="th" name='th' class="form-control" id="th">
                                                                    </div>

                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="fr">الجمعة</label>
                                                                        <input type="text"  id="fr" name='fr' class="form-control" id="fr">
                                                                    </div>
                                                            </div>
                                                        <button type="submit" class="btn btn-primary">أضافة</button>
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
                                                    <h5 class="modal-title" id="exampleModalCenterTitle20">عرض بيانات وقت الذروة</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            <div class="modal-body">
                                            <form action="{{route('Rush_Hours.show',$all_Rush_Hour->id )}}" method="GET">
                                                @csrf
                                                        <table class="table">
                                                            <thead class="thead-dark">
                                                            <tr class="text-center ">
                                                                <th class="p-3 mb-2 bg-info text-white" scope="col">المعلومات الرئيسية </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody class="text-right">
                                                            <tr>
                                                                <td>من</td>
                                                                <td>{{$all_Rush_Hour->from}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>الي</td>
                                                                <td>{{$all_Rush_Hour->to}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>التصنيف</td>
                                                                <td>{{$all_Rush_Hour->category}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>السبت</td>
                                                                <td>{{$all_Rush_Hour->sa}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>الأحد</td>
                                                                <td>{{$all_Rush_Hour->su}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>الأثنين</td>
                                                                <td>{{$all_Rush_Hour->mo}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>الثلاثاء</td>
                                                                <td>{{$all_Rush_Hour->tu}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>الأربعاء</td>
                                                                <td>{{$all_Rush_Hour->we}}</td>

                                                            </tr>
                                                            <tr>
                                                                <td>الخميس</td>
                                                                <td>{{$all_Rush_Hour->th}}</td>

                                                            </tr>
                                                            <tr>
                                                                <td>الجمعة</td>
                                                                <td>{{$all_Rush_Hour->fr}}</td>

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
                                <h5 class="modal-title" id="exampleModalLabel20">تعديل بيانات وقت الذروة</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form" method="POST" action="{{ route('Rush_Hours.update', $all_Rush_Hour->id )}}" enctype="multipart/form-data" >
                                        @method('patch')
                                        @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="from"><span>من</span> </label>
                                                        <input type="text"  name='from' class="form-control" id="from" >
                                                    </div>

                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="to"><span>الي</span> </label>
                                                        <input type="text"  name='to' class="form-control" id="to" >
                                                    </div>

                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="category">التصنيف</label>
                                                        <input type="text"  name='category' class="form-control" id="category" >
                                                    </div>

                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="sa">السبت</label>
                                                        <input type="text"  name='sa' class="form-control" id="sa" >
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="su">الأحد</label>
                                                        <input type="text" name='su' class="form-control" id="su" >
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="mo">الأثنين</label>
                                                        <input type="text" name='mo' class="form-control" id="mo" >
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="tu">الثلاثاء</label>
                                                        <input type="text" name='tu' class="form-control" id="tu">
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="we">الأربعاء</label>
                                                        <input type="text" name='we' class="form-control" id="we">
                                                    </div>

                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="th">الخميس</label>
                                                        <input type="text"  id="th" name='th' class="form-control" id="th">
                                                    </div>

                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="fr">الجمعة</label>
                                                        <input type="text"  id="fr" name='fr' class="form-control" id="fr">
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

</body>

</html>
