<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MadminAlumnos extends CI_Model
{
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }

  public function obtenerAlumnos(){
    return $this->db->get("alumno");
  }

  public function nombre($id){
    return $this->db->query("SELECT nombre_al FROM alumno WHERE id_alumno=$id");
  }
}
?>
