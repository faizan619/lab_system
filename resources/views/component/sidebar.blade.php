<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <span title="Lab system" class="brand-link">
      <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Lab System</span>
    </span>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
          <i class="fa-solid fa-circle-user fa-xl mx-2"></i>
          <a href="#" class="d-block lead">Alexander Pierce</a>
        {{-- <div class="image">
          <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        {{-- <div class="info">
        </div> --}}
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">8</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Kanban Board
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

{{-- <div class="max-w-80 w-72 h-screen overflow-y-auto border-r-2 border-blue-700">
    <div class="flex justify-center items-center py-5">
        <img src="/assets/logo.jpg" alt="company logo" class="w-24">
        <div class="flex flex-col text-xl italic font-bold">
            <p>Deltasoft</p>
            <p>System </p>
        </div>
    </div>
    <div class="">
        <ul class="px-1 font-semibold capitalize flex flex-col gap-3">
            <div>
                <details>
                    <summary
                        class="shadow-sm shadow-blue-300 flex justify-between items-center cursor-pointer py-2 rounded-md px-3 text-md bg-blue-900 text-white ">
                        <div class="flex gap-3">
                            <p><img src="/icons/reception.png" alt="icon1" class="w-6"></p>
                            <p>Reception Panel</p>
                        </div>
                        <img src="/icons/dropdown.png" alt="dropdown" class="w-5 h-5">
                    </summary>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('create') }}">Patient's Registration</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('index') }}">View Patient's Record</a></p>
                </details>
            </div>

            <div>
                <details>
                    <summary
                        class="shadow-sm shadow-blue-300 flex justify-between items-center cursor-pointer py-2 rounded-md px-3 text-md bg-blue-900 text-white">
                        <div class="flex gap-3">
                            <p><img src="/icons/search.png" alt="icon1" class="w-6"></p>
                            <p>Search Panel</p>
                        </div>
                        <img src="/icons/dropdown.png" alt="dropdown" class="w-5 h-5">
                    </summary>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('search1')}}">Daily Collection Report</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('search2')}}">Patient Collection Report</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('search4')}}">Patient Collection Report X-ray</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('search5')}}">Patient Collection Report Sonography</a> </p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('search6')}}">Reference Report X-Ray</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('search7')}}">Reference Report Sonography</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('search8')}}">Summary Report</a></p>
                </details>
            </div>

            <div>
                <details>
                    <summary
                        class="shadow-sm shadow-blue-300 flex justify-between items-center cursor-pointer py-2 rounded-md px-3 text-md bg-blue-900 text-white ">
                        <div class="flex gap-3">
                            <p><img src="/icons/admin.png" alt="icon1" class="w-6"></p>
                            <p>Master Panel</p>
                        </div>
                        <img src="/icons/dropdown.png" alt="dropdown" class="w-5 h-5">
                    </summary>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('test.index')}}">Test Name</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('parameter.index')}}">Test Parameter</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('dept.index') }}">Main Department</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('subdept.index') }}">Sub Department</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('register')}}">User Registration</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('doc_ref_form') }}">Create Doctor Reference</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('center_ref_form') }}">Create Center Reference</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('dept.create') }}">Add Department</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('subdept.create') }}">Add Sub Department</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('test.create')}}">Add New Test</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('parameter.create')}}">Add Test Parameter</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('help_value')}}">Add Help Value</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('rate')}}">Test Rate</a></p>
                </details>
            </div>

        </ul>
    </div>
</div> --}}
