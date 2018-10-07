<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MLogin extends CI_Model
{
  function __construct()
  {
      parent::__construct();
      $this->load->database();
  }

  // function InsertaRegistro($data){
  //   $this->db->Insert('login',array('idLogin'=>NULL, 'usuario'=>$data['usuario'], 'contrasena'=>$data['contrasena'] ));
  // }

  function seleccionUsuario ($data){

    $this->db->where('usuario',$data['username']);
    $this->db->where('contrasena',$data['pass']);
    $query =$this->db->get('login');

    if ($query->num_rows()>0) {
      return $query->row();
    }else{
      return false;
    }
  }
}


 ?>
