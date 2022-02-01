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
                    <h4 class="m-0 font-weight-bold  text-center p-3 mb-2 bg-info text-white">أدارة الحجوزات </h4>
                    <a  href="#exampleModalCenter5"  data-toggle="modal" data-target="#exampleModalCenter5" class="btn btn-info btn-sm"> أضافة حجز جديد</a>
                </div>
                {{-- بيانات العملاء --}}
                <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"  name='bookingsTable' id="bookingsTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr  class="table-info text-center">
                                            <th>رقم العقد</th>
                                            <th>حالة الحجز</th>
                                            <th>الشقة</th>
                                            <th>نوع الشقة</th>
                                            <th>العميل</th>
                                            <th>نوع الحجز</th>
                                            <th>الدخول في</th>
                                            <th>الخروج في</th>
                                            <th>المدة</th>
                                            <th>الايجار</th>
                                            <th>المبلغ</th>
                                            <th>الضرائب</th>
                                            <th>الاجمالي</th>
                                            <th>التأمينات</th>
                                            <th>المدفوع</th>
                                            <th>الرصيد	</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allbookings as $allbooking)
                                        <tr class="text-center">
                                            <td>    {{ $allbooking->contract_no   }}                 </td>
                                            <td>    {{ $allbooking->booking_status }}                </td>
                                            <td>    {{ $allbooking->flat }}                          </td>
                                            <td>    {{ $allbooking->flat_kind}}                      </td>
                                            <td>    forien key    
                                                                                   </td>
                                            <td>    {{ $allbooking->booking_kind}}                   </td>
                                            <td>    {{ $allbooking->sign_in}}                        </td>
                                            <td>    {{ $allbooking->sign_out}}                       </td>
                                            <td>    {{ $allbooking->duration}}                       </td>
                                            <td>    {{ $allbooking->rent_value}} 
                                                                  </td>
                                            <td>    {{ $allbooking->amount}}                       </td>
                                            <td>    {{ $allbooking->taxes}}                       </td>
                                            <td>    {{ $allbooking->total}} 
                                                                  </td>
                                            <td>    {{ $allbooking->insurances}}                       </td>
                                            <td>    {{ $allbooking->paid_up}}                       </td>
                                            <td>    {{ $allbooking->Balance}}                       </td>
                                            <td>
                                                <a href="#exampleModalCenter20" data-toggle="modal" data-target="#exampleModalCenter20" class="btn btn-warning btn-sm">عرض</a>
                                                <a href="#exampleModalCenter20"  data-toggle="modal" data-target="#exampleModal20" class="btn btn-info btn-sm">تعديل</a>
                                                    {!! Form::open(['method' => 'DELETE','route' => ['bookings.destroy', $allbooking->id],'style'=>'display:inline']) !!}
                                                    {!! Form::submit('حذف', ['class' => 'btn btn-danger btn-sm']) !!}
                                                    {!! Form::close() !!}
                                            </td>
                                        </tr>
                                        @endforeach    
                                    </tbody>
                                    <tfoot>
                                        <tr class="text-center table-info">
                                            <th>رقم العقد</th>
                                            <th>حالة الحجز</th>
                                            <th>الشقة</th>
                                            <th>نوع الشقة</th>
                                            <th>العميل</th>
                                            <th>نوع الحجز</th>
                                            <th>الدخول في</th>
                                            <th>الخروج في</th>
                                            <th>المدة</th>
                                            <th>الايجار</th>
                                            <th>المبلغ</th>
                                            <th>الضرائب</th>
                                            <th>الاجمالي</th>
                                            <th>التأمينات</th>
                                            <th>المدفوع</th>
                                            <th>الرصيد	</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </tfoot>
                                
                                </table>
                            <div class="d-flex">
                                 {!! $allbookings->links() !!}
                            </div>
                            </div>
                        </div>
            </div>
                        <!-- بداية أضافة بيانات العملاء -->
                        <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle5" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle5">أضافة حجز جديد</h5>
                                            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                <span style="padding-left:50px;" aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                        <div class="modal-body">
                                                    <form class="form" method="POST" action="{{ route('bookings.create',$allbooking->id ) }} " enctype="multipart/form-data" >
                                                        @csrf
                                                            <div class="form-row">
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="contract_no"><span>رقم العقد</span> </label>
                                                                        <input type="text"  name='contract_no' class="form-control" id="contract_no" >
                                                                    </div>

                                                                  {{-- <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="booking_status">حالة الحجز</label>
                                                                        <select id="booking_status" name="booking_status"  type='text' class="form-control">
                                                                        <option selected>...أختر</option>
                                                                            @foreach ($datahandler['booking_status'] as $booking_status => $value)
                                                                                <option > {{$value}} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>  
                                                                 <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="flat">الشقة</label>
                                                                        <select id="flat" name="flat" type='text' class="form-control">
                                                                        <option selected>...أختر</option>
                                                                        
                                                                            @foreach ($datahandler['flat'] as $flat => $value)
                                                                                <option >{{$value}} </option>
                                                                            @endforeach
                                                                        
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="flat_kind">نوع الشقة</label>
                                                                        <select id="flat_kind" name="flat_kind" type='text' class="form-control">
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
                                                                        <label for="booking_kind">نوع الحجز</label>
                                                                        <select id="booking_kind" name="booking_kind" type='text' class="form-control">
                                                                        <option selected>...أختر</option>
                                                                        
                                                                            @foreach ($datahandler['booking_kind'] as $booking_kind => $value)
                                                                                <option >{{$value}} </option>
                                                                            @endforeach
                                                                        
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="sign_in">الدخول في</label>
                                                                        <select id="sign_in" name="sign_in"  type='text' class="form-control">
                                                                        <option selected>...أختر</option>
                                                                        
                                                                            @foreach ($datahandler['sign_in'] as $sign_in => $value)
                                                                                <option>{{$value}} </option>
                                                                            @endforeach

                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="sign_out">الخروج في</label>
                                                                        <select id="sign_out" name='sign_out' type='text' class="form-control">
                                                                        <option selected>...أختر</option>
                                                                        
                                                                            @foreach ($datahandler['sign_out'] as $sign_out => $value)
                                                                                <option >{{$value}} </option>
                                                                            @endforeach
                                                                        
                                                                        </select> --}}
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="duration">المدة</label>
                                                                        <input type="text" name='duration' class="form-control" id="duration" >
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="rent_value">الأيجار</label>
                                                                        <input type="text" name='rent_value' class="form-control" id="rent_value" >
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="amount">المبلغ</label>
                                                                        <input type="text" name='amount' class="form-control" id="amount">
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="taxes">الضرائب</label>
                                                                        <input type="text" name='taxes' class="form-control" id="taxes">
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="total">الأجمالي</label>
                                                                        <input type="text" name='total' class="form-control" id="total">
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="insurances">التأمينات</label>
                                                                        <input type="text" name='insurances' class="form-control" id="insurances" >
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="paid_up">المدفوع</label>
                                                                        <input type="text" name='paid_up' class="form-control" id="paid_up" >
                                                                    </div>
                                                                    <div class="form-group col-lg-2 col-md-2">
                                                                        <label for="exampleFormControlTextarea1">الرصيد </label>
                                                                        <textarea class="form-control" name="Balance" id="Balance" rows="3"></textarea>
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
                                                    <h5 class="modal-title" id="exampleModalCenterTitle20">بيانات الحجز</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            <div class="modal-body">
                                            <form action="{{route('bookings.show',$allbooking->id )}}" method="GET">
                                                @csrf
                                                        <table class="table">
                                                            <thead class="thead-dark">
                                                            <tr class="text-center ">
                                                                <th class="p-3 mb-2 bg-info text-white" scope="col">المعلومات الرئيسية </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody class="text-right">
                                                            <tr>
                                                                <td>رقم العقد</td>
                                                                <td>{{$allbooking->contract_no}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>حالة الحجز</td>
                                                                <td>{{$allbooking->booking_status}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>الشقة</td>
                                                                <td>{{$allbooking->flat}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>نوع الشقة</td>
                                                                <td>{{$allbooking->flat_kind}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>نوع الحجز</td>
                                                                <td>{{$allbooking->booking_kind}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>دخول في</td>
                                                                <td>{{$allbooking->sign_in}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>خروج في</td>
                                                                <td>{{$allbooking->sign_out}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>المدة</td>
                                                                <td>{{$allbooking->duration}}</td>

                                                            </tr>
                                                            <tr>
                                                                <td>الايجار</td>
                                                                <td>{{$allbooking->rent_value}}</td>

                                                            </tr>
                                                            <tr>
                                                                <td>المبلغ</td>
                                                                <td>{{$allbooking->amount}}</td>

                                                            </tr>
                                                            <tr>
                                                                <td>الضرائب</td>
                                                                <td>{{$allbooking->taxes}}</td>

                                                            </tr>
                                                            <tr>
                                                                <td>الأجمالي</td>
                                                                <td>{{$allbooking->total}}</td>

                                                            </tr>
                                                            <tr>
                                                                <td>التأمينات</td>
                                                                <td>{{$allbooking->insurances}}</td>

                                                            </tr>
                                                            <tr>
                                                                <td>المدفوع</td>
                                                                <td>{{$allbooking->paid_up}}</td>

                                                            </tr>
                                                            <tr>
                                                                <td>الرصيد</td>
                                                                <td>{{$allbooking->Balance}}</td>

                                                            </tr>
                                                            </tbody>
                                                        </table>
                                            </form>
                                            </div>

                                        </div>  
                                </div> 
                        </div>
                    {{-- <!-- نهاية عرض  بيانات العملاء -->
                    {{-- programedbyMSHM                         --}}
                     <!-- Modal -->
                        <div class="modal fade" id="exampleModal20" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel20" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel20">تعديل بيانات العميل </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form" method="POST" action="{{ route('bookings.update', $allbooking->id )}}" enctype="multipart/form-data" >
                                        @method('patch')
                                        @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="contract_no"><span>رقم العقد</span> </label>
                                                        <input type="text"  name='contract_no' class="form-control" id="contract_no" >
                                                    </div>

                                                    {{-- <div class="form-group col-lg-2 col-md-2">
                                                        <label for="booking_status">حالة الحجز</label>
                                                        <select id="booking_status" name="booking_status"  type='text' class="form-control">
                                                        <option selected>...أختر</option>
                                                            @foreach ($datahandler['booking_status'] as $booking_status => $value_1)
                                                                <option > {{$value_1}} </option>
                                                            @endforeach
                                                     
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="flat">الشقة</label>
                                                        <select id="flat" name="flat" type='text' class="form-control">
                                                        <option selected>...أختر</option>
                                                      
                                                            @foreach ($datahandler['flat'] as $flat => $value)
                                                                <option>{{$value}} </option>
                                                            @endforeach
                                                       
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="flat_kind">نوع الشقة</label>
                                                        <select id="flat_kind" name="flat_kind" type='text' class="form-control">
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
                                                        <label for="booking_kind">نوع الحجز</label>
                                                        <select id="booking_kind" name="booking_kind" type='text' class="form-control">
                                                        <option selected>...أختر</option>
                                         
                                                            @foreach ($datahandler['booking_kind'] as $booking_kind => $value)
                                                                <option >{{$value}} </option>
                                                            @endforeach
                                                       
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="sign_in">الدخول في</label>
                                                        <select id="sign_in" name="sign_in"  type='text' class="form-control">
                                                        <option selected>...أختر</option>
                                                    
                                                            @foreach ($datahandler['sign_in'] as $sign_in => $value)
                                                                <option >{{$value}} </option>
                                                            @endforeach
                                                      
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="sign_out">الخروج في</label>
                                                        <select id="sign_out" name='sign_out' type='text' class="form-control">
                                                        <option selected>...أختر</option>
                                                       
                                                            @foreach ($datahandler['sign_out'] as $sign_out => $value)
                                                                <option >{{$value}} </option>
                                                            @endforeach
                                                    
                                                        </select>
                                                    </div> --}}
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="duration">المدة</label>
                                                        <input type="text" name='duration' class="form-control" id="duration" >
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="rent_value">الأيجار</label>
                                                        <input type="text" name='rent_value' class="form-control" id="rent_value" >
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="amount">المبلغ</label>
                                                        <input type="text" name='amount' class="form-control" id="amount">
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="taxes">الضرائب</label>
                                                        <input type="text" name='taxes' class="form-control" id="taxes">
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="total">الأجمالي</label>
                                                        <input type="text" name='total' class="form-control" id="total">
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="insurances">التأمينات</label>
                                                        <input type="text" name='insurances' class="form-control" id="insurances" >
                                                    </div>
                                                    <div class="form-group col-lg-2 col-md-2">
                                                        <label for="paid_up">المدفوع</label>
                                                        <input type="text" name='paid_up' class="form-control" id="paid_up" >
                                                    </div>
                                                   <div class="form-group col-lg-2 col-md-2">
                                                        <label for="exampleFormControlTextarea1">الرصيد </label>
                                                        <textarea class="form-control" name="Balance" id="Balance" rows="3"></textarea>
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
