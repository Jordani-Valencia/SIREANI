<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function uno()
	{
		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/1');
		$this->load->view('pantallas/footer');
	}

	public function dos(){
		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/2');
		$this->load->view('pantallas/footer');
	}

	public function tres(){
		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/3');
		$this->load->view('pantallas/footer');
	}

	public function cuatro(){
		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/4');
		$this->load->view('pantallas/footer');
	}

	public function cinco(){
		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/5');
		$this->load->view('pantallas/footer');
	}

	public function seis(){
		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/6');
		$this->load->view('pantallas/footer');
	}
	

}
