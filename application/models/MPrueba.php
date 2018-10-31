<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MPrueba extends CI_Model
{
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }

  function getalumnos(){
    return $this->db->get("alumno");
  }
}
?>
