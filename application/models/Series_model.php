<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Series_model extends CI_Model {
  public function __construct()
  {
    parent::__construct();
  }
 
  public function listarPopulares($pagina)
  {
    /**return  $this->tmdb->getPopularTv();**/
    return(object)  $this->tmdb->getPopularTv($pagina);
  }
  public function listaDeGeneros()
  {
    /**return  $this->tmdb->getListGenres();**/
    return(object)  $this->tmdb->getListGenres();
  }
  public function detalhesFullSerie($idSerie)
  {
    $dados = array(
      "elenco" =>(object) $this->tmdb->getCredits($idSerie),
      "detalhes" =>(object) $this->detalheSerie($idSerie),
      "similar" =>(object) $this->listaDeSerieSimilares($idSerie),
      "videos" =>(object)$this->listarTraillers($idSerie),
      //"reviews" =>(object) $this->listaDeReviews($idSerie)
    );
    return(object)$dados;
  }
  public function listarTraillers($idSerie)
  {
    return(object)  $this->tmdb->getTvVideo($idSerie);
  }

  public function listaDeSerieSimilares($idSerie)
  {
    return(object)  $this->tmdb->getTvSimilar($idSerie);
  }

  public function detalheSerie($idSerie)
  {
    return(object) $this->tmdb->getTvdetalhes($idSerie);

  }

  public function filtrodeSeriePorGenero( $genreId)
  {
    $dados = array(
      "porgenero" =>(object) $this->tmdb->getTvForGenre( $genreId),
      "detalhes" =>(object) $this->detalheSerie($genreId),
     
    );
    return(object)$dados;
  }
  
  public function buscarPorID($id)
  {
    return (object) $this->tmdb->getTv($id);
  }

  public function buscarSerie($query)
  {
   return (object) $this->tmdb->searchTv($query);
  }
  
}