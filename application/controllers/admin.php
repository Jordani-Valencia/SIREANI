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
		$this->load->view('pantallas/dataTable');
	}

	public function adminAlumnos($id){
		$this->load->model('MadminAlumnos');
		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/navbar');
		$this->load->view('pantallas/actualizarAdmin');
		$this->load->view('pantallas/footer');

		$res = $this->MadminAlumnos->nombre($id);
	foreach ($res->result() as $r) {
	$data[]=array($r->nombre_al);
	}
	echo "<pre>";
	print_r( $data);
	echo "</pre>";
	}

	public function cerrarSesion(){
		$this->load->view('pantallas/principal');
		//$this->session->sess_destroy();
	}
}
