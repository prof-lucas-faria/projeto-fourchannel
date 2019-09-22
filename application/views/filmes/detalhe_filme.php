<div id="content-sidebar-pro">

    <div id="content-sidebar-image">
        <img src="https://image.tmdb.org/t/p/w500<?= $detalhes_full->detalhes->poster_path ?>" alt="Movie Poster">
    </div>

    <div class="content-sidebar-section">
        <h2 class="content-sidebar-sub-header"><?= $detalhes_full->detalhes->title ?></h2>

    </div><!-- close .content-sidebar-section -->
    <form id="formulario" name="formulario">

        <input type="hidden" id="idf" name="id" value="<?= $this->uri->segment('3'); ?>">
        <input type="hidden" name="duracao" id="duracao" class="duracao"
            value="<?= $detalhes_full->detalhes->runtime ?>">
            <input type="hidden" name="id_usuario" value="<?= $_SESSION['usuario'][0]->idusuario?>">
            <div class="content-sidebar-section">
     
     <?= empty($_SESSION['usuario']) == true ? '': "<h4 class='content-sidebar-sub-header'><Button class='btn btn-success' type='submit'>Adicionar a minha
                Biblioteca</Button></h4>"?>   

    </div><!-- close .content-sidebar-section -->
    </form>
    <div class="content-sidebar-section">
        <h4 class="content-sidebar-sub-header">Laçamento</h4>
        <div class="content-sidebar-short-description"><?php $now = new DateTime($detalhes_full->detalhes->release_date);
                                                        echo $now->format("d/m/Y")  ?></div>
    </div><!-- close .content-sidebar-section -->


    <div class="content-sidebar-section">
        <h4 class="content-sidebar-sub-header">Duração</h4>
        <div class="content-sidebar-short-description duracao"><?= $detalhes_full->detalhes->runtime ?> min</div>

    </div><!-- close .content-sidebar-section -->


    <div class="content-sidebar-section">
        <h4 class="content-sidebar-sub-header">Diretor</h4>
        <?php foreach($detalhes_full->elenco->crew as $producao){?>
        <?php if($producao['department'] =="Directing" && $producao['job'] =="Director"){?>
        <div class="content-sidebar-short-description"><?= $producao['name']?></div>
        <?php }?>
        <?php }?>
    </div><!-- close .content-sidebar-section -->




    <div class="content-sidebar-section">
        <h2 class="content-sidebar-sub-header adjusted-recent-reviews">Reviews Recentes</h2>
        <ul id="sidebar-reviews-pro">

            <?php if ($detalhes_full->reviews != null && $detalhes_full->reviews != "")  { ?>
            <?php foreach ($detalhes_full->reviews as $reviews) { ?>
            <li>
                <h6><?= $reviews['author'] ?></h6>
                <!-- <div class="sidebar-review-time">October 22, 2017</div> -->
                <!-- <div class="spoiler-review">Contains Spoiler</div> -->
                <p><?= $reviews['content'] ?></p>
            </li>
            <?php } ?>
            <?php } else { ?>
            <h6>Nenhum Resultado</h6>
            <?php } ?>
        </ul>

    </div><!-- close .content-sidebar-section -->
</div><!-- close #content-sidebar-pro -->
</div><!-- close #content-sidebar-pro -->

<main id="col-main-with-sidebar">

    <div id="movie-detail-header-pro"
        style="background-image:url('https://image.tmdb.org/t/p/original/<?= $detalhes_full->detalhes->backdrop_path ?>')">

        <div id="movie-detail-header-media">
            <div class="dashboard-container">
                <h5>Traillers</h5>
                <div class="row">
                    <?php foreach ($detalhes_full->videos->results as $traillers) { ?>
                    <div class="col-6 col-md-4 col-lg-4">
                        <div class="movie-detail-media-image">
                            <iframe width="auto" height="auto"
                                src="https://www.youtube.com/embed/<?= $traillers['key'] ?>" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>

                    </div>
                    <?php } ?>

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
            <h2>Resumo</h2>
            <p><?= $detalhes_full->detalhes->overview ?></p>
        </div><!-- close .movie-details-section -->

        <div class="movie-details-section ">
            <h2>Elenco</h2>
            <div class="row flex-row ">
                <?php foreach ($detalhes_full->elenco->cast as $elenco) { ?>
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
        </div><!-- close .movie-details-section -->


        <div class="movie-details-section">
            <h2>Filmes Semelhantes</h2>
            <div class="row">

                <?php foreach ($detalhes_full->similar->results as $filmes_similares) { ?>
                <?php if ($filmes_similares['poster_path'] != null && $filmes_similares['poster_path'] != '') { ?>
                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="item-listing-container-skrn">
                        <a href="<?= base_url() ?>index.php/Filmes/detalheFilmes/<?= $filmes_similares['id'] ?>"><img
                                src="https://image.tmdb.org/t/p/w500<?= $filmes_similares['poster_path'] ?>"
                                alt="Listing"></a>
                        <div class="item-listing-text-skrn">
                            <div class="item-listing-text-skrn-vertical-align">
                                <h6><a
                                        href="<?= base_url() ?>index.php/Filmes/detalhesFilme/<?= $filmes_similares['id'] ?>"><?= $filmes_similares['title'] ?></a>
                                </h6>
                                <div class="circle-rating-pro"
                                    data-value="0.<?= number_format($filmes_similares['vote_average']) ?>"
                                    data-animation-start-value="0.0" data-size="32" data-thickness="3" data-fill="{
								                                                                                  &quot;color&quot;: &quot;#42b740&quot;
								                                                                                }" data-empty-fill="#def6de"
                                    data-reverse="true"><span
                                        style="color:#42b740;"><?= $filmes_similares['vote_average'] ?></span></div>
                            </div><!-- close .item-listing-text-skrn-vertical-align -->
                        </div><!-- close .item-listing-text-skrn -->
                    </div><!-- close .item-listing-container-skrn -->
                </div><!-- close .col -->
                <?php } ?>
                <?php } ?>
            </div><!-- close .movie-details-section -->

        </div><!-- close .dashboard-container -->
</main>
</div><!-- close #sidebar-bg-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<!-- Required Framework JavaScript -->


<script src="<?= base_url()?>assets/js/libs/jquery-3.3.1.min.js"></script><!-- jQuery -->
<script src="<?= base_url()?>assets/js/libs/popper.min.js" defer></script><!-- Bootstrap Popper/Extras JS -->
<script src="<?= base_url()?>assets/js/libs/bootstrap.min.js" defer></script><!-- Bootstrap Main JS -->
<!-- All JavaScript in Footer -->
<script>
var frm = $('#formulario');

frm.submit(function(e) {

    e.preventDefault();

    $.ajax({
        type: 'POST',
        url: '<?= base_url()?>index.php/Usuario/pegaValoresFilmes',
        data: frm.serialize(),
        success: function(data) {
            console.log(data)
            var json = JSON.parse(data)
            if (json.status === 'ok') {
                Swal.fire({
                    position: 'top-end',
                    type: 'success',
                    title: "Adicionado a biblioteca",
                    showConfirmButton: false,
                    timer: 1500
                })

            }else
            if(json.status === 'ee'){
                Swal.fire({
                    position: 'top-end',
                    type: 'error',
                    title: "Filme já adicionado em sua biblioteca",
                    showConfirmButton: false,
                    timer: 1500
                })
            }

        },
        error: function(data) {
            console.log(data)


        },
    });
});
</script>
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