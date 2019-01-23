<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class generarPDF extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('MGetInfo');
		$this->load->library('session');
    $this->load->library('FPDF/fpdf');
    setlocale(LC_TIME,"es_MX");

	}


	public function index($alumno){

    $pdf=new fpdf('P','mm','letter');
    //P-L,pt puntos mm milimetros, cm centimetnros, tamaño
    $pdf->AddPage();
      //HOJA 1
      $pdf->SetFont('Arial','B',10);
        $pdf->Cell(195,10,utf8_decode("FICHA TÉCNICA"),0,0,'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->SetXY(20,25);
        $pdf->Cell(150,8,utf8_decode("COLEGIO DE ESTUDIOS CIENTÍFICOS Y TECNOLÓGICOS DEL ESTADO DE MÉXICO"),'TLR',0,'C');
        $pdf->SetXY(20,33);
        $pdf->Cell(150,8,"PLANTEL ATLAUTLA",'LR',0,'C');
        $pdf->SetXY(20,41);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(150,8,"C.C.T. 15ETC0038V",'LR',0,'R');
        $pdf->SetXY(20,49);
        $direccion=utf8_decode("Dirección: Calle Corregidora No.3, Barrio Santo Domingo, C.P. 56970, Atlautla, Estado de México");
        $pdf->Cell(150,11,$direccion,'BLR',0,'L');
        $pdf->SetXY(170,25);
        $pdf->Cell(25,35,"FOTO",1,1,'C');//25+35 = 60

      $x=20;$y=60;
      $ancho=175;
      //datos generales
      $datos_generales=$this->MGetInfo->get_gral_sec($alumno);


      $pdf->SetFont('Arial','B',9);
        $pdf->SetXY($x,$y);
        $pdf->Cell($ancho,6,"DATOS GENERALES DEL ESTUDIANTE",'RLT',1,'C');
        $pdf->SetFont('Arial','I',8);
        $pdf->SetXY($x,$y+=6);
        $pdf->Cell($ancho,6,utf8_decode("Los datos que proporcione serán utilizados únicamente en el área de Orientación"),'RLB',0,'C');

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x,$y+=6);

        $pdf->Cell(55,6,"Apellido Paterno:",'RLT',0,'L');
        $pdf->Cell(55,6,"Apellido Materno:",'RLT',0,'L');
        $pdf->Cell(65,6,"Nombre:",'RLT',0,'L');

      //DATOS_ALUMNO -nmbre,apellidos
      $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x,$y+=6);
        $pdf->Cell(55,6,utf8_decode($datos_generales->paterno_al),'RLB',0,'L');
        $pdf->Cell(55,6,utf8_decode($datos_generales->materno_al),'RLB',0,'L');
        $pdf->Cell(65,6,utf8_decode($datos_generales->nombre_al),'RLB',0,'L');

      //DATOS sexo,fecha_nacimiento, lugar_nacimiento
      $pdf->SetFont('Arial','',9);
        $pdf->SetXY($x,$y+=6);
        $pdf->Cell(16,10,"Sexo:",'RLB',0,'L');

        if ($datos_generales->sexo=="M") {
          $pdf->SetXY($x+16,$y);
          $pdf->Cell(25,5,"Femenino (   )",'RLB',0,'L');
          $pdf->SetXY($x+16,$y+5);
          $pdf->Cell(25,5,"Masculino ( X )",'RLB',0,'L');
        }else{
          $pdf->SetXY($x+16,$y);
          $pdf->Cell(25,5,"Femenino ( X )",'RLB',0,'L');
          $pdf->SetXY($x+16,$y+5);
          $pdf->Cell(25,5,"Masculino (   )",'RLB',0,'L');
        }

        $pdf->SetXY($x+41,$y);
        $pdf->Cell(50,5,"Fecha de Nacimiento: ",'RL',0,'L');
        $pdf->SetXY($x+41,$y+5);
        $pdf->Cell(50,5,$datos_generales->fecha_nacimiento_al,'RLB',0,'L');

        $pdf->SetXY($x+91,$y);
        $pdf->Cell(84,5,"Lugar de Nacimiento: ",'RL',0,'L');
        $pdf->SetXY($x+91,$y+5);
        $pdf->Cell(84,5,utf8_decode($datos_generales->lugar_nacimiento),'RLB',0,'L');

      // delegacion, entidad,pais
      $pdf->SetXY($x,$y+=10);
        $pdf->Cell(65,5,utf8_decode("Delegación o municipio:"),'RL',0,'L');
        $pdf->Cell(55,5,"Entidad Federativa:",'RL',0,'L');
        $pdf->Cell(55,5,utf8_decode("País:"),'RL',0,'L');
        $pdf->SetXY($x,$y+=5);

        if ($datos_generales->municipio_nac==$datos_generales->delegacion_nac) {
          $pdf->Cell(65,5,utf8_decode($datos_generales->municipio_nac),'RLB',0,'L');
        }else{
          $pdf->Cell(65,5,utf8_decode($datos_generales->municipio_nac.'-'.$datos_generales->delegacion_nac),'RLB',0,'L');
        }

        $pdf->Cell(55,5,utf8_decode($datos_generales->estado_nacimiento),'RLB',0,'L');
        $pdf->Cell(55,5,utf8_decode($datos_generales->pais_nac),'RLB',0,'L');

      //nacionalidad CURP
      $pdf->SetXY($x,$y+=5);
        $pdf->Cell(47,5,utf8_decode("Nacionalidad:"),'RL',0,'L');
        $pdf->Cell(20,10,utf8_decode("CURP: "),'RLB',0,'L');

        $arrCurp=$datos_generales->curp;
        for ($i=0; $i < 18; $i++) {
          $pdf->Cell(6,10,$arrCurp[$i],'RLB',0,'L');
        }

        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(47,5,utf8_decode($datos_generales->nacionalidad),'RLB',0,'L');

        $pdf->SetXY($x,$y+=5);
        $pdf->MultiCell(30,4,"Datos de la escuela en donde curso el ultimo cciclo escolar" ,"RLT" ,"J" ,false);
        $pdf->SetXY($x+30,$y);
        $pdf->MultiCell(40,4,"Nombre de la escuela \n".utf8_decode($datos_generales->nombre_sec) ,"T" ,"C" ,false);
        $pdf->SetXY($x+70,$y);
        $pdf->MultiCell(40,4,"Domicilio de la escuela \n\n".utf8_decode($datos_generales->domicilio_sec)."\n" ,"T" ,"C" ,false);
        $pdf->SetXY($x+70,$y);
        $pdf->Cell(40,16,"",'RL',0,'L');

        $pdf->SetXY($x+110,$y);
        $pdf->MultiCell(35,4,utf8_decode("Delegación o municipio \n".$datos_generales->mun_del_sec)."\n" ,"T" ,"C" ,false);
        $pdf->SetXY($x+110,$y);
        $pdf->Cell(35,16,"",'R',0,'L');
        $pdf->SetXY($x+145,$y);
        $pdf->MultiCell(30,4,utf8_decode("Entidad Federativa \n\n".$datos_generales->estado_secundaria)."\n" ,"T" ,"C" ,false);
        $pdf->SetXY($x+145,$y);
        $pdf->Cell(30,16,"",'RL',0,'L');

      //TURNO, promedio
      $pdf->SetXY($x,$y+=16);
        $pdf->Cell(20,6,utf8_decode("Turno: "),'RTBL',0,'L');
        $pdf->Cell(30,6,utf8_decode($datos_generales->turno ==1?"Matutino":"Vespertino"),'RBT',0,'L');
        $pdf->Cell(105,6,"Promedio de calificaciones en el ciclo anterior: ",'RBLT',0,'L');
        $pdf->Cell(20,6,$datos_generales->promedio,'RBT',0,'L');
      //beca  no-si especificar1
      $datos_beca=$this->MGetInfo->get_beca($alumno);
      if ($datos_beca->num_rows()>0) {
        $beca=$datos_beca->row();
        $pdf->SetXY($x,$y+=6);
        $pdf->Cell(40,6,utf8_decode("¿Recibió alguna beca? "),'RBL',0,'L');
        $pdf->Cell(40,6,utf8_decode("No (   )    Si ( X )"),'RB',0,'L');
        $pdf->Cell(95,6,utf8_decode("Especificar:".$beca->beca),'RBL',0,'L');
      }else{
        $pdf->SetXY($x,$y+=6);
        $pdf->Cell(40,6,utf8_decode("¿Recibió alguna beca? "),'RBL',0,'L');
        $pdf->Cell(40,6,utf8_decode("No ( X )    Si (   )"),'RB',0,'L');
        $pdf->Cell(95,6,utf8_decode("Especificar:"),'RBL',0,'L');
      }
      //trabaja no-si especificar
      $datos_trabajo=$this->MGetInfo->get_trabajo($alumno);
      if ($datos_trabajo->num_rows()>0) {
        $trabajo=$datos_trabajo->row();
        $pdf->SetXY($x,$y+=6);
        $pdf->Cell(20,6,utf8_decode("¿Trabaja? "),'RBL',0,'L');
        $pdf->Cell(30,6,utf8_decode("No (   )    Si ( X )"),'RB',0,'L');
        $pdf->Cell(125,6,utf8_decode("Especificar: ".$trabajo->trabajo),'RBL',0,'L');
        $pdf->SetXY($x,$y+=6);
        $pdf->Cell(35,4,utf8_decode("En caso de que su"),'RL',0,'L');
        $pdf->SetXY($x,$y+4);
        $pdf->Cell(35,4,utf8_decode("respuesta sea"),'RL',0,'L');
        $pdf->SetXY($x,$y+8);
        $pdf->Cell(35,4,utf8_decode("afirmativa conteste"),'RL',0,'L');
        $pdf->SetXY($x,$y+12);
        $pdf->Cell(35,4,utf8_decode("lo siguiente:"),'BRL',0,'L');

        $pdf->SetXY($x+35,$y);
        $pdf->Cell(140,4,utf8_decode("Nombre de la empresa: ".$trabajo->empresa),'BRL',0,'L');
        $pdf->SetXY($x+35,$y+=4);
        $pdf->Cell(140,4,utf8_decode("Puesto u ocupación: ".$trabajo->puesto),'RBL',0,'L');
        $pdf->SetXY($x+35,$y+=4);
        $pdf->Cell(140,4,utf8_decode("Horario de trabajo: ".$trabajo->horario),'RLB',0,'L');
        $pdf->SetXY($x+35,$y+=4);
        $pdf->Cell(140,4,utf8_decode("Número de horas a la semana: ".$trabajo->horas_semana),'BRL',0,'L');
      }else{
        $pdf->SetXY($x,$y+=6);
        $pdf->Cell(20,6,utf8_decode("¿Trabaja? "),'RBL',0,'L');
        $pdf->Cell(30,6,utf8_decode("No ( X )    Si (  )"),'RB',0,'L');
        $pdf->Cell(125,6,utf8_decode("Especificar: "),'RBL',0,'L');
        $pdf->SetXY($x,$y+=6);
        $pdf->Cell(35,4,utf8_decode("En caso de que su"),'RL',0,'L');
        $pdf->SetXY($x,$y+4);
        $pdf->Cell(35,4,utf8_decode("respuesta sea"),'RL',0,'L');
        $pdf->SetXY($x,$y+8);
        $pdf->Cell(35,4,utf8_decode("afirmativa conteste"),'RL',0,'L');
        $pdf->SetXY($x,$y+12);
        $pdf->Cell(35,4,utf8_decode("lo siguiente:"),'BRL',0,'L');

        $pdf->SetXY($x+35,$y);
        $pdf->Cell(140,4,utf8_decode("Nombre de la empresa: "),'BRL',0,'L');
        $pdf->SetXY($x+35,$y+=4);
        $pdf->Cell(140,4,utf8_decode("Puesto u ocupación: "),'RBL',0,'L');
        $pdf->SetXY($x+35,$y+=4);
        $pdf->Cell(140,4,utf8_decode("Horario de trabajo: "),'RLB',0,'L');
        $pdf->SetXY($x+35,$y+=4);
        $pdf->Cell(140,4,utf8_decode("Número de horas a la semana: "),'BRL',0,'L');
      }
      //empresa, puesto, horario,horas semana

      // DOMICLIO DEL alumno- calle nums colonia del-municipio
      $pdf->SetFont('Arial','B',9);
        $pdf->SetXY($x,$y+=8);
        $pdf->Cell($ancho,4,"DOMICILIO DEL ALUMNO",'BRLT',1,'C');

        $domicilio=$this->MGetInfo->get_domicilio($alumno);

        $pdf->SetXY($x,$y+=4);
        $pdf->SetFont('Arial','',9);
        $pdf->Cell(40,4,utf8_decode("Calle: "),'RL',0,'L');
        if ($domicilio->exterior!=0) {
          $pdf->Cell(30,4,utf8_decode("No. Exterior: ".$domicilio->exterior),'BRL',0,'L');
        }else{
          $pdf->Cell(30,4,utf8_decode("No. Exterior: "),'BRL',0,'L');
        }
        $pdf->Cell(55,4,utf8_decode("Colonia: "),'RL',0,'L');
        $pdf->Cell(50,4,utf8_decode("Delegacion o Municipio:"),'RL',0,'L');

        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(40,4,utf8_decode($domicilio->calle),'RLB',0,'L');

        if ($domicilio->interior!=0) {
          $pdf->Cell(30,4,utf8_decode("No. Interior: ".$domicilio->interior),'BRL',0,'L');
        }else{
          $pdf->Cell(30,4,utf8_decode("No. Interior: "),'BRL',0,'L');
        }

        $pdf->Cell(55,4,utf8_decode($domicilio->colonia),'RBL',0,'L');
        $pdf->Cell(50,4,utf8_decode($domicilio->dom_delegacion),'BRL',0,'L');

      //entidad cp tel casa movil
      $pdf->SetXY($x,$y+=4);
        $pdf->Cell(40,4,utf8_decode("Entidad"),'RL',0,'L');
        $pdf->Cell(30,4,utf8_decode("Código Postal: "),'RL',0,'L');
        $pdf->Cell(55,4,utf8_decode("Teléfono de casa:"),'RL',0,'L');
        $pdf->Cell(50,4,utf8_decode("Teléfono celular:"),'RL',0,'L');

        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(40,4,utf8_decode($domicilio->estado),'RLB',0,'L');
        $pdf->Cell(30,4,utf8_decode($domicilio->codigoPostal),'BRL',0,'L');
        $pdf->Cell(55,4,utf8_decode($domicilio->tel_casa),'RBL',0,'L');
        $pdf->Cell(50,4,utf8_decode($domicilio->celular),'BRL',0,'L');

      //DATOS FAMILIARES
      $pdf->SetFont('Arial','B',9);
        $pdf->SetXY($x,$y+=8);
        $pdf->Cell($ancho,4,"DATOS FAMILIARES",'BRLT',1,'C');
        $pdf->SetFont('Arial','I',8);
        $pdf->SetXY($x,$y+=4);
        $pdf->Cell($ancho,4,utf8_decode("(Únicamente proporcione los datos de las personas que viven en la misma casa)"),'RLB',0,'C');

        $pdf->SetXY($x,$y+=4);
        $pdf->SetFont('Arial','',9);
        $pdf->Cell(33,7,utf8_decode("Apellidos"),'RLB',0,'L');
        $pdf->Cell(36,7,utf8_decode("Nomre (s)"),'RLB',0,'L');
        $pdf->Cell(10,7,utf8_decode("Sexo"),'RLB',0,'L');
        $pdf->Cell(10,7,utf8_decode("Edad"),'RLB',0,'L');
        $pdf->Cell(33,7,utf8_decode("Ocupación"),'RLB',0,'L');
        $pdf->Cell(18,7,utf8_decode("Parentesco"),'RLB',0,'L');
        $pdf->Cell(35,7,utf8_decode("Grado máx de estudios"),'RLB',0,'L');

        $familia=$this->MGetInfo->get_familiares($alumno);
        $pdf->SetXY($x,$y+=6);
        $contador=0;
        foreach ($familia->result() as $family) {
          $pdf->Cell(33,5,utf8_decode($family->apellidos),'RLB',0,'L');
          $pdf->Cell(36,5,utf8_decode($family->nombre),'RLB',0,'L');
          $pdf->Cell(10,5,utf8_decode($family->sexo),'RLB',0,'L');
          $pdf->Cell(10,5,utf8_decode($family->edad),'RLB',0,'L');
          $pdf->Cell(33,5,utf8_decode($family->ocupacion),'RLB',0,'L');
          $pdf->Cell(18,5,utf8_decode($family->parentezco),'RLB',0,'L');
          $pdf->Cell(35,5,utf8_decode($family->grado_estudio),'RLB',0,'L');
          $pdf->SetXY($x,$y+=4);
          if ($contador++==8) {
            break;
          }

        }
        if ($contador<8) {
          for ($i=$contador; $i<8; $i++) {
            $pdf->Cell(33,5,utf8_decode(''),'RLB',0,'L');
            $pdf->Cell(36,5,utf8_decode(''),'RLB',0,'L');
            $pdf->Cell(10,5,utf8_decode(''),'RLB',0,'L');
            $pdf->Cell(10,5,utf8_decode(''),'RLB',0,'L');
            $pdf->Cell(33,5,utf8_decode(''),'RLB',0,'L');
            $pdf->Cell(18,5,utf8_decode(''),'RLB',0,'L');
            $pdf->Cell(35,5,utf8_decode(''),'RLB',0,'L');
            $pdf->SetXY($x,$y+=4);
          }
        }


        $pdf->SetFont('Arial','B',9);
          $pdf->SetXY($x,$y+=15);
          $pdf->Cell($ancho,4,"1/6",'',1,'C');

