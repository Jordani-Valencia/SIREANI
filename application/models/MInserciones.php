<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MInserciones extends CI_Model
{
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }
  function regresa($data){
    if ($data->num_rows()>0) {
      return $data->row();
    }else{
      return false;
    }
  }

  function getSecundaria($data){
    $query=$this->db->query("SELECT * FROM secundaria WHERE nombre_sec='".$data['nombre_sec']."'");
    if ($query->num_rows()>0) {
      return $query->row();
    }else{
      $this->db->insert("secundaria",$data);
      $this->db->where("nombre_sec",$data['nombre_sec']);
      $last_id=$this->get("secundaria");
      return $last_id->row();
    }

  }

  function insertaDatosGenerales ($data){
    $this->db->insert("alumno",$data);
    $this->db->where("curp",$data['curp']);
    $id_dg=$this->db->get("alumno");
    return $id_dg->row();
  }
  function setBeca($data){
    $this->db->insert("alumno_beca",$data);
  }
  function setTrabajo($data){
    $this->db->insert("alumno_trabajo",$data);
  }
  function setDomicilio($data){
    $this->db->insert("domicilios",$data);
  }

}

?>
