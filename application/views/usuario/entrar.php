<div id="content-pro">

    <div class="container">
        <div class="centered-headings-pro pricing-plans-headings">
          
            <h1>Entrar</h1>
        </div>
    </div><!-- close .container -->


    <div id="pricing-plans-background-image">
        <div class="container">
            <div class="registration-steps-page-container">

                <form class="registration-steps-form" action="<?= base_url()?>index.php/Usuario/entrar" method="post">

                    <div class="registration-social-login-container">

                        <div class="form-group">
                            <label for="full-name" class="col-form-label">E-mail</label>
                            <input type="text" class="form-control" name="email" >
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Senha</label>
                            <input type="text" class="form-control" name="senha" >
                        </div>
                       
                        <div class="clearfix"></div>
						<input type="submit" class="btn btn-green-pro" value="Entrar"/>
						<a href="<?= base_url()?>index.php/Usuario/cadastre">registre-se</a>
                    </div><!-- close .registration-social-login-container -->
                    <div class="form-group last-form-group-continue">
                        <div class="clearfix"></div>
                    </div>

                </form>

            </div><!-- close .registration-steps-page-container -->

        </div><!-- close .container -->
    </div><!-- close #pricing-plans-background-image -->

</div><!-- close #content-pro -->

<footer id="footer-pro">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="copyright-text-pro">&copy; Copyright 2018 SKRN. All Rights Reserved</div>
            </div><!-- close .col -->
            <div class="col-md">
                <ul class="social-icons-pro">
                    <li class="facebook-color"><a href="http://facebook.com/progressionstudios" target="_blank"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li class="twitter-color"><a href="http://twitter.com/Progression_S" target="_blank"><i
                                class="fab fa-twitter"></i></a></li>
                    <li class="youtube-color"><a href="http://youtube.com" target="_blank"><i
                                class="fab fa-youtube"></i></a></li>
                    <li class="vimeo-color"><a href="http://vimeo.com" target="_blank"><i
                                class="fab fa-vimeo-v"></i></a></li>
                </ul>
            </div><!-- close .col -->
        </div><!-- close .row -->
    </div><!-- close .container -->
</footer>

<a href="#0" id="pro-scroll-top"><i class="fas fa-chevron-up"></i></a>


<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal" aria-hidden="true">
    <button type="button" class="close float-close-pro" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header-pro">
                <h2>Welcome Back</h2>
                <h6>Sign in to your account to continue using SKRN</h6>
            </div>
            <div class="modal-body-pro social-login-modal-body-pro">

                <div class="registration-social-login-container">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-green-pro btn-display-block">Sign In</button>
                        </div>
                        <div class="container-fluid">
                            <div class="row no-gutters">
                                <div class="col checkbox-remember-pro"><input type="checkbox"
                                        id="checkbox-remember"><label for="checkbox-remember"
                                        class="col-form-label">Remember me</label></div>
                                <div class="col forgot-your-password"><a href="#!">Forgot your password?</a></div>
                            </div>
                        </div><!-- close .container-fluid -->

                    </form>

                    <div class="registration-social-login-or">or</div>

                </div><!-- close .registration-social-login-container -->

                <div class="registration-social-login-options">
                    <h6>Sign in with your social account</h6>
                    <div class="social-icon-login facebook-color"><i class="fab fa-facebook-f"></i> Facebook</div>
                    <div class="social-icon-login twitter-color"><i class="fab fa-twitter"></i> Twitter</div>
                    <div class="social-icon-login google-color"><i class="fab fa-google-plus-g"></i> Google</div>
                </div><!-- close .registration-social-login-options -->

                <div class="clearfix"></div>


            </div><!-- close .modal-body -->

            <a class="not-a-member-pro" href="signup-step2.html">Not a member? <span>Join Today!</span></a>
        </div><!-- close .modal-content -->
    </div><!-- close .modal-dialog -->
</div><!-- close .modal -->


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