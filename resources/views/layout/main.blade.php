<!doctype html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<title>@yield('title')</title>

	<!-- Bootstrap Core and vandor -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/plugins/dropify/css/dropify.min.css">

	<!-- Core css -->
	<link rel="stylesheet" href="assets/css/style.min.css"/>
</head>

<body class="font-muli theme-cyan gradient">

	<!-- Page Loader -->
	<div class="page-loader-wrapper">
		<div class="loader">
		</div>
	</div>

	<div id="main_content">
		<!-- Sidebar -->
		<div id="header_top" class="header_top">
			<div class="container">
				<div class="hleft">
					<a class="header-brand" href="/"><i class="fa fa-briefcase brand-logo"></i></a>
					<div class="dropdown">
						<a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fe fe-align-center"></i></a>
					</div>
				</div>
				<div class="hright">
					<a href="login" class="nav-link icon settingbar"><i class="fe fe-power"></i></a>
				</div>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<div id="left-sidebar" class="sidebar">
			<h5 class="brand-name">E-ATP<a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
			<ul class="nav nav-tabs">
				<li class="nav-item nav-link">Menu</li>
			</ul>
			<nav class="sidebar-nav mt-2">
				<ul class="metismenu">
					<li><a href="/"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
					<li><a href="/report"><i class="fa fa-calendar-check-o"></i><span>ATP Report</span></a></li>
				</ul>
			</nav>
		</div>

		<div class="page">
			<!-- Navbar -->
			<div class="section-body" id="page_top" >
				<div class="container-fluid">
					<div class="page-header">
						<div class="left">                        
							<div class="input-group">
								<input type="text" class="form-control" placeholder="What you want to find">
								<div class="input-group-append">
									<button class="btn btn-outline-secondary" type="button">Search</button>
								</div>
							</div>
						</div>
						<div class="right">
							<div class="notification d-flex">
								<div class="dropdown d-flex">
									<a href="javascript:void(0)" class="chip ml-3" data-toggle="dropdown">
										<span class="avatar" style="background-image: url(assets/images/xs/avatar5.jpg)"></span> George</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
											<a class="dropdown-item" href="page-profile.html"><i class="dropdown-icon fe fe-user"></i> Profile</a>
											<a class="dropdown-item" href="app-setting.html"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
											
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
											<a class="dropdown-item" href="login"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Main Content -->
				@yield('main-content')

				<!-- Footer -->
				<div class="section-body">
					<footer class="footer">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-sm-12">
									Copyright © ATP Report
								</div>
								<div class="col-md-6 col-sm-12 text-md-right">
									PT. Velacom Indonesia
								</div>
							</div>
						</div>
					</footer>
				</div>
			</div>    
		</div>

		<!-- Start Main project js, jQuery, Bootstrap -->
		<script src="assets/bundles/lib.vendor.bundle.js"></script>

		<script src="assets/plugins/dropify/js/dropify.min.js"></script>

		<!-- Start project main js  and page js -->
		<script src="assets/js/core.js"></script>
	</body>
	</html>
