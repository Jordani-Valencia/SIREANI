<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('MLogin');
		$this->load->library('session');
	}
	public function regresar(){
		$this->load->view('principal');
	}

	public function index()
	{
		$data= array(
      'username'=> $this->input->post('username'),
      'pass' =>  crypt($this->input->post('pass'),'hola')
    );
    $res = $this->MLogin->seleccionUsuario($data);
		if ($res) {
			$data=[
				"id"=>$res->idLogin,
				"usuario"=>$res->usuario,
				"login"=>TRUE
			];

			 $this->session->set_userdata($data);

			echo "no error";
			}else{
			echo "error";
		}
		}


	public function prinAdmin(){
		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/principalAdmin');
		$this->load->view('pantallas/footer');
	}

	public function adminUno(){
		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/navbar');
		$this->load->view('pantallas/datosUno');
		$this->load->view('pantallas/footer');
	}

	public function adminDos(){
		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/navbar');
		$this->load->view('pantallas/datosDos');
		$this->load->view('pantallas/footer');
	}

	public function adminTres(){
		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/navbar');
		$this->load->view('pantallas/datosTres');
		$this->load->view('pantallas/footer');
	}

	public function adminCuatro(){
		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/navbar');
		$this->load->view('pantallas/datosCuatro');
		$this->load->view('pantallas/footer');
	}

	public function adminCinco(){
		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/navbar');
		$this->load->view('pantallas/datosCinco');
		$this->load->view('pantallas/footer');
	}

	public function adminSeis(){
		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/navbar');
		$this->load->view('pantallas/datosSeis');
		$this->load->view('pantallas/footer');
	}
}
