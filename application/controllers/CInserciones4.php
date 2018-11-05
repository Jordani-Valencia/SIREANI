<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CInserciones4 extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('MInserciones4');
		$this->load->library('session');
	}


	public function deportes(){
    $alumno=$this->session->userdata('id');
    //////////////////////////////////
    $fuma=isset($_POST['fuma'])?$_POST['fuma']:"";
    $frecfuma=isset($_POST['frecfuma'])?$_POST['frecfuma']:"";
    $cerveza=isset($_POST['cerveza'])?$_POST['cerveza']:"";
    $freccerveza=isset($_POST['freccerveza'])?$_POST['freccerveza']:"";
    $vino=isset($_POST['vino'])?$_POST['vino']:"";
    $frecvino=isset($_POST['frecvino'])?$_POST['frecvino']:"";
    $coctel=isset($_POST['coctel'])?$_POST['coctel']:"";
    $freccoctel=isset($_POST['freccoctel'])?$_POST['freccoctel']:"";
    $licor=isset($_POST['licor'])?$_POST['licor']:"";
    $freclicor=isset($_POST['freclicor'])?$_POST['freclicor']:"";
    $otro1=isset($_POST['otro1'])?$_POST['otro1']:"";
    $frecotro=isset($_POST['frecotro'])?$_POST['frecotro']:"";
    $adiccion=isset($_POST['adiccion'])?$_POST['adiccion']:"";
    $especificar9=isset($_POST['especificar9'])?$_POST['especificar9']:"";
    $droga=isset($_POST['droga'])?$_POST['droga']:"";
    $especificar10=isset($_POST['especificar10'])?$_POST['especificar10']:"";
    $deporte=isset($_POST['deporte'])?$_POST['deporte']:"";
    //////////////////////////////////
    $ejercicio=array(
      "alumno"=>$alumno,
      "frecuencia"=>$_POST['ejercicio'],
        "practica_deporte"=>$_POST['deporte']);//verificar
    $id_deporte=$this->MInserciones4->insetar_deporte($ejercicio);
    $id_dep=$id_deporte->id_ejer_dep;

    if (isset($_POST['futbol'])) {
      $arr_deporte= array('id_ejer_dep' => $id_dep,
      "id_deporte"=>$_POST['futbol']);
      $this->MInserciones4->deportes_practica($arr_deporte);
    }
    if (isset($_POST['beisbol'])) {
      $arr_deporte= array('id_ejer_dep' => $id_dep,
      "id_deporte"=>$_POST['beisbol']);
      $this->MInserciones4->deportes_practica($arr_deporte);
    }
    if (isset($_POST['basquetbol'])) {
      $arr_deporte= array('id_ejer_dep' => $id_dep,
      "id_deporte"=>$_POST['basquetbol']);
      $this->MInserciones4->deportes_practica($arr_deporte);
    }
    if (isset($_POST['natacion'])) {
      $arr_deporte= array('id_ejer_dep' => $id_dep,
      "id_deporte"=>$_POST['natacion']);
      $this->MInserciones4->deportes_practica($arr_deporte);
    }
    if (isset($_POST['atletismo'])) {
      $arr_deporte= array('id_ejer_dep' => $id_dep,
      "id_deporte"=>$_POST['atletismo']);
      $this->MInserciones4->deportes_practica($arr_deporte);
    }
    if (isset($_POST['tenis'])) {
      $arr_deporte= array('id_ejer_dep' => $id_dep,
      "id_deporte"=>$_POST['tenis']);
      $this->MInserciones4->deportes_practica($arr_deporte);
    }
    if (isset($_POST['gimnasia'])) {
      $arr_deporte= array('id_ejer_dep' => $id_dep,
      "id_deporte"=>$_POST['gimnasia']);
      $this->MInserciones4->deportes_practica($arr_deporte);
    }
    if (isset($_POST['judo'])) {
      $arr_deporte= array('id_ejer_dep' => $id_dep,
      "id_deporte"=>$_POST['judo']);
      $this->MInserciones4->deportes_practica($arr_deporte);
    }
    if (isset($_POST['karate'])) {
      $arr_deporte= array('id_ejer_dep' => $id_dep,
      "id_deporte"=>$_POST['karate']);
      $this->MInserciones4->deportes_practica($arr_deporte);
    }
    if (isset($_POST['halterofilia'])) {
      $arr_deporte= array('id_ejer_dep' => $id_dep,
      "id_deporte"=>$_POST['halterofilia']);
      $this->MInserciones4->deportes_practica($arr_deporte);
    }
    if (isset($_POST['boxeo'])) {
      $arr_deporte= array('id_ejer_dep' => $id_dep,
      "id_deporte"=>$_POST['boxeo']);
      $this->MInserciones4->deportes_practica($arr_deporte);
    }
    if (isset($_POST['lucha'])) {
      $arr_deporte= array('id_ejer_dep' => $id_dep,
      "id_deporte"=>$_POST['lucha']);
      $this->MInserciones4->deportes_practica($arr_deporte);
    }
    if (isset($_POST['ciclismo'])) {
      $arr_deporte= array('id_ejer_dep' => $id_dep,
      "id_deporte"=>$_POST['ciclismo']);
      $this->MInserciones4->deportes_practica($arr_deporte);
    }
    if (isset($_POST['lucha'])) {
      $arr_deporte= array('id_ejer_dep' => $id_dep,
      "id_deporte"=>$_POST['lucha']);
      $this->MInserciones4->deportes_practica($arr_deporte);
    }
    if (isset($_POST['ciclismo'])) {
      $arr_deporte= array('id_ejer_dep' => $id_dep,
      "id_deporte"=>$_POST['ciclismo']);
      $this->MInserciones4->deportes_practica($arr_deporte);
    }
    if (isset($_POST['charreria'])) {
      $arr_deporte= array('id_ejer_dep' => $id_dep,
      "id_deporte"=>$_POST['charreria']);
      $this->MInserciones4->deportes_practica($arr_deporte);
    }
    if (isset($_POST['otro'])) {//
      $arr_deporte=array('deporte' => $_POST['especificar8']);
      $id_deport=$this->MInserciones4->nuevoDeporte($arr_deporte);

      $arr_deporte=array('id_ejer_dep'=>$id_dep,
      "id_deporte"=>$id_deport->id_deporte);
      $this->MInserciones4->deportes_practica($arr_deporte);
    }


    $habitos_deporte = array('alumno' =>$alumno,
      'fuma'=>isset($_POST['fuma'])?1:0,
      'cant_cigarros'=>isset($_POST['fuma'])?$_POST['frecfuma']:0,
      'amigo_adiccion'=>isset($_POST['adiccion'])?1:0,
      'adiccion'=>isset($_POST['adiccion'])?$_POST['especificar9']:"-",
      'consumen_droga'=>isset($_POST['droga'])?1:0,
      'droga'=>isset($_POST['droga'])? $_POST['especificar10']:0,
      'consume_cerveza'=>isset($_POST['cerveza'])?1:0,
      'cerveza'=>isset($_POST['cerveza'])?$_POST['freccerveza']:0,
      'consume_vino'=>isset($_POST['vino'])?1:0,
      'vinos'=>isset($_POST['vino'])?$_POST['frecvino']:0,
      'consume_coctel'=>isset($_POST['coctel'])?1:0,
      'cocteles'=>isset($_POST['coctel'])?$_POST['freccoctel']:0,
      'consume_licor'=>isset($_POST['licor'])?1:0,
      'licores'=>isset($_POST['licor'])?$_POST['freclicor']:0,
      'consume_otro'=>isset($_POST['otro1'])?1:0,
      'otros'=>isset($_POST['otro1'])?$_POST['frecotro']:0);

      $this->MInserciones4->insertHabitoConsumo($habitos_deporte);

      if (isset($_POST['parque'])) {
        $deporte = array('alumno'=>$alumno,
        "actividad"=>$_POST['parque']);
        $this->MInserciones4->insertRecreacion($deporte);
      }
      if (isset($_POST['deporte1'])) {
        $deporte = array('alumno'=>$alumno,
        "actividad"=>$_POST['deporte1']);
        $this->MInserciones4->insertRecreacion($deporte);
      }
      if (isset($_POST['tele'])) {
        $deporte = array('alumno'=>$alumno,
        "actividad"=>$_POST['tele']);
        $this->MInserciones4->insertRecreacion($deporte);
      }
      if (isset($_POST['cine'])) {
        $deporte = array('alumno'=>$alumno,
        "actividad"=>$_POST['cine']);
        $this->MInserciones4->insertRecreacion($deporte);
      }
      if (isset($_POST['amigos'])) {
        $deporte = array('alumno'=>$alumno,
        "actividad"=>$_POST['amigos']);
        $this->MInserciones4->insertRecreacion($deporte);
      }
      if (isset($_POST['peliculas'])) {
        $deporte = array('alumno'=>$alumno,
        "actividad"=>$_POST['peliculas']);
        $this->MInserciones4->insertRecreacion($deporte);
      }
      if (isset($_POST['bailar'])) {
        $deporte = array('alumno'=>$alumno,
        "actividad"=>$_POST['bailar']);
        $this->MInserciones4->insertRecreacion($deporte);
      }
      if (isset($_POST['pareja'])) {
        $deporte = array('alumno'=>$alumno,
        "actividad"=>$_POST['pareja']);
        $this->MInserciones4->insertRecreacion($deporte);
      }
      if (isset($_POST['leer'])) {
        $deporte = array('alumno'=>$alumno,
        "actividad"=>$_POST['leer']);
        $this->MInserciones4->insertRecreacion($deporte);
      }
      if (isset($_POST['videojuegos'])) {
        $deporte = array('alumno'=>$alumno,
        "actividad"=>$_POST['videojuegos']);
        $this->MInserciones4->insertRecreacion($deporte);
      }
      if (isset($_POST['musica'])) {
        $deporte = array('alumno'=>$alumno,
        "actividad"=>$_POST['musica']);
        $this->MInserciones4->insertRecreacion($deporte);
      }
      if (isset($_POST['compras'])) {
        $deporte = array('alumno'=>$alumno,
        "actividad"=>$_POST['compras']);
        $this->MInserciones4->insertRecreacion($deporte);
      }
      if (isset($_POST['computadora'])) {
        $deporte = array('alumno'=>$alumno,
        "actividad"=>$_POST['computadora']);
        $this->MInserciones4->insertRecreacion($deporte);
      }
      if (isset($_POST['otro2'])) {
        $deporte = array('accion'=>$_POST['especificar11']);
        $nueva=$this->MInserciones4->nuevaActividad($deporte);
        $deporte=array('alumno'=>$alumno,
        "actividad"=>$nueva->id_accion);
        $this->MInserciones4->insertRecreacion($deporte);
      }

      $arrGIntereses=array(
        "alumno"=>$alumno,
        "tiempo_libre"=>$_POST['libre'],
        "ultima_vez_libro"=>$_POST['libro'],
        "gusta_hacer"=>$_POST['gusta'],
        "disgusta_hacer"=>$_POST['disgusta'],
        "num_amigos"=>$_POST['amigos2'],
        "libro1"=>$_POST['libro1'],
        "libro2"=>$_POST['libro2'],
        "libro3"=>$_POST['libro3'],
        "libro4"=>$_POST['libro4'],
        "pelicula1"=>$_POST['pelicula1'],
        "pelicula2"=>$_POST['pelicula2'],
        "pelicula3"=>$_POST['pelicula3'],
        "lugar1"=>$_POST['lugares'],
        "lugar2"=>$_POST['lugares2']);
      $this->MInserciones4->insertGusto($arrGIntereses);


      if (isset($_POST['organizacion'])) {
        $arr_org=array(
          "alumno"=>$alumno,
          "participa"=>1);
        $id=$this->MInserciones4->insertParticipacion($arr_org);
        $part=$id->id_participacion;
        if (isset($_POST['estudiantil'])) {
          $arr_org=array(
            "organizacion"=>$_POST['estudiantil'],
          "id_participacion"=>$part);
          $this->MInserciones4->insOrgPart($arr_org);
        }
        if (isset($_POST['beneficiencia'])) {
          $arr_org=array("organizacion"=>$_POST['beneficiencia'],
          "id_participacion"=>$part);
          $this->MInserciones4->insOrgPart($arr_org);
        }
        if (isset($_POST['politico'])) {
          $arr_org=array("organizacion"=>$_POST['politico'],
          "id_participacion"=>$part);
          $this->MInserciones4->insOrgPart($arr_org);
        }
        if (isset($_POST['deportivo'])) {
          $arr_org=array("organizacion"=>$_POST['deportivo'],
          "id_participacion"=>$part);
          $this->MInserciones4->insOrgPart($arr_org);
        }
        if (isset($_POST['religioso'])) {
          $arr_org=array("organizacion"=>$_POST['religioso'],
          "id_participacion"=>$part);
          $this->MInserciones4->insOrgPart($arr_org);
        }
        if (isset($_POST['academico'])) {
          $arr_org=array("organizacion"=>$_POST['academico'],
          "id_participacion"=>$part);
          $this->MInserciones4->insOrgPart($arr_org);
        }
        if (isset($_POST['otro3'])) {
          $arr_org=array("organizacion"=>$_POST['especificar12']);
          $id=$this->MInserciones4->nuevaOrganizacion($arr_org);
          $arr_org=array("organizacion"=>$id->id_organizacion,
          "id_participacion"=>$part);
          $this->MInserciones4->insOrgPart($arr_org);
        }
      }


      $arr_int=array(
        "alumno" =>$alumno,
        "sabe_usar"=>isset($_POST['internet'])?1:0,
        "tiene_acceso"=>isset($_POST['internet2'])?1:0,
        "acceso"=>isset($_POST['accesoI'])?$_POST['accesoI']:null,
        "correo_electronico"=>isset($_POST['correo'])?1:0,
        "pag_web_personal"=>isset($_POST['pagina'])?1:0,
        "webblog"=>isset($_POST['blog'])?1:0,
        "red_social"=>isset($_POST['social'])?1:0,
        "intercambiar"=>isset($_POST['info'])?1:0,
        "amistad"=>isset($_POST['amistad'])?1:0,
        "profesionales"=>isset($_POST['profesionales'])?1:0,
        "pareja"=>isset($_POST['pareja2'])?1:0,
        "entrenimiento"=>isset($_POST['entre'])?1:0,
        "amigos"=>isset($_POST['buscar'])?1:0,
        "comuinicarse"=>isset($_POST['com'])?1:0,
        "otro"=>isset($_POST['otro5'])?1:0 );

      $this->MInserciones4->insinternet($arr_int);

    redirect(base_url().'registro/cinco');
  }


}
