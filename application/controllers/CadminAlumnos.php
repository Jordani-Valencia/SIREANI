<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadminAlumnos extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('MadminAlumnos');
    $this->load->database();
	}

  public function alumnos(){
    $al = $this->MadminAlumnos->obtenerAlumnos();
    $data = array();

      foreach($al->result() as $r) {
        $data[] = array(
          $r->curp,
          $r->nombre_al,
          $r->paterno_al,
          $r->materno_al,
          "<input type='button' value='Editar' href='contrlador/funcion/'>"
          );
         }

         $output = array(
                "recordsTotal" => $al->num_rows(),
                "recordsFiltered" => $al->num_rows(),
                "data" => $data
           );
         echo json_encode($output);
         exit();
  }
}
?>
