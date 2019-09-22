<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("filme_model");
    }

    public function index()
    {
        $data['generos'] = $this->filme_model->listaDeGeneros();
        $data['logado'] = false;
        $this->load->view('hooks/menu_lateral', $data);

        $this->load->view('usuario/entrar', $data);
    }

    public function home()
    {
        $this->verificaSessao();

        $this->load->view('hooks/menu_lateral');
        $this->load->view('hooks/lateral_usuario');
        $this->load->view('usuario/home');
    }

    public function cadastre()
    {
        $data['generos'] = $this->filme_model->listaDeGeneros();

        $this->load->view('hooks/menu_lateral', $data);

        $this->load->view('usuario/cadastre', $data);
    }

   
    public function entrar()
    {
        // session_destroy();
        $this->load->model("Usuario_model");

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

        $this->load->view('hooks/menu_lateral', $data);
        $this->load->view('hooks/lateral_usuario', $data);
        $this->load->view('usuario/perfil', $data);
    }

    // form atualizar perfil
    public function atualizarEmail()
    {
        # code...
    }
    // form atualizar perfil
    public function atualizarInformacoesConta()
    {
        # code...
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

        if ($this->Usuario_model->adicionarUsuario($dados)) {
            $this->session->set_userdata($dados);
            redirect('Usuario/home');
        } else {
            redirect('Usuario/cadastre');
        }

    }
    
    public function sair()
    {
        unset($_SESSION['status']);
        unset($_SESSION['usuario']);
        session_destroy();
        //    $this->session->destroi();
        redirect('Usuario/home');
    }

    public function pegaValoresFilmes()
    {
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

    public function verificaSessao()
    {
        if (!(isset($_SESSION['usuario'])) || !(isset($_SESSION['status']))) {
            header("Location:" . base_url() . "index.php/Usuario");
        }
    }
}
