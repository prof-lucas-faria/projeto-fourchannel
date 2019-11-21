<div id="content-pro">

    <div class="container">
        <div class="centered-headings-pro pricing-plans-headings">
            <h1>Cadastre-se</h1>
        </div>
    </div><!-- close .container -->

    <div id="pricing-plans-background-image">
        <div class="container">
            <div class="registration-steps-page-container">

                <form  method="post" id="form_cadastro" name="form_cadastro" action="<?=base_url()?>index.php/Usuario/salvarFormulario">

                    <div class="registration-social-login-container">

                        <div class="form-group">
                            <label for="full-name" class="col-form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" require="true">
                        </div>
                       
                        <div class="form-group">
                            <label for="email" class="col-form-label">Nome de Usuario</label>
                            <input type="text" class="form-control" name="nome_usuario" require="true">
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-form-label">Data de nascimento</label>
                            <input type="date" class="form-control" name="data_nascimento" require="true">
                        </div>


                        <div class="form-group">
                            <label for="full-name" class="col-form-label">Telefone</label>
                            <input type="text" class="form-control" name="telefone">
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="text" class="form-control" name="email" require="true">
                        </div>
                        <div class="form-group">
                            <label for="full-name" class="col-form-label">sexo</label>
                            <select class="form-control" name="sexo" id="sexo">
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="password" class="col-form-label">Senha</label>
                                    <input type="password" class="form-control" name="senha" require="true">
                                </div>
                              
                            </div>
                        </div>
                    </div><!-- close .registration-social-login-options -->

                    <div class="clearfix"></div>
                    <div class="form-group last-form-group-continue">
                    <button type="submit"  class="btn btn-green-pro">Cadastre-se</button>    
                    <a href="<?=base_url()?>index.php/Usuario/" >já tenho conta</a>
                        <div class="clearfix"></div>
                    </div>
                </form>

            </div><!-- close .registration-steps-page-container -->

        </div><!-- close .container -->
    </div><!-- close #pricing-plans-background-image -->

</div><!-- close #content-pro -->


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