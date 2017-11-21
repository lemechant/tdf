<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parcours extends CI_Controller {


	public function etapes()
	{
		$data['title'] = "Mon parcours";

		$data['parcours'] = $this->parcours_model->getParcours();

		
		$this->load->view('header', $data);
		$this->load->view('v_parcours', $data);
		$this->load->view('footer', $data);
	}

	public function etape()
	{
		$data['title'] = "Etape";
		
		$this->load->view('header', $data);
		$this->load->view('v_etape', $data);
		$this->load->view('footer', $data);
	}

	public function carte()
	{
		$data['title'] = "J'irai dormir chez vous";
		
		$this->load->view('header', $data);
		$this->load->view('v_carte', $data);
		$this->load->view('footer', $data);
	}
}
