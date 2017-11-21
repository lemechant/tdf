<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Don extends CI_Controller {

	public function index()
	{
		$data['title'] = "Faire un don";

		$this->load->view('header', $data);
		$this->load->view('v_don', $data);
		$this->load->view('footer', $data);
	}
}