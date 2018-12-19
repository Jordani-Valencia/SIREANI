<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inscripcion extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->library('session');
    $this->load->library('FPDF/fpdf');


	}


	public function index(){
    $alumno=$this->session->userdata('id');
    $pdf=new fpdf('P','mm','letter');
    //P-L,pt puntos mm milimetros, cm centimetnros, tamaño
    $pdf->AddPage();
      //HOJA 1
      $pdf->SetFont('Arial','B',10);
        $pdf->Cell(195,10,utf8_decode("Solicitud de Inscripción"),0,0,'C');
        //$pdf->Image('https://es.wikipedia.org/wiki/Estado_de_M%C3%A9xico#/media/File:Coat_of_arms_of_Mexico_State.svg',12,10,30);
        $pdf->Image('https://upload.wikimedia.org/wikipedia/commons/e/ec/Cecytem-logo.jpg',175,5,20);
        $pdf->SetFont('Arial','B',10);
        $pdf->SetXY(20,25);
        $pdf->Cell(150,4,utf8_decode("Instrucciones"),'',0,'L');
        $pdf->SetFont('Arial','',9);
        $pdf->SetXY(20,29);
        $pdf->Cell(150,4,chr(127).utf8_decode(" Registra cuidadosamente los datos que se solicitan, estos serán utilizados para "),'R',0,'L');
        $pdf->SetXY(20,33);
        $pdf->Cell(150,4,utf8_decode("conformar tu expediente en la base de datos del sistema de control escolar"),'R',0,'L');
        $pdf->SetXY(20,37);
        $pdf->Cell(150,4,chr(127).utf8_decode(" Escribir con letras mayúsculas que sean legibles y con tinta negra"),'R',0,'L');
        $pdf->SetFont('Arial','B',10);
        $pdf->SetXY(20,45);
        $pdf->Cell(15,5,utf8_decode("Carrera:"),'',0,'L');
        $pdf->SetFont('Arial','',10);
        $pdf->SetXY(35,45);
        $pdf->Cell(75,5,utf8_decode("Programación"),'B',0,'L');
        $pdf->SetXY(110,45);
        $pdf->Cell(60,5,utf8_decode("Fecha:"),'',0,'L');
        $pdf->SetXY(125,45);
        $pdf->Cell(40,5,utf8_decode("02/Agosto/2018"),'B',0,'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->SetXY(20,55);
        $pdf->Cell(15,5,utf8_decode("Datos personales del aspirante:"),'',0,'L');
        $pdf->SetXY(170,25);
        $pdf->Cell(25,35,"FOTO",1,1,'C');//25+35 = 60

        $pdf->Rect(20,60,175,35);

      $x=20;$y=60;
      $ancho=175;
        $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x,$y);
        $pdf->Cell(20,5,"Nombre:",'',0,'L');




    $pdf->Output();



  }

}
