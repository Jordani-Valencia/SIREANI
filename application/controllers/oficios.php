<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class oficios extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('MGetInfo');
		$this->load->library('session');
    $this->load->library('FPDF/fpdf');
    setlocale(LC_TIME,"es_MX");
	}


	public function index(){
    $alumno=$this->session->userdata('id');
    $pdf=new fpdf('P','mm','letter');
    //P-L,pt puntos mm milimetros, cm centimetnros, tamaño
    $pdf->AddPage();

      /*$x=20;$y=30;
      $ancho=175;

      setlocale(LC_TIME,"es_MX");
      $fecha=strftime("Atlautla, Estado de México a %d de %B de %Y");
      $pdf->SetFont('Arial','',14);
      $pdf->SetXY($x,$y);
      $pdf->Cell($ancho,8,utf8_decode("".$fecha),'0',0,'R');
      $pdf->SetFont('Arial','B',14);
      $pdf->SetXY($x,$y+=15);
      $pdf->Write(8,utf8_decode("M. en D.A. IGNACIA BAUTISTA GONZÁLEZ \n\t\t\t\t\t\t DIRECTORA DEL CECYTEM PLANTEL ATLAUTLA \n\t\t\t\t\t\t PRESENTE"));
      $pdf->SetFont('Arial','',13);
      $pdf->SetXY($x,$y+=26);
      $pdf->MultiCell(175,8,utf8_decode("     Por medio de la presente hacemos de su conocimiento que hemos estudiado y revisado el Reglamento del Plantel del Colegio de Estudios Científicos Y Tecnológicos del Estado de México del Plantel Atlautla; los cuales son aplicables a mi hijo (a)"));
      $pdf->SetXY($x+23,$y+=23);
      $pdf->Cell(90,8,"Jordani Valencia Rosas",'B',0,'C');
      $pdf->Write(8,utf8_decode(" durante toda su formación y  \n\t\t\t\t\t\t\t permanencia académica en el Plantel."));
      $pdf->SetXY($x,$y+=16);
      $pdf->MultiCell(175,8,utf8_decode("   Por lo cual, manifestamos que estamos de acuerdo con la reglamentación mencionada y me comprometo junto con mi hijo(a) a respetarlo y cumplirlo a fin de tener una relación de armonía, respeto y disciplina dentro y fuera de la institución"));
      $pdf->SetXY($x,$y+=24);
      $pdf->MultiCell(175,8,utf8_decode("     Para ratificar lo anterior, sírvase encontrar en la parte inferior de este oficio los nombres y firmas de conformidad del que suscribe y del alumno en cuestión. \n\t\t\t\t\t\tTambién, me doy por enterado de que recibí en tiempo y forma la reglamentación en cuestión. \n\t\t\t\t\t\t\tAsí mismo, declaramos que es nuestra libre y plena voluntad el acatar las disposiciones que los reglamentos indican."));
      $pdf->SetFont('Arial','B',14);
      $pdf->SetXY($x,$y+=59);
      $pdf->Cell($ancho,5,utf8_decode("ATENTAMENTE"),'0',0,'C');
      $pdf->SetFont('Arial','B',12);
      $pdf->SetXY($x,$y+=39);
      $pdf->Cell(80,5,utf8_decode("Jordani Valencia Rosas"),'B',0,'C');
      $pdf->SetXY($x+95,$y);
      $pdf->Cell(80,5,utf8_decode("Jordani Valencia Rosas"),'B',0,'C');
      $pdf->SetFont('Arial','B',11);
      $pdf->SetXY($x,$y+=8);
      $pdf->Cell(80,5,utf8_decode("NOMBRE Y FIRMA DEL PADRE, MADRE O TUTOR"),'0',0,'C');
      $pdf->SetXY($x+97,$y);
      $pdf->Cell(80,5,utf8_decode("NOMBRE Y FIRMA DEL ALUMNO(A)"),'0',0,'C');

      $pdf->AddPage();*/

        $x=20;$y=30;
        $ancho=175;
        setlocale(LC_TIME,"es_MX");
        $fecha=strftime("Atlautla, Estado de México a %d de %B de %Y");
        $pdf->SetFont('Arial','',14);
        $pdf->SetXY($x,$y);
        $pdf->Cell($ancho,8,utf8_decode("".$fecha),'0',0,'R');
        $pdf->SetFont('Arial','B',14);
        $pdf->SetXY($x,$y+=15);
        $pdf->Write(8,utf8_decode("M. en D.A. IGNACIA BAUTISTA GONZÁLEZ \n\t\t\t\t\t\t DIRECTORA DEL CECYTEM PLANTEL ATLAUTLA \n\t\t\t\t\t\t PRESENTE"));
        $pdf->SetFont('Arial','',13);
        $pdf->SetXY($x,$y+=26);
        $pdf->MultiCell(175,8,utf8_decode("     Por medio de la presente hacemos de su conocimiento que hemos estudiado y revisado el Reglamento del Plantel del Colegio de Estudios Científicos Y Tecnológicos del Estado de México del Plantel Atlautla; los cuales son aplicables a mi hijo (a)"));
        $pdf->SetXY($x+23,$y+=23);
        $pdf->Cell(90,8,"Jordani Valencia Rosas",'B',0,'C');
        $pdf->Write(8,utf8_decode(" durante toda su formación y  \n\t\t\t\t\t\t\t permanencia académica en el Plantel."));
        $pdf->SetXY($x,$y+=16);
        $pdf->MultiCell(175,8,utf8_decode("   Por lo cual, manifestamos que estamos de acuerdo con la reglamentación mencionada y me comprometo junto con mi hijo(a) a respetarlo y cumplirlo a fin de tener una relación de armonía, respeto y disciplina dentro y fuera de la institución"));
        $pdf->SetXY($x,$y+=24);
        $pdf->MultiCell(175,8,utf8_decode("     Para ratificar lo anterior, sírvase encontrar en la parte inferior de este oficio los nombres y firmas de conformidad del que suscribe y del alumno en cuestión. \n\t\t\t\t\t\tTambién, me doy por enterado de que recibí en tiempo y forma la reglamentación en cuestión. \n\t\t\t\t\t\t\tAsí mismo, declaramos que es nuestra libre y plena voluntad el acatar las disposiciones que los reglamentos indican."));
        $pdf->SetFont('Arial','B',14);
        $pdf->SetXY($x,$y+=59);
        $pdf->Cell($ancho,5,utf8_decode("ATENTAMENTE"),'0',0,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->SetXY($x,$y+=39);
        $pdf->Cell(80,5,utf8_decode("Jordani Valencia Rosas"),'B',0,'C');
        $pdf->SetXY($x+95,$y);
        $pdf->Cell(80,5,utf8_decode("Jordani Valencia Rosas"),'B',0,'C');
        $pdf->SetFont('Arial','B',11);
        $pdf->SetXY($x,$y+=8);
        $pdf->Cell(80,5,utf8_decode("NOMBRE Y FIRMA DEL PADRE, MADRE O TUTOR"),'0',0,'C');
        $pdf->SetXY($x+97,$y);
        $pdf->Cell(80,5,utf8_decode("NOMBRE Y FIRMA DEL ALUMNO(A)"),'0',0,'C');


    $pdf->Output();



  }

}
