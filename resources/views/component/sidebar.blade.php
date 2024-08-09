<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <span title="DeltaSoft" class="brand-link">
        <img src="{{ asset('assets/deltasoft-logo.jpg') }}" alt="DeltaSoft Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">DeltaSoft System</span>
    </span>

    <div class="sidebar">
        <span title="User : {{ Auth::user()->name }}" class="brand-link">
            <i class="fa-solid fa-circle-user fa-lg mx-2"></i>
            <span class="brand-text font-weight-light text-capitalize">{{ Auth::user()->name }}</span>
        </span>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                {{-- <li class="nav-item">
                    <a href="user.profile" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Dashboard</p>
                    </a>
                </li> --}}
                <li class="nav-item @yield('menuopenreception')">
                    <a href="#" class="nav-link @yield('activereception')">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Reception Panel
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('create') }}" class="nav-link @yield('patientregistrationactive')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Patient Registration</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('index') }}" class="nav-link @yield('viewpatientactive')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Patient's Record</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @yield('menuopensearch')">
                    <a href="#" class="nav-link @yield('active')">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            {{-- <span class="badge badge-danger navbar-badge">3</span> --}}
                            Search Panel
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('search1') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daily Collection Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('search2') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Patient Collection Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('search4') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Collection X-Ray</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('search5') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Collection Sonography</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('search6') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reference X-Ray</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('search7') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reference Sonography</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('search8') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Summary Report</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @yield('menuopenmaster')">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Master Panel
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('test.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Test Name</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('parameter.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Test Parameter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dept.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Main Department</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('subdept.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Department</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User Registration</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('doc_ref_form') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Doctor Reference</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('center_ref_form') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Center Reference</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dept.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Department</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('subdept.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Sub Department</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('test.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Test</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('parameter.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Test Parameter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('help_value') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Help Value</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rate') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Test Rate</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
