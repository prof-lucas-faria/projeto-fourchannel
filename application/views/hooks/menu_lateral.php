<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/style.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">

    <link rel="stylesheet" href="<?=base_url()?>assets/icons/fontawesome/css/fontawesome-all.min.css">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="<?=base_url()?>assets/icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css">
    <!-- iconsmind.com Icons -->


    <title>Fourchannel</title>
</head>

<body>
    <div id="sidebar-bg">

        <header id="videohead-pro" class="sticky-header">
            <div id="video-logo-background"><a href="<?=base_url()?>index.php/Filmes"><img
                        src="<?=base_url()?>assets/images/CDR/fourChannel.png" alt="Logo"></a></div>

            <div id="video-search-header">
                <div id="search-icon-more"></div>
                <input type="text" placeholder="Busca por filmes, séries, tv e animes" aria-label="Search">
                <div id="video-search-header-filtering">
                    <form id="video-search-header-filtering-padding">
                        <div class="row">
                            <div class="col-sm extra-padding">
                                <h5>Tipo:</h5>

                                <div class="row">
                                    <div class="col-sm">
                                        <label class="checkbox-pro-container">Filmes
                                            <input type="checkbox" checked="checked" id="movies-type">
                                            <span class="checkmark-pro"></span>
                                        </label>

                                        <label class="checkbox-pro-container">Series
                                            <input type="checkbox" id="tv-type">
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
                    <div id="header-username">
                        <?= isset($_SESSION['status']) == true ?  $_SESSION['usuario'][0]->nome_usuario : '<a href=' . base_url() . 'index.php/Usuario>Entrar<a/>'?>
                    </div><i class="fas fa-angle-down"></i>
                </div><!-- close #header-user-profile-click -->
                <?php if (isset($_SESSION['status']) == true) {?>
                <div id="header-user-profile-menu">
                    <ul>

                        <li><a href="<?= base_url()?>index.php/Usuario/home"><span class="icon-User"></span>Meu Histórico</a></li>
                        <li><a href="<?= base_url()?>index.php/Usuario/perfil"><span class="icon-Favorite-Window"></span>Perfil</a></li>
       
                        <li><a href="<?= base_url()?>index.php/Usuario/sair"><span class="icon-Power-3"></span>Sair</a></li>
                    </ul>
                </div><!-- close #header-user-profile-menu -->
                <?php }?>
            </div><!-- close #header-user-profile -->

            <div class="clearfix"></div>

            <nav id="mobile-navigation-pro">

                <ul id="mobile-menu-pro">
                    <li>
                        <a href="<?=base_url()?>index.php/Series">
                            <span class="icon-Old-TV"></span>
                            Série
                        </a>
                    <li>
                    <li class="current-menu-item">
                        <a href="<?=base_url()?>index.php/Filmes">
                            <span class="icon-Reel"></span>
                            Filme
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>

                <div id="search-mobile-nav-pro">
                    <input type="text" placeholder="Busca por filmes, séries, tv e animes" aria-label="Search">
                </div>

            </nav>

        </header>



        <nav id="sidebar-nav">
            <!-- Add class="sticky-sidebar-js" for auto-height sidebar -->
            <ul id="vertical-sidebar-nav" class="sf-menu">
                <li class="normal-item-pro current-menu-item">
                    <a href="<?=base_url()?>index.php/Filmes">
                        <span class="icon-Reel"></span> Filmes
                    </a>
                </li>
                <li class="normal-item-pro">
                    <a href="<?=base_url()?>index.php/Series">
                        <span class="icon-Movie-Ticket"></span>
                        Series
                    </a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </nav>