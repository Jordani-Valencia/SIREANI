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

      $pdf->AddPage();

        $x=20;$y=30;
        $ancho=175;
        setlocale(LC_TIME,"es_MX");
        $fecha=strftime("Atlautla, Estado de México a %d de %B de %Y");
        $pdf->SetFont('Arial','',14);
        $pdf->SetXY($x,$y);
        $pdf->Cell($ancho,8,utf8_decode("".$fecha),'0',0,'R');
        $pdf->SetFont('Arial','B',14);
        $pdf->SetXY($x,$y+=15);
        $pdf->Write(5,utf8_decode("M. en D.A. IGNACIA BAUTISTA GONZÁLEZ \n\t\t\t\t\t\t DIRECTORA DEL CECYTEM PLANTEL ATLAUTLA \n\t\t\t\t\t\t PRESENTE"));
        $pdf->SetFont('Arial','',11);
        $pdf->SetXY($x,$y+=20);
        $pdf->MultiCell(175,5,utf8_decode("       Por  medio  de  la  presente  hacemos  de  su  conocimiento  que  hemos  estudiado  y  revisado  el  Reglamento  Interno  Disciplinario  del  Plantel  Atlautla,  dependiente  del  Colegio  de  Estudios  Científicos  Y  Tecnológicos  del  Estado  de  México.  El  cual  es  aplicable  a  mi  hijo(a)"));
        $pdf->SetFont('Arial','B',10);
        $pdf->SetXY($x,$y+=15);
        $pdf->Cell(80,5,"Jordani Valencia Rosas",'B',0,'C');
        $pdf->SetFont('Arial','',11);
        $pdf->Write(5,utf8_decode(" que cursa la carrera de Técnico Programador, y con \n\t\t\t\t\t\t\t\t\tla finalidad de prevenir acciones que pongan en riesgo la integridad física de él y de la comunidad \t\t\t\t\t\t\t\testudiantil, así como de la vida institucional del colegio. Es mi voluntad manifestar lo siguiente:"));
        $pdf->SetXY($x,$y+=15);
        $pdf->MultiCell(175,5,utf8_decode("\t\t\t\t\t\t\t\t\tEn virtud de la normatividad mencionada y consciente de situaciones ordinarias y extraordinarias que se pueden presentar en el plantel;"));
        $pdf->SetFont('Arial','B',11);
        $pdf->SetXY($x+94,$y+=5);
        $pdf->Write(5,utf8_decode("'Por este medio otorgo mi plena autorización \n\t\t\t\t\t\t\t\t\tpara que sea revisada la mochila y pertenencias personales de mi hijo(a) en el momento que \n\t\t\t\t\t\t\t\t\tusted crea pertinente, durante su estancia en el plantel con la finalidad de detectar artículos \t\t\t\t\t\t\t\t\tprohibidos tales como: PINTURA EN AEROSOL, BEBIDAS ALCOHÓLICAS, CIGARROS, DRO-\n\t\t\t\t\t\t\t\t\tGAS, ENERVANTES, ESTUPEFACIENTES, ARMAS DE FUEGO Y PUNZOCORTANTES, MAR-\n\t\t\t\t\t\t\t\t\tCADORES INDELEBLES, ETC; como medida preventiva, para la seguridad de la comunidad \t\t\t\t\t\t\t\t\testudiantil.'"));
        $pdf->SetXY($x,$y+=40);
        $pdf->SetFont('Arial','',11);
        $pdf->MultiCell(175,5,utf8_decode("       También, como estudiante de esta institución reitero mi compromiso para respetar el Reglamento Disciplinario del Plantel Atlautla dependiente del Colegio de Estudios Científicos Y Tecnológicos del Estado de México, especialmente en los artículos 19, 20, 22 y 35; aceptando las consecuencias que se generan por las faltas al mismo"));
        $pdf->SetXY($x,$y+=25);
        $pdf->MultiCell(175,5,utf8_decode("       Así mismo, declaramos que es nuestra plena y libre voluntad autorizar lo antes mencionado relevando de toda responsabilidad civil y/o penal a las autoridades, profesores y a la institución."));
        $pdf->SetFont('Arial','B',12);
        $pdf->SetXY($x,$y+=15);
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

        $pdf->AddPage();

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
        $pdf->MultiCell(175,8,utf8_decode("Conscientes de la actividad que está presentando actualmente el volcán Popocatépetl y que nos pone en riesgo a todos, me permito informar a usted que hemos tomado en familia las precauciones necesarias; en caso de que el semáforo de alerta volcánica cambie a fase"));
        $pdf->SetFont('Arial','B',13);
        $pdf->Text($x+70,100,utf8_decode("'ROJO 1', "));
        $pdf->SetFont('Arial','',13);
        $pdf->Text($x+70,100,utf8_decode("                 indica que tendríamos que evacuar nues-"));
        $pdf->SetXY($x,$y+=32);
        $pdf->MultiCell(175,8,utf8_decode("tra zona de residencia de manera inmediata."));
        $pdf->SetXY($x,$y+=8);
        $pdf->MultiCell(175,8,utf8_decode("En virtud de lo anterior y con pleno conocimiento de las posibles consecuencias que mi decisión pueda generar, autorizo "));
        $pdf->SetFont('Arial','B',13);
        $pdf->Text($x+75,$y+13,"que mi hijo(a): ");
        $pdf->SetXY($x+110,$y+6);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(65,8,utf8_decode("Jordani Valencia Rosas"),'B',0,'C');
        $pdf->SetXY($x,$y+20);
        $pdf->SetFont('Arial','',13);
        $pdf->MultiCell(175,8,utf8_decode("Se retire del plantel (sin mayor trámite) al momento en que las autoridades declaren oficialmente la fase 'ROJO 1'."));
        $pdf->SetXY($x,$y+40);
        $pdf->MultiCell(175,8,utf8_decode("Así mismo declaro que es mi libre y plena voluntad autorizar lo antes mencionado, relevando de toda responsabilidad civil y/o penal a las autoridades, profesores y a la institución."));
        $pdf->SetFont('Arial','B',13);
        $pdf->SetXY($x,$y+=70);
        $pdf->Cell($ancho,5,utf8_decode("AUTORIZO"),'0',0,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->SetXY($x+50,$y+=39);
        $pdf->Cell(80,5,utf8_decode("Jordani Valencia Rosas"),'B',0,'C');
        $pdf->SetXY($x,$y+=8);
        $pdf->Cell($ancho,5,utf8_decode("NOMBRE Y FIRMA DEL PADRE, MADRE O TUTOR"),'0',0,'C');

    $pdf->Output();



  }

}
