<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CInserciones6 extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('MInserciones6');
		$this->load->library('session');
	}


	public function proyVida(){
    $alumno=$this->session->userdata('id');

    $arr_proy=array(
      "alumno"=>$alumno,
      "meta_escuela"=>$_POST['metas'],
      "meta_vida"=>$_POST['metavida'],
      "piensa_lograrla"=>$_POST['lograr'],
      "estancia"=>$_POST['estancia'],
      "termino"=>isset($_POST['continua'])?1:0,
      "carrera"=>isset($_POST['continua'])?$_POST['que']:null);
    $id_proy=$this->MInserciones6->insGetProyecto($arr_proy);
    $id=$id_proy->id_proy_vida;

    if (isset($_POST['instalacion'])) {
      $arr_OPV= array(
        "id_opcion_pv"=>1,
        "id_proy_pv"=>$id);
      $this->MInserciones6->insProyOpcion($arr_OPV);
    }
    if (isset($_POST['carrera'])) {
      $arr_OPV= array(
        "id_opcion_pv"=>5,
        "id_proy_pv"=>$id);
      $this->MInserciones6->insProyOpcion($arr_OPV);
    }
    if (isset($_POST['ensenanza'])) {
      $arr_OPV= array(
        "id_opcion_pv"=>2,
        "id_proy_pv"=>$id);
      $this->MInserciones6->insProyOpcion($arr_OPV);
    }
    if (isset($_POST['recomendacion'])) {
      $arr_OPV= array(
        "id_opcion_pv"=>6,
        "id_proy_pv"=>$id);
      $this->MInserciones6->insProyOpcion($arr_OPV);
    }
    if (isset($_POST['documento'])) {
      $arr_OPV= array(
        "id_opcion_pv"=>3,
        "id_proy_pv"=>$id);
      $this->MInserciones6->insProyOpcion($arr_OPV);
    }
    if (isset($_POST['obligado'])) {
      $arr_OPV= array(
        "id_opcion_pv"=>7,
        "id_proy_pv"=>$id);
      $this->MInserciones6->insProyOpcion($arr_OPV);
    }
    if (isset($_POST['economia'])) {
      $arr_OPV= array(
        "id_opcion_pv"=>4,
        "id_proy_pv"=>$id);
      $this->MInserciones6->insProyOpcion($arr_OPV);
    }
    if (isset($_POST['opcion'])) {
      $arr_OPV= array(
        "id_opcion_pv"=>8,
        "id_proy_pv"=>$id);
      $this->MInserciones6->insProyOpcion($arr_OPV);
    }
    if ($_POST['especificar14']!="") {
      $arr_OPV= array(
        "opcion"=>$_POST['especificar14']);
      $nuevo=$this->MInserciones6->nuevaOpcion($arr_OPV);
      $arr_OPV= array(
        "id_opcion_pv"=>$nuevo->id_opcion,
        "id_proy_pv"=>$id);
      $this->MInserciones6->insProyOpcion($arr_OPV);
    }

    $arr_perfil=array(
      "alumno" =>$alumno,
      "p1"=>isset($_POST['promedio2'])?1:0,
      "p2"=>isset($_POST['reprobado'])?1:0,
      "p3"=>isset($_POST['eleccion'])?1:0,
      "p4"=>isset($_POST['asistir'])?1:0,
      "p5"=>isset($_POST['escuela'])?1:0,
      "p6"=>isset($_POST['bueno'])?1:0,
      "p7"=>isset($_POST['maestro'])?1:0,
      "p8"=>isset($_POST['dudas'])?1:0,
      "p9"=>isset($_POST['molestaban'])?1:0,
      "p10"=>isset($_POST['reprobado2'])?1:0,
      "p11"=>isset($_POST['personal'])?1:0,
      "p12"=>isset($_POST['eua'])?1:0,
      "p13"=>isset($_POST['pareja'])?1:0,
      "p14"=>isset($_POST['probleco'])?1:0,
      "p15"=>isset($_POST['trabajar'])?1:0);

    $this->MInserciones6->inserPerifl($arr_perfil);
    redirect(base_url().'registro/generarPDF');
  }


}
