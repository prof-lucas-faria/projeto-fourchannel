
		<main id="col-main-with-sidebar">
			
			<div class="dashboard-container">
			
				<ul class="dashboard-sub-menu">
					<li class=""><a href="<?= base_url()?>index.php/Usuario/home">Home</a></li>
					<li class=""><a href="<?= base_url()?>index.php/Usuario/perfil">Editar perfil</a></li>
				</ul><!-- close .dashboard-sub-menu -->
				
				<h1>Recem assistidos</h1>
				<div class="row">
				<?php foreach($filmes_assistidos as $listaFilmesJaAssistidos){?>
					<div class="col-12 col-md-6 col-lg-6 col-xl-4">
						<div class="item-listing-container-skrn">
							<a href="<?=base_url()?>index.php/Filmes/detalheFilmes/<?=$listaFilmesJaAssistidos->id?>"l"><img src="https://image.tmdb.org/t/p/original<?=$listaFilmesJaAssistidos->poster_path?>" alt="Listing"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html"><?= $listaFilmesJaAssistidos->title?></a></h6>
								<div class="circle-rating-pro" data-value="0.<?=round($listaFilmesJaAssistidos->vote_average)?>"
                                data-animation-start-value="0.6" data-size="32" data-thickness="3" data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }" data-empty-fill="#ffe1e1" data-reverse="true"><span
                                    style="color:#ff4141;"><?=$listaFilmesJaAssistidos->vote_average?></span></div>
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
		<script src="<?= base_url()?>assets/js/script-dashboard.js" defer></script><!-- Custom Document Ready for Dashboard Only JS -->
		
		
	</body>
</html>