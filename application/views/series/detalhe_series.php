<div id="content-sidebar-pro">

    <div id="content-sidebar-image">
        <img src="https://image.tmdb.org/t/p/original<?= $detalhes_full['detalhes']['poster_path'] ?>"
            alt="Movie Poster">
    </div>

    <div class="content-sidebar-section">
        <h2 class="content-sidebar-sub-header"><?= $detalhes_full['detalhes']['name'] ?></h2>

    </div><!-- close .content-sidebar-section -->

    <div class="content-sidebar-section">
        <h4 class="content-sidebar-sub-header">Lançamento de Temporadas</h4>
        <div class="content-sidebar-short-description"><?php $now = new DateTime($detalhes_full['detalhes']['first_air_date']);
                                                        echo $now->format("d/m/Y")  ?></div>
    </div><!-- close .content-sidebar-section -->

    <div class="content-sidebar-section">
        <h4 class="content-sidebar-sub-header">Gêneros</h4>
        <div class="content-sidebar-short-description">
            <ul class="progression-studios-slider-rating">
                <?php foreach( $detalhes_full['detalhes']['genres'] as $generos){?>

                <li><?= $generos['name']?></li>
                <?php }?>
            </ul>
        </div>
    </div><!-- close .content-sidebar-section -->

    <div class="content-sidebar-section">
        <h4 class="content-sidebar-sub-header">Temporadas</h4>
        <div class="content-sidebar-short-description"><?= $detalhes_full['detalhes']['number_of_seasons'] ?></div>
    </div><!-- close .content-sidebar-section -->


    <div class="content-sidebar-section">
        <h4 class="content-sidebar-sub-header">Episódios</h4>
        <div class="content-sidebar-short-description"><?= $detalhes_full['detalhes']['number_of_episodes'] ?></div>
    </div><!-- close .content-sidebar-section -->

    

    <div class="content-sidebar-section">
        <h4 class="content-sidebar-sub-header">Em produção</h4>
        <div class="content-sidebar-short-description"><?= $detalhes_full['detalhes']['in_production'] =='1'? 'Sim' :'Descontinuado' ?></div>
    </div><!-- close .content-sidebar-section -->

    <div class="content-sidebar-section">
        <h4 class="content-sidebar-sub-header">Diretor da Serie</h4>
        <?php foreach($detalhes_full['elenco']['crew'] as $producao){?>
        <?php if($producao['department'] =="Directing" && $producao['job'] =="Director"){?>
        <div class="content-sidebar-short-description"><?= $producao['name']?></div>
        <?php }?>
        <?php }?>
    </div><!-- close .content-sidebar-section -->
</div>
</div><!-- close #content-sidebar-pro -->

