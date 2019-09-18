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
    $data['generos'] = $this->listaDeGeneros();
    $this->load->view('hooks/menu_lateral',$data);

    $data['populares'] = $this->populares();
    $this->load->view('series/home',$data);

  }
  public function detalheSeries($idSerie)
  {
    $data['detalhes_full'] = $this->serie($idSerie);
    $this->load->view('hooks/menu_lateral');
    $this->load->view('series/detalhe_series', $data);
  }
  public function serie($idSerie)
  {
    return $this->series_model->detalhesFullSerie($idSerie);
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
