<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CInserciones5 extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('MInserciones5');
		$this->load->library('session');

	}
  function ajaxConsumo(){
    $alumno=$this->session->userdata('id');

    $arr_consumo=array(
      "alumno" =>$alumno,
      "sustancia"=>$_POST['sustanciaModal'],
      "familiar"=>$_POST['parentescoModal'],
      "frecuencia"=>$_POST['FrecuenciaModal']);

    $this->MInserciones5->insConsumoFamiliar($arr_consumo);


  }

	public function sociales(){
    $alumno=$this->session->userdata('id');
    $arr_int=array(
      "alumno"=>$alumno,
      "tiene_cel"=>isset($_POST['celular4'])?1:0,
      "acceso_int"=>isset($_POST['internet3'])?1:0,
      "correo"=>$_POST['correo2']);
    $this->MInserciones5->insertMovil($arr_int);



    $arr_relaciones = array(
      "alumno" =>$alumno,
      "lugar_hermano"=>$_POST['hermanos'],
      "edad_noviazgo"=>$_POST['primernovio'],
      "tiene_novio"=>isset($_POST['novio'])?1:0,
      "tiempo_novio"=>isset($_POST['tiempo'])?$_POST['tiempo']:null,
      "numero_parejas"=>isset($_POST['parejas'])?$_POST['parejas']:null,
      "tiempo_ruptura"=>isset($_POST['promedio2'])?$_POST['promedio2']:null,
      "motivo_ruptura"=>isset($_POST['ruptura'])?$_POST['ruptura']:null,
      "persona_confianza"=>isset($_POST['persona'])?$_POST['persona']:null,
      "razon"=>isset($_POST['confianza'])?$_POST['confianza']:null,
      "toma_decisiones"=>isset($_POST['decision'])?$_POST['decision']:null,
      "flexible_problemas"=>isset($_POST['flexible'])?$_POST['flexible']:null,
      "problemas_comunicacion"=>isset($_POST['comunicacion'])?$_POST['comunicacion']:null
    );
    $id_realacion=$this->MInserciones5->insRelaciones($arr_relaciones);
    $relacion=$id_realacion->id_relacion;

    if (isset($_POST['plat'])) {
      $arr_relacion=array(
        "relacion"=>$relacion,
        "descripcion"=>1);
      $this->MInserciones5->insRelHerano($arr_relacion);
    }
    if (isset($_POST['respeto'])) {
      $arr_relacion=array(
        "relacion"=>$relacion,
        "descripcion"=>3);
      $this->MInserciones5->insRelHerano($arr_relacion);
    }
    if (isset($_POST['apoyo'])) {
      $arr_relacion=array(
        "relacion"=>$relacion,
        "descripcion"=>5);
      $this->MInserciones5->insRelHerano($arr_relacion);
    }
    if (isset($_POST['jugar'])) {
      $arr_relacion=array(
        "relacion"=>$relacion,
        "descripcion"=>2);
      $this->MInserciones5->insRelHerano($arr_relacion);
    }
    if (isset($_POST['no'])) {
      $arr_relacion=array(
        "relacion"=>$relacion,
        "descripcion"=>4);
      $this->MInserciones5->insRelHerano($arr_relacion);
    }
    if (isset($_POST['pelear'])) {
      $arr_relacion=array(
        "relacion"=>$relacion,
        "descripcion"=>6);
      $this->MInserciones5->insRelHerano($arr_relacion);
    }
    if (isset($_POST['lavarpapa'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>14,
        "familiar"=>1);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['lavarmama'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>14,
        "familiar"=>2);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['lavarhermano'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>14,
        "familiar"=>3);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['lavaryo'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>14,
        "familiar"=>11);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['lavarpersona'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>14,
        "familiar"=>10);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['barrerpapa'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>15,
        "familiar"=>1);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['barrermama'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>15,
        "familiar"=>2);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['barrerhermano'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>15,
        "familiar"=>3);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['barreryo'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>15,
        "familiar"=>11);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['barrerpersona'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>15,
        "familiar"=>10);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['cocinarpapa'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>16,
        "familiar"=>1);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['cocinarmama'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>16,
        "familiar"=>2);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['cocinarhermano'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>16,
        "familiar"=>3);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['cocinaryo'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>16,
        "familiar"=>11);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['cocinarpersonatraste'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>16,
        "familiar"=>10);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['cocinarpersonatraste'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>16,
        "familiar"=>10);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['trastepapa'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>17,
        "familiar"=>1);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['trastemama'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>17,
        "familiar"=>2);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['trastehermano'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>17,
        "familiar"=>3);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['trasteyo'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>17,
        "familiar"=>11);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }
    if (isset($_POST['trastepersona'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividad"=>17,
        "familiar"=>10);
      $this->MInserciones5->insertActFamilia($ar_actividades);
    }

    if (isset($_POST['negocio'])) {
      $ar_actividades=array(
        "relacion"=>$relacion,
        "actividades_apoyo"=>$_POST['negocio2']);
      $this->MInserciones5->insertNegocio($ar_actividades);
    }

    redirect(base_url().'registro/seis');
  }
}
