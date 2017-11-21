<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


	public function index()
	{
		$data['title'] = "Contact";
/*
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('phone', 'Subject', 'trim|required|xss_clean');
		$this->form_validation->set_rules('message', 'message', 'trim|required|xss_clean');
*/
		$this->load->view('header', $data);
		$this->load->view('v_contact', $data);
		$this->load->view('footer', $data);
	}

	public function send()
	{
		$this->load->view('header', $data);
		$this->load->view('v_contact', $data);
		$this->load->view('footer', $data);
	}
}
