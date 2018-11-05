<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MInserciones6 extends CI_Model
{
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }
  function insGetProyecto($datos){
      $this->db->insert("proy_vida",$datos);
      $this->db->where("alumno",$datos['alumno']);
      return $this->db->get("proy_vida")->row();
  }
  function insProyOpcion($datos){
      $this->db->insert("proyecto_opcion",$datos);
  }
  function nuevaOpcion($datos){
    $this->db->insert("opciones_proyectovida",$datos);
    $this->db->where("opcion",$datos['opcion']);
    return $this->db->get("opciones_proyectovida")->row();
  }
  function inserPerifl($datos){
    $this->db->insert("perfil_personal",$datos);
  }

}
