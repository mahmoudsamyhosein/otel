{{-- بسم الله الرحمن الرحيم --}}
<!DOCTYPE html>
<html lang="en">
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
                    <h6 class="m-0 font-weight-bold text-primary text-center"> أدارة العملاء </h6>
                    <a  href="#exampleModalCenter5"  data-toggle="modal" data-target="#exampleModalCenter5" class="btn btn-info btn-sm"> أضافة عميل جديد</a>
                </div>
                {{-- بيانات العملاء --}}
                <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"  name='guestsTable' id="guestsTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr  class="table-info">
                                            <th>رقم</th>
                                            <th>الاسم</th>
                                            <th>نوع الاثبات	</th>
                                            <th>رقم الأثبات	</th>
                                            <th>مكان الاصدار</th>
                                            <th>جوال</th>
                                            <th>البريد الالكتروني</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allclients as $allclient)
                                        <tr>
                                            <td>    {{ $allclient->id   }}             </td>
                                            <td>    {{ $allclient->name }}             </td>
                                            <td>    {{ $allclient->approve_type }}     </td>
                                            <td>    {{ $allclient->approve_number}}    </td>
                                            <td>    {{ $allclient->place_of_issue}}    </td>
                                            <td>    {{ $allclient->phone}}             </td>
                                            <td>    {{ $allclient->email}}             </td>
                                            <td>
                                                <a href="#exampleModalCenter" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-warning btn-sm">عرض</a>
                                                <a href="#exampleModalCenter1" data-toggle="modal" data-target="#exampleModalCenter1" class="btn btn-info btn-sm">تعديل</a>   
                                                    {!! Form::open(['method' => 'DELETE','route' => ['clients.destroy', $allclient->id],'style'=>'display:inline']) !!}
                                                    {!! Form::submit('حذف', ['class' => 'btn btn-danger btn-sm']) !!}
                                                    {!! Form::close() !!}
                                            </td>
                                        </tr>
                                        @endforeach    
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>رقم</th>
                                            <th>الاسم</th>
                                            <th>نوع الاثبات	</th>
                                            <th>رقم الأثبات	</th>
                                            <th>مكان الاصدار</th>
                                            <th>جوال</th>
                                            <th>البريد الالكتروني</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </tfoot>
                                
                                </table>
                            <div class="d-flex">
                                 {!! $allclients->links() !!}
                            </div>

                            
                            </div>
                        </div>
            </div>
                        <!-- بداية أضافة بيانات العملاء -->
                        <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle5" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle5">أضافة عميل جديد</h5>
                                            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                <span style="padding-left:50px;" aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                        <div class="modal-body">
                                                    <form class="form" method="POST" action="" enctype="multipart/form-data" >
                                                        @csrf
                                                            <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4"><span>الاسم بالكامل</span> </label>
                                                                        <input type="text"  name='name' class="form-control" id="inputEmail4" >
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputState">نوع العميل</label>
                                                                        <select id="inputState"  type='text' class="form-control">
                                                                        <option selected>...أختر</option>
                                                                        @php $formhandler = include(resource_path('countries/countries.php')); @endphp
                                                                            @foreach ($formhandler['client_type'] as $client_type => $value)
                                                                                <option value="{{$client_type}}">{{$value}} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputState">نوع الأثبات</label>
                                                                        <select id="inputState"  type='text' class="form-control">
                                                                        <option selected>...أختر</option>
                                                                            @foreach ($formhandler['guest_type'] as $guest_type => $value)
                                                                                <option value="{{$guest_type}}">{{$value}} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputState">نسخة البطاقة</label>
                                                                        <select id="inputState"  type='text' class="form-control">
                                                                        <option selected>...أختر</option>   
                                                                            <option>
                                                                                  @php
                                                                                    $num =1;
                                                                                    while($num <= 30){  echo '<option>'; echo $num++; echo '</option>';  }
                                                                                  @endphp
                                                                            </option>        
                                                                        </select>
                                                                    </div>


                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputState">التصنيف</label>
                                                                        <select id="inputState"  type='text' class="form-control">
                                                                        <option selected>...أختر</option>
                                                                            @php $formhandler = include(resource_path('countries/countries.php')); @endphp
                                                                            @foreach ($formhandler['categories'] as $categories => $value)
                                                                                <option value="{{$categories}}">{{$value}} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    


                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputState">الجنس</label>
                                                                        <select id="inputState"  type='text' class="form-control">
                                                                        <option selected>...أختر</option>
                                                                            @php $formhandler = include(resource_path('countries/countries.php')); @endphp
                                                                            @foreach ($formhandler['nationalty'] as $nationalty => $value)
                                                                                <option value="{{$nationalty}}">{{$value}} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputState">الجنسية</label>
                                                                        <select id="inputState" name='kind' type='text' class="form-control">
                                                                        <option selected>...أختر</option>
                                                                            @php $formhandler = include(resource_path('countries/countries.php')); @endphp
                                                                            @foreach ($formhandler['kind'] as $kind => $value)
                                                                                <option value="{{$kind}}">{{$value}} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>


                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputPassword4">رقم الجوال</label>
                                                                        <input type="text" name='phone' class="form-control" id="inputPassword4" >
                                                                    </div>


                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputAddress">مكان العمل</label>
                                                                        <input type="text" name='city' class="form-control" id="inputAddress">
                                                                    </div>


                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputAddress">هاتف العمل</label>
                                                                        <input type="text" name='city' class="form-control" id="inputAddress" >
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputAddress">تاريخ الميلاد</label>
                                                                        <input type="text" name='city' class="form-control" id="inputAddress" >
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label  for="inputAddress2">العنوان</label>
                                                                        <input type="text" name='address' class="form-control" id="inputAddress2" >
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label  for="inputEmail4">البريد الالكتروني</label>
                                                                        <input type="email" name='email' class="form-control"  id="inputEmail4">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label  for="inputEmail4">ملاحظات</label>
                                                                        <input type="text" name='hotel_name' class="form-control" id="inputEmail4" >
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label  for="inputEmail4">ملاحظات خاصة</label>
                                                                        <input type="text" name='hotel_name' class="form-control" id="inputEmail4">
                                                                    </div>

                                                                    <!-- Form code begins -->
                                                                        <form method="post">
                                                                            <div class="form-group"> <!-- Date input -->
                                                                            <label class="control-label" for="date">Date</label>
                                                                            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                                                                            </div>
                                                                            <div class="form-group"> <!-- Submit button -->
                                                                            <button class="btn btn-primary " name="submit" type="submit">Submit</button>
                                                                            </div>
                                                                        </form>
                                                                    <!-- Form code ends --> 

                                                            </div>
                                                        <button type="submit" class="btn btn-primary">أرسال</button>
                                                    </form>
                                        </div>
                                </div>
                        </div>
                        </div>                                                
                        <!-- نهاية أضافة بيانات العملاء -->

                         {{-- programedbyMSHM --}}
                    <!-- بداية تعديل بيانات العملاء -->
                        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle1">تعديل بيانات العميل </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">

                                        </div>
                                        
                                        
                                        
                            </div>
                        </div>
                    <!-- نهاية تعديل بيانات العملاء -->
                    {{-- programedbyMSHM --}}

   
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
<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
</body>

</html>
