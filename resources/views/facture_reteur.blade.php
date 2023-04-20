<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from warehouse-admin-dashboard.multipurposethemes.com/main-horizontal-dark/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Dec 2021 23:49:18 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://warehouse-admin-dashboard.multipurposethemes.com/images/favicon.ico">

    <title>RAM STORE</title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets/css/vendors_css.css">
	  
	<!-- Style-->    
	<link rel="stylesheet" href="assets/css/horizontal-menu.css"> 
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/skin_color.css">	
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
			<a href="index.html" class="logo">
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
		  <div class="navbar-custom-menu r-side">
				<ul class="nav navbar-nav">	
					<!-- User Account-->
					<li class="dropdown user user-menu">
						<a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent py-0 no-shadow" data-bs-toggle="dropdown" title="User">
							<img src="../images/avatar/avatar-1.png" class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
						</a>
						<ul class="dropdown-menu animated flipInX">
						<li class="user-body">
							<a class="dropdown-item" href="extra_profile.html"><i class="ti-user text-muted me-2"></i> Profile</a>
							<a class="dropdown-item" href="mailbox.html"><i class="ti-settings text-muted me-2"></i> Email</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="auth_login.html"><i class="ti-lock text-muted me-2"></i> Logout</a>
						</li>
						</ul>
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
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
		</div>  

		<!-- Main content -->
		<section class="invoice printableArea">
		  <div class="row">
			<div class="col-12">
			  <div class="bb-1 clearFix">
				<div class="text-end pb-15">
					<button id="print2" class="btn btn-warning" type="button" onClick="javascript:window.print();"> <span><i class="fa fa-print"></i> Print</span> </button>
				</div>	
			  </div>
			</div>
			<div class="col-12">
			  <div class="page-header">
				<h2 class="d-inline"><span class="fs-30">FACTURE RETEUR</span></h2>
			  </div>
			</div>
			<!-- /.col -->
		  </div>
		  <div class="row invoice-info">
			<!-- /.col -->
			<div class="col-sm-12 invoice-col mb-15">
				<div class="invoice-details row no-margin">
				  <div class="col-md-6 col-lg-3"><b>DU :</b> RAM STORE</div>
				  <div class="col-md-6 col-lg-3"><b>A :</b> {{$client}}</div>
				  <div class="col-md-6 col-lg-3"><b>DATE:</b> {{$date_debut}}</div>
				</div>
			</div>
		  <!-- /.col -->
		  </div>
		  <div class="row">
			<div class="col-12 table-responsive">
			  <table class="table table-bordered">
				<tbody>
				<tr>
				  <th>#</th>
				  <th>reference</th>
				  <th>fornisseur</th>
				  <th>categorie</th>
				  <th class="text-end">Quantite</th>
				  <th class="text-end">Prix unitaire</th>
				  <th class="text-end">Total</th>
				</tr>
				@foreach($reteurs as $rt)
				<tr>
				  <td>{{$rt->id}}</td>
				  <td>{{$rt->reference}}</td>
				  <td>{{$rt->fornisseur}}</td>
				  <td>{{$rt->categorie}}</td>
				  <td class="text-end">{{$rt->quantite}}</td>
				  <td class="text-end">{{$rt->prix}} DH</td>
				  <td class="text-end">{{$rt->total}} DH</td>
				</tr>
				@endforeach
				</tbody>
			  </table>
			</div>
			<!-- /.col -->
		  </div>
		  <div class="row">
			<div class="col-12 text-end">
				<p class="lead"><b>Payment Due</b><span class="text-danger"> </span></p>

				<div>
					<p> </p>
					<p> </p>
					<p> </p>
				</div>
				<div class="total-payment">
					<h3><b>Total :</b>{{$total}} DH</h3>
				</div>

			</div>
			<!-- /.col -->
		  </div>
		  <div class="row no-print">
			<div class="col-12">
			</div>
		  </div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
 
   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  <script>document.write(new Date().getFullYear())</script>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar">
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
	
	<div id="chat-box-body">
	</div>
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="assets/js/vendors.min.js"></script>
	<script src="assets/js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	<script src="../assets/vendor_plugins/JqueryPrintArea/demo/jquery.PrintArea.js"></script>
	
	<!-- Deposito Admin App -->
	<script src="assets/js/jquery.smartmenus.js"></script>
	<script src="assets/js/menus.js"></script>
	<script src="assets/js/template.js"></script>
	
	<script src="assets/js/pages/invoice.js"></script>

</body>

<!-- Mirrored from warehouse-admin-dashboard.multipurposethemes.com/main-horizontal-dark/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Dec 2021 23:49:24 GMT -->
</html>
