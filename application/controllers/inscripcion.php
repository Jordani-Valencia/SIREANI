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
        $pdf->Cell(14,5,"Nombre:",'',0,'L');
        $pdf->SetXY($x+14,$y);
        $pdf->Cell(154,5,utf8_decode(""),'B',0,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(173,5,utf8_decode("apellido paterno                                         apellido materno                                          nombre(s)"),'',0,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(32,5,utf8_decode("Fecha de nacimiento: "),'',0,'L');
        $pdf->SetXY($x+32,$y);
        $pdf->Cell(12,5,utf8_decode(""),'LRTB',0,'C');
        $pdf->SetXY($x+44,$y);
        $pdf->Cell(12,5,utf8_decode(""),'LRTB',0,'C');
        $pdf->SetXY($x+56,$y);
        $pdf->Cell(20,5,utf8_decode(""),'LRTB',0,'C');
        $pdf->SetXY($x+77,$y);
        $pdf->Cell(30,5,utf8_decode("Lugar de nacimiento:"),'',0,'L');
        $pdf->SetXY($x+108,$y);
        $pdf->Cell(65,5,utf8_decode(""),'B',0,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(173,3,utf8_decode("                                        Día       Mes            Año"),'',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(28,5,utf8_decode("CURP (18 dígitos):"),'',0,'L');

        for ($i=0; $i < 18; $i++) {
          $pdf->Cell(6,5,$i,'TRLB',0,'L');
        }

        $pdf->SetXY($x,$y+=6);
        $pdf->Cell(10,5,utf8_decode("Sexo:"),'',0,'L');
        $pdf->SetXY($x+10,$y);
        $pdf->Cell(5,5,utf8_decode(""),'BTLR',0,'L');
        $pdf->SetXY($x+15,$y);
        $pdf->Cell(17,3,utf8_decode("Masculino"),'',0,'L');
        $pdf->SetXY($x+32,$y);
        $pdf->Cell(5,5,utf8_decode(""),'BTLR',0,'L');
        $pdf->SetXY($x+37,$y);
        $pdf->Cell(17,3,utf8_decode("Femenino"),'',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(35,5,utf8_decode("Padecimiento o alergia:"),'',0,'L');
        $pdf->SetXY($x+35,$y);
        $pdf->Cell(138,5,utf8_decode(""),'B',0,'L');

        $pdf->SetFont('Arial','B',10);
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(40,5,utf8_decode("Dirección del aspirante:"),'',0,'L');
        $pdf->Rect(20,100,175,15);

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(10,5,"Calle:",'',0,'L');
        $pdf->SetXY($x+10,$y);
        $pdf->Cell(100,5,utf8_decode(""),'B',0,'L');
        $pdf->SetXY($x+110,$y);
        $pdf->Cell(13,5,utf8_decode("Número:"),'',0,'L');
        $pdf->SetXY($x+123,$y);
        $pdf->Cell(50,5,utf8_decode(""),'B',0,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(13,5,"Colonia:",'',0,'L');
        $pdf->SetXY($x+13,$y);
        $pdf->Cell(50,5,utf8_decode(""),'B',0,'C');
        $pdf->SetXY($x+63,$y);
        $pdf->Cell(16,5,"Localidad:",'',0,'L');
        $pdf->SetXY($x+79,$y);
        $pdf->Cell(60,5,utf8_decode(""),'B',0,'L');
        $pdf->SetXY($x+139,$y);
        $pdf->Cell(8,5,utf8_decode("C.P.:"),'',0,'L');
        $pdf->SetXY($x+147,$y);
        $pdf->Cell(26,5,utf8_decode(""),'B',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(33,5,utf8_decode("Municipio/Delegación:"),'',0,'L');
        $pdf->SetXY($x+33,$y);
        $pdf->Cell(60,5,utf8_decode(""),'B',0,'L');
        $pdf->SetXY($x+93,$y);
        $pdf->Cell(13,5,utf8_decode("Estado:"),'',0,'L');
        $pdf->SetXY($x+106,$y);
        $pdf->Cell(67,5,utf8_decode(""),'B',0,'C');


        $pdf->SetFont('Arial','B',10);
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(40,5,utf8_decode("Datos de contacto:"),'',0,'L');
        $pdf->Rect(20,120,175,15);

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x+5,$y+=6);
        $pdf->Cell(50,5,"",'BLRT',0,'L');
        $pdf->SetXY($x+65,$y);
        $pdf->Cell(50,5,"",'BLRT',0,'L');
        $pdf->SetXY($x+120,$y);
        $pdf->Cell(50,5,"",'B',0,'L');
        $pdf->SetXY($x+5,$y+=5);
        $pdf->Cell(50,4,utf8_decode("Teléfono Fijo (Lada-Número)"),'',0,'C');
        $pdf->SetXY($x+65,$y);
        $pdf->Cell(50,4,utf8_decode("Teléfono Celular (Lada-Número)"),'',0,'C');
        $pdf->SetXY($x+120,$y);
        $pdf->Cell(50,4,utf8_decode("Correo electrónico"),'',0,'C');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(60,5,"En caso de emergencia comunicarse con:",'',0,'L');
        $pdf->SetXY($x+60,$y);
        $pdf->Cell(60,5,utf8_decode(""),'B',0,'L');
        $pdf->SetXY($x+120,$y);
        $pdf->Cell(16,5,utf8_decode("al teléfono"),'',0,'L');
        $pdf->SetXY($x+136,$y);
        $pdf->Cell(36,5,"",'B',0,'L');

        $pdf->SetFont('Arial','B',10);
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(42,5,utf8_decode("Datos del padre o tutor:"),'',0,'L');
        $pdf->Rect(20,140,175,20);

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(14,5,"Nombre:",'',0,'L');
        $pdf->SetXY($x+14,$y);
        $pdf->Cell(154,5,utf8_decode(""),'B',0,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(173,5,utf8_decode("apellido paterno                                         apellido materno                                          nombre(s)"),'',0,'C');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(28,5,utf8_decode("CURP (18 dígitos):"),'',0,'L');

        for ($i=0; $i < 18; $i++) {
          $pdf->Cell(6,5,$i,'TRLB',0,'L');
        }

        $pdf->SetXY($x,$y+=6);
        $pdf->Cell(37,5,utf8_decode("Último grado de estudios:"),'',0,'L');
        $pdf->SetXY($x+37,$y);
        $pdf->Cell(5,5,utf8_decode(""),'BLRT',0,'C');
        $pdf->SetXY($x+42,$y);
        $pdf->Cell(13,5,utf8_decode("Primaria"),'',0,'L');
        $pdf->SetXY($x+57,$y);
        $pdf->Cell(5,5,utf8_decode(""),'BLRT',0,'C');
        $pdf->SetXY($x+62,$y);
        $pdf->Cell(17,5,utf8_decode("Secundaria"),'',0,'L');
        $pdf->SetXY($x+81,$y);
        $pdf->Cell(5,5,utf8_decode(""),'BLRT',0,'C');
        $pdf->SetXY($x+86,$y);
        $pdf->Cell(18,5,utf8_decode("Bachillerato"),'',0,'L');
        $pdf->SetXY($x+106,$y);
        $pdf->Cell(5,5,utf8_decode(""),'BLRT',0,'C');
        $pdf->SetXY($x+111,$y);
        $pdf->Cell(12,5,utf8_decode("Técnica"),'',0,'L');
        $pdf->SetXY($x+125,$y);
        $pdf->Cell(5,5,utf8_decode(""),'BLRT',0,'C');
        $pdf->SetXY($x+130,$y);
        $pdf->Cell(18,5,utf8_decode("Profesional"),'',0,'L');
        $pdf->SetXY($x+148,$y);
        $pdf->Cell(5,5,utf8_decode(""),'BLRT',0,'C');
        $pdf->SetXY($x+153,$y);
        $pdf->Cell(18,5,utf8_decode("Maestría"),'',0,'L');

        $pdf->SetFont('Arial','B',10);
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(82,5,utf8_decode("Datos de la escuela secundaria de procedencia:"),'',0,'L');
        $pdf->Rect(20,165,175,15);
    $pdf->Output();



  }

}
