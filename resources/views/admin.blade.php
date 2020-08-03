<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>FleetCon</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('/bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('/bower_components/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/bower_components/admin-lte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
-webkit-appearance: none;
margin: 0;
}

/* Firefox */
input[type=number] {
-moz-appearance: textfield;
}
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- header -->
    @include('helpers/header')

    <!-- aside -->
    @include('helpers/aside')

    <!-- nav breadcrumb -->
    @include('helpers/navbreadcrumb')

    <!-- main content -->
    {{-- @include('dashboard/main') --}}
    @yield('section')

  </div>
  <!-- /.content-wrapper -->

    <!-- footer -->
    @include('helpers/footer')

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('/bower_components/admin-lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('/bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('/bower_components/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/bower_components/admin-lte/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('/bower_components/admin-lte/dist/js/demo.js')}}"></script>

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
</body>
</html>
