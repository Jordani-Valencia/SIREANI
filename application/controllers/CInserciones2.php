<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CInserciones2 extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('MInserciones2');
		$this->load->library('session');

	}

	public function padre(){
    $alumno=$this->session->userdata('id');
    $trabaja=isset($_POST['trabaja'])?1:0;
    $horas=isset($_POST['trabaja'])?$_POST['semana']:0;

    $arr_padre=array(
      "alumno" =>$alumno,
      "parentezco"=>2,
      "paterno_padre"=>$_POST['paterno2'],
      "materno_padre"=>$_POST['materno2'],
      "nombre_padre"=>$_POST['nombre3'],
      "fecha_nacimiento"=>$_POST['nacimiento2'],
      "lugar_nacimiento"=>$_POST['lugar2'],
      "municipio"=>$_POST['municipio4'],
      "delegacion"=>$_POST['delegacion4'],
      "entidad"=>$_POST['entidad3'],
      "pais"=>$_POST['pais2'],
      "curp"=>$_POST['curp2'],
      "trabaja"=>$trabaja,
      "tel_casa"=>$_POST['telefono2'],
      "horas_trabajo"=>$horas,
      "tel_trabajo"=>$_POST['telefono3'],
      "cel"=>$_POST['celular2'],
      "grado_estudio"=>$_POST['grupo1']);
      $this->MInserciones2->padres($arr_padre);

      $trabaja=isset($_POST['trabaja3'])?1:0;
      $horas=isset($_POST['trabaja3'])?$_POST['semana2']:0;

      $arr_padre=array(
        "alumno" =>$alumno,
        "parentezco"=>1,
        "paterno_padre"=>$_POST['paterno3'],
        "materno_padre"=>$_POST['materno3'],
        "nombre_padre"=>$_POST['nombre4'],
        "fecha_nacimiento"=>$_POST['nacimiento3'],
        "lugar_nacimiento"=>$_POST['lugar3'],
        "municipio"=>$_POST['municipio5'],
        "delegacion"=>$_POST['delegacion5'],
        "entidad"=>$_POST['entidad4'],
        "pais"=>$_POST['pais3'],
        "curp"=>$_POST['curp3'],
        "trabaja"=>$trabaja,
        "tel_casa"=>$_POST['telefono4'],
        "horas_trabajo"=>$horas,
        "tel_trabajo"=>$_POST['telefono5'],
        "cel"=>$_POST['celular3'],
        "grado_estudio"=>$_POST['grupo2']);
        $this->MInserciones2->padres($arr_padre);

        $personas=isset($_POST['ingresos1'])?$_POST['ingresos1']:0;
        $depende=isset($_POST['economico1'])?$_POST['economico1']:0;
        $otro=isset($_POST['especificar3'])?$_POST['especificar3']:0;

        if ($depende==8) {
          $add=array("parentezco"=>$otro);
          $idIngreso=$this->MInserciones2->nuevo_parentezco($add);
          $depende=$idIngreso->id_parentezco;
        }
        $ingresos= array(
          "alumno" =>$alumno,
          "cantidad_personas"=>$personas,
          "dependencia"=>$depende);
        $this->MInserciones2->ingresos($ingresos);


        redirect(base_url().'registro/tres');

  }

  public function ajaxFamiliar(){
  $alumno=$this->session->userdata('id');
      $arr_family= array(
        'paterno'=>$_POST['paterno'],
        'materno'=>$_POST['materno'],
        'nombre'=>$_POST['nombre'],
        'sexo'=>$_POST['sexo'],
        'edad'=>$_POST['edad'],
        'ocupacion'=>$_POST['ocupacion'],
        'parentezco'=>$_POST['parentesco'],
        'grado_estudio'=>$_POST['grado'],
        'alumno'=>$alumno);
        $this->MInserciones2->insertFamiliar($arr_family);

  }
  public function ajaxIngresos(){
    $alumno=$this->session->userdata('id');
        $arr_family= array(
          'personas_ingreso'=>$_POST['persona'],
          'ingreso'=>$_POST['ingreso'],
          'porcentaje_destinado'=>$_POST['porcentaje'],
          'alumno'=>$alumno);
          $this->MInserciones2->insertIngreso($arr_family);
  }



}
