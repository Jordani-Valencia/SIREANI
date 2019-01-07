<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MAct6 extends CI_Model
{
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }

  function delProyecto($alumno){
    $this->db->where("alumno",$alumno);
    $this->db->delete("proy_vida");
  }
  function insGetProyecto($datos){
      $this->db->insert("proy_vida",$datos);
      $this->db->where("alumno",$datos['alumno']);
      return $this->db->get("proy_vida")->row();
  }

  function delOpcionProy($id){
    $this->db->where("id_proy_pv",$id);
    $this->db->delete("proyecto_opcion");
  }
  function insProyOpcion($datos){
      $this->db->insert("proyecto_opcion",$datos);
  }

  function nuevaOpcion($datos){
    $this->db->insert("opciones_proyectovida",$datos);
    $this->db->where("opcion",$datos['opcion']);
    return $this->db->get("opciones_proyectovida")->row();
  }

  function delPerifl($alumno){
      $this->db->where("alumno",$alumno);
      $this->db->delete("perfil_personal");
  }
  function inserPerifl($datos){
    $this->db->insert("perfil_personal",$datos);
  }

}
