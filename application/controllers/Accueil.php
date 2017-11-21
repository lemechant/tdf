<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function index()
	{
		$data['title'] = "Accueil";

		$this->load->view('header', $data);
		$this->load->view('v_accueil', $data);
		$this->load->view('footer', $data);
	}
}
