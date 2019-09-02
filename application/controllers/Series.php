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
    $this->load->view('hooks/menu_lateral');
    $this->load->view('series/home');
  }
  public function detalheSerie($idSerie)
  {
    $this->load->view('hooks/menu_lateral');
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
