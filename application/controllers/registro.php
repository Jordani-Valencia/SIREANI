<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function uno()
	{
		$this->load->view('pantallas/1');
	}

	public function dos(){
		$this->load->view('pantallas/2');
	}

	public function tres(){
		$this->load->view('pantallas/3');
	}

	public function cuatro(){
		$this->load->view('pantallas/4');
	}

	public function cinco(){
		$this->load->view('pantallas/5');
	}
}
