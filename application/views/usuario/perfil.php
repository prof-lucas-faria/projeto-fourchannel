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

                    <form name="informacaoConta" id="informacaoConta" class="account-settings-form"
                        action="<?=base_url()?>index.php/Usuario/atualizarInformacoesConta">

                        <h5>Informações gerais</h5>

                        <div class="row">

                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="last-name" class="col-form-label">Nome de Usuario:</label>
                                    <input type="text" class="form-control" name="nome"
                                        value="<?=$usuario[0]->nome_usuario?>">
                                </div>
                            </div><!-- close .col -->
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="last-name" class="col-form-label">E-mail:</label>
                                    <input type="text" class="form-control" name="email"
                                        value="<?=$usuario[0]->email?>">
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
                                    <input type="password" class="form-control" name="senha_atual"
                                        value="<?=$usuario[0]->senha?>">
                                </div>
                            </div><!-- close .col -->
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="new-password" class="col-form-label">Nova senha:</label>
                                    <input type="password" class="form-control" name="nova_senha"
                                        placeholder="Minimo 6 caracteres" >
                                </div>
                            </div><!-- close .col -->
                            <div class="col-sm">
                                <div class="form-group">
                                    <div><label for="confirm-password" class="col-form-label">&nbsp; &nbsp;</label>
                                    </div>
                                    <input type="password" class="form-control" name="nova_senhaC"
                                        placeholder="Confirme a senha" >
                                </div>
                            </div><!-- close .col -->
                        </div><!-- close .row -->

                        <hr>

                        <div class="clearfix"></div>
                        <hr>
                        <p><button type="submit" class="btn btn-green-pro">Salvar</button></p>
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
function validacao() {

    var nome = document.forms["informacaoConta"]["nome"].value;
    var email = document.forms["informacaoConta"]["email"].value;
    var nsenha = document.forms["informacaoConta"]["nova_senha"].value;
    var senha = document.forms["informacaoConta"]["senha_atual"].value;
    var nsenhac = document.forms["informacaoConta"]["nova_senhaC"].value;

if(nsenha != nsenhac){
    Swal.fire({
            position: 'center',
            type: 'error',
            title: "Verifique sua senha!!",
            showConfirmButton: false,
            timer: 2000
        });

}else{
    console.log(nome);
    console.log(email);
    console.log(nsenha);
    console.log(senha);
    
    if (nome == "" || email == "" || nsenha == "" || senha == "") {
        Swal.fire({
            position: 'center',
            type: 'error',
            title: 'Todos os campos são obrigatórios',
            showConfirmButton: false,
            timer: 2000
        });
        return false;
    } else {
        return true
    }
}
    
}
</script>
<!-- Required Framework JavaScript -->
<script src="<?=base_url()?>assets/js/libs/jquery-3.3.1.min.js"></script><!-- jQuery -->
<script src="<?=base_url()?>assets/js/libs/popper.min.js" defer></script><!-- Bootstrap Popper/Extras JS -->
<script src="<?=base_url()?>assets/js/libs/bootstrap.min.js" defer></script><!-- Bootstrap Main JS -->
<!-- All JavaScript in Footer -->
<script>
var formConta = $('#informacaoConta');
formConta.submit(function(e) {

    e.preventDefault();
    if( validacao()==true){
        $.ajax({
        type: 'POST',
        url: '<?=base_url()?>index.php/Usuario/atualizarInformacoesConta',
        data: formConta.serialize(),
        success: function(data) {
            console.log(data)
            var json = JSON.parse(data)
            if (json.atualizado == true) {
                Swal.fire({
                    position: 'top-end',
                    type: 'success',
                    title: 'Salvo com sucesso',
                    showConfirmButton: false,
                    timer: 2000
                });
                location.reload();
            }
        },
        error: function(data) {
            console.log(data)


        },
    });
    }

   
});
</script>
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