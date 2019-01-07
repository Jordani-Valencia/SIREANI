<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('MLogin');
		$this->load->library('session');
	}
	public function regresar(){
		$this->load->view('principal');
	}

	public function index()
	{
		$data= array(
      'username'=> $this->input->post('username'),
      'pass' =>  crypt($this->input->post('pass'),'hola')
    );
    $res = $this->MLogin->seleccionUsuario($data);
		if ($res) {
			$data=[
				"id"=>$res->idLogin,
				"usuario"=>$res->usuario,
				"login"=>TRUE
			];

			 $this->session->set_userdata($data);

			echo "no error";
			}else{
			echo "error";
		}
	}

	public function prinAdmin(){
		//$alumno=$this->session->userdata('id');
		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/principalAdmin');
		$this->load->view('pantallas/dataTable');

	}

	public function adminAlumnos($id){
		$this->load->model('MGetInfo');

		$dGenerales['alumno']=$id;
		//hoja1
		$dGenerales['generales']=$this->MGetInfo->get_gral_sec($id);
		$dGenerales['beca']=$this->MGetInfo->get_beca($id);
		$dGenerales['trabajo']=$this->MGetInfo->get_trabajo($id);
		$dGenerales['domAl']=$this->MGetInfo->get_domicilio2($id);
		//hoja2
		$dGenerales['tutor']=$this->MGetInfo->get_tutor($id);
		$dGenerales['padre']=$this->MGetInfo->get_padres($id);
		$dGenerales['madre']=$this->MGetInfo->get_madre($id);
		$dGenerales['domi2']=$this->MGetInfo->get_domicilioTutor($id);
		$dGenerales['ingresos']=$this->MGetInfo->get_ingr_familiares($id);
		$dGenerales['familiares']=$this->MGetInfo->get_familiares($id);
		$dGenerales['mensuales']=$this->MGetInfo->get_ingr_mensuales($id);
		//hoja3
		$dGenerales['socio']=$this->MGetInfo->get_socioeconomico($id)->row();
		$dGenerales['salud']=$this->MGetInfo->get_salud1($id)->row();
		$dGenerales['problemaS']=$this->MGetInfo->get_problema_salud($dGenerales['salud']->id_salud);
		$dGenerales['servicio']=$this->MGetInfo->get_s_salud($dGenerales['salud']->id_salud);
		$dGenerales['tratamiento']=$this->MGetInfo->get_tratamiento($dGenerales['salud']->id_salud);
		$dGenerales['enfermedad']=$this->MGetInfo->get_enfermedad($id);
		$dGenerales['discapacidad']=$this->MGetInfo->get_discapacidad($dGenerales['salud']->id_salud);
		$dGenerales['psicologico']=$this->MGetInfo->get_psicologico($dGenerales['salud']->id_salud);
		//hoja4
		$dGenerales['ejercicio']=$this->MGetInfo->get_ejercicio($id)->row();
		$dGenerales['practDep']=$this->MGetInfo->get_practica_deporte($dGenerales['ejercicio']->id_ejer_dep);
		if ($dGenerales['practDep']->num_rows()==0) {
			$dGenerales['practDep']=null;
		}
		$dGenerales['habito']=$this->MGetInfo->get_habito($id);
		$dGenerales['recreacion']=$this->MGetInfo->get_recreacion($id);
		$dGenerales['habitos']=$this->MGetInfo->get_habito($id)->row();
		$dGenerales['gustos']=$this->MGetInfo->get_gustos($id)->row();
		$dGenerales['participacion']=$this->MGetInfo->get_participacion($id);
		if ($dGenerales['participacion']->num_rows()>0) {
			$dGenerales['participacion']=$dGenerales['participacion']->row();
			$dGenerales['organizaciones']=$this->MGetInfo->get_organizaciones($dGenerales['participacion']->id_participacion);
		}else{
			$dGenerales['participacion']=null;
			$dGenerales['organizaciones']=null;
		}
		$dGenerales['internet']=$this->MGetInfo->get_internet($id)->row();
		//hoja5
		$dGenerales['movil']=$this->MGetInfo->get_movil($id)->row();
		$dGenerales['sociales']=$this->MGetInfo->get_rel_sociales($id)->row();
		$dGenerales['hermanos']=$this->MGetInfo->get_rel_hermanos($dGenerales['sociales']->id_relacion);
		$dGenerales['actividades']=$this->MGetInfo->get_actividades($dGenerales['sociales']->id_relacion);
		$dGenerales['negocio']=$this->MGetInfo->get_negocio_familiar($dGenerales['sociales']->id_relacion);
		if ($dGenerales['negocio']->num_rows()==0) {
			$dGenerales['negocio']=null;
		}else{
			$dGenerales['negocio']=$dGenerales['negocio']->row();
		}
		//hoja6
		$dGenerales['proyecto']=$this->MGetInfo->get_proy_vida($id)->row();
		$dGenerales['opciones']=$this->MGetInfo->get_opciones_proyecto($dGenerales['proyecto']->id_proy_vida);
		$dGenerales['perfil']=$this->MGetInfo->get_perfil($id)->row();

		$this->load->view('pantallas/encabezado');
		$this->load->view('pantallas/navbar');

		$this->load->view('pantallas/actualizarAdmin',$dGenerales);

		$this->load->view('pantallas/footer');



	// foreach ($res->result() as $r) {
	// $data[]=array($r->nombre_al);
	// }
	// echo "<pre>";
	// print_r( $data);
	// echo "</pre>";

		/*$res = $this->MadminAlumnos->nombre($id);
	foreach ($res->result() as $r) {
	$data[]=array($r->nombre_al);
	}
	echo "<pre>";
	print_r( $data);
	echo "</pre>";*/

	}

	public function cerrarSesion(){
		$this->load->view('pantallas/principal');
		//$this->session->sess_destroy();
	}
}
