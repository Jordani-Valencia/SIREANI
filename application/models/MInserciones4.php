<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MInserciones4 extends CI_Model
{
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }

  function insetar_deporte($datos){
    $this->db->insert("ejercicio_deportes",$datos);
    $this->db->where("alumno",$datos['alumno']);
    $res=$this->db->get("ejercicio_deportes");
    return $res->row();
  }
  function nuevoDeporte($datos){
    $this->db->insert("deportes",$datos);
    $this->db->where("deporte",$datos['deporte']);
    $res=$this->db->get("deportes");
    return $res->row();
  }
  function deportes_practica($datos){
    $this->db->insert("deportes_practica",$datos);
  }
  function insertHabitoConsumo($datos){
    $this->db->insert("habitos_consumos",$datos);
  }
  function insertRecreacion($datos){
    $this->db->insert("recreacion",$datos);
  }
  function nuevaActividad($datos){
    $this->db->insert("acciones",$datos);
    $this->db->where("accion",$datos['accion']);
    $res=$this->db->get("acciones");
    return $res->row();
  }
  function insertGusto($datos){
    $this->db->insert("gustos_intereses",$datos);
  }
  function insertParticipacion($datos){
    $this->db->insert("participacion_social",$datos);
    $this->db->where("alumno",$datos['alumno']);
    $res=$this->db->get("participacion_social");
    return $res->row();
  }
  function nuevaOrganizacion($datos){
    $this->db->insert("organizaciones",$datos);
    $this->db->where("organizacion",$datos['organizacion']);
    $res= $this->db->get("organizaciones");
    return $res->row();
  }
  function insOrgPart($datos){
    $this->db->insert("org_participacion",$datos);
  }
  function insinternet($datos){
    $this->db->insert("internet",$datos);
  }



}
