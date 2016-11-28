<!DOCTYPE html><html lang="en">
<!-- Mirrored from flatfull.com/themes/pulse/player.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Nov 2016 03:24:30 GMT -->
<head>
	<?php include 'header.php' ?>
</head>
<body>
	<!-- NAVEGADOE -->
	<!-- LOGO -->
	<div iv class="app dk" id="app">
		<div id="aside" class="app-aside modal fade nav-dropdown">
			<div class="left navside grey dk" data-layout="column">
				<div class="navbar no-radius">
					<a href="index.php" class="navbar-brand md">
						<img src="images/logo.png" alt="." class=""> 
						<span class="hidden-folded inline">NEOLACTICA</span>
					</a>
				</div>
				<!-- FIN LOGO -->
				<div data-flex class="hide-scroll">
					<nav class="scroll nav-stacked nav-active-primary">
						<ul class="nav" data-ui-nav>
							<li class="nav-header hidden-folded">
								<span class="text-xs text-muted">Main</span>
							</li>
							<li><a href="#">
								<span class="nav-icon"><i class="material-icons">play_circle_outline</i></span> 
								<span class="nav-text">Albunes</span></a>
							</li>
							<li><a href="#"><span class="nav-icon"><i class="material-icons">sort</i></span> 
								<span class="nav-text">Listas</span></a>
							</li>
							<li><a href="#"><span class="nav-icon">
								<i class="material-icons">trending_up</i></span> 
								<span class="nav-text">Pistas</span></a>
							</li>
							<li><a href="#"><span class="nav-icon"><i class="material-icons">portrait</i>
							</span> <span class="nav-text">Artistas</span></a>
						</li>
						<li><a data-toggle="modal" data-target="#search-modal"><span class="nav-icon"><i class="material-icons">search</i>
						</span><span class="nav-text">Buscar</span></a>
					</li>
					<li class="nav-header hidden-folded m-t">
						<span class="text-xs text-muted">Tu Colección</span>
					</li>
					<li><a href="#">
						<span class="nav-icon"><i class="material-icons">list</i></span> <span class="nav-text">Mis caciones</span></a>
					</li>
					<li><a href="#"><span class="nav-icon"><i class="material-icons">queue_music</i>
					</span> <span class="nav-text">Playlists</span></a>
				</li>
				<li><a href="#"><span class="nav-icon">
					<i class="material-icons">favorite_border</i></span><span class="nav-text">Likes</span></a>
				</li>
			</ul>
		</nav>
	</div>
	<!-- FIN NAVEGADOR -->
	<!-- INICIO REPRODUCTOR -->

	<div data-flex-no-shrink>

		<!-- INICIO DE SESION INFO PERSONAL -->
		<div class="nav-fold dropup">
			<a data-toggle="dropdown"><span class="pull-left">
				<img src="images/a3.jpg" alt="..." class="w-32 img-circle"></span> 
				<span class="clear hidden-folded p-x p-y-xs">
					<span class="block _500 text-ellipsis">Rachel Platten</span></span>
				</a>
				<div class="dropdown-menu w dropdown-menu-scale">
					<a class="dropdown-item" href="#"><span>Profile</span></a> 
					<a class="dropdown-item" href="#"><span>Tracks</span></a> 
					<a class="dropdown-item" href="#"><span>Playlists</span></a> 
					<a class="dropdown-item" href="#"><span>Likes</span>
					</a><div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Need help?</a> <a class="dropdown-item" href="#">Sign out</a>
				</div>
			</div>
			<!-- FIN INICIO SESION -->

		</div>
	</div>
</div>


<div id="content" class="app-content white bg box-shadow-z2" role="main">
<!-- NAVEGADOR SM -->
	<div class="app-header hidden-lg-up white lt box-shadow-z1">
		<div class="navbar">
			<a href="index.html" class="navbar-brand md">

				<img src="images/logo.png" alt="." class="">
				<span class="hidden-folded inline">NEOLACTICA</span></a>
				<ul class="nav navbar-nav pull-right">
					<li class="nav-item">
						<a data-toggle="modal" data-target="#aside" class="nav-link"><i class="material-icons">menu</i>
						</a>
					</li>
				</ul>
			</div>
		</div>
<!-- FIN NAVEGADOR SM -->
		<div class="app-footer app-player grey bg">
			<div class="playlist" style="width:100%">
			</div>
		</div>
	</div>
</div>

<!-- FIN REPRODUCTOR -->

<?php include 'footer.php' ?>
</body>

</html>

