<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Series extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model("series_model");
  }

  public function index($pagina = 1)
  {
    $data['logado'] = false;
   
    $data['generos'] = $this->listaDeGeneros();
    $this->load->view('hooks/menu_lateral',$data);

    $config['base_url'] = base_url() . 'index.php/Series/index/';
    $config['total_rows'] = $this->populares($pagina)->total_pages;
    $config['per_page'] = 1;

    $config['next_link'] = '<i class="fas fa-chevron-right"></i>';
    $config['prev_link'] = '<i class="fas fa-chevron-left"></i>';
    $config['full_tag_open'] = '<ul class="page-numbers">';
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li><a style="color: #2D335B"><b>';
    $config['cur_tag_close'] = '</b></a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['first_link'] = 'Primeira';
    $config['last_link'] = 'Última';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
   
    $this->pagination->initialize($config);

    

    $data['populares'] = $this->populares($pagina);
    $this->load->view('series/home',$data);

  }
  public function detalheSeries($idSerie)
  {
    $data['logado'] = false;
    $data['detalhes_full'] = $this->serie($idSerie);
    $this->load->view('hooks/menu_lateral');
    $this->load->view('series/detalhe_series', $data);
  }
  public function serie($idSerie)
  {
    return $this->series_model->detalhesFullSerie($idSerie);
  }

public function listarPorGenero($idSerie)
{
  $data['listaDeSeriePorGenero'] = $this->series_model->filtrodeSeriePorGenero($idSerie);
  $data['populares'] = $this->populares(1);
  $data['generos'] = $this->listaDeGeneros();
  $this->load->view('hooks/menu_lateral');

  $this->load->view('series/series_por_genero',$data);

}
  public function populares($pagina)
  {
    return $this->series_model->listarPopulares($pagina);

  }

  public function listaDeGeneros()
  {
    return $this->series_model->listaDeGeneros();
  }
  public function listaPorGeneros( $genreId)
  {
    return $this->series_model->listaDeSeriePorGenero( $genreId);
  }
  public function pesquisarSeries()
  {
    $termosDaBusca = $this->input->get("termosBusca");
    $data['generos'] = $this->listaDeGeneros();
    $data['resultado'] = $this->series_model->buscarSerie($termosDaBusca);

    $this->load->view('hooks/menu_lateral');
    $this->load->view('buscar/busca', $data);
  }
}

