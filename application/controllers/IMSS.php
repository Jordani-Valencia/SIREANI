<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IMSS extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('MGetInfo');
		$this->load->library('session');
    $this->load->library('FPDF/fpdf');
	}


	public function index(){
    $alumno=$this->session->userdata('id');
    $pdf=new fpdf('P','mm','letter');
    //P-L,pt puntos mm milimetros, cm centimetnros, tamaño
    $pdf->AddPage();
      //HOJA 4
      $x=20;$y=15;
      $ancho=175;
      // Ejercico y deportes
      $pdf->SetFont('Arial','B',10);
        $pdf->Cell(195,10,utf8_decode("SOLICITUD PARA LA INCORPORACIÓN DE ESTUDIANTES AL"),0,1,'C');
        $pdf->Cell(195,5,utf8_decode("SEGURO FACULTATIVO DEL REGIMEN DEL SEGURO SOCIAL"),0,0,'C');

        $pdf->Image('https://i2.wp.com/sieforeretiro.com.mx/wp-content/uploads/2017/11/LOGO-IMSS.jpg',12,40,30);
        $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x+95,$y+20);
        $pdf->Cell(80,5,utf8_decode("No. DE CUENTA: "),'',0,'L');
        $pdf->SetXY($x+18,$y+25);
        $pdf->Cell(60,5,utf8_decode("DATOS DEL PLANTEL EDUCATIVO"),'TLRB',0,'C');
        $pdf->SetXY($x+95,$y+25);
        $pdf->Cell(80,5,utf8_decode("PARA USO EXCLUSIVO DEL I.M.S.S."),'TLRB',0,'C');
        $pdf->SetXY($x+18,$y+=30);
        $pdf->Cell(60,5,utf8_decode("NOMBRE: CECyTEM"),'LR',0,'L');
        $pdf->SetXY($x+95,$y);
        $pdf->Cell(80,5,utf8_decode("REGISTRO IMSS DEL PLANTEL"),'LR',0,'L');
        $pdf->SetXY($x+18,$y+=5);
        $pdf->Cell(60,5,utf8_decode("CLAVE:"),'LR',0,'L');
        $pdf->SetXY($x+95,$y);
        $pdf->Cell(80,5,utf8_decode("No. AFILIACIÓN ESTUDIANTE: "),'LR',0,'L');
        $pdf->SetXY($x+18,$y+=5);
        $pdf->Cell(60,5,utf8_decode("NIVEL EDUCATIVO:"),'LRB',0,'L');
        $pdf->SetXY($x+95,$y);
        $pdf->Cell(80,5,utf8_decode("UNIDAD DE MEDICINA FAMILIAR:"),'LRB',0,'L');

        $pdf->SetFont('Arial','B','10');
        $pdf->SetXY($x,$y+=10);
        $pdf->Cell($ancho,5,utf8_decode("DATOS DEL ESTUDIANTE"),'TLBR',0,'C');

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(20,5,utf8_decode("A) NOMBRE"),'L',0,'L');
        $pdf->Cell(155,5,utf8_decode(""),'BR',0,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode("A. PATERNO                               A. MATERNO                              NOMBRE (S)"),'LR',0,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode("B) SEXO                               1) MASCULINO                               2) FEMENINO                                 (  )"),'LR',0,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode("C) FECHA DE NACIMIENTO                                                                                                        (    )       (    )       (    )"),'LR',0,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode("                                                                                                                                                       DÍA       MES      AÑO"),'LR',0,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(42,5,utf8_decode("D) LUGAR DE NACIMIENTO"),'L',0,'L');
        $pdf->SetXY($x+42,$y);
        $pdf->Cell(113,5,utf8_decode(""),'B',0,'C');
        $pdf->SetXY($x+155,$y);
        $pdf->Cell(20,5,utf8_decode(""),'R',0,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(20,5,utf8_decode("E) DOMICILIO"),'L',0,'L');
        $pdf->SetXY($x+25,$y);
        $pdf->Cell(150,5,utf8_decode(""),'BR',0,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode("CALLE                            NÚMERO                          LOCALIDAD              CÓDIGO POSTAL"),'LR',1,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(50,5,utf8_decode(""),'L',0,'C');
        $pdf->SetXY($x+50,$y);
        $pdf->Cell(50,5,utf8_decode(""),'B',0,'C');
        $pdf->SetXY($x+125,$y);
        $pdf->Cell(50,5,utf8_decode("Estado de México"),'BR',0,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode("                                                              MUNICIPIO                                                            ENTIDAD FEDERATIVA"),'LR',1,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(45,5,utf8_decode("F) NOMBRE DE LOS PADRES"),'L',0,'L');
        $pdf->SetXY($x+65,$y);
        $pdf->Cell(110,5,utf8_decode("PADRE:"),'R',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(68,5,utf8_decode(""),'L',0,'L');
        $pdf->SetXY($x+65,$y);
        $pdf->Cell(110,5,utf8_decode("MADRE:"),'R',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode("G) ¿ADEMÁS DE ESTUDIAR TRABAJA?                              1) SÍ                              2) NO                    (    )"),'LR',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode("H) ¿DE QUIÉN DEPENDE ECONÓMICAMENTE?        1) PADRES           2) CONYUGE      3) OTROS                    (    )"),'LR',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode("I) ¿EN QUÉ TRABAJA LA PERSONA DE LA QUE DEPENDE ECONÓMICAMENTE?"),'LR',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(30,5,utf8_decode(""),'L',0,'L');
        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($x+30,$y);
        $pdf->Cell(28,5,utf8_decode("1) SERVIDOR PÚBLICO"),'',0,'L');
        $pdf->SetXY($x+91,$y);
        $pdf->Cell(84,5,utf8_decode("5) MARINO O MILITAR                                                                         (    )"),'R',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(30,5,utf8_decode(""),'L',0,'L');
        $pdf->SetXY($x+30,$y);
        $pdf->Cell(51,5,utf8_decode("2) EMPLEADO EN EMPRESA PARTICULAR"),'',0,'L');
        $pdf->SetXY($x+91,$y);
        $pdf->Cell(84,5,utf8_decode("6) AGRICULTOR, GANADERO, CAMPESINO, PESCADOR"),'R',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(30,5,utf8_decode(""),'L',0,'L');
        $pdf->SetXY($x+30,$y);
        $pdf->Cell(51,5,utf8_decode("3) PROFESIÓN U OFICIO POR SU CUENTA"),'',0,'L');
        $pdf->SetXY($x+91,$y);
        $pdf->Cell(84,5,utf8_decode("7) OBRERO"),'R',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(30,5,utf8_decode(""),'L',0,'L');
        $pdf->SetXY($x+30,$y);
        $pdf->Cell(40,5,utf8_decode("4) COMERCIANTE O INDUSTRIAL"),'',0,'L');
        $pdf->SetXY($x+91,$y);
        $pdf->Cell(14,5,utf8_decode("8) OTROS"),'',0,'L');
        $pdf->SetXY($x+105,$y);
        $pdf->Cell(50,5,utf8_decode(""),'B',0,'L');
        $pdf->SetXY($x+155,$y);
        $pdf->Cell(20,5,utf8_decode(""),'R',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho-55,5,utf8_decode(""),'L',0,'L');
        $pdf->SetXY($x+120,$y);
        $pdf->Cell(55,5,utf8_decode("ESPECIFIQUE"),'R',0,'L');
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode("J) ¿SE ENCUENTRA PROTEGIDO, YA SEA COMO TRABAJADOR O COMO BENEFICIARIO DE SUS PADRES O DE SU CONYUGE"),'LR',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode("EN ALGUNA INSTITUCIÓN DE SEGURIDAD?"),'LR',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(50,5,utf8_decode(""),'L',0,'L');
        $pdf->SetXY($x+50,$y);
        $pdf->Cell(125,5,utf8_decode("1) SI                              2) NO                              (    )"),'R',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode("K) ¿QUÉ INSTITUCIÓN LE DA SERVICIO MÉDICO?"),'LR',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(30,5,utf8_decode(""),'L',0,'L');
        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($x+30,$y);
        $pdf->Cell(28,5,utf8_decode("1) SEGURO SOCIAL"),'',0,'L');
        $pdf->SetXY($x+91,$y);
        $pdf->Cell(84,5,utf8_decode("5) PEMEX                                                                         (    )"),'R',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(30,5,utf8_decode(""),'L',0,'L');
        $pdf->SetXY($x+30,$y);
        $pdf->Cell(51,5,utf8_decode("2) I.S.S.S.T.E"),'',0,'L');
        $pdf->SetXY($x+91,$y);
        $pdf->Cell(84,5,utf8_decode("6) INSTITUCIÓN NACIONAL DE CRÉDITO (BANCOS)"),'R',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(30,5,utf8_decode(""),'L',0,'L');
        $pdf->SetXY($x+30,$y);
        $pdf->Cell(51,5,utf8_decode("3) SECRETARIA DE MARINA"),'',0,'L');
        $pdf->SetXY($x+91,$y);
        $pdf->Cell(84,5,utf8_decode("7) OTRA"),'',0,'L');
        $pdf->SetXY($x+105,$y);
        $pdf->Cell(50,5,utf8_decode(""),'B',0,'L');
        $pdf->SetXY($x+155,$y);
        $pdf->Cell(20,5,utf8_decode(""),'R',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho-55,5,utf8_decode(""),'L',0,'L');
        $pdf->SetXY($x+120,$y);
        $pdf->Cell(55,5,utf8_decode("ESPECIFIQUE"),'R',0,'L');
        $pdf->SetXY($x,$y);
        $pdf->Cell(30,5,utf8_decode(""),'L',0,'L');
        $pdf->SetXY($x+30,$y);
        $pdf->Cell(40,5,utf8_decode("4) SECRETARIA DE LA DEFENSA NACIONAL"),'',0,'L');
        $pdf->SetXY($x+91,$y);
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode("BAJO PROTESTA DE DECIR VERDAD DECLARO QUE LOS DATOS AQUÍ ASENTADOS SON CIERTOS"),'LR',0,'L');
        $pdf->SetXY($x+140,$y);
        $pdf->Cell(35,5,utf8_decode(""),'B',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode(""),'LR',0,'L');
        $pdf->SetXY($x+140,$y);
        $pdf->Cell(35,5,utf8_decode("FIRMA DEL ESTUDIANTE"),'',0,'L');

        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(80,5,utf8_decode("PLANTEL EDUCATIVO"),'TLRB',0,'C');
        $pdf->SetXY($x+95,$y);
        $pdf->Cell(80,5,utf8_decode("I.M.S.S. DELEGACIONAL"),'TLRB',0,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(80,5,utf8_decode("SE CERTIFICA QUE EL SOLICITANTE"),'LR',0,'C');
        $pdf->SetXY($x+95,$y);
        $pdf->Cell(80,5,utf8_decode(""),'LR',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(80,5,utf8_decode("ES ESTUDIANTE DE ESTE PLANTEL"),'LR',0,'C');
        $pdf->SetXY($x+95,$y);
        $pdf->Cell(80,5,utf8_decode(""),'LR',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(80,5,utf8_decode("SELLO"),'LR',0,'L');
        $pdf->SetXY($x+95,$y);
        $pdf->Cell(80,5,utf8_decode("SELLO"),'LR',0,'L');
        
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(80,5,utf8_decode(""),'LR',0,'L');
        $pdf->SetXY($x+20,$y);
        $pdf->Cell(45,5,utf8_decode(""),'B',0,'L');
        $pdf->SetXY($x+95,$y);
        $pdf->Cell(80,5,utf8_decode(""),'LR',0,'L');
        $pdf->SetXY($x+115,$y);
        $pdf->Cell(45,5,utf8_decode(""),'B',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(80,5,utf8_decode(""),'LRB',0,'L');
        $pdf->SetXY($x+12,$y);
        $pdf->Cell(60,5,utf8_decode("NOMBRE Y FIRMA DEL RESPONSABLE"),'',0,'C');
        $pdf->SetXY($x+95,$y);
        $pdf->Cell(80,5,utf8_decode(""),'LRB',0,'L');
        $pdf->SetXY($x+107,$y);
        $pdf->Cell(60,5,utf8_decode("NOMBRE Y FIRMA DEL RESPONSABLE"),'',0,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,"",'BLR',0,'C');

    $pdf->Output();



  }

}
