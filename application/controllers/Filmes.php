<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Filmes extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('hooks/menu_lateral');
    $this->load->view('filmes/home');
  }
  public function detalheFilmes($idFilme)
  {
    $this->load->view('hooks/menu_lateral');
    $this->load->view('filmes/detalhe_filme');
  }

  public function filmesPopulares()
  {
    /** $this->load->view('hooks/menu_lateral');*/
   /**  $this->load->view('filmes/lancamento');**/

  }

  public function nowPlaying()
  {
  	$this->load->view('hooks/menu_lateral');
    $this->load->view('filmes/nowPlaying');
  }

  public function listaDeGeneros()
  {
    $this->load->view('hooks/menu_lateral');
    $this->load->view('filmes/listaDeGeneros');
  }

  public function listarPorGenero($idGenero)
  {
      
  }  

  public function pesquisarFilme()
  {
    
  }
}
