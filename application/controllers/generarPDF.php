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
