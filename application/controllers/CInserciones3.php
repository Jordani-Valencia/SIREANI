<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CInserciones3 extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('MInserciones3');
		$this->load->library('session');
	}


	public function ambienteSocioEconomico(){

    $tv=isset($_POST['television'])?1:0;
    $tvs=isset($_POST['televisores'])?1:0;
    $vhs=isset($_POST['vhs'])?1:0;
    $dvd=isset($_POST['dvd'])?1:0;
    $agua=isset($_POST['agua'])?1:0;
    $blue=isset($_POST['blue'])?1:0;
    $horno=isset($_POST['horno'])?1:0;
    $focos=isset($_POST['focos'])?1:0;
    $laptop=isset($_POST['laptop'])?1:0;
    $estufa=isset($_POST['estufa'])?1:0;
    $drenaje=isset($_POST['drenaje'])?1:0;
    $laptop2=isset($_POST['laptop2'])?1:0;
    $lavadora=isset($_POST['lavadora'])?1:0;
    $telefono=isset($_POST['linea'])?1:0;
    $tableta1=isset($_POST['tableta1'])?1:0;
    $internet=isset($_POST['internetAS'])?1:0;
    $tableta2=isset($_POST['tableta2'])?1:0;
    $computadora=isset($_POST['computadora'])?1:0;
    $refrigerador=isset($_POST['refrigerador'])?1:0;
    $electricidad=isset($_POST['electricidad'])?1:0;
    $rep_personal=isset($_POST['reproductor'])?1:0;

    $alumno=$this->session->userdata('id');

    $arr_amb_soc=array('alumno'=>$alumno,
                        'agua_potable' =>$agua,
                        'drenaje'=>$drenaje,
                        'electricidad'=>$electricidad,
                        'lavadora'=>$lavadora,
                        'estufa'=>$estufa,
                        'horno'=>$horno,
                        'refrigerador'=>$refrigerador,
                        'linea_telefonica'=>$telefono,
                        'computadora'=>$computadora,
                        'laptop'=>$laptop,
                        'tableta'=>$tableta1,
                        'internet'=>$internet,
                        'tv_paga'=>$tv,
                        'vhs'=>$vhs,
                        'dvd'=>$dvd,
                        'blue_ray'=>$blue,
                        'reproductor_personal'=>$rep_personal,
                        'tableta_personal'=>$tableta2,
                        'laptop_personal'=>$laptop2,
                        'num_focos'=>$focos,
                        'num_tvs'=>$tvs);

    $this->MInserciones3->ambienteSocioEconomico($arr_amb_soc);


    $arr_salud=array("alumno"=>$alumno,
    "apariencia"=>$_POST['grupo3'],
    "estatura"=>$_POST['estatura'],
    "peso"=>$_POST['peso'],
    "frec_medico"=>$_POST['medico'],
    "frec_dentista"=>$_POST['dentista'],
    "anteojos"=>$_POST['anteojos']);
    $idsalud=$this->MInserciones3->salud1($arr_salud);
    $id=$idsalud->id_salud;

    if (isset($_POST['enfermo'])) {
      if ($_POST['enfermo']=="on") {
        $arr_salud=array("salud"=>$id,
        "descripcion"=>$_POST['especificar4']);
        $this->MInserciones3->problemaSalud($arr_salud);
        }
      }

        if (isset($_POST['imss'])) {
          $arr_salud=array("salud"=>$id,
          "servicio"=>$_POST['imss']);
          $this->MInserciones3->serv_salud($arr_salud);
          }
          if (isset($_POST['ejercito'])) {
            $arr_salud=array("salud"=>$id,
            "servicio"=>$_POST['ejercito']);
            $this->MInserciones3->serv_salud($arr_salud);
            }
            if (isset($_POST['privado'])) {
              $arr_salud=array("salud"=>$id,
              "servicio"=>$_POST['privado']);
              $this->MInserciones3->serv_salud($arr_salud);
              }
              if (isset($_POST['isste'])) {
                $arr_salud=array("salud"=>$id,
                "servicio"=>$_POST['isste']);
                $this->MInserciones3->serv_salud($arr_salud);
                }
                if (isset($_POST['sec_salud'])) {
                  $arr_salud=array("salud"=>$id,
                  "servicio"=>$_POST['sec_salud']);
                  $this->MInserciones3->serv_salud($arr_salud);
                  }
                  if (isset($_POST['pemex'])) {
                    $arr_salud=array("salud"=>$id,
                    "servicio"=>$_POST['pemex']);
                    $this->MInserciones3->serv_salud($arr_salud);
                    }
                    if (isset($_POST['seg_popular'])) {
                      $arr_salud=array("salud"=>$id,
                      "servicio"=>$_POST['seg_popular']);
                      $this->MInserciones3->serv_salud($arr_salud);
                    }

                    if (isset($_POST['otro'])) {
                      $arr_salud=array("servicio"=>$_POST['especificar5']);
                      $servicio=$this->MInserciones3->nuevoServicio($arr_salud);
                      $id_serv=$servicio->id_tipo_servicio;
                      $arr_salud=array("salud"=>$id,
                      "servicio"=>$id_serv);
                      $this->MInserciones3->serv_salud($arr_salud);
                    }

                    if (isset($_POST['tratamiento'])) {
                      if ($_POST['tratamiento']=="on") {
                        $arr_salud=array("salud"=>$id,
                        "descripcion"=>$_POST['especificar6']);
                        $this->MInserciones3->problemaTratamiento($arr_salud);
                      }
                    }
                    if (isset($_POST['discapacidad'])) {
                      if ($_POST['discapacidad']=="on") {
                        $arr_salud=array("salud"=>$id,
                        "descripcion"=>$_POST['especificar7']);
                        $this->MInserciones3->problemaDiscapacidad($arr_salud);
                      }
                    }
                    if (isset($_POST['psicologico'])) {
                      if ($_POST['psicologico']=="on") {
                        $arr_salud=array("salud"=>$id,
                        "f_inicio"=>$_POST['desde'],
                        "f_final"=>$_POST['hasta'],
                        "ubicacion"=>$_POST['donde']);
                        $this->MInserciones3->problemaPsicologico($arr_salud);
                      }
                    }


        }


}
