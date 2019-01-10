<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MInserciones2 extends CI_Model
{
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }

  function insertFamiliar($datos){
    $this->db->insert("familiares",$datos);
    $this->db->where("alumno",$datos['alumno']);
    return $this->db->get("v_familiares");
  }

  function getFamiliar($id){
    $this->db->where("alumno",$id);
    return $this->db->get("v_familiares");
  }

  function insertDomTutor($datos){
    $this->db->insert("domicilio_tutor",$datos);
  }

  function insTutor($datos){
    $this->db->insert("padres",$datos);
  }

  function insertIngreso($datos){
    $this->db->insert("ingresos_familiares",$datos);

    $this->db->where("alumno",$datos['alumno']);
    return $this->db->get("v_ingresos_mensuales");

  }
  function getInfFami($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("v_ingresos_mensuales");
  }

  function padres($datos){
    $this->db->insert("padres",$datos);
  }
  function ingresos($datos){
    $this->db->insert("ingresos",$datos);
  }
  function nuevo_parentezco($datos){
    $res=$this->db->insert("parentezcos",$datos);
    $this->db->where("parentezco",$datos['parentezco']);
    $res=$this->db->get("parentezcos");
    return $res->row();
  }

}
