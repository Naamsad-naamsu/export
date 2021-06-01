<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('../images/image.png')}}">

    <title>Admin - Dashboard</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('css1/vendors_css.css') }}">

	<!-- Style-->
	<link rel="stylesheet" href="{{asset('css1/style.css')}}">
	<link rel="stylesheet" href="{{asset('css1/skin_color.css')}}">

  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

<div class="wrapper">

  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-center">
		<!-- Logo -->
		<a href="{{url('/dashboard')}}" class="logo">
		  <!-- logo-->
		  <div class="logo-mini">
			  <!-- <span class="light-logo"><img src="{{asset('../images/logo-light.png')}}" alt="logo"></span> -->
			  <!-- <span class="dark-logo"><img src="{{asset('../images/logo-dark.png')}}" alt="logo"></span> -->
		  </div>
		  <!-- logo-->
		  <div class="logo-lg">
			  <!-- <span class="light-logo"><img src="{{asset('../images/logo-light-text.png')}}" alt="logo"></span> -->
			  <!-- <span class="dark-logo"><img src="{{asset('../images/logo-dark-text.png')}}" alt="logo"></span> -->
		  </div>
		</a>
	</div>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-10">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link rounded push-btn" data-toggle="push-menu" role="button">
					<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
			    </a>
			</li>
		</ul>
	  </div>

      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
			<li class="btn-group nav-item d-lg-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded full-screen" title="Full Screen">
					<i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
		  <!-- Notifications -->

	      <!-- User Account-->

          <!-- Control Sidebar Toggle Button -->


        </ul>
      </div>
    </nav>
  </header>

  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="header">Menu </li>
        <li>
          <a href="{{url('/dashboard')}}">
            <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
			<span>Dashboard</span>
          </a>
        </li>
		<li class="header"> </li>
        <li>
          <a href="{{ url('users')}}">
            <i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>
			      <span>Create Users</span>
          </a>
        </li>

      </ul>
    </section>
	<div class="sidebar-footer">
		<!-- item-->
		<!-- <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><span class="icon-Settings-2"></span></a> -->
		<!-- item-->
		<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
	</div>
  </aside>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
</form>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->

        <div class="main">
         @yield('content')
        </div>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
	  &copy; 2021 <a href="#">Machine Test</a>.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar">

	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" class="active"><i class="mdi mdi-message-text"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <!-- /.tab-pane -->
      <!-- Settings tab content -->

      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


	<!-- Vendor JS -->
	<script src="{{asset('js1/vendors.min.js')}}"></script>
	<script src="{{asset('js1/pages/chat-popup.js')}}"></script>
    <script src="{{asset('../assets/icons/feather-icons/feather.min.js')}}"></script>

	<script src="{{asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
	<!-- Adnix Admin App -->
  <script src="{{asset('../assets/icons/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('js1/template.js')}}"></script>
	<script src="{{asset('js1/pages/dashboard.js')}}"></script>
	<script src="{{asset('js1/pages/data-table.js')}}"></script>
    <script src="{{asset('js1/pages/validation.js')}}"></script>

    <script src="../assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
	<script src="../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="../assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  @yield('script')
</body>

</html>
