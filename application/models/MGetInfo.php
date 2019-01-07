<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MGetInfo extends CI_Model
{
  function __construct()
  {
      parent::__construct();
      $this->load->database();
  }

  //generarExcel
  function listado(){
    return $this->db->get("v_generales_secundaria");
  }
//SELECT'S PRIMERA HOJA
  function  get_gral_sec($alumno){
      $this->db->where("id_alumno",$alumno);
      return $this->db->get("v_generales_secundaria")->row();
  }//////////////////////////////
  function get_beca($alumno){
    $this->db->where("id_alumno_ab",$alumno);
    return $this->db->get("alumno_beca");
  }//////////////////////////////
  function get_trabajo($alumno){
    $this->db->where("alumno_at",$alumno);
    return $this->db->get("alumno_trabajo");
  }//////////////////////////////
  function get_domicilio($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("v_domicilio")->row();
  }///////////////////////////////
  function get_domicilio2($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("v_domicilio2")->row();
  }///////////////////////////////
  function get_domicilio3($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("v_domicilio2");
  }///////////////////////////////
  function get_familiares($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("v_familiares");
  }///////////////////////////////

//SELECT'S SEGUNDA HOJA
  function get_padres($alumno){
    $this->db->where("alumno",$alumno);
    $this->db->where("parentezco",1);
    return $this->db->get("v_padres");
  }
  function get_madre($alumno){
    $this->db->where("alumno",$alumno);
    $this->db->where("parentezco",2);
    return $this->db->get("v_padres");
  }
  // //////////////
  function get_tutor($alumno){
    $this->db->where("alumno",$alumno);
    $this->db->where("parentezco",9);
    return $this->db->get("v_padres");
  }

  function get_ingr_familiares($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("v_ingresos_familiares");
  }
  function get_ingr_mensuales($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("v_ingresos_mensuales");
  }
  function get_domicilioTutor($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("domicilio_tutor");
  }

//SELECT'S TERCER HOJA
  function get_socioeconomico($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("ambiente_socioeconomico");
  }
  function get_salud1($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("salud");
  }
  function get_problema_salud($salud){
    $this->db->where("salud",$salud);
    return $this->db->get("problema_salud");
  }
  function get_s_salud($salud){
    $this->db->where("salud",$salud);
    return $this->db->get("v_servicio_salud");
  }
  function get_tratamiento($salud){
    $this->db->where("salud",$salud);
    return $this->db->get("tratamiento_medico");
  }

  function get_enfermedad($alumno){
    $this->db->where("id_alumno",$alumno);
    return $this->db->get("v_enfermedad");
  }
  function get_discapacidad($salud){
    $this->db->where("salud",$salud);
    return $this->db->get("didscapacidades_fisicas");
  }
  function get_psicologico($salud){
    $this->db->where("salud",$salud);
    return $this->db->get("tratamiento_psicologico");
  }

//SELECT'S CUARTA HOJA
  function get_ejercicio($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("ejercicio_deportes");
  }
  function get_practica_deporte($deporte){
    $this->db->where("id_ejer_dep",$deporte);
    return $this->db->get("deportes_practica");
  }
  function get_habito($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("habitos_consumos");
  }
  function get_recreacion($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("v_recreacion");
  }
  function get_gustos($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("gustos_intereses");
  }
  function get_participacion($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("participacion_social");
  }
  function get_organizaciones($participacion){
    $this->db->where("id_participacion",$participacion);
    return $this->db->get("v_organizaciones");
  }
  function get_internet($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("internet");
  }

//SELECT'S QUINTA HOJA
  function get_movil($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("tel_movil");
  }
  function get_rel_sociales($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("relaciones_sociales");
  }
  function get_rel_hermanos($relacion){
    $this->db->where("relacion",$relacion);
    return $this->db->get("relacion_hermanos");
  }
  function get_consumo($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("v_consumo_familiar");
  }
  function get_actividades($relacion){
    $this->db->where("relacion",$relacion);
    return $this->db->get("actividades_hogar");
  }
  function get_negocio_familiar($relacion){
    $this->db->where("relacion",$relacion);
    return $this->db->get("negocios_familiares");
  }

//SELECT'S SEXTA HOJA
  function get_proy_vida($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("proy_vida");
  }
  function get_opciones_proyecto($proyecto){
    $this->db->where("id_proy_pv",$proyecto);
    return $this->db->get("v_proyecto_opcion");
  }
  function get_perfil($alumno){
    $this->db->where("alumno",$alumno);
    return $this->db->get("perfil_personal");
  }
//total 32-31 consultas

}