/////////////////HOJA 2///////////////////////////////////
    $pdf->AddPage();
      $x=20;$y=20;
      $ancho=175;

      $pdf->SetFont('Arial','B',10);
        $pdf->SetXY($x,$y);
        $pdf->Cell($ancho,6,utf8_decode("DATOS DE LA MADRE"),1,0,'C');
        $pdf->SetFont('Arial','B',10);

        //MADRE -nmbre,apellidos
        $pdf->SetFont('Arial','',10);
          $pdf->SetXY($x,$y+=6);
          $pdf->Cell(55,5,"Apellido Paterno:",'RL',0,'L');
          $pdf->Cell(55,5,"Apellido Materno:",'RL',0,'L');
          $pdf->Cell(65,5,"Nombre(s):",'RL',0,'L');

          $pdf->SetXY($x,$y+=5);

        $datos_madre=$this->MGetInfo->get_madre($alumno);
        if ($datos_madre->num_rows()>0) {
          $madre=$datos_madre->row();
          $pdf->Cell(55,6,utf8_decode($madre->paterno_padre),'RLB',0,'L');
          $pdf->Cell(55,6,utf8_decode($madre->materno_padre),'RLB',0,'L');
          $pdf->Cell(65,6,utf8_decode($madre->nombre_padre),'RLB',0,'L');

          $pdf->SetXY($x,$y+=6);
            $pdf->Cell(40,5,"Fecha de Nacimiento:",'RL',0,'L');
            $pdf->Cell(60,5,"Lugar de Nacimiento:",'RL',0,'L');
            $pdf->Cell(75,5,utf8_decode("Delegación o municipio:"),'RL',0,'L');

            $pdf->SetXY($x,$y+=5);
            $pdf->Cell(40,6,utf8_decode($madre->fecha_nacimiento),'RLB',0,'L');
            $pdf->Cell(60,6,utf8_decode($madre->lugar_nacimiento),'RLB',0,'L');
            $pdf->Cell(75,6,utf8_decode($madre->mun_delegacion),'RLB',0,'L');
//
            $pdf->SetXY($x,$y+=6);
              $pdf->Cell(35,4,"Entidad Federativa:",'RL',0,'L');
              $pdf->Cell(35,4,utf8_decode("País:"),'RL',0,'L');

              $pdf->Cell(15,8,utf8_decode("CURP:"),'BRL',0,'L');
              for ($i=0; $i <18 ; $i++) {
                $pdf->Cell(5,8,$madre->curp[$i],'RBL',0,'L');
              }

              $pdf->SetXY($x,$y+=4);
              $pdf->Cell(35,4,utf8_decode($madre->estado),'RLB',0,'L');
              $pdf->Cell(35,4,utf8_decode($madre->pais),'RLB',0,'L');

              //
              $pdf->SetFont('Arial','B',10);
                $pdf->SetXY($x,$y+=6);
                $pdf->Cell($ancho,6,utf8_decode("Grado máximo de estudios"),1,0,'C');

                $pdf->SetFont('Arial','',10);

                $pdf->SetXY($x,$y+=6);
                $arr_estudios=["Sin estudios", "Secundaria concluída","Tec. Sup. Universitario",
                              "Maestría","Primaria incompleta","Carrera técnica","Licenciatura incompleta",
                              "Doctorado","Primaria concluída","Bachillerato incompleto","Licenciatura concluía",
                              "Otro","Secundaria incompleta","Bachillerato concluído","Especialidad","Especificar"];

                $grado=$madre->grado_estudio;
                $p="";
                for ($i=0; $i<16 ; $i++) {
                  $p=$grado==$arr_estudios[$i]?"X":" ";
                  $pdf->Cell($ancho/4,5,utf8_decode("($p)".$arr_estudios[$i++]),'RBL',0,'L');
                  $p=$grado==$arr_estudios[$i]?"X":" ";
                  $pdf->Cell($ancho/4,5,utf8_decode("($p)".$arr_estudios[$i++]),'RBL',0,'L');
                  $p=$grado==$arr_estudios[$i]?"X":" ";
                  $pdf->Cell($ancho/4,5,utf8_decode("($p)".$arr_estudios[$i++]),'RBL',0,'L');
                  $p=$grado==$arr_estudios[$i]?"X":" ";
                  $pdf->Cell($ancho/4,5,utf8_decode("($p)".$arr_estudios[$i]),'RBL',0,'L');
                  $pdf->SetXY($x,$y+=5);
                }

                if ($madre->trabaja==1) {
                  $pdf->Cell(80,5,"Trabaja: No ( ) Si (X)",'RLB',0,'L');
                  $pdf->Cell(95,5,utf8_decode("Número de horas a la semana: $madre->horas_trabajo"),'RLB',0,'L');
                  $pdf->SetXY($x,$y+=5);
                  $pdf->Cell(60,5,"Tel. de casa: $madre->tel_casa",'RLB',0,'L');
                  $pdf->Cell(60,5,"Tel. del trabajo: $madre->tel_trabajo",'RLB',0,'L');
                  $pdf->Cell(55,5,"Cel.: $madre->cel",'RLB',0,'L');
                }else{
                  $pdf->Cell(80,5,"Trabaja: No (X) Si ( )",'RLB',0,'L');
                  $pdf->Cell(95,5,utf8_decode("Número de horas a la semana: "),'RLB',0,'L');
                  $pdf->SetXY($x,$y+=5);
                  $pdf->Cell(60,5,"Tel. de casa: ",'RLB',0,'L');
                  $pdf->Cell(60,5,"Tel. del trabajo: ",'RLB',0,'L');
                  $pdf->Cell(55,5,"Cel.: ",'RLB',0,'L');
                }
        }else{
          $pdf->Cell(55,6,utf8_decode(""),'RLB',0,'L');
          $pdf->Cell(55,6,utf8_decode(""),'RLB',0,'L');
          $pdf->Cell(65,6,utf8_decode(""),'RLB',0,'L');

          $pdf->SetXY($x,$y+=6);
            $pdf->Cell(40,5,"Fecha de Nacimiento:",'RL',0,'L');
            $pdf->Cell(60,5,"Lugar de Nacimiento:",'RL',0,'L');
            $pdf->Cell(75,5,utf8_decode("Delegación o municipio:"),'RL',0,'L');

            $pdf->SetXY($x,$y+=5);
            $pdf->Cell(40,6,utf8_decode(""),'RLB',0,'L');
            $pdf->Cell(60,6,utf8_decode(""),'RLB',0,'L');
            $pdf->Cell(75,6,utf8_decode(""),'RLB',0,'L');
            $pdf->SetXY($x,$y+=6);
              $pdf->Cell(35,4,"Entidad Federativa:",'RL',0,'L');
              $pdf->Cell(35,4,utf8_decode("País:"),'RL',0,'L');

              $pdf->Cell(15,8,utf8_decode("CURP:"),'BRL',0,'L');
              for ($i=0; $i <18 ; $i++) {
                $pdf->Cell(5,8,utf8_decode($i),'RBL',0,'L');
              }

              $pdf->SetXY($x,$y+=4);
              $pdf->Cell(35,4,utf8_decode(""),'RLB',0,'L');
              $pdf->Cell(35,4,utf8_decode(""),'RLB',0,'L');

              $pdf->SetFont('Arial','B',10);
                $pdf->SetXY($x,$y+=6);
                $pdf->Cell($ancho,6,utf8_decode("Grado máximo de estudios"),1,0,'C');

                $pdf->SetFont('Arial','',10);

                $pdf->SetXY($x,$y+=6);
                $arr_estudios=["Sin estudios", "Secundaria concluída","Tec. Sup. Universitario",
                              "Maestría","Primaria incompleta","Carrera técnica","Licenciatura incompleta",
                              "Doctorado","Primaria concluída","Bachillerato incompleto","Licenciatura concluía",
                              "Otro","Secundaria incompleta","Bachillerato concluído","Especialidad","Especificar"];


                for ($i=0; $i<16 ; $i++) {
                  $pdf->Cell($ancho/4,5,utf8_decode("( )".$arr_estudios[$i++]),'RBL',0,'L');
                  $pdf->Cell($ancho/4,5,utf8_decode("( )".$arr_estudios[$i++]),'RBL',0,'L');
                  $pdf->Cell($ancho/4,5,utf8_decode("( )".$arr_estudios[$i++]),'RBL',0,'L');
                  $pdf->Cell($ancho/4,5,utf8_decode("( )".$arr_estudios[$i]),'RBL',0,'L');
                  $pdf->SetXY($x,$y+=5);
                }
                $pdf->Cell(80,5,"Trabaja: No ( ) Si ( )",'RLB',0,'L');
                $pdf->Cell(95,5,utf8_decode("Número de horas a la semana: "),'RLB',0,'L');
                $pdf->SetXY($x,$y+=5);
                $pdf->Cell(60,5,"Tel. de casa: ",'RLB',0,'L');
                $pdf->Cell(60,5,"Tel. del trabajo: ",'RLB',0,'L');
                $pdf->Cell(55,5,"Cel.: ",'RLB',0,'L');
        }

          //datos del padre
            $pdf->SetFont('Arial','B',10);
              $pdf->SetXY($x,$y+=10);
              $pdf->Cell($ancho,6,utf8_decode("DATOS DEL PADRE"),1,0,'C');
              $pdf->SetFont('Arial','B',10);

            //MADRE -nmbre,apellidos
            $pdf->SetFont('Arial','',10);
              $pdf->SetXY($x,$y+=6);
              $pdf->Cell(55,5,"Apellido Paterno:",'RL',0,'L');
              $pdf->Cell(55,5,"Apellido Materno:",'RL',0,'L');
              $pdf->Cell(65,5,"Nombre(s):",'RL',0,'L');

              $pdf->SetXY($x,$y+=5);
              $datos_madre=$this->MGetInfo->get_padres($alumno);
              if ($datos_madre->num_rows()>0) {
                $padre=$datos_madre->row();
                $pdf->Cell(55,6,utf8_decode($padre->paterno_padre),'RLB',0,'L');
                $pdf->Cell(55,6,utf8_decode($padre->materno_padre),'RLB',0,'L');
                $pdf->Cell(65,6,utf8_decode($padre->nombre_padre),'RLB',0,'L');

                $pdf->SetXY($x,$y+=6);
                  $pdf->Cell(40,5,"Fecha de Nacimiento:",'RL',0,'L');
                  $pdf->Cell(60,5,"Lugar de Nacimiento:",'RL',0,'L');
                  $pdf->Cell(75,5,utf8_decode("Delegación o municipio:"),'RL',0,'L');

                  $pdf->SetXY($x,$y+=5);
                  $pdf->Cell(40,6,utf8_decode($padre->fecha_nacimiento),'RLB',0,'L');
                  $pdf->Cell(60,6,utf8_decode($padre->lugar_nacimiento),'RLB',0,'L');
                  $pdf->Cell(75,6,utf8_decode($padre->mun_delegacion),'RLB',0,'L');
      //
                  $pdf->SetXY($x,$y+=6);
                    $pdf->Cell(35,4,"Entidad Federativa:",'RL',0,'L');
                    $pdf->Cell(35,4,utf8_decode("País:"),'RL',0,'L');

                    $pdf->Cell(15,8,utf8_decode("CURP:"),'BRL',0,'L');
                    for ($i=0; $i <18 ; $i++) {
                      $pdf->Cell(5,8,$padre->curp[$i],'RBL',0,'L');
                    }

                    $pdf->SetXY($x,$y+=4);
                    $pdf->Cell(35,4,utf8_decode($padre->estado),'RLB',0,'L');
                    $pdf->Cell(35,4,utf8_decode($padre->pais),'RLB',0,'L');

                    //
                    $pdf->SetFont('Arial','B',10);
                      $pdf->SetXY($x,$y+=6);
                      $pdf->Cell($ancho,6,utf8_decode("Grado máximo de estudios"),1,0,'C');

                      $pdf->SetFont('Arial','',10);

                      $pdf->SetXY($x,$y+=6);
                      $arr_estudios=["Sin estudios", "Secundaria concluída","Tec. Sup. Universitario",
                                    "Maestría","Primaria incompleta","Carrera técnica","Licenciatura incompleta",
                                    "Doctorado","Primaria concluída","Bachillerato incompleto","Licenciatura concluía",
                                    "Otro","Secundaria incompleta","Bachillerato concluído","Especialidad","Especificar"];

                      $grado=$padre->grado_estudio;
                      $p="";
                      for ($i=0; $i<16 ; $i++) {
                        $p=$grado==$arr_estudios[$i]?"X":" ";
                        $pdf->Cell($ancho/4,5,utf8_decode("($p)".$arr_estudios[$i++]),'RBL',0,'L');
                        $p=$grado==$arr_estudios[$i]?"X":" ";
                        $pdf->Cell($ancho/4,5,utf8_decode("($p)".$arr_estudios[$i++]),'RBL',0,'L');
                        $p=$grado==$arr_estudios[$i]?"X":" ";
                        $pdf->Cell($ancho/4,5,utf8_decode("($p)".$arr_estudios[$i++]),'RBL',0,'L');
                        $p=$grado==$arr_estudios[$i]?"X":" ";
                        $pdf->Cell($ancho/4,5,utf8_decode("($p)".$arr_estudios[$i]),'RBL',0,'L');
                        $pdf->SetXY($x,$y+=5);
                      }

                      if ($padre->trabaja==1) {
                        $pdf->Cell(80,5,"Trabaja: No ( ) Si (X)",'RLB',0,'L');
                        $pdf->Cell(95,5,utf8_decode("Número de horas a la semana: $padre->horas_trabajo"),'RLB',0,'L');
                        $pdf->SetXY($x,$y+=5);
                        $pdf->Cell(60,5,"Tel. de casa: $padre->tel_casa",'RLB',0,'L');
                        $pdf->Cell(60,5,"Tel. del trabajo: $padre->tel_trabajo",'RLB',0,'L');
                        $pdf->Cell(55,5,"Cel.: $padre->cel",'RLB',0,'L');
                      }else{
                        $pdf->Cell(80,5,"Trabaja: No (X) Si ( )",'RLB',0,'L');
                        $pdf->Cell(95,5,utf8_decode("Número de horas a la semana: "),'RLB',0,'L');
                        $pdf->SetXY($x,$y+=5);
                        $pdf->Cell(60,5,"Tel. de casa: ",'RLB',0,'L');
                        $pdf->Cell(60,5,"Tel. del trabajo: ",'RLB',0,'L');
                        $pdf->Cell(55,5,"Cel.: ",'RLB',0,'L');
                      }
              }else{
                $pdf->Cell(55,6,utf8_decode(""),'RLB',0,'L');
                $pdf->Cell(55,6,utf8_decode(""),'RLB',0,'L');
                $pdf->Cell(65,6,utf8_decode(""),'RLB',0,'L');

                $pdf->SetXY($x,$y+=6);
                  $pdf->Cell(40,5,"Fecha de Nacimiento:",'RL',0,'L');
                  $pdf->Cell(60,5,"Lugar de Nacimiento:",'RL',0,'L');
                  $pdf->Cell(75,5,utf8_decode("Delegación o municipio:"),'RL',0,'L');

                  $pdf->SetXY($x,$y+=5);
                  $pdf->Cell(40,6,utf8_decode(""),'RLB',0,'L');
                  $pdf->Cell(60,6,utf8_decode(""),'RLB',0,'L');
                  $pdf->Cell(75,6,utf8_decode(""),'RLB',0,'L');
                  $pdf->SetXY($x,$y+=6);
                    $pdf->Cell(35,4,"Entidad Federativa:",'RL',0,'L');
                    $pdf->Cell(35,4,utf8_decode("País:"),'RL',0,'L');

                    $pdf->Cell(15,8,utf8_decode("CURP:"),'BRL',0,'L');
                    for ($i=0; $i <18 ; $i++) {
                      $pdf->Cell(5,8,utf8_decode($i),'RBL',0,'L');
                    }

                    $pdf->SetXY($x,$y+=4);
                    $pdf->Cell(35,4,utf8_decode(""),'RLB',0,'L');
                    $pdf->Cell(35,4,utf8_decode(""),'RLB',0,'L');

                    $pdf->SetFont('Arial','B',10);
                      $pdf->SetXY($x,$y+=6);
                      $pdf->Cell($ancho,6,utf8_decode("Grado máximo de estudios"),1,0,'C');

                      $pdf->SetFont('Arial','',10);

                      $pdf->SetXY($x,$y+=6);
                      $arr_estudios=["Sin estudios", "Secundaria concluída","Tec. Sup. Universitario",
                                    "Maestría","Primaria incompleta","Carrera técnica","Licenciatura incompleta",
                                    "Doctorado","Primaria concluída","Bachillerato incompleto","Licenciatura concluía",
                                    "Otro","Secundaria incompleta","Bachillerato concluído","Especialidad","Especificar"];


                      for ($i=0; $i<16 ; $i++) {
                        $pdf->Cell($ancho/4,5,utf8_decode("( )".$arr_estudios[$i++]),'RBL',0,'L');
                        $pdf->Cell($ancho/4,5,utf8_decode("( )".$arr_estudios[$i++]),'RBL',0,'L');
                        $pdf->Cell($ancho/4,5,utf8_decode("( )".$arr_estudios[$i++]),'RBL',0,'L');
                        $pdf->Cell($ancho/4,5,utf8_decode("( )".$arr_estudios[$i]),'RBL',0,'L');
                        $pdf->SetXY($x,$y+=5);
                      }
                      $pdf->Cell(80,5,"Trabaja: No ( ) Si ( )",'RLB',0,'L');
                      $pdf->Cell(95,5,utf8_decode("Número de horas a la semana: "),'RLB',0,'L');
                      $pdf->SetXY($x,$y+=5);
                      $pdf->Cell(60,5,"Tel. de casa: ",'RLB',0,'L');
                      $pdf->Cell(60,5,"Tel. del trabajo: ",'RLB',0,'L');
                      $pdf->Cell(55,5,"Cel.: ",'RLB',0,'L');
              }

        //INGRESOS FAMILIARES
        $pdf->SetFont('Arial','B',10);
          $pdf->SetXY($x,$y+=10);
          $pdf->Cell($ancho,6,utf8_decode("INGRESOS FAMILIARES"),1,0,'C');

          $pdf->SetFont('Arial','',10);
          $pdf->SetXY($x,$y+=6);

          $pdf->Cell(101,5,utf8_decode("¿Cuántas personas que viven en su casa tienen ingresos?"),1,0,'L');
          $ing_familiares=$this->MGetInfo->get_ingr_familiares($alumno);
          $ing_familiares=$ing_familiares->row();
          $p=$ing_familiares->cantidad_personas==1?"X":" ";
          $pdf->Cell(11,5,utf8_decode("1($p)"),1,0,'C');
          $p=$ing_familiares->cantidad_personas==2?"X":" ";
          $pdf->Cell(11,5,utf8_decode("2($p)"),1,0,'C');
          $p=$ing_familiares->cantidad_personas==3?"X":" ";
          $pdf->Cell(11,5,utf8_decode("3($p)"),1,0,'C');
          $p=$ing_familiares->cantidad_personas==4?"X":" ";
          $pdf->Cell(11,5,utf8_decode("4($p)"),1,0,'C');
          $p=$ing_familiares->cantidad_personas==5?"X":" ";
          $pdf->Cell(30,5,utf8_decode("5 o más($p)"),1,0,'C');

          $pdf->SetXY($x,$y+=5);
          $pdf->Cell(75,8,utf8_decode("¿De quién depende económicamente?"),1,0,'L');
          $p=$ing_familiares->depenencia=="Padre"?"X":" ";
          $pdf->Cell(20,8,utf8_decode("Padre($p)"),1,0,'L');
          $p=$ing_familiares->depenencia=="Madre"?"X":" ";
          $pdf->Cell(25,8,utf8_decode("Madre($p)"),1,0,'L');
          $p=$ing_familiares->depenencia=="Hermano(a)"?"X":" ";
          $pdf->Cell(25,8,utf8_decode("Hermano($p)"),1,0,'L');
          if ($ing_familiares->depenencia!="Padre" && $ing_familiares->depenencia!="Madre" && $ing_familiares->depenencia!="Hermano(a)") {
            $p=$ing_familiares->depenencia=="Padre"?"X":" ";
            $pdf->Cell(30,4,utf8_decode("Otro, especificar"),'LR',0,'L');
            $pdf->SetXY(165,$y+4);
            $pdf->Cell(30,4,utf8_decode($ing_familiares->depenencia),'LRB',0,'L');
          }else{
            $p=$ing_familiares->depenencia=="Padre"?"X":" ";
            $pdf->Cell(30,4,utf8_decode("Otro, especificar"),'LR',0,'L');
            $pdf->SetXY(165,$y+4);
            $pdf->Cell(30,4,utf8_decode(""),'LRB',0,'L');
          }

        $pdf->SetFont('Arial','B',10);
          $pdf->SetXY($x,$y+=13);
          $pdf->Cell($ancho,6,utf8_decode("INGRESOS FAMILIARES MENSUALES"),1,0,'C');

          $pdf->SetFont('Arial','',10);
          $pdf->SetXY($x,$y+=6);
          $pdf->Cell(60,4,'','RL',0,'L');
          $pdf->Cell(90,4,utf8_decode('Ingreso mensual en pesos(Marque con una "X")'),1,0,'C');
          $pdf->Cell(25,4,'Porcentaje','RL',0,'C');
          $pdf->SetXY($x,$y+=4);
          $pdf->Cell(60,4,'Persona con ingresos','RL',0,'C');
          $pdf->Cell(18,4,'Hasta','RL',0,'C');
          $pdf->Cell(18,4,'$2,001 a','RL',0,'C');
          $pdf->Cell(18,4,'$6,001 a','RL',0,'C');
          $pdf->Cell(18,4,'$10,001 a','RL',0,'C');
          $pdf->Cell(18,4,utf8_decode('Más de'),'RL',0,'C');
          $pdf->Cell(25,4,'destinado al','RL',0,'C');

          $pdf->SetXY($x,$y+=4);
          $pdf->Cell(60,4,utf8_decode('económicos'),'RBL',0,'C');
          $pdf->Cell(18,4,'$2,000','RLB',0,'C');
          $pdf->Cell(18,4,'$6,000','RLB',0,'C');
          $pdf->Cell(18,4,'$10,000','RBL',0,'C');
          $pdf->Cell(18,4,'$20,000','RBL',0,'C');
          $pdf->Cell(18,4,'$30,000','RLB',0,'C');
          $pdf->Cell(25,4,'gasto familiar','RLB',0,'C');
          //INGRESSOS FAMILIARES MENSUALES

  $contador=0;
  $familia=$this->MGetInfo->get_ingr_mensuales($alumno);
  foreach ($familia->result() as $family) {

    $pdf->SetXY($x,$y+=4);
    $pdf->Cell(60,4,utf8_decode($family->personas_ingreso),'RBL',0,'C');
    $p=$family->opcion=="Hasta $2,000" ? "X":" ";
    $pdf->Cell(18,4,"$p",'RLB',0,'C');
    $p=$family->opcion=="$2,001 a $6,000"?"X":" ";
    $pdf->Cell(18,4,"$p",'RLB',0,'C');
    $p=$family->opcion=="$6,001 a $10,000"?"X":" ";
    $pdf->Cell(18,4,"$p",'RBL',0,'C');
    $p=$family->opcion=="$10,001 a $20,000"?"X":" ";
    $pdf->Cell(18,4,"$p",'RBL',0,'C');
    $p=$family->opcion=="$20,001 a $30,000"?"X":" ";
    $pdf->Cell(18,4,"$p",'RLB',0,'C');

    $pdf->Cell(25,4,"$family->porcentaje_destinado %",'RLB',0,'C');

    if ($contador++==5) {
      break;
    }
  }
  if ($contador<8) {
    for ($i=$contador; $i<5; $i++) {
      $pdf->SetXY($x,$y+=4);
      $pdf->Cell(60,4,utf8_decode(''),'RBL',0,'C');
      $pdf->Cell(18,4,'','RLB',0,'C');
      $pdf->Cell(18,4,'','RLB',0,'C');
      $pdf->Cell(18,4,'','RBL',0,'C');
      $pdf->Cell(18,4,'','RBL',0,'C');
      $pdf->Cell(18,4,'','RLB',0,'C');
      $pdf->Cell(25,4,'','RLB',0,'C');
    }
  }


        $pdf->SetXY($x,$y+=17);
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell($ancho,5,'2/6',0,0,'C');
/////////////pagina 3
    $pdf->AddPage();
      $x=20;$y=20;
      $ancho=175;

      $pdf->SetXY($x,$y);
      $pdf->SetFont('Arial','B',10);
      $pdf->Cell($ancho,5,utf8_decode('AMBIENTE SOCIOECONOMICO'),1,0,'C');
      $pdf->SetXY($x,$y+=5);
      $pdf->SetFont('Arial','I',10);
      $pdf->Cell($ancho,4,'Marque con una "X" los bienes y servicios que tiene su vivienda',1,0,'C');
      $pdf->SetXY($x,$y+=4);
      $pdf->SetFont('Arial','',10);
      $socioeconomico=$this->MGetInfo->get_socioeconomico($alumno);
      $socioeconomico=$socioeconomico->row();

      $arr_socioeconomico=["Agua Potable","Computadora","Drenaje","Laptop","Electricidad",
      "Tableta","Lavadora de ropa","Internet","Estufa de gas","Televisión de paga(Sky, Dish, Cable)",
      "Horno de microondas","VHS","Refrigerador","DVD","Línea telefónica","Blu-Ray"];
      $i=0;
        if ($socioeconomico->agua_potable==1) {
          $pdf->Cell(60,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
        }else{
          $pdf->Cell(60,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
        }
        if ($socioeconomico->computadora==1) {
          $pdf->Cell(64,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
        }else{
          $pdf->Cell(65,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
        }
        $pdf->SetXY($x,$y+=5);
        if ($socioeconomico->drenaje==1) {
          $pdf->Cell(60,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
        }else{
          $pdf->Cell(60,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
        }
        if ($socioeconomico->laptop==1) {
          $pdf->Cell(64,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
        }else{
          $pdf->Cell(65,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
        }
        $pdf->SetXY($x,$y+=5);
        if ($socioeconomico->electricidad==1) {
          $pdf->Cell(60,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
        }else{
          $pdf->Cell(60,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
        }
        if ($socioeconomico->tableta==1) {
          $pdf->Cell(64,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
        }else{
          $pdf->Cell(65,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
        }
        $pdf->SetXY($x,$y+=5);
        if ($socioeconomico->lavadora==1) {
          $pdf->Cell(60,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
        }else{
          $pdf->Cell(60,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
        }
        if ($socioeconomico->internet==1) {
          $pdf->Cell(65,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
        }else{
          $pdf->Cell(65,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
        }
        $pdf->SetXY($x,$y+=5);
        if ($socioeconomico->estufa==1) {
          $pdf->Cell(60,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
        }else{
          $pdf->Cell(60,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
        }
        if ($socioeconomico->tv_paga==1) {
          $pdf->Cell(64,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
        }else{
          $pdf->Cell(65,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
        }
        $pdf->SetXY($x,$y+=5);
        if ($socioeconomico->horno==1) {
          $pdf->Cell(60,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
        }else{
          $pdf->Cell(60,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
        }
        if ($socioeconomico->vhs==1) {
          $pdf->Cell(64,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
        }else{
          $pdf->Cell(65,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
        }
        $pdf->SetXY($x,$y+=5);
        if ($socioeconomico->refrigerador==1) {
          $pdf->Cell(60,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
        }else{
          $pdf->Cell(60,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
        }
        if ($socioeconomico->dvd==1) {
          $pdf->Cell(64,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
        }else{
          $pdf->Cell(65,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
        }
        $pdf->SetXY($x,$y+=5);
        if ($socioeconomico->linea_telefonica==1) {
          $pdf->Cell(60,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
        }else{
          $pdf->Cell(60,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
        }
        if ($socioeconomico->blue_ray==1) {
          $pdf->Cell(64,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
        }else{
          $pdf->Cell(65,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
          $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
        }
        $pdf->SetXY($x,$y+=5);

      $pdf->Cell(90,5,'Para tu uso personal cuentas con:','RLB',0,'L');
      $pdf->Cell(85,5,utf8_decode('¿Cuántos focos hay dentro de su vivienda?'),'RLB',0,'C');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell(65,5,utf8_decode('Smartphone'),'RLB',0,'L');
      if ($socioeconomico->reproductor_personal==1) {
        $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
      }else{
        $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
      }

      $p=$socioeconomico->num_focos==1?"X":" ";
      $pdf->Cell(13,5,"1 ($p)",'RLB',0,'C');
      $p=$socioeconomico->num_focos==2?"X":" ";
      $pdf->Cell(13,5,"2 ($p)",'RLB',0,'C');
      $p=$socioeconomico->num_focos==3?"X":" ";
      $pdf->Cell(13,5,"3 ($p)",'RLB',0,'C');
      $p=$socioeconomico->num_focos==4?"X":" ";
      $pdf->Cell(13,5,"4 ($p)",'RLB',0,'C');
      $p=$socioeconomico->num_focos==5?"X":" ";
      $pdf->Cell(13,5,"5 ($p)",'RLB',0,'C');
      $p=$socioeconomico->num_focos==6?"X":" ";
      $pdf->Cell(20,5,utf8_decode("6 o Más($p)"),'RLB',0,'C');

      $pdf->SetXY($x,$y+=5);
      $pdf->Cell(65,5,utf8_decode('Tableta'),'RLB',0,'L');
      if ($socioeconomico->tableta_personal==1) {
        $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
      }else{
        $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
      }

      $pdf->Cell(85,5,utf8_decode('¿Cuántos televisores hay en tu vivienda?'),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell(65,5,utf8_decode('Laptop'),'RLB',0,'L');
      if ($socioeconomico->laptop_personal==1) {
        $pdf->Cell(25,5,'No ( ) Si (X)','RLB',0,'C');
      }else{
        $pdf->Cell(25,5,'No (X) Si ( )','RLB',0,'C');
      }
      $p=$socioeconomico->num_tvs==1?"X":" ";
      $pdf->Cell(13,5,"1 ($p)",'RLB',0,'C');
      $p=$socioeconomico->num_tvs==2?"X":" ";
      $pdf->Cell(13,5,"2 ($p)",'RLB',0,'C');
      $p=$socioeconomico->num_tvs==3?"X":" ";
      $pdf->Cell(13,5,"3 ($p)",'RLB',0,'C');
      $p=$socioeconomico->num_tvs==4?"X":" ";
      $pdf->Cell(13,5,"4 ($p)",'RLB',0,'C');
      $p=$socioeconomico->num_tvs==5?"X":" ";
      $pdf->Cell(13,5,"5 ($p)",'RLB',0,'C');
      $p=$socioeconomico->num_tvs==6?"X":" ";
      $pdf->Cell(20,5,utf8_decode("6 o Más($p)"),'RLB',0,'C');

      $salud=$this->MGetInfo->get_salud1($alumno);
      $salud=$salud->row();
      $pdf->SetXY($x,$y+=10);
      $pdf->SetFont('Arial','B',10);
      $pdf->Cell($ancho,5,'SALUD',1,0,'C');
      $pdf->SetXY($x,$y+=5);
      $pdf->SetFont('Arial','I',9);
      $pdf->Cell($ancho,5,utf8_decode('Señala con una "X" cuál de las siguientes figuras corresponde a la percepción que tienes de tu apariencia física'),1,0,'C');
      $pdf->SetXY($x,$y+=5);
      $pdf->SetFont('Arial','',10);
      $p=$salud->apariencia==1?"X":" ";
      $pdf->Cell(58,5,"Endomorfo o grueso ($p)",'RLB',0,'C');
      $p=$salud->apariencia==2?"X":" ";
      $pdf->Cell(59,5,"Ectomorfo o delgado ($p)",'RLB',0,'C');
      $p=$salud->apariencia==3?"X":" ";
      $pdf->Cell(58,5,utf8_decode("Mesomorfo o atlético ($p)"),'RLB',0,'C');
      $pdf->SetXY($x,$y+=5);
      //imagen
      $pdf->Image('C:\xampp\htdocs\SIREANI\application\views\img\cuerpo.jpg',$x+40,115,100);
      $pdf->SetXY($x,$y);
      $pdf->Cell($ancho,50,'','RLB',0,'C');

      $pdf->SetXY($x,$y+=50);
      $pdf->Cell(40,5,"Estatura: $salud->estatura",'RLB',0,'L');
      $pdf->Cell($ancho-40,5,utf8_decode('Durante el último semestre, ¿ha tenido alún problema de slaud? '),'RLB',0,'C');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell(40,5,'Peso: '.$salud->peso,'RLB',0,'L');
      $problem_salud=$this->MGetInfo->get_problema_salud($salud->id_salud);
      if ($problem_salud->num_rows()>0) {
        $problem_salud=$problem_salud->row();
        $pdf->Cell(30,5,'Si (X) No (  )','RLB',0,'C');
        $pdf->Cell($ancho-70,5,utf8_decode('Especificar: '.$problem_salud->descripcion),'RLB',0,'L');
        $pdf->SetXY($x,$y+=5);
      }else{
        $pdf->Cell(30,5,'Si (  ) No (X)','RLB',0,'C');
        $pdf->Cell($ancho-70,5,utf8_decode('Especificar: '),'RLB',0,'L');
        $pdf->SetXY($x,$y+=5);
      }
      $servicios=$this->MGetInfo->get_s_salud($salud->id_salud);
      $servicios=$servicios->row();
      $pdf->Cell($ancho,5,utf8_decode('¿Actualmente cuenta con algún tipo de servicio de salud?'),'RLB',0,'C');
      $pdf->SetXY($x,$y+=5);
      $p=$servicios->servicio==1?"X":" ";
      $pdf->Cell(40,5,utf8_decode('('.$p.') IMSS'),'RLB',0,'L');
      $p=$servicios->servicio==4?"X":" ";
      $pdf->Cell(60,5,utf8_decode('('.$p.') Ejército o Marina'),'RLB',0,'L');
      $p=$servicios->servicio==7?"X":" ";
      $pdf->Cell(75,5,utf8_decode('('.$p.') Médico Privado'),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $p=$servicios->servicio==2?"X":" ";
      $pdf->Cell(40,5,utf8_decode('('.$p.') ISSTE'),'RLB',0,'L');
      $p=$servicios->servicio==5?"X":" ";
      $pdf->Cell(60,5,utf8_decode('('.$p.') Secretaría de Salud'),'RLB',0,'L');
      $p=$servicios->servicio>=8?"X":" ";
        $pdf->Cell(75,5,utf8_decode('('.$p.') Otro, especifique: '),'RL',0,'L');
      $pdf->SetXY($x,$y+=5);
      $p=$servicios->servicio==3?"X":" ";
      $pdf->Cell(40,5,utf8_decode('('.$p.') PEMEX'),'RLB',0,'L');
      $p=$servicios->servicio==6?"X":" ";
      $pdf->Cell(60,5,utf8_decode('('.$p.') Seguro Popular'),'RLB',0,'L');
      $p=$servicios->servicio>=8?$servicios->serv:" ";
      $pdf->Cell(75,5,utf8_decode(' '),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('¿Con qué frecuencia asiste al médico?'),'RLB',0,'C');
      $pdf->SetXY($x,$y+=5);
      $p=$salud->frec_medico==5?"X":" ";
      $pdf->Cell(35,5,utf8_decode('('.$p.') Cada semana'),'RLB',0,'L');
      $p=$salud->frec_medico==6?"X":" ";
      $pdf->Cell(30,5,utf8_decode('('.$p.') Cada mes'),'RLB',0,'L');
      $p=$salud->frec_medico==7?"X":" ";
      $pdf->Cell(40,5,utf8_decode('('.$p.') Cada seis meses'),'RLB',0,'L');
      $p=$salud->frec_medico==8?"X":" ";
      $pdf->Cell(30,5,utf8_decode('('.$p.') Cada año'),'RLB',0,'L');
      $p=$salud->frec_medico==9?"X":" ";
      $pdf->Cell(40,5,utf8_decode('('.$p.') Cuando me enfermo'),'RLB',0,'L');

      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('¿Con qué frecuencia asiste al dentista?'),'RLB',0,'C');
      $pdf->SetXY($x,$y+=5);
      $p=$salud->frec_medico==5?"X":" ";
      $pdf->Cell(35,5,utf8_decode('('.$p.') Cada semana'),'RLB',0,'L');
      $p=$salud->frec_medico==6?"X":" ";
      $pdf->Cell(30,5,utf8_decode('('.$p.') Cada mes'),'RLB',0,'L');
      $p=$salud->frec_medico==7?"X":" ";
      $pdf->Cell(40,5,utf8_decode('('.$p.') Cada seis meses'),'RLB',0,'L');
      $p=$salud->frec_medico==8?"X":" ";
      $pdf->Cell(30,5,utf8_decode('('.$p.') Cada año'),'RLB',0,'L');
      $p=$salud->frec_medico==9?"X":" ";
      $pdf->Cell(40,5,utf8_decode('('.$p.') Cuando lo necesito'),'RLB',0,'L');

      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('¿Necesita anteojos?'),'RLB',0,'C');
      $pdf->SetXY($x,$y+=5);
      $p=$salud->anteojos==10?"X":" ";
      $pdf->Cell(37,5,utf8_decode('('.$p.') No los necesito'),'RLB',0,'L');
      $p=$salud->anteojos==11?"X":" ";
      $pdf->Cell(33,5,utf8_decode('('.$p.') Sólo para leer'),'RLB',0,'L');
      $p=$salud->anteojos==12?"X":" ";
      $pdf->Cell(25,5,utf8_decode('('.$p.') Si los uso'),'RLB',0,'L');
      $p=$salud->anteojos==13?"X":" ";
      $pdf->Cell(60,5,utf8_decode('('.$p.') Si los necesito pero no los uso'),'RLB',0,'L');
      $p=$salud->anteojos==14?"X":" ";
      $pdf->Cell(20,5,utf8_decode('('.$p.') No lo sé'),'RLB',0,'L');
      $tratamiento=$this->MGetInfo->get_tratamiento($salud->id_salud);
      if ($tratamiento->num_rows()>0) {
        $tratamiento=$tratamiento->row();
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode('¿Actualmente se encuentra bajo algún tratamiento médico? No( ) Si(X)'),'RLB',0,'L');

        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode('En caso afirmativo. ¿Cuál? '.$tratamiento->descripcion),'RLB',0,'L');
      }else{
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode('¿Actualmente se encuentra bajo algún tratamiento médico? No( ) Si( )'),'RLB',0,'L');

        $pdf->SetXY($x,$y+=5);
        $pdf->Cell($ancho,5,utf8_decode('En caso afirmativo. ¿Cuál? '),'RLB',0,'L');
      }
      $discapacidad=$this->MGetInfo->get_discapacidad($salud->id_salud);
      if ($discapacidad->num_rows()>0) {
        $discapacidad=$discapacidad->row();
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(90,5,utf8_decode('¿Tiene alguna descapacidad física? No ( ) Si(X) '),'RLB',0,'L');
        $pdf->Cell(85,5,utf8_decode('¿Cuál? '.$discapacidad->descripcion),'RLB',0,'L');
      }else{
        $pdf->SetXY($x,$y+=5);
        $pdf->Cell(90,5,utf8_decode('¿Tiene alguna descapacidad física? No (X) Si( ) '),'RLB',0,'L');
        $pdf->Cell(85,5,utf8_decode('¿Cuál?'),'RLB',0,'L');
      }

      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('¿Ha asistido o asiste a tratamiento psicológico o psiquiatrico? '),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $psicologico=$this->MGetInfo->get_psicologico($salud->id_salud);
      if ($psicologico->num_rows()>0) {
        $psicologico=$psicologico->row();
        $pdf->Cell(15,4,utf8_decode('No ( )'),'RL',0,'L');
        $pdf->Cell(15,4,utf8_decode('Si (X)'),'RL',0,'L');
        $pdf->Cell(30,4,utf8_decode('Desde '),'RL',0,'L');
        $pdf->Cell(30,4,utf8_decode('Hasta '),'RL',0,'L');
        $pdf->Cell(85,4,utf8_decode('¿Dónde? '),'RL',0,'L');

        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(15,5,'','RLB',0,'L');
        $pdf->Cell(15,5,'','RLB',0,'L');
        $pdf->Cell(30,5,utf8_decode($psicologico->f_inicio),'RLB',0,'L');
        $pdf->Cell(30,5,utf8_decode($psicologico->f_final),'RLB',0,'L');
        $pdf->Cell(85,5,utf8_decode($psicologico->ubicacion),'RLB',0,'L');

      }else{
        $pdf->Cell(15,4,utf8_decode('No (X)'),'RL',0,'L');
        $pdf->Cell(15,4,utf8_decode('Si ( )'),'RL',0,'L');
        $pdf->Cell(30,4,utf8_decode('Desde '),'RL',0,'L');
        $pdf->Cell(30,4,utf8_decode('Hasta '),'RL',0,'L');
        $pdf->Cell(85,4,utf8_decode('¿Dónde? '),'RL',0,'L');

        $pdf->SetXY($x,$y+=4);
        $pdf->Cell(15,5,'','RLB',0,'L');
        $pdf->Cell(15,5,'','RLB',0,'L');
        $pdf->Cell(30,5,utf8_decode(''),'RLB',0,'L');
        $pdf->Cell(30,5,utf8_decode(''),'RLB',0,'L');
        $pdf->Cell(85,5,utf8_decode(''),'RLB',0,'L');
      }

      $pdf->SetXY($x,$y+=10);
      $pdf->SetFont('Arial','B',9);
      $pdf->Cell($ancho,5,utf8_decode('3/6'),'',1,'C');

////////////////////////////////HOJA 4
      $pdf->AddPage();
        $x=20;$y=15;
        $ancho=175;
        // Ejercico y deportes
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY($x,$y);
          $pdf->Cell($ancho,5,utf8_decode("EJERCICIO Y DEPORTES"),'BRLT',1,'C');
          $pdf->SetXY($x,$y+=5);
          $pdf->SetFont('Arial','',8);
          $pdf->Cell($ancho,4,utf8_decode("¿Cuántas veces a la semana haces ejercicio físico?"),'BRLT',1,'C');
          $ejercicio=$this->MGetInfo->get_ejercicio($alumno);
          $ejercicio=$ejercicio->row();
          $pdf->SetFont('Arial','',9);
          $pdf->SetXY($x,$y+=4);
          $p=$ejercicio->frecuencia==1?"X":" ";
          $pdf->Cell($ancho/4,4,"(  $p  ) De 1 a 2 veces ",'RLB',0,'C');
          $pdf->SetXY(63.75,$y);
          $p=$ejercicio->frecuencia==2?"X":" ";
          $pdf->Cell($ancho/4,4,"(  $p  ) De 3 a 4 veces ",'RLB',0,'C');
          $pdf->SetXY(107.5,$y);
          $p=$ejercicio->frecuencia==3?"X":" ";
          $pdf->Cell($ancho/4,4,"(  $p  ) De 5 a 7 veces ",'RLB',0,'C');
          $pdf->SetXY(151.25,$y);
          $p=$ejercicio->frecuencia==4?"X":" ";
          $pdf->Cell($ancho/4,4,"(  $p  ) Nunca ",'RLB',0,'C');


          $pdf->SetFont('Arial','',9);
          $pdf->SetXY($x,$y+=4);
          $p=$ejercicio->practica_deporte==1?"¿Practicas algún deporte?   No (   )   Si (  X  )":"¿Practicas algún deporte?   No (  X  )   Si (   )";
          $pdf->Cell($ancho/2,4,utf8_decode($p),'RLB',0,'C');
          $pdf->SetXY(107.5,$y);
          $pdf->Cell($ancho/2,4,utf8_decode("Marca con una 'X' cuál de los siguientes:"),'RLB',0,'C');
          $deporte=$this->MGetInfo->get_practica_deporte($ejercicio->id_ejer_dep);
          if ($deporte->num_rows()>0) {
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY($x,$y+=4);
            foreach ($deporte->result() as $deportes) {
              if ($deportes->id_deporte==1) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell(29.16,4,utf8_decode("(  $p  ) Futbol"),'RLB',0,'L');
            foreach ($deporte->result() as $deportes) {
              if ($deportes->id_deporte==4) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell(29.16,4,utf8_decode("(  $p  ) Béisbol"),'RLB',0,'L');
            foreach ($deporte->result() as $deportes) {
              if ($deportes->id_deporte==7) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell(29.16,4,utf8_decode("(  $p  ) Basquetbol"),'RLB',0,'L');
            foreach ($deporte->result() as $deportes) {
              if ($deportes->id_deporte==10) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell(43.75,4,utf8_decode("(  $p  ) Natación"),'RLB',0,'L');
            foreach ($deporte->result() as $deportes) {
              if ($deportes->id_deporte==13) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell(43.75,4,utf8_decode("(  $p  ) Atletismo"),'RLB',0,'L');
            $pdf->SetXY($x,$y+=4);
            foreach ($deporte->result() as $deportes) {
              if ($deportes->id_deporte==2) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell(29.16,4,utf8_decode("(  $p  ) Tenis"),'RLB',0,'L');
            foreach ($deporte->result() as $deportes) {
              if ($deportes->id_deporte==5) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell(29.16,4,utf8_decode("(  $p  ) Gimnasia"),'RLB',0,'L');
            foreach ($deporte->result() as $deportes) {
              if ($deportes->id_deporte==8) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell(29.16,4,utf8_decode("(  $p  ) Judo"),'RLB',0,'L');
            foreach ($deporte->result() as $deportes) {
              if ($deportes->id_deporte==11) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell(43.75,4,utf8_decode("(  $p  ) Karate"),'RLB',0,'L');
            foreach ($deporte->result() as $deportes) {
              if ($deportes->id_deporte==14) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell(43.75,4,utf8_decode("(  $p  ) Halterofilia"),'RLB',0,'L');
            $pdf->SetXY($x,$y+=4);
            foreach ($deporte->result() as $deportes) {
              if ($deportes->id_deporte==3) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell(29.16,4,utf8_decode("(  $p  ) Boxeo"),'RLB',0,'L');
            foreach ($deporte->result() as $deportes) {
              if ($deportes->id_deporte==6) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell(29.16,4,utf8_decode("(  $p  ) Lucha"),'RLB',0,'L');
            foreach ($deporte->result() as $deportes) {
              if ($deportes->id_deporte==9) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell(29.16,4,utf8_decode("(  $p  ) Ciclismo"),'RLB',0,'L');
            foreach ($deporte->result() as $deportes) {
              if ($deportes->id_deporte==12) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell(43.75,4,utf8_decode("(  $p  ) Charrería"),'RLB',0,'L');
            foreach ($deporte->result() as $deportes) {
              if ($deportes->id_deporte>14) {

                $pdf->Cell(43.75,4,utf8_decode("(  X  ) Otro"),'RLB',0,'L');

                break;
              }else{
                $p=" ";
                $pdf->Cell(43.75,4,utf8_decode("(  $p  ) Otro, especificar"),'RLB',0,'L');
                break;
              }
            }
            $pdf->SetXY($x,$y+=4);
            $pdf->Cell($ancho,4," ",'RLB',0,'C');
          }else{
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY($x,$y+=4);
            $pdf->Cell(29.16,4,utf8_decode("(     ) Futbol"),'RLB',0,'L');
            $pdf->Cell(29.16,4,utf8_decode("(     ) Béisbol"),'RLB',0,'L');
            $pdf->Cell(29.16,4,utf8_decode("(     ) Basquetbol"),'RLB',0,'L');
            $pdf->Cell(43.75,4,utf8_decode("(     ) Natación"),'RLB',0,'L');
            $pdf->Cell(43.75,4,utf8_decode("(     ) Atletismo"),'RLB',0,'L');
            $pdf->SetXY($x,$y+=4);
            $pdf->Cell(29.16,4,utf8_decode("(     ) Tenis"),'RLB',0,'L');
            $pdf->Cell(29.16,4,utf8_decode("(     ) Gimnasia"),'RLB',0,'L');
            $pdf->Cell(29.16,4,utf8_decode("(     ) Judo"),'RLB',0,'L');
            $pdf->Cell(43.75,4,utf8_decode("(     ) Karate"),'RLB',0,'L');
            $pdf->Cell(43.75,4,utf8_decode("(     ) Halterofilia"),'RLB',0,'L');
            $pdf->SetXY($x,$y+=4);
            $pdf->Cell(29.16,4,utf8_decode("(     ) Boxeo"),'RLB',0,'L');
            $pdf->Cell(29.16,4,utf8_decode("(     ) Lucha"),'RLB',0,'L');
            $pdf->Cell(29.16,4,utf8_decode("(     ) Ciclismo"),'RLB',0,'L');
            $pdf->Cell(43.75,4,utf8_decode("(     ) Charrería"),'RLB',0,'L');
            $pdf->Cell(43.75,4,utf8_decode("(     ) Otro"),'RLB',0,'L');
            $pdf->SetXY($x,$y+=4);
            $pdf->Cell($ancho,4," ",'RLB',0,'C');
          }


          //Hábitos de consumo
          $pdf->SetFont('Arial','B',9);
          $pdf->SetXY($x,$y+=9);
          $pdf->Cell($ancho,5,utf8_decode("HÁBITOS DE CONSUMO"),'BRLT',1,'C');
          $habitos=$this->MGetInfo->get_habito($alumno);
          $habitos=$habitos->row();
          $pdf->SetFont('Arial','',9);
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell(20,4,utf8_decode("¿Fuma?"),'RLB',0,'C');
          if ($habitos->fuma==1) {
            $pdf->Cell(20,4,utf8_decode("No (    )"),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode("Si (  X  )"),'RLB',0,'C');
            $pdf->Cell(55,4,utf8_decode("¿Cuántos cigarros por día?"),'RLB',0,'C');

            $p=$habitos->cant_cigarros==4?"X":" ";
            $pdf->Cell(20,4,utf8_decode("1 a 5 (  $p  )"),'RLB',0,'C');
            $p=$habitos->cant_cigarros==5?"X":" ";
            $pdf->Cell(20,4,utf8_decode("6 a 10 (  $p )"),'RLB',0,'C');
            $p=$habitos->cant_cigarros==6?"X":" ";
            $pdf->Cell(20,4,utf8_decode("10 o más (  $p  )"),'RLB',0,'C');
          }else{
            $pdf->Cell(20,4,utf8_decode("No (  X  )"),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode("Si (    )"),'RLB',0,'C');
            $pdf->Cell(55,4,utf8_decode("¿Cuántos cigarros por día?"),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode("1 a 5 (   )"),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode("6 a 10 (  )"),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode("10 o más (   )"),'RLB',0,'C');
          }



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
          if ($habitos->consume_cerveza==1) {
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode("X"),'RLB',0,'C');
            $pdf->SetXY(135,$y);
            $p=$habitos->cerveza==1?"X":" ";
            $pdf->Cell(20,4,utf8_decode("$p"),'RLB',0,'C');
            $p=$habitos->cerveza==2?"X":" ";
            $pdf->Cell(20,4,utf8_decode("$p"),'RLB',0,'C');
            $p=$habitos->cerveza==3?"X":" ";
            $pdf->Cell(20,4,utf8_decode("$p"),'RLB',0,'C');

          }else{
            $pdf->Cell(20,4,utf8_decode("X"),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->SetXY(135,$y);
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
          }

          $pdf->SetXY($x,$y+=4);
          $pdf->Cell(20,4,utf8_decode("Vinos de mesa"),'RLB',0,'C');
          if ($habitos->consume_vino==1) {
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode("X"),'RLB',0,'C');
            $pdf->SetXY(135,$y);
            $p=$habitos->vinos==1?"X":" ";
            $pdf->Cell(20,4,utf8_decode("$p"),'RLB',0,'C');
            $p=$habitos->vinos==2?"X":" ";
            $pdf->Cell(20,4,utf8_decode("$p"),'RLB',0,'C');
            $p=$habitos->vinos==3?"X":" ";
            $pdf->Cell(20,4,utf8_decode("$p"),'RLB',0,'C');

          }else{
            $pdf->Cell(20,4,utf8_decode("X"),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->SetXY(135,$y);
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
          }

          $pdf->SetXY($x,$y+=4);
          $pdf->Cell(20,4,utf8_decode("Cocteles"),'RLB',0,'C');
          if ($habitos->consume_coctel==1) {
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode("X"),'RLB',0,'C');
            $pdf->SetXY(135,$y);
            $p=$habitos->cocteles==1?"X":" ";
            $pdf->Cell(20,4,utf8_decode("$p"),'RLB',0,'C');
            $p=$habitos->cocteles==2?"X":" ";
            $pdf->Cell(20,4,utf8_decode("$p"),'RLB',0,'C');
            $p=$habitos->cocteles==3?"X":" ";
            $pdf->Cell(20,4,utf8_decode("$p"),'RLB',0,'C');

          }else{
            $pdf->Cell(20,4,utf8_decode("X"),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->SetXY(135,$y);
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
          }

          $pdf->SetXY($x,$y+=4);
          $pdf->Cell(20,4,utf8_decode("Licores"),'RLB',0,'C');
          if ($habitos->consume_licor==1) {
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode("X"),'RLB',0,'C');
            $pdf->SetXY(135,$y);
            $p=$habitos->licores==1?"X":" ";
            $pdf->Cell(20,4,utf8_decode("$p"),'RLB',0,'C');
            $p=$habitos->licores==2?"X":" ";
            $pdf->Cell(20,4,utf8_decode("$p"),'RLB',0,'C');
            $p=$habitos->licores==3?"X":" ";
            $pdf->Cell(20,4,utf8_decode("$p"),'RLB',0,'C');

          }else{
            $pdf->Cell(20,4,utf8_decode("X"),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->SetXY(135,$y);
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
          }

          $pdf->SetXY($x,$y+=4);
          $pdf->Cell(20,4,utf8_decode("Otros"),'RLB',0,'C');
          if ($habitos->consume_otro==1) {
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode("X"),'RLB',0,'C');
            $pdf->SetXY(135,$y);
            $p=$habitos->otros==1?"X":" ";
            $pdf->Cell(20,4,utf8_decode("$p"),'RLB',0,'C');
            $p=$habitos->otros==2?"X":" ";
            $pdf->Cell(20,4,utf8_decode("$p"),'RLB',0,'C');
            $p=$habitos->otros==3?"X":" ";
            $pdf->Cell(20,4,utf8_decode("$p"),'RLB',0,'C');

          }else{
            $pdf->Cell(20,4,utf8_decode("X"),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->SetXY(135,$y);
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
            $pdf->Cell(20,4,utf8_decode(" "),'RLB',0,'C');
          }

          $pdf->SetXY($x,$y+=4);
          $pdf->Cell($ancho,4,"Considera que sus amigos",'RLB',0,'C');
          $pdf->SetXY($x,$y+=4);
          if ($habitos->amigo_adiccion==1) {
            $pdf->Cell($ancho/2,4,utf8_decode("¿Tienen alguna adicción?    No (   )   Si ( X )"),'RLB',0,'L');
            $pdf->Cell($ancho/2,4,"Especifique: $habitos->adiccion",'RLB',0,'L');
            $pdf->SetXY($x,$y+=4);

          }else{
            $pdf->Cell($ancho/2,4,utf8_decode("¿Tienen alguna adicción?    No ( X )   Si (   )"),'RLB',0,'L');
            $pdf->Cell($ancho/2,4,"Especifique: ",'RLB',0,'L');
            $pdf->SetXY($x,$y+=4);

          }
          if ($habitos->consumen_droga==1) {
            $pdf->Cell($ancho/2,4,utf8_decode("¿Consumen alguna droga?    No (   )   Si ( X )"),'RLB',0,'L');
            $pdf->Cell($ancho/2,4,"Especifique: $habitos->droga",'RLB',0,'L');

          }else{
            $pdf->Cell($ancho/2,4,utf8_decode("¿Consumen alguna droga?    No ( X )   Si (   )"),'RLB',0,'L');
            $pdf->Cell($ancho/2,4,"Especifique: ",'RLB',0,'L');
          }

          //Recreación y tiempo libre
          $pdf->SetFont('Arial','B',9);
          $pdf->SetXY($x,$y+=9);
          $pdf->Cell($ancho,4,utf8_decode("RECREACIÓN Y TIEMPO LIBRE"),'BRLT',1,'C');

          $pdf->SetFont('Arial','',9);
          $pdf->SetXY($x,$y+=4);
          $pdf->Cell($ancho,4,utf8_decode("(Marque con una 'X' las actividades que frecuentemente realiza)"),'BRLT',1,'C');

          $pdf->SetXY($x,$y+=4);
          $recreacion=$this->MGetInfo->get_recreacion($alumno);
          if ($recreacion->num_rows()>0) {
            foreach ($recreacion->result() as $recreacionA) {
              if ($recreacionA->actividad==1) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell($ancho/3,4,utf8_decode("( $p )   Ir al parque"),'RLB',0,'L');
            foreach ($recreacion->result() as $recreacionA) {
              if ($recreacionA->actividad==6) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell($ancho/3,4,utf8_decode("( $p )   Hacer deporte"),'RLB',0,'L');
            foreach ($recreacion->result() as $recreacionA) {
              if ($recreacionA->actividad==11) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell($ancho/3,4,utf8_decode("( $p )   Ver televisión"),'RLB',0,'L');
            $pdf->SetXY($x,$y+=4);
            foreach ($recreacion->result() as $recreacionA) {
              if ($recreacionA->actividad==2) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell($ancho/3,4,utf8_decode("( $p )   Ir al cine"),'RLB',0,'L');
            foreach ($recreacion->result() as $recreacionA) {
              if ($recreacionA->actividad==7) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell($ancho/3,4,utf8_decode("( $p )   Reunirse con amigos"),'RLB',0,'L');
            foreach ($recreacion->result() as $recreacionA) {
              if ($recreacionA->actividad==12) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell($ancho/3,4,utf8_decode("( $p )   Ver películas en casa"),'RLB',0,'L');
            $pdf->SetXY($x,$y+=4);
            foreach ($recreacion->result() as $recreacionA) {
              if ($recreacionA->actividad==3) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell($ancho/3,4,utf8_decode("( $p )   Ir a bailar"),'RLB',0,'L');
            foreach ($recreacion->result() as $recreacionA) {
              if ($recreacionA->actividad==8) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell($ancho/3,4,utf8_decode("( $p )   Salir con mi pareja"),'RLB',0,'L');
            foreach ($recreacion->result() as $recreacionA) {
              if ($recreacionA->actividad==18) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell($ancho/3,4,utf8_decode("( $p )   Leer"),'RLB',0,'L');
            $pdf->SetXY($x,$y+=4);
            foreach ($recreacion->result() as $recreacionA) {
              if ($recreacionA->actividad==4) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell($ancho/3,4,utf8_decode("( $p )   Jugar videojuegos"),'RLB',0,'L');
            foreach ($recreacion->result() as $recreacionA) {
              if ($recreacionA->actividad==9) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell($ancho/3,4,utf8_decode("( $p )   Escuchar música"),'RLB',0,'L');
            //
            foreach ($recreacion->result() as $recreacionA) {
              if ($recreacionA->actividad>12) {
                $p="X";
                $accion=$recreacionA->accion;
                break;
              }else{
                $p=" ";
                $accion="";
              }
            }
            $pdf->Cell($ancho/3,8,utf8_decode("( $p )   Otro, especificar: $accion"),'RLB',0,'L');
            $pdf->SetXY($x,$y+=4);
            foreach ($recreacion->result() as $recreacionA) {
              if ($recreacionA->actividad==5) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell($ancho/3,4,utf8_decode("( $p )   Ir de compras"),'RLB',0,'L');
            foreach ($recreacion->result() as $recreacionA) {
              if ($recreacionA->actividad==10) {
                $p="X";
                break;
              }else{
                $p=" ";
              }
            }
            $pdf->Cell($ancho/3,4,utf8_decode("( $p )   Usar la computadora"),'RLB',0,'L');
          }else{
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
          }


          //Gustos e intereses
          $pdf->SetFont('Arial','B',9);
          $pdf->SetXY($x,$y+=4);
          $pdf->Cell($ancho,5,utf8_decode("GUSTOS E INTERESES"),'BRLT',1,'C');
          $gustos=$this->MGetInfo->get_gustos($alumno);
          $gustos=$gustos->row();
          $pdf->SetFont('Arial','',9);
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell($ancho,4,utf8_decode("¿Qué hago en mi tiempo libre? $gustos->tiempo_libre"),'BRLT',1,'L');
          $pdf->SetXY($x,$y+=4);
          $pdf->Cell(65,4,utf8_decode("Última vez que leí un libro: $gustos->ultima_vez_libro"),'BRLT',0,'L');
          $pdf->Cell(110,4,utf8_decode("¿Qué es lo que me gusta hacer? $gustos->gusta_hacer"),'BRLT',0,'L');
          $pdf->SetXY($x,$y+=4);
          $pdf->Cell(55,4,utf8_decode("Libros que has leído"),'BRLT',0,'L');
          $pdf->Cell(120,4,utf8_decode("¿Qué me disgusta hacer? $gustos->disgusta_hacer"),'BRLT',0,'L');
          $pdf->SetXY($x,$y+=4);
          $pdf->Cell(55,4,utf8_decode("1.-$gustos->libro1"),'BRLT',0,'L');
          $pdf->Cell(55,4,utf8_decode("Mis películas preferidas son:"),'BRLT',0,'L');
          $pdf->Cell(55,4,utf8_decode("¿Cuántos amigos tengo?"),'BRLT',0,'L');
          $pdf->Cell(10,4,utf8_decode("$gustos->num_amigos"),'BRLT',0,'L');
          $pdf->SetXY($x,$y+=4);
          $pdf->Cell(55,4,utf8_decode("2.-$gustos->libro2"),'BRLT',0,'L');
          $pdf->Cell(55,4,utf8_decode("1.-$gustos->pelicula1"),'BRLT',0,'L');
          $pdf->Cell(65,4,utf8_decode("¿Qué lugares frecuento con ellos?"),'BRLT',0,'L');
          $pdf->SetXY($x,$y+=4);
          $pdf->Cell(55,4,utf8_decode("3.-$gustos->libro3"),'BRLT',0,'L');
          $pdf->Cell(55,4,utf8_decode("2.-$gustos->pelicula2"),'BRLT',0,'L');
          $pdf->Cell(65,4,utf8_decode("1.-$gustos->lugar1"),'BRLT',0,'L');
          $pdf->SetXY($x,$y+=4);
          $pdf->Cell(55,4,utf8_decode("4.-$gustos->libro4"),'BRLT',0,'L');
          $pdf->Cell(55,4,utf8_decode("3.-$gustos->pelicula3"),'BRLT',0,'L');
          $pdf->Cell(65,4,utf8_decode("2.-$gustos->lugar2"),'BRLT',0,'L');


          //Participacion social
          $pdf->SetFont('Arial','B',9);
          $pdf->SetXY($x,$y+=4);
          $pdf->Cell($ancho,4,utf8_decode("PARTICIPACIÓN SOCIAL"),'BRLT',1,'C');
          $pdf->SetFont('Arial','',9);
          $pdf->SetXY($x,$y+=4);
          $participacion=$this->MGetInfo->get_participacion($alumno);
          if ($participacion->num_rows()>0) {
            $participacion=$participacion->row();
            $pdf->Cell($ancho,4,utf8_decode("¿Actualmente participa en alguna organización, asociación, equipo o grupo?   No (    )   Si (  X  )"),'BRLT',1,'L');
            $pdf->SetXY($x,$y+=4);
            $organizacion=$this->MGetInfo->get_organizaciones($participacion->id_participacion);
            if ($organizacion->num_rows()>0) {
              foreach ($organizacion->result() as $key) {
                if ($key->organizacion==1) {
                  $p="X";
                  break;
                }
                else{
                  $p=" ";
                }
              }
              $pdf->Cell($ancho/4,4,utf8_decode("(  $p  ) Estudiantil"),'BRLT',0,'L');
              foreach ($organizacion->result() as $key) {
                if ($key->organizacion==3) {
                  $p="X";
                  break;
                }
                else{
                  $p=" ";
                }
              }
              $pdf->Cell($ancho/4,4,utf8_decode("(  $p  ) Beneficiencia"),'BRLT',0,'L');
              foreach ($organizacion->result() as $key) {
                if ($key->organizacion==5) {
                  $p="X";
                  break;
                }
                else{
                  $p=" ";
                }
              }
              $pdf->Cell($ancho/4,4,utf8_decode("(  $p  ) Político"),'BRLT',0,'L');
              foreach ($organizacion->result() as $key) {
                if ($key->organizacion>=7) {
                  $p="X";
                  $opcion=$key->org;
                  break;
                }
                else{
                  $p=" ";
                  $opcion=" ";
                }
              }
              $pdf->Cell($ancho/4,8,utf8_decode("(  $p  ) Otro, $opcion"),'BRLT',0,'L');
              //
              $pdf->SetXY($x,$y+=4);
              foreach ($organizacion->result() as $key) {
                if ($key->organizacion==2) {
                  $p="X";
                  break;
                }
                else{
                  $p=" ";
                }
              }
              $pdf->Cell($ancho/4,4,utf8_decode("(  $p  ) Deportivo"),'BRLT',0,'L');
              foreach ($organizacion->result() as $key) {
                if ($key->organizacion==4) {
                  $p="X";
                  break;
                }
                else{
                  $p=" ";
                }
              }
              $pdf->Cell($ancho/4,4,utf8_decode("(  $p  ) Religioso"),'BRLT',0,'L');
              foreach ($organizacion->result() as $key) {
                if ($key->organizacion==6) {
                  $p="X";
                  break;
                }
                else{
                  $p=" ";
                }
              }
              $pdf->Cell($ancho/4,4,utf8_decode("(  $p  ) Académico"),'BRLT',0,'L');
            }else{
              $pdf->Cell($ancho/4,4,utf8_decode("(   ) Estudiantil"),'BRLT',0,'L');
              $pdf->Cell($ancho/4,4,utf8_decode("(   ) Beneficiencia"),'BRLT',0,'L');
              $pdf->Cell($ancho/4,4,utf8_decode("(   ) Político"),'BRLT',0,'L');
              $pdf->Cell($ancho/4,8,utf8_decode("(   ) Otro, especificar"),'BRLT',0,'L');
              $pdf->SetXY($x,$y+=4);
              $pdf->Cell($ancho/4,4,utf8_decode("(   ) Deportivo"),'BRLT',0,'L');
              $pdf->Cell($ancho/4,4,utf8_decode("(   ) Religioso"),'BRLT',0,'L');
              $pdf->Cell($ancho/4,4,utf8_decode("(   ) Académico"),'BRLT',0,'L');
            }


          }else{
            $pdf->Cell($ancho,4,utf8_decode("¿Actualmente participa en alguna organización, asociación, equipo o grupo?   No (  X  )   Si (    )"),'BRLT',1,'L');
            $pdf->SetXY($x,$y+=4);
            $pdf->Cell($ancho/4,4,utf8_decode("(   ) Estudiantil"),'BRLT',0,'L');
            $pdf->Cell($ancho/4,4,utf8_decode("(   ) Beneficiencia"),'BRLT',0,'L');
            $pdf->Cell($ancho/4,4,utf8_decode("(   ) Político"),'BRLT',0,'L');
            $pdf->Cell($ancho/4,8,utf8_decode("(   ) Otro, especificar"),'BRLT',0,'L');
            $pdf->SetXY($x,$y+=4);
            $pdf->Cell($ancho/4,4,utf8_decode("(   ) Deportivo"),'BRLT',0,'L');
            $pdf->Cell($ancho/4,4,utf8_decode("(   ) Religioso"),'BRLT',0,'L');
            $pdf->Cell($ancho/4,4,utf8_decode("(   ) Académico"),'BRLT',0,'L');
          }

          //Internet
          $pdf->SetFont('Arial','B',9);
          $internet=$this->MGetInfo->get_internet($alumno);
          $internet=$internet->row();
          $pdf->SetXY($x,$y+=9);
          $pdf->Cell($ancho,5,utf8_decode("INTERNET"),'BRLT',1,'C');
          $pdf->SetFont('Arial','',9);
          $pdf->SetXY($x,$y+=5);
          if ($internet->sabe_usar==1) {
            $pdf->Cell($ancho/2,4,utf8_decode("¿Sabes usar internet?   No (   )   Si (  X  )"),'BRLT',0,'L');

          }else{
            $pdf->Cell($ancho/2,4,utf8_decode("¿Sabes usar internet?   No (  X  )   Si (   )"),'BRLT',0,'L');
          }
          if ($internet->tiene_acceso==1) {
            $pdf->Cell($ancho/2,4,utf8_decode("¿Tienes acceso a internet?   No (   )   Si (  X  )"),'BRLT',0,'L');

          }else{
            $pdf->Cell($ancho/2,4,utf8_decode("¿Tienes acceso a internet?   No (  X  )   Si (   )"),'BRLT',0,'L');

          }
          $pdf->SetXY($x,$y+=4);
          $pdf->Cell($ancho,4,utf8_decode("En caso afirmativo, marque con una 'X' el lugar principal en el que tiene acceso"),'BRLT',1,'C');
          $pdf->SetXY($x,$y+=4);

          $p=$internet->acceso==1?"X":" ";
          $pdf->Cell($ancho/3,4,utf8_decode("(  $p  ) Casa"),'BRLT',0,'L');
          $p=$internet->acceso==2?"X":" ";
          $pdf->Cell($ancho/3,4,utf8_decode("(  $p  ) Escuela"),'BRLT',0,'L');
          $p=$internet->acceso==3?"X":" ";
          $pdf->Cell($ancho/3,4,utf8_decode("(  $p  ) Trabajo"),'BRLT',0,'L');
          $pdf->SetXY($x,$y+=4);
          $p=$internet->acceso==4?"X":" ";
          $pdf->Cell($ancho/3,4,utf8_decode("(  $p  ) Café Internet"),'BRLT',0,'L');
          $p=$internet->acceso==5?"X":" ";
          $pdf->Cell($ancho/3,4,utf8_decode("(  $p  ) Casa de algún amigo o familiar"),'BRLT',0,'L');
          $p=$internet->acceso==6?"X":" ";
          $pdf->Cell($ancho/3,4,utf8_decode("(  $p  ) Otro, especificar"),'BRLT',0,'L');

          $pdf->SetXY($x,$y+=4);
          $pdf->Cell($ancho,4,utf8_decode("¿Para qué utiliza internet? (Marque con una 'X' las opciones que consideres necesarias)"),'BRLT',1,'C');
          $pdf->SetXY($x,$y+=4);
          $pdf->Cell($ancho/2,4,utf8_decode("¿Tiene?"),'BLRT',0,'C');
          $pdf->Cell($ancho/2,4,utf8_decode("¿Para qué lo utiliza?"),'BLRT',0,'C');
          $pdf->SetXY($x,$y+=4);
          $pdf->Cell(57.5,4,utf8_decode("Correo electrónico"),'BLRT',0,'L');
          if ($internet->correo_electronico==1) {
            $pdf->Cell(30,4,utf8_decode("No (   )         Si ( X )"),'BLRT',0,'L');
          }else{
            $pdf->Cell(30,4,utf8_decode("No ( X )        Si (   )"),'BLRT',0,'L');
          }
          $p=$internet->intercambiar==1?"X":" ";
          $pdf->Cell(43.75,4,utf8_decode("( $p ) Intercambiar información"),'BLRT',0,'L');
          $p=$internet->entrenimiento==1?"X":" ";
          $pdf->Cell(43.75,4,utf8_decode("( $p ) Entretenimiento"),'BLRT',0,'L');
          $pdf->SetXY($x,$y+=4);
          $pdf->Cell(57.5,4,utf8_decode("Página web personal"),'BLRT',0,'L');
          if ($internet->pag_web_personal==1) {
            $pdf->Cell(30,4,utf8_decode("No (   )         Si ( X )"),'BLRT',0,'L');
          }else{
            $pdf->Cell(30,4,utf8_decode("No ( X )        Si (   )"),'BLRT',0,'L');
          }
          $p=$internet->amistad==1?"X":" ";
          $pdf->Cell(43.75,4,utf8_decode("( $p ) Relaciones de amistad"),'BLRT',0,'L');
          $p=$internet->amigos==1?"X":" ";
          $pdf->Cell(43.75,4,utf8_decode("( $p ) Buscar amigos"),'BLRT',0,'L');
          $pdf->SetXY($x,$y+=4);
          $pdf->Cell(57.5,4,utf8_decode("Red Social (Facebook, Twitter, etc.)"),'BLRT',0,'L');
          if ($internet->red_social==1) {
            $pdf->Cell(30,4,utf8_decode("No (   )         Si ( X )"),'BLRT',0,'L');
          }else{
            $pdf->Cell(30,4,utf8_decode("No ( X )        Si (   )"),'BLRT',0,'L');
          }
          $p=$internet->profesionales==1?"X":" ";
          $pdf->Cell(43.75,4,utf8_decode("( $p ) Relaciones profesionales"),'BLRT',0,'L');
          $p=$internet->comuinicarse==1?"X":" ";
          $pdf->Cell(43.75,4,utf8_decode("( $p ) Comunicarte"),'BLRT',0,'L');
          $pdf->SetXY($x,$y+=4);
          $pdf->Cell(57.5,4,utf8_decode("Blog/Weblog"),'BLRT',0,'L');
          if ($internet->webblog==1) {
            $pdf->Cell(30,4,utf8_decode("No (   )         Si ( X )"),'BLRT',0,'L');
          }else{
            $pdf->Cell(30,4,utf8_decode("No ( X )        Si (   )"),'BLRT',0,'L');
          }
          $p=$internet->pareja==1?"X":" ";
          $pdf->Cell(43.75,4,utf8_decode("( $p ) Buscar pareja"),'BLRT',0,'L');
          $p=$internet->otro==1?"X":" ";
          $pdf->Cell(43.75,4,utf8_decode("( $p ) Otro"),'BLRT',0,'L');

          $pdf->SetFont('Arial','B',9);
          $pdf->SetXY($x,$y+=25);
          $pdf->Cell($ancho,4,"4/6",'',1,'C'); //cuatro

          ////////////////////////HOJA 5
          $pdf->AddPage();
          $x=20;$y=15;
          $ancho=175;
          $movil=$this->MGetInfo->get_movil($alumno);
          $movil=$movil->row();
          $pdf->SetFont('Arial','B',10);
          $pdf->SetXY($x,$y);
          $pdf->Cell($ancho,5,utf8_decode("TELEFONÍA MÓVIL"),1,0,'C');
          $pdf->SetFont('Arial','',9);
          $pdf->SetXY($x,$y+=5);
          if ($movil->tiene_cel==1) {
            $pdf->Cell(87.5,5,utf8_decode("¿Tiene teléfono celular?   No (   )   Si ( X )"),'BLRT',0,'L');
          }else{
            $pdf->Cell(87.5,5,utf8_decode("¿Tiene teléfono celular?   No ( X )  Si (   )"),'BLRT',0,'L');
          }
          if ($movil->acceso_int==1) {
            $pdf->Cell(87.5,5,utf8_decode("Si es afirmativo, ¿tiene acceso a internet?   No (   )   Si ( X )"),'BLRT',0,'L');
          }else{
            $pdf->Cell(87.5,5,utf8_decode("Si es afirmativo, ¿tiene acceso a internet?   No ( X )  Si (   )"),'BLRT',0,'L');

          }
          $pdf->SetXY($x,$y+=5);
          $pdf->Cell(175,5,utf8_decode("Correo electrónico: $movil->correo"),'BLRT',0,'L');
          $pdf->Rect($x,$y+=5,175,20,'D');
          $pdf->SetFont('Arial','B',9);

          $pdf->Text(22,40,utf8_decode("Si no vives con algunos de tus padres; completa el siguiente apartado (Pueden ser Abuelos, tíos, hermanos, etc.)."));
          $pdf->SetXY($x,55);
          $pdf->Cell($ancho,5,utf8_decode("DATOS DEL TUTOR"),1,0,'C');
          $pdf->SetFont('Arial','',9);
          $pdf->SetXY($x,$y+=30);

          //Datos del tutor
          $tutor=$this->MGetInfo->get_tutor($alumno);
          if ($tutor->num_rows()>0) {
            $tutor=$tutor->row();
            $pdf->Cell(55,5,"Apellido Paterno:",'RL',0,'L');
            $pdf->Cell(55,5,"Apellido Materno:",'RL',0,'L');
            $pdf->Cell(65,5,"Nombre(s):",'RL',0,'L');

            $pdf->SetXY($x,$y+=5);
            $pdf->Cell(55,5,utf8_decode($tutor->paterno_padre),'RLB',0,'L');
            $pdf->Cell(55,5,utf8_decode($tutor->materno_padre),'RLB',0,'L');
            $pdf->Cell(65,5,utf8_decode($tutor->nombre_padre),'RLB',0,'L');

            //fecha lugar dlegacion ,nacimietno
            $pdf->SetXY($x,$y+=5);
            $pdf->Cell(55,5,"Fecha de Nacimiento:",'RL',0,'L');
            $pdf->Cell(55,5,"Lugar de Nacimiento:",'RL',0,'L');
            $pdf->Cell(65,5,utf8_decode("Delegación o municipio:"),'RL',0,'L');

            $pdf->SetXY($x,$y+=5);
            $pdf->Cell(55,5,utf8_decode($tutor->fecha_nacimiento),'RLB',0,'L');
            $pdf->Cell(55,5,utf8_decode($tutor->lugar_nacimiento),'RLB',0,'L');
            $pdf->Cell(65,5,utf8_decode($tutor->mun_delegacion),'RLB',0,'L');

            //endidad pais curp
            $pdf->SetXY($x,$y+=5);
            $pdf->Cell(35,4,"Entidad Federativa:",'RL',0,'L');
            $pdf->Cell(35,4,utf8_decode("País:"),'RL',0,'L');

            $pdf->Cell(15,8,utf8_decode("CURP:"),'BRL',0,'L');
              for ($i=0; $i <18 ; $i++) {
                $pdf->Cell(5,8,$tutor->curp[$i],'RBL',0,'L');
              }

            $pdf->SetXY($x,$y+=4);
            $pdf->Cell(35,4,utf8_decode($tutor->estado),'RLB',0,'L');
            $pdf->Cell(35,4,utf8_decode($tutor->pais),'RLB',0,'L');
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

              $grado=$tutor->grado_estudio;
              $p="";
              for ($i=0; $i<16 ; $i++) {
                $p=$grado==$arr_estudios[$i]?"X":" ";
                $pdf->Cell($ancho/4,5,utf8_decode("($p)".$arr_estudios[$i++]),'RBL',0,'L');
                $p=$grado==$arr_estudios[$i]?"X":" ";
                $pdf->Cell($ancho/4,5,utf8_decode("($p)".$arr_estudios[$i++]),'RBL',0,'L');
                $p=$grado==$arr_estudios[$i]?"X":" ";
                $pdf->Cell($ancho/4,5,utf8_decode("($p)".$arr_estudios[$i++]),'RBL',0,'L');
                $p=$grado==$arr_estudios[$i]?"X":" ";
                $pdf->Cell($ancho/4,5,utf8_decode("($p)".$arr_estudios[$i]),'RBL',0,'L');
                $pdf->SetXY($x,$y+=5);
              }
              if ($tutor->trabaja==1) {
                $pdf->Cell(87.5,5,"Trabaja: No ( ) Si (X)",'RLB',0,'L');
                $pdf->Cell(87.5,5,utf8_decode("Número de horas a la semana: $tutor->horas_trabajo"),'RLB',0,'L');
              }else{
                $pdf->Cell(87.5,5,"Trabaja: No (X) Si ( )",'RLB',0,'L');
                $pdf->Cell(87.5,5,utf8_decode("Número de horas a la semana: "),'RLB',0,'L');
              }


          }else{
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
                $pdf->Cell(5,8," ",'RBL',0,'L');
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


          }

            $pdf->SetFont('Arial','B',10);
            $pdf->SetXY($x,$y+=10);
            $pdf->Cell($ancho,5,utf8_decode("RELACIONES SOCIALES / ASPECTOS INTERPERSONALES"),1,0,'C');
            $relaciones=$this->MGetInfo->get_rel_sociales($alumno);
            $relaciones=$relaciones->row();
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY($x,$y+=5);
            $lugar_hermanos=[" ","El más pequeño","El más grande","El de en medio","Soy hijo único"];
            $pdf->Cell($ancho,5,utf8_decode("Lugar que ocupo entre mis hermanos: ".$lugar_hermanos[$relaciones->lugar_hermano]),'RLB',0,'I');
            $pdf->SetXY($x,$y+=5);
            $pdf->Cell($ancho,5,utf8_decode("¿Cómo es la relación con sus hermanos? (Marque al menos 2 opciones)"),'RLB',0,'I');
            $relac_hermanos=$this->MGetInfo->get_rel_hermanos($relaciones->id_relacion);
            $pdf->SetXY($x,$y+=5);
            if ($relac_hermanos->num_rows()>0) {
              foreach ($relac_hermanos->result() as $key) {
                if ($key->descripcion==1) {
                  $p="X";
                  break;
                }else{
                  $p=" ";
                }
              }
              $pdf->Cell($ancho/3,5,utf8_decode("( $p ) Platicamos"),'RLB',0,'I');
              foreach ($relac_hermanos->result() as $key) {
                if ($key->descripcion==3) {
                  $p="X";
                  break;
                }else{
                  $p=" ";
                }
              }
              $pdf->Cell($ancho/3,5,utf8_decode("( $p ) Hay respeto"),'RLB',0,'I');
              foreach ($relac_hermanos->result() as $key) {
                if ($key->descripcion==5) {
                  $p="X";
                  break;
                }else{
                  $p=" ";
                }
              }
              $pdf->Cell($ancho/3,5,utf8_decode("( $p ) Nos apoyamos"),'RLB',0,'I');
              $pdf->SetXY($x,$y+=5);
              foreach ($relac_hermanos->result() as $key) {
                if ($key->descripcion==2) {
                  $p="X";
                  break;
                }else{
                  $p=" ";
                }
              }
              $pdf->Cell($ancho/3,5,utf8_decode("( $p ) Jugamos"),'RLB',0,'I');
              foreach ($relac_hermanos->result() as $key) {
                if ($key->descripcion==4) {
                  $p="X";
                  break;
                }else{
                  $p=" ";
                }
              }
              $pdf->Cell($ancho/3,5,utf8_decode("( $p ) No nos llevamos"),'RLB',0,'I');
              foreach ($relac_hermanos->result() as $key) {
                if ($key->descripcion==6) {
                  $p="X";
                  break;
                }else{
                  $p=" ";
                }
              }
              $pdf->Cell($ancho/3,5,utf8_decode("( $p ) Siempre estamos peleando"),'RLB',0,'I');
            }else{
              $pdf->Cell($ancho/3,5,utf8_decode("(   ) Platicamos"),'RLB',0,'I');
              $pdf->Cell($ancho/3,5,utf8_decode("(   ) Hay respeto"),'RLB',0,'I');
              $pdf->Cell($ancho/3,5,utf8_decode("(   ) Nos apoyamos"),'RLB',0,'I');
              $pdf->SetXY($x,$y+=5);
              $pdf->Cell($ancho/3,5,utf8_decode("(   ) Jugamos"),'RLB',0,'I');
              $pdf->Cell($ancho/3,5,utf8_decode("(   ) No nos llevamos"),'RLB',0,'I');
              $pdf->Cell($ancho/3,5,utf8_decode("(   ) Siempre estamos peleando"),'RLB',0,'I');
            }


            $pdf->SetXY($x,$y+=5);
            $pdf->Cell($ancho,5,utf8_decode("¿A qué edad tuvo su primer noviazgo? $relaciones->edad_noviazgo años"),'RLB',0,'I');
            $pdf->SetXY($x,$y+=5);
            if ($relaciones->tiene_novio==1) {
                $pdf->Cell($ancho,5,utf8_decode("Actualmente tiene novio(a): (  X  ) Si   (    ) No   ¿Cuánto tiempo llevas saliendo con él (ella)? $relaciones->tiempo_novio"),'RLB',0,'I');
            }else{
              $pdf->Cell($ancho,5,utf8_decode("Actualmente tiene novio(a): (    ) Si   (  X  ) No   ¿Cuánto tiempo llevas saliendo con él (ella)? "),'RLB',0,'I');
            }

            $pdf->SetXY($x,$y+=5);

            $pdf->Cell($ancho,5,utf8_decode("¿Cuantás parejas sentimentales has tenido? $relaciones->numero_parejas"),'RLB',0,'I');
            $pdf->SetXY($x,$y+=5);
            $pdf->Cell($ancho,5,utf8_decode("En promedio ¿Cuánto tiempo ha durado con sus parejas? $relaciones->tiempo_ruptura"),'RLB',0,'I');
            $pdf->SetXY($x,$y+=5);
            $pdf->Cell($ancho,5,utf8_decode("¿Cuál ha sido el principal motivo de ruptura? $relaciones->motivo_ruptura"),'RLB',0,'I');
            $pdf->SetXY($x,$y+=5);
            $pdf->Cell($ancho,5,utf8_decode("La persona a la que mas confianza le tiene es: $relaciones->persona_confianza"),'RLB',0,'I');
            $pdf->SetXY($x,$y+=5);
            $pdf->Cell($ancho,5,utf8_decode("¿Por qué le tiene confianza? $relaciones->razon"),'RLB',0,'I');
            $pdf->SetXY($x,$y+=5);
            if ($relaciones->toma_decisiones==1) {
              $pdf->Cell($ancho,5,utf8_decode("¿Quién toma las decisiones definitivas en casa?   Papá (  X  )    Mamá (   )    Ambos (   )    Hermanos (   )"),'RLB',0,'I');
            }else if ($relaciones->toma_decisiones==2) {
              $pdf->Cell($ancho,5,utf8_decode("¿Quién toma las decisiones definitivas en casa?   Papá (   )    Mamá (  X  )    Ambos (   )    Hermanos (   )"),'RLB',0,'I');
            }else if ($relaciones->toma_decisiones==3) {
              $pdf->Cell($ancho,5,utf8_decode("¿Quién toma las decisiones definitivas en casa?   Papá (   )    Mamá (   )    Ambos (  X  )    Hermanos (   )"),'RLB',0,'I');
            }else if ($relaciones->toma_decisiones==4) {
              $pdf->Cell($ancho,5,utf8_decode("¿Quién toma las decisiones definitivas en casa?   Papá (   )    Mamá (   )    Ambos (   )    Hermanos (  X  )"),'RLB',0,'I');
            }else{
                $pdf->Cell($ancho,5,utf8_decode("¿Quién toma las decisiones definitivas en casa?   Papá (   )    Mamá (   )    Ambos (   )    Hermanos (   )"),'RLB',0,'I');
            }

            $pdf->SetXY($x,$y+=5);
            if ($relaciones->flexible_problemas==1) {
              $pdf->Cell($ancho,5,utf8_decode("¿Quién es más flexible en los problemas?   Papá (  X  )    Mamá (   )    Ambos (   )"),'RLB',0,'I');
            }else if ($relaciones->flexible_problemas==2) {
              $pdf->Cell($ancho,5,utf8_decode("¿Quién es más flexible en los problemas?   Papá (   )    Mamá (  X  )    Ambos (   )"),'RLB',0,'I');
            }else if ($relaciones->flexible_problemas==3) {
              $pdf->Cell($ancho,5,utf8_decode("¿Quién es más flexible en los problemas?   Papá (   )    Mamá (   )    Ambos (  X  )"),'RLB',0,'I');
            }else{
              $pdf->Cell($ancho,5,utf8_decode("¿Quién es más flexible en los problemas?   Papá (   )    Mamá (   )    Ambos (    )"),'RLB',0,'I');
            }
            $pdf->SetXY($x,$y+=5);
            if ($relaciones->problemas_comunicacion==1) {
              $pdf->Cell($ancho,5,utf8_decode("¿Con quién hay más problemas de comunicación?   Papá (  X  )    Mamá (   )    Ambos (   )"),'RLB',0,'I');
            }else if ($relaciones->problemas_comunicacion==2) {
              $pdf->Cell($ancho,5,utf8_decode("¿Con quién hay más problemas de comunicación?   Papá (   )    Mamá (  X  )    Ambos (   )"),'RLB',0,'I');
            }else if ($relaciones->problemas_comunicacion==3) {
              $pdf->Cell($ancho,5,utf8_decode("¿Con quién hay más problemas de comunicación?   Papá (   )    Mamá (   )    Ambos (  X  )"),'RLB',0,'I');
            }else{
              $pdf->Cell($ancho,5,utf8_decode("¿Con quién hay más problemas de comunicación?   Papá (   )    Mamá (   )    Ambos (   )"),'RLB',0,'I');
            }


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
            $consumo=$this->MGetInfo->get_consumo($alumno);
            if ($consumo->num_rows()>0) {
              foreach ($consumo->result() as $key) {
                if ($key->sustancia==1) {
                  $p=true;
                  break;
                }else{
                  $p=false;
                }
              }

              if ($p==true) {
                foreach ($consumo->result() as $key) {
                  if ($key->sustancia==1) {
                    $pdf->Cell(30,5,utf8_decode("Alcohol"),'RLB',0,'I');
                    $pdf->Cell(20,5,utf8_decode($key->parentezco),'RLB',0,'I');//integrante
                    $p=$key->frecuencia==15?"X":" ";
                    $pdf->Cell(8,5,utf8_decode("$p"),'RLB',0,'I');//diario 15
                    $p=$key->frecuencia==16?"X":" ";
                    $pdf->Cell(24,5,utf8_decode("$p"),'RLB',0,'I');//1 vez semana
                    $p=$key->frecuencia==17?"X":" ";
                    $pdf->Cell(28,5,utf8_decode("$p"),'RLB',0,'I');//3 veces semana
                    $p=$key->frecuencia==18?"X":" ";
                    $pdf->Cell(18,5,utf8_decode("$p"),'RLB',0,'I');//1 mes
                    $p=$key->frecuencia==19?"X":" ";
                    $pdf->Cell(22,5,utf8_decode("$p"),'RLB',0,'I');//Ocasionalmente
                    $p=$key->frecuencia==20?"X":" ";
                    $pdf->Cell(17,5,utf8_decode("$p"),'RLB',0,'I');//casi Nunca
                    $p=$key->frecuencia==21?"X":" ";
                    $pdf->Cell(8,5,utf8_decode("$p"),'RLB',0,'I');//nunca 21
                    break;
                  }else{
                    $p=false;
                  }
                }
              }else{
                $pdf->Cell(30,5,utf8_decode("Alcohol"),'RLB',0,'I');
                $pdf->Cell(20,5,utf8_decode(" "),'RLB',0,'I');//integrante
                $pdf->Cell(8,5,utf8_decode(" "),'RLB',0,'I');//diario
                $pdf->Cell(24,5,utf8_decode(" "),'RLB',0,'I');//1 vez semana
                $pdf->Cell(28,5,utf8_decode(" "),'RLB',0,'I');//3 veces semana
                $pdf->Cell(18,5,utf8_decode(" "),'RLB',0,'I');//1 mes
                $pdf->Cell(22,5,utf8_decode(" "),'RLB',0,'I');//Ocasionalmente
                $pdf->Cell(17,5,utf8_decode(" "),'RLB',0,'I');//casi Nunca
                $pdf->Cell(8,5,utf8_decode(" "),'RLB',0,'I');//nunca
              }
              $pdf->SetXY($x,$y+=5);
              //
              foreach ($consumo->result() as $key) {
                if ($key->sustancia==2) {
                  $p=true;
                  break;
                }else{
                  $p=false;
                }
              }

              if ($p==true) {
                foreach ($consumo->result() as $key) {
                  if ($key->sustancia==2) {
                    $pdf->Cell(30,5,utf8_decode("Cigarros"),'RLB',0,'I');
                    $pdf->Cell(20,5,utf8_decode($key->parentezco),'RLB',0,'I');//integrante
                    $p=$key->frecuencia==15?"X":" ";
                    $pdf->Cell(8,5,utf8_decode("$p"),'RLB',0,'I');//diario 15
                    $p=$key->frecuencia==16?"X":" ";
                    $pdf->Cell(24,5,utf8_decode("$p"),'RLB',0,'I');//1 vez semana
                    $p=$key->frecuencia==17?"X":" ";
                    $pdf->Cell(28,5,utf8_decode("$p"),'RLB',0,'I');//3 veces semana
                    $p=$key->frecuencia==18?"X":" ";
                    $pdf->Cell(18,5,utf8_decode("$p"),'RLB',0,'I');//1 mes
                    $p=$key->frecuencia==19?"X":" ";
                    $pdf->Cell(22,5,utf8_decode("$p"),'RLB',0,'I');//Ocasionalmente
                    $p=$key->frecuencia==20?"X":" ";
                    $pdf->Cell(17,5,utf8_decode("$p"),'RLB',0,'I');//casi Nunca
                    $p=$key->frecuencia==21?"X":" ";
                    $pdf->Cell(8,5,utf8_decode("$p"),'RLB',0,'I');//nunca 21
                    break;
                  }else{
                    $p=false;
                  }
                }
              }else{
                $pdf->Cell(30,5,utf8_decode("Cigarros"),'RLB',0,'I');
                $pdf->Cell(20,5,utf8_decode(" "),'RLB',0,'I');//integrante
                $pdf->Cell(8,5,utf8_decode(" "),'RLB',0,'I');//diario
                $pdf->Cell(24,5,utf8_decode(" "),'RLB',0,'I');//1 vez semana
                $pdf->Cell(28,5,utf8_decode(" "),'RLB',0,'I');//3 veces semana
                $pdf->Cell(18,5,utf8_decode(" "),'RLB',0,'I');//1 mes
                $pdf->Cell(22,5,utf8_decode(" "),'RLB',0,'I');//Ocasionalmente
                $pdf->Cell(17,5,utf8_decode(" "),'RLB',0,'I');//casi Nunca
                $pdf->Cell(8,5,utf8_decode(" "),'RLB',0,'I');//nunca
              }
              //

              $pdf->SetXY($x,$y+=5);
              //
              foreach ($consumo->result() as $key) {
                if ($key->sustancia==3) {
                  $p=true;
                  break;
                }else{
                  $p=false;
                }
              }

              if ($p==true) {
                foreach ($consumo->result() as $key) {
                  if ($key->sustancia==3) {
                    $pdf->Cell(30,5,utf8_decode("Alguna droga"),'RLB',0,'I');
                    $pdf->Cell(20,5,utf8_decode($key->parentezco),'RLB',0,'I');//integrante
                    $p=$key->frecuencia==15?"X":" ";
                    $pdf->Cell(8,5,utf8_decode("$p"),'RLB',0,'I');//diario 15
                    $p=$key->frecuencia==16?"X":" ";
                    $pdf->Cell(24,5,utf8_decode("$p"),'RLB',0,'I');//1 vez semana
                    $p=$key->frecuencia==17?"X":" ";
                    $pdf->Cell(28,5,utf8_decode("$p"),'RLB',0,'I');//3 veces semana
                    $p=$key->frecuencia==18?"X":" ";
                    $pdf->Cell(18,5,utf8_decode("$p"),'RLB',0,'I');//1 mes
                    $p=$key->frecuencia==19?"X":" ";
                    $pdf->Cell(22,5,utf8_decode("$p"),'RLB',0,'I');//Ocasionalmente
                    $p=$key->frecuencia==20?"X":" ";
                    $pdf->Cell(17,5,utf8_decode("$p"),'RLB',0,'I');//casi Nunca
                    $p=$key->frecuencia==21?"X":" ";
                    $pdf->Cell(8,5,utf8_decode("$p"),'RLB',0,'I');//nunca 21
                    break;
                  }else{
                    $p=false;
                  }
                }
              }else{
                $pdf->Cell(30,5,utf8_decode("Alguna droga"),'RLB',0,'I');
                $pdf->Cell(20,5,utf8_decode(" "),'RLB',0,'I');//integrante
                $pdf->Cell(8,5,utf8_decode(" "),'RLB',0,'I');//diario
                $pdf->Cell(24,5,utf8_decode(" "),'RLB',0,'I');//1 vez semana
                $pdf->Cell(28,5,utf8_decode(" "),'RLB',0,'I');//3 veces semana
                $pdf->Cell(18,5,utf8_decode(" "),'RLB',0,'I');//1 mes
                $pdf->Cell(22,5,utf8_decode(" "),'RLB',0,'I');//Ocasionalmente
                $pdf->Cell(17,5,utf8_decode(" "),'RLB',0,'I');//casi Nunca
                $pdf->Cell(8,5,utf8_decode(" "),'RLB',0,'I');//nunca
              }
              //
              //
            }else{

              $pdf->Cell(30,5,utf8_decode("Alcohol"),'RLB',0,'I');
              $pdf->Cell(20,5,utf8_decode(" "),'RLB',0,'I');//integrante
              $pdf->Cell(8,5,utf8_decode(" "),'RLB',0,'I');//diario
              $pdf->Cell(24,5,utf8_decode(" "),'RLB',0,'I');//1 vez semana
              $pdf->Cell(28,5,utf8_decode(" "),'RLB',0,'I');//3 veces semana
              $pdf->Cell(18,5,utf8_decode(" "),'RLB',0,'I');//1 mes
              $pdf->Cell(22,5,utf8_decode(" "),'RLB',0,'I');//Ocasionalmente
              $pdf->Cell(17,5,utf8_decode(" "),'RLB',0,'I');//casi Nunca
              $pdf->Cell(8,5,utf8_decode(" "),'RLB',0,'I');//nunca

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
            }

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

            $actividades=$this->MGetInfo->get_actividades($relaciones->id_relacion);
            if ($actividades->num_rows()>0) {
              foreach ($actividades->result() as $key) {
                if ($key->actividad==14) {
                  $p=true;
                  break;
                }else{
                  $p=false;
                }
              }
              if ($p==true) {
                foreach ($actividades->result() as $key) {
                  if ($key->actividad==14) {
                    $pdf->Cell(16,4,utf8_decode("siguientes"),'RL',0,'L');
                    $pdf->Cell(34,4,utf8_decode("Lavar, planchar su ropa"),'TRB',0,'L');
                    $p=$key->familiar==1?"X":" ";
                    $pdf->Cell(25,8,utf8_decode("$p"),'BRL',0,'C');
                    $p=$key->familiar==2?"X":" ";
                    $pdf->Cell(25,8,utf8_decode("$p"),'BRL',0,'C');
                    $p=$key->familiar==3?"X":" ";
                    $pdf->Cell(25,8,utf8_decode("$p"),'BRL',0,'C');
                    $p=$key->familiar==4?"X":" ";
                    $pdf->Cell(25,8,utf8_decode("$p"),'BRL',0,'C');
                    $p=$key->familiar==5?"X":" ";
                    $pdf->Cell(25,8,utf8_decode("$p"),'BRL',0,'C');
                  }
                }

              }else{
                $pdf->Cell(16,4,utf8_decode("siguientes"),'RL',0,'L');
                $pdf->Cell(34,4,utf8_decode("Lavar, planchar su ropa"),'TRB',0,'L');
                $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
                $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
                $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
                $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
                $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
              }

              $pdf->SetXY($x,$y+12);
//
foreach ($actividades->result() as $key) {
  if ($key->actividad==15) {
    $p=true;
    break;
  }else{
    $p=false;
  }
}
if ($p==true) {
  foreach ($actividades->result() as $key) {
    if ($key->actividad==15) {
      $pdf->Cell(16,4,utf8_decode("actividades"),'RL',0,'L');
      $pdf->Cell(34,4,utf8_decode("Barrer, trapear (aseo general)"),'TRB',0,'L');

      $p=$key->familiar==1?"X":" ";
      $pdf->Cell(25,8,utf8_decode("$p"),'BRL',0,'C');
      $p=$key->familiar==2?"X":" ";
      $pdf->Cell(25,8,utf8_decode("$p"),'BRL',0,'C');
      $p=$key->familiar==3?"X":" ";
      $pdf->Cell(25,8,utf8_decode("$p"),'BRL',0,'C');
      $p=$key->familiar==4?"X":" ";
      $pdf->Cell(25,8,utf8_decode("$p"),'BRL',0,'C');
      $p=$key->familiar==5?"X":" ";
      $pdf->Cell(25,8,utf8_decode("$p"),'BRL',0,'C');
    }
  }

}else{
  $pdf->Cell(16,4,utf8_decode("actividades"),'RL',0,'L');
  $pdf->Cell(34,4,utf8_decode("Barrer, trapear (aseo general)"),'TRB',0,'L');

  $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
  $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
  $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
  $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
  $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
}
//


              $pdf->SetXY($x,$y+16);
              //
              foreach ($actividades->result() as $key) {
                if ($key->actividad==16) {
                  $p=true;
                  break;
                }else{
                  $p=false;
                }
              }
              if ($p==true) {
                foreach ($actividades->result() as $key) {
                  if ($key->actividad==16) {
                    $pdf->Cell(16,4,utf8_decode("en el"),'RL',0,'L');
                    $pdf->Cell(34,4,utf8_decode("Cocinar"),'TRB',0,'L');

                    $p=$key->familiar==1?"X":" ";
                    $pdf->Cell(25,8,utf8_decode("$p"),'BRL',0,'C');
                    $p=$key->familiar==2?"X":" ";
                    $pdf->Cell(25,8,utf8_decode("$p"),'BRL',0,'C');
                    $p=$key->familiar==3?"X":" ";
                    $pdf->Cell(25,8,utf8_decode("$p"),'BRL',0,'C');
                    $p=$key->familiar==4?"X":" ";
                    $pdf->Cell(25,8,utf8_decode("$p"),'BRL',0,'C');
                    $p=$key->familiar==5?"X":" ";
                    $pdf->Cell(25,8,utf8_decode("$p"),'BRL',0,'C');
                  }
                }

              }else{
                $pdf->Cell(16,4,utf8_decode("en el"),'RL',0,'L');
                $pdf->Cell(34,4,utf8_decode("Cocinar"),'TRB',0,'L');

                $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
                $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
                $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
                $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
                $pdf->Cell(25,8,utf8_decode(" "),'BRL',0,'C');
              }

              //


              $pdf->SetXY($x,$y+20);
              $pdf->Cell(16,4,utf8_decode("hogar?"),'BRL',0,'L');
              $pdf->Cell(34,4,utf8_decode("Lavar trastes"),'TRB',0,'L');

            }else{
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

            }
            $negocio=$this->MGetInfo->get_negocio_familiar($relaciones->id_relacion);
            if ($negocio->num_rows()>0) {
              $negocio=$negocio->row();
              $pdf->SetFont('Arial','',9);
              $pdf->SetXY($x,$y+=24);
              $pdf->Cell($ancho,5,utf8_decode("¿Sus padres cuentan con algún negocio familiar?   Si (  X  )   No (   )"),'BRL',0,'I');
              $pdf->SetXY($x,$y+5);
              $pdf->Cell($ancho,5,utf8_decode("¿En qué actividades apoya? $negocio->actividades_apoyo"),'BRL',0,'I');
            }else{
              $pdf->SetFont('Arial','',9);
              $pdf->SetXY($x,$y+=24);
              $pdf->Cell($ancho,5,utf8_decode("¿Sus padres cuentan con algún negocio familiar?   Si (   )   No (   )"),'BRL',0,'I');
              $pdf->SetXY($x,$y+5);
              $pdf->Cell($ancho,5,utf8_decode("¿En qué actividades apoya?"),'BRL',0,'I');
          }

          $pdf->SetFont('Arial','B',9);
          $pdf->SetXY($x,$y+=6.350);
          $pdf->Cell($ancho,4,"5/6",'',1,'C'); //cinco

    $pdf->AddPage();
    /////////////hoja 6
      $x=20;$y=20;
      $ancho=175;
      $pdf->SetXY($x,$y);
      $pdf->SetFont('Arial','B',10);
      $pdf->Cell($ancho,8,'PROYECTO DE VIDA',1,0,'C');
      $proyecto=$this->MGetInfo->get_proy_vida($alumno);
      $proyecto=$proyecto->row();

      $pdf->SetXY($x,$y+=8);
      $pdf->SetFont('Arial','',10);
      $pdf->Cell($ancho,5,utf8_decode('¿Por qué decidió estudiar su bachillerato en CECYTEM? (Marque al menos 3 opciones)'),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $opciones=$this->MGetInfo->get_opciones_proyecto($proyecto->id_proy_vida);
      foreach ($opciones->result() as $key) {
        if ($key->id_opcion_pv==1) {
          $p=true;
          break;
        }else{
            $p=false;
          }

      }
      $op=$p==true?"X":" ";
      $pdf->Cell($ancho/2,5,'('.$op.') Porque le gustan las instalaciones','RLB',0,'L');
      foreach ($opciones->result() as $key) {
        if ($key->id_opcion_pv==5) {
          $p=true;
          break;
        }else{
          $p=false;
        }
      }
      $op=$p==true?"X":" ";
      $pdf->Cell($ancho/2,5,utf8_decode('('.$op.') La carrera de técnico en programación'),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      foreach ($opciones->result() as $key) {
        if ($key->id_opcion_pv==2) {
          $p=true;
          break;
        }else{
          $p=false;
        }
      }
      $op=$p==true?"X":" ";
      $pdf->Cell($ancho/2,5,utf8_decode('('.$op.') Porque le gusta el modelo de enseñanza'),'RLB',0,'L');
      foreach ($opciones->result() as $key) {
        if ($key->id_opcion_pv==6) {
          $p=true;
          break;
        }else{
          $p=false;
        }
      }
      $op=$p==true?"X":" ";
      $pdf->Cell($ancho/2,5,utf8_decode('('.$op.') Por recomendación de familiares o amigos'),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      foreach ($opciones->result() as $key) {
        if ($key->id_opcion_pv==3) {
          $p=true;
          break;
        }else{
          $p=false;
        }
      }
      $op=$p==true?"X":" ";
      $pdf->Cell($ancho/2,5,utf8_decode('('.$op.') La documentación que se obiene al egresar'),'RLB',0,'L');
      foreach ($opciones->result() as $key) {
        if ($key->id_opcion_pv==7) {
          $p=true;
          break;
        }else{
          $p=false;
        }
      }
      $op=$p==true?"X":" ";
      $pdf->Cell($ancho/2,5,'('.$op.') Le obligaron sus padres','RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      foreach ($opciones->result() as $key) {
        if ($key->id_opcion_pv==4) {
          $p=true;
          break;
        }else{
          $p=false;
        }
      }
      $op=$p==true?"X":" ";
      $pdf->Cell($ancho/2,5,utf8_decode('('.$op.') Por mi situación económica'),'RLB',0,'L');
      foreach ($opciones->result() as $key) {
        if ($key->id_opcion_pv>=8) {
          $p=true;
          $op=$key->opcion;
          break;
        }else{
          $p=false;
          $op=null;
        }
      }
      $op=$p==true?"X":" ";
      //
      $pdf->Cell($ancho/2,5,utf8_decode('('.$op.') Fué otra de sus opciones'),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);

      $pdf->Cell($ancho,5,utf8_decode('Otra, especifique: '.$op),'RLB',0,'L');

      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode("Sus metas en la escuela son: ".$proyecto->meta_escuela),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode("Su principal meta en la vida es: $proyecto->meta_vida"),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('¿cómo piensa lograrla? '.$proyecto->piensa_lograrla),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('¿Qué espera durante su estancia en el plantel? '.$proyecto->estancia),'RLB',0,'L');

      $pdf->SetXY($x,$y+=5);
      if ($proyecto->termino==1) {
        $pdf->Cell($ancho,5,utf8_decode('Al terminar el bachillerato, piensa continuar estudiando SI( x ) NO( ) ¿Qué? '.$proyecto->carrera),'RLB',0,'L');

      }else{
        $pdf->Cell($ancho,5,utf8_decode('Al terminar el bachillerato, piensa continuar estudiando SI( ) NO( x ) ¿Qué? '),'RLB',0,'L');
      }

      $pdf->SetXY($x,$y+=13);
      $pdf->SetFont('Arial','B',10);
      $pdf->Cell($ancho,8,utf8_decode('PERFIL PERSONAL Y ACADÉMICO DE LOS ESTUDIANTES'),1,0,'C');
      $pdf->SetXY($x,$y+=8);
      $pdf->Cell($ancho,6,utf8_decode('INSTRUCCIONES: En la columna de la derecha marca V si es Verdadero y F si es Falso'),1,0,'L');
      $pdf->SetFont('Arial','',10);
      $pdf->SetXY($x,$y+=6);
      $perfil=$this->MGetInfo->get_perfil($alumno);
      $perfil=$perfil->row();
      $op=$perfil->p1==1?"V":"F";
      $pdf->Cell($ancho-20,6,utf8_decode('1.- Mi promedio en la escuela es igual o mayor a 7.'),1,0,'L');$pdf->Cell(20,6,$op,1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $op=$perfil->p2==1?"V":"F";
      $pdf->Cell($ancho-20,6,utf8_decode('2.- Reprobé 2 o más materias en la secundaria.'),1,0,'L');$pdf->Cell(20,6,$op,1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $op=$perfil->p3==1?"V":"F";
      $pdf->Cell($ancho-20,6,utf8_decode('3.- Yo elegí el plantel de bachillerato al que asisto.'),1,0,'L');$pdf->Cell(20,6,$op,1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $op=$perfil->p4==1?"V":"F";
      $pdf->Cell($ancho-20,6,utf8_decode('4.- Asisto a la educación media superior porque creo que me será muy útil.'),1,0,'L');$pdf->Cell(20,6,$op,1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $op=$perfil->p5==1?"V":"F";
      $pdf->Cell($ancho-20,6,utf8_decode('5.- Me gusta la escuela.'),1,0,'L');$pdf->Cell(20,6,$op,1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $op=$perfil->p6==1?"V":"F";
      $pdf->Cell($ancho-20,6,utf8_decode('6.- Soy bueno para estudiar.'),1,0,'L');$pdf->Cell(20,6,$op,1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $op=$perfil->p7==1?"V":"F";
      $pdf->Cell($ancho-20,6,utf8_decode('7.- En la secundaria sentía confianza con algún maestro(a) como para platicar con él (ella).'),1,0,'L');$pdf->Cell(20,6,$op,1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $op=$perfil->p8==1?"V":"F";
      $pdf->Cell($ancho-20,6,utf8_decode('8.- En la secundaria preguntaba mis dudas al maestro(a).'),1,0,'L');$pdf->Cell(20,6,$op,1,0,'L');

      $pdf->SetXY($x,$y+=6);
      $op=$perfil->p9==1?"V":"F";
      $pdf->MultiCell($ancho-20,6,utf8_decode('9.- En la secundaria me molestaban con frecuencia otro y otros compañeros (burlas, intimidacion, golpes, extorsiones, etc).'),1,'L',0);
      $pdf->SetXY($ancho,$y);
      $pdf->Cell(20,12,$op,1,0,'L');

      $pdf->SetXY($x,$y+=12);
      $op=$perfil->p10==1?"V":"F";
      $pdf->Cell($ancho-20,6,utf8_decode('10.- Si yo reprobara alguna materia, se lo platicaría a mi mamá o mi papá.'),1,0,'L');$pdf->Cell(20,6,$op,1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $op=$perfil->p11==1?"V":"F";
      $pdf->Cell($ancho-20,6,utf8_decode('11.- Si tuviera un problema alguna personal, lo platicaría con mi mamá o mi papá.'),1,0,'L');$pdf->Cell(20,6,$op,1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $op=$perfil->p12==1?"V":"F";
      $pdf->Cell($ancho-20,6,utf8_decode('12.- Me gustaría emigrar a Estados Unidos en los próximos 5 años.'),1,0,'L');$pdf->Cell(20,6,$op,1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $op=$perfil->p13==1?"V":"F";
      $pdf->Cell($ancho-20,6,utf8_decode('13.- Es posible que me case o viva con mi pareja antes de terminar el bachillerato.'),1,0,'L');$pdf->Cell(20,6,$op,1,0,'L');

      $pdf->SetXY($x,$y+=6);
      $op=$perfil->p14==1?"V":"F";
      $pdf->MultiCell($ancho-20,6,utf8_decode('14.- Es mi casa hemos tenido problemas económicos serios (deudas, no alcanza ara los gastos del diario, etc).'),1,'L',0);
      $pdf->SetXY($ancho,$y);
      $pdf->Cell(20,12,$op,1,0,'L');

      $pdf->SetXY($x,$y+=12);
      $op=$perfil->p15==1?"V":"F";
      $pdf->Cell($ancho-20,6,utf8_decode('15.- Es más importante trabajar que estudiar'),1,0,'L');$pdf->Cell(20,6,$op,1,0,'L');

      $pdf->SetFont('Arial','B',9);
      $pdf->SetXY($x,$y+=50);
      $pdf->Cell($ancho,5,'6/6',0,0,'C');

      /////////////////////
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
        $pdf->Cell(90,8,utf8_decode($datos_generales->nombre_al." ".$datos_generales->paterno_al." ".$datos_generales->materno_al),'B',0,'C');
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
        $pdf->Cell(80,5,utf8_decode(""),'B',0,'C');
        $pdf->SetXY($x+95,$y);
        $pdf->Cell(80,5,utf8_decode($datos_generales->nombre_al." ".$datos_generales->paterno_al." ".$datos_generales->materno_al),'B',0,'C');
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
          $pdf->Cell(80,5,utf8_decode($datos_generales->nombre_al." ".$datos_generales->paterno_al." ".$datos_generales->materno_al),'B',0,'C');
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
          $pdf->Cell(80,5,utf8_decode(""),'B',0,'C');
          $pdf->SetXY($x+95,$y);
          $pdf->Cell(80,5,utf8_decode($datos_generales->nombre_al." ".$datos_generales->paterno_al." ".$datos_generales->materno_al),'B',0,'C');
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
          $pdf->Cell(65,8,utf8_decode($datos_generales->nombre_al." ".$datos_generales->paterno_al." ".$datos_generales->materno_al),'B',0,'C');
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
          $pdf->Cell(80,5,"",'B',0,'C');
          $pdf->SetXY($x,$y+=8);
          $pdf->Cell($ancho,5,utf8_decode("NOMBRE Y FIRMA DEL PADRE, MADRE O TUTOR"),'0',0,'C');

          /////////////
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
            $pdf->Cell($ancho-16,5,utf8_decode($datos_generales->nombre_al." ".$datos_generales->paterno_al." ".$datos_generales->materno_al),'B',0,'I');
            $pdf->SetXY($x,$y+=10);
            $pdf->Cell(15,8,utf8_decode("CURP: "),'0',0,'I');
            $pdf->SetXY($x+15,$y);

            for ($i=0; $i <18 ; $i++) {
              $pdf->Cell(8.5,8,$datos_generales->curp[$i],'TRBL',0,'C');
            }

            $pdf->SetXY($x,$y+=11);
            $pdf->Cell(65,8,utf8_decode("TELÉFONO CELULAR (ESTUDIANTE): "),'0',0,'I');
            $pdf->SetXY($x+65,$y);
            $pdf->Cell($ancho-65,8,utf8_decode($domicilio->celular),'B',0,'I');
            $pdf->SetXY($x,$y+=11);
            $pdf->Cell(69,5,utf8_decode("CORREO ELECTRÓNICO (ESTUDIANTE): "),'0',0,'L');
            $pdf->SetXY($x+69,$y);
            $pdf->Cell($ancho-69,5,utf8_decode($movil->correo),'B',0,'I');
            $pdf->SetXY($x,$y+=10);
            $pdf->Cell(20,5,utf8_decode("FACEBOOK: "),'0',0,'L');
            $pdf->SetXY($x+20,$y);
            $pdf->Cell($ancho-20,5,utf8_decode($movil->facebook),'B',0,'I');

            $pdf->SetFont('Courier','B',12);
            $pdf->SetXY($x,$y+=12);
            $pdf->Cell($ancho,5,utf8_decode("DIRECCIÓN"),'0',0,'C');
            $pdf->SetFont('Courier','B',10);
            $pdf->SetXY($x,$y+=10);
            $pdf->Cell(22,5,utf8_decode("DOMICILIO: "),'0',0,'L');
            $pdf->SetXY($x+22,$y);
            $pdf->Cell($ancho-80,5,utf8_decode($domicilio->calle),'B',0,'I');
            $pdf->SetXY($x+118,$y);
            $pdf->Cell(15,5,utf8_decode("NÚMERO: "),'0',0,'L');
            $pdf->SetXY($x+134,$y);
            $pdf->Cell(40,5,utf8_decode($domicilio->exterior),'B',0,'L');
            $pdf->SetXY($x,$y+=11);
            $pdf->Cell(40,5,utf8_decode("ENTRE LA CALLE: "),'0',0,'L');
            $pdf->SetXY($x+41,$y);
            $pdf->Cell(70,5,utf8_decode($domicilio->entreCalle1),'B',0,'L');
            $pdf->SetXY($x+112,$y);
            $pdf->Cell(5,5,utf8_decode("Y"),'0',0,'L');
            $pdf->SetXY($x+119,$y);
            $pdf->Cell(56,5,utf8_decode($domicilio->entreCalle2),'B',0,'L');
            $pdf->SetXY($x,$y+=11);
            $pdf->Cell(44,5,utf8_decode("MUNICIPIO/LOCALIDAD: "),'0',0,'L');
            $pdf->SetXY($x+43,$y);
            $pdf->Cell(50,5,utf8_decode($domicilio->dom_delegacion),'B',0,'L');
            $pdf->SetXY($x+93,$y);
            $pdf->Cell(33,5,utf8_decode("COLONIA/BARRIO: "),'0',0,'L');
            $pdf->SetXY($x+125,$y);
            $pdf->Cell(50,5,utf8_decode($domicilio->colonia),'B',0,'L');
            $pdf->SetXY($x,$y+=11);
            $pdf->Cell(27,5,utf8_decode("REFERENCIAS: "),'0',0,'L');
            $pdf->SetXY($x+27,$y);
            $pdf->Cell($ancho-27,5,utf8_decode($domicilio->referencia),'B',0,'L');
            $pdf->SetXY($x,$y+=11);
            $pdf->Cell(45,5,utf8_decode("ACTUALMENTE VIVE CON: "),'0',0,'L');
            $pdf->SetXY($x+45,$y);
            $pdf->Cell($ancho-45,5,utf8_decode(" "),'B',0,'L');////////////////
            $pdf->SetXY($x,$y+=11);
            $pdf->Cell(50,5,utf8_decode("TELÉFONO DE EMERGENCIA: "),'0',0,'L');
            $pdf->SetXY($x+50,$y);
            $pdf->Cell($ancho-50,5,utf8_decode($domicilio->tel_emergencia),'B',0,'L');


            $pdf->SetFont('Courier','B',12);
            $pdf->SetXY($x,$y+=13);
            $pdf->Cell($ancho,5,utf8_decode("DATOS FAMILIARES"),'0',0,'C');
            $pdf->SetFont('Courier','B',10);
            $pdf->SetXY($x,$y+=10);
            $pdf->Cell(37,5,utf8_decode("NOMBRE DEL PADRE: "),'0',0,'L');
            $pdf->SetXY($x+37,$y);
            $padre=$this->MGetInfo->get_padres($alumno);
            if ($padre->num_rows()>0) {
              $padre=$padre->row();
              $pdf->Cell($ancho-37,5,utf8_decode($padre->nombre_padre." ".$padre->paterno_padre." ".$padre->materno_padre),'B',0,'L');
              $pdf->SetXY($x,$y+=11);

              $pdf->Cell(58,5,utf8_decode("TELÉFONO CELULAR DEL PADRE: "),'0',0,'L');
              $pdf->SetXY($x+58,$y);
              $pdf->Cell($ancho-58,5,utf8_decode($padre->cel),'B',0,'L');
              $pdf->SetXY($x,$y+=11);
            }else{
              $pdf->Cell($ancho-37,5,"",'B',0,'L');
              $pdf->SetXY($x,$y+=11);

              $pdf->Cell(58,5,utf8_decode("TELÉFONO CELULAR DEL PADRE: "),'0',0,'L');
              $pdf->SetXY($x+58,$y);
              $pdf->Cell($ancho-58,5,"",'B',0,'L');
              $pdf->SetXY($x,$y+=11);
            }

            $madre=$this->MGetInfo->get_madre($alumno);
            if ($madre->num_rows()>0) {
              $madre=$madre->row();

              $pdf->Cell(41,5,utf8_decode("NOMBRE DE LA MADRE: "),'0',0,'L');
              $pdf->SetXY($x+41,$y);
              $pdf->Cell($ancho-41,5,utf8_decode($madre->nombre_padre." ".$madre->paterno_padre." ".$madre->materno_padre),'B',0,'L');
              $pdf->SetXY($x,$y+=11);
              $pdf->Cell(62,5,utf8_decode("TELÉFONO CELULAR DE LA MADRE: "),'0',0,'L');
              $pdf->SetXY($x+62,$y);
              $pdf->Cell($ancho-62,5,utf8_decode($madre->cel),'B',0,'L');
              $pdf->SetXY($x,$y+=11);
              $pdf->Cell(37,5,utf8_decode("TELÉFONO DE CASA: $madre->tel_casa"),'0',0,'L');
            }else{
              $pdf->Cell(41,5,utf8_decode("NOMBRE DE LA MADRE: "),'0',0,'L');
              $pdf->SetXY($x+41,$y);
              $pdf->Cell($ancho-41,5,"",'B',0,'L');
              $pdf->SetXY($x,$y+=11);
              $pdf->Cell(62,5,utf8_decode("TELÉFONO CELULAR DE LA MADRE: "),'0',0,'L');
              $pdf->SetXY($x+62,$y);
              $pdf->Cell($ancho-62,5,"",'B',0,'L');
              $pdf->SetXY($x,$y+=11);
              $pdf->Cell(37,5,utf8_decode("TELÉFONO DE CASA:"),'0',0,'L');
            }

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

            /////adicion 29 de dic

            $pdf->AddPage();
              //HOJA 1
              $pdf->SetFont('Arial','B',10);
                $pdf->Cell(195,10,utf8_decode("Solicitud de Inscripción"),0,0,'C');
                $pdf->Image('C:\xampp\htdocs\SIREANI\application\views\img\gobmex.jpg',12,5,50);
                $pdf->Image('C:\xampp\htdocs\SIREANI\application\views\img\cecytem.gif',175,5,20);
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
                setlocale(LC_TIME,"es_MX");
                $fecha=strftime("%d de %B de %Y");
                $pdf->Cell(40,5,utf8_decode("".$fecha),'B',0,'C');
                $pdf->SetFont('Arial','B',10);
                $pdf->SetXY(20,55);
                $pdf->Cell(15,5,utf8_decode("Datos personales del aspirante:"),'',0,'L');
                $pdf->SetXY(170,25);
                $pdf->Cell(25,35,"FOTO",1,1,'C');

                $pdf->Rect(20,60,175,35);

              $x=20;$y=60;
              $ancho=175;
                $pdf->SetFont('Arial','',9);
                $pdf->SetXY($x,$y);
                $pdf->Cell(14,5,"Nombre:",'',0,'L');
                $pdf->SetXY($x+14,$y);
                $pdf->Cell(154,5,utf8_decode("$datos_generales->paterno_al \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t $datos_generales->materno_al \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t $datos_generales->nombre_al"),'B',0,'C');
                $pdf->SetXY($x,$y+=5);
                $pdf->Cell(173,5,utf8_decode("apellido paterno                                         apellido materno                                          nombre(s)"),'',0,'C');
                $pdf->SetXY($x,$y+=5);
                $pdf->Cell(32,5,utf8_decode("Fecha de nacimiento: "),'',0,'L');
                $pdf->SetXY($x+32,$y);

                $pdf->Cell(44,5,utf8_decode("$datos_generales->fecha_nacimiento_al"),'LRTB',0,'C');

                $pdf->SetXY($x+77,$y);
                $pdf->Cell(30,5,utf8_decode("Lugar de nacimiento:"),'',0,'L');
                $pdf->SetXY($x+108,$y);
                $pdf->Cell(65,5,utf8_decode("$datos_generales->lugar_nacimiento"),'B',0,'C');
                $pdf->SetXY($x,$y+=5);
                $pdf->Cell(173,3,utf8_decode("                                        Año       Mes            Día"),'',0,'L');
                $pdf->SetXY($x,$y+=4);
                $pdf->Cell(28,5,utf8_decode("CURP (18 dígitos):"),'',0,'L');

                for ($i=0; $i < 18; $i++) {
                  $pdf->Cell(6,5,$datos_generales->curp[$i],'TRLB',0,'L');
                }

                $pdf->SetXY($x,$y+=6);
                $pdf->Cell(10,5,utf8_decode("Sexo:"),'',0,'L');
                $pdf->SetXY($x+10,$y);
                $p=$datos_generales->sexo=="M"?"X":" ";
                $pdf->Cell(5,5,utf8_decode("$p"),'BTLR',0,'L');
                $pdf->SetXY($x+15,$y);
                $pdf->Cell(17,3,utf8_decode("Masculino"),'',0,'L');
                $pdf->SetXY($x+32,$y);
                $p=$datos_generales->sexo=="F"?"X":" ";
                $pdf->Cell(5,5,utf8_decode("$p"),'BTLR',0,'L');
                $pdf->SetXY($x+37,$y);
                $pdf->Cell(17,3,utf8_decode("Femenino"),'',0,'L');
                $pdf->SetXY($x,$y+=4);
                $pdf->Cell(35,5,utf8_decode("Padecimiento o alergia:"),'',0,'L');
                $pdf->SetXY($x+35,$y);
                $pdf->Cell(138,5,utf8_decode("$salud->alergias"),'B',0,'L');

                $domicilio=$this->MGetInfo->get_domicilio2($alumno);
                //$domicilio=$domicilio->row();
                $pdf->SetFont('Arial','B',10);
                $pdf->SetXY($x,$y+=6);
                $pdf->Cell(40,5,utf8_decode("Dirección del aspirante:"),'',0,'L');
                $pdf->Rect(20,100,175,15);

                $pdf->SetFont('Arial','',9);
                $pdf->SetXY($x,$y+=5);
                $pdf->Cell(10,5,"Calle:",'',0,'L');
                $pdf->SetXY($x+10,$y);
                $pdf->Cell(100,5,utf8_decode("$domicilio->calle"),'B',0,'L');
                $pdf->SetXY($x+110,$y);
                $pdf->Cell(13,5,utf8_decode("Número:"),'',0,'L');
                $pdf->SetXY($x+123,$y);
                $pdf->Cell(50,5,utf8_decode("$domicilio->exterior"),'B',0,'C');
                $pdf->SetXY($x,$y+=5);
                $pdf->Cell(13,5,"Colonia:",'',0,'L');
                $pdf->SetXY($x+13,$y);
                $pdf->Cell(50,5,utf8_decode("$domicilio->colonia"),'B',0,'C');
                $pdf->SetXY($x+63,$y);
                $pdf->Cell(16,5,"Localidad:",'',0,'L');
                $pdf->SetXY($x+79,$y);
                $pdf->Cell(60,5,utf8_decode("$domicilio->delegacion"),'B',0,'L');
                $pdf->SetXY($x+139,$y);
                $pdf->Cell(8,5,utf8_decode("C.P.:"),'',0,'L');
                $pdf->SetXY($x+147,$y);
                $pdf->Cell(26,5,utf8_decode("$domicilio->codigoPostal"),'B',0,'L');
                $pdf->SetXY($x,$y+=5);
                $pdf->Cell(33,5,utf8_decode("Municipio/Delegación:"),'',0,'L');
                $pdf->SetXY($x+33,$y);
                $pdf->Cell(60,5,utf8_decode("$domicilio->municipio"),'B',0,'L');
                $pdf->SetXY($x+93,$y);
                $pdf->Cell(13,5,utf8_decode("Estado:"),'',0,'L');
                $pdf->SetXY($x+106,$y);
                $pdf->Cell(67,5,utf8_decode("$domicilio->estado"),'B',0,'C');


                $pdf->SetFont('Arial','B',10);
                $pdf->SetXY($x,$y+=5);
                $pdf->Cell(40,5,utf8_decode("Datos de contacto:"),'',0,'L');
                $pdf->Rect(20,120,175,15);

                $pdf->SetFont('Arial','',9);
                $pdf->SetXY($x+5,$y+=5);
                $pdf->Cell(50,5,"$domicilio->tel_casa",'BLRT',0,'L');
                $pdf->SetXY($x+65,$y);
                $pdf->Cell(50,5,"$domicilio->celular",'BLRT',0,'L');
                $pdf->SetXY($x+120,$y);
                $pdf->Cell(50,5,"$movil->correo",'B',0,'L');
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
                $pdf->Cell(36,5,"$domicilio->tel_emergencia",'B',0,'L');

                $pdf->SetFont('Arial','B',10);
                $pdf->SetXY($x,$y+=6);
                $pdf->Cell(42,5,utf8_decode("Datos del padre o tutor:"),'',0,'L');
                $pdf->Rect(20,140,175,21);
                /////
                $madre=$this->MGetInfo->get_madre($alumno);
                $padre=$this->MGetInfo->get_padres($alumno);
                $tutor=$this->MGetInfo->get_tutor($alumno);
                if ($madre->num_rows()>0) {
                  $datos_tutor=$madre->row();
                }else if($padre->num_rows()>0){
                  $datos_tutor=$padre->row();
                }else if($tutor->num_rows()>0){
                  $datos_tutor=$tutor->row();
                }

                $pdf->SetFont('Arial','',9);
                $pdf->SetXY($x,$y+=5);
                $pdf->Cell(14,5,"Nombre:",'',0,'L');
                $pdf->SetXY($x+14,$y);
                $pdf->Cell(154,5,utf8_decode("$datos_tutor->paterno_padre \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t $datos_tutor->materno_padre \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t $datos_tutor->nombre_padre"),'B',0,'C');
                $pdf->SetXY($x,$y+=5);
                $pdf->Cell(173,5,utf8_decode("apellido paterno                                         apellido materno                                          nombre(s)"),'',0,'C');
                $pdf->SetXY($x,$y+=4);
                $pdf->Cell(28,5,utf8_decode("CURP (18 dígitos):"),'',0,'L');

                for ($i=0; $i < 18; $i++) {
                  $pdf->Cell(6,5,$datos_tutor->curp[$i],'TRLB',0,'L');
                }

                $pdf->SetXY($x,$y+=6);
                $pdf->Cell(37,5,utf8_decode("Último grado de estudios:"),'',0,'L');
                $pdf->SetXY($x+37,$y);
                $p=$datos_tutor->grado_estudio=="Primaria incompleta"  || $datos_tutor->grado_estudio=="Primaria concluída"  ?"X":" ";
                $pdf->Cell(5,5,utf8_decode("$p"),'BLRT',0,'C');
                $pdf->SetXY($x+42,$y);
                $pdf->Cell(13,5,utf8_decode("Primaria"),'',0,'L');
                $pdf->SetXY($x+57,$y);
                $p=$datos_tutor->grado_estudio=="Secundaria incompleta"  || $datos_tutor->grado_estudio=="Secundaria concluída"  ?"X":" ";
                $pdf->Cell(5,5,utf8_decode("$p"),'BLRT',0,'C');
                $pdf->SetXY($x+62,$y);
                $pdf->Cell(17,5,utf8_decode("Secundaria"),'',0,'L');
                $pdf->SetXY($x+81,$y);
                $p=$datos_tutor->grado_estudio=="Bachillerato incompleto"  || $datos_tutor->grado_estudio=="Bachillerato concluído"  ?"X":" ";
                $pdf->Cell(5,5,utf8_decode("$p"),'BLRT',0,'C');
                $pdf->SetXY($x+86,$y);
                $pdf->Cell(18,5,utf8_decode("Bachillerato"),'',0,'L');
                $pdf->SetXY($x+106,$y);
                $p=$datos_tutor->grado_estudio=="Carrera técnica" || $datos_tutor->grado_estudio=="Tec. Sup. Universitario" ?"X":" ";

                $pdf->Cell(5,5,utf8_decode("$p"),'BLRT',0,'C');
                $pdf->SetXY($x+111,$y);
                $pdf->Cell(12,5,utf8_decode("Técnica"),'',0,'L');
                $pdf->SetXY($x+125,$y);
                $p=$datos_tutor->grado_estudio=="Licenciatura concluía" || $datos_tutor->grado_estudio=="Licenciatura incompleta" ?"X":" ";

                $pdf->Cell(5,5,utf8_decode("$p"),'BLRT',0,'C');
                $pdf->SetXY($x+130,$y);
                $pdf->Cell(18,5,utf8_decode("Profesional"),'',0,'L');
                $pdf->SetXY($x+148,$y);
                $p=$datos_tutor->grado_estudio=="Maestría" ?"X":" ";

                $pdf->Cell(5,5,utf8_decode("$p"),'BLRT',0,'C');
                $pdf->SetXY($x+153,$y);
                $pdf->Cell(18,5,utf8_decode("Maestría"),'',0,'L');

                //

                $pdf->SetFont('Arial','B',10);
                $pdf->SetXY($x,$y+=6);
                $pdf->Cell(82,5,utf8_decode("Datos de la escuela secundaria de procedencia:"),'',0,'L');
                $pdf->Rect(20,166,175,11);

                $pdf->SetFont('Arial','',9);
                $pdf->SetXY($x,$y+=5);
                $pdf->Cell(50,5,utf8_decode("Nombre completo de la institución:"),'',0,'L');
                $pdf->SetXY($x+50,$y);
                $pdf->Cell(120,5,utf8_decode("$datos_generales->nombre_sec"),'B',0,'L');
                $pdf->SetXY($x,$y+=5);
                $pdf->Cell(33,5,utf8_decode("CCT de la secundaria:"),'',0,'L');
                $pdf->SetXY($x+33,$y);
                $pdf->Cell(70,5,utf8_decode("$datos_generales->cct"),'B',0,'L');
                $pdf->SetXY($x+103,$y);
                $pdf->Cell(40,5,utf8_decode("Promedio general obtenido:"),'',0,'L');
                $pdf->SetXY($x+143,$y);
                $pdf->Cell(30,5,utf8_decode("$datos_generales->promedio"),'B',0,'L');

                $pdf->SetFont('Arial','B',10);
                $pdf->SetXY($x,$y+=6);
                $pdf->Cell(82,5,utf8_decode("Documentación entregada (para uso exclusivo del Colegio)"),'',0,'L');

                $pdf->SetFont('Arial','',9);
                $pdf->SetXY($x,$y+=5);
                $pdf->Cell(2,5,utf8_decode("1"),'',0,'C');
                $pdf->SetXY($x+4,$y);
                $pdf->Cell(5,5,utf8_decode(""),'BLTR',0,'C');
                $pdf->Write(5,"*Copia de constancia domiciliaria");
                $pdf->SetXY($x+68,$y);
                $pdf->Cell(2,5,utf8_decode("4"),'',0,'C');
                $pdf->SetXY($x+72,$y);
                $pdf->Cell(5,5,utf8_decode(""),'BLTR',0,'C');
                $pdf->Write(5,"*Copia de acta de nacimiento");
                $pdf->SetXY($x+126,$y);
                $pdf->Cell(2,5,utf8_decode("7"),'',0,'C');
                $pdf->SetXY($x+130,$y);
                $pdf->Cell(5,5,utf8_decode(""),'BLTR',0,'C');
                $pdf->Write(5,utf8_decode("6 fotografías tamaño infantil"));

                $pdf->SetXY($x,$y+=5);
                $pdf->Cell(2,5,utf8_decode("2"),'',0,'C');
                $pdf->SetXY($x+4,$y);
                $pdf->Cell(5,5,utf8_decode(""),'BLTR',0,'C');
                $pdf->Write(5,utf8_decode("Comprobante de pago de inscripción"));
                $pdf->SetXY($x+68,$y);
                $pdf->Cell(2,5,utf8_decode("5"),'',0,'C');
                $pdf->SetXY($x+72,$y);
                $pdf->Cell(5,5,utf8_decode(""),'BLTR',0,'C');
                $pdf->Write(5,utf8_decode("Certificado médico oficial"));
                $pdf->SetXY($x+135,$y);
                $pdf->Cell(40,10,utf8_decode(""),'BLTR',0,'C');

                $pdf->SetXY($x,$y+=5);
                $pdf->Cell(2,5,utf8_decode("3"),'',0,'C');
                $pdf->SetXY($x+4,$y);
                $pdf->Cell(5,5,utf8_decode(""),'BLTR',0,'C');
                $pdf->Write(5,"*Copia certificado de secundaria");
                $pdf->SetXY($x+68,$y);
                $pdf->Cell(2,5,utf8_decode("6"),'',0,'C');
                $pdf->SetXY($x+72,$y);
                $pdf->Cell(5,5,utf8_decode(""),'BLTR',0,'C');
                $pdf->Write(5,utf8_decode("Copia de la CURP"));
                $pdf->SetXY($x,$y+=5);
                $pdf->Write(5,"* cotejar con originales");
                $pdf->SetXY($x+135,$y);
                $pdf->Cell(40,5,utf8_decode("Revisó y Recibió"),'BLTR',0,'C');

                $pdf->SetXY($x,$y+=10);
                $pdf->SetFont('Arial','',7);
                $pdf->Cell(80,5,utf8_decode("Declaro que los datos registrados son correctos y me"),'',0,'C');
                $pdf->SetXY($x+97,$y);
                $pdf->Cell(80,5,utf8_decode("Estoy de acuerdo en asistir a las reuniones a que se convoque y"),'',0,'C');
                $pdf->SetXY($x,$y+=3);
                $pdf->Cell(80,5,utf8_decode("comprometo a cumplir y respetar el reglamento escolar vigente"),'',0,'C');
                $pdf->SetXY($x+97,$y);
                $pdf->Cell(80,5,utf8_decode("colaborar para que el comportamiento y aprovechamiento de mi hijo"),'',0,'C');
                $pdf->SetXY($x+97,$y+=3);
                $pdf->Cell(80,5,utf8_decode("sea el adecuado, de acuerdo con los reglamentos de la institución"),'',0,'C');

                $pdf->SetXY($x,$y+=20);
                $pdf->Cell(80,5,utf8_decode(""),'B',0,'C');
                $pdf->SetXY($x+95,$y);
                $pdf->Cell(80,5,utf8_decode(""),'B',0,'C');

                $pdf->SetFont('Arial','',10);
                $pdf->SetXY($x,$y+=8);
                $pdf->Cell(80,5,utf8_decode("Firma del alumno"),'0',0,'C');
                $pdf->SetXY($x+97,$y);
                $pdf->Cell(80,5,utf8_decode("Firma del padre o tutor"),'0',0,'C');


          /////segunda adicion 29 de dic
          $pdf->AddPage();
            //HOJA 4
            $x=20;$y=15;
            $ancho=175;
            // Ejercico y deportes
            $pdf->SetFont('Arial','B',10);
              $pdf->Cell(195,10,utf8_decode("SOLICITUD PARA LA INCORPORACIÓN DE ESTUDIANTES AL"),0,1,'C');
              $pdf->Cell(195,5,utf8_decode("SEGURO FACULTATIVO DEL REGIMEN DEL SEGURO SOCIAL"),0,0,'C');

              $pdf->Image('C:\xampp\htdocs\SIREANI\application\views\img\IMSS.jpg',20,40,15);
              ////$pdf->Image('C:\xampp\htdocs\SIREANI\application\views\img\cuerpo.jpg',$x+40,115,100);
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
              $pdf->Cell(155,5,utf8_decode("$datos_generales->paterno_al \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t $datos_generales->materno_al \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t $datos_generales->nombre_al"),'BR',0,'C');
              $pdf->SetXY($x,$y+=5);
              $pdf->Cell($ancho,5,utf8_decode("A. PATERNO                               A. MATERNO                              NOMBRE (S)"),'LR',0,'C');
              $pdf->SetXY($x,$y+=5);
              $p=$datos_generales->sexo=="M"?"X":" ";
              $op=$datos_generales->sexo=="F"?"X":" ";
              $pdf->Cell($ancho,5,utf8_decode("B) SEXO                               1) MASCULINO  ( $p )                             2) FEMENINO   ( $op )                              "),'LR',0,'C');
              $pdf->SetXY($x,$y+=5);
              $pdf->Cell($ancho,5,utf8_decode("C) FECHA DE NACIMIENTO                                                                                                        (   $datos_generales->fecha_nacimiento_al     )"),'LR',0,'C');
              $pdf->SetXY($x,$y+=5);
              $pdf->Cell($ancho,5,utf8_decode("                                                                                                                                                     AÑO      MES    DÍA"),'LR',0,'C');
              $pdf->SetXY($x,$y+=5);
              $pdf->Cell(42,5,utf8_decode("D) LUGAR DE NACIMIENTO"),'L',0,'L');
              $pdf->SetXY($x+42,$y);
              $pdf->Cell(113,5,utf8_decode("$datos_generales->lugar_nacimiento"),'B',0,'C');
              $pdf->SetXY($x+155,$y);
              $pdf->Cell(20,5,utf8_decode(""),'R',0,'C');
              $pdf->SetXY($x,$y+=5);
              $pdf->Cell(20,5,utf8_decode("E) DOMICILIO"),'L',0,'L');
              $pdf->SetXY($x+25,$y);
              $pdf->Cell(150,5,utf8_decode("$domicilio->calle \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t $domicilio->exterior \t\t\t\t\t\t\t\t\t\t $domicilio->delegacion \t\t\t\t\t\t\t\t\t\t\t\t\t\t $domicilio->codigoPostal"),'BR',0,'C');
              $pdf->SetXY($x,$y+=5);
              $pdf->Cell($ancho,5,utf8_decode("CALLE                            NÚMERO                          LOCALIDAD              CÓDIGO POSTAL"),'LR',1,'C');
              $pdf->SetXY($x,$y+=5);
              $pdf->Cell(50,5,utf8_decode(""),'L',0,'C');
              $pdf->SetXY($x+50,$y);
              $pdf->Cell(50,5,utf8_decode("$domicilio->municipio"),'B',0,'C');
              $pdf->SetXY($x+125,$y);
              $pdf->Cell(50,5,utf8_decode("$domicilio->estado"),'BR',0,'C');
              $pdf->SetXY($x,$y+=5);
              $pdf->Cell($ancho,5,utf8_decode("                                                              MUNICIPIO                                                            ENTIDAD FEDERATIVA"),'LR',1,'C');
              $pdf->SetXY($x,$y+=5);
              $pdf->Cell(45,5,utf8_decode("F) NOMBRE DE LOS PADRES"),'L',0,'L');
              $pdf->SetXY($x+65,$y);
              $padre=$this->MGetInfo->get_padres($alumno);
              if ($padre->num_rows()>0) {
                $padre=$padre->row();
                $pdf->Cell(110,5,utf8_decode("PADRE: $padre->nombre_padre\t $padre->paterno_padre \t $padre->materno_padre"),'R',0,'L');
              }else{
                $pdf->Cell(110,5,utf8_decode("PADRE:"),'R',0,'L');

              }
              $pdf->SetXY($x,$y+=5);

              $madre=$this->MGetInfo->get_madre($alumno);
              $pdf->Cell(68,5,utf8_decode(""),'L',0,'L');
              $pdf->SetXY($x+65,$y);
              if ($madre->num_rows()>0) {
                $madre=$madre->row();
                $pdf->Cell(110,5,utf8_decode("MADRE: $madre->nombre_padre \t $madre->paterno_padre \t $madre->materno_padre"),'R',0,'L');

              }else{
                $pdf->Cell(110,5,utf8_decode("MADRE:"),'R',0,'L');

              }
              $pdf->SetXY($x,$y+=5);
              $trabajo=$this->MGetInfo->get_trabajo($alumno);
              $p=$trabajo->num_rows()>0?"X":" ";
              $po=$trabajo->num_rows()==0?"X":" ";
              $pdf->Cell($ancho,5,utf8_decode("G) ¿ADEMÁS DE ESTUDIAR TRABAJA?                              1) SÍ    (  $p  )                          2) NO   (  $po  )                 "),'LR',0,'L');
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
    //2710
    //2835


  }

}
