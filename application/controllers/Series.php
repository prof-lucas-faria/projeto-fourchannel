<?php
defined('BASEPATH') or exit('No direct script access allowed');




class Series extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['logado'] = false;
    $this->load->view('hooks/menu_lateral',$data);
    $this->load->view('series/home');
  }
  public function detalheSerie($idSerie)
  {
    $data['logado'] = false;
    $this->load->view('hooks/menu_lateral',$data);
    $this->load->view('series/detalhe_series');
  }

  public function topRanted()
  {
  	
  }

  public function populares()
  {
  
  }

  public function listaDeGeneros()
  {
    
  }

  public function detalheFullSerie($idSerie)
  {
    
  }

}
