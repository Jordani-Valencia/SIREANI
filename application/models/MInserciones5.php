<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MInserciones5 extends CI_Model
{
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }
  function insertMovil($datos){
    $this->db->insert("tel_movil",$datos);
  }
  function insTutor($datos){
    $this->db->insert("padres",$datos);
  }
  function insRelaciones($datos){
    $this->db->insert("relaciones_sociales",$datos);
    $this->db->where("alumno",$datos['alumno']);
    $res=$this->db->get("relaciones_sociales");
    return $res->row();
  }
  function insRelHerano($datos){
    $this->db->insert("relacion_hermanos",$datos);
  }
  function insertActFamilia($datos){
    $this->db->insert("actividades_hogar",$datos);
  }
  function insConsumoFamiliar($datos){
    $this->db->insert("consumo_familiar",$datos);
  }



}