<main id="col-main-with-sidebar">

    <div id="movie-detail-header-pro"
        style="background-image:url('https://image.tmdb.org/t/p/original/<?= $detalhes_full['detalhes']['backdrop_path'] ?>')">

        <div id="movie-detail-header-media">
            <div class="dashboard-container">
                <h5>Trailers</h5>
                <div class="row">
                    <?php foreach ($detalhes_full['videos']['results'] as $traillers) { ?>

                    <div class="col-6 col-md-4 col-lg-4">
                        <div class="movie-detail-media-image">
                            <iframe width="auto" height="auto"
                                src="https://www.youtube.com/embed/<?= $traillers['key'] ?>" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <?php } ?>
                    </div>
                </div><!-- close .row -->
            </div><!-- close .dashboard-container -->
        </div><!-- close #movie-detail-header-media -->

        <div id="movie-detail-gradient-pro"></div>
    </div><!-- close #movie-detail-header-pro -->


    <div id="movie-detail-rating">
        <div class="dashboard-container">

        </div><!-- close .row -->
    </div><!-- close .dashboard-container -->
    </div><!-- close #movie-detail-rating -->

    <div class="dashboard-container">

        <div class="movie-details-section">
            <h2>Resumo da Série</h2>
            <p><?= $detalhes_full['detalhes']['overview'] ?></p>
        </div><!-- close .movie-details-section -->

        <div class="movie-details-section">
            <h2>Temporadas</h2>
            <div class="row">
                <?php foreach ($detalhes_full['detalhes']['seasons'] as $temporada) { ?>
                <?php if ($temporada['poster_path'] != null && $temporada['poster_path'] != '') { ?>
                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="item-listing-container-skrn">
                        <a href="#!"><img src="https://image.tmdb.org/t/p/w500<?= $temporada['poster_path'] ?>"
                                alt="Cast"></a>
                        <div class="item-listing-text-skrn item-listing-movie-casting">
                            <h6><a href="#!"><?= $temporada['name'] ?></a></h6>
                            <div class="movie-casting-sub-title"><?= $temporada['episode_count'] ?> Episódio</div>
                        </div><!-- close .item-listing-text-skrn -->
                    </div><!-- close .item-listing-container-skrn -->
                </div><!-- close .col -->
                <?php } ?>
                <?php } ?>
            </div><!-- close .row -->
        </div><!-- close .movie-details-section -->

        <div class="movie-details-section">
            <h2>Criado por</h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="item-listing-container-skrn">
                        <a href="#!"><img src="http://via.placeholder.com/507x672" alt="Cast"></a>
                        <div class="item-listing-text-skrn item-listing-movie-casting">
                            <h6><a href="#!">Robert Downey Jr.</a></h6>
                            <div class="movie-casting-sub-title">Tony Stark</div>
                        </div><!-- close .item-listing-text-skrn -->
                    </div><!-- close .item-listing-container-skrn -->
                </div><!-- close .col -->

            </div><!-- close .row -->
        </div><!-- close .movie-details-section -->


        <div class="movie-details-section">
            <h2>Elenco</h2>
            <div class="row flex-row ">
                <?php foreach ($detalhes_full['elenco']['cast'] as $elenco) { ?>
                <?php if ($elenco['profile_path'] != null && $elenco['profile_path'] != '') { ?>
                <div class="col-12 col-md-6 col-lg-6 col-xl-4 ">
                    <div class="item-listing-container-skrn">
                        <a href="#!"><img src="https://image.tmdb.org/t/p/w500<?= $elenco['profile_path'] ?>"
                                alt="Cast"></a>
                        <div class="item-listing-text-skrn item-listing-movie-casting">
                            <h6><a href="#!"><?= $elenco['character'] ?></a></h6>
                            <div class="movie-casting-sub-title"><?= $elenco['name'] ?></div>
                        </div><!-- close .item-listing-text-skrn -->
                    </div><!-- close .item-listing-container-skrn -->
                </div><!-- close .col -->
                <?php } ?>
                <?php } ?>
            </div><!-- close .row -->
            <div class="movie-details-section">

                <div class="movie-details-section">
                    <h2>Disponível em</h2>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="item-listing-container-skrn">
                                <a href="#!"><img src="http://via.placeholder.com/507x672" alt="Cast"></a>
                                <div class="item-listing-text-skrn item-listing-movie-casting">
                                    <h6><a href="#!">Robert Downey Jr.</a></h6>
                                    <div class="movie-casting-sub-title">Tony Stark</div>
                                </div><!-- close .item-listing-text-skrn -->
                            </div><!-- close .item-listing-container-skrn -->
                        </div><!-- close .col -->
                    </div><!-- close .row -->
                </div><!-- close .movie-details-section -->

                <div class="movie-details-section">
                    <h2>Séries Similares Semelhantes</h2>
                    <div class="row">

                        <?php foreach ($detalhes_full['similar']['results'] as $series_similares) { ?>
                        <?php if ($series_similares['poster_path'] != null && $series_similares['poster_path'] != '') { ?>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="item-listing-container-skrn">
                                <a
                                    href="<?= base_url() ?>index.php/Filmes/detalhesFilme/<?= $series_similares['id'] ?>"><img
                                        src="https://image.tmdb.org/t/p/w500<?= $series_similares['poster_path'] ?>"
                                        alt="Listing"></a>
                                <div class="item-listing-text-skrn">
                                    <div class="item-listing-text-skrn-vertical-align">
                                        <h6><a
                                                href="<?= base_url() ?>index.php/Filmes/detalhesFilme/<?= $series_similares['id'] ?>"><?= $series_similares['name'] ?></a>
                                        </h6>
                                        <div class="circle-rating-pro"
                                            data-value="0.<?= number_format($series_similares['vote_average']) ?>"
                                            data-animation-start-value="0.0" data-size="32" data-thickness="3"
                                            data-fill="{
								                                                                                  &quot;color&quot;: &quot;#42b740&quot;
					                                                                 }" data-empty-fill="#def6de" data-reverse="true">
                                            <span style="color:#42b740;"><?= $series_similares['vote_average'] ?></span>
                                        </div>
                                    </div><!-- close .item-listing-text-skrn -->
                                </div><!-- close .item-listing-container-skrn -->
                            </div><!-- close .col -->
                        </div><!-- close .row -->
                        <?php } ?>
                        <?php } ?>
                    </div><!-- close .movie-details-section -->
                </div><!-- close .dashboard-container -->
</main>
</div><!-- close #sidebar-bg-->

<!-- Required Framework JavaScript -->
<script src="<?= base_url()?>assets/js/libs/jquery-3.3.1.min.js"></script><!-- jQuery -->
<script src="<?= base_url()?>assets/js/libs/popper.min.js" defer></script><!-- Bootstrap Popper/Extras JS -->
<script src="<?= base_url()?>assets/js/libs/bootstrap.min.js" defer></script><!-- Bootstrap Main JS -->
<!-- All JavaScript in Footer -->

<!-- Additional Plugins and JavaScript -->
<script src="<?= base_url()?>assets/js/navigation.js" defer></script><!-- Header Navigation JS Plugin -->
<script src="<?= base_url()?>assets/js/jquery.flexslider-min.js" defer></script><!-- FlexSlider JS Plugin -->
<script src="<?= base_url()?>assets/js/jquery-asRange.min.js" defer></script><!-- Range Slider JS Plugin -->
<script src="<?= base_url()?>assets/js/circle-progress.min.js" defer></script><!-- Circle Progress JS Plugin -->
<script src="<?= base_url()?>assets/js/afterglow.min.js" defer></script><!-- Video Player JS Plugin -->
<script src="<?= base_url()?>assets/js/script.js" defer></script><!-- Custom Document Ready JS -->
<script src="<?= base_url()?>assets/js/script-dashboard.js" defer></script>
<!-- Custom Document Ready for Dashboard Only JS -->


</body>

</html>