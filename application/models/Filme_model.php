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

  public function detalhesFullFilme($idFilme)
  {
    $dados = array(
      "elenco" => $this->tmdb->getCredits($idFilme),
      "detalhes" => $this->detalheFilme($idFilme),
      "similar" => $this->listaDeFilmesSimilares($idFilme),
      "videos" =>$this->listarFilme($idFilme),
      "reviews" => $this->listaDeReviews($idFilme)
    );
    return $dados; 
  }

  public function listarFilme($idFilme)
  {
    return  $this->tmdb->getMovieVideo($idFilme);
  }

  public function listaDeFilmesSimilares($idFilme)
  {
    return  $this->tmdb->getSimilarMovies($idFilme);
  }

  public function detalheFilme($idFilme)
  {
     return $this->tmdb->getFilmsDetalhe($idFilme);
    
  }
  
  public function listaDeReviews($idFilme)
  {
  }
  
  public function listaDeFilmesPorGenero($idGenero)
  {
    return  $this->tmdb->getMoviesForGenre();
  }

  public function buscarFilme($query)
  {
    
  }

}
