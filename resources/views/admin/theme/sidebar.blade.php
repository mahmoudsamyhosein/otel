
      <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="£">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">  أوتيل لأدارة الفنادق <sup>cms</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>لوحة التحكم</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>الشقق والتسكين</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">الشقق والتسكين</h6>
                        <a class="collapse-item" href="utilities-border.html">تسجيل دخول</a>
                        <a class="collapse-item" href="utilities-color.html">تسجيل خروج</a>
                        <a class="collapse-item" href="utilities-animation.html">أدارة حالة الشقق</a>
                    </div>
                </div>
            </li>

           

            <!-- Divider -->
            <hr class="sidebar-divider">
          
           
                       
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('recivation')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>الحجوزات</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
                    aria-expanded="true" aria-controls="collapseUtilities2">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>السندات والفواتير</span>
                </a>
                <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">السندات والفواتير</h6>
                        <a class="collapse-item" href="#">سندات قبض</a>
                        <a class="collapse-item" href="#">سندات كمبيالات</a>
                        <a class="collapse-item" href="#">سندات صرف</a>
                        <a class="collapse-item" href="#">الفواتير</a>
                        <a class="collapse-item" href="#">الأشعارات الضريبية</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clients')}}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>العملاء</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6"
                    aria-expanded="true" aria-controls="collapse5">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>الخدمات</span>
                </a>
                <div id="collapse6" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">الخدمات</h6>
                        <a class="collapse-item" href="#">أضافة خدمات</a>
                        <a class="collapse-item" href="#">سجل الخدمات</a>
                    </div>
                </div>
            </li>
            

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5"
                    aria-expanded="true" aria-controls="collapse5">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>خدمة الغرف</span>
                </a>
                <div id="collapse5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">الغرف</h6>
                        <a class="collapse-item" href="#">حالة خدمة الغرف</a>
                        <a class="collapse-item" href="#">مهام خدمة الغرف</a>
                    </div>
                </div>
            </li>

             <!-- Nav Item - Tables -->
             <li class="nav-item">
                <a class="nav-link" href="{{ route('doc_mshm')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>الرسائل</span></a>
            </li>



            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('doc_mshm')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>سجل الحركات</span></a>
            </li>



            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>التقارير</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">تقارير</h6>
                        <a class="collapse-item" href="#">تقرير حركة الصندوق</a>
                        <a class="collapse-item" href="#">تقرير شهري أجمالي</a>
                        <a class="collapse-item" href="#">تقرير الحركة اليومية</a>
                        <a class="collapse-item" href="#">تقرير نسبة الأشغال</a>
                        <a class="collapse-item" href="#">تقرير بنود الصرف</a>
                        <a class="collapse-item" href="#">تقرير الكمبيالات</a>
                        <a class="collapse-item" href="#">تقرير سندات القبض</a>
                        <a class="collapse-item" href="#">تقرير هيئة السياحة</a>
                        <a class="collapse-item" href="#">حالة الغرف بحسب النوع</a>
                        <a class="collapse-item" href="#">التناقض (خدمة الغرف)</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">صفحات أخري</h6>
                        <a class="collapse-item" href="#">تقرير حجوزات العملاء </a>
                        <a class="collapse-item" href="#">تقرير أحصائيات الموظفين</a>
                        <a class="collapse-item" href="#">تقرير سندات الخدمات</a>
                        <a class="collapse-item" href="#">تقرير الحجوزات المفتوحة</a>
                        <a class="collapse-item" href="#">تقرير ملخص الرسائل</a>
                        <a class="collapse-item" href="#">تقرير تغيير الشقق</a>
                        <a class="collapse-item" href="#">تقرير سنوي بالأشهر</a>
                        <a class="collapse-item" href="#">تقرير الضرائب والرسوم</a>
                        <a class="collapse-item" href="#">التقييمات</a>
                        <a class="collapse-item" href="#">تقرير بلدي </a>
                        <a class="collapse-item" href="#">تقرير الفواتير</a>
                    </div>
                </div>
            </li>


             <!-- Nav Item - Tables -->
             <li class="nav-item">
                <a class="nav-link" href="{{ route('doc_mshm')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>الوثائق</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!--<div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>-->

        </ul>
        <!-- End of Sidebar -->
