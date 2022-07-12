<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('header');
		$this->load->view('contenido');
		$this->load->view('footer');
	}

	/*public function test(){

		$this->load->model('Clientes');

		$Clientes = $this->Clientes->findAll();

		var_dump($Clientes);

		$this->load->view('');
	}
	*/
}


