<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MLogin extends CI_Model
{
  function __construct()
  {
      parent::__construct();
      $this->load->database();
  }

  function InsertaRegistro($data){
    $this->db->Insert('alumnos',array('id_alumno'=>NULL, 'paterno'=>$data['paterno'], 'materno'=>$data['materno'],'nombre'=>$data['nombre'],
  'sexo'=>$data['sexo'],'fecha_nacimiento'=>$data['fecha_nacimiento'],'lugar_nacimiento'=>$data['lugar_nacimiento'],'del_municipio'=>$data['del_mun'],
  'entidad'=>$data['entidad'], 'pais'=> $data['pais'], 'nacionalidad'=>$data['nacionalidad'], 'curp'
 ));
    //$this->db->Insert('alumnos',array('idLogin'=>NULL, 'usuario'=>$data['usuario'], 'contrasena'=>$data['contrasena'] ));
  }

  // function seleccionUsuario ($data){
  //
  //   $this->db->where('usuario',$data['username']);
  //   $this->db->where('contrasena',$data['pass']);
  //   $query =$this->db->get('login');
  //
  //   if ($query->num_rows()>0) {
  //     return $query->row();
  //   }else{
  //     return false;
  //   }
  // }
}


 ?>
