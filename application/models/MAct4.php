<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MAct4 extends CI_Model
{
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }

  function del_deporte($alumno){
    $this->db->where("alumno",$alumno);
    $res=$this->db->delete("ejercicio_deportes");
  }
  function insetar_deporte($datos){
    $this->db->insert("ejercicio_deportes",$datos);
    $this->db->where("alumno",$datos['alumno']);
    $res=$this->db->get("ejercicio_deportes");
    return $res->row();
  }

  function del_deportes_practica($id_ejer_dep){
    $this->db->where("id_ejer_dep",$id_ejer_dep);
    $res=$this->db->delete("deportes_practica");
  }
  function deportes_practica($datos){
    $this->db->insert("deportes_practica",$datos);
  }
  function nuevoDeporte($datos){
    $this->db->insert("deportes",$datos);
    $this->db->where("deporte",$datos['deporte']);
    $res=$this->db->get("deportes");
    return $res->row();
  }

  function delHabitoconsumo($alumno){
    $this->db->where('alumno',$alumno);
    $this->db->delete("habitos_consumos");
  }
  function insertHabitoConsumo($datos){
    $this->db->insert("habitos_consumos",$datos);
  }

  function delRecreacion($alumno){
    $this->db->where('alumno',$alumno);
    $this->db->delete("recreacion");
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

  function delGusto($alumno){
    $this->db->where('alumno',$alumno);
    $this->db->delete("gustos_intereses");
  }
  function insertGusto($datos){
    $this->db->insert("gustos_intereses",$datos);
  }

  function delParticipacion($alumno){
    $this->db->where('alumno',$alumno);
    $this->db->delete("participacion_social");
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

  function delOrg($id_participacion){
    $this->db->where("id_participacion",$part);
    $this->db->delete("org_participacion");
  }
  function insOrgPart($datos){
    $this->db->insert("org_participacion",$datos);
  }

  function delInternet($alumno){
    $this->db->where("alumno",$alumno);
    $this->db->delete("internet");
  }
  function insinternet($datos){
    $this->db->insert("internet",$datos);
  }



}
