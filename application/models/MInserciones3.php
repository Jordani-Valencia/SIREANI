<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MInserciones3 extends CI_Model
{
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }
  function ambienteSocioEconomico($data){
    $this->db->insert("ambiente_socioeconomico",$data);
  }
  function salud1($data){
    $this->db->insert("salud",$data);
    $this->db->where("alumno",$data['alumno']);
    $id=$this->db->get("salud");
    return $id->row();
  }
  function problemaSalud($data){
    $this->db->insert("problema_salud",$data);
  }

  function serv_salud($data){
    $this->db->insert("servicio_salud",$data);
  }

  function nuevoServicio($data){
    $this->db->insert("tipo_serv_salud",$data);
    $this->db->where("servicio",$data['servicio']);
    $id=$this->db->get("tipo_serv_salud");
    return $id->row();
  }

  function problemaTratamiento($data){
    $this->db->insert("tratamiento_medico",$data);
  }

  function problemaDiscapacidad($data){
    $this->db->insert("didscapacidades_fisicas",$data);
  }

  function problemaPsicologico($data){
    $this->db->insert("tratamiento_psicologico",$data);
  }


}
