<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">


            @if (in_array(\auth()->user()->role_id, [1, 2, 3, 4, 5, 6, 7]))
                <li>
                    <a href="/dashboard">
                        <i class="iconsmind-Dashboard"></i>
                        <span>Dashboard</span>

                    </a>

                </li>
            @endif


            @if (in_array(\auth()->user()->role_id, [1, 2, 3, 4, 5]))
                <li>
                    <a href="/leadsshow">
                        <i class="iconsmind-Cloud-Email"></i> <span>Leads</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                </li>
            @endif

            @if (in_array(\auth()->user()->role_id, [1, 2]))
                <li class="treeview">
                    <a href="#">
                        <i class="iconsmind-Air-Balloon"></i>
                        <span>Masters</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="/addusersshow"><i class="iconsmind-Arrow-Through"></i>Add Users</a>
                        </li>
                        <li>
                            <a href="/allcityshow"><i class="iconsmind-Arrow-Through"></i>All City</a>
                        </li>
                        <li>
                            <a href="/alldepartmentsshow"><i class="iconsmind-Arrow-Through"></i>All
                                Departments</a>
                        </li>
                        <li>
                            <a href="/allindustryshow"><i class="iconsmind-Arrow-Through"></i>All
                                Industry</a>
                        </li>
                        <li>
                            <a href="/allleadsourceshow"><i class="iconsmind-Arrow-Through"></i>All
                                LeadSource</a>
                        </li>
                        <li>
                            <a href="/allobserviceshow"><i class="iconsmind-Arrow-Through"></i>All LOB
                                Service</a>
                        </li>
                        <li>
                            <a href="/allbusinessshow"><i class="iconsmind-Arrow-Through"></i>All
                                Business</a>
                        </li>
                        <li>
                            <a href="/allstageshow"><i class="iconsmind-Arrow-Through"></i>All Stage</a>
                        </li>
                    </ul>
                </li>
            @endif

            @if (in_array(\auth()->user()->role_id, [1, 2, 3, 4, 5]))
                <li>
                    <a href="/brandshow">
                        <i class="iconsmind-Edit"></i> <span>Brand Profile</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="/contactsshow">
                        <i class="iconsmind-Envelope-2"></i> <span>Contacts</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                </li>



                <li>
                    <a href="/reportsshow">
                        <i class="iconsmind-Bar-Chart"></i> <span>Reports</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                </li>
            @endif



            @if (in_array(\auth()->user()->role_id, [1, 2, 6]))
                <li>
                    <a href="/leadsshowlegal">
                        <i class="iconsmind-Cloud-Email"></i> <span>Legal Leads</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                </li>
            @endif

            @if (in_array(\auth()->user()->role_id, [1, 2, 7]))
                <li>
                    <a href="/leadsshowfinance">
                        <i class="iconsmind-Cloud-Email"></i> <span>Finance Leads</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                </li>
            @endif

            @yield('stage')


    </section>
</aside>
