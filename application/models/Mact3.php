<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MAct3 extends CI_Model
{
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }
  function ambienteSocioEconomico($data){
    $this->db->where("alumno",$data['alumno']);
    $res=$this->db->get("ambiente_socioeconomico");
    if ($res->num_rows()>0) {
      $this->db->where("alumno",$data['alumno']);
      $res=$this->db->update("ambiente_socioeconomico",$data);
    }else{
      $this->db->insert("ambiente_socioeconomico",$data);
    }
  }

  function salud1($data){
    $this->db->where("alumno",$data['alumno']);
    $this->db->update("salud",$data);

    $this->db->where("alumno",$data['alumno']);
    $id=$this->db->get("salud");
    return $id->row();

  }


  function problemaSalud($data){
    $this->db->where("salud",$data["salud"]);
    $res=$this->db->get("problema_salud");
    if ($res->num_rows()>0) {
      $this->db->where("salud",$data["salud"]);
      $this->db->update("problema_salud",$data);

    }else{
      $this->db->insert("problema_salud",$data);
    }
  }
  function delproblemaSalud($id){
    $this->db->where("salud",$id);
    $this->db->delete("problema_salud");
  }

  function delServicios($id){
    $this->db->where("salud",$id);
    $this->db->delete("servicio_salud");
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

  function delTratamiento($id){
    $this->db->where("salud",$id);
    $this->db->delete("tratamiento_medico");
  }

  function problemaTratamiento($data){
    $this->db->insert("tratamiento_medico",$data);
  }

  function delDiscapacidad($id){
    $this->db->where("salud",$id);
    $this->db->delete("didscapacidades_fisicas");
  }
  function problemaDiscapacidad($data){
    $this->db->insert("didscapacidades_fisicas",$data);
  }

  function delPsicologico($id){
    $this->db->where("salud",$id);
    $this->db->delete("tratamiento_psicologico");
  }
  function problemaPsicologico($data){
    $this->db->insert("tratamiento_psicologico",$data);
  }


}
