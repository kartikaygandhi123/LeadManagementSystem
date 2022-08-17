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
                <li class="treeview {{ request()->is('addusersshow') || request()->is('all*') ? 'menu-open' : '' }}">
                    <a href="#">
                        <i class="iconsmind-Air-Balloon"></i>
                        <span>Masters</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu"
                        style="{{ request()->is('addusersshow') || request()->is('all*') ? 'display:block' : 'display:none' }}">
                        <li class="{{ request()->is('addusersshow') ? 'active' : '' }}">
                            <a href="/addusersshow"><i class="iconsmind-Arrow-Through"></i>Add
                                Users</a>
                        </li>
                        <li class="{{ request()->is('allcityshow') ? 'active' : '' }}">
                            <a href="/allcityshow"><i class="iconsmind-Arrow-Through"></i>All City</a>
                        </li>
                        <li class="{{ request()->is('alldepartmentsshow') ? 'active' : '' }}">
                            <a href="/alldepartmentsshow"><i class="iconsmind-Arrow-Through"></i>All
                                Departments</a>
                        </li>
                        <li class="{{ request()->is('allindustryshow') ? 'active' : '' }}">
                            <a href="/allindustryshow"><i class="iconsmind-Arrow-Through"></i>All
                                Industry</a>
                        </li>
                        <li class="{{ request()->is('allleadsourceshow') ? 'active' : '' }}">
                            <a href="/allleadsourceshow"><i class="iconsmind-Arrow-Through"></i>All
                                LeadSource</a>
                        </li>
                        <li class="{{ request()->is('allobserviceshow') ? 'active' : '' }}">
                            <a href="/allobserviceshow"><i class="iconsmind-Arrow-Through"></i>All LOB
                                Service</a>
                        </li>
                        <li class="{{ request()->is('allbusinessshow') ? 'active' : '' }}">
                            <a href="/allbusinessshow"><i class="iconsmind-Arrow-Through"></i>All
                                Business</a>
                        </li>
                        <li class="{{ request()->is('allstageshow') ? 'active' : '' }}">
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
            @endif


            @if (in_array(\auth()->user()->role_id, [1, 2, 3, 4, 5, 6]))
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
