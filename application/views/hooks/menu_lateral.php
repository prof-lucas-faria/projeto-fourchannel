<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/style.css">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">

		<link rel="stylesheet" href="<?=base_url()?>assets/icons/fontawesome/css/fontawesome-all.min.css"><!-- FontAwesome Icons -->
		<link rel="stylesheet" href="<?=base_url()?>assets/icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css"><!-- iconsmind.com Icons -->


		<title>Fourchannel</title>
	</head>
	<body>
		<div id="sidebar-bg">

      <header id="videohead-pro" class="sticky-header">
			<div id="video-logo-background"><a href="<?=base_url()?>index.php/Filmes"><img src="<?=base_url()?>assets/images/logo-video-layout.png" alt="Logo"></a></div>

			<div id="video-search-header">
				<div id="search-icon-more"></div>
				<input type="text" placeholder="Busca por filmes, séries, tv e animes" aria-label="Search">
				<div id="video-search-header-filtering">
					<form id="video-search-header-filtering-padding">
						<div class="row">
							<div class="col-sm extra-padding">
								<h5>Type:</h5>

								<div class="row">
									<div class="col-sm">
										<label class="checkbox-pro-container">Movies
										  <input type="checkbox" checked="checked" id="movies-type">
										  <span class="checkmark-pro"></span>
										</label>

										<label class="checkbox-pro-container">TV Series
										  <input type="checkbox" id="tv-type">
										  <span class="checkmark-pro"></span>
										</label>
									</div><!-- close .col -->
									<div class="col">
										<label class="checkbox-pro-container">New Arrivals
										  <input type="checkbox" id="movie-type">
										  <span class="checkmark-pro"></span>
										</label>

										<label class="checkbox-pro-container">Documentary
										  <input type="checkbox" id="documentary-type">
										  <span class="checkmark-pro"></span>
										</label>
									</div><!-- close .col -->
								</div><!-- close .row -->

								<div class="dotted-dividers-pro"></div>
							</div><!-- close .col -->
							<div class="col-sm extra-padding">
								<h5>Genres:</h5>
								<select class="custom-select">
								  <option selected>All Genres</option>

								</select>
								<div class="dotted-dividers-pro"></div>
							</div><!-- close .col -->
							<div class="col-sm extra-padding">
								<h5>Country:</h5>
								<select class="custom-select">
								  <option selected>All Countries</option>

								</select>
								<div class="dotted-dividers-pro"></div>
							</div><!-- close .col -->
							<div class="col-sm extra-padding extra-range-padding">
								<h5>Average Rating:</h5>
				            <input class="range-example-rating-input" type="text" min="0" max="10" value="4,10" step="1" />
								<!-- JS is under /js/script.jss -->
							</div><!-- close .col -->
						</div><!-- close .row -->
						<div id="video-search-header-buttons">
							<a href="#!" class="btn btn-green-pro">Filter Search</a>
							<a href="#!" class="btn">Reset</a>
						</div><!-- close #video-search-header-buttons -->
					</form><!-- #video-search-header-filtering-padding -->
				</div><!-- close #video-search-header-filtering -->
			</div><!-- close .video-search-header -->

			<div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>




			<div id="header-user-profile">
				<div id="header-user-profile-click" class="noselect">
					<img src="<?=base_url()?>assets/images/demo/user-profile.jpg" alt="Suzie">
					<div id="header-username"><?=$logado == true ? 'nome do usuario' :  '<a href='.base_url().'index.php/Usuario>Entrar<a/>'?></div><i class="fas fa-angle-down"></i>
				</div><!-- close #header-user-profile-click -->
				<?php if ($logado) {?>
				<div id="header-user-profile-menu">
					<ul>

						<li><a href="dashboard-profile.html"><span class="icon-User"></span>My Profile</a></li>
						<li><a href="dashboard-favorites.html"><span class="icon-Favorite-Window"></span>My Favorites</a></li>
						<li><a href="dashboard-account.html"><span class="icon-Gears"></span>Account Details</a></li>
						<li><a href="#!"><span class="icon-Life-Safer"></span>Help/Support</a></li>
						<li><a href="index.html"><span class="icon-Power-3"></span>Log Out</a></li>
					</ul>
				</div><!-- close #header-user-profile-menu -->
				<?php }?>
			</div><!-- close #header-user-profile -->

			<div class="clearfix"></div>

			<nav id="mobile-navigation-pro">

				<ul id="mobile-menu-pro">
	            <li>
	              <a href="dashboard-home.html">
						<span class="icon-Old-TV"></span>
	                TV Series
	              </a>
	            <li>
	            <li class="current-menu-item">
	              <a href="dashboard-movies.html">
						<span class="icon-Reel"></span>
	                Movies
	              </a>
	            </li>
	            <li>
	              <a href="dashboard-playlists.html">
						<span class="icon-Movie"></span>
	                Playlists
	              </a>
	            </li>
	            <li>
	              <a href="dashboard-new-arrivals.html">
						<span class="icon-Movie-Ticket"></span>
	                New Arrivals
	              </a>
	            </li>
	            <li>
	              <a href="dashboard-coming-soon.html">
						<span class="icon-Clock"></span>
	                Coming Soon
	              </a>
	            </li>
	            <li>
	              <a href="#!">
						<i class="far fa-bell"></i>
						<span class="user-notification-count">3</span>
	                Notifications
	              </a>
	            </li>
				</ul>
				<div class="clearfix"></div>

				<div id="search-mobile-nav-pro">
					<input type="text" placeholder="Busca por filmes, séries, tv e animes" aria-label="Search">
				</div>

			</nav>

      </header>



		<nav id="sidebar-nav"><!-- Add class="sticky-sidebar-js" for auto-height sidebar -->
            <ul id="vertical-sidebar-nav" class="sf-menu">
            <li class="normal-item-pro current-menu-item">
                <a href="/projeto-fourchannel/index.php/Filmes/index/1">
						<span class="icon-Reel"></span>
				  Filmes

                </a>
              </li>
              <li class="normal-item-pro">
              <a href="/projeto-fourchannel/index.php/Series/">
              <span class="icon-Movie-Ticket"></span>
                   Series
                </a>
              </li>

              <li class="normal-item-pro">
                <a href="dashboard-home.html">
						<span class="icon-Old-TV"></span>
                   TV
                </a>
              </li>
              <li class="normal-item-pro">
                <a href="dashboard-new-arrivals.html">
						<span class="icon-Movie-Ticket"></span>
                  Animes
                </a>


            </ul>
				<div class="clearfix"></div>
		</nav>
