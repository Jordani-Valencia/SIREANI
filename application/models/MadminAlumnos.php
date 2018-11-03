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
}
?>
