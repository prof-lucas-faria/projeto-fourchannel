<main id="col-main">

<div class="flexslider progression-studios-dashboard-slider progression-studios-full-height-slider">
        <ul class="slides">

            <?php foreach ($populares->results as $listaInicial) {?>
            <li class="progression_studios_animate_left">
                <div class="progression-studios-slider-dashboard-image-background"
                    style="background-image:url(https://image.tmdb.org/t/p/original/<?=$listaInicial['backdrop_path']?>);">
                    <div class="progression-studios-slider-display-table">
                        <div class="progression-studios-slider-vertical-align">

                            <div class="container">
                                <div class="circle-rating-pro" data-value="0.<?=round($listaInicial['vote_average'])?>"
                                    data-animation-start-value="0.86" data-size="70" data-thickness="6" data-fill="{
								          &quot;color&quot;: &quot;#42b740&quot;
								        }" data-empty-fill="#def6de" data-reverse="true"><span
                                        style="color:#42b740;"><?=$listaInicial['vote_average']?></span></div>

                                <div class="progression-studios-slider-dashboard-caption-width">
                                    <div class="progression-studios-slider-caption-align">

                                        <h2><a
                                                href="<?=base_url()?>index.php/Series/detalheSeries/<?=$listaInicial['id']?>"><?=$listaInicial['name']?></a>
                                        </h2>

                                        <p class="content-sidebar-sub-header"><?=$listaInicial['overview']?></p>




                                        <div class="clearfix"></div>



                                    </div><!-- close .progression-studios-slider-caption-align -->
                                </div><!-- close .progression-studios-slider-caption-width -->

                            </div><!-- close .container -->

                        </div><!-- close .progression-studios-slider-vertical-align -->
                    </div><!-- close .progression-studios-slider-display-table -->

                    <div class="progression-studios-slider-mobile-background-cover"></div>
                </div><!-- close .progression-studios-slider-image-background -->
            </li>

            <?php }?>
        </ul>
    </div><!-- close .progression-studios-slider - See /js/script.js file for options -->

    <ul class="dashboard-genres-pro">
        <?php foreach ($generos->genres as $listaDeGeneros) {?>
        <li class="active">
            <img src="<?=base_url()?>assets/images/genres/<?=$listaDeGeneros['id']?>.png" alt="Drama">
            <h6><?=$listaDeGeneros['name']?></h6>
        </li>
        <?php }?>
    </ul>

    <div class="clearfix"></div>

    <div class="dashboard-container">
   

        <h4 class="heading-extra-margin-bottom">Series Por Genero </h4>
        <div class="row">
        <?php foreach($listaDeSeriePorGenero->porgenero->results as $listar){?>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="<?=base_url()?>index.php/Series/detalheSeries/<?=  $listar['id']?>"><img src="https://image.tmdb.org/t/p/original<?= $listar['poster_path']?>"
                            alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align">
                            <h6><a href="<?=base_url()?>index.php/Series/detalheSeries/<?= $listar['id']?>"><?= $listar['name']?></a></h6>
                            <div class="circle-rating-pro" data-value="0.<?= round($listar['vote_average'])  ?>" data-animation-start-value="0.6"
                                data-size="32" data-thickness="3" data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }" data-empty-fill="#ffe1e1" data-reverse="true"><span style="color:#ff4141;"><?= $listar['vote_average']?></span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->
                                <?php }?>
        </div><!-- close .row -->

        

        <ul class="page-numbers">
            <li><a class="previous page-numbers" href="#!"><i class="fas fa-chevron-left"></i></a></li>
            <li><span class="page-numbers current">1</span></li>
            <li><a class="page-numbers" href="#!">2</a></li>
            <li><a class="page-numbers" href="#!">3</a></li>
            <li><a class="page-numbers" href="#!">4</a></li>
            <li><a class="next page-numbers" href="#!"><i class="fas fa-chevron-right"></i></a></li>
        </ul>

    </div><!-- close .dashboard-container -->
</main>


</div><!-- close #sidebar-bg-->

<!-- Required Framework JavaScript -->
<script src="<?= base_url()?>assets/js/libs/jquery-3.3.1.min.js"></script><!-- jQuery -->
<script src="<?= base_url()?>assets/js/libs/popper.min.js"></script><!-- Bootstrap Popper/Extras JS -->
<script src="<?= base_url()?>assets/js/libs/bootstrap.min.js"></script><!-- Bootstrap Main JS -->
<!-- All JavaScript in Footer -->

<!-- Additional Plugins and JavaScript -->
<script src="<?= base_url()?>assets/js/navigation.js"></script><!-- Header Navigation JS Plugin -->
<script src="<?= base_url()?>assets/js/jquery-asRange.min.js"></script><!-- Range Slider JS Plugin -->
<script src="<?= base_url()?>assets/js/jquery.flexslider-min.js"></script><!-- FlexSlider JS Plugin -->
<script src="<?= base_url()?>assets/js/circle-progress.min.js"></script><!-- Circle Progress JS Plugin -->
<script src="<?= base_url()?>assets/js/afterglow.min.js"></script><!-- Video Player JS Plugin -->
<script src="<?= base_url()?>assets/js/script.js"></script><!-- Custom Document Ready JS -->
<script src="<?= base_url()?>assets/js/script-dashboard.js"></script>
<!-- Custom Document Ready for Dashboard Only JS -->


</body>

</html>