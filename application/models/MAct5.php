<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MAct5 extends CI_Model
{
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }

  function DelMovil($alumno){
    $this->db->where("alumno",$alumno);
    $this->db->delete("tel_movil");
  }
  function insertMovil($datos){
    $this->db->insert("tel_movil",$datos);
  }

  function delRelaciones($alumno){
    $this->db->where("alumno",$alumno);
    $this->db->delete("relaciones_sociales");
  }
  function insRelaciones($datos){
    $this->db->insert("relaciones_sociales",$datos);
    $this->db->where("alumno",$datos['alumno']);
    $res=$this->db->get("relaciones_sociales");
    return $res->row();
  }

  function delRelHerano($relacion){
    $this->db->where("relacion",$relacion);
    $this->db->delete("relacion_hermanos");
  }
  function insRelHerano($datos){
    $this->db->insert("relacion_hermanos",$datos);
  }

  function delActFamilia($relacion){
    $this->db->where("relacion",$relacion);
    $this->db->delete("actividades_hogar");
  }
  function insertActFamilia($datos){
    $this->db->insert("actividades_hogar",$datos);
  }

  function insConsumoFamiliar($datos){
    $this->db->insert("consumo_familiar",$datos);

    $this->db->where("alumno",$datos['alumno']);
    return $this->db->get("v_consumo");
  }

  function delNegocio($relacion){
    $this->db->where("relacion",$relacion);
    $this->db->delete("negocios_familiares");
  }
  function insertNegocio($datos){
    $this->db->insert("negocios_familiares",$datos);
  }


}
