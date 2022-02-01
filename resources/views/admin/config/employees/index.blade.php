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
     <title>   أوتيل لأدارة الفنادق | موظفين خدمة الغرف</title>
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
                    <h4 class="m-0 font-weight-bold  text-center p-3 mb-2 bg-info text-white">أدارة موظفين خدمة الغرف</h4>
                    <a  href="#exampleModalCenter5"  data-toggle="modal" data-target="#exampleModalCenter5" class="btn btn-info btn-sm"> أضافة غرفة جديدة</a>
                </div>
                {{-- بيانات العملاء --}}
                <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"  name='roomstable' id="roomstable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr  class="table-info text-center">
                                            <th>أسم الموظف</th>
                                            <th>رقم الهاتف</th>
                                            <th>مرتبط بمستخدم</th>
                                            <th>أيقاف</th>
                                           

                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allrooms as $allroom)
                                        <tr class="text-center">
                                            <td>    {{ $allroom->name  }}             </td>
                                            <td>    {{ $allroom->flat_number_in_shomos }}             </td>
                                            <td>    {{ $allroom->level_name }}     </td>
                                            <td>    {{ $allroom->rooms_count}}    </td>
                                            <td>    {{ $allroom->bathroom_count}}    </td>
                                            <td>    {{ $allroom->single_bed_count}}             </td>
                                            <td>    {{ $allroom->double_bed_count}}             </td>
                                            <td>    {{ $allroom->closit_count}}                 </td>
                                            <td>    {{ $allroom->tvs_count}}                 </td>
                                            <td>    {{ $allroom->conditioner_type}}                 </td>
                                            <td>    {{ $allroom->flat_kind}}                 </td>
                                            <td>    {{ $allroom->note}}                 </td>
                                            <td>
                                                <a href="#exampleModalCenter20" data-toggle="modal" data-target="#exampleModalCenter20" class="btn btn-warning btn-sm">عرض</a>
                                                <a href="#exampleModalCenter20"  data-toggle="modal" data-target="#exampleModal20" class="btn btn-info btn-sm">تعديل</a>
                                                    {!! Form::open(['method' => 'DELETE','route' => ['rooms.destroy', $allroom->id],'style'=>'display:inline']) !!}
                                                    {!! Form::submit('حذف', ['class' => 'btn btn-danger btn-sm']) !!}
                                                    {!! Form::close() !!}
                                            </td>
                                        </tr>
                                        @endforeach    
                                    </tbody>
                                    <tfoot>
                                        <tr class="text-center table-info">
                                            <th>أسم الموظف</th>
                                            <th>رقم الهاتف</th>
                                            <th>مرتبط بمستخدم</th>
                                            <th>أيقاف</th>
                                           

                                            <th>العمليات</th>
                                        </tr>
                                    </tfoot>
                                
                                </table>
                            <div class="d-flex">
                                 {!! $allrooms->links() !!}
                            </div>
                            </div>
                        </div>
            </div>
                        <!-- بداية أضافة بيانات العملاء -->
                        <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle5" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle5">أضافة غرفة جديدة</h5>
                                            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                <span style="padding-left:50px;" aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                        <div class="modal-body">
                                                    <form class="form" method="POST" action="{{ route('rooms.create',$allroom->id ) }} " enctype="multipart/form-data" >
                                                        @csrf
                                                            <div class="form-row">
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="name"><span>الاسم</span> </label>
                                                                        <input type="text"  name='name' class="form-control" id="name" >
                                                                    </div>

                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="flat_number_in_shomos"><span>رقم الشقة في شموس</span> </label>
                                                                        <input type="text"  name='flat_number_in_shomos' class="form-control" id="flat_number_in_shomos" >
                                                                    </div>

                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="level_name">الطابق</label>
                                                                        <input type="text"  name='level_name' class="form-control" id="level_name" >
                                                                    </div>


                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="rooms_count">عدد الغرف</label>
                                                                        <input type="text"  name='rooms_count' class="form-control" id="rooms_count" >
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="bathroom_count">عدد دورات المياة</label>
                                                                        <input type="text" name='bathroom_count' class="form-control" id="bathroom_count" >
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="single_bed_count">عدد الأسرة المفردة</label>
                                                                        <input type="text" name='single_bed_count' class="form-control" id="single_bed_count" >
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="double_bed_count">عدد الأسرة المزدوجة</label>
                                                                        <input type="text" name='double_bed_count' class="form-control" id="double_bed_count">
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="closit_count">عدد الخزائن</label>
                                                                        <input type="text" name='closit_count' class="form-control" id="closit_count">
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="tvs_count">عدد التلفزيونات</label>
                                                                        <input type="text"  id="tvs_count" name='tvs_count' class="form-control" id="tvs_count">
                                                                    </div>

                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="conditioner_type">نوع المكيف</label>
                                                                        <select id="conditioner_type" name="conditioner_type" type='text' class="form-control">
                                                                        <option selected>...أختر</option>
                                                                                @foreach ($datahandler['conditionertype'] as $conditionertype => $value)
                                                                                    <option>{{$value}} </option>
                                                                                @endforeach
                                                                        </select>
                                                                    </div>


                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="flat_kind">نوع الغرفة</label>
                                                                        <select id="flat_kind" name="flat_kind" type='text' class="form-control">
                                                                        <option selected>...أختر</option>
                                                                                @foreach ($datahandler['flatkind'] as $flatkind => $value)
                                                                                    <option>{{$value}} </option>
                                                                                @endforeach
                                                                        </select>
                                                                    </div>
                                                                    
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="note">ملاحظات </label>
                                                                        <textarea class="form-control" name='note' id="note" rows="3"></textarea>
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
                                                    <h5 class="modal-title" id="exampleModalCenterTitle20">عرض بيانات الغرفة</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            <div class="modal-body">
                                            <form action="{{route('rooms.show',$allroom->id )}}" method="GET">
                                                @csrf
                                                        <table class="table">
                                                            <thead class="thead-dark">
                                                            <tr class="text-center ">
                                                                <th class="p-3 mb-2 bg-info text-white" scope="col">المعلومات الرئيسية </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody class="text-right">
                                                            <tr>
                                                                <td>الاسم</td>
                                                                <td>{{$allroom->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>رقم الغرفة في شموس</td>
                                                                <td>{{$allroom->flat_number_in_shomos}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>الطابق</td>
                                                                <td>{{$allroom->level_name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>عدد الغرف</td>
                                                                <td>{{$allroom->rooms_count}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>عدد دورات المياة</td>
                                                                <td>{{$allroom->bathroom_count}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>عدد الأسرة المفردة</td>
                                                                <td>{{$allroom->single_bed_count}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>عدد الأسرة المزدوجة</td>
                                                                <td>{{$allroom->double_bed_count}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>عدد الخزائن</td>
                                                                <td>{{$allroom->closit_count}}</td>

                                                            </tr>
                                                            <tr>
                                                                <td>عدد التلفزيونات</td>
                                                                <td>{{$allroom->tvs_count}}</td>

                                                            </tr>
                                                            <tr>
                                                                <td>نوع المكيف</td>
                                                                <td>{{$allroom->conditioner_type}}</td>

                                                            </tr>
                                                            <tr>
                                                                <td>نوع الغرفة</td>
                                                                <td>{{$allroom->flat_kind}}</td>

                                                            </tr>
                                                            <tr>
                                                                <td>ملاحظات</td>
                                                                <td>{{$allroom->note}}</td>

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
                                <h5 class="modal-title" id="exampleModalLabel20">تعديل بيانات الغرفة</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form" method="POST" action="{{ route('rooms.update', $allroom->id )}}" enctype="multipart/form-data" >
                                        @method('patch')
                                        @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="name"><span>الاسم</span> </label>
                                                        <input type="text"  name='name' class="form-control" id="name" value="{{ $allroom->name }}">
                                                    </div>

                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="flat_number_in_shomos"><span>رقم الشقة في شموس</span> </label>
                                                        <input type="text"  name='flat_number_in_shomos' class="form-control" id="flat_number_in_shomos"  value="{{ $allroom->flat_number_in_shomos }}">
                                                    </div>

                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="level_name">الطابق</label>
                                                        <input type="text"  name='level_name' class="form-control" id="level_name"  value="{{ $allroom->level_name }}">
                                                    </div>


                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="rooms_count">عدد الغرف</label>
                                                        <input type="text"  name='rooms_count' class="form-control" id="rooms_count" value="{{ $allroom->rooms_count }}">
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="bathroom_count">عدد دورات المياة</label>
                                                        <input type="text" name='bathroom_count' class="form-control" id="bathroom_count"  value="{{ $allroom->bathroom_count }}">
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="single_bed_count">عدد الأسرة المفردة</label>
                                                        <input type="text" name='single_bed_count' class="form-control" id="single_bed_count"  value="{{ $allroom->single_bed_count }}">
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="double_bed_count">عدد الأسرة المزدوجة</label>
                                                        <input type="text" name='double_bed_count' class="form-control" id="double_bed_count" value="{{ $allroom->double_bed_count }}">
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="closit_count">عدد الخزائن</label>
                                                        <input type="text" name='closit_count'  class="form-control" id="closit_count" value="{{ $allroom->closit_count }} ">
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="tvs_count">عدد التلفزيونات</label>
                                                        <input type="text"  id="tvs_count" value="{{ $allroom->tvs_count}}"  name='tvs_count' class="form-control" id="tvs_count">
                                                    </div>

                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="conditioner_type">نوع المكيف</label>
                                                        <select id="conditioner_type" name="conditioner_type" type='text' class="form-control">
                                                        <option selected>...أختر</option>
                                                                @foreach ($datahandler['conditionertype'] as $conditionertype => $value)
                                                                    <option>{{$value}} </option>
                                                                @endforeach
                                                        </select>
                                                    </div>


                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="flat_kind">نوع الغرفة</label>
                                                        <select id="flat_kind" name="flat_kind" type='text' class="form-control">
                                                        <option selected>...أختر</option>
                                                                @foreach ($datahandler['flatkind'] as $flatkind => $value)
                                                                    <option>{{$value}} </option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="note">ملاحظات </label>
                                                        <textarea class="form-control" name='note'  value="{{ $allroom->note }}" id="note" rows="3"></textarea>
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
