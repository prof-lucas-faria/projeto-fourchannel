<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Filmes extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("filme_model");
    }

    
    public function index($pagina=1)
    {
     
        $data['logado'] = false;
        $data['generos'] = $this->listaDeGeneros();
        $this->load->view('hooks/menu_lateral', $data);

        $config['base_url'] = base_url() . 'index.php/Filmes/index/';
        $config['total_rows'] = $this->filmesPopulares($pagina)->total_pages;
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

        $data['populares'] = $this->filmesPopulares($pagina);
        $this->load->view('filmes/home', $data);

    }
    public function detalheFilmes($idFilme)
    {
        $data['logado'] = false;
        $data['detalhes_full'] = $this->filmes($idFilme);
        $this->load->view('hooks/menu_lateral');
        $this->load->view('filmes/detalhe_filme', $data);
    }

    public function filmes($idFilme)
    {
        return $this->filme_model->detalhesFullFilme($idFilme);
    }

    public function filmesPopulares($pagina)
    {
        return $this->filme_model->listarFilmesPopulares($pagina);

    }

    public function nowPlaying()
    {
        /*    $this->load->view('hooks/menu_lateral');
        $this->load->view('filmes/nowPlaying');*/
        return $this->filme_model->listarNowPlaying();
    }

    public function listaDeGeneros()
    {
        return $this->filme_model->listaDeGeneros();
    }

    public function listarPorGenero($idFilme)
    {
        $data['listaDeFilmesPorGenero'] = $this->filme_model->filtroDeFilmePorGenero($idFilme);
        $data['populares'] = $this->filmesPopulares(1);
        $data['generos'] = $this->listaDeGeneros();
        $this->load->view('hooks/menu_lateral');
        $this->load->view('filmes/filmes_por_genero', $data);
    }

    public function pesquisarFilme()
    {

    }
}
