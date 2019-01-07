<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CInserciones extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('MInserciones');
		$this->load->library('session');
	}


	public function datosGenerales(){

    $datos_secundaria= array(
      "nombre_sec" => $_POST['escuela1'],
      "domicilio_sec"=>$_POST['domEsc1'],
      "entidad_sec"=>$_POST['entidad2'],
      "municipio"=>$_POST['municipio2'],
      "delegacion"=>$_POST['delegacion2']
    );

    $secundaria=$this->MInserciones->getSecundaria($datos_secundaria);
    $sec=$secundaria->id_secundaria;
    $datos_generales = array(
      "nombre_al"=>$_POST['nombre1'],
      "paterno_al"=>$_POST['paterno1'],
      "materno_al"=>$_POST['materno1'],
      "fecha_nacimiento_al"=>$_POST['nacimiento1'],

      "edad"=>$_POST['edadAlumno'],
      "civil"=>$_POST['civilAlumno'],

      "sexo"=>$_POST['sexo1'],
      "lugar_nacimiento"=>$_POST['lugar1'],
      "entidad"=>$_POST['entidad1'],
      "municipio_nac"=>$_POST['municipio1'],
      "delegacion_nac"=>$_POST['delegacion1'],
      "pais_nac"=>$_POST['pais_n'],
      "nacionalidad"=>$_POST['nacion_n'],
      "curp"=>$_POST['curp1'],
      "secundaria_al"=>$sec,
      "turno"=>$_POST['turno1'],
      "promedio"=>$_POST['promedio1']
    );
    $id_alumno=0;
    $res=$this->MInserciones->insertaDatosGenerales($datos_generales);
    $id_alumno=$res->id_alumno;
    //////////////////////////////////////
    $arrSess=array('id' => $id_alumno,
                    'curp'=>$res->curp);
		$this->session->set_userdata($arrSess);
    //////////////////////////////////////
    if (isset($_POST['beca1'])) {
      if ($_POST['beca1']=="on") {
        $beca=array("id_alumno_ab" => $id_alumno,
                    "beca"=> $_POST['especificar1']);
        $this->MInserciones->setBeca($beca);
      }
    }

    if (isset($_POST['trabaja1'])) {
      if ($_POST['trabaja1']=="on") {
        $trabajo=array("alumno_at" => $id_alumno,
                    "trabajo"=> $_POST['especificar2'],
                    "empresa"=> $_POST['empresa1'],
                    "puesto"=> $_POST['ocupacion'],
                    "horario"=> $_POST['horaInicio']."-".$_POST['horaFin'],
                    "inicio"=> $_POST['horaInicio'],
                    "hfinal"=> $_POST['horaFin'],
                    "horas_semana"=> $_POST['horas']
                  );
        $this->MInserciones->setTrabajo($trabajo);
      }
    }

    $domicilio = array("alumno" =>$id_alumno,
                        "calle"=>$_POST['calle1'],
                        "exterior"=>$_POST['exterior1'],
                        "interior"=>$_POST['interior1'],
                        "entreCalle1"=>$_POST['entrec1'],
                        "entreCalle2"=>$_POST['entrec2'],
                        "referencia"=>$_POST['referencia'],
                        "tel_emergencia"=>$_POST['emergencia'],
                        "colonia"=>$_POST['colonia1'],
                        "estado"=>$_POST['entidad3'],
                        "municipio"=>$_POST['municipio3'],
                        "delegacion"=>$_POST['delegacion3'],
                        "codigoPostal"=>$_POST['postal1'],
                        "tel_casa"=>$_POST['telefono1'],
                        "celular"=>$_POST['celular1']
                        );

    $this->MInserciones->setDomicilio($domicilio);

    redirect(base_url().'registro/dos');
  }


}
