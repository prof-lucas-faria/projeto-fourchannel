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
        $data['logado'] = false;
        $this->load->view('hooks/menu_lateral', $data);
        $this->load->view('hooks/lateral_usuario', $data);
        $this->load->view('usuario/home');
    }

    public function cadastre()
    {
        $data['generos'] = $this->filme_model->listaDeGeneros();
      
        $this->load->view('hooks/menu_lateral', $data);

        $this->load->view('usuario/cadastre', $data);
    }

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
           
            $_SESSION['status'] =array('logado'=>true);
            $_SESSION['usuario'] =$usuario ;

            redirect('Usuario/home');
        }

    }

    public function perfil()
    {
        $data['generos'] = $this->filme_model->listaDeGeneros();
      
        $this->load->view('hooks/menu_lateral', $data);
        $this->load->view('hooks/lateral_usuario', $data);
        $this->load->view('usuario/perfil', $data);
    }
}
