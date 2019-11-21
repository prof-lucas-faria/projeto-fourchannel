<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("filme_model");
        $this->load->model("Usuario_model");
    }

    public function index()
    {
        $data['generos'] = $this->filme_model->listaDeGeneros();
        $this->load->view('hooks/menu_lateral', $data);
        $this->load->view('usuario/entrar', $data);
    }

    public function home()
    {
        $this->verificaSessao();
     
        $data['filmes_assistidos']= (object)$this->Usuario_model->listarFilmesJaAssistidos(array('id'=>$_SESSION['usuario'][0]->idusuario));
        $data['estatisticasFilmes'] =$this->Usuario_model->qtdeHorasFilmesAssistidos(array('id'=>$_SESSION['usuario'][0]->idusuario));
        $this->load->view('hooks/menu_lateral');
        $this->load->view('hooks/lateral_usuario',$data);
        $this->load->view('usuario/home',$data);
    }

    public function cadastre()
    {
        

        $data['generos'] = $this->filme_model->listaDeGeneros();
        $this->load->view('hooks/menu_lateral', $data);
        $this->load->view('usuario/cadastre', $data);
    }

   
    public function entrar()
    {
      

        $usuario = $this->Usuario_model->buscarUsuario(
            array('email' => $this->input->post('email'),
                'senha' => md5($this->input->post('senha')
                ),
            )
        );
        if (count($usuario) == 1) {

            $_SESSION['status'] = array('logado' => true);
            $_SESSION['usuario'] = $usuario;

            echo json_encode(array('url'=> base_url().'index.php/Usuario/home'));
        }else{
            echo json_encode(array('status'=>'fail','mensagem'=>'Usuario inválido'));
        }

    }

    public function perfil()
    {
        $this->verificaSessao();

        $data['generos'] = $this->filme_model->listaDeGeneros();
        $data['usuario'] = $this->Usuario_model->exibirInformacoesDoUsuario($_SESSION['usuario'][0]->idusuario);
        $data['estatisticasFilmes'] =$this->Usuario_model->qtdeHorasFilmesAssistidos(array('id'=>$_SESSION['usuario'][0]->idusuario));

        $this->load->view('hooks/menu_lateral', $data);
        $this->load->view('hooks/lateral_usuario', $data);
        $this->load->view('usuario/perfil', $data);
    }

   
    // form atualizar perfil
    public function atualizarInformacoesConta()
    {
       $usuario =array(
           'nome_usuario'=>$this->input->post('nome'),
           'email'=>$this->input->post('email'),
           'senha'=>md5($this->input->post('nova_senha')),
        );

        $this->load->model("Usuario_model");
        $atualiza =$this->Usuario_model->atualizarUsuario($usuario,$_SESSION['usuario'][0]->idusuario);

        if($atualiza){
          //  $_SESSION['usuario'][0]->nome_usuario = $this->input->post('nome');
            echo json_encode(array("atualizado"=>true));
        }else{
           echo json_encode(array("atualizado"=>false));
        }

    }


    //form de cadastro
    public function salvarFormulario()
    {

        $this->load->model("Usuario_model");
        $dados = array(
            'pessoa' => array(
                'nome' => $this->input->post('nome'),
                'data_nascimento' => $this->input->post('data_nascimento'),
                'telefone' => $this->input->post('telefone'),
                'sexo' => $this->input->post('sexo'),
            ),
            'usuario' => array(
                'logado' => true,
                'nome_usuario' => $this->input->post('nome_usuario'),
                'email' => $this->input->post('email'),
                'senha' => md5($this->input->post('senha')),
                'foto' => 'assets/images/demo/user-profile.jpg',
            ),
        );
        $id =$this->Usuario_model->adicionarUsuario($dados);
        if ($id) {
            redirect('Usuario');
        } else {
            redirect('Usuario/cadastre');
        }

    }
    
    public function sair()
    {
        unset($_SESSION['status']);
        unset($_SESSION['usuario']);
        session_destroy();
        redirect('Usuario');
    }

    public function pegaValoresFilmes()
    {
        $this->verificaSessao();
        $this->load->model("Usuario_model");
        $dados = array(
            'id'=> $this->input->post('id'),
            'duracao'=> $this->input->post('duracao'),
            'id_usuario' => $this->input->post('id_usuario'));

        if($this->Usuario_model->adicionarFilmesAoUsuario($dados) == 1){
            echo json_encode(array('status'=> 'ok'));
        }else if($this->Usuario_model->adicionarFilmesAoUsuario($dados) == 2){
            echo json_encode(array('status'=> 'fail'));
        }else if($this->Usuario_model->adicionarFilmesAoUsuario($dados) == 3){
            echo json_encode(array('status'=> 'ee','tipo'=>'error',));
        }
    }
    public function pegaValoresSeries()
    {
        $this->verificaSessao();
        $this->load->model("Usuario_model");
        $dados = array( 
            'serie'=> array('id'=>$this->input->post('id'),),
            'temporadas'=>array(
                'duracao'=> $this->input->post('duracao'),
                                'serie_idserie'=>$this->input->post('id'),
                                'assistido'=>1),
            'usuario'=> array('id_usuario' => $this->input->post('id_usuario'),),);

        if($this->Usuario_model->adicionarSerieAoUsuario($dados) == 1){
            echo json_encode(array('status'=> 'ok'));
        }else if($this->Usuario_model->adicionarSerieAoUsuario($dados) == 2){
            echo json_encode(array('status'=> 'fail'));
        }else if($this->Usuario_model->adicionarSerieAoUsuario($dados) == 3){
            echo json_encode(array('status'=> 'ee','tipo'=>'error',));
        }
    }

    public function verificaSessao()
    {
        if (!(isset($_SESSION['usuario'])) || !(isset($_SESSION['status'])||$_SESSION['usuario']==NULL)) {
            redirect('Usuario');
        }
    }
}