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
		$this->load->view('pantallas/navbar');
		$this->load->view('pantallas/footer');
	}

	public function generales(){
		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/breadGeneral');
		$this->load->view('pantallas/navbar');
		$this->load->view('pantallas/datosGenerales');
		$this->load->view('pantallas/footer');
	}

	public function domAlumno(){
		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/breadGeneral');
		$this->load->view('pantallas/navbar');
		$this->load->view('pantallas/domicilioAlumno');
		$this->load->view('pantallas/footer');	
	}
}
