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
        $this->load->view('hooks/menu_lateral',$data);

        $this->load->view('usuario/entrar',$data);
    }

    public function cadastre()
    {
        $data['generos'] = $this->filme_model->listaDeGeneros();
         $data['logado'] = false;
        $this->load->view('hooks/menu_lateral',$data);

        $this->load->view('usuario/cadastre',$data);
    }

}
