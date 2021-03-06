<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CActualizaciones2 extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('MAct2');
		$this->load->library('session');

	}

	public function padre($alumno){


    if ($_POST['nombre5']!=null && $_POST['paterno4']!=null) {
      $arr_tutor= array(
        "alumno" =>$alumno,
        "parentezco"=>9,
        "paterno_padre"=>$_POST['paterno4'],
        "materno_padre"=>$_POST['materno4'],
        "nombre_padre"=>$_POST['nombre5'],
        "fecha_nacimiento"=>$_POST['nacimiento4'],
        "lugar_nacimiento"=>$_POST['lugar4'],
        "municipio"=>$_POST['municipio6'],
        "delegacion"=>$_POST['delegacion6'],
        "entidad"=>isset($_POST['entidad6'])?$_POST['entidad6']:15,
        "pais"=>$_POST['paisTutor'],
        "curp"=>$_POST['curp4'],
        "edad"=>$_POST['edadTutor'],
        "civil"=>$_POST['civilTutor'],
        "correo"=>$_POST['correoTutor'],
        "facebook"=>$_POST['faceTutor'],
        "twitter"=>$_POST['TwitterTutor'],

        "nacionalidad"=>$_POST['nacionalidadTutor'],
        "ocupacion"=>$_POST['ocupacionTutor'],
        "elector"=>$_POST['electorTutor'],

        "trabaja"=>isset($_POST['trabaja4'])?1:0,
        "horas_trabajo"=>isset($_POST['trabaja4'])?$_POST['semana3']:0,
        "grado_estudio"=>isset($_POST['grupo4'])?$_POST['grupo4']:15);
        //especificar14=otro&
        $this->MAct2->insTutor($arr_tutor,$alumno);
    }else{
      $this->MAct2->delTutor($arr_tutor,$alumno);
    }
    //
    if ($_POST['nombre3']!=null && $_POST['paterno2']!=null) {
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
        "entidad"=>isset($_POST['entidad3'])?$_POST['entidad3']:15,
        "pais"=>$_POST['pais2'],
        "curp"=>$_POST['curp2'],
        "edad"=>$_POST['edadMadre'],
        "civil"=>$_POST['civilMadre'],
        "correo"=>$_POST['correoMadre'],
        "facebook"=>$_POST['faceMadre'],
        "twitter"=>$_POST['TwitterMadre'],

        "nacionalidad"=>$_POST['nacionalidadMadre'],
        "ocupacion"=>$_POST['ocupacionMadre'],
        "elector"=>$_POST['electorMadre'],

        "trabaja"=>$trabaja,
        "horas_trabajo"=>$horas,
        "tel_casa"=>$_POST['telefono2'],
        "tel_trabajo"=>$_POST['telefono3'],
        "cel"=>$_POST['celular2'],
        "grado_estudio"=>isset($_POST['grupo1'])?$_POST['grupo1']:15);
        $this->MAct2->padres($arr_padre,$alumno);

    }else{
      $this->MAct2->delPadre($arr_padre,$alumno);
    }

    if ($_POST['nombre4']!=null && $_POST['paterno3']!=null) {
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
        "entidad"=>isset($_POST['entidad4'])?$_POST['entidad4']:15,
        "pais"=>$_POST['pais3'],
        "curp"=>$_POST['curp3'],
        "edad"=>$_POST['edadPadre'],
        "civil"=>$_POST['civilPadre'],
        "correo"=>$_POST['correoPadre'],
        "facebook"=>$_POST['facePadre'],
        "twitter"=>$_POST['TwitterPadre'],

        "nacionalidad"=>$_POST['nacionalidadPadre'],
        "ocupacion"=>$_POST['ocupacionPadre'],
        "elector"=>$_POST['electorPadre'],

        "trabaja"=>$trabaja,
        "tel_casa"=>$_POST['telefono4'],
        "horas_trabajo"=>$horas,
        "tel_trabajo"=>$_POST['telefono5'],
        "cel"=>$_POST['celular3'],
        "grado_estudio"=>isset($_POST['grupo2'])?$_POST['grupo2']:15);
        $this->MAct2->padres($arr_padre,$alumno);

    }else{
      $this->MAct2->delPadre($arr_padre,$alumno);
    }


    if ($_POST['calle1Tutor']!=null) {
      $arDomTutor=array(
        "alumno"=>$alumno,
        "calle"=>$_POST['calle1Tutor'],
        "externo"=>$_POST['exterior1Tutor'],
        "interno"=>$_POST['interior1Tutor'],
        "colonia"=>$_POST['colonia1Tutor'],
        "entre1"=>$_POST['entrec1Tutor'],
        "entre2"=>$_POST['entrec2Tutor'],
        "referencia"=>$_POST['referenciaTutor']
      );
      $this->MAct2->insertDomTutor($arDomTutor,$alumno);
    }
    else{
      $this->MAct2->delDomTutor($alumno);
    }


        $personas=isset($_POST['ingresos1'])?$_POST['ingresos1']:0;
        $depende=isset($_POST['economico1'])?$_POST['economico1']:0;
        $otro=isset($_POST['especificar3'])?$_POST['especificar3']:0;

        if ($depende==8) {
          $add=array("parentezco"=>$otro);
          $idIngreso=$this->MAct2->nuevo_parentezco($add);
          $depende=$idIngreso->id_parentezco;
        }
        $ingresos= array(
          "alumno" =>$alumno,
          "cantidad_personas"=>$personas,
          "dependencia"=>$depende);
        $this->MAct2->ingresos($ingresos,$alumno);

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

      $familiares = $this->MAct2->insertFamiliar($arr_family);
      $tabla='
      <table class="responsive-table" >
        <thead class="orange">
          <tr>
            <th>Apellidos</th>
            <th>Nombre</th>
            <th>Sexo</th>
            <th>Edad</th>
            <th>Ocupación</th>
            <th>Parentesco</th>
            <th>Grado máx de estudios</th>
          </tr>
        </thead>

        <tbody>

      ';
      foreach ($familiares->result() as $row) {
        $tabla.='
        <tr>
          <td>'.$row->apellidos.'</td>
          <td>'.$row->nombre.'</td>
          <td>'.$row->sexo.'</td>
          <td>'.$row->edad.'</td>
          <td>'.$row->ocupacion.'</td>
          <td>'.$row->parentezco.'</td>
          <td>'.$row->grado_estudio.'</td>
        </tr>
        ';
      }
      $tabla.='
        </tbody>
      </table>';

      print $tabla;

  }

  public function ajaxFamiliar2($alumno){

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

      $familiares = $this->MAct2->insertFamiliar($arr_family);
      $tabla='
      <table class="responsive-table" >
        <thead class="orange">
          <tr>
            <th>Apellidos</th>
            <th>Nombre</th>
            <th>Sexo</th>
            <th>Edad</th>
            <th>Ocupación</th>
            <th>Parentesco</th>
            <th>Grado máx de estudios</th>
          </tr>
        </thead>

        <tbody>

      ';
      foreach ($familiares->result() as $row) {
        $tabla.='
        <tr>
          <td>'.$row->apellidos.'</td>
          <td>'.$row->nombre.'</td>
          <td>'.$row->sexo.'</td>
          <td>'.$row->edad.'</td>
          <td>'.$row->ocupacion.'</td>
          <td>'.$row->parentezco.'</td>
          <td>'.$row->grado_estudio.'</td>
        </tr>
        ';
      }
      $tabla.='
        </tbody>
      </table>';

      print $tabla;

  }

  public function ajaxIngresos2($alumno){
    $arr_family= array(
      'personas_ingreso'=>$_POST['persona'],
      'ingreso'=>$_POST['ingreso'],
      'porcentaje_destinado'=>$_POST['porcentaje'],
      'alumno'=>$alumno);
    $ingresos=$this->MAct2->insertIngreso($arr_family);

    $tabla='
    <table class="responsive-table" >
      <thead class="orange">
        <tr>
          <th>Persona con ingresos económicos</th>
          <th>Ingreso mensual en pesos</th>
          <th>Porcentaje destinado al gasto familiar</th>
        </tr>
      </thead>
      <tbody>

    ';
    foreach ($ingresos->result() as $row) {
      $tabla.='
      <tr>
        <td>'.$row->personas_ingreso.'</td>
        <td>'.$row->opcion.'</td>
        <td>'.$row->porcentaje_destinado.' %</td>
      </tr>
      ';
    }
    $tabla.='
      </tbody>
    </table>';

    print $tabla;
  }

  public function ajaxIngresos(){
    $alumno=$this->session->userdata('id');
        $arr_family= array(
          'personas_ingreso'=>$_POST['persona'],
          'ingreso'=>$_POST['ingreso'],
          'porcentaje_destinado'=>$_POST['porcentaje'],
          'alumno'=>$alumno);
        $ingresos=$this->MAct2->insertIngreso($arr_family);

        $tabla='
        <table class="responsive-table" >
          <thead class="orange">
            <tr>
              <th>Persona con ingresos económicos</th>
              <th>Ingreso mensual en pesos</th>
              <th>Porcentaje destinado al gasto familiar</th>
            </tr>
          </thead>
          <tbody>

        ';
        foreach ($ingresos->result() as $row) {
          $tabla.='
          <tr>
            <td>'.$row->personas_ingreso.'</td>
            <td>'.$row->opcion.'</td>
            <td>'.$row->porcentaje_destinado.'</td>
          </tr>
          ';
        }
        $tabla.='
          </tbody>
        </table>';

        print $tabla;

  }




}
