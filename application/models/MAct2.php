<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MAct2 extends CI_Model
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

  function insertDomTutor($datos,$alumno){
    $this->db->where("alumno",$alumno);
    $res=$this->db->get("domicilio_tutor");
    if ($res->num_rows()>0) {
      $this->db->where("alumno",$alumno);
      $this->db->update("domicilio_tutor",$datos);

    }else{
      $this->db->insert("domicilio_tutor",$datos);

    }
  }
  function delDomTutor($alumno){
    $this->db->where("alumno",$alumno);
    $this->db->delete("domicilio_tutor");
  }

  function insTutor($datos,$alumno){
    $this->db->where("alumno",$alumno);
    $this->db->where("parentezco",9);
    $res= $this->db->get("padres");
    if ($res->num_rows()>0) {
      $this->db->where("alumno",$alumno);
      $this->db->where("parentezco",9);
      $this->db->update("padres",$datos);
    }else{
      $this->db->insert("padres",$datos);

    }
  }
  function delTutor($arr_tutor,$alumno){
    $this->db->where("alumno",$alumno);
    $this->db->where("parentezco",9);
    $res= $this->db->get("padres");
    if ($res->num_rows()>0) {
      $this->db->where("alumno",$alumno);
      $this->db->where("parentezco",9);

      $this->db->delete("padres");
    }
  }

  function padres($datos,$alumno){
    $this->db->where("alumno",$alumno);
    $this->db->where("parentezco",$datos['parentezco']);
    $res= $this->db->get("padres");
    if ($res->num_rows()>0) {
      $this->db->where("alumno",$alumno);
      $this->db->where("parentezco",$datos['parentezco']);
      $this->db->update("padres",$datos);
    }else{
      $this->db->insert("padres",$datos);

    }
  }
  function delPadre($datos,$alumno){
    $this->db->where("alumno",$alumno);
    $this->db->where("parentezco",9);
    $res= $this->db->get("padres");
    if ($res->num_rows()>0) {
      $this->db->where("alumno",$alumno);
      $this->db->where("parentezco",9);

      $this->db->delete("padres");
    }
  }

  function insertIngreso($datos){
    $this->db->insert("ingresos_familiares",$datos);

    $this->db->where("alumno",$datos['alumno']);
    return $this->db->get("v_ingresos_mensuales");

  }
  function ingresos($datos,$alumno){
    $this->db->where("alumno",$alumno);
    $this->db->update("ingresos",$datos);
  }
  function nuevo_parentezco($datos){
    $res=$this->db->insert("parentezcos",$datos);
    $this->db->where("parentezco",$datos['parentezco']);
    $res=$this->db->get("parentezcos");
    return $res->row();
  }

}
