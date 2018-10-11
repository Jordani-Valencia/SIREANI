<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('MLogin');
		$this->load->library('session');
		if ($this->session->userdata('login')==FALSE) {
			regresar();
		}
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
				$data=[
				"id"=>$res->NULL,
				"usuario"=>$res->NULL,
				"login"=>FALSE
			];
			echo "error";}
		}
	

	public function prinAdmin(){
		$this->load->view('pantallas/principalAdmin');
	}
}
