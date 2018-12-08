<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jordaniPDF extends CI_Controller {

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
      $pdf->SetFont('Arial','B',9);
      $pdf->SetXY($x,$y);
        $pdf->Cell($ancho,5,utf8_decode("EJERCICIO Y DEPORTES"),'BRLT',1,'C');
        $pdf->SetXY($x,$y+=5);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell($ancho,4,utf8_decode("¿Cuántas veces a la semana haces ejercicio físico?"),'BRLT',1,'C');

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho/4,4,"(    ) De 1 a 2 veces ",'RLB',0,'C');
        $pdf->SetXY(63.75,$y);
        $pdf->Cell($ancho/4,4,"(    ) De 3 a 4 veces ",'RLB',0,'C');
        $pdf->SetXY(107.5,$y);
        $pdf->Cell($ancho/4,4,"(    ) De 5 a 7 veces ",'RLB',0,'C');
        $pdf->SetXY(151.25,$y);
        $pdf->Cell($ancho/4,4,"(    ) Nunca ",'RLB',0,'C');

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho/2,4,utf8_decode("¿Practicas algún deporte?   No (   )   Si (   )"),'RLB',0,'C');
        $pdf->SetXY(107.5,$y);
        $pdf->Cell($ancho/2,4,utf8_decode("Marca con una 'X' cuál de los siguientes:"),'RLB',0,'C');

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(29.16,4,utf8_decode("(   ) Futbol"),'RLB',0,'L');
        $pdf->Cell(29.16,4,utf8_decode("(   ) Béisbol"),'RLB',0,'L');
        $pdf->Cell(29.16,4,utf8_decode("(   ) Basquetbol"),'RLB',0,'L');
        $pdf->Cell(43.75,4,utf8_decode("(   ) Natación"),'RLB',0,'L');
        $pdf->Cell(43.75,4,utf8_decode("(   ) Atletismo"),'RLB',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(29.16,4,utf8_decode("(   ) Tenis"),'RLB',0,'L');
        $pdf->Cell(29.16,4,utf8_decode("(   ) Gimnasia"),'RLB',0,'L');
        $pdf->Cell(29.16,4,utf8_decode("(   ) Judo"),'RLB',0,'L');
        $pdf->Cell(43.75,4,utf8_decode("(   ) Karate"),'RLB',0,'L');
        $pdf->Cell(43.75,4,utf8_decode("(   ) Halterofilia"),'RLB',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(29.16,4,utf8_decode("(   ) Boxeo"),'RLB',0,'L');
        $pdf->Cell(29.16,4,utf8_decode("(   ) Lucha"),'RLB',0,'L');
        $pdf->Cell(29.16,4,utf8_decode("(   ) Ciclismo"),'RLB',0,'L');
        $pdf->Cell(43.75,4,utf8_decode("(   ) Charrería"),'RLB',0,'L');
        $pdf->Cell(43.75,4,utf8_decode("(   ) Otro, especificar"),'RLB',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho,4," ",'RLB',0,'C');

        //Hábitos de consumo
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY($x,$y+=9);
        $pdf->Cell($ancho,5,utf8_decode("HÁBITOS DE CONSUMO"),'BRLT',1,'C');

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(20,4,utf8_decode("¿Fuma?"),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode("No (   )"),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode("Si (   )"),'RLB',0,'C');
        $pdf->Cell(55,4,utf8_decode("¿Cuántos cigarros por día?"),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode("1 a 5 (   )"),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode("6 a 10 (  )"),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode("10 o más (   )"),'RLB',0,'C');

        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho,4,utf8_decode("En el siguiente cuadro marque con una 'X' las opciones que considere necesarias:"),'BRLT',1,'C');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(20,4,utf8_decode("¿Consume?"),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode("No"),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode("Si"),'RLB',0,'C');
        $pdf->Cell(55,24,utf8_decode("¿Cuántas veces por semana?"),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode("Una"),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode("2 o 3"),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode("4 o más"),'RLB',0,'C');

        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(20,4,utf8_decode("Cerveza"),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->SetXY(135,$y);
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');

        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(20,4,utf8_decode("Vinos de mesa"),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->SetXY(135,$y);
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');

        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(20,4,utf8_decode("Cocteles"),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->SetXY(135,$y);
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');

        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(20,4,utf8_decode("Licores"),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->SetXY(135,$y);
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');

        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(20,4,utf8_decode("Otros"),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->SetXY(135,$y);
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');

        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho,4,"Considera que sus amigos",'RLB',0,'C');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho/2,4,utf8_decode("¿Tienen alguna adicción?    No (   )   Si (   )"),'RLB',0,'L');
        $pdf->Cell($ancho/2,4,"Especifique: ",'RLB',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho/2,4,utf8_decode("¿Consumen alguna droga?    No (   )   Si (   )"),'RLB',0,'L');
        $pdf->Cell($ancho/2,4,"Especifique: ",'RLB',0,'L');

        //Recreación y tiempo libre
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY($x,$y+=9);
        $pdf->Cell($ancho,4,utf8_decode("RECREACIÓN Y TIEMPO LIBRE"),'BRLT',1,'C');

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho,4,utf8_decode("(Marque con una 'X' las actividades que frecuentemente realiza)"),'BRLT',1,'C');

        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho/3,4,utf8_decode("(   )   Ir al parque"),'RLB',0,'L');
        $pdf->Cell($ancho/3,4,utf8_decode("(   )   Hacer deporte"),'RLB',0,'L');
        $pdf->Cell($ancho/3,4,utf8_decode("(   )   Ver televisión"),'RLB',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho/3,4,utf8_decode("(   )   Ir al cine"),'RLB',0,'L');
        $pdf->Cell($ancho/3,4,utf8_decode("(   )   Reunirse con amigos"),'RLB',0,'L');
        $pdf->Cell($ancho/3,4,utf8_decode("(   )   Ver películas en casa"),'RLB',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho/3,4,utf8_decode("(   )   Ir a bailar"),'RLB',0,'L');
        $pdf->Cell($ancho/3,4,utf8_decode("(   )   Salir con mi pareja"),'RLB',0,'L');
        $pdf->Cell($ancho/3,4,utf8_decode("(   )   Leer"),'RLB',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho/3,4,utf8_decode("(   )   Jugar videojuegos"),'RLB',0,'L');
        $pdf->Cell($ancho/3,4,utf8_decode("(   )   Escuchar música"),'RLB',0,'L');
        $pdf->Cell($ancho/3,8,utf8_decode("(   )   Otro, especificar:"),'RLB',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho/3,4,utf8_decode("(   )   Ir de compras"),'RLB',0,'L');
        $pdf->Cell($ancho/3,4,utf8_decode("(   )   Usar la computadora"),'RLB',0,'L');

        //Gustos e intereses
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho,5,utf8_decode("GUSTOS E INTERESES"),'BRLT',1,'C');

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,4,utf8_decode("¿Qué hago en mi tiempo libre?"),'BRLT',1,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(55,4,utf8_decode("Última vez que leí un libro:"),'BRLT',0,'L');
        $pdf->Cell(120,4,utf8_decode("¿Qué es lo que me gusta hacer?"),'BRLT',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(55,4,utf8_decode("Libros que haz leído"),'BRLT',0,'L');
        $pdf->Cell(120,4,utf8_decode("¿Qué me disgusta hacer?"),'BRLT',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(55,4,utf8_decode("1.- "),'BRLT',0,'L');
        $pdf->Cell(55,4,utf8_decode("Mis películas preferidas son:"),'BRLT',0,'L');
        $pdf->Cell(55,4,utf8_decode("¿Cuántos amigos tengo?"),'BRLT',0,'L');
        $pdf->Cell(10,4,utf8_decode(" "),'BRLT',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(55,4,utf8_decode("2.- "),'BRLT',0,'L');
        $pdf->Cell(55,4,utf8_decode("1.- "),'BRLT',0,'L');
        $pdf->Cell(65,4,utf8_decode("¿Qué lugares frecuento con ellos?"),'BRLT',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(55,4,utf8_decode("3.- "),'BRLT',0,'L');
        $pdf->Cell(55,4,utf8_decode("2.- "),'BRLT',0,'L');
        $pdf->Cell(65,4,utf8_decode("1.- "),'BRLT',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(55,4,utf8_decode("4.- "),'BRLT',0,'L');
        $pdf->Cell(55,4,utf8_decode("3.- "),'BRLT',0,'L');
        $pdf->Cell(65,4,utf8_decode("2.- "),'BRLT',0,'L');


        //Participacion social
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho,4,utf8_decode("PARTICIPACIÓN SOCIAL"),'BRLT',1,'C');
        $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho,4,utf8_decode("¿Actualmente participa en alguna organización, asociación, equipo o grupo?   No (   )   Si (   )"),'BRLT',1,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho/4,4,utf8_decode("(   ) Estudiantil"),'BRLT',0,'L');
        $pdf->Cell($ancho/4,4,utf8_decode("(   ) Beneficiencia"),'BRLT',0,'L');
        $pdf->Cell($ancho/4,4,utf8_decode("(   ) Político"),'BRLT',0,'L');
        $pdf->Cell($ancho/4,8,utf8_decode("(   ) Otro, especificar"),'BRLT',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho/4,4,utf8_decode("(   ) Deportivo"),'BRLT',0,'L');
        $pdf->Cell($ancho/4,4,utf8_decode("(   ) Religioso"),'BRLT',0,'L');
        $pdf->Cell($ancho/4,4,utf8_decode("(   ) Académico"),'BRLT',0,'L');

        //Internet
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY($x,$y+=9);
        $pdf->Cell($ancho,5,utf8_decode("INTERNET"),'BRLT',1,'C');
        $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho/2,4,utf8_decode("¿Sabes usar internet?   No (   )   Si (   )"),'BRLT',0,'L');
        $pdf->Cell($ancho/2,4,utf8_decode("¿Tienes acceso a internet?   No (   )   Si (   )"),'BRLT',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho,4,utf8_decode("En caso afirmativo, marque con una 'X' el lugar principal en el que tiene acceso"),'BRLT',1,'C');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho/3,4,utf8_decode("(   ) Casa"),'BRLT',0,'L');
        $pdf->Cell($ancho/3,4,utf8_decode("(   ) Escuela"),'BRLT',0,'L');
        $pdf->Cell($ancho/3,4,utf8_decode("(   ) Trabajo"),'BRLT',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho/3,4,utf8_decode("(   ) Café Internet"),'BRLT',0,'L');
        $pdf->Cell($ancho/3,4,utf8_decode("(   ) Casa de algún amigo o familiar"),'BRLT',0,'L');
        $pdf->Cell($ancho/3,4,utf8_decode("(   ) Otro, especificar"),'BRLT',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho,4,utf8_decode("¿Para qué utiliza internet? (Marque con una 'X' las opciones que consideres necesarias)"),'BRLT',1,'C');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho/2,4,utf8_decode("¿Tiene?"),'BLRT',0,'C');
        $pdf->Cell($ancho/2,4,utf8_decode("¿Para qué lo utiliza?"),'BLRT',0,'C');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(57.5,4,utf8_decode("Correo electrónico"),'BLRT',0,'L');
        $pdf->Cell(30,4,utf8_decode("No (   )         Si (   )"),'BLRT',0,'L');
        $pdf->Cell(43.75,4,utf8_decode("(   ) Intercambiar información"),'BLRT',0,'L');
        $pdf->Cell(43.75,4,utf8_decode("(   ) Entretenimiento"),'BLRT',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(57.5,4,utf8_decode("Página web personal"),'BLRT',0,'L');
        $pdf->Cell(30,4,utf8_decode("No (   )         Si (   )"),'BLRT',0,'L');
        $pdf->Cell(43.75,4,utf8_decode("(   ) Relaciones de amistad"),'BLRT',0,'L');
        $pdf->Cell(43.75,4,utf8_decode("(   ) Buscar amigos"),'BLRT',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(57.5,4,utf8_decode("Red Social (Facebook, Twitter, etc.)"),'BLRT',0,'L');
        $pdf->Cell(30,4,utf8_decode("No (   )         Si (   )"),'BLRT',0,'L');
        $pdf->Cell(43.75,4,utf8_decode("(   ) Relaciones profesionales"),'BLRT',0,'L');
        $pdf->Cell(43.75,4,utf8_decode("(   ) Comunicarte"),'BLRT',0,'L');
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(57.5,4,utf8_decode("Blog/Weblog"),'BLRT',0,'L');
        $pdf->Cell(30,4,utf8_decode("No (   )         Si (   )"),'BLRT',0,'L');
        $pdf->Cell(43.75,4,utf8_decode("(   ) Buscar pareja"),'BLRT',0,'L');
        $pdf->Cell(43.75,4,utf8_decode("(   ) Otro"),'BLRT',0,'L');

        $pdf->AddPage();
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
          $pdf->Cell($ancho,5,utf8_decode("¿En qué actividades apoya?"),'BRL',0,'I');
    $pdf->Output();



  }

}
