    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
                    <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">محمود سامي حسين</span>
                                    <img class="img-profile rounded-circle "
                                        src="{{asset('/admin/img/undraw_profile.svg') }}">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        الملف الشخصي
                                    </a>
                                    
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        تسجيل خروج
                                    </a>
                                </div>
                            </li>
                        </ul>
                    <!-- Topbar Navbar -->
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">الدعم الفني</span>
                                
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    تذاكر الدعم الفني
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                   شروحات النظام
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                   الاسئلة الشائعة
                                </a>
                            </div>
                        </li>
                    </ul>
                <!-- Topbar Navbar -->
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">الدفع الالكتروني</span>
                            
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                               الدفع الالكتروني
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                               سجل الطلبات
                            </a>
                        </div>
                    </li>
                </ul>
            <!-- Topbar Navbar -->
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <div class="topbar-divider d-none d-sm-block"></div>
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">التنبيهات</span>
                        
                    </a>
                    
                </li>
            </ul>
        <!-- Topbar Navbar -->
            <!-- Sidebar Toggle (Topbar) -->
        <!-- Large modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">أسعار الرسائل</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">المنصة الوطنية للرصد السياحي
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal">الأعدادات</button>
        <button type="button" class="btn btn-primary" data-toggle="modal">شموس
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal">english
        </button>
        

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ">أسعار الرسائل</h5>
                    <button style='float:left;' type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span style='float:left;' aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <table class="table" >
                        <thead class="p-3 mb-2 bg-info text-white  text-right"  >
                            <tr>
                            
                            <th class="text-right" scope="col">الباقة</th>
                            <th class="text-right" scope="col">السعر</th>
                            
                            </tr>
                        </thead>
                        <tbody class="text-right">
                            <tr>
                            
                            <td>اقل من 5000 رسالة</td>
                            <td>هللة للرسالة</td>
                            
                            </tr>
                            <tr>
                            
                            <td>اكثر من 5000 رسالة واقل من 10000 رسالة</td>
                            <td>هللة للرسالة</td>

                            </tr>
                            <tr>
                            
                            <td>اكثر من 10000 رسالة واقل من 30000 رسالة</td>
                            <td>هللة للرسالة</td>
                            
                            </tr>
                            <tr>
                                
                                <td>اكثر من 30000 رسالة واقل من 50000 رسالة</td>
                                <td>هللة للرسالة</td>
                            </tr>
                            <tr>
                                
                                <td>اكثر من 50000 رسالة</td>
                                <td>هللة للرسالة</td>
                            </tr>
                               
                        </tbody>

                        </table>
                        <span class="text-center p-3 mb-2 bg-danger text-white">السعر غير شامل لضريبة القيمة المضافة
                        </span>
                        <hr>
                        <h4 class="text-center">طريقة شحن الرسائل
                        </h4>
                        <span class="text-center">
                            يتم ايداع المبلغ على حساب الشركة في مصرف الراجحي
                        </span>
                        <table class="table" >
                            <thead class="p-3 mb-2 bg-success text-white text-right"  >
                                <tr>
                                    <th class="text-right" scope="col">الأسم</th>
                                    <th class="text-right" scope="col">البيان</th>
                                </tr>
                            </thead>
                            <tbody class="text-right">
                                <tr>
                                    <td>رقم الحساب</td>
                                    <td>123456789101122</td>
                                </tr>
                                <tr>
                                    <td>آيبان </td>
                                    <td>sa1234567891011121314921</td>
                                </tr>
                                <tr>
                                    <td>اسم الحساب</td>
                                    <td>موقع أوتيل لأدارة الفنادق</td>
                                </tr>
                                <tr>
                                
                                    <td >قم بارسال بطاقة للدعم الفني موضحا فيها المبلغ المودع واسم البنك وتاريخ الايداع واسم المودع عندها سيتم الشحن حسب المبلغ المودع

                                    </td>
                                    
                                </tr>
                            </tbody>
                        </table>
                        <span class="text-center"></span>
                        <span class="text-center text-danger">ملاحظة هامة
                            اذا تم ايداع المبلغ بعد الرابعة عصرا فان شحن الرسائل سيكون في اليوم التالي</span>
                </div>
            </div>

        </div>  
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog bd-example-modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">المنصة الوطنية للرصد السياحي</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="image">
                            <img class="card-img-top" src="{{asset('admin/img/otel-01.jpg')}}"  height='400x' width='250px' alt="الهيئة العامة للرصد السياحي">
                        </div>
                        <div class="image">
                            <img  class="card-img-top" src="{{asset('admin/img/otel-02.jpg')}}"  height='400px' width='250px' alt="الهيئة العامة للرصد السياحي">
                        </div>
                    
                    </div>
                    
                </div>
                </div>
            </div>
                                                                
                
</nav>
<!-- End of Topbar -->