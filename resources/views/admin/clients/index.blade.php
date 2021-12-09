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
                    <h4 class="m-0 font-weight-bold  text-center p-3 mb-2 bg-info text-white"> أدارة العملاء </h4>
                    <a  href="#exampleModalCenter5"  data-toggle="modal" data-target="#exampleModalCenter5" class="btn btn-info btn-sm"> أضافة عميل جديد</a>
                </div>
                {{-- بيانات العملاء --}}
                <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"  name='guestsTable' id="guestsTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr  class="table-info text-center">
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
                                        <tr class="text-center">
                                            <td>    {{ $allclient->id   }}             </td>
                                            <td>    {{ $allclient->name }}             </td>
                                            <td>    {{ $allclient->approve_type }}     </td>
                                            <td>    {{ $allclient->approve_number}}    </td>
                                            <td>    {{ $allclient->place_of_issue}}    </td>
                                            <td>    {{ $allclient->phone}}             </td>
                                            <td>    {{ $allclient->email}}             </td>
                                            <td>
                                                <a href="#exampleModalCenter20" data-toggle="modal" data-target="#exampleModalCenter20" class="btn btn-warning btn-sm">عرض</a>
                                                <a href="#exampleModalCenter20"  data-toggle="modal" data-target="#exampleModal20" class="btn btn-info btn-sm">تعديل</a>
                                                    {!! Form::open(['method' => 'DELETE','route' => ['clients.destroy', $allclient->id],'style'=>'display:inline']) !!}
                                                    {!! Form::submit('حذف', ['class' => 'btn btn-danger btn-sm']) !!}
                                                    {!! Form::close() !!}
                                            </td>
                                        </tr>
                                        @endforeach    
                                    </tbody>
                                    <tfoot>
                                        <tr class="text-center table-info">
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
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle5">أضافة عميل جديد</h5>
                                            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                <span style="padding-left:50px;" aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                        <div class="modal-body">
                                                    <form class="form" method="POST" action="{{ route('clients.create',$allclient->id ) }} " enctype="multipart/form-data" >
                                                        @csrf
                                                            <div class="form-row">
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="name"><span>الاسم بالكامل</span> </label>
                                                                        <input type="text"  name='name' class="form-control" id="name" >
                                                                    </div>

                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="guest_type">نوع العميل</label>
                                                                        <select id="guest_type" name="guest_type"  type='text' class="form-control">
                                                                        <option selected>...أختر</option>
                                                                        @php $formhandler = include(resource_path('countries/countries.php')); @endphp
                                                                            @foreach ($formhandler['client_type'] as $client_type => $value)
                                                                                <option value="{{$client_type}}">{{$value}} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="approve_type">نوع الأثبات</label>
                                                                        <select id="approve_type" name="approve_type" type='text' class="form-control">
                                                                        <option selected>...أختر</option>
                                                                            @foreach ($formhandler['client_type'] as $client_type => $value)
                                                                                <option value="{{$client_type}}">{{$value}} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="id_copy">نسخة البطاقة</label>
                                                                        <select id="id_copy" name="id_copy" type='text' class="form-control">
                                                                        <option selected>...أختر</option>   
                                                                            <option>
                                                                                  @php
                                                                                    $num =1;
                                                                                    while($num <= 30){  echo '<option>'; echo $num++; echo '</option>';  }
                                                                                  @endphp
                                                                            </option>        
                                                                        </select>
                                                                    </div>
                                                                    
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="category">التصنيف</label>
                                                                        <select id="category" name="category" type='text' class="form-control">
                                                                        <option selected>...أختر</option>
                                                                            @php $formhandler = include(resource_path('countries/countries.php')); @endphp
                                                                            @foreach ($formhandler['categories'] as $categories => $value)
                                                                                <option value="{{$categories}}">{{$value}} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="nationalty">الجنسية</label>
                                                                        <select id="nationalty" name="nationalty"  type='text' class="form-control">
                                                                        <option selected>...أختر</option>
                                                                            @php $formhandler = include(resource_path('countries/countries.php')); @endphp
                                                                            @foreach ($formhandler['nationalty'] as $nationalty => $value)
                                                                                <option value="{{$nationalty}}">{{$value}} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="kind">الجنس</label>
                                                                        <select id="kind" name='kind' type='text' class="form-control">
                                                                        <option selected>...أختر</option>
                                                                            @php $formhandler = include(resource_path('countries/countries.php')); @endphp
                                                                            @foreach ($formhandler['kind'] as $kind => $value)
                                                                                <option value="{{$kind}}">{{$value}} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="phone">رقم الجوال</label>
                                                                        <input type="text" name='phone' class="form-control" id="phone" >
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="approve_number">رقم الأثبات</label>
                                                                        <input type="text" name='approve_number' class="form-control" id="approve_number" >
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="place_of_work">مكان العمل</label>
                                                                        <input type="text" name='place_of_work' class="form-control" id="place_of_work">
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="place_of_issue">مكان الأصدار</label>
                                                                        <input type="text" name='place_of_issue' class="form-control" id="place_of_issue">
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="date_of_expiry">تاريخ الأنتهاء</label>
                                                                        <input type="text" name='date_of_expiry' class="form-control" id="date_of_expiry">
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="phone_of_work">هاتف العمل</label>
                                                                        <input type="text" name='phone_of_work' class="form-control" id="phone_of_work" >
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="date_of_birth">تاريخ الميلاد</label>
                                                                        <input type="text" name='date_of_birth' class="form-control" id="date_of_birth" >
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="exampleFormControlTextarea1">العنوان </label>
                                                                        <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label  for="email">البريد الالكتروني</label>
                                                                        <input type="email" name='email' class="form-control"  id="email">
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="note">ملاحظات </label>
                                                                        <textarea class="form-control" name='note' id="note" rows="3"></textarea>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="note_2">ملاحظات خاصة</label>
                                                                        <textarea class="form-control"  name='note_2' id="note_2" rows="3"></textarea>
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
                                            <form action="{{route('clients.show',$allclient->id )}}" method="GET">
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
                                                                <td>{{$allclient->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>نوع الأثبات</td>
                                                                <td>{{$allclient->approve_type}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>رقم الأثبات</td>
                                                                <td>{{$allclient->approve_number}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>مكان الأصدار</td>
                                                                <td>{{$allclient->place_of_issue}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>تاريخ الأنتهاء</td>
                                                                <td>{{$allclient->date_of_expiry}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>العنوان</td>
                                                                <td>{{$allclient->address}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>جوال</td>
                                                                <td>{{$allclient->phone}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>البريد الألكتروني</td>
                                                                <td>{{$allclient->email}}</td>

                                                            </tr>
                                                            <tr>
                                                                <td>جهة العمل</td>
                                                                <td>{{$allclient->place_of_work}}</td>

                                                            </tr>
                                                            <tr>
                                                                <td>جوال العمل</td>
                                                                <td>{{$allclient->phone_of_work}}</td>

                                                            </tr>
                                                            </tbody>
                                                        </table>
                                            </form>
                                            </div>

                                        </div>  
                                </div>
                        </div>
                    <!-- نهاية عرض  بيانات العملاء -->
                    {{-- programedbyMSHM --}}                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal20" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel20" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel20">تعديل بيانات العميل </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form" method="POST" action="{{ route('clients.update', $allclient->id )}}" enctype="multipart/form-data" >
                                        @method('patch')
                                        @csrf
                                                <div class="form-row">
                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label for="name"><span>الاسم بالكامل</span> </label>
                                                            <input type="text" value="{{ $allclient->name }}" name='name' class="form-control" id="name" >
                                                        </div>

                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label for="guest_type">نوع العميل</label>
                                                            <select id="guest_type" name="guest_type"  type='text' class="form-control">
                                                            <option selected>...أختر</option>
                                                            @php $formhandler = include(resource_path('countries/countries.php')); @endphp
                                                                @if (isset($formhandler['client_type']))

                                                                    @foreach ($formhandler['client_type'] as $client_type => $value)
                                                                        <option value="{{$client_type}}">{{$value}} </option>
                                                                    @endforeach
                                                                    
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label for="approve_type">نوع الأثبات</label>
                                                            <select id="approve_type" name="approve_type" type='text' class="form-control">
                                                            <option selected>...أختر</option>
                                                                @foreach ($formhandler['client_type'] as $client_type => $value)
                                                                    <option value="{{$client_type}}">{{$value}} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label for="id_copy">نسخة البطاقة</label>
                                                            <select id="id_copy" name="id_copy" type='text' class="form-control">
                                                            <option selected>...أختر</option>   
                                                                <option>
                                                                    @php
                                                                        $num =1;
                                                                        while($num <= 30){  echo '<option>'; echo $num++; echo '</option>';  }
                                                                    @endphp
                                                                </option>        
                                                            </select>
                                                        </div>


                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label for="category">التصنيف</label>
                                                            <select id="category" name="category" type='text' class="form-control">
                                                            <option selected>...أختر</option>
                                                                @php $formhandler = include(resource_path('countries/countries.php')); @endphp
                                                                @foreach ($formhandler['categories'] as $categories => $value)
                                                                    <option value="{{$categories}}">{{$value}} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        


                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label for="nationalty">الجنسية</label>
                                                            <select id="nationalty" name="nationalty"  type='text' class="form-control">
                                                            <option selected>...أختر</option>
                                                                @php $formhandler = include(resource_path('countries/countries.php')); @endphp
                                                                @foreach ($formhandler['nationalty'] as $nationalty => $value)
                                                                    <option value="{{$nationalty}}">{{$value}} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label for="kind">الجنس</label>
                                                            <select id="kind" name='kind' type='text' class="form-control">
                                                            <option selected>...أختر</option>
                                                                @php $formhandler = include(resource_path('countries/countries.php')); @endphp
                                                                @foreach ($formhandler['kind'] as $kind => $value)
                                                                    <option value="{{$kind}}">{{$value}} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>


                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label for="phone">رقم الجوال</label>
                                                            <input type="text" value='{{ $allclient->phone }}'  name='phone' class="form-control" id="phone" >
                                                        </div>
                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label for="approve_number">رقم الأثبات</label>
                                                            <input type="text" value='{{ $allclient->approve_number }}' name='approve_number' class="form-control" id="approve_number" >
                                                        </div>


                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label for="place_of_work">مكان العمل</label>
                                                            <input type="text" value='{{ $allclient->place_of_work }}' name='place_of_work' class="form-control" id="place_of_work">
                                                        </div>


                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label for="place_of_issue">مكان الأصدار</label>
                                                            <input type="text" value='{{ $allclient->place_of_issue }}' name='place_of_issue' class="form-control" id="place_of_issue">
                                                        </div>
                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label for="date_of_expiry">تاريخ الأنتهاء</label>
                                                            <input type="text" value='{{ $allclient->date_of_expiry }}' name='date_of_expiry' class="form-control" id="date_of_expiry">
                                                        </div>


                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label for="phone_of_work">هاتف العمل</label>
                                                            <input type="text" value='{{ $allclient->phone_of_work }}' name='phone_of_work' class="form-control" id="phone_of_work" >
                                                        </div>

                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label for="date_of_birth">تاريخ الميلاد</label>
                                                            <input type="text" value='{{ $allclient->date_of_birth }}' name='date_of_birth' class="form-control" id="date_of_birth" >
                                                        </div>
                                                        

                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label for="address">العنوان </label>
                                                            <textarea class="form-control" value='{{ $allclient->address }}'  name="address" id="address" rows="3"></textarea>
                                                        </div>

                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label  for="email">البريد الالكتروني</label>
                                                            <input type="email" value='{{ $allclient->email }}' name='email' class="form-control"  id="email">
                                                        </div>

                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label for="note">ملاحظات </label>
                                                            <textarea class="form-control"  value='{{ $allclient->note }}' name='note' id="note" rows="3"></textarea>
                                                        </div>

                                                        <div class="form-group col-lg-2 col-md-2">
                                                            <label for="note_2'">ملاحظات خاصة</label>
                                                            <textarea class="form-control"  value='{{ $allclient->note_2}}' name='note_2' id="note_2'" rows="3"></textarea>
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
