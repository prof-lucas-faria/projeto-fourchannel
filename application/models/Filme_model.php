<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Filme_model extends CI_Model {

  
  public function __construct()
  {
    parent::__construct();
  }

  public function listarFilmesPopulares()
  {
   return (object) $this->tmdb->getPopularMovies();
  }

  public function listarNowPlaying()
  {
    return (object) $this->tmdb->getNowPlayingMovies();
  }

  public function listaDeGeneros()
  {
    return (object) $this->tmdb->getListGenres();
  }

  public function detalhesFullFilme($idFilme)
  {
    $dados = array(
      "elenco" =>(object) $this->tmdb->getCredits($idFilme),
      "detalhes" =>(object) $this->detalheFilme($idFilme),
      "similar" =>(object) $this->listaDeFilmesSimilares($idFilme),
      "videos" =>(object)$this->listarFilme($idFilme),
      "reviews" =>(object) $this->listaDeReviews($idFilme)
    );
    return (object)$dados; 
  }

  public function listarFilme($idFilme)
  {
    return (object) $this->tmdb->getMovieVideo($idFilme);
  }

  public function listaDeFilmesSimilares($idFilme)
  {
    return (object) $this->tmdb->getSimilarMovies($idFilme);
  }

  public function detalheFilme($idFilme)
  {
     return (object) $this->tmdb->getFilmsDetalhe($idFilme);
    
  }
  
  public function listaDeReviews($idFilme)
  {
  }
  
  public function listaDeFilmesPorGenero($idGenero)
  {
    return (object) $this->tmdb->getMoviesForGenre();
  }

  public function buscarFilme($query)
  {
    
  }

}
