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
  }
  function insertIngreso($datos){
    $this->db->insert("ingresos_familiares",$datos);
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
