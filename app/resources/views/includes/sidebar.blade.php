    <!-- Start::app-sidebar -->
    <aside class="app-sidebar" id="sidebar">

        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
            <a href="index.html" class="header-logo">
                <img src="{{asset('assets/img/brand-logos/logo.png')}}" alt="logo" class="main-logo desktop-logo">
                <img src="{{asset('assets/img/brand-logos/fav.png')}}" alt="logo" class="main-logo toggle-logo">
                <img src="{{asset('assets/img/brand-logos/logo.png')}}" alt="logo" class="main-logo desktop-dark">
                <img src="{{asset('assets/img/brand-logos/fav.png')}}" alt="logo" class="main-logo toggle-dark">
                <!--<i class="ri-send-plane-2-line"></i>Dispatch App!-->
            </a>
        </div>
        <!-- End::main-sidebar-header -->

        <!-- Start::main-sidebar -->
        <div class="main-sidebar " id="sidebar-scroll" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px 0px -80px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 0px 0px 80px;">

            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open active open">
                <div class="slide-left active hidden" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg></div>
                <ul class="main-menu active" style="box-sizing: border-box; display: block; margin-left: 0px; margin-right: 0px;">

                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">MENU</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                    <li class="slide active">
                        <a href="index.html" class="side-menu__item active">
                            <i class="ri-home-3-line side-menu__icon"></i>
                            <span class="side-menu__label">Dashboard</span>
                        </a>
                    </li>
                    <!-- End::slide -->                    

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ri-archive-line side-menu__icon"></i>
                            <span class="side-menu__label">Loads</span>
                            <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1" style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(127.5px, 200px, 0px);" data-popper-placement="bottom">
                            <li class="slide"><a href="{{ route('loads.index') }}" class="side-menu__item">All Loads</a></li>
                            <li class="slide"><a href="{{ route('loads.create') }}" class="side-menu__item">Add New Load</a></li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ri-archive-drawer-line side-menu__icon"></i>
                            <span class="side-menu__label">Carrier Packets</span>
                            <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1" style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(127.5px, 243px, 0px);" data-popper-placement="bottom">
                            <li class="slide"><a href="carriers.html" class="side-menu__item">All Carriers</a></li>
                            <li class="slide"><a href="new_carrier.html" class="side-menu__item">Add New Carrier</a></li>
                        </ul>
                    </li>
                    <!-- End::slide -->    

                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">CONTACTS</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                    @canany(['create-user', 'edit-user', 'delete-user'])
                    <li class="slide">
                        <a href="{{ route('users.index') }}" class="side-menu__item">
                            <i class="ti ti-users side-menu__icon"></i>
                            <span class="side-menu__label">Users</span>
                        </a>
                    </li>
                    @endcanany
                    <!-- End::slide -->                    

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ri-customer-service-line side-menu__icon"></i>
                            <span class="side-menu__label">Brokers</span>
                            <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1" style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(127.5px, 366px, 0px);" data-popper-placement="bottom">
                            <li class="slide"><a href="brokers.html" class="side-menu__item">All Brokers</a></li>
                            <li class="slide"><a href="new_broker.html" class="side-menu__item">Add New Broker</a></li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ti ti-truck-delivery side-menu__icon"></i>
                            <span class="side-menu__label">Drivers</span>
                            <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1" style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(127.5px, 409px, 0px);" data-popper-placement="bottom">
                            <li class="slide"><a href="drivers.html" class="side-menu__item">All Drivers</a></li>
                            <li class="slide"><a href="new_driver.html" class="side-menu__item">Add New Driver</a></li>
                            <li class="slide"><a href="assign_driver.html" class="side-menu__item">Assign Driver</a></li>
                        </ul>
                    </li>
                    <!-- End::slide -->    

                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">MANAGEMENT</span></li>
                    <!-- End::slide__category -->
                    @canany(['create-role', 'edit-role', 'delete-role'])
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ti ti-file-invoice side-menu__icon"></i>
                                <span class="side-menu__label">Roles</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1" style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(127.5px, 532px, 0px);" data-popper-placement="bottom">
                                <li class="slide"><a href="{{ route('roles.index') }}" class="side-menu__item">All Roles</a></li>
                                <li class="slide"><a href="{{ route('roles.create') }}" class="side-menu__item">Add New Role</a></li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                    @endcanany
                    
                    <li class="slide">
                        <a href="dispathers.html" class="side-menu__item">
                            <i class="ti ti-user-search side-menu__icon"></i>
                            <span class="side-menu__label">Dispathers</span>
                        </a>
                    </li>
                    <!-- End::slide -->                    

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ti ti-file-invoice side-menu__icon"></i>
                            <span class="side-menu__label">Invoices</span>
                            <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1" style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(127.5px, 532px, 0px);" data-popper-placement="bottom">
                            <li class="slide"><a href="invoices.html" class="side-menu__item">All Invoices</a></li>
                            <li class="slide"><a href="new_invoice.html" class="side-menu__item">Add New Invoice</a></li>
                            <li class="slide"><a href="add_old_invoice.html" class="side-menu__item">Add Old Invoice</a></li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ti ti-briefcase side-menu__icon"></i>
                            <span class="side-menu__label">Attendance</span>
                            <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1" style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(127.5px, 575px, 0px);" data-popper-placement="bottom">
                            <li class="slide"><a href="employees.html" class="side-menu__item">Employees</a></li>
                            <li class="slide"><a href="salaries.html" class="side-menu__item">Salaries</a></li>
                        </ul>
                    </li>
                    <!-- End::slide -->                    

                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">TOOLS</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="google_maps.html" class="side-menu__item">
                            <i class="ti ti-brand-google side-menu__icon"></i>
                            <span class="side-menu__label">Google Map</span>
                        </a>
                    </li>
                    <!-- End::slide --> 

                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="weather_map.html" class="side-menu__item">
                            <i class="ti ti-brand-soundcloud side-menu__icon"></i>
                            <span class="side-menu__label">Weather Map</span>
                        </a>
                    </li>
                    <!-- End::slide -->   

                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="timezone_map.html" class="side-menu__item">
                            <i class="ti ti-calendar-time side-menu__icon"></i>
                            <span class="side-menu__label">Timezone Map</span>
                        </a>
                    </li>
                    <!-- End::slide -->                                                                                 

                </ul>
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                    </svg></div>
            </nav>
            <!-- End::nav -->

        </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 772px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
        <!-- End::main-sidebar -->

    </aside>
    <!-- End::app-sidebar -->