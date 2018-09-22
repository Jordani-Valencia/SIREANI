<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('MLogin');
	}

	public function index()
	{
		$data= array(
      'username'=> $this->input->post('username'),
      'pass' =>  crypt($this->input->post('pass'),'hola')
    );
    $vista = $this->MLogin->seleccionUsuario($data);
    $this->load->view($vista);
	}
}
