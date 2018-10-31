<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPrueba extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('MPrueba');
    $this->load->database();
	}

  public function alumnos(){
    $draw = intval($this->input->get("draw"));
         $start = intval($this->input->get("start"));
         $length = intval($this->input->get("length"));


         $al = $this->MPrueba->getalumnos();

         $data = array();

         foreach($al->result() as $r) {

              $data[] = array(
                   $r->id,
                   $r->nombre,
                   $r->paterno,
                   $r->materno
              );
         }

         $output = array(
              "draw" => $draw,
                "recordsTotal" => $al->num_rows(),
                "recordsFiltered" => $al->num_rows(),
                "data" => $data
           );
         echo json_encode($output);
         exit();
  }
}
?>
