<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CActualizaciones3 extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('MAct3');
		$this->load->library('session');
	}


	public function ambienteSocioEconomico($alumno){

    $tv=isset($_POST['television'])?1:0;
    $tvs=isset($_POST['televisores'])?1:0;
    $vhs=isset($_POST['vhs'])?1:0;
    $dvd=isset($_POST['dvd'])?1:0;
    $agua=isset($_POST['agua'])?1:0;
    $blue=isset($_POST['blue'])?1:0;
    $horno=isset($_POST['horno'])?1:0;
    $focos=isset($_POST['focos'])?$_POST['focos']:0;
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

    $this->MAct3->ambienteSocioEconomico($arr_amb_soc);

    //AGREGAR (tipo_sangre varchar (4), alergias text, num_seguro TEXT)
    $arr_salud=array("alumno"=>$alumno,
    "apariencia"=>$_POST['grupo3'],
    "estatura"=>$_POST['estatura'],
    "peso"=>$_POST['peso'],
    "tipo_sangre"=>$_POST['sangre'],
    "alergias"=>$_POST['alergia'],
    "num_seguro"=>$_POST['numseguro'],
    "frec_medico"=>$_POST['medico'],
    "frec_dentista"=>$_POST['dentista'],
    "anteojos"=>$_POST['anteojos']);
    $idsalud=$this->MAct3->salud1($arr_salud);

    $id=$idsalud->id_salud;

    if (isset($_POST['enfermo'])) {
      if ($_POST['enfermo']=="on") {
        $arr_salud=array("salud"=>$id,
        "descripcion"=>$_POST['especificar4']);
        $this->MAct3->problemaSalud($arr_salud);
        }
      }else{
        $this->MAct3->delproblemaSalud($id);
      }

      $this->MAct3->delServicios($id);

    if (isset($_POST['imss'])) {
          $arr_salud=array("salud"=>$id,
          "servicio"=>$_POST['imss']);
          $this->MAct3->serv_salud($arr_salud);
        }

          if (isset($_POST['ejercito'])) {
            $arr_salud=array("salud"=>$id,
            "servicio"=>$_POST['ejercito']);
            $this->MAct3->serv_salud($arr_salud);
            }
            if (isset($_POST['privado'])) {
              $arr_salud=array("salud"=>$id,
              "servicio"=>$_POST['privado']);
              $this->MAct3->serv_salud($arr_salud);
              }
              if (isset($_POST['isste'])) {
                $arr_salud=array("salud"=>$id,
                "servicio"=>$_POST['isste']);
                $this->MAct3->serv_salud($arr_salud);
                }
                if (isset($_POST['sec_salud'])) {
                  $arr_salud=array("salud"=>$id,
                  "servicio"=>$_POST['sec_salud']);
                  $this->MAct3->serv_salud($arr_salud);
                  }
                  if (isset($_POST['pemex'])) {
                    $arr_salud=array("salud"=>$id,
                    "servicio"=>$_POST['pemex']);
                    $this->MAct3->serv_salud($arr_salud);
                    }
                    if (isset($_POST['seg_popular'])) {
                      $arr_salud=array("salud"=>$id,
                      "servicio"=>$_POST['seg_popular']);
                      $this->MAct3->serv_salud($arr_salud);
                    }

                    if (isset($_POST['otro'])) {
                      $arr_salud=array("servicio"=>$_POST['especificar5']);
                      $servicio=$this->MAct3->nuevoServicio($arr_salud);
                      $id_serv=$servicio->id_tipo_servicio;
                      $arr_salud=array("salud"=>$id,
                      "servicio"=>$id_serv);
                      $this->MAct3->serv_salud($arr_salud);
                    }

                    $this->MAct3->delTratamiento($id);
                    if (isset($_POST['tratamiento'])) {
                      if ($_POST['tratamiento']=="on") {
                        $arr_salud=array("salud"=>$id,
                        "descripcion"=>$_POST['especificar6']);
                        $this->MAct3->problemaTratamiento($arr_salud);
                      }
                    }

                    $this->MAct3->delDiscapacidad($id);
                    if (isset($_POST['discapacidad'])) {
                      if ($_POST['discapacidad']=="on") {
                        $arr_salud=array("salud"=>$id,
                        "descripcion"=>$_POST['especificar7']);
                        $this->MAct3->problemaDiscapacidad($arr_salud);
                      }
                    }

                    $this->MAct3->delPsicologico($id);
                    if (isset($_POST['psicologico'])) {
                      if ($_POST['psicologico']=="on") {
                        $arr_salud=array("salud"=>$id,
                        "f_inicio"=>$_POST['desde'],
                        "f_final"=>$_POST['hasta'],
                        "ubicacion"=>$_POST['donde']);
                        $this->MAct3->problemaPsicologico($arr_salud);
                      }
                    }


        }


}
