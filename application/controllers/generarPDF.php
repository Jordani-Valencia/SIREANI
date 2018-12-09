<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class generarPDF extends CI_Controller {

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
        $pdf->Cell(84,5,$datos_generales->lugar_nacimiento,'RLB',0,'L');

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

      // escuela,domicilio delegacion,entidad (secundaria)
      $pdf->SetXY($x,$y+=5);
        $pdf->Cell(35,4,utf8_decode("Datos de la"),'RL',0,'L');
        $pdf->SetXY($x,$y+4);
        $pdf->Cell(35,4,utf8_decode("escuela en donde"),'RL',0,'L');
        $pdf->SetXY($x,$y+8);
        $pdf->Cell(35,4,utf8_decode("cursó el último"),'RL',0,'L');
        $pdf->SetXY($x,$y+12);
        $pdf->Cell(35,4,utf8_decode("ciclo escolar"),'BRL',0,'L');



        $pdf->SetXY($x+35,$y);
        $pdf->Cell(35,8,utf8_decode("Nombre de la escuela"),'RL',0,'L');
        $pdf->Cell(35,8,utf8_decode("Domicilio de la escuela"),'RL',0,'L');
        $pdf->Cell(35,8,utf8_decode("Delegacion o municipio"),'RL',0,'L');
        $pdf->Cell(35,8,utf8_decode("Entidad Federativa"),'RL',0,'L');

        $pdf->SetXY($x+35,$y+8);
        $pdf->Cell(35,8,utf8_decode($datos_generales->nombre_sec),'RBL',0,'L');
        $pdf->Cell(35,8,utf8_decode($datos_generales->domicilio_sec),'RLB',0,'L');
        $pdf->Cell(35,8,utf8_decode($datos_generales->mun_del_sec),'RLB',0,'L');
        $pdf->Cell(35,8,utf8_decode($datos_generales->estado_secundaria),'RBL',0,'L');

      //TURNO, promedio
      $pdf->SetXY($x,$y+=16);
        $pdf->Cell(20,6,utf8_decode("Turno: "),'RBL',0,'L');
        $pdf->Cell(30,6,utf8_decode($datos_generales->turno ==1?"Matutino":"Vespertino"),'RB',0,'L');
        $pdf->Cell(105,6,"Promedio de calificaciones en el ciclo anterior: ",'RBL',0,'L');
        $pdf->Cell(20,6,$datos_generales->promedio,'RB',0,'L');
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
      if ($datos_beca->num_rows()>0) {
        $trabajo=$datos_beca->row();
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
          $pdf->Cell(55,6,utf8_decode(""),'RLB',0,'L');
          $pdf->Cell(55,6,utf8_decode(""),'RLB',0,'L');
          $pdf->Cell(65,6,utf8_decode(""),'RLB',0,'L');

        //fecha lugar dlegacion ,nacimietno
        $pdf->SetXY($x,$y+=6);
          $pdf->Cell(40,5,"Fecha de Nacimiento:",'RL',0,'L');
          $pdf->Cell(60,5,"Lugar de Nacimiento:",'RL',0,'L');
          $pdf->Cell(75,5,utf8_decode("Delegación o municipio:"),'RL',0,'L');

          $pdf->SetXY($x,$y+=5);
          $pdf->Cell(40,6,utf8_decode(""),'RLB',0,'L');
          $pdf->Cell(60,6,utf8_decode(""),'RLB',0,'L');
          $pdf->Cell(75,6,utf8_decode(""),'RLB',0,'L');

        //endidad pais curp
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
        //grado de estudios
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
              $pdf->Cell(55,6,utf8_decode(""),'RLB',0,'L');
              $pdf->Cell(55,6,utf8_decode(""),'RLB',0,'L');
              $pdf->Cell(65,6,utf8_decode(""),'RLB',0,'L');

            //fecha lugar dlegacion ,nacimietno
            $pdf->SetXY($x,$y+=6);
              $pdf->Cell(40,5,"Fecha de Nacimiento:",'RL',0,'L');
              $pdf->Cell(60,5,"Lugar de Nacimiento:",'RL',0,'L');
              $pdf->Cell(75,5,utf8_decode("Delegación o municipio:"),'RL',0,'L');

              $pdf->SetXY($x,$y+=5);
              $pdf->Cell(40,6,utf8_decode(""),'RLB',0,'L');
              $pdf->Cell(60,6,utf8_decode(""),'RLB',0,'L');
              $pdf->Cell(75,6,utf8_decode(""),'RLB',0,'L');

            //endidad pais curp
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

            //grado de estudios

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

        //INGRESOS FAMILIARES
        $pdf->SetFont('Arial','B',10);
          $pdf->SetXY($x,$y+=10);
          $pdf->Cell($ancho,6,utf8_decode("INGRESOS FAMILIARES"),1,0,'C');

          $pdf->SetFont('Arial','',10);
          $pdf->SetXY($x,$y+=6);
          $pdf->Cell(101,5,utf8_decode("¿Cuántas personas que viven en su casa tienen ingresos?"),1,0,'L');
          $pdf->Cell(11,5,utf8_decode("1( )"),1,0,'C');
          $pdf->Cell(11,5,utf8_decode("2( )"),1,0,'C');
          $pdf->Cell(11,5,utf8_decode("3( )"),1,0,'C');
          $pdf->Cell(11,5,utf8_decode("4( )"),1,0,'C');
          $pdf->Cell(30,5,utf8_decode("5 o más( )"),1,0,'C');

          $pdf->SetXY($x,$y+=5);
          $pdf->Cell(75,8,utf8_decode("¿De quién depende económicamente?"),1,0,'L');
          $pdf->Cell(20,8,utf8_decode("Padre( )"),1,0,'L');
          $pdf->Cell(25,8,utf8_decode("Madre( )"),1,0,'L');
          $pdf->Cell(25,8,utf8_decode("Hermano( )"),1,0,'L');
          $pdf->Cell(30,4,utf8_decode("Otro, especificar"),'LR',0,'L');
          $pdf->SetXY(165,$y+4);
          $pdf->Cell(30,4,utf8_decode(""),'LRB',0,'L');

        //INGRESSOS FAMILIARES MENSUALES
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

          for ($i=0; $i < 5; $i++) {
            $pdf->SetXY($x,$y+=4);
              $pdf->Cell(60,4,utf8_decode(''),'RBL',0,'C');
              $pdf->Cell(18,4,'','RLB',0,'C');
              $pdf->Cell(18,4,'','RLB',0,'C');
              $pdf->Cell(18,4,'','RBL',0,'C');
              $pdf->Cell(18,4,'','RBL',0,'C');
              $pdf->Cell(18,4,'','RLB',0,'C');
              $pdf->Cell(25,4,'','RLB',0,'C');
          }

        $pdf->SetXY($x,$y+=17);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell($ancho,5,'2/6',0,0,'C');

    $pdf->AddPage();
      $x=20;$y=20;
      $ancho=175;
      $arr_socioeconomico=["Agua Potable","Computadora","Drenaje","Laptop","Electricidad",
        "Tableta","Lavadora de ropa","Internet","Estufa de gas","Televisión de paga(Sky, Dish, Cable)",
        "Horno de microondas","VHS","Refrigerador","DVD","Línea telefónica","Blu-Ray"];

      $pdf->SetXY($x,$y);
      $pdf->SetFont('Arial','B',10);
      $pdf->Cell($ancho,5,utf8_decode('AMBIENTE SOCIOECONOMICO'),1,0,'C');
      $pdf->SetXY($x,$y+=5);
      $pdf->SetFont('Arial','I',10);
      $pdf->Cell($ancho,4,'Marque con una "X" los bienes y servicios que tiene su vivienda',1,0,'C');
      $pdf->SetXY($x,$y+=4);
      $pdf->SetFont('Arial','',10);
      for ($i=0; $i <16; $i++) {
        $pdf->Cell(60,5,utf8_decode($arr_socioeconomico[$i++]),'BRL',0,'L');
        $pdf->Cell(25,5,'No ( ) Si ( )','RLB',0,'C');
        $pdf->Cell(65,5,utf8_decode($arr_socioeconomico[$i]),'RLB',0,'L');
        $pdf->Cell(25,5,'No ( ) Si ( )','RLB',0,'C');
        $pdf->SetXY($x,$y+=5);
      }
      $pdf->Cell(90,5,'Para tu uso personal cuentas con:','RLB',0,'L');
      $pdf->Cell(85,5,utf8_decode('¿Cuántos focos hay dentro de su vivienda?'),'RLB',0,'C');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell(65,5,utf8_decode('Reproductor digital portátil de música'),'RLB',0,'L');
      $pdf->Cell(25,5,'No ( ) Si ( )','RLB',0,'C');
      $pdf->Cell(13,5,'1 (  )','RLB',0,'C');
      $pdf->Cell(13,5,'2 (  )','RLB',0,'C');
      $pdf->Cell(13,5,'3 (  )','RLB',0,'C');
      $pdf->Cell(13,5,'4 (  )','RLB',0,'C');
      $pdf->Cell(13,5,'5 (  )','RLB',0,'C');
      $pdf->Cell(20,5,utf8_decode('6 o Más( )'),'RLB',0,'C');

      $pdf->SetXY($x,$y+=5);
      $pdf->Cell(65,5,utf8_decode('Tableta'),'RLB',0,'L');
      $pdf->Cell(25,5,'No ( ) Si ( )','RLB',0,'C');
      $pdf->Cell(85,5,utf8_decode('¿Cuántos televisores hay en tu vivienda?'),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell(65,5,utf8_decode('Laptop'),'RLB',0,'L');
      $pdf->Cell(25,5,'No ( ) Si ( )','RLB',0,'C');
      $pdf->Cell(13,5,'1 (  )','RLB',0,'C');
      $pdf->Cell(13,5,'2 (  )','RLB',0,'C');
      $pdf->Cell(13,5,'3 (  )','RLB',0,'C');
      $pdf->Cell(13,5,'4 (  )','RLB',0,'C');
      $pdf->Cell(13,5,'5 (  )','RLB',0,'C');
      $pdf->Cell(20,5,utf8_decode('6 o Más( )'),'RLB',0,'C');

      $pdf->SetXY($x,$y+=10);
      $pdf->SetFont('Arial','B',10);
      $pdf->Cell($ancho,5,'SALUD',1,0,'C');
      $pdf->SetXY($x,$y+=5);
      $pdf->SetFont('Arial','I',9);
      $pdf->Cell($ancho,5,utf8_decode('Señala con una "X" cuál de las siguientes figuras corresponde a la percepción que tienes de tu apariencia física'),1,0,'C');
      $pdf->SetXY($x,$y+=5);
      $pdf->SetFont('Arial','',10);
      $pdf->Cell(58,5,'Endomorfo o grueso ( )','RLB',0,'C');
      $pdf->Cell(59,5,'Ectomorfo o delgado ( )','RLB',0,'C');
      $pdf->Cell(58,5,utf8_decode('Mesomorfo o atlético ( )'),'RLB',0,'C');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,50,'','RLB',0,'C');

      $pdf->SetXY($x,$y+=50);
      $pdf->Cell(40,5,'Estatura: ','RLB',0,'L');
      $pdf->Cell($ancho-40,5,utf8_decode('Durante el último semestre, ¿ha tenido alún problema de slaud? '),'RLB',0,'C');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell(40,5,'Peso: ','RLB',0,'L');
      $pdf->Cell(30,5,'Si (  ) No (  )','RLB',0,'C');
      $pdf->Cell($ancho-70,5,utf8_decode('Especificar: '),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('¿Actualmente cuenta con algún tipo de servicio de salud?'),'RLB',0,'C');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell(40,5,utf8_decode('( ) IMSS'),'RLB',0,'L');
      $pdf->Cell(60,5,utf8_decode('( ) Ejército o Marina'),'RLB',0,'L');
      $pdf->Cell(75,5,utf8_decode('( ) Médico Privado'),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell(40,5,utf8_decode('( ) ISSTE'),'RLB',0,'L');
      $pdf->Cell(60,5,utf8_decode('( ) Secretaría de Salud'),'RLB',0,'L');
      $pdf->Cell(75,5,utf8_decode('( ) Otro, especifique: '),'RL',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell(40,5,utf8_decode('( ) PEMEX'),'RLB',0,'L');
      $pdf->Cell(60,5,utf8_decode('( ) Seguro Popular'),'RLB',0,'L');
      $pdf->Cell(75,5,utf8_decode(' '),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('¿Con qué frecuencia asiste al médico?'),'RLB',0,'C');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell(35,5,utf8_decode('( ) Cada semana'),'RLB',0,'L');
      $pdf->Cell(30,5,utf8_decode('( ) Cada mes'),'RLB',0,'L');
      $pdf->Cell(40,5,utf8_decode('( ) Cada seis meses'),'RLB',0,'L');
      $pdf->Cell(30,5,utf8_decode('( ) Cada año'),'RLB',0,'L');
      $pdf->Cell(40,5,utf8_decode('( ) Cuando me enfermo'),'RLB',0,'L');

      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('¿Con qué frecuencia asiste al dentista?'),'RLB',0,'C');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell(35,5,utf8_decode('( ) Cada semana'),'RLB',0,'L');
      $pdf->Cell(30,5,utf8_decode('( ) Cada mes'),'RLB',0,'L');
      $pdf->Cell(40,5,utf8_decode('( ) Cada seis meses'),'RLB',0,'L');
      $pdf->Cell(30,5,utf8_decode('( ) Cada año'),'RLB',0,'L');
      $pdf->Cell(40,5,utf8_decode('( ) Cuando lo necesito'),'RLB',0,'L');

      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('¿Necesita anteojos?'),'RLB',0,'C');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell(37,5,utf8_decode('( ) No los necesito'),'RLB',0,'L');
      $pdf->Cell(33,5,utf8_decode('( ) Sólo para leer'),'RLB',0,'L');
      $pdf->Cell(25,5,utf8_decode('( ) Si los uso'),'RLB',0,'L');
      $pdf->Cell(60,5,utf8_decode('( ) Si los necesito pero no los uso'),'RLB',0,'L');
      $pdf->Cell(20,5,utf8_decode('( ) No lo sé'),'RLB',0,'L');

      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('¿Actualmente se encuentra bajo algún tratamiento médico? No( ) Si( )'),'RLB',0,'L');

      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('En caso afirmativo. ¿Cuál? '),'RLB',0,'L');

      $pdf->SetXY($x,$y+=5);
      $pdf->Cell(90,5,utf8_decode('¿Tiene alguna descapacidad física? No ( ) Si( ) '),'RLB',0,'L');
      $pdf->Cell(85,5,utf8_decode('¿Cuál?'),'RLB',0,'L');

      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('¿Ha asistido o asiste a trtamiento psicológico o psiquiatrico? '),'RLB',0,'L');

      $pdf->SetXY($x,$y+=5);
      $pdf->Cell(15,4,utf8_decode('No ( )'),'RL',0,'L');
      $pdf->Cell(15,4,utf8_decode('Si ( )'),'RL',0,'L');
      $pdf->Cell(30,4,utf8_decode('Desde '),'RL',0,'L');
      $pdf->Cell(30,4,utf8_decode('Hasta '),'RL',0,'L');
      $pdf->Cell(85,4,utf8_decode('¿Dónde? '),'RL',0,'L');

      $pdf->SetXY($x,$y+=4);
      $pdf->Cell(15,5,utf8_decode(''),'RLB',0,'L');
      $pdf->Cell(15,5,utf8_decode(''),'RLB',0,'L');
      $pdf->Cell(30,5,utf8_decode(''),'RLB',0,'L');
      $pdf->Cell(30,5,utf8_decode(''),'RLB',0,'L');
      $pdf->Cell(85,5,utf8_decode(''),'RLB',0,'L');

      $pdf->SetXY($x,$y+=10);
      $pdf->SetFont('Arial','B',10);
      $pdf->Cell($ancho,5,utf8_decode('3/6'),0,0,'C');

    $pdf->AddPage();
      $x=20;$y=20;
      $ancho=175;
      $pdf->SetXY($x,$y);
      $pdf->SetFont('Arial','B',10);
      $pdf->Cell($ancho,8,'PROYECTO DE VIDA',1,0,'C');
      $pdf->SetXY($x,$y+=8);
      $pdf->SetFont('Arial','',10);
      $pdf->Cell($ancho,5,utf8_decode('¿Por qué decidió estudiar su bachillerato en CECYTEM? (Marque al menos 3 opciones)'),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho/2,5,'( ) Porque le gustan las instalaciones','RLB',0,'L');
      $pdf->Cell($ancho/2,5,utf8_decode('( ) La carrera de técnico en programación'),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho/2,5,'( ) Porque le gusta el modelo de enseñanza','RLB',0,'L');
      $pdf->Cell($ancho/2,5,utf8_decode('( ) Por recomendación de familiares o amigos'),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho/2,5,utf8_decode('( ) La documentación que se obiene al egresar'),'RLB',0,'L');
      $pdf->Cell($ancho/2,5,'( ) Le obligaron sus padres','RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho/2,5,utf8_decode('( ) Por mi situación económica'),'RLB',0,'L');
      $pdf->Cell($ancho/2,5,utf8_decode('( ) Fué otra de sus opciones'),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('Otra, especifique: '),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('Sus metas en la escuela son: '),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('Su principal meta en la vida es: '),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('¿cómo piensa lograrla? '),'RLB',0,'L');
      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('¿Qué espera durante su estancia en el plantel? '),'RLB',0,'L');

      $pdf->SetXY($x,$y+=5);
      $pdf->Cell($ancho,5,utf8_decode('Al terminar el bachillerato, piensa continuar estudiando SI( ) NO( ) ¿Qué? '),'RLB',0,'L');

      $pdf->SetXY($x,$y+=13);
      $pdf->SetFont('Arial','B',10);
      $pdf->Cell($ancho,8,utf8_decode('PERFIL PERSONAL Y ACADÉMICO DE LOS ESTUDIANTES'),1,0,'C');
      $pdf->SetXY($x,$y+=8);
      $pdf->Cell($ancho,6,utf8_decode('INSTRUCCIONES: En la columna de la derecha marca V si es Verdadero y F si es Falso'),1,0,'L');
      $pdf->SetFont('Arial','',10);
      $pdf->SetXY($x,$y+=6);
      $pdf->Cell($ancho-20,6,utf8_decode('1.- Mi promedio en la escuela es igual o mayor a 7.'),1,0,'L');$pdf->Cell(20,6,'',1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $pdf->Cell($ancho-20,6,utf8_decode('2.- Reprobé 2 o más materias en la secundaria.'),1,0,'L');$pdf->Cell(20,6,'',1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $pdf->Cell($ancho-20,6,utf8_decode('3.- Yo elegí el plantel de bachillerato al que asisto.'),1,0,'L');$pdf->Cell(20,6,'',1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $pdf->Cell($ancho-20,6,utf8_decode('4.- Asisto a la educación media superior porque creo que me será muy útil.'),1,0,'L');$pdf->Cell(20,6,'',1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $pdf->Cell($ancho-20,6,utf8_decode('5.- Me gusta la escuela.'),1,0,'L');$pdf->Cell(20,6,'',1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $pdf->Cell($ancho-20,6,utf8_decode('6.- Soy bueno para estudiar.'),1,0,'L');$pdf->Cell(20,6,'',1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $pdf->Cell($ancho-20,6,utf8_decode('7.- En la secundaria sentía confianza con algún maestro(a) como para platicar con él (ella).'),1,0,'L');$pdf->Cell(20,6,'',1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $pdf->Cell($ancho-20,6,utf8_decode('8.- En la secundaria preguntaba mis dudas al maestro(a).'),1,0,'L');$pdf->Cell(20,6,'',1,0,'L');

      $pdf->SetXY($x,$y+=6);
      $pdf->MultiCell($ancho-20,6,utf8_decode('9.- En la secundaria me molestaban con frecuencia otro y otros compañeros (burlas, intimidacion, golpes, extorsiones, etc).'),1,'L',0);
      $pdf->SetXY($ancho,$y);
      $pdf->Cell(20,12,'',1,0,'C');

      $pdf->SetXY($x,$y+=12);
      $pdf->Cell($ancho-20,6,utf8_decode('10.- Si yo reprobara alguna materia, se lo platicaría a mi mamá o mi papá.'),1,0,'L');$pdf->Cell(20,6,'',1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $pdf->Cell($ancho-20,6,utf8_decode('11.- Si tuviera un problema alguna personal, lo platicaría con mi mamá o mi papá.'),1,0,'L');$pdf->Cell(20,6,'',1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $pdf->Cell($ancho-20,6,utf8_decode('12.- Me gustaría emigrar a Estados Unidos en los próximos 5 años.'),1,0,'L');$pdf->Cell(20,6,'',1,0,'L');
      $pdf->SetXY($x,$y+=6);
      $pdf->Cell($ancho-20,6,utf8_decode('13.- Es posible que me case o viva con mi pareja antes de terminar el bachillerato.'),1,0,'L');$pdf->Cell(20,6,'',1,0,'L');

      $pdf->SetXY($x,$y+=6);
      $pdf->MultiCell($ancho-20,6,utf8_decode('14.- Es mi casa hemos tenido problemas económicos serios (deudas, no alcanza ara los gastos del diario, etc).'),1,'L',0);
      $pdf->SetXY($ancho,$y);
      $pdf->Cell(20,12,'',1,0,'C');

      $pdf->SetXY($x,$y+=12);
      $pdf->Cell($ancho-20,6,utf8_decode('15.- Es más importante trabajar que estudiar'),1,0,'L');$pdf->Cell(20,6,'',1,0,'L');

      $pdf->SetXY($x,$y+=50);
      $pdf->Cell($ancho,5,'6/6',0,0,'C');

    $pdf->Output();



  }

}
