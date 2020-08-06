
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('/bower_components/admin-lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/bower_components/admin-lte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Amosun</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{url('/main')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                System Admins
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/add-admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Administrator</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admins" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Administrators</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-truck"></i>
              <p>
                Trucks
                <i class="fas fa-angle-left right"></i>                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/addHorse" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Truck</p>
                </a>
              </li>              
              <li class="nav-item">
                <a href="/trucks" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Trucks</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Drivers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href='/add-driver' class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Driver</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/drivers')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Drivers</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-compass "></i>
              <p>
                Sites
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/add-site')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Site</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/sites')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Sites</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-map-marker "></i>
              <p>
                Routes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/add-route')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Route</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/routes')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Routes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Reports Section</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list-ul "></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/route_revenue" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Route Revenue</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/truck_revenue" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Truck Revenue</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/fuel_usage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fuel Usage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="route_profitability" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Route Profitability</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/truck_availability" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Truck Availability</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/driver_performance" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Driver Performance</p>
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