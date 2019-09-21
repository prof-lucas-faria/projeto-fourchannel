<main id="col-main-with-sidebar">

    <div class="dashboard-container">

        <ul class="dashboard-sub-menu">
            <li class=""><a href="<?=base_url()?>index.php/Usuario/home">Home</a></li>
            <li class=""><a href="<?=base_url()?>index.php/Usuario/perfil">Editar perfil</a></li>
        </ul><!-- close .dashboard-sub-menu -->



        <div class="container-fluid">
            <div class="row">

                <div class="col-12  col-lg-3">
                    <div id="account-edit-photo">
                        <div><img src="http://via.placeholder.com/400x400.jpg" alt="Account Image"></div>
                        <p><a href="#!" class="btn btn-green-pro">Alterar foto</a></p>
                        <p><a href="#!" class="btn">Remover</a></p>
                    </div>
                </div><!-- close .col -->
                <div class="col">

                    <form class="account-settings-form"
                        action="<?=base_url()?>index.php/Usuario/atualizarInformacoesConta">

                        <h5>Informações gerais</h5>

                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="nome" class="col-form-label">Nome:</label>
                                    <input type="text" class="form-control" name="nome" value="Suzie">
                                </div>
                            </div><!-- close .col -->
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="last-name" class="col-form-label">Nome de Usuario:</label>
                                    <input type="text" class="form-control" disabled="true" value="Smith">
                                </div>
                            </div><!-- close .col -->
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="last-name" class="col-form-label">E-mail:</label>
                                    <input type="text" class="form-control" disabled="true" value="Smith@gmail.com">
                                </div>
                            </div><!-- close .col -->

                        </div><!-- close .row -->
                        <hr>

                        <h5>Informações da conta</h5>

                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="e-mail" class="col-form-label">E-mail</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        value="suzie@outlook.com">
                                </div>
                            </div><!-- close .col -->
                            <div class="col-sm">
                                <div class="form-group">
                                    <div><label for="button-change" class="col-form-label">&nbsp; &nbsp;</label></div>
                                    <a href="#!" onclick="b()" class="btn btn-form">Alterar E-mail</a>
                                </div>
                            </div><!-- close .col -->

                        </div><!-- close .row -->

                        <hr>
                        <h5>Alterar senha</h5>
                        <p class="small-paragraph-spacing">Você pode alterar a senha que você usa para sua conta aqui.
                        </p>
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Senha atual:</label>
                                    <input type="text" class="form-control" name="senha_atual"
                                        value="&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;">
                                </div>
                            </div><!-- close .col -->
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="new-password" class="col-form-label">Nova senha:</label>
                                    <input type="text" class="form-control" name="nova_senha"
                                        placeholder="Minimo 6 caracteres">
                                </div>
                            </div><!-- close .col -->
                            <div class="col-sm">
                                <div class="form-group">
                                    <div><label for="confirm-password" class="col-form-label">&nbsp; &nbsp;</label>
                                    </div>
                                    <input type="text" class="form-control" name="nova_senha_c"
                                        placeholder="Confirme a senha">
                                </div>
                            </div><!-- close .col -->
                        </div><!-- close .row -->

                        <hr>

                        <div class="clearfix"></div>
                        <hr>
                        <p><a href="#" onclick="a()" class="btn btn-green-pro">Salvar</a></p>
                        <br>
                    </form>

                </div><!-- close .col -->

            </div><!-- close .row -->
        </div><!-- close .container-fluid -->
    </div><!-- close .dashboard-container -->
</main>


</div><!-- close #sidebar-bg-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script>
function a() {
    Swal.fire({
        position: 'top-end',
        type: 'success',
        title: 'Salvo com sucesso',
        showConfirmButton: false,
        timer: 2000
    })
}
function b() {
    Swal.fire({
        position: 'top-end',
        type: 'success',
        title: 'Email atualizado com sucesso !!',
        showConfirmButton: false,
        timer: 2000
    })
}
</script>
<!-- Required Framework JavaScript -->
<script src="<?=base_url()?>assets/js/libs/jquery-3.3.1.min.js"></script><!-- jQuery -->
<script src="<?=base_url()?>assets/js/libs/popper.min.js" defer></script><!-- Bootstrap Popper/Extras JS -->
<script src="<?=base_url()?>assets/js/libs/bootstrap.min.js" defer></script><!-- Bootstrap Main JS -->
<!-- All JavaScript in Footer -->

<!-- Additional Plugins and JavaScript -->
<script src="<?=base_url()?>assets/js/navigation.js" defer></script><!-- Header Navigation JS Plugin -->
<script src="<?=base_url()?>assets/js/jquery.flexslider-min.js" defer></script><!-- FlexSlider JS Plugin -->
<script src="<?=base_url()?>assets/js/jquery-asRange.min.js" defer></script><!-- Range Slider JS Plugin -->
<script src="<?=base_url()?>assets/js/circle-progress.min.js" defer></script><!-- Circle Progress JS Plugin -->
<script src="<?=base_url()?>assets/js/afterglow.min.js" defer></script><!-- Video Player JS Plugin -->
<script src="<?=base_url()?>assets/js/script.js" defer></script><!-- Custom Document Ready JS -->
<script src="<?=base_url()?>assets/js/script-dashboard.js" defer></script>
<!-- Custom Document Ready for Dashboard Only JS -->


</body>

</html>