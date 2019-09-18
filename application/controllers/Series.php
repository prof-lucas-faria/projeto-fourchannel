<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Series extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model("series_model");
  }

  public function index()
  {
<<<<<<< HEAD
    $data['generos'] = $this->listaDeGeneros();
    $this->load->view('hooks/menu_lateral',$data);

    $data['populares'] = $this->populares();
    $this->load->view('series/home',$data);

=======
    $data['logado'] = false;
    $this->load->view('hooks/menu_lateral',$data);
    $this->load->view('series/home');
>>>>>>> bcca6c91cd5eab4d0032e63146ac77a105d6a67a
  }
  public function detalheSeries($idSerie)
  {
<<<<<<< HEAD
    $data['detalhes_full'] = $this->serie($idSerie);
    $this->load->view('hooks/menu_lateral');
    $this->load->view('series/detalhe_series', $data);
  }
  public function serie($idSerie)
  {
    return $this->series_model->detalhesFullSerie($idSerie);
=======
    $data['logado'] = false;
    $this->load->view('hooks/menu_lateral',$data);
    $this->load->view('series/detalhe_series');
>>>>>>> bcca6c91cd5eab4d0032e63146ac77a105d6a67a
  }
  public function topRanted()
  {
  	
  }

  public function populares()
  {
    return $this->series_model->listarPopulares();

  }

  public function listaDeGeneros()
  {
    return $this->series_model->listaDeGeneros();
  }

  public function detalheFullSerie($idSerie)
  {
    
  }

}
