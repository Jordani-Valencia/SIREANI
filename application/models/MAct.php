<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MAct extends CI_Model
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
    $last_id=$this->db->where($data);
    $query=$this->db->get("secundaria");
    if ($query->num_rows()>0) {
      return $query->row();
    }else{
      $this->db->insert("secundaria",$data);
      $this->db->where($data);
      $last_id=$this->db->get("secundaria");
      return $last_id->row();
    }

  }

  function actualizaDatosGenerales ($data,$id_alumno){
    $this->db->where("id_alumno",$id_alumno);
    $this->db->update("alumno",$data);
  }///////////////////////////////////////////////////

  function setBeca($data,$id_alumno){
    $this->db->where("id_alumno_ab",$id_alumno);
    $res=$this->db->get("alumno_beca");
    if ($res->num_rows()>0) {
      $this->db->where("id_alumno_ab",$id_alumno);
      $this->db->update("alumno_beca",$data);
    }else{
      $this->db->insert("alumno_beca",$data);
    }

  }
  function delBeca($id_alumno){
    $this->db->where("id_alumno_ab",$id_alumno);
    $this->db->delete("alumno_beca");
  }


  function setTrabajo($data,$id_alumno){
    $this->db->where("alumno_at",$id_alumno);
    $res=$this->db->get("alumno_trabajo");
    if ($res->num_rows()>0) {
      $this->db->where("alumno_at",$id_alumno);
      $res=$this->db->update("alumno_trabajo",$data);
    }else{
      $res=$this->db->insert("alumno_trabajo",$data);
    }
  }
  function deltrabajo($id_alumno){
    $this->db->where("alumno_at",$id_alumno);
    $res=$this->db->delete("alumno_trabajo");
  }

  function setDomicilio($data,$id_alumno){
    $this->db->where("alumno",$id_alumno);
    $this->db->update("domicilios",$data);
  }

}

?>
