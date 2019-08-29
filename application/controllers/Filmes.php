<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Filmes extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model("filme_model");
  }

  public function index()
  {
    $data['generos'] = $this->listaDeGeneros();
    $this->load->view('hooks/menu_lateral',$data);

    $data['populares'] = $this->filmesPopulares();
    $this->load->view('filmes/home',$data);
  }
  public function detalheFilmes($idFilme)
  {
    $this->load->view('hooks/menu_lateral');
    $this->load->view('filmes/detalhe_filme');
  }

  public function filmesPopulares()
  {
  return $this->filme_model->listarFilmesPopulares();

  }

  public function nowPlaying()
  {
  /*	$this->load->view('hooks/menu_lateral');
    $this->load->view('filmes/nowPlaying');*/
    return $this->filme_model->listarNowPlaying();
  }

  public function listaDeGeneros()
  {
    return $this->filme_model->listaDeGeneros();
  }

  public function listarPorGenero($idGenero)
  {
    $this->load->view('hooks/menu_lateral');
    $this->load->view('filmes/filmes_por_genero');
  }  

  public function pesquisarFilme()
  {
    
  }
}
