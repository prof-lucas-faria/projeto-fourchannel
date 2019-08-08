<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	// function __construct() {
	// 	parent::__construct();
	// 	$this->load->library('TMDb');
	// }
	
	public function index()

	{
		// $id = "tt0088247";
		// $json = $this->tmdb->getMovie(420818);
		// $data["info"] = $json;
		$this->load->view('welcome_message');
	}
}
