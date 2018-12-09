<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class directorio extends CI_Controller {

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
      $pdf->SetFont('Times','B',14);
      $pdf->SetXY($x,$y);
      $pdf->Cell($ancho,5,utf8_decode("CECYTEM ATLAUTLA"),'0',0,'C');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode("DIRECTORIO ESCOLAR"),'0',0,'C');

      $pdf->SetFont('Courier','B',12);
      $pdf->SetXY($x,$y+=15);
      $pdf->Cell($ancho,5,utf8_decode("DATOS DEL ESTUDIANTE"),'0',0,'C');
      $pdf->SetXY($x,$y+=10);
      $pdf->SetFont('Courier','B',10);
      $pdf->Cell(16,5,utf8_decode("NOMBRE: "),'0',0,'I');
      $pdf->SetXY($x+16,$y);
      $pdf->Cell($ancho-16,5,utf8_decode(" "),'B',0,'I');
      $pdf->SetXY($x,$y+=10);
      $pdf->Cell(15,8,utf8_decode("CURP: "),'0',0,'I');
      $pdf->SetXY($x+15,$y);

      for ($i=0; $i <18 ; $i++) {
        $pdf->Cell(8.5,8,utf8_decode($i),'TRBL',0,'C');
      }

      $pdf->SetXY($x,$y+=11);
      $pdf->Cell(65,8,utf8_decode("TELÉFONO CELULAR (ESTUDIANTE): "),'0',0,'I');
      $pdf->SetXY($x+65,$y);
      $pdf->Cell($ancho-65,8,utf8_decode(" "),'B',0,'I');
      $pdf->SetXY($x,$y+=11);
      $pdf->Cell(69,5,utf8_decode("CORREO ELECTRÓNICO (ESTUDIANTE): "),'0',0,'L');
      $pdf->SetXY($x+69,$y);
      $pdf->Cell($ancho-69,5,utf8_decode(" "),'B',0,'I');
      $pdf->SetXY($x,$y+=10);
      $pdf->Cell(20,5,utf8_decode("FACEBOOK: "),'0',0,'L');
      $pdf->SetXY($x+20,$y);
      $pdf->Cell($ancho-20,5,utf8_decode(" "),'B',0,'I');

      $pdf->SetFont('Courier','B',12);
      $pdf->SetXY($x,$y+=12);
      $pdf->Cell($ancho,5,utf8_decode("DIRECCIÓN"),'0',0,'C');
      $pdf->SetFont('Courier','B',10);
      $pdf->SetXY($x,$y+=10);
      $pdf->Cell(22,5,utf8_decode("DOMICILIO: "),'0',0,'L');
      $pdf->SetXY($x+22,$y);
      $pdf->Cell($ancho-80,5,utf8_decode(" "),'B',0,'I');
      $pdf->SetXY($x+118,$y);
      $pdf->Cell(15,5,utf8_decode("NÚMERO: "),'0',0,'L');
      $pdf->SetXY($x+134,$y);
      $pdf->Cell(40,5,utf8_decode(" "),'B',0,'L');
      $pdf->SetXY($x,$y+=11);
      $pdf->Cell(40,5,utf8_decode("ENTRE LA CALLE: "),'0',0,'L');
      $pdf->SetXY($x+41,$y);
      $pdf->Cell(70,5,utf8_decode(" "),'B',0,'L');
      $pdf->SetXY($x+112,$y);
      $pdf->Cell(5,5,utf8_decode("Y"),'0',0,'L');
      $pdf->SetXY($x+119,$y);
      $pdf->Cell(56,5,utf8_decode(" "),'B',0,'L');
      $pdf->SetXY($x,$y+=11);
      $pdf->Cell(44,5,utf8_decode("MUNICIPIO/LOCALIDAD: "),'0',0,'L');
      $pdf->SetXY($x+43,$y);
      $pdf->Cell(65,5,utf8_decode(" "),'B',0,'L');
      $pdf->SetXY($x+108,$y);
      $pdf->Cell(33,5,utf8_decode("COLONIA/BARRIO: "),'0',0,'L');
      $pdf->SetXY($x+140,$y);
      $pdf->Cell(35,5,utf8_decode(" "),'B',0,'L');
      $pdf->SetXY($x,$y+=11);
      $pdf->Cell(27,5,utf8_decode("REFERENCIAS: "),'0',0,'L');
      $pdf->SetXY($x+27,$y);
      $pdf->Cell($ancho-27,5,utf8_decode(" "),'B',0,'L');
      $pdf->SetXY($x,$y+=11);
      $pdf->Cell(45,5,utf8_decode("ACTUALMENTE VIVE CON: "),'0',0,'L');
      $pdf->SetXY($x+45,$y);
      $pdf->Cell($ancho-45,5,utf8_decode(" "),'B',0,'L');
      $pdf->SetXY($x,$y+=11);
      $pdf->Cell(50,5,utf8_decode("TELÉFONO DE EMERGENCIA: "),'0',0,'L');
      $pdf->SetXY($x+50,$y);
      $pdf->Cell($ancho-50,5,utf8_decode(" "),'B',0,'L');


      $pdf->SetFont('Courier','B',12);
      $pdf->SetXY($x,$y+=13);
      $pdf->Cell($ancho,5,utf8_decode("DATOS FAMILIARES"),'0',0,'C');
      $pdf->SetFont('Courier','B',10);
      $pdf->SetXY($x,$y+=10);
      $pdf->Cell(37,5,utf8_decode("NOMBRE DEL PADRE: "),'0',0,'L');
      $pdf->SetXY($x+37,$y);
      $pdf->Cell($ancho-37,5,utf8_decode(" "),'B',0,'L');
      $pdf->SetXY($x,$y+=11);
      $pdf->Cell(58,5,utf8_decode("TELÉFONO CELULAR DEL PADRE: "),'0',0,'L');
      $pdf->SetXY($x+58,$y);
      $pdf->Cell($ancho-58,5,utf8_decode(" "),'B',0,'L');
      $pdf->SetXY($x,$y+=11);
      $pdf->Cell(41,5,utf8_decode("NOMBRE DE LA MADRE: "),'0',0,'L');
      $pdf->SetXY($x+41,$y);
      $pdf->Cell($ancho-41,5,utf8_decode(" "),'B',0,'L');
      $pdf->SetXY($x,$y+=11);
      $pdf->Cell(62,5,utf8_decode("TELÉFONO CELULAR DE LA MADRE: "),'0',0,'L');
      $pdf->SetXY($x+62,$y);
      $pdf->Cell($ancho-62,5,utf8_decode(" "),'B',0,'L');
      $pdf->SetXY($x,$y+=11);
      $pdf->Cell(37,5,utf8_decode("TELÉFONO DE CASA: "),'0',0,'L');
      $pdf->SetXY($x+37,$y);
      $pdf->Cell($ancho-37,5,utf8_decode(" "),'B',0,'L');
      $pdf->SetXY($x,$y+=11);
      $pdf->Cell(45,5,utf8_decode("EN CASO DE NO VIVIR CON LOS PADRES, NOMBRE DEL RESPONSABLE DEL ALUMNO EN EL PLANTEL: "),'0',0,'L');
      $pdf->SetXY($x,$y+=11);
      $pdf->Cell(90,5,utf8_decode(" "),'B',0,'L');
      $pdf->SetXY($x+90,$y);
      $pdf->Cell(24,5,utf8_decode("PARENTESCO: "),'0',0,'L');
      $pdf->SetXY($x+114,$y);
      $pdf->Cell(61,5,utf8_decode(" "),'B',0,'L');

      /*  $pdf->AddPage();
        //HOJA5
        $x=20;$y=15;
        $ancho=175;

        $pdf->SetFont('Arial','B',10);
        $pdf->SetXY($x,$y);
        $pdf->Cell($ancho,5,utf8_decode("TELEFONÍA MÓVIL"),1,0,'C');
        $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(87.5,5,utf8_decode("¿Tiene teléfono celular?   No (   )   Si (   )"),'BLRT',0,'L');
        $pdf->Cell(87.5,5,utf8_decode("Si es afirmativo, ¿tiene acceso a internet?   No (   )   Si (   )"),'BLRT',0,'L');
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(175,5,utf8_decode("Correo electrónico: "),'BLRT',0,'L');
        $pdf->Rect($x,$y+=5,175,20,'D');
        $pdf->SetFont('Arial','B',9);
        $pdf->Text(22,40,utf8_decode("Si no vives con algunos de tus padres; completa el siguiente apartado (Pueden ser Abuelos, tíos, hermanos, etc.)."));
        $pdf->SetXY($x,55);
        $pdf->Cell($ancho,5,utf8_decode("DATOS DEL TUTOR"),1,0,'C');
        $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x,$y+=30);

        //Datos del tutor
        $pdf->Cell(55,5,"Apellido Paterno:",'RL',0,'L');
        $pdf->Cell(55,5,"Apellido Materno:",'RL',0,'L');
        $pdf->Cell(65,5,"Nombre(s):",'RL',0,'L');

        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(55,5,utf8_decode(""),'RLB',0,'L');
        $pdf->Cell(55,5,utf8_decode(""),'RLB',0,'L');
        $pdf->Cell(65,5,utf8_decode(""),'RLB',0,'L');

        //fecha lugar dlegacion ,nacimietno
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(55,5,"Fecha de Nacimiento:",'RL',0,'L');
        $pdf->Cell(55,5,"Lugar de Nacimiento:",'RL',0,'L');
        $pdf->Cell(65,5,utf8_decode("Delegación o municipio:"),'RL',0,'L');

        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(55,5,utf8_decode(""),'RLB',0,'L');
        $pdf->Cell(55,5,utf8_decode(""),'RLB',0,'L');
        $pdf->Cell(65,5,utf8_decode(""),'RLB',0,'L');

        //endidad pais curp
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(35,4,"Entidad Federativa:",'RL',0,'L');
        $pdf->Cell(35,4,utf8_decode("País:"),'RL',0,'L');

        $pdf->Cell(15,8,utf8_decode("CURP:"),'BRL',0,'L');
          for ($i=0; $i <18 ; $i++) {
            $pdf->Cell(5,8,utf8_decode($i),'RBL',0,'L');
          }

        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(35,4,utf8_decode(""),'RLB',0,'L');
        $pdf->Cell(35,4,utf8_decode(""),'RLB',0,'L');
        //grado de estudios
        $pdf->SetFont('Arial','B',10);
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho,5,utf8_decode("Grado máximo de estudios"),1,0,'C');

        $pdf->SetFont('Arial','',10);

          $pdf->SetXY($x,$y+=5);
          $arr_estudios=["Sin estudios", "Secundaria concluída","Tec. Sup. Universitario",
                        "Maestría","Primaria incompleta","Carrera técnica","Licenciatura incompleta",
                        "Doctorado","Primaria concluída","Bachillerato incompleto","Licenciatura concluía",
                        "Otro","Secundaria incompleta","Bachillerato concluído","Especialidad","Especificar"];

          for ($i=0; $i<16 ; $i++) {
            $pdf->Cell($ancho/4,5,utf8_decode("( )".$arr_estudios[$i++]),'RBL',0,'L');
            $pdf->Cell($ancho/4,5,utf8_decode("( )".$arr_estudios[$i++]),'RBL',0,'L');
            $pdf->Cell($ancho/4,5,utf8_decode("( )".$arr_estudios[$i++]),'RBL',0,'L');
            $pdf->Cell($ancho/4,5,utf8_decode("( )".$arr_estudios[$i]),'RBL',0,'L');
            $pdf->SetXY(20,$y+=5);
          }
          $pdf->Cell(87.5,5,"Trabaja: No ( ) Si ( )",'RLB',0,'L');
          $pdf->Cell(87.5,5,utf8_decode("Número de horas a la semana: "),'RLB',0,'L');

          $pdf->SetFont('Arial','B',10);
          $pdf->SetXY($x,$y+=10);
          $pdf->Cell($ancho,5,utf8_decode("RELACIONES SOCIALES / ASPECTOS INTERPERSONALES"),1,0,'C');

          $pdf->SetFont('Arial','',9);
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell($ancho,5,"Lugar que ocupo entre mis hermanos: ",'RLB',0,'I');
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell($ancho,5,utf8_decode("¿Cómo es la relación con sus hermanos? (Marque al menos 2 opciones)"),'RLB',0,'I');
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell($ancho/3,5,utf8_decode("(   ) Platicamos"),'RLB',0,'I');
          $pdf->Cell($ancho/3,5,utf8_decode("(   ) Hay respeto"),'RLB',0,'I');
          $pdf->Cell($ancho/3,5,utf8_decode("(   ) Nos apoyamos"),'RLB',0,'I');
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell($ancho/3,5,utf8_decode("(   ) Jugamos"),'RLB',0,'I');
          $pdf->Cell($ancho/3,5,utf8_decode("(   ) No nos llevamos"),'RLB',0,'I');
          $pdf->Cell($ancho/3,5,utf8_decode("(   ) Siempre estamos peleando"),'RLB',0,'I');
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell($ancho,5,utf8_decode("¿A qué edad tuvo su primer noviazgo?"),'RLB',0,'I');
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell($ancho,5,utf8_decode("Actualmente tiene novio(a): (   ) Si   (   ) No   ¿Cuánto tiempo llevas saliendo con él (ella)? "),'RLB',0,'I');
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell($ancho,5,utf8_decode("¿Cuantás parejas sentimentales has tenido?"),'RLB',0,'I');
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell($ancho,5,utf8_decode("En promedio ¿Cuánto tiempo ha durado con sus parejas?"),'RLB',0,'I');
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell($ancho,5,utf8_decode("¿Cuál ha sido el principal motivo de ruptura?"),'RLB',0,'I');
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell($ancho,5,utf8_decode("La persona a la que mas confianza le tiene es: "),'RLB',0,'I');
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell($ancho,5,utf8_decode("¿Por qué le tiene confianza?"),'RLB',0,'I');
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell($ancho,5,utf8_decode("¿Quién tomas las decisiones definitivas en casa?   Papá (   )    Mamá (   )    Ambos (   )    Hermanos (   )"),'RLB',0,'I');
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell($ancho,5,utf8_decode("¿Quién es más flexible en los problemas?   Papá (   )    Mamá (   )    Ambos (   )"),'RLB',0,'I');
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell($ancho,5,utf8_decode("¿Con quién hay más problemas de comunicación?   Papá (   )    Mamá (   )    Ambos (   )"),'RLB',0,'I');


          $pdf->SetFont('Arial','',8);
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell(30,8,utf8_decode("Algún intregante de"),'RL',0,'C');
          $pdf->Cell(20,8,utf8_decode("Integrante"),'RL',0,'C');
          $pdf->Cell(125,4,utf8_decode("Frecuencia (Marque con una X su respuesta)"),'RLB',0,'C');
          $pdf->SetXY($x+50,$y+4);
          $pdf->Cell(8,8,utf8_decode("Diario"),'RLB',0,'C');
          $pdf->Cell(24,8,utf8_decode("1 vez a la semana"),'RLB',0,'C');
          $pdf->Cell(28,8,utf8_decode("3 veces a la semana"),'RLB',0,'C');
          $pdf->Cell(18,8,utf8_decode("1 vez al mes"),'RLB',0,'C');
          $pdf->Cell(22,8,utf8_decode("Ocasionalmente"),'RLB',0,'C');
          $pdf->Cell(17,8,utf8_decode("Casi nunca"),'RLB',0,'C');
          $pdf->Cell(8,8,utf8_decode("Nunca"),'RLB',0,'C');
          $pdf->SetXY($x,$y+4);
          $pdf->Cell(30,8,utf8_decode("su familia consume"),'BRL',0,'C');
          $pdf->Cell(20,8,utf8_decode("de la familia"),'BRL',0,'C');

          $pdf->SetFont('Arial','',9);
          $pdf->SetXY($x,$y+=12);
          $pdf->Cell(30,5,utf8_decode("Alcohol"),'RLB',0,'I');
          $pdf->Cell(20,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(8,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(24,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(28,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(18,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(22,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(17,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(8,5,utf8_decode(" "),'RLB',0,'I');

          $pdf->SetXY($x,$y+=5);
          $pdf->Cell(30,5,utf8_decode("Cigarros"),'RLB',0,'I');
          $pdf->Cell(20,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(8,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(24,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(28,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(18,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(22,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(17,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(8,5,utf8_decode(" "),'RLB',0,'I');

          $pdf->SetXY($x,$y+=5);
          $pdf->Cell(30,5,utf8_decode("Alguna droga"),'RLB',0,'I');
          $pdf->Cell(20,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(8,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(24,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(28,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(18,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(22,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(17,5,utf8_decode(" "),'RLB',0,'I');
          $pdf->Cell(8,5,utf8_decode(" "),'RLB',0,'I');

          $pdf->SetFont('Arial','',7);
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell(16,4,utf8_decode("¿Quién"),'RL',0,'L');
          $pdf->Cell(34,8,utf8_decode("Actividad"),'BRL',0,'C');
          $pdf->Cell(25,8,utf8_decode("Papá"),'BRL',0,'C');
          $pdf->Cell(25,8,utf8_decode("Mamá"),'BRL',0,'C');
          $pdf->Cell(25,8,utf8_decode("Hermano(a)"),'BRL',0,'C');
          $pdf->Cell(25,8,utf8_decode("Yo"),'BRL',0,'C');
          $pdf->Cell(25,8,utf8_decode("Persona de servicio"),'BRL',0,'C');
          $pdf->SetXY($x,$y+4);
          $pdf->Cell(16,4,utf8_decode("realiza las"),'RL',0,'L');

          $pdf->SetXY($x,$y+8);
          $pdf->Cell(16,4,utf8_decode("siguientes"),'RL',0,'L');
          $pdf->Cell(34,4,utf8_decode("Lavar, planchar su ropa"),'TRB',0,'L');
          $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
          $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
          $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
          $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
          $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
          $pdf->SetXY($x,$y+12);
          $pdf->Cell(16,4,utf8_decode("actividades"),'RL',0,'L');
          $pdf->Cell(34,4,utf8_decode("Barrer, trapear (aseo general)"),'TRB',0,'L');
          $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
          $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
          $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
          $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
          $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
          $pdf->SetXY($x,$y+16);
          $pdf->Cell(16,4,utf8_decode("en el"),'RL',0,'L');
          $pdf->Cell(34,4,utf8_decode("Cocinar"),'TRB',0,'L');
          $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
          $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
          $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
          $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
          $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
          $pdf->SetXY($x,$y+20);
          $pdf->Cell(16,4,utf8_decode("hogar?"),'BRL',0,'L');
          $pdf->Cell(34,4,utf8_decode("Lavar trastes"),'TRB',0,'L');

          $pdf->SetFont('Arial','',9);
          $pdf->SetXY($x,$y+=24);
          $pdf->Cell($ancho,5,utf8_decode("¿Sus padres cuentan con algún negocio familiar?   Si (   )   No (   )"),'BRL',0,'I');
          $pdf->SetXY($x,$y+5);
          $pdf->Cell($ancho,5,utf8_decode("¿En qué actividades apoya?"),'BRL',0,'I');*/
    $pdf->Output();



  }

}
