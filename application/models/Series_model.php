<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Series_model extends CI_Model {
  public function __construct()
  {
    parent::__construct();
  }
  public function listarTopRated()
  {
    
  }
  public function listarPopulares()
  {
    return  $this->tmdb->getPopularTv();

  }
  public function listaDeGeneros()
  {
    return  $this->tmdb->getListGenres();
  }

  public function detalhesFullSerie($idSerie)
  {
    $dados = array(
      "elenco" => $this->tmdb->getCredits($idSerie),
      "detalhes" => $this->detalheSerie($idSerie),
      "similar" => $this->listaDeSerieSimilares($idSerie),
      "videos" =>$this->listarTraillers($idSerie),
      "reviews" => $this->listaDeReviews($idSerie)
    );
    return $dados;
  }
  public function listarTraillers($idSerie)
  {
    return  $this->tmdb->getTvVideo($idSerie);
  }

  public function listaDeSerieSimilares($idSerie)
  {
    return  $this->tmdb->getTvSimilar($idSerie);
  }

  public function detalheSerie($idSerie)
  {
    return $this->tmdb->getTvdetalhes($idSerie);

  }

  public function filtrodeSeriePorGenero( $genreId)
  {
    $dados = array(
      "porgenero" => $this->tmdb->getTvForGenre( $genreId),
      "detalhes" => $this->detalheSerie($genreId),
     
    );
    return $dados;
  }
  public function listarPessoaProducao($idSerie)
  {
  
  }
  public function listaDeComentarios($idSerie)
  {
    
  }
  public function listaDeReviews($idFilme)
  {
  }
  public function detalheTemporada($idSerie)
  {
  }

  public function listaDeTrailers($idSerie)
  {
        return  $this->tmdb->getTvVideo();

  }
  
}