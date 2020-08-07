
@extends('admin')
@section('section')

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Drivers</span>
                <span class="info-box-number">{{ \App\Http\Controllers\DriverController::driversCount() }}</span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Trucks</span>
                <span class="info-box-number">{{ \App\Http\Controllers\TruckController::trucksCount() }}</span>
              </div>
            </div>
          </div>

          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sites</span>
                <span class="info-box-number">{{ \App\Http\Controllers\SiteController::sitesCount() }}</span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Routes</span>
                <span class="info-box-number">{{ \App\Http\Controllers\RouteController::routesCount() }}</span>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
      </div><!--/. container-fluid -->
    @endsection  
    <!-- /.content -->

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('/bower_components/admin-lte/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('/bower_components/admin-lte/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('/bower_components/admin-lte/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('/bower_components/admin-lte/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('/bower_components/admin-lte/plugins/chart.js/Chart.min.js')}}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{asset('/bower_components/admin-lte/dist/js/pages/dashboard2.js')}}"></script>