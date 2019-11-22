<main id="col-main">

   
    <ul class="dashboard-genres-pro">
        <?php foreach ($generos->genres as $listaDeGeneros) {?>
        <li class="active">
        <a href="<?=base_url()?>index.php/Filmes/listarPorGenero/<?= $listaDeGeneros['id']?>" alt="Listing">

        
            <img src="<?=base_url()?>assets/images/genres/<?=$listaDeGeneros['id']?>.png" alt="Drama">

            </a>
            <h6><?=$listaDeGeneros['name']?></h6>
        </li>
        <?php }?>
    </ul>

    <div class="clearfix"></div>

    <div class="dashboard-container">

        <h4 class="heading-extra-margin-bottom">Resultado da pesquisa por: <?=$_GET['termosBusca']?></h4>
        <div class="row">
       <?php foreach ($resultado->results as $listaDeResultados) {?>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                          
                    <a href="<?= $this->uri->uri_string() =="Series/pesquisarSeries" ? base_url().'index.php/Series/detalheSeries/'.$listaDeResultados['id']:base_url().'index.php/Filmes/detalheFilmes/'.$listaDeResultados['id']?>"><img
                            src="https://image.tmdb.org/t/p/original<?=$listaDeResultados['poster_path']?>"
                            alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align">
                            <h6><a href="3"><?=empty($listaDeResultados['original_name']) == true? $listaDeResultados['title']:$listaDeResultados['original_name'] ?></a></h6>
                            <div class="circle-rating-pro" data-value="0.<?=round($listaDeResultados['vote_average'])?>"
                                data-animation-start-value="0.6" data-size="32" data-thickness="3" data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }" data-empty-fill="#ffe1e1" data-reverse="true"><span
                                    style="color:#ff4141;"><?=$listaDeResultados['vote_average']?></span></div>
                           
                   
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->
            <?php }?>
        </div><!-- close .row -->

       


    </div><!-- close .dashboard-container -->
</main>


</div><!-- close #sidebar-bg-->

<!-- Required Framework JavaScript -->
<script src="<?=base_url()?>assets/js/libs/jquery-3.3.1.min.js"></script><!-- jQuery -->
<script src="<?=base_url()?>assets/js/libs/popper.min.js" defer></script><!-- Bootstrap Popper/Extras JS -->
<script src="<?=base_url()?>assets/js/libs/bootstrap.min.js" defer></script><!-- Bootstrap Main JS -->
<!-- All JavaScript in Footer -->

<!-- Additional Plugins and JavaScript -->
<script src="<?=base_url()?>assets/js/navigation.js" defer></script><!-- Header Navigation JS Plugin -->
<script src="<?=base_url()?>assets/js/jquery-asRange.min.js" defer></script><!-- Range Slider JS Plugin -->
<script src="<?=base_url()?>assets/js/jquery.flexslider-min.js" defer></script><!-- FlexSlider JS Plugin -->
<script src="<?=base_url()?>assets/js/circle-progress.min.js" defer></script><!-- Circle Progress JS Plugin -->
<script src="<?=base_url()?>assets/js/afterglow.min.js" defer></script><!-- Video Player JS Plugin -->
<script src="<?=base_url()?>assets/js/script.js" defer></script><!-- Custom Document Ready JS -->
<script src="<?=base_url()?>assets/js/script-dashboard.js" defer></script>
<!-- Custom Document Ready for Dashboard Only JS -->


</body>

</html>