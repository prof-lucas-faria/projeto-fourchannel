<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Filme_model extends CI_Model {

  
  public function __construct()
  {
    parent::__construct();
  }

  public function listarFilmesPopulares()
  {
   return  $this->tmdb->getPopularMovies();
  }

  public function listarNowPlaying()
  {
    return  $this->tmdb->getNowPlayingMovies();
  }

  public function listaDeGeneros()
  {
    return  $this->tmdb->getListGenres();
  }

  public function detalhesFullFilme($idPessoa)
  {
    return  $this->tmdb->getFilmsDetalhe();
  }

  public function listarFilme($idFilme)
  {
    
  }

  public function listaDeFilmesSimilares($idFilme)
  {
    
  }

  public function detalheFilme($idFilme)
  {
    
  }
  
  public function listaDeReviews($idFilme)
  {
   
  }
  
  public function listaDeFilmesPorGenero($idGenero)
  {
    
  }

  public function buscarFilme($query)
  {
    
  }

}
