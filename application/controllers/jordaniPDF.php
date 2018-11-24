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
      $x=20;$y=60;
      $ancho=175;
      // Ejercico y deportes
      $pdf->SetFont('Arial','B',9);
        $pdf->Cell(195,5,utf8_decode("EJERCICIO Y DEPORTES"),'BRLT',1,'C');
        $pdf->SetXY(10,15);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(195,4,utf8_decode("¿Cuántas veces a la semana haces ejercicio físico?"),'BRLT',1,'C');

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY(10,19);
        $pdf->Cell(48.5,4,"(    ) De 1 a 2 veces ",'RLB',0,'C');
        $pdf->SetXY(58.5,19);
        $pdf->Cell(48.75,4,"(    ) De 3 a 4 veces ",'RLB',0,'C');
        $pdf->SetXY(107.25,19);
        $pdf->Cell(48.75,4,"(    ) De 5 a 7 veces ",'RLB',0,'C');
        $pdf->SetXY(156.25,19);
        $pdf->Cell(48.75,4,"(    ) Nunca ",'RLB',0,'C');

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY(10,23);
        $pdf->Cell(97.5,4,utf8_decode("¿Practicas algún deporte?   No (   )   Si (   )"),'RLB',0,'C');
        $pdf->SetXY(107.5,23);
        $pdf->Cell(97.5,4,utf8_decode("Marca con una 'X' cuál de los siguientes:"),'RLB',0,'C');

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY(10,27);
        $pdf->Cell(32.5,4,utf8_decode("(   ) Futbol"),'RLB',0,'L');
        $pdf->Cell(32.5,4,utf8_decode("(   ) Béisbol"),'RLB',0,'L');
        $pdf->Cell(32.5,4,utf8_decode("(   ) Basquetbol"),'RLB',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Natación"),'RLB',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Atletismo"),'RLB',0,'L');
        $pdf->SetXY(10,31);
        $pdf->Cell(32.5,4,utf8_decode("(   ) Tenis"),'RLB',0,'L');
        $pdf->Cell(32.5,4,utf8_decode("(   ) Gimnasia"),'RLB',0,'L');
        $pdf->Cell(32.5,4,utf8_decode("(   ) Judo"),'RLB',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Karate"),'RLB',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Halterofilia"),'RLB',0,'L');
        $pdf->SetXY(10,35);
        $pdf->Cell(32.5,4,utf8_decode("(   ) Boxeo"),'RLB',0,'L');
        $pdf->Cell(32.5,4,utf8_decode("(   ) Lucha"),'RLB',0,'L');
        $pdf->Cell(32.5,4,utf8_decode("(   ) Ciclismo"),'RLB',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Charrería"),'RLB',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Otro, especificar"),'RLB',0,'L');
        $pdf->SetXY(10,39);
        $pdf->Cell(195,4," ",'RLB',0,'C');

        //Hábitos de consumo
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY(10,49);
        $pdf->Cell(195,5,utf8_decode("HÁBITOS DE CONSUMO"),'BRLT',1,'C');

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY(10,54);
        $pdf->Cell(22,4,utf8_decode("¿Fuma?"),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode("No (   )"),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode("Si (   )"),'RLB',0,'C');
        $pdf->Cell(63,4,utf8_decode("¿Cuántos cigarros por día?"),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode("1 a 5 (   )"),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode("6 a 10 (  )"),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode("10 o más (   )"),'RLB',0,'C');

        $pdf->SetXY(10,58);
        $pdf->Cell(195,4,utf8_decode("En el siguiente cuadro marque con una 'X' las opciones que considere necesarias:"),'BRLT',1,'C');
        $pdf->Cell(22,4,utf8_decode("¿Consume?"),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode("No"),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode("Si"),'RLB',0,'C');
        $pdf->Cell(63,28,utf8_decode("¿Cuántas veces por semana?"),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode("Una"),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode("2 o 3"),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode("4 o más"),'RLB',0,'C');

        $pdf->SetXY(10,66);
        $pdf->Cell(22,4,utf8_decode("Cerveza"),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->SetXY(139,66);
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');

        $pdf->SetXY(10,70);
        $pdf->Cell(22,4,utf8_decode("Vinos de mesa"),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->SetXY(139,70);
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');

        $pdf->SetXY(10,74);
        $pdf->Cell(22,4,utf8_decode("Cocteles"),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->SetXY(139,74);
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');

        $pdf->SetXY(10,78);
        $pdf->Cell(22,4,utf8_decode("Licores"),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->SetXY(139,78);
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');

        $pdf->SetXY(10,82);
        $pdf->Cell(22,4,utf8_decode("Otros"),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->SetXY(139,82);
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');
        $pdf->Cell(22,4,utf8_decode(" "),'RLB',0,'C');

        $pdf->SetXY(10,86);
        $pdf->Cell(195,4,"Considera que sus amigos",'RLB',0,'C');
        $pdf->SetXY(10,90);
        $pdf->Cell(97.5,4,utf8_decode("¿Tienen alguna adicción?    No (   )   Si (   )"),'RLB',0,'L');
        $pdf->Cell(97.5,4,"Especifique: ",'RLB',0,'L');
        $pdf->SetXY(10,94);
        $pdf->Cell(97.5,4,utf8_decode("¿Consumen alguna droga?    No (   )   Si (   )"),'RLB',0,'L');
        $pdf->Cell(97.5,4,"Especifique: ",'RLB',0,'L');

        //Recreación y tiempo libre
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY(10,103);
        $pdf->Cell(195,4,utf8_decode("RECREACIÓN Y TIEMPO LIBRE"),'BRLT',1,'C');

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY(10,107);
        $pdf->Cell(195,4,utf8_decode("(Marque con una 'X' las actividades que frecuentemente realiza)"),'BRLT',1,'C');

        $pdf->SetXY(10,111);
        $pdf->Cell(65,4,utf8_decode("(   )   Ir al parque"),'RLB',0,'L');
        $pdf->Cell(65,4,utf8_decode("(   )   Hacer deporte"),'RLB',0,'L');
        $pdf->Cell(65,4,utf8_decode("(   )   Ver televisión"),'RLB',0,'L');
        $pdf->SetXY(10,115);
        $pdf->Cell(65,4,utf8_decode("(   )   Ir al cine"),'RLB',0,'L');
        $pdf->Cell(65,4,utf8_decode("(   )   Reunirse con amigos"),'RLB',0,'L');
        $pdf->Cell(65,4,utf8_decode("(   )   Ver películas en casa"),'RLB',0,'L');
        $pdf->SetXY(10,119);
        $pdf->Cell(65,4,utf8_decode("(   )   Ir a bailar"),'RLB',0,'L');
        $pdf->Cell(65,4,utf8_decode("(   )   Salir con mi pareja"),'RLB',0,'L');
        $pdf->Cell(65,4,utf8_decode("(   )   Leer"),'RLB',0,'L');
        $pdf->SetXY(10,123);
        $pdf->Cell(65,4,utf8_decode("(   )   Jugar videojuegos"),'RLB',0,'L');
        $pdf->Cell(65,4,utf8_decode("(   )   Escuchar música"),'RLB',0,'L');
        $pdf->Cell(65,8,utf8_decode("(   )   Otro, especificar:"),'RLB',0,'L');
        $pdf->SetXY(10,127);
        $pdf->Cell(65,4,utf8_decode("(   )   Ir de compras"),'RLB',0,'L');
        $pdf->Cell(65,4,utf8_decode("(   )   Usar la computadora"),'RLB',0,'L');

        //Gustos e intereses
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY(10,136);
        $pdf->Cell(195,5,utf8_decode("GUSTOS E INTERESES"),'BRLT',1,'C');

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY(10,141);
        $pdf->Cell(195,4,utf8_decode("¿Qué hago en mi tiempo libre?"),'BRLT',1,'L');
        $pdf->SetXY(10,145);
        $pdf->Cell(65,4,utf8_decode("Última vez que leí un libro:"),'BRLT',0,'L');
        $pdf->Cell(130,4,utf8_decode("¿Qué es lo que me gusta hacer?"),'BRLT',0,'L');
        $pdf->SetXY(10,149);
        $pdf->Cell(65,4,utf8_decode("Libros que haz leído"),'BRLT',0,'L');
        $pdf->Cell(130,4,utf8_decode("¿Qué me disgusta hacer?"),'BRLT',0,'L');
        $pdf->SetXY(10,153);
        $pdf->Cell(65,4,utf8_decode("1.- "),'BRLT',0,'L');
        $pdf->Cell(65,4,utf8_decode("Mis películas preferidas son:"),'BRLT',0,'L');
        $pdf->Cell(55,4,utf8_decode("¿Cuántos amigos tengo?"),'BRLT',0,'L');
        $pdf->Cell(10,4,utf8_decode(" "),'BRLT',0,'L');
        $pdf->SetXY(10,157);
        $pdf->Cell(65,4,utf8_decode("2.- "),'BRLT',0,'L');
        $pdf->Cell(65,4,utf8_decode("1.- "),'BRLT',0,'L');
        $pdf->Cell(65,4,utf8_decode("¿Qué lugares frecuento con ellos?"),'BRLT',0,'L');
        $pdf->SetXY(10,161);
        $pdf->Cell(65,4,utf8_decode("3.- "),'BRLT',0,'L');
        $pdf->Cell(65,4,utf8_decode("2.- "),'BRLT',0,'L');
        $pdf->Cell(65,4,utf8_decode("1.- "),'BRLT',0,'L');
        $pdf->SetXY(10,165);
        $pdf->Cell(65,4,utf8_decode("4.- "),'BRLT',0,'L');
        $pdf->Cell(65,4,utf8_decode("3.- "),'BRLT',0,'L');
        $pdf->Cell(65,4,utf8_decode("2.- "),'BRLT',0,'L');


        //Participacion social
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY(10,174);
        $pdf->Cell(195,4,utf8_decode("PARTICIPACIÓN SOCIAL"),'BRLT',1,'C');
        $pdf->SetFont('Arial','',9);
        $pdf->SetXY(10,178);
        $pdf->Cell(195,4,utf8_decode("¿Actualmente participa en alguna organización, asociación, equipo o grupo?   No (   )   Si (   )"),'BRLT',1,'L');
        $pdf->SetXY(10,182);
        $pdf->Cell(48.75,4,utf8_decode("(   ) Estudiantil"),'BRLT',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Beneficiencia"),'BRLT',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Político"),'BRLT',0,'L');
        $pdf->Cell(48.75,8,utf8_decode("(   ) Otro, especificar"),'BRLT',0,'L');
        $pdf->SetXY(10,186);
        $pdf->Cell(48.75,4,utf8_decode("(   ) Deportivo"),'BRLT',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Religioso"),'BRLT',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Académico"),'BRLT',0,'L');

        //Internet
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY(10,195);
        $pdf->Cell(195,5,utf8_decode("INTERNET"),'BRLT',1,'C');
        $pdf->SetFont('Arial','',9);
        $pdf->SetXY(10,200);
        $pdf->Cell(97.5,4,utf8_decode("¿Sabes usar internet?   No (   )   Si (   )"),'BRLT',0,'L');
        $pdf->Cell(97.5,4,utf8_decode("¿Tienes acceso a internet?   No (   )   Si (   )"),'BRLT',0,'L');
        $pdf->SetXY(10,204);
        $pdf->Cell(195,4,utf8_decode("En caso afirmativo, marque con una 'X' el lugar principal en el que tiene acceso"),'BRLT',1,'C');
        $pdf->SetXY(10,208);
        $pdf->Cell(65,4,utf8_decode("(   ) Casa"),'BRLT',0,'L');
        $pdf->Cell(65,4,utf8_decode("(   ) Escuela"),'BRLT',0,'L');
        $pdf->Cell(65,4,utf8_decode("(   ) Trabajo"),'BRLT',0,'L');
        $pdf->SetXY(10,212);
        $pdf->Cell(65,4,utf8_decode("(   ) Café Internet"),'BRLT',0,'L');
        $pdf->Cell(65,4,utf8_decode("(   ) Casa de algún amigo o familiar"),'BRLT',0,'L');
        $pdf->Cell(65,4,utf8_decode("(   ) Otro, especificar"),'BRLT',0,'L');
        $pdf->SetXY(10,216);
        $pdf->Cell(195,4,utf8_decode("¿Para qué utiliza internet? (Marque con una 'X' las opciones que consideres necesarias)"),'BRLT',1,'C');
        $pdf->SetXY(10,220);
        $pdf->Cell(97.5,4,utf8_decode("¿Tiene?"),'BLRT',0,'C');
        $pdf->Cell(97.5,4,utf8_decode("¿Para qué lo utiliza?"),'BLRT',0,'C');
        $pdf->SetXY(10,224);
        $pdf->Cell(65,4,utf8_decode("Correo electrónico"),'BLRT',0,'L');
        $pdf->Cell(32.5,4,utf8_decode("No (   )         Si (   )"),'BLRT',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Intercambiar información"),'BLRT',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Entretenimiento"),'BLRT',0,'L');
        $pdf->SetXY(10,228);
        $pdf->Cell(65,4,utf8_decode("Página web personal"),'BLRT',0,'L');
        $pdf->Cell(32.5,4,utf8_decode("No (   )         Si (   )"),'BLRT',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Relaciones de amistad"),'BLRT',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Buscar amigos"),'BLRT',0,'L');
        $pdf->SetXY(10,232);
        $pdf->Cell(65,4,utf8_decode("Red Social (Facebook, Twitter, etc.)"),'BLRT',0,'L');
        $pdf->Cell(32.5,4,utf8_decode("No (   )         Si (   )"),'BLRT',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Relaciones profesionales"),'BLRT',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Comunicarte"),'BLRT',0,'L');
        $pdf->SetXY(10,236);
        $pdf->Cell(65,4,utf8_decode("Blog/Weblog"),'BLRT',0,'L');
        $pdf->Cell(32.5,4,utf8_decode("No (   )         Si (   )"),'BLRT',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Buscar pareja"),'BLRT',0,'L');
        $pdf->Cell(48.75,4,utf8_decode("(   ) Otro"),'BLRT',0,'L');
    $pdf->Output();



  }

}
