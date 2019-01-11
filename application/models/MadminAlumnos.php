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

  public function eliminar(){
    $this->db->query("DELETE FROM alumno");
  }
//hop8xJ0kEee6k
//hoXSLooj4mvNo
  public function cambiarC($dato){
    $this->db->update("login",$dato);
  }

  public function deleteAlumno($id){
    $this->db->where("id_alumno",$id);
    $this->db->delete("alumno");
  }

  public function delFamiliar($id){
    $this->db->where("id_familiar",$id);
    $this->db->delete("familiares");
  }

  public function deliNGFamiliar($id){
    $this->db->where("id_ingreso_familiar",$id);
    $this->db->delete("ingresos_familiares");
  }

}
?>
