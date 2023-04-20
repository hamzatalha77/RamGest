<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://warehouse-admin-dashboard.multipurposethemes.com/images/favicon.ico">

    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> -->

    <title>Ram Store</title>
    @yield('link')
    @yield('js')
    <!--Favicon -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets/css/vendors_css.css">
    <link href="assets/fontAwesome/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="assets/fontAwesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Bootstrap css -->
     <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />
	<!-- Style-->    
	<link rel="stylesheet" href="assets/css/horizontal-menu.css"> 
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/skin_color.css">
     
	<link href="assets/plugins/prism/prism.css" rel="stylesheet">
<!---Icons css-->
<link href="assets/plugins/web-fonts/icons.css" rel="stylesheet" />
<link href="assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
<link href="assets/plugins/web-fonts/plugin.css" rel="stylesheet" />
  </head>

<body class="layout-top-nav dark-skin theme-primary fixed">
	
<div class="wrapper">
	<div id="loader"></div>
	
	<header class="main-header">
	  <div class="inside-header">
		<div class="d-flex align-items-center logo-box justify-content-start">
			<!-- Logo -->
			<a href="#" class="logo">
			  <!-- logo-->
			  <div class="logo-lg">
				  <span class="dark-logo">RAM STORE</span>
			  </div>
			</a>	
		</div>  
		<!-- Header Navbar -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<div class="app-menu">
			<ul class="header-megamenu nav">
				<li class="btn-group d-lg-inline-flex d-none">
				</li>
			</ul> 
		  </div>
		</nav>
	  </div>
  </header>
  
  	<nav class="main-nav" role="navigation">

	  <!-- Mobile menu toggle button (hamburger/x icon) -->
	  <input id="main-menu-state" type="checkbox" />
	  <label class="main-menu-btn" for="main-menu-state">
		<span class="main-menu-btn-icon"></span> Toggle main menu visibility
	  </label>

	  <!-- Sample menu definition -->
	  <ul id="main-menu" class="sm sm-blue"> 
		<li><a href="{{route('dashboard')}}"><i data-feather="monitor"></i>STOCK</a></li>
		<li><a href="{{route('entree.index')}}"><i data-feather="layers"></i>ENTREE</a></li>
		<li><a href="{{route('sortie.index')}}"><i data-feather="layout"></i>SORTIE</a></li>
		<li><a href="{{route('reteur.index')}}"><i data-feather="layout"></i>RETEUR</a></li>
		<li><a href="{{route('fornisseur.index')}}"><i data-feather="file-text"></i>FORNISSEURS</a></li>
		<li><a href="{{route('client.index')}}"><i data-feather="layout"></i>CLIENTS</a></li>
		<li><a href="{{route('categorie.index')}}"><i data-feather="pie-chart"></i>CATEGORIE</a></li>
		<li><a href="{{route('choice')}}"><i data-feather="folder"></i>FACTURES</a></li>
		<li>
			<form action="{{route('logout')}}" method="post">
            @csrf
			<a href="{{ url('/logout') }}" > <i data-feather="folder"></i>SE DECONNECTER </a>
			
			</form>
		</li>
	  </ul>
	</nav>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
            @yield('content')
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			
		  </li>
		  <li class="nav-item">
			
		  </li>
		</ul>
    </div>
	  &copy;  <a href="#">	RAM STORE</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger" data-toggle="control-sidebar"><i class="ion ion-close text-white"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active"><i class="mdi mdi-message-text"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Users</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="assets/images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src=".assetd/images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>			
			
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>
			  
		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
	
	<!-- ./side demo panel -->
	
	<!-- Sidebar -->
		
	
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
<!-- Jquery js-->
<script src="assets/js/vendors/jquery-3.5.1.min.js"></script>
<!-- Bootstrap4 js-->
<script src="assets/plugins/bootstrap/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/vendors.min.js"></script>
	<script src="assets/js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	

	<script src="/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	<script src="/assets/vendor_components/progressbar.js-master/dist/progressbar.js"></script>
	<script>
		document.getElementById('e').value = new Date().toISOString().substring(0, 10);
	</script>
	<!-- Vendor JS -->
	<script src="assets/js/vendors.min.js"></script>
	<script src="assets/js/pages/chat-popup.js"></script>
    <script src="/assets/icons/feather-icons/feather.min.js"></script>	
	<script src="/assets/vendor_components/datatable/datatables.min.js"></script>
	
	<!-- Deposito Admin App -->
	<script src="assets/js/jquery.smartmenus.js"></script>
	<script src="assets/js/menus.js"></script>
	<script src="assets/js/template.js"></script>
	<script src="assets/js/pages/dashboard2.js"></script>
	<script src="assets/js/pages/data-table.js"></script>
	<script src="assets/js/pages/invoice.js"></script>
	<script>
    $(function(){
        @if(Session::has('error'))
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text:'{{Session::get("error")}}',
        timer: 6000
        })
        @endif
    });
</script>
<script>
    $(function(){
        @if(Session::has('success'))
        Swal.fire({
        icon: 'success',
        title: 'Yes...',
        text:'{{Session::get("success")}}',
        timer: 1500
        })
        @endif
    });
</script>
</body>
@yield('JS2')
<!-- Mirrored from warehouse-admin-dashboard.multipurposethemes.com/main-horizontal-dark/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Dec 2021 23:44:41 GMT -->
</html>
