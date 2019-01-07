<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s2"><a href="#1">Hoja 1</a></li>
				<li class="tab col s2"><a href="#2">Hoja 2</a></li>
        <li class="tab col s2"><a href="#3">Hoja 3</a></li>
        <li class="tab col s2"><a href="#4">Hoja 4</a></li>
        <li class="tab col s2"><a href="#5">Hoja 5</a></li>
        <li class="tab col s2"><a href="#6">Hoja 6</a></li>
      </ul>
    </div>
  </div>

    <div class="container">
      <div class="" id="1"> <!--Inicio tab1-->
        <div class="row">
            <ul class="collection with-header">
              <li class="collection-header grey lighten-2"><h4 class="center">DATOS GENERALES DEL ESTUDIANTE</h4>
                <p class="center">Los datos que proporcione será utilizados únicamente en el área de Orientación</p></li>
          <!--Inicio del formulario-->
          <form action="../../CActualizaciones/datosGenerales/<?=$alumno?>" method="post" class="col s12" id="formA1">
            <!-- Inicio Fila 1-->
            <div class="row">
              <div class="input-field col s4">
                <input class="validate" id="nombre" type="text" name="nombre1" value="<?php echo($generales->nombre_al) ?>" required>
                <label for="nombre">Nombre(s)</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s4">
                <input class="validate" id="ap" type="text" name="paterno1" value="<?=$generales->paterno_al ?>" required>
                <label for="ap">Apellido Paterno</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s4">
                <input class="validate" id="am" type="text" name="materno1" value="<?=$generales->materno_al ?>" required>
                <label for="am">Apellido Materno</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
            </div>
            <!-- Fin Fila 1-->
            <!-- Inicio Fila 2-->
            <div class="row">
              <div class="input-field col s2">
                  <input type="text" class="datepicker" id="nac" name="nacimiento1" value="<?=$generales->fecha_nacimiento_al?>" required>
                <label for="nac">Fecha de Nacimiento</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s2">
    						<input class="validate" id="edadAlumno" value="<?=$generales->edad?>" type="number" min="14" max="40" name="edadAlumno" required>
    						<label for="edadAlumno">Edad</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>


              <div class="center col s4">
                <h7>Sexo</h7>
                <p><label>
                      <input class="with-gap center" id="sexoAlF" name="sexo1" type="radio" value="F"/>
                      <span>Femenino</span>
                    </label></p>

                    <p><label>
                      <input class="with-gap center" id="sexoAlM" name="sexo1" type="radio" value="M"/>
                      <span>Masculino</span>
                    </label></p>
                </div>
                <script type="text/javascript">
                  if ("<?php echo ($generales->sexo) ?>" =="M") {
                    document.getElementById('sexoAlM').checked=true;
                  }else if ("<?php echo ($generales->sexo) ?>" =="F"){
                    document.getElementById('sexoAlF').checked=true;
                  }
                </script>
                <div class="input-field col s4">
                  <input class="validate" id="lug" type="text" name="lugar1" value="<?=$generales->lugar_nacimiento ?>" required>
                <label for="lug">Lugar de Nacimiento</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
            </div>
            <!--Fin Fila 2-->
            <!--Inicio Fila 3-->
            <div class="row">
                <div class="input-field col s4">
                  <select class="" name="entidad1" id="uno">
                    <option value="" disabled selected>Elige una opción</option>
                    <option value=1>Aguascalientes</option>
                    <option value=2>Baja California</option>
                    <option value=3>Baja California Sur</option>
                    <option value=4>Campeche</option>
                    <option value=5>Coahuila de Zaragoza</option>
                    <option value=6>Colima</option>
                    <option value=7>Chiapas</option>
                    <option value=8>Chihuahua</option>
                    <option value=9>Ciudad de México</option>
                    <option value=10>Durango</option>
                    <option value=11>Guanajuato</option>
                    <option value=12>Guerrero</option>
                    <option value=13>Hidalgo</option>
                    <option value=14>Jalisco</option>
                    <option value=15>México</option>
                    <option value=16>Michoacán</option>
                    <option value=17>Morelos</option>
                    <option value=18>Nayarit</option>
                    <option value=19>Nuevo León</option>
                    <option value=20>Oaxaca</option>
                    <option value=21>Puebla</option>
                    <option value=22>Querétaro</option>
                    <option value=23>Quintana Roo</option>
                    <option value=24>San Luis Potosí</option>
                    <option value=25>Sinaloa</option>
                    <option value=26>Sonora</option>
                    <option value=27>Tabasco</option>
                    <option value=28>Tamaulipas</option>
                    <option value=29>Tlaxcala</option>
                    <option value=30>Veracruz</option>
                    <option value=31>Yucatán</option>
                    <option value=32>Zacatecas</option>
                  </select>

                    <label for="ent">Entidad Federativa</label>
                    <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>

            <script type="text/javascript">
            document.getElementById('uno').value=<?php echo($generales->entidad) ?>;
            </script>
                    <div class="input-field col s4" id="mun">
                  <input class="validate" id="municipio1" type="text" name="municipio1" value="<?=$generales->municipio_nac ?>" required>
                  <label for="municipio1">Municipio</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>

                <div class="input-field col s4" id="del">
                  <input class="validate" id="delegacion1" type="text" name="delegacion1" value="<?=$generales->delegacion_nac?>" required>
                  <label for="delegacion1">Delegación</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
                <!-------------------------------------->
            </div>
            <!--Fin Fila 3-->
            <!--Inicio Fila 4-->
            <div class="row">
              <div class="input-field col s3">
                  <select name="pais_n" id="dos">
                      <option value="" disabled selected>Elige una opción</option>
                      <option value="Alemania">Alemania</option>
                      <option value="Francia">Francia</option>
                      <option value="Estados Unidos">Estados Unidos</option>
                      <option value="Inglaterra">Inglaterra</option>
                      <option value="México">México</option>
                      <option value="Guatemala">Guatemala</option>
                      <option value="Honduras">Honduras</option>
                      <option value="Argentina">Argentina</option>
                      <option value="Brasil">Brasil</option>
                      <option value="Italia">Italia</option>
                      <option value="Japón">Japón</option>
                      <option value="China">China</option>
                      <option value="Espana">España</option>
                  </select>
                  <label>País</label>
                </div>
                <script type="text/javascript">
                  document.getElementById('dos').value="<?php echo($generales->pais_nac) ?>";
                </script>

              <div class="input-field col s3" id="nacionalidadA" name="nacionalidad1">
                  <select name="nacion_n" id="tres">
                      <option value="" disabled selected>Elige una opción</option>
                      <option value="Alemán">Alemán</option>
                      <option value="Frances">Francés</option>
                      <option value="Estadounidense">Estadounidense</option>
                      <option value="Inglés">Inglés</option>
                      <option value="Mexicano">Mexicano</option>
                      <option value="Guatelamteco">Guatemalteco</option>
                      <option value="Hondureno">Hondureño</option>
                      <option value="Argentino">Argentino</option>
                      <option value="Brasileno">Brasileño</option>
                      <option value="Italiano">Italiano</option>
                      <option value="Japones">Japonés</option>
                      <option value="Chino">Chino</option>
                      <option value="Espanol">Español</option>
                  </select>
                  <label>Nacionalidad</label>
                </div>
                <script type="text/javascript">
                  document.getElementById('tres').value="<?php echo($generales->nacionalidad)?>";
                </script>
                <!-- adicion 28 de dic -->
                <div class="input-field col s2" id="" name="">
                  <select name="civilAlumno" id="civilAlumno">
                    <option value="Soltero">Soltero</option>
                    <option value="Casado">Casado</option>
                    <option value="Otro">Otro</option>
                  </select>
                  <label>Estado Civil</label>
                </div>
                <script type="text/javascript">
                  document.getElementById('civilAlumno').value="<?php echo($generales->civil)?>";
                </script>

              <div class="input-field col s4">
                <input class="validate" value="<?=$generales->curp?>" id="curp" name="curp1" type="text" pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)" data-length="18" maxlength="18" required onkeyup="mayus(this);">
                <label for="curp">CURP</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
            </div>
            <!--Fin Fila 4-->

            <ul class="collection center"><li class="collection-item">Datos de la escuela en donde cursó el último ciclo escolar</li></ul>
            <!--Inicio Fila 5-->
            <div class="row">
              <div class="input-field col s5">
                <input class="validate" id="esc" name="escuela1" type="text" value="<?=$generales->nombre_sec?>" required>
                <label for="esc">Nombre de la escuela</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s5">
                <input class="validate" id="dom" name="domEsc1" value="<?=$generales->domicilio_sec?>" type="text" required>
                <label for="dom">Domicilio de la escuela</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s2">
    						<input class="validate" id="ct" name="cct" type="text" value="<?=$generales->cct?>" data-length="12" maxlength="12" required>
    						<label for="ct">C.C.T.</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
      				</div>
            </div>
            <!--Fin Fila 5-->
            <!--Fila nueva-->
            <div class="row">
              <div class="input-field col s4">
                <select class="" name="entidad2" id="cuatro">
                  <option value="" disabled selected>Elige una opción</option>
                  <option value=1>Aguascalientes</option>
                  <option value=2>Baja California</option>
                  <option value=3>Baja California Sur</option>
                  <option value=4>Campeche</option>
                  <option value=5>Coahuila de Zaragoza</option>
                  <option value=6>Colima</option>
                  <option value=7>Chiapas</option>
                  <option value=8>Chihuahua</option>
                  <option value=9>Ciudad de México</option>
                  <option value=10>Durango</option>
                  <option value=11>Guanajuato</option>
                  <option value=12>Guerrero</option>
                  <option value=13>Hidalgo</option>
                  <option value=14>Jalisco</option>
                  <option value=15>México</option>
                  <option value=16>Michoacán</option>
                  <option value=17>Morelos</option>
                  <option value=18>Nayarit</option>
                  <option value=19>Nuevo León</option>
                  <option value=20>Oaxaca</option>
                  <option value=21>Puebla</option>
                  <option value=22>Querétaro</option>
                  <option value=23>Quintana Roo</option>
                  <option value=24>San Luis Potosí</option>
                  <option value=25>Sinaloa</option>
                  <option value=26>Sonora</option>
                  <option value=27>Tabasco</option>
                  <option value=28>Tamaulipas</option>
                  <option value=29>Tlaxcala</option>
                  <option value=30>Veracruz</option>
                  <option value=31>Yucatán</option>
                  <option value=32>Zacatecas</option>
                </select>
                <label for="ent2">Entidad Federativa</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
              <script type="text/javascript">
                document.getElementById('cuatro').value=<?php echo($generales->entidad_sec)?>;
              </script>

              <div class="input-field col s4" id="mun2">
                <input class="validate" id="municipio2" type="text" name="municipio2" value="<?=$generales->mun_sec ?>" required>
              <label>Municipio</label>
              <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s4" id="del2">
                <input class="validate" id="delegacion2" type="text" name="delegacion2" value="<?=$generales->del_sec?>" required>
                <label>Delegación</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
            </div>
            <!--Inicio Fila 6-->
            <div class="row">
              <div class="input-field col s4">
                  <select name="turno1" id="cinco">
                      <option value="" disabled selected>Elige una opción</option>
                      <option value="1">Matutino</option>
                      <option value="2">Vespertino</option>
                      <option value="3">Mixto</option>
                  </select>
                  <label>Turno</label>
                </div>
                <script type="text/javascript">
                  document.getElementById('cinco').value="<?php echo($generales->turno)?>";
                </script>

              <div class="input-field col s8">
                <input class="validate" id="prom" type="number" value="<?=$generales->promedio?>" name="promedio1" step="0.1" max="10.0" min="1.0" maxlength="3">
                <label for="prom">Promedio</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                  <label>Promedio de calificaciones en el ciclo escolar anterior</label>
                </div>
            </div>
            <!--Fin Fila 6-->
            <!--Inicio Fila 7-->
            <div class="row">
              <div class="center col s4">
                <h7>¿Recibió alguna beca?</h7>
                 <div class="switch">
                  <label>No
                    <input type="checkbox" id="beca1" name="beca1">
                    <span class="lever"></span>Sí</label>
                </div>
                </div>
                <?php if ($beca->num_rows()>0){
                  ?>
                  <script type="text/javascript">
                    document.getElementById('beca1').checked=true;
                  </script>
                  <?php
                  $beca=$beca->row()->beca;
                }else{
                  ?>
                  <script type="text/javascript">
                    document.getElementById('beca1').checked=false;
                  </script>

                  <?php
                  $beca=null;
                } ?>

                <div class="input-field col s8">
                <input class="validate" id="esp1" value="<?php echo ($beca) ?>" type="text" name="especificar1">
                <label for="esp1">Especificar</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
            </div>
            <!--Fin Fila 7-->
            <!--Inicio Fila 8-->
            <div class="row">
              <div class="center col s4">
                <h7>¿Trabaja?</h7>
                  <div class="switch">
                    <label>No
                      <input type="checkbox" id="alumnoTrabaja" name="trabaja1">
                      <span class="lever"></span>Sí</label>
                    </div>
                </div>
                <?php
                if ($trabajo->num_rows()>0) {
                  $trabajo=$trabajo->row();
                  ?>
                  <script type="text/javascript">
                    document.getElementById('alumnoTrabaja').checked=true;
                  </script>
                  <?php
                  $especificar=$trabajo->trabajo;
                  $empresa=$trabajo->empresa;
                  $ocupacion=$trabajo->puesto;
                  $horarioI=$trabajo->inicio;
                  $horarioF=$trabajo->hfinal;
                  $horas=$trabajo->horas_semana;

                }else{
                  $especificar=null;
                  $empresa=null;
                  $ocupacion=null;
                  $horarioI=null;
                  $horarioF=null;
                  $horas=0;
                } ?>

                <div class="input-field col s8">
                <input class="validate" id="esp2" type="text" value="<?=$especificar?>" name="especificar2">
                <label for="esp2">Especificar</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
            </div>
            <!--Fin Fila 8-->
            <!--Inicio Fila 9-->
            <div class="row">
              <div class="col s2">
                <ul class="collection"><li class="collection-item">En caso de que su respuesta sea afirmativa conteste lo siguiente:</li></ul>
              </div>

              <div class="input-field col s2">
                <input class="validate" id="emp" value="<?=$empresa?>" type="text" name="empresa1">
                <label for="emp">Nombre de la empresa</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s2">
                <input class="validate" id="ocu" value="<?=$ocupacion?>" type="text" name="ocupacion">
                <label for="ocu">Puesto u ocupación</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="col s2">
                  <input type="text" id="ini" value="<?=$horarioI?>" class="timepicker" name="horaInicio" placeholder="Hora de inicio">
                <!--<label for="ini">Hora de inicio</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>-->
              </div>

              <div class="col s2">
                <input type="text" id="fin" class="timepicker" value="<?=$horarioF?>" name="horaFin" placeholder="Hora de fin">
                  <!--<label for="fin">Hora de fin</label>-->
              </div>

              <div class="col s2">
                <p class="range-field">
                      <input type="range" id="numh" min="0" value="<?=$horas?>" max="24" name="horas" />
                      <label for="numh">Número de horas a la semana</label>
                  </p>
              </div>
            </div>
            <!--Fin Fila 9-->
            <!--Encabezado-->
            <ul class="collection with-header"><li class="collection-header grey lighten-2"><h5 class="center">DOMICILIO DEL ALUMNO</h5></li></ul>
            <!--Fin Encabezado-->
            <!--Inicio Fila 10-->
                <div class="row">
              <div class="input-field col s4">
                <input class="validate" id="cal" value="<?=$domAl->calle?>" type="text" name="calle1" required>
                <label for="cal">Calle</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s2">
                <input class="validate" id="ext" type="number" value="<?=$domAl->exterior?>" name="exterior1" required>
                <label for="ext">No. Exterior</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s2">
                <input class="validate" id="int" type="number" value="<?=$domAl->interior?>" name="interior1">
                <label for="int">No. Interior</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s4">
                <input class="validate" id="col" type="text" value="<?=$domAl->colonia?>" name="colonia1">
                <label for="col">Colonia</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
            </div>

            <!--Fin Fila 10-->

            <!--Entre calles-->
    				<div class="row">
    					<div class="input-field col s4" id="c1">
    						<input type="text" name="entrec1" id="c1" value="<?=$domAl->entreCalle1?>" class="validate" required>
    						<label for="c1">Entre calle</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4" id="c2">
    						<input type="text" name="entrec2" id="c2" value="<?=$domAl->entreCalle2?>" class="validate" required>
    						<label for="c2">Y calle</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4" id="ref">
    						<input type="text" name="referencia" id="c2" value="<?=$domAl->referencia?>" class="validate" required>
    						<label for="ref">Referencia</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
            <!--Inicio Fila 11-->
            <div class="row">
            <div class="input-field col s4">
              <select class="" name="entidad3" id="seis">
                <option value="" disabled selected>Elige una opción</option>
                <option value=1>Aguascalientes</option>
                <option value=2>Baja California</option>
                <option value=3>Baja California Sur</option>
                <option value=4>Campeche</option>
                <option value=5>Coahuila de Zaragoza</option>
                <option value=6>Colima</option>
                <option value=7>Chiapas</option>
                <option value=8>Chihuahua</option>
                <option value=9>Ciudad de México</option>
                <option value=10>Durango</option>
                <option value=11>Guanajuato</option>
                <option value=12>Guerrero</option>
                <option value=13>Hidalgo</option>
                <option value=14>Jalisco</option>
                <option value=15>México</option>
                <option value=16>Michoacán</option>
                <option value=17>Morelos</option>
                <option value=18>Nayarit</option>
                <option value=19>Nuevo León</option>
                <option value=20>Oaxaca</option>
                <option value=21>Puebla</option>
                <option value=22>Querétaro</option>
                <option value=23>Quintana Roo</option>
                <option value=24>San Luis Potosí</option>
                <option value=25>Sinaloa</option>
                <option value=26>Sonora</option>
                <option value=27>Tabasco</option>
                <option value=28>Tamaulipas</option>
                <option value=29>Tlaxcala</option>
                <option value=30>Veracruz</option>
                <option value=31>Yucatán</option>
                <option value=32>Zacatecas</option>
              </select>
              <label for="ent3">Entidad Federativa</label>
              <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
            </div>
            <script type="text/javascript">
              document.getElementById('seis').value=<?php echo($domAl->est)?>;
            </script>

              <div class="input-field col s4" id="mun3">
                <input class="validate" id="municipio3" value="<?=$domAl->municipio?>" type="text" name="municipio3" required>
              <label>Municipio</label>
              <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s4" id="del3">
                <input class="validate" id="delegacion3" type="text" value="<?=$domAl->delegacion?>" name="delegacion3" required>
                <label>Delegación</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s3">
                <input class="validate" id="post" name="postal1" value="<?=$domAl->codigoPostal?>" type="number" required>
                <label for="post">Código Postal</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s3">
                <input class="validate" id="tel" type="tel" name="telefono1" value="<?=$domAl->tel_casa?>" data-length="12" maxlength="12">
                <label for="tel">Teléfono de casa</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s3">
                <input class="validate" id="cel" type="tel" name="celular1" value="<?=$domAl->celular?>" data-length="10" maxlength="10">
                <label for="cel">Teléfono de celular</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s3">
    						<input class="validate" id="c" type="tel" name="emergencia" value="<?=$domAl->tel_emergencia?>" data-length="12" maxlength="12" required>
    						<label for="c">Teléfono de emergencia</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
            </div>
            <!--borrado-->
            <!--Fin Fila 11-->

            <div class="row center">
              <input type="submit" value="Guardar/Siguiente" class="btn btn-large center">
            </div>
          </form>

          </div>
      </div><!--Fin tab1-->
      <div class="" id="2"> <!--Inicio tab2-->
        <div class="row">
    			<!--Inicio del formulario-->
    			<form action="../../CActualizaciones2/padre/<?=$alumno?>" method="post" id="formA2" class="col s12">
              <?php if ($tutor->num_rows()>0) {
                $tutor=$tutor->row();
                ?>
                <div >
                  <div class="row">
                    <div class="section">
                      <div class="divider black"></div>
                      <h5 class="center orange-text">¡ATENCIÓN!</h5>
                      <h6 class="center red-text accent-3">Si no vives con alguno de tus padres: completa el siguiente apartado (Pueden ser Abuelos, tíos, hermanos, etc.)</h6>
                      <div class="divider black"></div>
                    </div>
                  </div>
                  <!--Fin Fila3-->
                  <!--Encabezado-->
                  <ul class="collection with-header">
                    <li class="collection-header grey lighten-2"><h5 class="center">DATOS DEL TUTOR</h5></li></ul>
                    <!--Inicio Fila4-->
                    <div class="row">
                      <div class="input-field col s4">
                        <input class="validate" value="<?=$tutor->nombre_padre?>" id="nombre5" type="text" name="nombre5">
                        <label for="nombre5">Nombre(s)</label>
                        <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      </div>

                      <div class="input-field col s3">
                        <input class="validate" value="<?=$tutor->paterno_padre?>" id="ap4" type="text" name="paterno4">
                        <label for="ap4">Apellido Paterno</label>
                        <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      </div>

                      <div class="input-field col s3">
                        <input class="validate" id="am4" value="<?=$tutor->materno_padre?>" type="text" name="materno4">
                        <label for="am4">Apellido Materno</label>
                        <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      </div>
                      <!--adicion 28 de dic  -->
                      <div class="input-field col s2">
                        <input class="validate" id="edadTutor" value="<?=$tutor->edad?>" type="number" min="15" name="edadTutor">
                        <label for="edadTutor">Edad</label>
                        <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      </div>

                    </div>
                    <!--Fin Fila4-->
                    <!--Inicio Fila5-->
                    <div class="row">
                      <div class="input-field col s3">
                        <input type="text" value="<?=$tutor->fecha_nacimiento?>" id="nac4" class="datepicker" name="nacimiento4">
                        <label for="nac4">Fecha de Nacimiento</label>
                      </div>

                      <div class="input-field col s3">
                        <input class="validate" id="lug4" value="<?=$tutor->lugar_nacimiento?>" type="text" name="lugar4">
                        <label for="lug4">Lugar de Nacimiento</label>
                        <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      </div>

                      <div class="input-field col s3" id="mun6">
                        <input class="validate" value="<?=$tutor->municipio?>" id="municipio6" type="text" name="municipio6">
                        <label for="municipio6">Municipio</label>
                      </div>

                      <div class="input-field col s3" id="del6">
                        <input class="validate" value="<?=$tutor->delegacion?>" id="delegacion6" type="text" name="delegacion6">
                        <label for="delegacion6">Delegación</label>
                      </div>
                    </div>
                    <!--Fin Fila5-->
                    <!--Inicio Fila6-->
                    <div class="row">
                      <div class="input-field col s3">
                        <select name="entidad6" id="ent6">
                          <option value="" disabled selected>Elige una opción</option>
                          <option value=1>Aguascalientes</option>
                          <option value=2>Baja California</option>
                          <option value=3>Baja California Sur</option>
                          <option value=4>Campeche</option>
                          <option value=5>Coahuila de Zaragoza</option>
                          <option value=6>Colima</option>
                          <option value=7>Chiapas</option>
                          <option value=8>Chihuahua</option>
                          <option value=9>Ciudad de México</option>
                          <option value=10>Durango</option>
                          <option value=11>Guanajuato</option>
                          <option value=12>Guerrero</option>
                          <option value=13>Hidalgo</option>
                          <option value=14>Jalisco</option>
                          <option value=15>México</option>
                          <option value=16>Michoacán</option>
                          <option value=17>Morelos</option>
                          <option value=18>Nayarit</option>
                          <option value=19>Nuevo León</option>
                          <option value=20>Oaxaca</option>
                          <option value=21>Puebla</option>
                          <option value=22>Querétaro</option>
                          <option value=23>Quintana Roo</option>
                          <option value=24>San Luis Potosí</option>
                          <option value=25>Sinaloa</option>
                          <option value=26>Sonora</option>
                          <option value=27>Tabasco</option>
                          <option value=28>Tamaulipas</option>
                          <option value=29>Tlaxcala</option>
                          <option value=30>Veracruz</option>
                          <option value=31>Yucatán</option>
                          <option value=32>Zacatecas</option>
                        </select>
                        <label for="ent6">Entidad Federativa</label>
                        <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      </div>
                      <script type="text/javascript">
                        document.getElementById('ent6').value=<?php echo($tutor->entidad) ?>
                      </script>

                      <div class="input-field col s3" id="pais3">
                        <select name="paisTutor" id="tutorPais">
                          <option value="" disabled selected>Elige una opción</option>
                          <option value="Alemania">Alemania</option>
                          <option value="Francia">Francia</option>
                          <option value="Estados Unidos">Estados Unidos</option>
                          <option value="Inglaterra">Inglaterra</option>
                          <option value="México">México</option>
                          <option value="Guatemala">Guatemala</option>
                          <option value="Honduras">Honduras</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Brasil">Brasil</option>
                          <option value="Italia">Italia</option>
                          <option value="Japón">Japón</option>
                          <option value="China">China</option>
                          <option value="Espana">España</option>
                          <label>País</label>
                        </select>
                        <label>País</label>
                      </div>
                      <script type="text/javascript">
                        document.getElementById('tutorPais').value="<?php echo($tutor->pais) ?>";
                      </script>

                      <!--  adicion 28 de dic-->
                      <div class="input-field col s3" id="nacionalidadTutor" name="nacionalidadTutor">
                        <select name="nacionalidadTutor" id="tutorNAc">
                          <option value="" disabled selected>Elige una opción</option>
                          <option value="Alemán">Alemán</option>
                          <option value="Frances">Francés</option>
                          <option value="Estadounidense">Estadounidense</option>
                          <option value="Inglés">Inglés</option>
                          <option value="Mexicano">Mexicano</option>
                          <option value="Guatelamteco">Guatemalteco</option>
                          <option value="Hondureno">Hondureño</option>
                          <option value="Argentino">Argentino</option>
                          <option value="Brasileno">Brasileño</option>
                          <option value="Italiano">Italiano</option>
                          <option value="Japones">Japonés</option>
                          <option value="Chino">Chino</option>
                          <option value="Espanol">Español</option>
                        </select>
                        <label>Nacionalidad</label>
                      </div>
                      <script type="text/javascript">
                        document.getElementById('tutorNAc').value="<?php echo($tutor->nacionalidad) ?>";
                      </script>

                      <div class="input-field col s3">
                        <input class="validate" id="c" value="<?=$tutor->curp?>" name="curp4" type="text" pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)" data-length="18" maxlength="18" onkeyup="mayus(this);">
                        <label for="c">CURP</label>
                        <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      </div>
                    </div>
                    <!--Fin Fila6-->
                    <!--Inicio Fila7-->
                    <div class="row">
                      <div class="col s3">
                        <label>
                          <input class="with-gap" id="gradoestT1" name="grupo4" type="radio" value="1" />
                          <span>Sin estudios</span><br>
                        </label>

                        <label>
                          <input class="with-gap" id="gradoestT2" name="grupo4" type="radio" value="2" />
                          <span>Primaria incompleta</span>
                        </label>

                        <label>
                          <input class="with-gap" id="gradoestT3" name="grupo4" type="radio" value="3" />
                          <span>Primaria concluida</span>
                        </label>

                        <label>
                          <input class="with-gap" id="gradoestT4" name="grupo4" type="radio" value="4" />
                          <span>Secundaria incompleta</span>
                        </label>
                      </div>

                      <div class="col s3">
                        <label>
                          <input class="with-gap" id="gradoestT5" name="grupo4" type="radio" value="5" />
                          <span>Secundaria concluida</span>
                        </label>

                        <label>
                          <input class="with-gap" id="gradoestT6" name="grupo4" type="radio" value="6" />
                          <span>Carrera Técnica</span>
                        </label>

                        <label>
                          <input class="with-gap" id="gradoestT7" name="grupo4" type="radio" value="7" />
                          <span>Bachillerato incompleto</span>
                        </label>

                        <label>
                          <input class="with-gap" id="gradoestT8" name="grupo4" type="radio" value="8" />
                          <span>Bachillerato concluido</span>
                        </label>
                      </div>

                      <div class="col s3">
                        <label>
                          <input class="with-gap" id="gradoestT9" name="grupo4" type="radio" value="9" />
                          <span>Tec. Sup. Universitario</span>
                        </label>

                        <label>
                          <input class="with-gap" id="gradoestT10" name="grupo4" type="radio" value="10" />
                          <span>Licenciatura incompleta</span>
                        </label>

                        <label>
                          <input class="with-gap" id="gradoestT11" name="grupo4" type="radio" value="11" />
                          <span>Licenciatura concluida</span><br>
                        </label>

                        <label>
                          <input class="with-gap" id="gradoestT12" name="grupo4" type="radio" value="12" />
                          <span>Especialidad</span>
                        </label>
                      </div>

                      <div class="col s3">
                        <label>
                          <input class="with-gap" id="gradoestT13" name="grupo4" type="radio" value="13" />
                          <span>Maestría</span><br>
                        </label>

                        <label>
                          <input class="with-gap" id="gradoestT14" name="grupo4" type="radio" value="14" />
                          <span>Doctorado</span><br>
                        </label>

                        <label>
                          <input class="with-gap" id="gradoestT15" name="grupo4" type="radio" value="15" />
                          <span>Otro</span>
                        </label>

                        <div class="input-field cols3">
                          <input class="validate"  type="text" name="especificar14">
                          <label for="gradoesp">Especificar</label>
                        </div>
                      </div>
                    </div>

                    <script type="text/javascript">
                      if (<?php echo($tutor->ge) ?>==1) {
                        document.getElementById('gradoestT1').checked=true;
                      }else if(<?php echo($tutor->ge) ?>==2){
                        document.getElementById('gradoestT2').checked=true;
                      }else if(<?php echo($tutor->ge) ?>==3){
                        document.getElementById('gradoestT3').checked=true;
                      }else if(<?php echo($tutor->ge) ?>==4){
                        document.getElementById('gradoestT4').checked=true;
                      }else if(<?php echo($tutor->ge) ?>==5){
                        document.getElementById('gradoestT5').checked=true;
                      }else if(<?php echo($tutor->ge) ?>==6){
                        document.getElementById('gradoestT6').checked=true;
                      }else if(<?php echo($tutor->ge) ?>==7){
                        document.getElementById('gradoestT7').checked=true;
                      }else if(<?php echo($tutor->ge) ?>==8){
                        document.getElementById('gradoestT8').checked=true;
                      }else if(<?php echo($tutor->ge) ?>==9){
                        document.getElementById('gradoestT9').checked=true;
                      }else if(<?php echo($tutor->ge) ?>==10){
                        document.getElementById('gradoestT10').checked=true;
                      }else if(<?php echo($tutor->ge) ?>==11){
                        document.getElementById('gradoestT11').checked=true;
                      }else if(<?php echo($tutor->ge) ?>==12){
                        document.getElementById('gradoestT12').checked=true;
                      }else if(<?php echo($tutor->ge) ?>==13){
                        document.getElementById('gradoestT13').checked=true;
                      }else if(<?php echo($tutor->ge) ?>==14){
                        document.getElementById('gradoestT14').checked=true;
                      }else if(<?php echo($tutor->ge) ?>==15){
                        document.getElementById('gradoestT15').checked=true;
                      }
                    </script>
                    <!--Fin Fila7-->
                    <!--Inicio Fila8-->
                    <div class="center row">

                      <div class="input-field col s2" id="" name="">
                        <select name="civilTutor" id="civilTutor">
                          <option value="Casado">Casado</option>
                          <option value="Soltero">Soltero</option>
                          <option value="Otro">Otro</option>
                        </select>
                        <label>Estado Civil</label>
                      </div>

                      <script type="text/javascript">
                        document.getElementById('civilTutor').value="<?php echo($tutor->civil) ?>";
                      </script>
                      <!-- Adicion 28 de dic -->
                      <div class="input-field col s3">
                        <input class="validate" value="<?=$tutor->ocupacion ?>" id="ocupacionTutor" type="text" name="ocupacionTutor">
                        <label for="ocupacionTutor">Ocupación</label>
                      </div>

                      <div class="input-field col s3">
                        <h7>¿Trabaja?</h7>
                        <div class="switch">
                          <label>No
                            <input type="checkbox" id="trabajaTutor" name="trabaja4">
                            <span class="lever"></span>
                            Sí</label>
                          </div>
                        </div>
                        <script type="text/javascript">
                          if (<?php echo($tutor->trabaja) ?> ==1) {
                            document.getElementById('trabajaTutor').checked=true;
                          }else{
                            document.getElementById('trabajaTutor').checked=false;

                          }
                        </script>

                        <div class="col s4">
                          <p class="range-field">
                            <input type="range" value="<?=$tutor->horas_trabajo?>" id="hrsemana3" min="0" max="48" name="semana3"/>
                            <label for="hrsemana3">Número de horas a la semana</label>
                          </p>
                        </div>
                      </div>
                      <!--  -->
                      <div class="center row">
                        <!-- adicion 28 de dic -->
                        <div class="input-field col s3">
                          <input type="text" class="validate" value="<?=$tutor->elector?>" id="electorTutor" name="electorTutor" >
                          <label for="electorTutor">Clave de Elector</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>

                        <div class="input-field col s3">
                          <input type="email" class="validate" value="<?=$tutor->correo?>" id="co" name="correoTutor" >
                          <label for="correoTutor">Correo electrónico</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>
                        <!-- adicion 28 de dic -->
                        <div class="input-field col s3">
                          <input class="validate" id="faceTutor" value="<?=$tutor->facebook?>" name="faceTutor" type="text" >
                          <label for="faceTutor">Facebook</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>
                        <!-- adicion 28 de dic -->
                        <div class="input-field col s3">
                          <input class="validate" id="TwitterTutor" value="<?=$tutor->twitter?>" name="TwitterTutor" type="text" >
                          <label for="TwitterTutor">Twitter</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>

                </div>

                <?php
              }else{
                ?>
                <div >
                  <div class="row">
                    <div class="section">
                      <div class="divider black"></div>
                      <h5 class="center orange-text">¡ATENCIÓN!</h5>
                      <h6 class="center red-text accent-3">Si no vives con alguno de tus padres: completa el siguiente apartado (Pueden ser Abuelos, tíos, hermanos, etc.)</h6>
                      <div class="divider black"></div>
                    </div>
                  </div>
                  <!--Fin Fila3-->
                  <!--Encabezado-->
                  <ul class="collection with-header">
                    <li class="collection-header grey lighten-2"><h5 class="center">DATOS DEL TUTOR</h5></li></ul>
                    <!--Inicio Fila4-->
                    <div class="row">
                      <div class="input-field col s4">
                        <input class="validate" id="nom5" type="text" name="nombre5">
                        <label for="nom5">Nombre(s)</label>
                        <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      </div>

                      <div class="input-field col s3">
                        <input class="validate" id="ap4" type="text" name="paterno4">
                        <label for="ap4">Apellido Paterno</label>
                        <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      </div>

                      <div class="input-field col s3">
                        <input class="validate" id="am4" type="text" name="materno4">
                        <label for="am4">Apellido Materno</label>
                        <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      </div>
                      <!--adicion 28 de dic  -->
                      <div class="input-field col s2">
                        <input class="validate" id="edadTutor" type="number" min="15" name="edadTutor">
                        <label for="edadTutor">Edad</label>
                        <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      </div>

                    </div>
                    <!--Fin Fila4-->
                    <!--Inicio Fila5-->
                    <div class="row">
                      <div class="input-field col s3">
                        <input type="text" id="nac4" class="datepicker" name="nacimiento4">
                        <label for="nac4">Fecha de Nacimiento</label>
                      </div>

                      <div class="input-field col s3">
                        <input class="validate" id="lug4" type="text" name="lugar4">
                        <label for="lug4">Lugar de Nacimiento</label>
                        <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      </div>

                      <div class="input-field col s3" id="mun6">
                        <input class="validate" id="municipio6" type="text" name="municipio6">
                        <label for="municipio6">Municipio</label>
                      </div>

                      <div class="input-field col s3" id="del6">
                        <input class="validate" id="delegacion6" type="text" name="delegacion6">
                        <label for="delegacion6">Delegación</label>
                      </div>
                    </div>
                    <!--Fin Fila5-->
                    <!--Inicio Fila6-->
                    <div class="row">
                      <div class="input-field col s3">
                        <select name="entidad6" id="ent6">
                          <option value="" disabled selected>Elige una opción</option>
                          <option value=1>Aguascalientes</option>
                          <option value=2>Baja California</option>
                          <option value=3>Baja California Sur</option>
                          <option value=4>Campeche</option>
                          <option value=5>Coahuila de Zaragoza</option>
                          <option value=6>Colima</option>
                          <option value=7>Chiapas</option>
                          <option value=8>Chihuahua</option>
                          <option value=9>Ciudad de México</option>
                          <option value=10>Durango</option>
                          <option value=11>Guanajuato</option>
                          <option value=12>Guerrero</option>
                          <option value=13>Hidalgo</option>
                          <option value=14>Jalisco</option>
                          <option value=15>México</option>
                          <option value=16>Michoacán</option>
                          <option value=17>Morelos</option>
                          <option value=18>Nayarit</option>
                          <option value=19>Nuevo León</option>
                          <option value=20>Oaxaca</option>
                          <option value=21>Puebla</option>
                          <option value=22>Querétaro</option>
                          <option value=23>Quintana Roo</option>
                          <option value=24>San Luis Potosí</option>
                          <option value=25>Sinaloa</option>
                          <option value=26>Sonora</option>
                          <option value=27>Tabasco</option>
                          <option value=28>Tamaulipas</option>
                          <option value=29>Tlaxcala</option>
                          <option value=30>Veracruz</option>
                          <option value=31>Yucatán</option>
                          <option value=32>Zacatecas</option>
                        </select>
                        <label for="ent6">Entidad Federativa</label>
                        <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      </div>

                      <div class="input-field col s3" id="pais3">
                        <select name="paisTutor">
                          <option value="" disabled selected>Elige una opción</option>
                          <option value="Alemania">Alemania</option>
                          <option value="Francia">Francia</option>
                          <option value="Estados Unidos">Estados Unidos</option>
                          <option value="Inglaterra">Inglaterra</option>
                          <option value="México">México</option>
                          <option value="Guatemala">Guatemala</option>
                          <option value="Honduras">Honduras</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Brasil">Brasil</option>
                          <option value="Italia">Italia</option>
                          <option value="Japón">Japón</option>
                          <option value="China">China</option>
                          <option value="Espana">España</option>
                          <label>País</label>
                        </select>
                        <label>País</label>
                      </div>

                      <!--  adicion 28 de dic-->
                      <div class="input-field col s3" id="nacionalidadTutor" name="nacionalidadTutor">
                        <select name="nacionalidadTutor" id="tres">
                          <option value="" disabled selected>Elige una opción</option>
                          <option value="Alemán">Alemán</option>
                          <option value="Frances">Francés</option>
                          <option value="Estadounidense">Estadounidense</option>
                          <option value="Inglés">Inglés</option>
                          <option value="Mexicano">Mexicano</option>
                          <option value="Guatelamteco">Guatemalteco</option>
                          <option value="Hondureno">Hondureño</option>
                          <option value="Argentino">Argentino</option>
                          <option value="Brasileno">Brasileño</option>
                          <option value="Italiano">Italiano</option>
                          <option value="Japones">Japonés</option>
                          <option value="Chino">Chino</option>
                          <option value="Espanol">Español</option>
                        </select>
                        <label>Nacionalidad</label>
                      </div>

                      <div class="input-field col s3">
                        <input class="validate" id="c" name="curp4" type="text" pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)" data-length="18" maxlength="18" onkeyup="mayus(this);">
                        <label for="c">CURP</label>
                        <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      </div>
                    </div>
                    <!--Fin Fila6-->
                    <!--Inicio Fila7-->
                    <div class="row">
                      <div class="col s3">
                        <label>
                          <input class="with-gap" name="grupo4" type="radio" value="1" />
                          <span>Sin estudios</span><br>
                        </label>

                        <label>
                          <input class="with-gap" name="grupo4" type="radio" value="2" />
                          <span>Primaria incompleta</span>
                        </label>

                        <label>
                          <input class="with-gap" name="grupo4" type="radio" value="3" />
                          <span>Primaria concluida</span>
                        </label>

                        <label>
                          <input class="with-gap" name="grupo4" type="radio" value="4" />
                          <span>Secundaria incompleta</span>
                        </label>
                      </div>

                      <div class="col s3">
                        <label>
                          <input class="with-gap" name="grupo4" type="radio" value="5" />
                          <span>Secundaria concluida</span>
                        </label>

                        <label>
                          <input class="with-gap" name="grupo4" type="radio" value="6" />
                          <span>Carrera Técnica</span>
                        </label>

                        <label>
                          <input class="with-gap" name="grupo4" type="radio" value="7" />
                          <span>Bachillerato incompleto</span>
                        </label>

                        <label>
                          <input class="with-gap" name="grupo4" type="radio" value="8" />
                          <span>Bachillerato concluido</span>
                        </label>
                      </div>

                      <div class="col s3">
                        <label>
                          <input class="with-gap" name="grupo4" type="radio" value="9" />
                          <span>Tec. Sup. Universitario</span>
                        </label>

                        <label>
                          <input class="with-gap" name="grupo4" type="radio" value="10" />
                          <span>Licenciatura incompleta</span>
                        </label>

                        <label>
                          <input class="with-gap" name="grupo4" type="radio" value="11" />
                          <span>Licenciatura concluida</span><br>
                        </label>

                        <label>
                          <input class="with-gap" name="grupo4" type="radio" value="12" />
                          <span>Especialidad</span>
                        </label>
                      </div>

                      <div class="col s3">
                        <label>
                          <input class="with-gap" name="grupo4" type="radio" value="13" />
                          <span>Maestría</span><br>
                        </label>

                        <label>
                          <input class="with-gap" name="grupo4" type="radio" value="14" />
                          <span>Doctorado</span><br>
                        </label>

                        <label>
                          <input class="with-gap" name="grupo4" type="radio" value="15" />
                          <span>Otro</span>
                        </label>

                        <div class="input-field cols3">
                          <input class="validate" id="gradoesp" type="text" name="especificar14">
                          <label for="gradoesp">Especificar</label>
                        </div>
                      </div>
                    </div>
                    <!--Fin Fila7-->
                    <!--Inicio Fila8-->
                    <div class="center row">

                      <div class="input-field col s2" id="civilTutor" name="civilTutor">
                        <select name="civilTutor" id="civilTutor">
                          <option value="Casado">Casado</option>
                          <option value="Soltero">Soltero</option>
                          <option value="Otro">Otro</option>
                        </select>
                        <label>Estado Civil</label>
                      </div>
                      <!-- Adicion 28 de dic -->
                      <div class="input-field col s3">
                        <input class="validate" id="ocupacionTutor" type="text" name="ocupacionTutor">
                        <label for="ocupacionTutor">Ocupación</label>
                      </div>

                      <div class="input-field col s3">
                        <h7>¿Trabaja?</h7>
                        <div class="switch">
                          <label>No
                            <input type="checkbox" name="trabaja4">
                            <span class="lever"></span>
                            Sí</label>
                          </div>
                        </div>

                        <div class="col s4">
                          <p class="range-field">
                            <input type="range" id="hrsemana3" min="0" max="48" name="semana3"/>
                            <label for="hrsemana3">Número de horas a la semana</label>
                          </p>
                        </div>
                      </div>
                      <!--  -->
                      <div class="center row">
                        <!-- adicion 28 de dic -->
                        <div class="input-field col s3">
                          <input type="text" class="validate" id="electorTutor" name="electorTutor" >
                          <label for="electorTutor">Clave de Elector</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>

                        <div class="input-field col s3">
                          <input type="email" class="validate" id="co" name="correoTutor" >
                          <label for="correoTutor">Correo electrónico</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>
                        <!-- adicion 28 de dic -->
                        <div class="input-field col s3">
                          <input class="validate" id="faceTutor" name="faceTutor" type="text" >
                          <label for="faceTutor">Facebook</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>
                        <!-- adicion 28 de dic -->
                        <div class="input-field col s3">
                          <input class="validate" id="TwitterTutor" name="TwitterTutor" type="text" >
                          <label for="TwitterTutor">Twitter</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>

                </div>
                <?php
              } ?>


            				</div>
                    <!--  -->
            				<!--Inicio Fila 1-->
                    <div class="row">
                      <ul class="collection with-header">
                        <li class="collection-header grey lighten-2"><h5 class="center">DATOS DE LA MADRE</h5>

                        </ul>
                        <?php
                        if ($madre->num_rows()>0) {
                          $madre=$madre->row();
                          ?>
                          <div class="">

                            <div class="row">
                              <div class="input-field col s4">
                                <input class="validate" value="<?=$madre->nombre_padre?>" id="nom3" type="text" name="nombre3">
                                <label for="nom3">Nombre(s)</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>

                              <div class="input-field col s3">
                                <input class="validate" id="ap2" value="<?=$madre->paterno_padre?>" type="text" name="paterno2">
                                <label for="ap2">Apellido Paterno</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>

                              <div class="input-field col s3">
                                <input class="validate" id="am2" value="<?=$madre->materno_padre?>" type="text" name="materno2">
                                <label for="am2">Apellido Materno</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>

                              <div class="input-field col s2">
                                <input class="validate" id="edadMadre" value="<?=$madre->edad?>" type="number" min="15" name="edadMadre" required>
                                <label for="edadMadre">Edad</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>
                            </div>
                            <!--Fin Fila 1-->
                            <!--Inicio Fila 2-->
                            <div class="row">
                              <div class="input-field col s3">
                                <input type="text" class="datepicker" value="<?=$madre->fecha_nacimiento?>" id="nac2" name="nacimiento2">
                                <label for="nac2">Fecha de Nacimiento</label>
                              </div>

                              <div class="input-field col s3">
                                <input class="validate" id="lug2" value="<?=$madre->lugar_nacimiento?>" type="text" name="lugar2">
                                <label for="lug2">Lugar de Nacimiento</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>

                              <div class="input-field col s3" id="mun4">
                                <input class="validate" id="municipio4" value="<?=$madre->municipio?>" type="text" name="municipio4">

                                <label for="municipio4">Municipio</label>
                              </div>

                              <div class="input-field col s3" id="del4">
                                <input class="validate" id="delegacion4" value="<?=$madre->delegacion?>" type="text" name="delegacion4">
                                <label for="delegacion4">Delegación</label>
                              </div>
                            </div>
                            <!--Fin Fila 2-->
                            <!--Inicio Fila 3-->
                            <div class="row">
                              <div class="input-field col s3">
                                <select name="entidad3" id="ent3">
                                  <option value="" disabled selected>Elige una opción</option>
                                  <option value=1>Aguascalientes</option>
                                  <option value=2>Baja California</option>
                                  <option value=3>Baja California Sur</option>
                                  <option value=4>Campeche</option>
                                  <option value=5>Coahuila de Zaragoza</option>
                                  <option value=6>Colima</option>
                                  <option value=7>Chiapas</option>
                                  <option value=8>Chihuahua</option>
                                  <option value=9>Ciudad de México</option>
                                  <option value=10>Durango</option>
                                  <option value=11>Guanajuato</option>
                                  <option value=12>Guerrero</option>
                                  <option value=13>Hidalgo</option>
                                  <option value=14>Jalisco</option>
                                  <option value=15>México</option>
                                  <option value=16>Michoacán</option>
                                  <option value=17>Morelos</option>
                                  <option value=18>Nayarit</option>
                                  <option value=19>Nuevo León</option>
                                  <option value=20>Oaxaca</option>
                                  <option value=21>Puebla</option>
                                  <option value=22>Querétaro</option>
                                  <option value=23>Quintana Roo</option>
                                  <option value=24>San Luis Potosí</option>
                                  <option value=25>Sinaloa</option>
                                  <option value=26>Sonora</option>
                                  <option value=27>Tabasco</option>
                                  <option value=28>Tamaulipas</option>
                                  <option value=29>Tlaxcala</option>
                                  <option value=30>Veracruz</option>
                                  <option value=31>Yucatán</option>
                                  <option value=32>Zacatecas</option>
                                </select>
                                <label for="ent3">Entidad Federativa</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>
                              <script type="text/javascript">
                                document.getElementById('ent3').value=<?php echo($madre->entidad)?>;
                              </script>

                              <div class="input-field col s3" id="">
                                <select name="pais2" id="pais2">
                                  <option value="" disabled selected>Elige una opción</option>
                                  <option value="Alemania">Alemania</option>
                                  <option value="Francia">Francia</option>
                                  <option value="Estados Unidos">Estados Unidos</option>
                                  <option value="Inglaterra">Inglaterra</option>
                                  <option value="México">México</option>
                                  <option value="Guatemala">Guatemala</option>
                                  <option value="Honduras">Honduras</option>
                                  <option value="Argentina">Argentina</option>
                                  <option value="Brasil">Brasil</option>
                                  <option value="Italia">Italia</option>
                                  <option value="Japón">Japón</option>
                                  <option value="China">China</option>
                                  <option value="Espana">España</option>
                                </select>
                                <label>País</label>
                              </div>

                              <script type="text/javascript">
                                document.getElementById('pais2').value="<?php echo($madre->pais)?>";
                              </script>

                              <!--  adicion 28 de dic-->
                              <div class="input-field col s3" id="" name="">
                                <select name="nacionalidadMadre" id="tresMadre">
                                  <option value="" disabled selected>Elige una opción</option>
                                  <option value="Alemán">Alemán</option>
                                  <option value="Frances">Francés</option>
                                  <option value="Estadounidense">Estadounidense</option>
                                  <option value="Inglés">Inglés</option>
                                  <option value="Mexicano">Mexicano</option>
                                  <option value="Guatelamteco">Guatemalteco</option>
                                  <option value="Hondureno">Hondureño</option>
                                  <option value="Argentino">Argentino</option>
                                  <option value="Brasileno">Brasileño</option>
                                  <option value="Italiano">Italiano</option>
                                  <option value="Japones">Japonés</option>
                                  <option value="Chino">Chino</option>
                                  <option value="Espanol">Español</option>
                                </select>
                                <label>Nacionalidad</label>
                              </div>
                              <script type="text/javascript">
                                document.getElementById('tresMadre').value="<?php echo($madre->nacionalidad)  ?>";
                              </script>

                              <div class="input-field col s3">
                                <input class="validate" id="cur" value="<?=$madre->curp?>" name="curp2" type="text" pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)" data-length="18" maxlength="18" onkeyup="mayus(this);">
                                <label for="cur">CURP</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>
                            </div>
                            <!--Fin Fila 3-->
                            <!--Inicio Fila 4-->
                            <div class="row">
                              <div class="col s3">
                                <label>
                                  <input class="with-gap" id="gradoestM1" name="grupo1" type="radio" value="1" />
                                  <span>Sin estudios</span><br>
                                </label>

                                <label>
                                  <input class="with-gap" id="gradoestM2" name="grupo1" type="radio" value="2" />
                                  <span>Primaria incompleta</span>
                                </label>

                                <label>
                                  <input class="with-gap" id="gradoestM3" name="grupo1" type="radio" value="3" />
                                  <span>Primaria concluida</span>
                                </label>

                                <label>
                                  <input class="with-gap" id="gradoestM4" name="grupo1" type="radio" value="4" />
                                  <span>Secundaria incompleta</span>
                                </label>
                              </div>

                              <div class="col s3">
                                <label>
                                  <input class="with-gap" id="gradoestM5" name="grupo1" type="radio" value="5" />
                                  <span>Secundaria concluida</span>
                                </label>

                                <label>
                                  <input class="with-gap" id="gradoestM6" name="grupo1" type="radio" value="6" />
                                  <span>Carrera Técnica</span>
                                </label>

                                <label>
                                  <input class="with-gap" id="gradoestM7" name="grupo1" type="radio" value="7" />
                                  <span>Bachillerato incompleto</span>
                                </label>

                                <label>
                                  <input class="with-gap" id="gradoestM8" name="grupo1" type="radio" value="8" />
                                  <span>Bachillerato concluido</span>
                                </label>
                              </div>

                              <div class="col s3">
                                <label>
                                  <input class="with-gap" id="gradoestM9" name="grupo1" type="radio" value="9" />
                                  <span>Tec. Sup. Universitario</span>
                                </label>

                                <label>
                                  <input class="with-gap" id="gradoestM10" name="grupo1" type="radio" value="10" />
                                  <span>Licenciatura incompleta</span>
                                </label>

                                <label>
                                  <input class="with-gap" id="gradoestM11" name="grupo1" type="radio" value="11" />
                                  <span>Licenciatura concluida</span><br>
                                </label>

                                <label>
                                  <input class="with-gap" id="gradoestM12" name="grupo1" type="radio" value="12" />
                                  <span>Especialidad</span>
                                </label>
                              </div>

                              <div class="col s3">
                                <label>
                                  <input class="with-gap" id="gradoestM13" name="grupo1" type="radio" value="13" />
                                  <span>Maestría</span><br>
                                </label>

                                <label>
                                  <input class="with-gap" id="gradoestM14" name="grupo1" type="radio" value="14" />
                                  <span>Doctorado</span><br>
                                </label>

                                <label>
                                  <input class="with-gap" id="gradoestM15" name="grupo1" type="radio" value="15" />
                                  <span>Otro</span>
                                </label>

                                <div class="input-field cols3">
                                  <input class="validate" id="gradoesp" type="text" name="especificar14">
                                  <label for="gradoesp">Especificar</label>
                                </div>
                              </div>
                              <script type="text/javascript">
                                if (<?php echo($madre->ge) ?>==1) {
                                  document.getElementById('gradoestM1').checked=true;
                                }else if(<?php echo($madre->ge) ?>==2){
                                  document.getElementById('gradoestM2').checked=true;
                                }else if(<?php echo($madre->ge) ?>==3){
                                  document.getElementById('gradoestM3').checked=true;
                                }else if(<?php echo($madre->ge) ?>==4){
                                  document.getElementById('gradoestM4').checked=true;
                                }else if(<?php echo($madre->ge) ?>==5){
                                  document.getElementById('gradoestM5').checked=true;
                                }else if(<?php echo($madre->ge) ?>==6){
                                  document.getElementById('gradoestM6').checked=true;
                                }else if(<?php echo($madre->ge) ?>==7){
                                  document.getElementById('gradoestM7').checked=true;
                                }else if(<?php echo($madre->ge) ?>==8){
                                  document.getElementById('gradoestM8').checked=true;
                                }else if(<?php echo($madre->ge) ?>==9){
                                  document.getElementById('gradoestM9').checked=true;
                                }else if(<?php echo($madre->ge) ?>==10){
                                  document.getElementById('gradoestM10').checked=true;
                                }else if(<?php echo($madre->ge) ?>==11){
                                  document.getElementById('gradoestM11').checked=true;
                                }else if(<?php echo($madre->ge) ?>==12){
                                  document.getElementById('gradoestM12').checked=true;
                                }else if(<?php echo($madre->ge) ?>==13){
                                  document.getElementById('gradoestM13').checked=true;
                                }else if(<?php echo($madre->ge) ?>==14){
                                  document.getElementById('gradoestM14').checked=true;
                                }else if(<?php echo($madre->ge) ?>==15){
                                  document.getElementById('gradoestM15').checked=true;
                                }
                              </script>
                            </div>
                            <!--Fin Fila 4-->
                            <!--Inicio Fila 5-->
                            <div class="row">
                              <!--  adicion 28 dic-->
                              <div class="input-field col s2" id="civilMadre" name="civilMadre">
                                <select name="civilMadre" id="civilMadre">
                                  <option value="Casado">Casado</option>
                                  <option value="Soltero">Soltero</option>
                                  <option value="Otro">Otro</option>
                                </select>
                                <label>Estado Civil</label>
                              </div>
                              <script type="text/javascript">
                                document.getElementById('civilMadre').value="<?php echo($madre->civil) ?>";
                              </script>

                              <!-- Adicion 28 de dic -->
                              <div class="input-field col s3">
                                <input class="validate" value="<?=$madre->ocupacion ?>" id="ocupacionMadre" type="text" name="ocupacionMadre">
                                <label for="ocupacionMadre">Ocupación</label>
                              </div>

                              <div class="input-field col s3 center">
                                <h7>¿Trabaja?</h7>
                                <div class="switch">
                                  <label>No
                                    <input type="checkbox" id="trabajaMadre" name="trabaja" value="1">
                                    <span class="lever"></span>
                                    Sí</label>
                                  </div>
                                </div>
                                <script type="text/javascript">
                                  if (<?php echo ($madre->trabaja)?> ==1 ) {
                                    document.getElementById('trabajaMadre').checked=true;
                                  }
                                </script>

                                <div class="col s4">
                                  <p class="range-field">
                                    <input type="range" value="<?=$madre->horas_trabajo?>" id="hrsemanaMadre" min="0" max="48" name="semana"/>
                                    <label for="hrsemanaMadre">Número de horas a la semana</label>
                                  </p>
                                </div>
                              </div>
                              <!--Fin Fila 5-->

                              <!--Inicio Fila 6-->
                              <div class="row">
                                <!-- adicion 28 de dic -->
                                <div class="input-field col s3">
                                  <input type="text" value="<?=$madre->elector?>" class="validate" id="electorMadre" name="electorMadre" >
                                  <label for="electorMadre">Clave de Elector</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>

                                <div class="input-field col s3">
                                  <input class="validate" value="<?=$madre->tel_casa?>" id="tel2" type="tel" name="telefono2" data-length="12" maxlength="12">
                                  <label for="tel2">Teléfono de casa</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>

                                <div class="input-field col s3">
                                  <input class="validate" value="<?=$madre->tel_trabajo?>" id="tel3" type="tel" name="telefono3" data-length="12" maxlength="12">
                                  <label for="tel3">Teléfono de trabajo</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>

                                <div class="input-field col s3">
                                  <input class="validate" id="cel2" value="<?=$madre->cel?>" type="tel" name="celular2" data-length="10" maxlength="10">
                                  <label for="cel2">Teléfono de celular</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>
                              </div>
                              <!--Fin Fila 7-->
                              <div class="center row">
                                <div class="input-field col s4">
                                  <input type="email" class="validate" value="<?=$madre->correo?>" id="co" name="correoMadre" >
                                  <label for="correoMadre">Correo electrónico</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>
                                <!-- adicion 28 de dic -->
                                <div class="input-field col s4">
                                  <input class="validate" id="faceMadre" value="<?=$madre->facebook?>" name="faceMadre" type="text" >
                                  <label for="faceMadre">Facebook</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>
                                <!-- adicion 28 de dic -->
                                <div class="input-field col s4">
                                  <input class="validate" id="TwitterMadre" value="<?=$madre->twitter?>" name="TwitterMadre" type="text" >
                                  <label for="TwitterMadre">Twitter</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>

                              </div>
                          </div>
                          <?php
                        }else{
                          ?>
                          <div class="">

                            <div class="row">
                              <div class="input-field col s4">
                                <input class="validate" id="nom3" type="text" name="nombre3">
                                <label for="nom3">Nombre(s)</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>

                              <div class="input-field col s3">
                                <input class="validate" id="ap2" type="text" name="paterno2">
                                <label for="ap2">Apellido Paterno</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>

                              <div class="input-field col s3">
                                <input class="validate" id="am2" type="text" name="materno2">
                                <label for="am2">Apellido Materno</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>

                              <div class="input-field col s2">
                                <input class="validate" id="edadMadre" type="number" min="15" name="edadMadre" required>
                                <label for="edadMadre">Edad</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>
                            </div>
                            <!--Fin Fila 1-->
                            <!--Inicio Fila 2-->
                            <div class="row">
                              <div class="input-field col s3">
                                <input type="text" class="datepicker" id="nac2" name="nacimiento2">
                                <label for="nac2">Fecha de Nacimiento</label>
                              </div>

                              <div class="input-field col s3">
                                <input class="validate" id="lug2" type="text" name="lugar2">
                                <label for="lug2">Lugar de Nacimiento</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>

                              <div class="input-field col s3" id="mun4">
                                <input class="validate" id="municipio4" type="text" name="municipio4">

                                <label for="municipio4">Municipio</label>
                              </div>

                              <div class="input-field col s3" id="del4">
                                <input class="validate" id="delegacion4" type="text" name="delegacion4">
                                <label for="delegacion4">Delegación</label>
                              </div>
                            </div>
                            <!--Fin Fila 2-->
                            <!--Inicio Fila 3-->
                            <div class="row">
                              <div class="input-field col s3">
                                <select name="entidad3" id="ent3">
                                  <option value="" disabled selected>Elige una opción</option>
                                  <option value=1>Aguascalientes</option>
                                  <option value=2>Baja California</option>
                                  <option value=3>Baja California Sur</option>
                                  <option value=4>Campeche</option>
                                  <option value=5>Coahuila de Zaragoza</option>
                                  <option value=6>Colima</option>
                                  <option value=7>Chiapas</option>
                                  <option value=8>Chihuahua</option>
                                  <option value=9>Ciudad de México</option>
                                  <option value=10>Durango</option>
                                  <option value=11>Guanajuato</option>
                                  <option value=12>Guerrero</option>
                                  <option value=13>Hidalgo</option>
                                  <option value=14>Jalisco</option>
                                  <option value=15>México</option>
                                  <option value=16>Michoacán</option>
                                  <option value=17>Morelos</option>
                                  <option value=18>Nayarit</option>
                                  <option value=19>Nuevo León</option>
                                  <option value=20>Oaxaca</option>
                                  <option value=21>Puebla</option>
                                  <option value=22>Querétaro</option>
                                  <option value=23>Quintana Roo</option>
                                  <option value=24>San Luis Potosí</option>
                                  <option value=25>Sinaloa</option>
                                  <option value=26>Sonora</option>
                                  <option value=27>Tabasco</option>
                                  <option value=28>Tamaulipas</option>
                                  <option value=29>Tlaxcala</option>
                                  <option value=30>Veracruz</option>
                                  <option value=31>Yucatán</option>
                                  <option value=32>Zacatecas</option>
                                </select>
                                <label for="ent3">Entidad Federativa</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>

                              <div class="input-field col s3" id="pais2">
                                <select name="pais2">
                                  <option value="" disabled selected>Elige una opción</option>
                                  <option value="Alemania">Alemania</option>
                                  <option value="Francia">Francia</option>
                                  <option value="Estados Unidos">Estados Unidos</option>
                                  <option value="Inglaterra">Inglaterra</option>
                                  <option value="México">México</option>
                                  <option value="Guatemala">Guatemala</option>
                                  <option value="Honduras">Honduras</option>
                                  <option value="Argentina">Argentina</option>
                                  <option value="Brasil">Brasil</option>
                                  <option value="Italia">Italia</option>
                                  <option value="Japón">Japón</option>
                                  <option value="China">China</option>
                                  <option value="Espana">España</option>
                                </select>
                                <label>País</label>
                              </div>

                              <!--  adicion 28 de dic-->
                              <div class="input-field col s3" id="nacionalidadMadre" name="nacionalidadMadre">
                                <select name="nacionalidadMadre" id="tres">
                                  <option value="" disabled selected>Elige una opción</option>
                                  <option value="Alemán">Alemán</option>
                                  <option value="Frances">Francés</option>
                                  <option value="Estadounidense">Estadounidense</option>
                                  <option value="Inglés">Inglés</option>
                                  <option value="Mexicano">Mexicano</option>
                                  <option value="Guatelamteco">Guatemalteco</option>
                                  <option value="Hondureno">Hondureño</option>
                                  <option value="Argentino">Argentino</option>
                                  <option value="Brasileno">Brasileño</option>
                                  <option value="Italiano">Italiano</option>
                                  <option value="Japones">Japonés</option>
                                  <option value="Chino">Chino</option>
                                  <option value="Espanol">Español</option>
                                </select>
                                <label>Nacionalidad</label>
                              </div>

                              <div class="input-field col s3">
                                <input class="validate" id="cur" name="curp2" type="text" pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)" data-length="18" maxlength="18" onkeyup="mayus(this);">
                                <label for="cur">CURP</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>
                            </div>
                            <!--Fin Fila 3-->
                            <!--Inicio Fila 4-->
                            <div class="row">
                              <div class="col s3">
                                <label>
                                  <input class="with-gap" name="grupo1" type="radio" value="1" />
                                  <span>Sin estudios</span><br>
                                </label>

                                <label>
                                  <input class="with-gap" name="grupo1" type="radio" value="2" />
                                  <span>Primaria incompleta</span>
                                </label>

                                <label>
                                  <input class="with-gap" name="grupo1" type="radio" value="3" />
                                  <span>Primaria concluida</span>
                                </label>

                                <label>
                                  <input class="with-gap" name="grupo1" type="radio" value="4" />
                                  <span>Secundaria incompleta</span>
                                </label>
                              </div>

                              <div class="col s3">
                                <label>
                                  <input class="with-gap" name="grupo1" type="radio" value="5" />
                                  <span>Secundaria concluida</span>
                                </label>

                                <label>
                                  <input class="with-gap" name="grupo1" type="radio" value="6" />
                                  <span>Carrera Técnica</span>
                                </label>

                                <label>
                                  <input class="with-gap" name="grupo1" type="radio" value="7" />
                                  <span>Bachillerato incompleto</span>
                                </label>

                                <label>
                                  <input class="with-gap" name="grupo1" type="radio" value="8" />
                                  <span>Bachillerato concluido</span>
                                </label>
                              </div>

                              <div class="col s3">
                                <label>
                                  <input class="with-gap" name="grupo1" type="radio" value="9" />
                                  <span>Tec. Sup. Universitario</span>
                                </label>

                                <label>
                                  <input class="with-gap" name="grupo1" type="radio" value="10" />
                                  <span>Licenciatura incompleta</span>
                                </label>

                                <label>
                                  <input class="with-gap" name="grupo1" type="radio" value="11" />
                                  <span>Licenciatura concluida</span><br>
                                </label>

                                <label>
                                  <input class="with-gap" name="grupo1" type="radio" value="12" />
                                  <span>Especialidad</span>
                                </label>
                              </div>

                              <div class="col s3">
                                <label>
                                  <input class="with-gap" name="grupo1" type="radio" value="13" />
                                  <span>Maestría</span><br>
                                </label>

                                <label>
                                  <input class="with-gap" name="grupo1" type="radio" value="14" />
                                  <span>Doctorado</span><br>
                                </label>

                                <label>
                                  <input class="with-gap" name="grupo1" type="radio" value="15" />
                                  <span>Otro</span>
                                </label>

                                <div class="input-field cols3">
                                  <input class="validate" id="gradoesp" type="text" name="especificar14">
                                  <label for="gradoesp">Especificar</label>
                                </div>
                              </div>
                            </div>
                            <!--Fin Fila 4-->
                            <!--Inicio Fila 5-->
                            <div class="row">
                              <!--  adicion 28 dic-->
                              <div class="input-field col s2" id="civilMadre" name="civilMadre">
                                <select name="civilMadre" id="civilMadre">
                                  <option value="Casado">Casado</option>
                                  <option value="Soltero">Soltero</option>
                                  <option value="Otro">Otro</option>
                                </select>
                                <label>Estado Civil</label>
                              </div>

                              <!-- Adicion 28 de dic -->
                              <div class="input-field col s3">
                                <input class="validate" id="ocupacionMadre" type="text" name="ocupacionMadre">
                                <label for="ocupacionMadre">Ocupación</label>
                              </div>

                              <div class="input-field col s3 center">
                                <h7>¿Trabaja?</h7>
                                <div class="switch">
                                  <label>No
                                    <input type="checkbox" name="trabaja" value="1">
                                    <span class="lever"></span>
                                    Sí</label>
                                  </div>
                                </div>

                                <div class="col s4">
                                  <p class="range-field">
                                    <input type="range" id="hrsemana" min="0" max="48" name="semana"/>
                                    <label for="hrsemana">Número de horas a la semana</label>
                                  </p>
                                </div>
                              </div>
                              <!--Fin Fila 5-->

                              <!--Inicio Fila 6-->
                              <div class="row">
                                <!-- adicion 28 de dic -->
                                <div class="input-field col s3">
                                  <input type="text" class="validate" id="electorMadre" name="electorMadre" >
                                  <label for="electorMadre">Clave de Elector</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>

                                <div class="input-field col s3">
                                  <input class="validate" id="tel2" type="tel" name="telefono2" data-length="12" maxlength="12">
                                  <label for="tel2">Teléfono de casa</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>

                                <div class="input-field col s3">
                                  <input class="validate" id="tel3" type="tel" name="telefono3" data-length="12" maxlength="12">
                                  <label for="tel3">Teléfono de trabajo</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>

                                <div class="input-field col s3">
                                  <input class="validate" id="cel2" type="tel" name="celular2" data-length="10" maxlength="10">
                                  <label for="cel2">Teléfono de celular</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>
                              </div>
                              <!--Fin Fila 7-->
                              <div class="center row">
                                <div class="input-field col s4">
                                  <input type="email" class="validate" id="co" name="correoMadre" >
                                  <label for="correoMadre">Correo electrónico</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>
                                <!-- adicion 28 de dic -->
                                <div class="input-field col s4">
                                  <input class="validate" id="faceMadre" name="faceMadre" type="text" >
                                  <label for="faceMadre">Facebook</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>
                                <!-- adicion 28 de dic -->
                                <div class="input-field col s4">
                                  <input class="validate" id="TwitterMadre" name="TwitterMadre" type="text" >
                                  <label for="TwitterMadre">Twitter</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>

                              </div>
                          </div>
                          <?php
                        }
                         ?>

            				<!--Encabezado-->
            				<ul class="collection with-header">
            	        	<li class="collection-header grey lighten-2"><h5 class="center">DATOS DEL PADRE</h5></li></ul>
            				<!--Inicio Fila 8-->
                    <?php
                    if ($padre->num_rows()>0) {
                      $padre=$padre->row();
                      ?>
                      <div class="row">
                        <div class="input-field col s4">
                          <input class="validate" value="<?=$padre->nombre_padre?>" id="nom4" type="text" name="nombre4">
                          <label for="nom4">Nombre</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>

                        <div class="input-field col s3">
                          <input class="validate" value="<?=$padre->paterno_padre?>" id="ap3"  name="paterno3" type="text">
                          <label for="ap3">Apellido Paterno</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>

                        <div class="input-field col s3">
                          <input class="validate" id="am3" value="<?=$padre->materno_padre?>" name="materno3" type="text">
                          <label for="am3">Apellido Materno</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>
                        <!-- adicion 28 de dic -->
                        <div class="input-field col s2">
                          <input class="validate" value="<?=$padre->edad?>" id="edadPadre" type="number" min="15" name="edadPadre" required>
                          <label for="edadPadre">Edad</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>
                      </div>
                      <!--Fin Fila 8-->
                      <!--Inicio Fila 9-->
                      <div class="row">
                        <div class="input-field col s3">
                          <input type="text" value="<?=$padre->fecha_nacimiento?>" class="datepicker" id="nac3" name="nacimiento3">
                          <label for="nac3">Fecha de Nacimiento</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>

                          <div class="input-field col s3">
                            <input class="validate" value="<?=$padre->lugar_nacimiento?>" id="lug3" type="text" name="lugar3">
                            <label for="lug3">Lugar de Nacimiento</label>
                            <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                          </div>

                          <div class="input-field col s3" id="mun5">
                            <input class="validate" value="<?=$padre->municipio?>" id="municipio5" type="text" name="municipio5">
                          <label for="municipio5">Municipio</label>
                          </div>

                          <div class="input-field col s3"  id="del5">
                            <input class="validate" value="<?=$padre->delegacion?>" id="delegacion5" type="text" name="delegacion5">
                          <label for="delegacion5">Delegación</label>
                          </div>
                      </div>
                      <!--Fin Fila 9-->
                      <!--Inicio Fila 10-->
                      <div class="row">
                        <div class="input-field col s3">
                          <select class="" name="entidad4" id="estadoPadre">
                            <option value="" disabled selected>Elige una opción</option>
                            <option value=1>Aguascalientes</option>
                            <option value=2>Baja California</option>
                            <option value=3>Baja California Sur</option>
                            <option value=4>Campeche</option>
                            <option value=5>Coahuila de Zaragoza</option>
                            <option value=6>Colima</option>
                            <option value=7>Chiapas</option>
                            <option value=8>Chihuahua</option>
                            <option value=9>Ciudad de México</option>
                            <option value=10>Durango</option>
                            <option value=11>Guanajuato</option>
                            <option value=12>Guerrero</option>
                            <option value=13>Hidalgo</option>
                            <option value=14>Jalisco</option>
                            <option value=15>México</option>
                            <option value=16>Michoacán</option>
                            <option value=17>Morelos</option>
                            <option value=18>Nayarit</option>
                            <option value=19>Nuevo León</option>
                            <option value=20>Oaxaca</option>
                            <option value=21>Puebla</option>
                            <option value=22>Querétaro</option>
                            <option value=23>Quintana Roo</option>
                            <option value=24>San Luis Potosí</option>
                            <option value=25>Sinaloa</option>
                            <option value=26>Sonora</option>
                            <option value=27>Tabasco</option>
                            <option value=28>Tamaulipas</option>
                            <option value=29>Tlaxcala</option>
                            <option value=30>Veracruz</option>
                            <option value=31>Yucatán</option>
                            <option value=32>Zacatecas</option>
                          </select>
                          <label for="ent4">Entidad Federativa</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                          </div>
                          <script type="text/javascript">
                            document.getElementById('estadoPadre').value="<?=$padre->entidad?>";
                          </script>
                        <div class="input-field col s3">
                            <select name="pais3" id="paisPAdre">
                                <option value="" disabled selected>Elige una opción</option>
                                <option value="Alemania">Alemania</option>
                                <option value="Francia">Francia</option>
                                <option value="Estados Unidos">Estados Unidos</option>
                                <option value="Inglaterra">Inglaterra</option>
                                <option value="México">México</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Brasil">Brasil</option>
                                <option value="Italia">Italia</option>
                                <option value="Japón">Japón</option>
                                <option value="China">China</option>
                                <option value="Espana">España</option>
                            </select>
                            <label>País</label>
                          </div>
                          <script type="text/javascript">
                            document.getElementById('paisPAdre').value="<?=$padre->pais?>";
                          </script>

                          <!--  adicion 28 de dic-->
                          <div class="input-field col s3" id="nacionalidadPadre" name="nacionalidadPadre">
                              <select name="nacionalidadPadre" id="nacionPadre">
                                  <option value="" disabled selected>Elige una opción</option>
                                  <option value="Alemán">Alemán</option>
                                  <option value="Frances">Francés</option>
                                  <option value="Estadounidense">Estadounidense</option>
                                  <option value="Inglés">Inglés</option>
                                  <option value="Mexicano">Mexicano</option>
                                  <option value="Guatelamteco">Guatemalteco</option>
                                  <option value="Hondureno">Hondureño</option>
                                  <option value="Argentino">Argentino</option>
                                  <option value="Brasileno">Brasileño</option>
                                  <option value="Italiano">Italiano</option>
                                  <option value="Japones">Japonés</option>
                                  <option value="Chino">Chino</option>
                                  <option value="Espanol">Español</option>
                              </select>
                              <label>Nacionalidad</label>
                            </div>
                            <script type="text/javascript">
                              document.getElementById('nacionPadre').value="<?=$padre->nacionalidad?>";
                            </script>

                          <div class="input-field col s3">
                            <input class="validate" id="cu" value="<?=$padre->curp?>" name="curp3" type="text" pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)" data-length="18" maxlength="18" onkeyup="mayus(this);">
                            <label for="cu">CURP</label>
                            <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>
                      </div>
                      <!--Fin Fila 10-->
                      <!--Inicio Fila 11-->
                      <div class="row">
                        <div class="col s3">
                            <label>
                                <input class="with-gap" id="gradoestP1" name="grupo2" type="radio" value="1" />
                                <span>Sin estudios</span><br>
                              </label>

                            <label>
                                <input class="with-gap" id="gradoestP2" name="grupo2" type="radio" value="2"  />
                                <span>Primaria incompleta</span>
                              </label>

                            <label>
                                <input class="with-gap" id="gradoestP3" name="grupo2" type="radio" value="3" />
                                <span>Primaria concluida</span>
                              </label>

                            <label>
                                <input class="with-gap" id="gradoestP4" name="grupo2" type="radio" value="4" />
                                <span>Secundaria incompleta</span>
                              </label>
                          </div>

                        <div class="col s3">
                            <label>
                                <input class="with-gap" id="gradoestP5" name="grupo2" type="radio" value="5" />
                                <span>Secundaria concluida</span>
                              </label>

                            <label>
                                <input class="with-gap" id="gradoestP6" name="grupo2" type="radio" value="6" />
                                <span>Carrera Técnica</span>
                              </label>

                            <label>
                                <input class="with-gap" id="gradoestP7" name="grupo2" type="radio" value="7" />
                                <span>Bachillerato incompleto</span>
                              </label>

                            <label>
                                <input class="with-gap" id="gradoestP8" name="grupo2" type="radio" value="8" />
                                <span>Bachillerato concluido</span>
                              </label>
                          </div>

                          <div class="col s3">
                            <label>
                                <input class="with-gap" id="gradoestP9" name="grupo2" type="radio" value="9" />
                                <span>Tec. Sup. Universitario</span>
                              </label>

                            <label>
                                <input class="with-gap" id="gradoestP10" name="grupo2" type="radio" value="10" />
                                <span>Licenciatura incompleta</span>
                              </label>

                            <label>
                                <input class="with-gap" id="gradoestP11" name="grupo2" type="radio" value="11" />
                                <span>Licenciatura concluida</span><br>
                              </label>

                            <label>
                                <input class="with-gap" id="gradoestP12" name="grupo2" type="radio" value="12" />
                                <span>Especialidad</span>
                              </label>
                          </div>

                          <div class="col s3">
                            <label>
                                <input class="with-gap" id="gradoestP13" name="grupo2" type="radio" value="13" />
                                <span>Maestría</span><br>
                              </label>

                            <label>
                                <input class="with-gap" id="gradoestP14" name="grupo2" type="radio" value="14" />
                                <span>Doctorado</span><br>
                              </label>

                            <label>
                                <input class="with-gap" id="gradoestP15" name="grupo2" type="radio" value="15" />
                                <span>Otro</span>
                              </label>
                          </div>
                      </div>

                      <script type="text/javascript">
                        if (<?php echo($padre->ge) ?>==1) {
                          document.getElementById('gradoestP1').checked=true;
                        }else if(<?php echo($padre->ge) ?>==2){
                          document.getElementById('gradoestP2').checked=true;
                        }else if(<?php echo($padre->ge) ?>==3){
                          document.getElementById('gradoestP3').checked=true;
                        }else if(<?php echo($padre->ge) ?>==4){
                          document.getElementById('gradoestP4').checked=true;
                        }else if(<?php echo($padre->ge) ?>==5){
                          document.getElementById('gradoestP5').checked=true;
                        }else if(<?php echo($padre->ge) ?>==6){
                          document.getElementById('gradoestP6').checked=true;
                        }else if(<?php echo($padre->ge) ?>==7){
                          document.getElementById('gradoestP7').checked=true;
                        }else if(<?php echo($padre->ge) ?>==8){
                          document.getElementById('gradoestP8').checked=true;
                        }else if(<?php echo($padre->ge) ?>==9){
                          document.getElementById('gradoestP9').checked=true;
                        }else if(<?php echo($padre->ge) ?>==10){
                          document.getElementById('gradoestP10').checked=true;
                        }else if(<?php echo($padre->ge) ?>==11){
                          document.getElementById('gradoestP11').checked=true;
                        }else if(<?php echo($padre->ge) ?>==12){
                          document.getElementById('gradoest1P2').checked=true;
                        }else if(<?php echo($padre->ge) ?>==13){
                          document.getElementById('gradoestP13').checked=true;
                        }else if(<?php echo($padre->ge) ?>==14){
                          document.getElementById('gradoestP14').checked=true;
                        }else if(<?php echo($padre->ge) ?>==15){
                          document.getElementById('gradoestP15').checked=true;
                        }
                      </script>
                      <!--Fin Fila 11-->
                      <!--Inicio Fila 12-->
                      <div class="row">

                        <div class="input-field col s2" id="civilPadre" name="civilPadre">
                          <select name="civilPadre" id="civilPadre">
                            <option value="Casado">Casado</option>
                            <option value="Soltero">Soltero</option>
                            <option value="Otro">Otro</option>
                          </select>
                          <label>Estado Civil</label>
                        </div>
                        <script type="text/javascript">
                          document.getElementById("civilPadre").value="<?=$padre->civil?>";
                        </script>

                        <!-- Adicion 28 de dic -->
                        <div class="input-field col s3">
                          <input class="validate" value="<?=$padre->ocupacion?>" id="ocupacionPadre" type="text" name="ocupacionPadre">
                          <label for="ocupacionPadre">Ocupación</label>
                        </div>

                        <div class="col s3 center">
                          <h7>¿Trabaja?</h7>
                            <div class="switch">
                              <label>No
                              <input type="checkbox" id="trabajaPadre" name="trabaja3">
                              <span class="lever"></span>
                              Sí</label>
                            </div>
                          </div>
                          <script type="text/javascript">
                            if (<?php echo ($padre->trabaja) ?>==1) {
                              document.getElementById('trabajaPadre').checked=true;
                            }
                          </script>

                          <div class="input-field col s4">
                            <p class="range-field">
                              <input type="range" value="<?=$padre->horas_trabajo?>" id="hrsemana2" min="0" max="48" name="semana2"/>
                              <label for="hrsemana2">Número de horas a la semana</label>
                            </p>
                        </div>
                      </div>
                      <!--Fin Fila 12-->
                      <!--Inicio Fila 13-->
                      <div class="row">
                        <!-- adicion 28 de dic -->
                        <div class="input-field col s3">
                          <input type="text" value="<?=$padre->elector?>" class="validate" id="electorPadre" name="electorPadre" >
                          <label for="electorPadre">Clave de Elector</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>

                        <div class="input-field col s3">
                          <input class="validate" value="<?=$padre->tel_casa?>" id="tel4" type="tel" name="telefono4" data-length="12" maxlength="12">
                          <label for="tel4">Teléfono de casa</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>

                        <div class="input-field col s3">
                          <input class="validate" value="<?=$padre->tel_trabajo?>" id="tel5" type="tel" name="telefono5" data-length="12" maxlength="12">
                          <label for="tel5">Teléfono del trabajo</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>

                        <div class="input-field col s3">
                          <input class="validate" id="cel3" value="<?=$padre->cel?>" type="tel" name="celular3" data-length="10" maxlength="10">
                          <label for="cel3">Teléfono de celular</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>
                      </div>
                      <!--Fin Fila 13-->
                      <div class="center row">
                        <div class="input-field col s4">
                          <input type="email" class="validate" value="<?=$padre->correo?>" id="co" name="correoPadre" >
                          <label for="correoPadre">Correo electrónico</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>
                        <!-- adicion 28 de dic -->
                        <div class="input-field col s4">
                          <input class="validate" id="facePadre" value="<?=$padre->facebook?>" name="facePadre" type="text" >
                          <label for="facePadre">Facebook</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>
                        <!-- adicion 28 de dic -->
                        <div class="input-field col s4">
                          <input class="validate" id="TwitterPadre" value="<?=$padre->twitter?>" name="TwitterPadre" type="text" >
                          <label for="TwitterPadre">Twitter</label>
                          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                        </div>

                      </div>
                      <?php
                    }else{
                      ?>
                        <div class="">
                          <div class="row">
                  					<div class="input-field col s4">
                  						<input class="validate" id="nom4" type="text" name="nombre4">
                  						<label for="nom4">Nombre</label>
                  						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                  					</div>

                  					<div class="input-field col s3">
                  						<input class="validate" id="ap3"  name="paterno3" type="text">
                  						<label for="ap3">Apellido Paterno</label>
                  						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                  					</div>

                  					<div class="input-field col s3">
                  						<input class="validate" id="am3" name="materno3" type="text">
                  						<label for="am3">Apellido Materno</label>
                  						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                  					</div>
                            <!-- adicion 28 de dic -->
                            <div class="input-field col s2">
                              <input class="validate" id="edadPadre" type="number" min="15" name="edadPadre" required>
                              <label for="edadPadre">Edad</label>
                              <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                            </div>
                  				</div>
                  				<!--Fin Fila 8-->
                  				<!--Inicio Fila 9-->
                  				<div class="row">
                  					<div class="input-field col s3">
                    					<input type="text" class="datepicker" id="nac3" name="nacimiento3">
                  						<label for="nac3">Fecha de Nacimiento</label>
                  						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                  					</div>

                      				<div class="input-field col s3">
                  							<input class="validate" id="lug3" type="text" name="lugar3">
                  							<label for="lug3">Lugar de Nacimiento</label>
                  							<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      				</div>

                              <div class="input-field col s3" id="mun5">
                                <input class="validate" id="municipio5" type="text" name="municipio5">
                  						<label for="municipio5">Municipio</label>
                      				</div>

                      				<div class="input-field col s3" id="del5">
                  						  <input class="validate" id="delegacion5" type="text" name="delegacion5">
                  						<label for="delegacion5">Delegación</label>
                      				</div>
                  				</div>
                  				<!--Fin Fila 9-->
                  				<!--Inicio Fila 10-->
                  				<div class="row">
                  					<div class="input-field col s3">
                              <select class="" name="entidad4" id="tres">
                                <option value="" disabled selected>Elige una opción</option>
                                <option value=1>Aguascalientes</option>
                                <option value=2>Baja California</option>
                                <option value=3>Baja California Sur</option>
                                <option value=4>Campeche</option>
                                <option value=5>Coahuila de Zaragoza</option>
                                <option value=6>Colima</option>
                                <option value=7>Chiapas</option>
                                <option value=8>Chihuahua</option>
                                <option value=9>Ciudad de México</option>
                                <option value=10>Durango</option>
                                <option value=11>Guanajuato</option>
                                <option value=12>Guerrero</option>
                                <option value=13>Hidalgo</option>
                                <option value=14>Jalisco</option>
                                <option value=15>México</option>
                                <option value=16>Michoacán</option>
                                <option value=17>Morelos</option>
                                <option value=18>Nayarit</option>
                                <option value=19>Nuevo León</option>
                                <option value=20>Oaxaca</option>
                                <option value=21>Puebla</option>
                                <option value=22>Querétaro</option>
                                <option value=23>Quintana Roo</option>
                                <option value=24>San Luis Potosí</option>
                                <option value=25>Sinaloa</option>
                                <option value=26>Sonora</option>
                                <option value=27>Tabasco</option>
                                <option value=28>Tamaulipas</option>
                                <option value=29>Tlaxcala</option>
                                <option value=30>Veracruz</option>
                                <option value=31>Yucatán</option>
                                <option value=32>Zacatecas</option>
                              </select>
                  						<label for="ent4">Entidad Federativa</label>
                  						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      				</div>

                  					<div class="input-field col s3">
                      					<select name="pais3">
                        						<option value="" disabled selected>Elige una opción</option>
                        						<option value="Alemania">Alemania</option>
                        						<option value="Francia">Francia</option>
                        						<option value="Estados Unidos">Estados Unidos</option>
                        						<option value="Inglaterra">Inglaterra</option>
                        						<option value="México">México</option>
                        						<option value="Guatemala">Guatemala</option>
                        						<option value="Honduras">Honduras</option>
                        						<option value="Argentina">Argentina</option>
                        						<option value="Brasil">Brasil</option>
                        						<option value="Italia">Italia</option>
                        						<option value="Japón">Japón</option>
                        						<option value="China">China</option>
                        						<option value="Espana">España</option>
                  					    </select>
                      					<label>País</label>
                      				</div>

                              <!--  adicion 28 de dic-->
                              <div class="input-field col s3" id="nacionalidadPadre" name="nacionalidadPadre">
                                  <select name="nacionalidadPadre" id="tres">
                                      <option value="" disabled selected>Elige una opción</option>
                                      <option value="Alemán">Alemán</option>
                                      <option value="Frances">Francés</option>
                                      <option value="Estadounidense">Estadounidense</option>
                                      <option value="Inglés">Inglés</option>
                                      <option value="Mexicano">Mexicano</option>
                                      <option value="Guatelamteco">Guatemalteco</option>
                                      <option value="Hondureno">Hondureño</option>
                                      <option value="Argentino">Argentino</option>
                                      <option value="Brasileno">Brasileño</option>
                                      <option value="Italiano">Italiano</option>
                                      <option value="Japones">Japonés</option>
                                      <option value="Chino">Chino</option>
                                      <option value="Espanol">Español</option>
                                  </select>
                                  <label>Nacionalidad</label>
                                </div>

                      				<div class="input-field col s3">
                  							<input class="validate" id="cu" name="curp3" type="text" pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)" data-length="18" maxlength="18" onkeyup="mayus(this);">
                  							<label for="cu">CURP</label>
                  							<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                  					</div>
                  				</div>
                  				<!--Fin Fila 10-->
                  				<!--Inicio Fila 11-->
                  				<div class="row">
                  					<div class="col s3">
                      					<label>
                  					        <input class="with-gap" name="grupo2" type="radio" value="1" />
                  					        <span>Sin estudios</span><br>
                  					      </label>

                  					    <label>
                  					        <input class="with-gap" name="grupo2" type="radio" value="2"  />
                  					        <span>Primaria incompleta</span>
                  					      </label>

                  					    <label>
                  					        <input class="with-gap" name="grupo2" type="radio" value="3" />
                  					        <span>Primaria concluida</span>
                  					      </label>

                  					    <label>
                  					        <input class="with-gap" name="grupo2" type="radio" value="4" />
                  					        <span>Secundaria incompleta</span>
                  					      </label>
                      				</div>

                  					<div class="col s3">
                      					<label>
                  					        <input class="with-gap" name="grupo2" type="radio" value="5" />
                  					        <span>Secundaria concluida</span>
                  					      </label>

                  					    <label>
                  					        <input class="with-gap" name="grupo2" type="radio" value="6" />
                  					        <span>Carrera Técnica</span>
                  					      </label>

                  					    <label>
                  					        <input class="with-gap" name="grupo2" type="radio" value="7" />
                  					        <span>Bachillerato incompleto</span>
                  					      </label>

                  					    <label>
                  					        <input class="with-gap" name="grupo2" type="radio" value="8" />
                  					        <span>Bachillerato concluido</span>
                  					      </label>
                      				</div>

                      				<div class="col s3">
                      					<label>
                  					        <input class="with-gap" name="grupo2" type="radio" value="9" />
                  					        <span>Tec. Sup. Universitario</span>
                  					      </label>

                  					    <label>
                  					        <input class="with-gap" name="grupo2" type="radio" value="10" />
                  					        <span>Licenciatura incompleta</span>
                  					      </label>

                  					    <label>
                  					        <input class="with-gap" name="grupo2" type="radio" value="11" />
                  					        <span>Licenciatura concluida</span><br>
                  					      </label>

                  					    <label>
                  					        <input class="with-gap" name="grupo2" type="radio" value="12" />
                  					        <span>Especialidad</span>
                  					      </label>
                      				</div>

                      				<div class="col s3">
                      					<label>
                  					        <input class="with-gap" name="grupo2" type="radio" value="13" />
                  					        <span>Maestría</span><br>
                  					      </label>

                  					    <label>
                  					        <input class="with-gap" name="grupo2" type="radio" value="14" />
                  					        <span>Doctorado</span><br>
                  					      </label>

                  					    <label>
                  					        <input class="with-gap" name="grupo2" type="radio" value="15" />
                  					        <span>Otro</span>
                  					      </label>
                      				</div>
                  				</div>
                  				<!--Fin Fila 11-->
                  				<!--Inicio Fila 12-->
                  				<div class="row">

                            <div class="input-field col s2" id="civilPadre" name="civilPadre">
                              <select name="civilPadre" id="civilPadre">
                                <option value="Casado">Casado</option>
                                <option value="Soltero">Soltero</option>
                                <option value="Otro">Otro</option>
                              </select>
                              <label>Estado Civil</label>
                            </div>

                            <!-- Adicion 28 de dic -->
                            <div class="input-field col s3">
                              <input class="validate" id="ocupacionPadre" type="text" name="ocupacionPadre">
                              <label for="ocupacionPadre">Ocupación</label>
                            </div>

                  					<div class="col s3 center">
                  						<h7>¿Trabaja?</h7>
                  						 	<div class="switch">
                  					    	<label>No
                  					      <input type="checkbox" name="trabaja3">
                  					      <span class="lever"></span>
                  								Sí</label>
                  					  	</div>
                  	    			</div>

                  	    			<div class="input-field col s4">
                  							<p class="range-field">
                        					<input type="range" id="hrsemana2" min="0" max="48" name="semana2"/>
                        					<label for="hrsemana2">Número de horas a la semana</label>
                      					</p>
                  					</div>
                  				</div>
                  				<!--Fin Fila 12-->
                  				<!--Inicio Fila 13-->
                  				<div class="row">
                            <!-- adicion 28 de dic -->
                            <div class="input-field col s3">
                  						<input type="text" class="validate" id="electorPadre" name="electorPadre" >
                  						<label for="electorPadre">Clave de Elector</label>
                  						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                  					</div>

                  					<div class="input-field col s3">
                  						<input class="validate" id="tel4" type="tel" name="telefono4" data-length="12" maxlength="12">
                  						<label for="tel4">Teléfono de casa</label>
                  						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                  					</div>

                  					<div class="input-field col s3">
                  						<input class="validate" id="tel5" type="tel" name="telefono5" data-length="12" maxlength="12">
                  						<label for="tel5">Teléfono del trabajo</label>
                  						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                  					</div>

                  					<div class="input-field col s3">
                  						<input class="validate" id="cel3" type="tel" name="celular3" data-length="10" maxlength="10">
                  						<label for="cel3">Teléfono de celular</label>
                  						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                  					</div>
                  				</div>
                  				<!--Fin Fila 13-->
                          <div class="center row">
                            <div class="input-field col s4">
                  						<input type="email" class="validate" id="co" name="correoPadre" >
                  						<label for="correoPadre">Correo electrónico</label>
                  						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                  					</div>
                            <!-- adicion 28 de dic -->
                            <div class="input-field col s4">
                      				<input class="validate" id="facePadre" name="facePadre" type="text" >
                      				<label for="facePadre">Facebook</label>
                      				<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      			</div>
                            <!-- adicion 28 de dic -->
                      			<div class="input-field col s4">
                      				<input class="validate" id="TwitterPadre" name="TwitterPadre" type="text" >
                      				<label for="TwitterPadre">Twitter</label>
                      				<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                      			</div>

                  				</div>
                        </div>
                      <?php
                    }
                     ?>

            <!--  -->
            <!--En caso de que el padre, madre o tutor no viva con el alumno se llena este apartado-->
                    <?php
                    if ($domi2->num_rows()>0) {
                      $domi=$domi2->row();
                      ?>
                      <ul class="collapsible ">
                        <li>
                          <div class="collapsible-header"><h4>En caso de que los padres o tutor no vivan con el alumno llenar lo siguiente dando click aquí</h4></div>
                          <div class="collapsible-body">
                            <div class="row">
                              <ul class="collection with-header"><li class="collection-header grey lighten-2"><h5 class="center">DOMICILIO DEL TUTOR ESCOLAR</h5></li></ul>
                              <div class="input-field col s4">
                                <input class="validate" value="<?=$domi->calle?>" id="cal" type="text" name="calle1Tutor">
                                <label for="cal">Calle</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>

                              <div class="input-field col s2">
                                <input class="validate" id="ext" value="<?=$domi->externo?>" type="number" name="exterior1Tutor">
                                <label for="ext">No. Exterior</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>

                              <div class="input-field col s2">
                                <input class="validate" id="int" value="<?=$domi->interno?>" type="number" name="interior1Tutor">
                                <label for="int">No. Interior</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>

                              <div class="input-field col s4">
                                <input class="validate" id="col" value="<?=$domi->colonia?>" type="text" name="colonia1Tutor">
                                <label for="col">Colonia</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>
                            </div>

                            <div class="row">
                              <div class="input-field col s4" id="c1">
                                <input type="text" name="entrec1Tutor" value="<?=$domi->entre1?>" id="c1" class="validate">
                                <label for="c1">Entre calle</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>

                              <div class="input-field col s4" id="c2">
                                <input type="text" name="entrec2Tutor" value="<?=$domi->entre2?>" id="c2" class="validate">
                                <label for="c2">Y calle</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>

                              <div class="input-field col s4" id="ref">
                                <input type="text" value="<?=$domi->referencia?>" name="referenciaTutor" id="c2" class="validate">
                                <label for="ref">Referencia</label>
                                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <?php
                    }else{
                        ?>
                        <ul class="collapsible ">
                          <li>
                            <div class="collapsible-header"><h4>En caso de que los padres o tutor no vivan con el alumno llenar lo siguiente dando click aquí</h4></div>
                            <div class="collapsible-body">
                              <div class="row">
                                <ul class="collection with-header"><li class="collection-header grey lighten-2"><h5 class="center">DOMICILIO DEL TUTOR ESCOLAR</h5></li></ul>
                                <div class="input-field col s4">
                                  <input class="validate" id="cal" type="text" name="calle1Tutor">
                                  <label for="cal">Calle</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>

                                <div class="input-field col s2">
                                  <input class="validate" id="ext" type="number" name="exterior1Tutor">
                                  <label for="ext">No. Exterior</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>

                                <div class="input-field col s2">
                                  <input class="validate" id="int" type="number" name="interior1Tutor">
                                  <label for="int">No. Interior</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>

                                <div class="input-field col s4">
                                  <input class="validate" id="col" type="text" name="colonia1Tutor">
                                  <label for="col">Colonia</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s4" id="c1">
                                  <input type="text" name="entrec1Tutor" id="c1" class="validate">
                                  <label for="c1">Entre calle</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>

                                <div class="input-field col s4" id="c2">
                                  <input type="text" name="entrec2Tutor" id="c2" class="validate">
                                  <label for="c2">Y calle</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>

                                <div class="input-field col s4" id="ref">
                                  <input type="text" name="referenciaTutor" id="c2" class="validate">
                                  <label for="ref">Referencia</label>
                                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>

                        <?php
                    }
                     ?>
                    <!--Termina domicilio padre, madre, tutor-->
            <!--  -->
                    <ul class="collection with-header">
            	        	<li class="collection-header grey lighten-2"><h5 class="center">INGRESOS FAMILIARES</h5></li></ul>
            				<!--Inicio Fila 14-->
                    <?php if ($ingresos->num_rows()>0) {
                      $ingresos=$ingresos->row();
                      ?>
                      <div class="row">
              					<div class="input-field col s12">
              						<select name="ingresos1" id="ingresos1">
                    					<option value=0 disabled selected>Elige una opción</option>
                    					<option value=1>1</option>
              					      <option value=2>2</option>
              					      <option value=3>3</option>
              					      <option value=4>4</option>
              					      <option value=5>5 o más</option>
              					    </select>
                  					<label>¿Cuántas personas que viven en su casa tienen ingresos?</label>
              					</div>
              				</div>
                      <script type="text/javascript">
                        document.getElementById('ingresos1').value=<?=$ingresos->cantidad_personas?>;
                      </script>
              				<!--Fin Fila 14-->
              				<!--Inicio Fila 15-->
              				<div class="row">
              					<div class="input-field col s8">
              						<select name="economico1" id="economico1">
              	      				<option value="0" disabled selected>Elige una opción</option>
              	      				<option value="1">Padre</option>
              						    <option value="2">Madre</option>
              						    <option value="3">Hermano(a)</option>
              						    <option value="8">Otro</option>
              						</select>
              	    			<label>¿De quién depende económicamente?</label>
                  				</div>

              					<div class="input-field col s4">
              						<input class="validate" id="especificar3" name="especificar3" type="text">
              						<label for="especificar3">Otro, especificar</label>
              					</div>
                        <script type="text/javascript">
                          document.getElementById('economico1').value=<?=$ingresos->dep?>;
                          if (<?=$ingresos->dep?> == 8) {
                            document.getElementById('especificar3').value="<?=$ingresos->dep?>";
                          }
                        </script>
              				</div>
                      <?php
                    }else{
                      ?>
                      <div class="row">
                        <div class="input-field col s12">
                          <select name="ingresos1" id="ingresos1">
                              <option value=0 disabled selected>Elige una opción</option>
                              <option value=1>1</option>
                              <option value=2>2</option>
                              <option value=3>3</option>
                              <option value=4>4</option>
                              <option value=5>5 o más</option>
                            </select>
                            <label>¿Cuántas personas que viven en su casa tienen ingresos?</label>
                        </div>
                      </div>
                      <!--Fin Fila 14-->
                      <!--Inicio Fila 15-->
                      <div class="row">
                        <div class="input-field col s8">
                          <select name="economico1" id="economico1">
                              <option value="0" disabled selected>Elige una opción</option>
                              <option value="1">Padre</option>
                              <option value="2">Madre</option>
                              <option value="3">Hermano(a)</option>
                              <option value="8">Otro</option>
                          </select>
                          <label>¿De quién depende económicamente?</label>
                          </div>

                        <div class="input-field col s4">
                          <input class="validate" id="especificar3" name="especificar3" type="text">
                          <label for="especificar3">Otro, especificar</label>
                        </div>
                      </div>
                      <?php
                    } ?>

            				<!--Fin Fila 15-->
                    <!--ADICCIÓN TABLA DE DATOS FAMILIARES-->
                    <!--Encabezado-->
                    <ul class="collection with-header" id="df"><li class="collection-header grey lighten-2"><h5 class="center">DATOS FAMILIARES   <a href="#datosFamiliares" class="btn-floating btn-large waves-effect waves-light teal accent-3 modal-trigger"><i class="material-icons">add</i></a>       </h5><p class="center">(Únicamente proporcione los datos de las personas que viven en la misma casa)</p></li></ul>
                    <div id="tablaFamiliares">
                      <table class="responsive-table" >
                        <thead class="orange">
                          <tr>
                            <th>Apellidos</th>

                            <th>Nombre</th>
                            <th>Sexo</th>
                            <th>Edad</th>
                            <th>Ocupación</th>
                            <th>Parentesco</th>
                            <th>Grado máx de estudios</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php
                          foreach ($familiares->result() as $key) {
                            ?>
                            <tr>

                              <td><?=$key->apellidos?></td>
                              <td><?=$key->nombre?></td>
                              <td><?=$key->sexo?></td>
                              <td><?=$key->edad?></td>
                              <td><?=$key->ocupacion?></td>
                              <td><?=$key->parentezco?></td>
                              <td><?=$key->grado_estudio?></td>
                            </tr>
                            <?php
                          }
                           ?>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>

                        </tbody>
                      </table>

                    </div>
                </ul>
                </div>


                    <!--Continua normal-->
            				<!--Encabezado-->

            				<!--Encabezado-->
            				<ul class="collection with-header">
            	        	<li class="collection-header grey lighten-2"><h5 class="center">INGRESOS FAMILIARES MENSUALES   <a href="#ingreso" class="btn-floating btn-large waves-effect waves-light teal accent-3 modal-trigger"><i class="material-icons">add</i></a></h5></li></ul>


                    <div id="tablaIngresos">
                      <table class="responsive-table" >
                        <thead class="orange">
                          <tr>
                            <th>Persona con ingresos económicos</th>
                            <th>Ingreso mensual en pesos</th>
                            <th>Porcentaje destinado al gasto familiar</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php foreach ($mensuales->result() as $key) {
                            ?>
                            <tr>
                              <td><?=$key->personas_ingreso?></td>
                              <td><?=$key->opcion?></td>
                              <td><?=$key->porcentaje_destinado?> %</td>
                            </tr>
                            <?php
                          } ?>


                        </tbody>
                      </table>

                    </div>
            			<div class="row center">
            				<input type="submit" value="Guardar/Siguiente" class="btn btn-large center">
            			</div>
    			</form> <!--Fin del fomulario-->
        		</ul>

        	   <div class="modal" id="ingreso">
            <h5 class="modal-close right">&#10005;</h5>
        	  <div class="modal-content center">
        	    <h4>Ingresos Familiares Mensuales</h4><br>
        	      <?php echo form_open(""); ?>
        	      <div class="input-field">
        	        <i class="material-icons prefix">person</i>
        	        <input class="validate" type="text" id="ingresos2" name="ingresos2" required>
        	        <label for="ingresos2">Persona con ingresos</label>
        					<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
        	      </div><br>

        				<i class="material-icons prefix left">attach_money</i>
        				<select class="left" id="ingresos3" name="ingresos3">
        						<option value="0" disabled selected>Ingreso mensual</option>
        						<option value="1">Hasta $2,000</option>
                    <option value="2">$2,001 a $6,000</option>
                    <option value="3">$6,001 a $10,000</option>
                    <option value="4">$10,001 a $20,000</option>
                    <option value="5">$20,001 a $30,000</option>
                    <option value="6">Más de $30,000</option>
        				</select>

                <br>
        				<div class="input-field">
        	        <i class="material-icons prefix">pie_chart</i>
        	        <input class="validate" type="number" id="porcentaje" name="porcentaje" min="0" max="100" required>
        	        <label for="porcentaje">Porcentaje destinado al gasto familiar</label>
        					<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
        	      </div><br>

        	      <input type="submit" value="Guardar" onclick="return modal2Adm(<?=$alumno?>)" class="btn btn-large">
        	    <?php echo form_close(); ?>
        	  </div>
        	</div>
              <!-- prueba modad2 -->
             <div class="modal" id="datosFamiliares" name='datosFamiliares'>
            <h5 class="modal-close right">&#10005;</h5>
            <div class="modal-content center">
              <h4>Datos familiares</h4><br>
                <?php echo form_open(""); ?>
                <!-- <form class="" action="" method="post" name="modal1" id="modal1"> -->
                <div class="input-field">
                  <i class="material-icons prefix">person</i>
                  <input type="text" id="apeP" name="modalPAterno" class="validate" required>
                  <label for="apeP">Apellido Paterno</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div><br>

                <div class="input-field">
                  <i class="material-icons prefix">person</i>
                  <input type="text" id="apeM" name="modalMaterno" class="validate" required>
                  <label for="apeM">Apellido Materno</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div><br>

                <div class="input-field">
                  <i class="material-icons prefix">perm_identity</i>
                  <input type="text" id="nom2" name="nombre2" class="validate" required>
                  <label for="nom2">Nombres</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div><br>

                <div class="input-field">
                  <i class="material-icons prefix">timer</i>
                  <input type="number" id="ed" name="edad1" max="100" min="1" required step="1" class="validate">
                  <label for="ed">Edad</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div><br>

                <div class="input-field">
                  <i class="material-icons prefix">work</i>
                  <input type="text" id="ocu2" name="ocupacion2" class="validate" required>
                  <label for="ocu2">Ocupacion</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div><br>
                <!-- revisar modal parentescos -->

                  <i class="material-icons prefix left">group</i>
                  <select id="parentesco1" name="parentesco1" required>
                    <option value="0" disabled selected>Parentesco</option>
                    <option value=1>Padre</option>
                    <option value=2>Madre</option>
                    <option value=3>Hermano(a)</option>
                    <option value=4>Tío(a)</option>
                    <option value=5>Primo(a)</option>
                    <option value=6>Abuelo(a)</option>
                    <option value=7>Sobrino(a)</option>
                    <option value=8>Cuñado(a)</option>
                  </select>
                  <!-- <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span> -->

                  <br><br>
                  <i class="material-icons prefix left">school</i>
                  <select  id="est" name="estudios1" id="estudios1" required>
                    <option value="0" disabled selected>Grado de estudio</option>
                    <option value=1>Sin estudios</option>
                    <option value=2>Primaria incompleta</option>
                    <option value=3>Primaria concluída</option>
                    <option value=4>Secundaria incompleta</option>
                    <option value=5>Secundaria concluída</option>
                    <option value=6>Carrera técnica</option>
                    <option value=7>Bachillerato incompleto</option>
                    <option value=8>Bachillerato concluído</option>
                    <option value=9>Tec. Sup. Universitario</option>
                    <option value=10>Licenciatura incompleta</option>
                    <option value=11>Licenciatura concluída</option>
                    <option value=12>Especialidad</option>
                    <option value=13>Maestría</option>
                    <option value=14>Doctorado</option>
                  </select>
                  <label for="est">Grado máximo de estudios</label>
                  <!-- <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span> -->


                <div>
                  <i class="material-icons prefix">wc</i><br />
                  <label>
                        <input class="with-gap" id="sexF" name="sexo2" type="radio" value="F"/>
                        <span>Femenino</span>
                      </label>

                      <label>
                        <input class="with-gap" id="sexM" name="sexo2" type="radio" value="M"/>
                        <span>Masculino</span>
                      </label>
                </div><br />
                <!-- class="btn btn-large" -->
                <input type="submit" onclick="return modal1Adm(<?=$alumno?>)"  value="Guardar"  class="btn btn-Large">
                <?php echo form_close(); ?>

              </form>
            </div>
          </div>
          <!--  ^^^^-->
        </div>

      </div> <!--Fin tab2-->
      <div class="" id="3"> <!--Inicio tab3-->
        <div class="row">
    	    <ul class="collection with-header">
    	      <li class="collection-header grey lighten-2"><h5 class="center">AMBIENTE SOCIOECONÓMICO</h5>

    			<form action="../../CActualizaciones3/ambienteSocioEconomico/<?=$alumno?>" method="post" id="formA3" class="col s12">
            <!--Inicio Fila 1-->
            <div class="row"><br>
              <div class="col s3 center">
                <h7>Agua Potable</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" name="agua" id="agua">
                        <span class="lever"></span>
                        Sí</label>
                    </div>
              </div>

              <div class="col s3 center">
                <h7>Computadora</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="computadora" name="computadora">
                        <span class="lever"></span>
                        Sí</label>
                  </div>
              </div>

              <div class="col s3 center">
                <h7>Drenaje</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="drenaje" name="drenaje">
                        <span class="lever"></span>
                        Sí</label>
                  </div>
              </div>

              <div class="col s3 center">
                <h7>Laptop</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="laptop" name="laptop">
                        <span class="lever"></span>
                        Sí</label>
                  </div>
              </div>
            </div>
            <!--Fin Fila1-->
            <!--Inicio Fila2-->
            <div class="row">
              <div class="col s3 center">
                <h7>Electricidad</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="electricidad" name="electricidad">
                        <span class="lever"></span>
                        Sí</label>
                  </div>
              </div>

              <div class="col s3 center">
                <h7>Tableta</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="tableta1" name="tableta1">
                        <span class="lever"></span>
                        Sí</label>
                    </div>
              </div>

              <div class="col s3 center">
                <h7>Lavadora de ropa</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="lavadora" name="lavadora">
                        <span class="lever"></span>
                        Sí</label>
                  </div>
              </div>

              <div class="col s3 center">
                <h7>Internet</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="internetAS" name="internetAS">
                        <span class="lever"></span>
                        Sí</label>
                  </div>
              </div>
            </div>
            <!--Fin Fila2-->
            <!--Inicio Fila3-->
            <div class="row">
              <div class="col s3 center">
                <h7>Estufa de gas</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="estufa" name="estufa">
                        <span class="lever"></span>
                        Sí</label>
                  </div>
              </div>

              <div class="col s3 center">
                <h7>Televisión de paga (Sky, Dish, Cable)</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="television" name="television">
                        <span class="lever"></span>
                        Sí</label>
                  </div>
              </div>

              <div class="col s3 center">
                <h7>Horno de microondas</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="horno" name="horno">
                        <span class="lever"></span>
                        Sí</label>
                </div>
              </div>

              <div class="col s3 center">
                <h7>VHS</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="vhs" name="vhs">
                        <span class="lever"></span>
                        Sí</label>
                  </div>
              </div>
            </div>
            <!--Fin Fila3-->
            <!--Inicio Fila4-->
            <div class="row">
              <div class="col s3 center">
                <h7>Refrigerador</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="refrigerador" name="refrigerador">
                        <span class="lever"></span>
                        Sí</label>
                  </div>
              </div>

              <div class="col s3 center">
                <h7>DVD</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="dvd" name="dvd">
                        <span class="lever"></span>
                        Sí</label>
                  </div>
              </div>

              <div class="col s3 center">
                <h7>Línea telefónica</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="linea" name="linea">
                        <span class="lever"></span>
                        Sí</label>
                  </div>
              </div>

              <div class="col s3 center">
                <h7>Blu-Ray</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="blue" name="blue">
                        <span class="lever"></span>
                        Sí</label>
                  </div>
              </div>
            </div>
            <!--Fin Fila4-->
            <!--Inicio Fila5-->
            <div class="row">
              <h5 class="center collection">Para tu uso personal cuentas con</h5>
              <div class="col s4 center">
                <h7>Smartphone</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="reproductor" name="reproductor">
                        <span class="lever"></span>
                        Sí</label>
                  </div>
              </div>

              <div class="col s4 center">
                <h7>Tableta</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="tableta2" name="tableta2">
                        <span class="lever"></span>
                        Sí</label>
                  </div>
              </div>

              <div class="col s4 center">
                <h7>Laptop</h7>
                  <div class="switch">
                      <label>No
                        <input type="checkbox" id="laptop2" name="laptop2">
                        <span class="lever"></span>
                        Sí</label>
                  </div>
              </div>
            </div>
            <!--Fin Fila5-->
            <script type="text/javascript">
            if (<?=$socio->agua_potable?> ==1) {
              document.getElementById('agua').checked=true;
            }
            if (<?=$socio->computadora?> ==1) {
              document.getElementById('computadora').checked=true;
            }
            if (<?=$socio->drenaje?> ==1) {
              document.getElementById('drenaje').checked=true;
            }
            if (<?=$socio->laptop?> ==1) {
              document.getElementById('laptop').checked=true;
            }
            if (<?=$socio->electricidad?> ==1) {
              document.getElementById('electricidad').checked=true;
            }
            if (<?=$socio->tableta?> ==1) {
              document.getElementById('tableta1').checked=true;
            }
            if (<?=$socio->lavadora?> ==1) {
              document.getElementById('lavadora').checked=true;
            }
            if (<?=$socio->internet?> ==1) {
              document.getElementById('internetAS').checked=true;
            }
            if (<?=$socio->estufa?> ==1) {
              document.getElementById('estufa').checked=true;
            }
            if (<?=$socio->tv_paga?> ==1) {
              document.getElementById('television').checked=true;
            }
            if (<?=$socio->horno?> ==1) {
              document.getElementById('horno').checked=true;
            }
            if (<?=$socio->vhs?> ==1) {
              document.getElementById('vhs').checked=true;
            }
            if (<?=$socio->refrigerador?> ==1) {
              document.getElementById('refrigerador').checked=true;
            }
            if (<?=$socio->dvd?> ==1) {
              document.getElementById('dvd').checked=true;
            }
            if (<?=$socio->linea_telefonica?> ==1) {
              document.getElementById('linea').checked=true;
            }
            if (<?=$socio->blue_ray?> ==1) {
              document.getElementById('blue').checked=true;
            }
            if (<?=$socio->reproductor_personal?> ==1) {
              document.getElementById('reproductor').checked=true;
            }
            if (<?=$socio->tableta_personal?> ==1) {
              document.getElementById('tableta2').checked=true;
            }
            if (<?=$socio->laptop_personal?> ==1) {
              document.getElementById('laptop2').checked=true;
            }
          </script>
            <!--Inicio Fila Fila6-->
            <div class="row">
              <div class="input-field col s6">
                  <select name="focos" id="focos">
                      <option value="" disabled selected>Elige una opción</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6 o más</option>
                  </select>
                  <label>¿Cuántos focos hay dentro de su vivienda?</label>
                </div>

                <div class="input-field col s6">
                  <select name="televisores" id="televisores">
                      <option value="" disabled selected>Elige una opción</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6 o más</option>
                  </select>
                  <label>¿Cuántos televisores hay en tu vivienda?</label>
                </div>
            </div>
            <script type="text/javascript">
              document.getElementById('focos').value=<?=$socio->num_focos?>;
              document.getElementById('televisores').value=<?=$socio->num_tvs?>;
            </script>
            <!--Fin Fila6-->
            <ul class="collection with-header">
                <li class="collection-header grey lighten-2"><h5 class="center">SALUD</h5></li></ul>
            <!--Inicio Fila7-->
            <div class="row">
              <div class="col s2"></div>
              <div class="card col s8 center">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?php echo base_url();?>assets/img/cuerpo.jpg">

                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Señala cúal de las figuras corresponde a la percepción que tienes de tu apariencia física.
                  </div>
                </div>
            </div>
            <!--Fin Fila7-->
            <!--Inicio Fila8-->
            <div class="row">
              <div class="input-field col s4">
                <p><label>
                      <input class="with-gap" id="endo" name="grupo3" type="radio" value="1" />
                      <span>Endomorfo o grueso</span>
                    </label></p>
              </div>

              <div class="input-field col s4">
                <p><label>
                      <input class="with-gap" id="ecto" name="grupo3" type="radio" value="2" />
                      <span>Ectomorfo o delgado</span>
                    </label></p>
              </div>

              <div class="input-field col s4">
                <p><label>
                      <input class="with-gap" id="meso" name="grupo3" type="radio" value="3" />
                      <span>Mesoformo o atlético</span>
                    </label></p>
              </div>
            </div>
            <script type="text/javascript">
              if (<?=$salud->apariencia?>==1) {
                document.getElementById('endo').checked=true;
              }else if(<?=$salud->apariencia?>==2) {
                document.getElementById('ecto').checked=true;
              }else{
                document.getElementById('meso').checked=true;
              }
            </script>
            <!--Fin Fila8-->
            <!--Inicio Fila9-->
            <div class="row">
              <div class="input-field col s4">
                <input class="validate" id="estatu" type="number" value="<?=$salud->estatura?>" name="estatura" step="0.01" max="2.50"required>
                <label for="estatu">Estatura</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="col s8">
                <h6 class="collection">Durante el último semestre ¿ha tenido algún problema de salud?</h6>
              </div>
            </div>
            <!--Fin Fila9-->
            <!--Inicio Fila10-->
            <div class="row">
              <div class="input-field col s4">
                <input class="validate" id="pes" type="number" value="<?=$salud->peso?>" name="peso" step="0.001" placeholder="kg" required>
                <label for="pes">Peso</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <?php
                if ($problemaS->num_rows()>0) {
                  $problemaS=$problemaS->row();
                  ?>
                  <div class="col s4 center">
                      <div class="switch">
                          <label>No
                            <input type="checkbox" name="enfermo" checked>
                            <span class="lever"></span>
                            Sí</label>
                      </div>
                  </div>

                  <div class="input-field col s4">
                    <input class="validate" id="esp4" value="<?=$problemaS->descripcion?>" type="text" name="especificar4">
                    <label for="esp4">Especificar</label>
                  </div>
                </div>

                  <?php
                }else{
                  ?>
                  <div class="col s4 center">
                      <div class="switch">
                          <label>No
                            <input type="checkbox" name="enfermo">
                            <span class="lever"></span>
                            Sí</label>
                      </div>
                  </div>

                  <div class="input-field col s4">
                    <input class="validate" id="esp4" type="text" name="especificar4">
                    <label for="esp4">Especificar</label>
                  </div>
                </div>
                  <?php
                }
               ?>

            <!--Fin Fila10-->
            <!--se agrego tipo de sangre y alergias-->
            <div class="row">
              <div class="col s6 center input-field">
                <select class="" name="sangre" id="san">
                  <option value="O-">O-</option>
                  <option value="O+">O+</option>
                  <option value="A-">A-</option>
                  <option value="A+">A+</option>
                  <option value="B-">B-</option>
                  <option value="B+">B+</option>
                  <option value="AB-">AB-</option>
                  <option value="AB+">AB+</option>
                </select>
                <label for="san">Tipo de sangre</label>
              </div>
              <script type="text/javascript">
                document.getElementById('san').value="<?=$salud->tipo_sangre?>"
              </script>

              <div class="input-field col s6 center">
                <input type="text" value="<?=$salud->alergias?>" name="alergia" id="ale">
                <label for="ale">Alergias</label>
              </div>
            </div>
            <!--Inicio Fila11-->
            <div class="row">
              <div class="col s12 center"><h5 class="collection">¿Actualmente cuenta con algún tipo de servicio de salud?</h5></div>
            </div>
            <!--Se agregó numero de seguro, alergias y tipo de sangre-->
            <div class="row">
              <div class="col s12 center input-field">
                <input class="validate" type="text" value="<?=$salud->num_seguro?>" name="numseguro" id="seg">
                <label for="seg">Número de seguro</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
            </div>
            <!--Fin Fila11-->
            <!--Inicio Fila12-->
            <div class="row">
              <div class="col s4">
                <label><input type="checkbox" id="serv1" name="imss" value="1"/>
                  <span>IMSS</span></label>
              </div>

              <div class="col s4">
                <label><input type="checkbox" id="serv4" name="ejercito" value="4"/>
                  <span>Ejército o Marina</span></label>
              </div>

              <div class="col s4">
                <label><input type="checkbox" id="serv7" name="privado" value="7"/>
                  <span>Médico privado</span></label>
              </div>
            </div>
            <!--Fin Fila12-->
            <!--Inicio Fila13-->
            <div class="row">
              <div class="col s4">
                <label><input type="checkbox" id="serv2" name="isste" value="2"/>
                  <span>ISSTE</span></label>
              </div>

              <div class="col s4">
                <label><input type="checkbox" id="serv5" name="sec_salud" value="5"/>
                  <span>Secretaría de Salud</span></label>
              </div>

              <div class="col s4">
                <label><input type="checkbox" id="serv8" name="otro" value="8"/>
                  <span>Otro</span></label>
              </div>
            </div>
            <!--Fin Fila14-->
            <!--Inicio Fila15-->
            <div class="row">
              <div class="col s4">
                <label><input type="checkbox" id="serv3" name="pemex" value="3"/>
                  <span>PEMEX</span></label>
              </div>

              <div class="col s4">
                <label><input type="checkbox" id="serv6" name="seg_popular" value="6"/>
                  <span>Seguro Popular</span></label>
              </div>

              <div class="input-field col s4">
                <!-- disabled=TRUE -->
                <input class="validate" id="esp5" type="text" name="especificar5" >
                <label for="esp5">Especifique</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
            </div>
            <!--Fin Fila15-->
            <?php foreach ($servicio->result() as $key) {
              if ($key->servicio == 1) {
                ?>
                <script type="text/javascript">
                  document.getElementById('serv1').checked=true;
                </script>
                <?php
              }
              if ($key->servicio == 2) {
                ?>
                <script type="text/javascript">
                  document.getElementById('serv2').checked=true;
                </script>
                <?php
              }
              if ($key->servicio == 3) {
                ?>
                <script type="text/javascript">
                  document.getElementById('serv3').checked=true;
                </script>
                <?php
              }
              if ($key->servicio == 4) {
                ?>
                <script type="text/javascript">
                  document.getElementById('serv4').checked=true;
                </script>
                <?php
              }
              if ($key->servicio == 5) {
                ?>
                <script type="text/javascript">
                  document.getElementById('serv5').checked=true;
                </script>
                <?php
              }
              if ($key->servicio == 6) {
                ?>
                <script type="text/javascript">
                  document.getElementById('serv6').checked=true;
                </script>
                <?php
              }
              if ($key->servicio == 7) {
                ?>
                <script type="text/javascript">
                  document.getElementById('serv7').checked=true;
                </script>
                <?php
              }
              if ($key->servicio == 8) {
                ?>
                <script type="text/javascript">
                  document.getElementById('serv8').checked=true;
                </script>
                <?php
              }

            } ?>
            <!--Inicio Fila16-->
            <div class="center row">
              <div class="col s4 center">
                <h5 class="collection">¿Con qué frecuencia asiste al médico?</h5>
              </div>

              <div class="col s8">
                <select name="medico" id="medico">
                  <option value="" disabled selected>Elige una opción</option>
                  <option value=5>Cada semana</option>
                  <option value=6>Cada mes</option>
                  <option value=7>Cada seis meses</option>
                  <option value=8>Cada año</option>
                  <option value=9>Cuando me enfermo</option>

                </select>
              </div>
            </div>
            <!--Fin Fila16-->
            <!--Inicio Fila17-->
            <div class="row">
              <div class="col s4 center">
                <h5 class="collection">¿Con qué frecuencia asiste al dentista?</h5>
              </div>

              <div class="col s8">
                <select name="dentista" id="dentista">
                  <option value="" disabled selected>Elige una opción</option>
                  <option value=5>Cada semana</option>
                  <option value=6>Cada mes</option>
                  <option value=7>Cada seis meses</option>
                  <option value=8>Cada año</option>
                  <option value=9>Cuando me enfermo</option>

                </select>
              </div>
            </div>
            <!--Fin Fila17-->
            <!--Inicio Fila18-->
            <div class="row">
              <div class="col s4 center">
                <h5 class="collection">¿Necesita anteojos?</h5>
              </div>

              <div class="col s8">
                <select name="anteojos" id="anteojos">
                  <option value=10>No los necesito</option>
                  <option value=11>Solo para leer</option>
                  <option value=12>Si los uso</option>
                  <option value=13>Si los necesito pero no los uso</option>
                  <option value=14>No lo se</option>
                </select>
              </div>
            </div>

            <!--Fin Fila18-->
            <script type="text/javascript">
              document.getElementById('medico').value=<?=$salud->frec_medico?>;
              document.getElementById('dentista').value=<?=$salud->frec_dentista?>;
              document.getElementById('anteojos').value=<?=$salud->anteojos?>;
            </script>
            <!--Inicio Fila19-->
            <div class="row">
              <div class="col s8 center">
                <h5 class="collection">¿Actualmente se encuentra bajo tratamiento?</h5>
              </div>
              <?php if ($tratamiento->num_rows()>0) {
                $tratamiento=$tratamiento->row();
                ?>
                <div class="col s4">
                    <div class="switch">
                        <label>No
                          <input type="checkbox" name="tratamiento" checked>
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>
              </div>
              <!--Fin Fila19-->
              <!--Inicio Fila20-->
              <div class="row">
                <div class="col s8 center">
                  <h5 class="collection">En caso afirmativo ¿Cuál?</h5>
                </div>

                <div class="input-field col s4">
                  <input class="validate" value="<?=$tratamiento->descripcion?>" id="esp6" type="text" name="especificar6">
                  <label for="esp6">Especifique</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
              </div>
                <?php
              }else{
                ?>
                <div class="col s4">
                    <div class="switch">
                        <label>No
                          <input type="checkbox" name="tratamiento">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>
              </div>
              <!--Fin Fila19-->
              <!--Inicio Fila20-->
              <div class="row">
                <div class="col s8 center">
                  <h5 class="collection">En caso afirmativo ¿Cuál?</h5>
                </div>

                <div class="input-field col s4">
                  <input class="validate" id="esp6" type="text" name="especificar6">
                  <label for="esp6">Especifique</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
              </div>
                <?php
              }
               ?>

            <!--Fin Fila20-->
            <!--Inicio Fila21-->
            <div class="row">
              <div class="col s4">
                <h5 class="collection">¿Tiene alguna discapacidad física?</h5>
              </div>
              <?php if ($discapacidad->num_rows()>0) {
                $discapacidad=$discapacidad->row();
                ?>
                <div class="col s4">
                  <div class="switch">
                    <label>No
                      <input type="checkbox" name="discapacidad" checked>
                      <span class="lever"></span>
                      Sí</label>
                    </div>
                  </div>

                  <div class="input-field col s4">
                    <input class="validate" value="<?=$discapacidad->descripcion?>" id="esp7" type="text" name="especificar7">
                    <label for="esp7">¿Cuál?</label>
                    <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                  </div>
                <?php
              }else{
                ?>
                <div class="col s4">
                  <div class="switch">
                    <label>No
                      <input type="checkbox" name="discapacidad">
                      <span class="lever"></span>
                      Sí</label>
                    </div>
                  </div>

                  <div class="input-field col s4">
                    <input class="validate" id="esp7" type="text" name="especificar7">
                    <label for="esp7">¿Cuál?</label>
                    <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                  </div>

                <?php
              } ?>
            </div>
            <!--Fin Fila21-->
            <!--Inicio Fila22-->
            <div class="row">
              <div class="col s12">
                <h5 class="collection center">¿Ha asistido o asiste a tratamiento psicológico o psiquiátrico?</h5>
              </div>
            </div>
            <!--Fin Fila22-->
            <!--Inicio Fila23-->
            <?php if ($psicologico->num_rows()>0) {
              $psicologico=$psicologico->row();
              ?><div class="row">
                <div class="col s2">
                  <div class="switch">
                    <label>No
                      <input type="checkbox" name="psicologico" checked>
                      <span class="lever"></span>
                      Sí</label>
                  </div>
                </div>

                <div class="col s3">
                  <input type="text" value="<?=$psicologico->f_inicio?>" class="datepicker" name="desde">
                  <label for="nacimiento">Desde</label>
                </div>

                <div class="col s3">
                  <input type="text" value="<?=$psicologico->f_final?>" class="datepicker" name="hasta">
                  <label for="nacimiento">Hasta</label>
                </div>

                <div class="input-field col s4">
                  <input class="validate" value="<?=$psicologico->ubicacion?>" id="donde" type="text" name="donde">
                  <label for="donde">¿Dónde?</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
              </div><?php
            }else{
              ?><div class="row">
                <div class="col s2">
                  <div class="switch">
                    <label>No
                      <input type="checkbox" name="psicologico">
                      <span class="lever"></span>
                      Sí</label>
                  </div>
                </div>

                <div class="col s3">
                  <input type="text" class="datepicker" name="desde">
                  <label for="nacimiento">Desde</label>
                </div>

                <div class="col s3">
                  <input type="text" class="datepicker" name="hasta">
                  <label for="nacimiento">Hasta</label>
                </div>

                <div class="input-field col s4">
                  <input class="validate" id="donde" type="text" name="donde">
                  <label for="donde">¿Dónde?</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
              </div><?php
            } ?>

            <!--Fin Fila23-->
            <div class="row center">
              <input type="submit" value="Guardar/Siguiente" class="btn btn-large center">
            </div>
    			</form> <!--Termina el formulario-->
    		</ul>
    		</div>
      </div><!--Fin tab3-->
      <div class="" id="4"><!--Inicio tab4-->
        <div class="row">
    	      <ul class="collection with-header">
    	        <li class="collection-header grey lighten-2"><h5 class="center">EJERICIO Y DEPORTES</h5>
    				<!--Inicio del formulario-->
    				<form action="../../CActualizaciones4/deportes/<?=$alumno?>" method="post" id="formA4" class="col s12">

              <!--Inicio Fila1-->
              <div class="row">
                <br>
                <div class="col s8"><h5 class="collection center">¿Cuántas veces a la semana haces ejercicio?</h5></div>

                <div class="col s4">
                  <select name="ejercicio" id="pDeporte5">
                    <option value="0" disabled selected>Elige una opción</option>
                    <option value="1">De 1 a 2 veces</option>
                    <option value="2">De 3 a 4 veces</option>
                    <option value="3">De 5 a 7 veces</option>
                    <option value="4">Nunca</option>
                  </select>
                </div>
              </div>

              <!--Fin Fila1-->
              <!--Inicio Fila2-->
              <div class="row">
                <div class="input-field col s4 center">
                  <h7>¿Practicas algún deporte?</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="practDep5" name="deporte" value="1">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>

                <div class="col s8">
                  <h5 class="collection">Selecciona cúal de los siguientes:</h5>
                </div>
              </div>
              <script type="text/javascript">
                if (<?=$ejercicio->practica_deporte?> == 1) {
                  document.getElementById('pDeporte5').value=<?=$ejercicio->frecuencia?>;
                  document.getElementById('practDep5').checked=true;
                }else{
                  document.getElementById('pDeporte5').value=<?=$ejercicio->frecuencia?>;
                }
              </script>
              <!--Fin Fila2-->
              <!--Inicio Fila3-->
              <div class="row">
                <div class="col s3">
                  <label><input type="checkbox" id="dep1" name="futbol" value="1"/>
                    <span>Futbol</span></label>
                </div>

                <div class="col s3">
                  <label><input type="checkbox" id="dep4" name="beisbol" value="4"/>
                    <span>Béisbol</span></label>
                </div>

                <div class="col s3">
                  <label><input type="checkbox" id="dep7" name="basquetbol" value="7"/>
                    <span>Basquetbol</span></label>
                </div>

                <div class="col s3">
                  <label><input type="checkbox" id="dep10" name="natacion" value="10"/>
                    <span>Natación</span></label>
                </div>
              </div>
              <!--Fin Fila3-->
              <!--Inicio Fila4-->
              <div class="row">
                <div class="col s3">
                  <label><input type="checkbox" id="dep13" name="atletismo" value="13"/>
                  <span>Atletismo</span></label>
                </div>

                <div class="col s3">
                  <label><input type="checkbox" id="dep2" name="tenis" value="2"/>
                  <span>Tenis</span></label>
                </div>

                <div class="col s3">
                  <label><input type="checkbox" id="dep5" name="gimnasia" value="5"/>
                  <span>Gimnasia</span></label>
                </div>

                <div class="col s3">
                  <label><input type="checkbox" id="dep8" name="judo" value="8"/>
                  <span>Judo</span></label>
                </div>
              </div>
              <!--Fin Fila4-->
              <!--Inicio Fila5-->
              <div class="row">
                <div class="col s3">
                  <label><input type="checkbox" id="dep11" name="karate" value="11"/>
                  <span>Karate</span></label>
                </div>

                <div class="col s3">
                  <label><input type="checkbox" id="dep14" name="halterofilia" value="14"/>
                  <span>Halterofilia</span></label>
                </div>

                <div class="col s3">
                  <label><input type="checkbox" id="dep3" name="boxeo" value="3"/>
                  <span>Boxeo</span></label>
                </div>

                <div class="col s3">
                  <label><input type="checkbox" id="dep6" name="lucha" value="6"/>
                  <span>Lucha</span></label>
                </div>
              </div>
              <!--Fin Fila5-->
              <!--Inicio Fila6-->
              <div class="row">
                <div class="col s3">
                  <label><input type="checkbox" id="dep9" name="ciclismo" value="9"/>
                  <span>Ciclismo</span></label>
                </div>

                <div class="col s3">
                  <label><input type="checkbox" id="dep12" name="charreria" value="12"/>
                  <span>Charrería</span></label>
                </div>

                <div class="col s3">
                  <label><input type="checkbox" id="dep15" name="otro" value="15"/>
                  <span>Otro</span></label>
                </div>

                <div class="input-field col s3">
                  <input class="validate" id="esp8" type="text" name="especificar8">
                  <label for="esp8">Especificar</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
              </div>

              <?php
              if ($practDep!=null) {
                foreach ($practDep->result() as $key) {
                  if ($key->id_deporte==1) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('dep1').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->id_deporte==2) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('dep2').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->id_deporte==3) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('dep3').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->id_deporte==4) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('dep4').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->id_deporte==5) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('dep5').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->id_deporte==6) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('dep6').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->id_deporte==7) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('dep7').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->id_deporte==8) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('dep8').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->id_deporte==9) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('dep9').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->id_deporte==10) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('dep10').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->id_deporte==11) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('dep11').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->id_deporte==12) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('dep12').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->id_deporte==13) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('dep13').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->id_deporte==14) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('dep14').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->id_deporte==15) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('dep15').checked=true;
                    </script>
                    <?php
                  }

                }

              }
               ?>
              <!--Fin Fila6-->
              <!--Encabezado-->
              <li class="collection-header grey lighten-2"><h5 class="center">HÁBITOS DE CONSUMO</h5></li>
              <!--Inicio Fila7-->
              <div class="row">
                <div class="col s4 center">
                  <h7>¿Fuma?</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="fuma" name="fuma" value="1">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>

                <div class="col s8 center">
                  <select name="frecfuma" id="cantfuma">
                    <option value="" disabled selected>Elige una opción</option>
                    <option value="4">1 a 5</option>
                    <option value="5">6 a 10</option>
                    <option value="6">10 o más</option>
                  </select>
                </div>
              </div>



              <!--Fin Fila7-->
              <!--Inicio Fila8-->
              <div class="row">
                <div class="col s12"><h5 class="collection">Seleccione las opciones que considere necesarias</h5></div>
              </div>
              <!--Fin Fila8-->
              <!--Inicio Fila9-->
              <div class="row">
                <div class="col s4"><h5 class="collection center">¿Consume?</h5></div>
                <div class="col s8"><h5 class="collection center">¿Cuántas veces a la semana?</h5></div>
              </div>
              <!--Fin Fila9-->
              <!--Inicio Fila10-->
              <div class="row">
                <div class="col s4 center">
                  <h7>Cerveza</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="conCer" name="cerveza" value="1">
                          <span class="lever"></span>
                          Sí</label>
                  </div>
                </div>

                <div class="col s8 center">
                  <select name="freccerveza" id="canCerv">
                    <option value="" disabled selected>Elige una opción</option>
                    <option value="1">Una</option>
                    <option value="2">2 o 3</option>
                    <option value="3">4 o más</option>
                  </select>
                </div>
              </div>

              <!--Fin Fila10-->
              <!---Inicio Fila11-->
              <div class="row">
                <div class="col s4 center">
                  <h7>Vinos de mesa</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="vino" name="vino">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>

                <div class="col s8 center">
                  <select name="frecvino" id="cantVino">
                    <option value="" disabled selected>Elige una opción</option>
                    <option value="1">Una</option>
                    <option value="2">2 o 3</option>
                    <option value="3">4 o más</option>
                  </select>
                </div>
              </div>
              <!--Fin Fila11-->
              <!--Inicio Fila12-->
              <div class="row">
                <div class="col s4 center">
                  <h7>Cocteles</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="coctel" name="coctel">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>

                <div class="col s8 center">
                  <select id="cantCoctel" name="freccoctel">
                    <option value="" disabled selected>Elige una opción</option>
                    <option value="1">Una</option>
                    <option value="2">2 o 3</option>
                    <option value="3">4 o más</option>
                  </select>
                </div>
              </div>
              <!--Fin Fila12-->
              <!--Inicio Fila13-->
              <div class="row">
                <div class="col s4 center">
                  <h7>Licores</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="licor" name="licor">
                          <span class="lever"></span>
                          Sí</label>
                  </div>
                </div>

                <div class="col s8 center">
                  <select id="cantlicor" name="freclicor">
                    <option value="" disabled selected>Elige una opción</option>
                    <option value="1">Una</option>
                    <option value="2">2 o 3</option>
                    <option value="3">4 o más</option>
                  </select>
                </div>
              </div>
              <!--Fin Fila13-->
              <!--Inicio Fila14-->
              <div class="row">
                <div class="col s4 center">
                  <h7>Otros</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="otrosCons" name="otro1">
                          <span class="lever"></span>
                          Sí</label>
                  </div>
                </div>

                <div class="input-field col s8 center">
                  <select id="cantotro" name="frecotro">
                    <option value="" disabled selected>Elige una opción</option>
                    <option value="1">Una</option>
                    <option value="2">2 o 3</option>
                    <option value="3">4 o más</option>
                  </select>
                </div>
              </div>
              <!--Fin Fila14-->
              <!--Inicio Fila15-->
              <div class="row">
                <div class="col s12"><h5 class="collection center">Considera que sus amigos</h5></div>
              </div>
              <!--Fin Fila15-->
              <!--Inicio Fila16-->
              <div class="row">
                <div class="col s4 center">
                  <h7>¿Tienen alguna adicción?</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="amigoAdicc" name="adiccion" value="1">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>

                <div class="input-field col s8">
                  <input class="validate" id="esp9" type="text" name="especificar9">
                  <label for="esp9">Especifique</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
              </div>
              <!--Fin Fila16-->
              <!--Inicio Fila17-->
              <div class="row">
                <div class="col s4 center">
                  <h7>¿Consumen alguna droga?</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="consumen" name="droga">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>

                <div class="input-field col s8">
                  <input class="validate" id="esp10" type="text" name="especificar10">
                  <label for="esp10">Especifique</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
              </div>
              <!--Fin Fila18-->
              <?php
              if ($habitos->fuma==1) {
                ?>
                <script type="text/javascript">
                document.getElementById('fuma').checked=true;
                document.getElementById('cantfuma').value=<?=$habitos->cant_cigarros?>;
                </script>
                <?php
              }
              if ($habitos->consume_cerveza == 1) {
                ?>
                <script type="text/javascript">
                document.getElementById('conCer').checked=true;
                document.getElementById('canCerv').value=<?=$habitos->cerveza?>;
                </script>
                <?php
              }
              if ($habitos->consume_vino==1) {
                ?>
                <script type="text/javascript">
                document.getElementById('vino').checked=true;
                document.getElementById('cantVino').value=<?=$habitos->vinos?>;
                </script>
                <?php
              }
              if ($habitos->consume_coctel==1) {
                ?>
                <script type="text/javascript">
                document.getElementById('coctel').checked=true;
                document.getElementById('cantCoctel').value=<?=$habitos->cocteles?>;
                </script>
                <?php
              }
              if ($habitos->consume_licor==1) {
                ?>
                <script type="text/javascript">
                document.getElementById('licor').checked=true;
                document.getElementById('cantlicor').value=<?=$habitos->licores?>;
                </script>
                <?php
              }
              if ($habitos->consume_otro==1) {
                ?>
                <script type="text/javascript">
                document.getElementById('otrosCons').checked=true;
                document.getElementById('cantotro').value=<?=$habitos->otros?>;
                </script>
                <?php
              }
              if ($habitos->amigo_adiccion==1) {
                ?>
                <script type="text/javascript">
                  document.getElementById('amigoAdicc').checked=true;
                  document.getElementById('esp9').value="<?php echo($habitos->adiccion)?>";
                </script>
                <?php
              }
              if ($habitos->consumen_droga==1) {
                ?>
                <script type="text/javascript">
                  document.getElementById('consumen').checked=true;
                  document.getElementById('esp10').value="<?php echo($habitos->droga)?>";
                </script>
                <?php
              }
              ?>
              <!--Encabezado-->
              <li class="collection-header grey lighten-2"><h5 class="center">RECREACIÓN Y TIEMPO LIBRE</h5></li>
              <!--Inicio Fila19-->
              <div class="row">
                <div class="col s4">
                  <label><input type="checkbox" id="recr1" name="parque" value="1"/>
                  <span>Ir al parque</span></label>
                </div>

                <div class="col s4">
                  <label><input type="checkbox" id="recr6" name="deporte1" value="6"/>
                  <span>Hacer deporte</span></label>
                </div>

                <div class="col s4">
                  <label><input type="checkbox" id="recr11" name="tele" value="11"/>
                  <span>Ver televisión</span></label>
                </div>
              </div>
              <!--Fin Fila19-->
              <!--Inicio Fila20-->
              <div class="row">
                <div class="col s4">
                  <label><input type="checkbox" id="recr2" name="cine" value="2"/>
                  <span>Ir al cine</span></label>
                </div>

                <div class="col s4">
                  <label><input type="checkbox" id="recr7" name="amigos" value="7"/>
                  <span>Reunirse con amigos</span></label>
                </div>

                <div class="col s4">
                  <label><input type="checkbox" id="recr12" name="peliculas" value="12"/>
                  <span>Ver películas en casa</span></label>
                </div>
              </div>
              <!--Fin Fila20-->
              <!--Inicio Fila21-->
              <div class="row">
                <div class="col s4">
                  <label><input type="checkbox" id="recr3" name="bailar" value="3"/>
                  <span>Ir a bailar</span></label>
                </div>

                <div class="col s4">
                  <label><input type="checkbox" id="recr8" name="pareja" value="8"/>
                  <span>Salir con mi pareja</span></label>
                </div>

                <div class="col s4">
                  <label><input type="checkbox" id="recr18" name="leer" value="18"/>
                  <span>Leer</span></label>
                </div>
              </div>
              <!--Fin Fila21-->
              <!--Inicio Fila22-->
              <div class="row">
                <div class="col s4">
                  <label><input type="checkbox" id="recr4" name="videojuegos" value="4"/>
                  <span>Jugar videojuegos</span></label>
                </div>

                <div class="col s4">
                  <label><input type="checkbox" id="recr9" name="musica" value="9"/>
                  <span>Escuchar música</span></label>
                </div>

                <div class="col s4">
                  <label><input type="checkbox" id="recr5" name="compras" value="5"/>
                  <span>Ir de compras</span></label>
                </div>
              </div>
              <!--Fin Fila22-->
              <!--Inicio Fila23-->
              <div class="row">
                <div class="col s4">
                  <label><input type="checkbox" id="recr10" name="computadora" value="10"/>
                  <span>Usar la computadora</span></label>
                </div>

                <div class="col s4">
                  <label><input type="checkbox" id="recr13" name="otro2" value="13"/>
                  <span>Otro</span></label>
                </div>

                <div class="input-field col s4">
                  <input class="validate" id="esp11" type="text" name="especificar11">
                  <label for="esp11">Especificar</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
              </div>
              <?php foreach ($recreacion->result() as $key) {
                if ($key->actividad==1) {
                ?>
                <script type="text/javascript">
                  document.getElementById('recr1').checked=true;
                </script>
                <?php
                }
                if ($key->actividad==2) {
                ?>
                <script type="text/javascript">
                  document.getElementById('recr2').checked=true;
                </script>
                <?php
                }
                if ($key->actividad==3) {
                ?>
                <script type="text/javascript">
                  document.getElementById('recr3').checked=true;
                </script>
                <?php
                }
                if ($key->actividad==4) {
                ?>
                <script type="text/javascript">
                  document.getElementById('recr4').checked=true;
                </script>
                <?php
                }
                if ($key->actividad==5) {
                ?>
                <script type="text/javascript">
                  document.getElementById('recr5').checked=true;
                </script>
                <?php
                }
                if ($key->actividad==6) {
                ?>
                <script type="text/javascript">
                  document.getElementById('recr6').checked=true;
                </script>
                <?php
                }
                if ($key->actividad==7) {
                ?>
                <script type="text/javascript">
                  document.getElementById('recr7').checked=true;
                </script>
                <?php
                }
                if ($key->actividad==8) {
                ?>
                <script type="text/javascript">
                  document.getElementById('recr8').checked=true;
                </script>
                <?php
                }
                if ($key->actividad==9) {
                ?>
                <script type="text/javascript">
                  document.getElementById('recr9').checked=true;
                </script>
                <?php
                }
                if ($key->actividad==10) {
                ?>
                <script type="text/javascript">
                  document.getElementById('recr10').checked=true;
                </script>
                <?php
                }
                if ($key->actividad==11) {
                ?>
                <script type="text/javascript">
                  document.getElementById('recr11').checked=true;
                </script>
                <?php
                }
                if ($key->actividad==12) {
                ?>
                <script type="text/javascript">
                  document.getElementById('recr12').checked=true;
                </script>
                <?php
                }
                if ($key->actividad==18) {
                ?>
                <script type="text/javascript">
                  document.getElementById('recr18').checked=true;
                </script>
                <?php
                }
                if ($key->actividad==13) {
                ?>
                <script type="text/javascript">
                  document.getElementById('recr13').checked=true;
                  document.getElementById('esp11').value="<?=$key->accion?>";
                </script>
                <?php
                }

              }
               ?>
              <!--Fin Fila23-->

              <!--Encabezado-->
              <li class="collection-header grey lighten-2"><h5 class="center">GUSTOS E INTERESES</h5></li>
              <!--Inicio Fila24-->
              <div class="row">

                <div class="input-field col s6">
                      <input id="textarea1" type="text" value="<?=$gustos->tiempo_libre?>" class="validate" name="libre" required>
                      <label for="textarea1">¿Qué hago en mi tiempo libre?</label>
                      <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
                <div class="input-field col s6">
                      <input id="textarea2" type="text" value="<?=$gustos->ultima_vez_libro?>" class="validate" name="libro" required>
                      <label for="textarea2">Ultima vez que leí un libro</label>
                      <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
              </div>
              <!--Fin Fila24-->
              <!--Inicio Fila25-->
              <div class="row">
                <div class="input-field col s6">
                      <input id="textarea3" type="text" value="<?=$gustos->gusta_hacer?>" class="validate" name="gusta" required>
                      <label for="textarea3">¿Qué es lo que más me gusta hacer?</label>
                      <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
                <div class="input-field col s6">
                      <input id="disgusta" type="text" value="<?=$gustos->disgusta_hacer?>" class="materialize-textarea validate" name="disgusta" required>
                      <label for="disgusta">¿Qué es lo que me disgusta hacer?</label>
                      <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
              </div>
              <!--Fin Fila25-->
              <!--Inicio Fila26-->
              <div class="row">
                <div class="collection green lighten-4 col s4 center"><h6>Libros que has leído</h6></div>
                  <div class="collection red lighten-4 col s4 center"><h6>Mis películas preferidas son</h6></div>
                  <div class="collection blue lighten-4 col s4 center"><h6>¿Cuántos amigos tengo?</h6></div>
              </div>
              <!--Fin Fila26-->
              <!--Inicio Fila27-->
              <div class="row">
                <div class="collection green lighten-5 input-field col s4">
                  <input id="textarea4" type="text" value="<?=$gustos->libro1?>" class="materialize-textarea validate" name="libro1" required>
                  <label for="textarea4">1.- </label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>

                <div class="collection red lighten-5 input-field col s4">
                  <input id="textarea5" type="text" value="<?=$gustos->pelicula1?>" class="validate" name="pelicula1" required>
                  <label for="textarea5">1.- </label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>

                <div class="collection blue lighten-5 input-field col s4">
                  <input class="validate"  id="ami" value="<?=$gustos->num_amigos?>" type="number" step="1" name="amigos2" required>
                  <label for="ami">Número de amigos</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
              </div>
              <!--Fin Fila27-->
              <!--Inicio Fila28-->
              <div class="row">
                <div class="collection green lighten-5 input-field col s4">
                  <input id="textarea6" type="text" value="<?=$gustos->libro2?>" class="materialize-textarea validate" name="libro2" required>
                  <label for="textarea6">2.- </label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>

                <div class="collection red lighten-5 input-field col s4">
                  <input id="textarea7" type="text" value="<?=$gustos->pelicula2?>" class="materialize-textarea validate" name="pelicula2" required>
                  <label for="textarea7">2.- </label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>

                <div class="collection brown lighten-4 col s4 center"><h6>¿Qué lugares frecuento con ellos?</h6></div>
              </div>
              <!--Fin Fila28-->
              <!--Inicio Fila29-->
              <div class="row">
                <div class="collection green lighten-5 input-field col s4">
                  <input id="textarea8" type="text" value="<?=$gustos->libro3?>" class="materialize-textarea validate" name="libro3" required>
                  <label for="textarea8">3.- </label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>

                <div class="collection red lighten-5 input-field col s4">
                  <input id="textarea9" type="text" class="materialize-textarea validate" value="<?=$gustos->pelicula3?>" name="pelicula3" required>
                  <label for="textarea9">3.- </label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>

                <div class="collection brown lighten-5 input-field col s4">
                  <input id="textarea10" type="text" class="materialize-textarea validate" value="<?=$gustos->lugar1?>" name="lugares" required>
                  <label for="textarea10">1.- </label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
              </div>
              <!--Fin Fila29-->
              <!--Inicio Fila30-->
              <div class="row">
                <div class="collection green lighten-5 input-field col s4">
                  <input id="textarea11" type="text" value="<?php echo($gustos->libro4) ?>" class="materialize-textarea validate"  name="libro4" required>
                  <label for="textarea11">4.- </label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>

                <div class="collection red lighten-5 input-field col s4">
                  <input id="textarea12" type="text" class="materialize-textarea validate" value="" name="pelicula4" required>
                  <label for="textarea12">4.- </label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>

                <div class="collection brown lighten-5 input-field col s4">
                  <input id="textarea13" type="text" class="materialize-textarea validate" value="<?=$gustos->lugar2?>" name="lugares2" required>
                  <label for="textarea13">2.- </label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
              </div>
              <!--Fin Fila30-->
              <!--Encabezado-->
              <li class="collection-header grey lighten-2"><h5 class="center">PARTICIPACIÓN SOCIAL</h5></li>
              <!--Inicio Fila31-->
              <div class="row">
                <div class="col s10 center"><h5 class="collection">¿Actualmente participa en alguna organización, asociación, equipo o grupo?</h5></div>
                <?php if ($participacion!=null) {
                  ?>
                  <div class="col s2 center">
                      <div class="switch">
                          <label>No
                            <input type="checkbox" name="organizacion" checked>
                            <span class="lever"></span>
                            Sí</label>
                      </div>
                  </div>
                </div>
                <!--Fin Fila31-->
                <!--Inicio Fila32-->
                <div class="row">
                  <div class="col s3">
                    <label><input type="checkbox" id="org1" name="estudiantil" value="1"/>
                    <span>Estudiantil</span></label>
                  </div>

                  <div class="col s3">
                    <label><input type="checkbox" id="org3" name="beneficiencia" value="3"/>
                    <span>Beneficiencia</span></label>
                  </div>

                  <div class="col s3">
                    <label><input type="checkbox" id="org5" name="politico" value="5"/>
                    <span>Político</span></label>
                  </div>

                  <div class="col s3">
                    <label><input type="checkbox" id="org7" name="otro3" value="7"/>
                    <span>Otro</span></label>
                  </div>
                </div>
                <!--Fin Fila32-->
                <!--Inicio Fila33-->
                <div class="row">
                  <div class="col s3">
                    <label><input type="checkbox" id="org2" name="deportivo" value="2"/>
                    <span>Deportivo</span></label>
                  </div>

                  <div class="col s3">
                    <label><input type="checkbox" id="org4" name="religioso" value="4"/>
                    <span>Religioso</span></label>
                  </div>

                  <div class="col s3">
                    <label><input type="checkbox" id="org6" name="academico" value="6"/>
                    <span>Académico</span></label>
                  </div>

                  <div class="input-field col s3">
                    <input class="validate" id="esp12" type="text" name="especificar12">
                    <label for="esp12">Especificar</label>
                    <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                  </div>
                </div>
                  <?php
                  foreach ($organizaciones->result() as $key) {
                    if ($key->organizacion ==1) {
                      ?>
                      <script type="text/javascript">
                        document.getElementById('org1').checked=true;
                      </script>
                      <?php
                    }
                    if ($key->organizacion ==2) {
                      ?>
                      <script type="text/javascript">
                        document.getElementById('org2').checked=true;
                      </script>
                      <?php
                    }
                    if ($key->organizacion ==3) {
                      ?>
                      <script type="text/javascript">
                        document.getElementById('org3').checked=true;
                      </script>
                      <?php
                    }
                    if ($key->organizacion ==4) {
                      ?>
                      <script type="text/javascript">
                        document.getElementById('org4').checked=true;
                      </script>
                      <?php
                    }
                    if ($key->organizacion ==5) {
                      ?>
                      <script type="text/javascript">
                        document.getElementById('org5').checked=true;
                      </script>
                      <?php
                    }
                    if ($key->organizacion ==6) {
                      ?>
                      <script type="text/javascript">
                        document.getElementById('org6').checked=true;
                      </script>
                      <?php
                    }
                    if ($key->organizacion ==7) {
                      ?>
                      <script type="text/javascript">
                        document.getElementById('org7').checked=true;
                        document.getElementById('esp12').value="<?php echo($key->org) ?>";
                      </script>
                      <?php
                    }
                  }
                }else {
                  ?>
                  <div class="col s2 center">
                      <div class="switch">
                          <label>No
                            <input type="checkbox" name="organizacion">
                            <span class="lever"></span>
                            Sí</label>
                      </div>
                  </div>
                </div>
                <!--Fin Fila31-->
                <!--Inicio Fila32-->
                <div class="row">
                  <div class="col s3">
                    <label><input type="checkbox" name="estudiantil" value="1"/>
                    <span>Estudiantil</span></label>
                  </div>

                  <div class="col s3">
                    <label><input type="checkbox" name="beneficiencia" value="3"/>
                    <span>Beneficiencia</span></label>
                  </div>

                  <div class="col s3">
                    <label><input type="checkbox" name="politico" value="5"/>
                    <span>Político</span></label>
                  </div>

                  <div class="col s3">
                    <label><input type="checkbox" name="otro3" value="7"/>
                    <span>Otro</span></label>
                  </div>
                </div>
                <!--Fin Fila32-->
                <!--Inicio Fila33-->
                <div class="row">
                  <div class="col s3">
                    <label><input type="checkbox" name="deportivo" value="2"/>
                    <span>Deportivo</span></label>
                  </div>

                  <div class="col s3">
                    <label><input type="checkbox" name="religioso" value="4"/>
                    <span>Religioso</span></label>
                  </div>

                  <div class="col s3">
                    <label><input type="checkbox" name="academico" value="6"/>
                    <span>Académico</span></label>
                  </div>

                  <div class="input-field col s3">
                    <input class="validate" id="esp12" type="text" name="especificar12">
                    <label for="esp12">Especificar</label>
                    <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                  </div>
                </div>
                  <?php
                } ?>


              <!--Fin Fila33-->
              <!--Encabezado-->
              <li class="collection-header grey lighten-2"><h5 class="center">INTERNET</h5></li>
              <!--Inicio Fila34-->
              <div class="row">
                <div class="col s4 center"><h5 class="collection">¿Sabes usar internet?</h5></div>

                <div class="col s2">
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="usarInt" name="internet">
                          <span class="lever"></span>
                          Sí</label>
                  </div>
                </div>

                <div class="col s4 center"><h5 class="collection">¿Tienes acceso a internet?</h5></div>

                <div class="col s2">
                  <h7> </h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="access" name="internet2">
                          <span class="lever"></span>
                          Sí</label>
                  </div>
                </div>
              </div>
              <?php if ($internet->sabe_usar==1) {
                ?>
                <script type="text/javascript">
                  document.getElementById('usarInt').checked=true;
                </script>
                <?php
              }
              if ($internet->tiene_acceso==1) {
                ?>
              <script type="text/javascript">
                  document.getElementById('access').checked=true;
              </script>
                <?php
              } ?>
              <!--Fin Fila34-->
              <!--Inicio Fila35-->
              <div class="row">
                <div class="col s12 center"><h5 class="collection">En caso afirmativo, seleccione el lugar principal en el que tiene acceso.</h5></div>
              </div>
              <!--Fin Fila35-->
              <!--Inicio Fila36-->
              <div class="row">
                <div class="col s4">
                  <label>
                      <input class="with-gap" id="accesoI1" name="accesoI" type="radio" value="1" />
                      <span>Casa</span>
                    </label>
                </div>
                <div class="col s4">
                  <label>
                      <input class="with-gap" id="accesoI2" name="accesoI" type="radio" value="2" />
                      <span>Escuela</span>
                    </label>
                </div>
                <div class="col s4">
                  <label>
                      <input class="with-gap" id="accesoI3" name="accesoI" type="radio" value="3" />
                      <span>Trabajo</span>
                    </label>
                </div>
              </div>
              <!--Fin Fila36-->
              <!--Inicio Fila37-->
              <div class="row">
                <div class="col s4">
                  <label>
                    <input class="with-gap" id="accesoI4" name="accesoI" type="radio" value="4" />
                    <span>Café Internet</span>
                  </label>
                </div>

                <div class="col s4">
                  <label >
                    <input class="with-gap" id="accesoI5" name="accesoI" type="radio" value="5" />
                    <span>Casa de algún amigo o familiar</span>
                  </label>
                </div>
                <div class="col s2">
                  <label>
                    <input class="with-gap" id="accesoI6" name="accesoI" type="radio" value="6" />
                    <span>Otro</span>
                  </label>
                </div>

                <div class="input-field col s2">
                  <input class="validate" id="esp13" type="text" name="especificar13">
                  <label for="esp13">Especificar</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
              </div>
              <?php
              if ($internet->acceso==1) {
                ?>
                <script type="text/javascript">
                  document.getElementById('accesoI1').checked=true;
                </script>
                <?php
              }
              if ($internet->acceso==2) {
                ?>
                <script type="text/javascript">
                  document.getElementById('accesoI2').checked=true;
                </script>
                <?php
              }
              if ($internet->acceso==3) {
                ?>
                <script type="text/javascript">
                  document.getElementById('accesoI3').checked=true;
                </script>
                <?php
              }
              if ($internet->acceso==4) {
                ?>
                <script type="text/javascript">
                  document.getElementById('accesoI4').checked=true;
                </script>
                <?php
              }
              if ($internet->acceso==5) {
                ?>
                <script type="text/javascript">
                  document.getElementById('accesoI5').checked=true;
                </script>
                <?php
              }
              if ($internet->acceso==6) {
                ?>
                <script type="text/javascript">
                  document.getElementById('accesoI6').checked=true;
                </script>
                <?php
              }
               ?>
              <!--Fin Fila37-->
              <!--Inicio Fila38-->
              <div class="row">
                <div class="col s12 center"><h5 class="collection">¿Para qué utiliza el internet? (Seleccione las opciones necesarias).</h5></div>
              </div>
              <!--Fin Fila38-->
              <!--Inicio Fila39-->
              <div class="row">
                <div class="col s6 center"><h5 class="collection">¿Tiene?</h5></div>
                <div class="col s6 center"><h5 class="collection">¿Para qué lo utiliza?</h5></div>
              </div>
              <!--Fin Fila39-->
              <!--Inicio Fila40-->
              <div class="row">
                <div class="col s6 center">
                  <h7>Correo electrónico</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="correoEl" name="correo">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>

                <div class="col s3 center">
                  <h7>Intercambiar información</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="interinfo" name="info">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>

                <div class="col s3 center">
                  <h7>Entretenimiento</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="entretemimiento" name="entre">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>
              </div>
              <!--Fin Fila40-->
              <!--Inicio Fila41-->
              <div class="row">
                <div class="col s6 center">
                  <h7>Página web personal</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="pWeb" name="pagina">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>

                <div class="col s3 center">
                  <h7>Relaciones de amistad</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="relacAmistad" name="amistad">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>

                <div class="col s3 center">
                  <h7>Buscar amigos</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="friends" name="buscar">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>
              </div>
              <!--Fin Fila41-->
              <!--Inicio Fila42-->
              <div class="row">
                <div class="col s6 center">
                  <h7>Red Social (Facebook, Twitter, etc.)</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="redSocial" name="social">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>

                <div class="col s3 center">
                  <h7>Relaciones profesionales</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="relProfesionales" name="profesionales">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>

                <div class="col s3 center">
                  <h7>Comunicarte</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="comuni" name="com">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>
              </div>

              <!--Fin Fila42-->
              <!--Inicio Fila43-->
              <div class="row">
                <div class="col s6 center">
                  <h7>Blog/Web blog</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="webblog" name="blog">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>

                <div class="col s3 center">
                  <h7>Buscar pareja</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" id="pair" name="pareja2">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>

                <div class="col s3 center">
                  <h7>Otro</h7>
                    <div class="switch">
                        <label>No
                          <input type="checkbox" name="otro5">
                          <span class="lever"></span>
                          Sí</label>
                    </div>
                </div>
              </div>
              <?php
              if ($internet->correo_electronico ==1) {
                ?>
                <script type="text/javascript">
                document.getElementById('correoEl').checked=true;
                </script>
                <?php
              }
              if ($internet->intercambiar==1) {
                ?>
                <script type="text/javascript">
                document.getElementById('interinfo').checked=true;
                </script>
                <?php
              }
              if ($internet->entrenimiento==1) {
                ?>
                <script type="text/javascript">
                document.getElementById('entretemimiento').checked=true;
                </script>
                <?php
              }
              if ($internet->pag_web_personal==1) {
                ?>
                <script type="text/javascript">
                document.getElementById('pWeb').checked=true;
                </script>
                <?php
              }
              if ($internet->amistad==1) {
                ?>
                <script type="text/javascript">
                document.getElementById('relacAmistad').checked=true;
                </script>
                <?php
              }
              if ($internet->amigos==1) {
                ?>
                <script type="text/javascript">
                document.getElementById('friends').checked=true;
                </script>
                <?php
              }
              if ($internet->red_social==1) {
                ?>
                <script type="text/javascript">
                document.getElementById('redSocial').checked=true;
                </script>
                <?php
              }
              if ($internet->profesionales) {
                ?>
                <script type="text/javascript">
                  document.getElementById('relProfesionales').checked=true;
                </script>
                <?php
              }
              if ($internet->comuinicarse) {
                ?>
                <script type="text/javascript">
                  document.getElementById('comuni').checked=true;
                </script>
                <?php
              }
              if ($internet->webblog) {
                ?>
                <script type="text/javascript">
                  document.getElementById('webblog').checked=true;
                </script>
                <?php
              }
              if ($internet->pareja) {
                ?>
                <script type="text/javascript">
                  document.getElementById('pair').checked=true;
                </script>
                <?php
              }

              ?>
              <!--Fin Fila43-->
              <div class="row center">
                <input type="submit" value="Guardar/Siguiente" class="btn btn-large center">
              </div>
    			  </form><!--Fin del formulario-->
    		</ul>
    		</div>
      </div><!--Fin tab4-->
      <div class="" id="5"><!--Inicio tab5-->
        <div class="row">
    	      <ul class="collection with-header">
    	        <li class="collection-header grey lighten-2"><h5 class="center">TELEFONÍA MÓVIL</h5>
    			         <form action="../../CActualizaciones5/sociales/<?=$alumno?>" method="post" id="formA5" class="col s12">
            <!--Inicio Fila1-->
    				<div class="row">
    					<br>
    					<div class="center col s4"><h5 class="collection">¿Tiene teléfono celular?</h5></div>
    					<div class="center col s2">
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" id="tieneCel" name="celular4">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="center col s4"><h5 class="collection">Si es afirmativo, ¿tiene acceso a Internet?</h5></div>

    					<div class="center col s2">
    						<h7> </h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" id="tieneAccesso" name="internet3">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>
    				</div>
            <?php if ($movil->tiene_cel == 1) {
              ?>
              <script type="text/javascript">
                document.getElementById('tieneCel').checked=true;
              </script>
              <?php
            }
            if ($movil->acceso_int == 1) {
              ?>
              <script type="text/javascript">
                document.getElementById('tieneAccesso').checked=true;
              </script>
              <?php
            } ?>
    				<!--Fin Fila1-->
    				<!--Inicio Fila2-->
    				<div class="row">
    					<div class="input-field col s4">
    						<input type="email" class="validate" value="<?=$movil->correo?>" id="co" name="correo2" required>
    						<label for="co">Correo electrónico</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
              <!-- adicion 28 de dic -->
              <div class="input-field col s4">
        				<input class="validate" id="faceAlumno" value="<?=$movil->facebook?>" name="faceAlumno" type="text" >
        				<label for="faceAlumno">Facebook</label>
        				<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
        			</div>
              <!-- adicion 28 de dic -->
        			<div class="input-field col s4">
        				<input class="validate" id="TwitterAlumno" value="<?=$movil->twitter?>" name="TwitterAlumno" type="text" >
        				<label for="TwitterAlumno">Twitter</label>
        				<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
        			</div>
    				</div>
    				<!--Fin Fila2-->

    				<!--Encabezado-->
    				<ul class="collection with-header">
    	        	<li class="collection-header grey lighten-2"><h5 class="center">RELACIONES/ASPECTOS INTERPERSONALES</h5></li></ul>
    				<!--inicio Fila9-->
    				<div class="row">
    					<div class="input-field col s12">
    						<select id="lugarHermano" name="hermanos">
          						<option value="" disabled selected>Elige una opción</option>
          						<option value="1">El más pequeño</option>
    					      	<option value="2">El más grande</option>
    					      	<option value="3">El de en medio</option>
    					      	<option value="4">Soy hijo único</option>
    					   </select>
        				<label>Lugar que ocupo entre mis hermanos</label>
    					</div>
    				</div>
    				<!--Fin Fila8-->
            <script type="text/javascript">
              document.getElementById('lugarHermano').value=<?php echo($sociales->lugar_hermano)?>;
            </script>
    				<!--Inicio Fila9-->
    				<div class="row">
    					<div class="col s12"><h5 class="collection">¿Cómo es la relación con sus hermanos? (Seleccione al menos 2 opciones)<br /></h5></div>
    				</div>
    				<!--Fin Fila9-->
    				<!--Inicio Fila10-->
    				<div class="row">
    					<div class="col s4">
    						<label><input type="checkbox" id="herm1" name="plat"/>
    					   	<span>Platicamos</span></label>
    					</div>

    					<div class="col s4">
    						<label><input type="checkbox" id="herm3" name="respeto"/>
    					   	<span>Hay respeto</span></label>
    					</div>

    					<div class="col s4">
    						<label><input type="checkbox" id="herm5" name="apoyo"/>
    					   	<span>Nos apoyamos</span></label>
    					</div>
    				</div>
    				<!--Fin Fila10-->
    				<!--Inicio Fila11-->
    				<div class="row">
    					<div class="col s4">
    						<label><input type="checkbox" id="herm2" name="jugar"/>
    					  	<span>Jugamos</span></label>
    					</div>

    					<div class="col s4">
    						<label><input type="checkbox" id="herm4" name="no"/>
    					  	<span>No nos llevamos</span></label>
    					</div>

    					<div class="col s4">
    						<label><input type="checkbox" id="herm6" name="pelear"/>
    					  	<span>Siempre estamos peleando</span></label>
    					</div>
    				</div>
            <?php
            foreach ($hermanos->result() as $key) {
              if ($key->descripcion==1) {
                ?>
                <script type="text/javascript">
                  document.getElementById('herm1').checked=true;
                </script>
                <?php
              }
              if ($key->descripcion==2) {
                ?>
                <script type="text/javascript">
                  document.getElementById('herm2').checked=true;
                </script>
                <?php
              }
              if ($key->descripcion==3) {
                ?>
                <script type="text/javascript">
                  document.getElementById('herm3').checked=true;
                </script>
                <?php
              }
              if ($key->descripcion==4) {
                ?>
                <script type="text/javascript">
                  document.getElementById('herm4').checked=true;
                </script>
                <?php
              }
              if ($key->descripcion==5) {
                ?>
                <script type="text/javascript">
                  document.getElementById('herm5').checked=true;
                </script>
                <?php
              }
              if ($key->descripcion==6) {
                ?>
                <script type="text/javascript">
                  document.getElementById('herm6').checked=true;
                </script>
                <?php
              }
            }
             ?>
    				<!--Fin Fila11-->
    				<!--Inicio Fila12-->
    				<div class="row">
    					<div class="input-field col s4">
    						<input class="validate" id="novio" value="<?=$sociales->edad_noviazgo?>" type="number" step="1" max="100" min="1" name="primernovio">
    						<label for="novio">¿A qué edad tuvo su primer noviazgo?</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="col s3 center">
    						<h7>Actualmente tiene novio</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" id="tieneNovio" name="novio">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>
              <?php
              if ($sociales->tiene_novio==1) {
                ?>
                <script type="text/javascript">
                  document.getElementById('tieneNovio').checked=true;
                </script>
                <?php
              }
               ?>

    					<div class="input-field col s5">
    						<input class="validate" value="<?=$sociales->tiempo_novio?>" id="tie" type="text" name="tiempo">
    						<label for="tie">¿Cuánto tiempo llevas con él (ella)?</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila12-->
    				<!--Inicio Fila13-->
    				<div class="row">
              <div class="input-field col s4">
    						<input type="text" class="validate" value="<?=$sociales->numero_parejas?>" id="parejas" name="parejas">
    						<label for="parejas">¿Cuántas parejas sentimentales has tenido?</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<input type="text" class="validate" value="<?=$sociales->tiempo_ruptura?>" id="pro" name="promedio2">
    						<label for="pro">En promedio ¿Cuánto tiempo ha durado con sus parejas?</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<input type="text" class="validate" value="<?=$sociales->motivo_ruptura?>" id="rup" name="ruptura">
    						<label for="rup">¿Cuál ha sido el principal motivo de ruptura?</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila13-->
    				<!--Inicio Fila14-->
    				<div class="row">
    					<div class="input-field col s6">
    						<input type="text" class="validate" value="<?=$sociales->persona_confianza?>" id="per" name="persona" required>
    						<label for="per">La persona a la que más confianza le tiene es</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s6">
    						<input type="text" class="validate" value="<?=$sociales->razon?>" id="con" name="confianza" required>
    						<label for="con">¿Por qué le tiene confianza?</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila14-->
    				<!--Inicio Fila15-->
    				<div class="row">
    					<div class="input-field col s4 center">
    						<select name="decision" id="tomaDecision">
          						<option value="" disabled selected>Elige una opción</option>
          						<option value="1">Papá</option>
    					      	<option value="2">Mamá</option>
    					      	<option value="3">Ambos</option>
    					      	<option value="4">Hermanos</option>
    					    </select>
        					<label>¿Quién toma las decisiones definitivas en casa?</label>
    					</div>

    					<div class="input-field col s4 center">
    						<select name="flexible" id="flexible">
          						<option value="" disabled selected>Elige una opción</option>
          						<option value="1">Papá</option>
    					      	<option value="2">Mamá</option>
    					      	<option value="3">Ambos</option>
    					    </select>
        					<label>¿Quién es el más flexible en los problemas?</label>
    					</div>

    					<div class="input-field col s4 center">
    						<select name="comunicacion" id="ErrorComunicacion">
          						<option value="" disabled selected>Elige una opción</option>
          						<option value="1">Papá</option>
    					      	<option value="2">Mamá</option>
    					      	<option value="3">Ambos</option>
    					    </select>
        					<label>¿Con quién hay más problemas de comunicación?</label>
    					</div>
    				</div>

            <script type="text/javascript">
              document.getElementById('tomaDecision').value=<?=$sociales->toma_decisiones?>;
              document.getElementById('flexible').value=<?=$sociales->flexible_problemas?>;
              document.getElementById('ErrorComunicacion').value=<?=$sociales->problemas_comunicacion?>;
            </script>
    				<!--Fin Fila15-->
    				<!--Encabezado-->
    	        	<h5 class="center">Agregar integrante   <a class="btn-floating btn-large waves-effect waves-light teal accent-3 modal-trigger" href="#datosAdiccion"><i class="material-icons">add</i></a></h5>

    				<table class="responsive-table" id="integrante">
    			        <thead class="orange">
    			          <tr>
    			              <th>Algún integrante de su familia consume</th>
    			              <th></th>
    			              <th></th>
    			          </tr>
    			        </thead>

    			        <tbody>
    			          <tr>
    			            <td>Alcohol</td>
    			            <td></td>
    			            <td></td>
    			          </tr>
    			          <tr>
    			            <td>Cigarros</td>
    			            <td></td>
    			            <td></td>
    			          </tr>
    			          <tr>
    			            <td>Alguna droga</td>
    			            <td></td>
    			            <td></td>
    			          </tr>
    			        </tbody>
          			</table>
    				<!--Encabezado-->
          			<div class="row">
          				<div class="col s12"><h5 class="collection center">¿Quién realiza las siguientes actividades en el hogar?</h5></div>
          			</div>

    				<!--Inicio Fila16-->
          			<div class="row center">
          				<div class="col s3"></div>
          				<div class="col s2"><h5>Papá</h5></div>
          				<div class="col s2"><h5>Mamá</h5></div>
          				<div class="col s2"><h5>Hermano</h5></div>
          				<div class="col s1"><h5>Yo</h5></div>
          				<div class="col s2"><h5>Persona de servicio</h5></div>
          			</div>
    				<!--Fin Fila16-->
    				<!--Inicio Fila17-->
          			<div class="row center">
          				<div class="col s3">
          					<h7>Lavar, planchar su ropa</h7>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" id="lava1" name="lavarpapa"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" id="lava2" name="lavarmama"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" id="lava3" name="lavarhermano"/>
    					      <span></span></label>
          				</div>

          				<div class="col s1">
    					      <label><input type="checkbox" id="lava11" name="lavaryo"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" id="lava10" name="lavarpersona"/>
    					      <span></span></label>
          				</div>
          			</div>
    						<!--Fin Fila17-->
    						<!--Inicio Fila18-->
          			<div class="row center">
          				<div class="col s3">
          					<h7>Barrer, trapear (aseo general)</h7>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" id="barre1" name="barrerpapa"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" id="barre2" name="barrermama"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" id="barre3" name="barrerhermano"/>
    					      <span></span></label>
          				</div>

          				<div class="col s1">
    					      <label><input type="checkbox" id="barre11" name="barreryo"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" id="barre10" name="barrerpersona"/>
    					      <span></span></label>
          				</div>
          			</div>
    						<!--Fin Fila18-->

          			<div class="row center">
          				<div class="col s3">
          					<h7>Cocinar</h7>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" id="cocina1" name="cocinarpapa"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" id="cocina2" name="cocinarmama"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" id="cocina3" name="cocinarhermano"/>
    					      <span></span></label>
          				</div>

          				<div class="col s1">
    					      <label><input type="checkbox" id="cocina11" name="cocinaryo"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" id="cocina10" name="cocinarpersonatraste"/>
    					      <span></span></label>
          				</div>
          			</div>


          			<div class="row center">
          				<div class="col s3">
          					<h7>Lavar trastes</h7>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" id="lavat1" name="trastepapa"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" id="lavat2" name="trastemama"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" id="lavat3" name="trastehermano"/>
    					      <span></span></label>
          				</div>

          				<div class="col s1">
    					      <label><input type="checkbox" id="lavat11" name="trasteyo"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" id="lavat10" name="trastepersona"/>
    					      <span></span></label>
          				</div>
          			</div>
                <?php
                foreach ($actividades->result() as $key) {
                  if ($key->actividad==14) {
                    if ($key->familiar==1) {
                      ?>
                      <script type="text/javascript">
                      document.getElementById('lava1').checked=true;
                      </script>
                      <?php
                    }
                    if ($key->familiar==2) {
                      ?>
                      <script type="text/javascript">
                      document.getElementById('lava2').checked=true;
                      </script>
                      <?php
                    }
                    if ($key->familiar==3) {
                      ?>
                      <script type="text/javascript">
                      document.getElementById('lava3').checked=true;
                      </script>
                      <?php
                    }
                    if ($key->familiar==10) {
                      ?>
                      <script type="text/javascript">
                      document.getElementById('lava10').checked=true;
                      </script>
                      <?php
                    }
                    if ($key->familiar==11) {
                      ?>
                      <script type="text/javascript">
                      document.getElementById('lava11').checked=true;
                      </script>
                      <?php
                    }
                  }
                  if ($key->actividad==15) {
                    if ($key->familiar==1) {
                      ?>
                      <script type="text/javascript">
                      document.getElementById('barre1').checked=true;
                      </script>
                      <?php
                    }
                    if ($key->familiar==2) {
                      ?>
                      <script type="text/javascript">
                      document.getElementById('barre2').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->familiar==3) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('barre3').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->familiar==10) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('barre11').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->familiar==11) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('barre10').checked=true;
                    </script>
                    <?php
                  }
                }
                  if ($key->actividad==16) {
                  if ($key->familiar==1) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('cocina1').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->familiar==2) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('cocina2').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->familiar==3) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('cocina3').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->familiar==10) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('cocina11').checked=true;
                    </script>
                    <?php
                  }
                  if ($key->familiar==11) {
                    ?>
                    <script type="text/javascript">
                      document.getElementById('cocina10').checked=true;
                    </script>
                    <?php
                  }
                }
                  if ($key->actividad==17) {
                    if ($key->familiar==1) {
                      ?>
                      <script type="text/javascript">
                        document.getElementById('lavat1').checked=true;
                      </script>
                      <?php
                    }
                    if ($key->familiar==2) {
                      ?>
                      <script type="text/javascript">
                        document.getElementById('lavat2').checked=true;
                      </script>
                      <?php
                    }
                    if ($key->familiar==3) {
                      ?>
                      <script type="text/javascript">
                        document.getElementById('lavat3').checked=true;
                      </script>
                      <?php
                    }
                    if ($key->familiar==10) {
                      ?>
                      <script type="text/javascript">
                        document.getElementById('lavat11').checked=true;
                      </script>
                      <?php
                    }
                    if ($key->familiar==11) {
                      ?>
                      <script type="text/javascript">
                        document.getElementById('lavat10').checked=true;
                      </script>
                      <?php
                    }
                  }
                } ?>
                <div class="row"> <!--Negocio familiar-->
                  <div class="input-field col s6 center">
        						<h7>¿Sus padres cuentan con algún negocio familiar?</h7>
        							<div class="switch">
        					    		<label>No
        					      		<input type="checkbox" id="negocioF" name="negocio" value="1">
        					      		<span class="lever"></span>
        					      		Sí</label>
        							</div>
        					</div>

                  <div class="input-field col s6 center">
        						<input class="validate" id="act" type="text" name="negocio2">
        						<label for="act">¿En qué actividades del negocio familiar apoya?</label>
        						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
        					</div>
                </div>
                <?php
                if ($negocio!=null) {
                  ?>
                    <script type="text/javascript">
                      document.getElementById('negocioF').checked=true;
                      document.getElementById('act').value="<?=$negocio->actividades_apoyo?>";
                    </script>
                  <?php
                }
                 ?>
          			<div class="row center">
    					<input type="submit" value="Guardar/Siguiente" class="btn btn-large center">
    				</div>
    			</form> <!--Fin del formulario-->
    		  </ul>
        </div>

    		<!--Modal-->
    		<div class="modal" id="datosAdiccion">
          <h5 class="modal-close right">&#10005;</h5>
      	  <div class="modal-content center">
      	    <h4>Datos adicciones</h4><br>
      	      <?php echo form_open("#","id=modal33"); ?>
      	      <div class="input-field">
      			<select name="sustanciaModal" id="sustanciaModal" required>
      				<option value="0" disabled selected>Elige una opción</option>
      				<option value="1">Alcohol</option>
      				<option value="2">Cigarros</option>
      				<option value="3">Algúna droga</option>
      			</select>
      			<label>Algún integrante de su familia consume:</label>

      	      <div class="input-field">

                <select id="parentescoModal" name="parentescoModal" required>
                  <option value="0" disabled selected>Familiar</option>
                  <option value="1">Padre</option>
                  <option value="2">Madre</option>
                  <option value="3">Hermano(a)</option>
                  <option value="4">Tío(a)</option>
                  <option value="5">Primo(a)</option>
                  <option value="6">Abuelo(a)</option>
                  <option value="7">Sobrino(a)</option>
                  <option value="8">Cuñado(a)</option>
                </select>
                <label>Familiar:</label>
      	      </div>

      	      <div class="input-field">
      					<select name="FrecuenciaModal" id="FrecuenciaModal" required>
      						<option value="0" disabled selected>Elige una opción</option>
      						<option value="15">Diario</option>
      						<option value="16">1 vez a la semana</option>
      						<option value="17">3 veces a la semana</option>
      						<option value="18">1 vez al mes</option>
      						<option value="19">Ocasionalmente</option>
      						<option value="20">Casi nunca</option>
      						<option value="21">Nunca</option>
      					</select>
      					<label>Frecuencia:</label>
      	      </div>

      	      <input type="submit" value="Guardar" onclick="return modal3()" class="btn btn-large">
      	    <?php echo form_close(); ?>
      	  </div>
      	</div>
        </div>
      </div><!--Fin tab5-->
      <div class="" id="6"><!--Inicio tab6-->
        <div class="row">
            <ul class="collection with-header">
              <!--Encabezado-->
              <li class="collection-header grey lighten-2"><h5 class="center">PROYECTO DE VIDA</h5>
          <!--Inicio del formulario-->
          <form action="../../CActualizaciones6/proyVida/<?=$alumno?>" method="post" id="formA6" class="col s12">
            <div class="row"><br>
    					<div class="center col s12"><h5 class="collection">¿Por qué decidió estudiar su bachillerato en CECYTEM? (Seleccione al menos tres opciones)</h5></div>
    				</div>
    				<!--Inicio Fila1-->
    				<div class="row">
    					<div class="col s6">
    						<label><input type="checkbox" id="proyect1" name="instalacion"/>
    					  <span>Por que le gustan las instalaciones</span></label>
    					</div>

    					<div class="col s6">
          			<label><input type="checkbox" id="proyect5" name="carrera"/>
    					  <span>La carrera de técnico en programación</span></label>
    					</div>
    				</div>
    				<!--Fin Fila1-->
    				<!--Inicio Fila2-->
    				<div class="row">
    					<div class="col s6">
    					  <label><input type="checkbox" id="proyect2" name="ensenanza"/>
    					 	<span>Por que le gusta el modelo de enseñanza</span></label>
    					</div>

    					<div class="col s6">
    					  <label><input type="checkbox" id="proyect6" name="recomendacion"/>
    					  <span>Por recomendación de familiares o amigos</span></label>
    					</div>
    				</div>
    				<!--Fin Fila2-->
    				<!--Inicio Fila3-->
    				<div class="row">
    					<div class="col s6">
    					  <label><input type="checkbox" id="proyect3" name="documento"/>
    					  <span>La documentación que se obtiene al egresar</span></label>
    					</div>

    					<div class="col s6">
    					  <label><input type="checkbox" id="proyect7" name="obligado"/>
    					  <span>Le obligaron sus padres</span></label>
    					</div>
    				</div>
    				<!--Fin Fila3-->
    				<!--Inicio Fila4-->
    				<div class="row">
    					<div class="col s6">
    					  <label><input type="checkbox" id="proyect4" name="economia"/>
    					  <span>Por mi situación económica</span></label>
    					</div>

    					<div class="col s6">
    					  <label><input type="checkbox" id="proyect8" name="opcion"/>
    					  <span>Fue otra de sus opciones</span></label>
    					</div>
    				</div>
    				<!--Fin Fila4-->
    				<!--Inicio Fila5-->
    				<div class="row">
    					<div class="input-field col s12">
    						<input type="text" class="validate" id="esp14" name="especificar14">
    						<label for="esp14">Otra especifique</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
            <?php
            foreach ($opciones->result() as $key) {
              if ($key->id_opcion_pv==1) {
                ?>
                <script type="text/javascript">
                document.getElementById('proyect1').checked=true;
                </script>
                <?php
              }
              if ($key->id_opcion_pv==2) {
                ?>
                <script type="text/javascript">
                document.getElementById('proyect2').checked=true;
                </script>
                <?php
              }
              if ($key->id_opcion_pv==3) {
                ?>
                <script type="text/javascript">
                document.getElementById('proyect3').checked=true;
                </script>
                <?php
              }
              if ($key->id_opcion_pv==4) {
                ?>
                <script type="text/javascript">
                document.getElementById('proyect4').checked=true;
                </script>
                <?php
              }
              if ($key->id_opcion_pv==5) {
                ?>
                <script type="text/javascript">
                document.getElementById('proyect5').checked=true;
                </script>
                <?php
              }
              if ($key->id_opcion_pv==6) {
                ?>
                <script type="text/javascript">
                document.getElementById('proyect6').checked=true;
                </script>
                <?php
              }
              if ($key->id_opcion_pv==7) {
                ?>
                <script type="text/javascript">
                document.getElementById('proyect7').checked=true;
                </script>
                <?php
              }
              if ($key->id_opcion_pv==8) {
                ?>
                <script type="text/javascript">
                  document.getElementById('proyect8').checked=true;
                </script>
                <?php
              }
              if ($key->id_opcion_pv>8) {
                ?>
                <script type="text/javascript">
                  document.getElementById('esp14').value="<?=$key->opcion?>";
                </script>
                <?php
              }
            }
            ?>
    				<!--Fin Fila5-->
    				<!--Inicio Fila6-->
    				<div class="row">
    					<div class="input-field col s12">
    			      <input id="textarea14" type="text" value="<?=$proyecto->meta_escuela?>" class="validate" name="metas" required>
    			      <label for="textarea14">Sus metas en la escuela son</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila6-->
    				<!--Inicio Fila7-->
    				<div class="row">
    					<div class="input-field col s12">
    						<input type="text" value="<?=$proyecto->meta_vida?>" class="validate" id="textarea15" name="metavida" required>
    						<label for="textarea15">Su principal meta en la vida es</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila7-->
    				<!--Inicio Fila8-->
    				<div class="row">
    					<div class="input-field col s12">
    						<input type="text" value="<?=$proyecto->piensa_lograrla?>" class="validate" id="textarea16" name="lograr" required>
    						<label for="textarea16">¿Cómo piensa lograrla?</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila8-->
    				<!--Inicio Fila9-->
    				<div class="row">
    					<div class="input-field col s12">
    						<input type="text" class="validate" value="<?=$proyecto->estancia?>" id="textarea17" name="estancia" required>
    						<label for="textarea17">¿Qué espera durante su estancia en el plantel?</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila9-->

    				<!--Inicio Fila10-->
    				<div class="row">
    					<div class="col s6">
    						<h7>Al terminar el bachillerato, piensa continuar estudiando</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" id="continua" name="continua">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

              <?php
              if ($proyecto->termino==1) {
              ?>
              <script type="text/javascript">
                document.getElementById('continua').checked=true;
              </script>
              <?php
              } ?>

    					<div class="input-field col s6">
    						<input type="text" class="validate" value="<?=$proyecto->carrera?>" id="q" name="que">
    						<label for="q">¿Qué?</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila10-->
    				<!--Encabezado-->
    				<ul class="collection with-header">
    	        	<li class="collection-header grey lighten-2"><h5 class="center">PERFIL PERSONAL Y ACADÉMICO DE LOS ESTUDIANTES</h5></li></ul>
    				<!--Inicio Fila11-->
    	      <div class="row">
    	      	<div class="col s12">
    	      		<h7>1.- Mi promedio en la escuela es igual o mayor a 7.</h7>
    							<div class="switch">
    					    		<label>Falso
    					      		<input type="checkbox" id="perfil1" name="promedio2">
    					      		<span class="lever"></span>
    					      		Verdadero</label>
    							</div>
    	        </div>
    				</div>
    				<!--Fin Fila11-->
    				<!--Inicio fila12-->
    				<div class="row">
    	        <div class="col s12">
    	        	<h7>2.- Reprobé 2 o más materias de la secundaria.</h7>
    							<div class="switch">
    					    		<label>Falso
    					      		<input type="checkbox" id="perfil2" name="reprobado">
    					      		<span class="lever"></span>
    					      		Verdadero</label>
    						  </div>
    	        </div>
    	       </div>
    				 <!--Fin Fila12-->
    				 <!--Inicio Fila13-->
    				<div class="row">
    	        <div class="col s12">
    	        	<h7>3.- Yo elegí el plantel de bachillerato al que asisto.</h7>
    							<div class="switch">
    					    		<label>Falso
    					      		<input type="checkbox" id="perfil3" name="eleccion">
    					      		<span class="lever"></span>
    					      		Verdadero</label>
    						</div>
    	        </div>
    	      </div>
    				<!--Fin Fila14-->
    				<!--Inicio Fila15-->
    				<div class="row">
    	        <div class="col s12">
    	        	<h7>4.- Asisto a la educación media superior porque creo que me será muy útil.</h7>
    							<div class="switch">
    					    		<label>Falso
    					      		<input type="checkbox" id="perfil4" name="asistir">
    					      		<span class="lever"></span>
    					      		Verdadero</label>
    						</div>
    	        </div>
    	      </div>
    				<!--Fin Fila16-->
    				<!--Inicio Fila17-->
    				<div class="row">
    	        <div class="col s12">
    	        	<h7>5.- Me gusta la escuela.</h7>
    							<div class="switch">
    					    		<label>Falso
    					      		<input type="checkbox" id="perfil5" name="escuela">
    					      		<span class="lever"></span>
    					      		Verdadero</label>
    						</div>
    	        </div>
    	      </div>
    				<!--Fin Fila17-->
    				<!--Inicio Fila18-->
    				<div class="row">
    	        <div class="col s12">
    	        	<h7>6.- Soy bueno para estudiar.</h7>
    							<div class="switch">
    					    		<label>Falso
    					      		<input type="checkbox" id="perfil6" name="bueno">
    					      		<span class="lever"></span>
    					      		Verdadero</label>
    						</div>
    	        </div>
    	      </div>
    				<!--Fin Fila18-->
    				<!--Inicio Fila19-->
    	      <div class="row">
    	        <div class="col s12">
    	        	<h7>7.- En la secundaria sentía confianza con algún maestro(a) como para platicar con él (ella).</h7>
    							<div class="switch">
    					    		<label>Falso
    					      		<input type="checkbox" id="perfil7" name="maestro">
    					      		<span class="lever"></span>
    					      		Verdadero</label>
    						</div>
    	        </div>
    	      </div>
    				<!--Inicio Fila20-->
    	      <div class="row">
    	        <div class="col s12">
    	        	<h7>8.- En la secundaria preguntaba mis dudas al maestro(a).</h7>
    							<div class="switch">
    					    		<label>Falso
    					      		<input type="checkbox" id="perfil8" name="dudas">
    					      		<span class="lever"></span>
    					      		Verdadero</label>
    						</div>
    	        </div>
    	      </div>
    				<!--Fin Fila20-->
    				<!--Inicio Fila21-->
    	      <div class="row">
    	        <div class="col s12">
    	        	<h7>9.- En la secundaria me molestaban con frecuencia otro u otros compañeros (burlas, intimidación, golpes, extorsiones, etc.).</h7>
    							<div class="switch">
    					    		<label>Falso
    					      		<input type="checkbox" id="perfil9" name="molestaban">
    					      		<span class="lever"></span>
    					      		Verdadero</label>
    						</div>
    	        </div>
    	      </div>
    				<!--Fin Fila21-->
    				<!--Inicio Fila22-->
    	      <div class="row">
    	        <div class="col s12">
    	        	<h7>10.- Si yo reprobara alguna materia, se lo platicaría a mi mamá o mi papá.</h7>
    							<div class="switch">
    					    		<label>Falso
    					      		<input type="checkbox" id="perfil10" name="reprobado2">
    					      		<span class="lever"></span>
    					      		Verdadero</label>
    						</div>
    	        </div>
    	      </div>
    				<!--Fin Fila22-->
    				<!--Inicio Fila23-->
    	      <div class="row">
    	        <div class="col s12">
    	        	<h7>11.- Si tuviera un problema personal, se lo platicaría a mi mamá o mi papá.</h7>
    							<div class="switch">
    					    		<label>Falso
    					      		<input type="checkbox" id="perfil11" name="personal">
    					      		<span class="lever"></span>
    					      		Verdadero</label>
    						</div>
    	        </div>
    	      </div>
    				<!--Fin Fila23-->
    				<!--Inicio Fila24-->
    	      <div class="row">
    	        <div class="col s12">
    	        	<h7>12.- Me gustaría emigrar a Estados Unidos en los próximos 5 años.</h7>
    							<div class="switch">
    					    		<label>Falso
    					      		<input type="checkbox" id="perfil12" name="eua">
    					      		<span class="lever"></span>
    					      		Verdadero</label>
    						</div>
    	        </div>
    	      </div>
    				<!--Fin Fila24-->
    				<!--Inicio Fila25-->
    	      <div class="row">
    	        <div class="col s12">
    	        	<h7>13.- Es posible que me case o viva con mi pareja antes de terminar el bachillerato.</h7>
    							<div class="switch">
    					    		<label>Falso
    					      		<input type="checkbox" id="perfil13" name="pareja">
    					      		<span class="lever"></span>
    					      		Verdadero</label>
    						</div>
    	        </div>
    	      </div>
    				<!--Fin Fila25-->
    				<!--Inicio Fila26-->
    	      <div class="row">
    	        <div class="col s12">
    	        	<h7>14.- En mi casa hemos tenido problemas económicos serios (deudas, no alcanza para los gastos del diario, etc.).</h7>
    							<div class="switch">
    					    		<label>Falso
    					      		<input type="checkbox" id="perfil14" name="probleco">
    					      		<span class="lever"></span>
    					      		Verdadero</label>
    						</div>
    	        </div>
    	      </div>
    				<!--Fin Fila26-->
    				<!--Inicio Fila27-->
    	      <div class="row">
    	        <div class="col s12">
    	        	<h7>15.- Es más importante trabajar que estudiar.</h7>
    							<div class="switch">
    					    		<label>Falso
    					      		<input type="checkbox" id="perfil15" name="trabajar">
    					      		<span class="lever"></span>
    					      		Verdadero</label>
    						</div>
    	        </div>
    	      </div>
    				<!--Fin Fila27-->
            <?php
            if ($perfil->p1) {
              ?>
              <script type="text/javascript">
                document.getElementById('perfil1').checked=true;
              </script>
              <?php
            }
            if ($perfil->p2) {
              ?>
              <script type="text/javascript">
                document.getElementById('perfil2').checked=true;
              </script>
              <?php
            }
            if ($perfil->p3) {
              ?>
              <script type="text/javascript">
                document.getElementById('perfil3').checked=true;
              </script>
              <?php
            }
            if ($perfil->p4) {
              ?>
              <script type="text/javascript">
                document.getElementById('perfil4').checked=true;
              </script>
              <?php
            }
            if ($perfil->p5) {
              ?>
              <script type="text/javascript">
                document.getElementById('perfil5').checked=true;
              </script>
              <?php
            }
            if ($perfil->p6) {
              ?>
              <script type="text/javascript">
                document.getElementById('perfil6').checked=true;
              </script>
              <?php
            }
            if ($perfil->p7) {
              ?>
              <script type="text/javascript">
                document.getElementById('perfil7').checked=true;
              </script>
              <?php
            }
            if ($perfil->p8) {
              ?>
              <script type="text/javascript">
                document.getElementById('perfil8').checked=true;
              </script>
              <?php
            }
            if ($perfil->p9) {
              ?>
              <script type="text/javascript">
                document.getElementById('perfil9').checked=true;
              </script>
              <?php
            }
            if ($perfil->p10) {
              ?>
              <script type="text/javascript">
                document.getElementById('perfil10').checked=true;
              </script>
              <?php
            }
            if ($perfil->p11) {
              ?>
              <script type="text/javascript">
                document.getElementById('perfil11').checked=true;
              </script>
              <?php
            }
            if ($perfil->p12) {
              ?>
              <script type="text/javascript">
                document.getElementById('perfil12').checked=true;
              </script>
              <?php
            }
            if ($perfil->p13) {
              ?>
              <script type="text/javascript">
                document.getElementById('perfil13').checked=true;
              </script>
              <?php
            }
            if ($perfil->p14) {
              ?>
              <script type="text/javascript">
                document.getElementById('perfil14').checked=true;
              </script>
              <?php
            }
            if ($perfil->p15) {
              ?>
              <script type="text/javascript">
                document.getElementById('perfil15').checked=true;
              </script>
              <?php
            } ?>
    			<!-- <div class="row">
    				<div class="col s12">
    					<h7>Elabora un croquis donde coloques 5 referencias como mínimo para localizar tu domicilio (el croquis debe ser bien detallado, tiene que coincidir con el que aparece en GOOGLE MAPS)</h7>

    					<a href="https://www.google.com.mx/maps" target="_blank">Google Maps</a>
    				</div>
    			</div> -->
    			<div class="row center">
    				<input type="submit" value="Guardar/Siguiente" class="btn btn-large center">
    			</div>
            <!--Fin del formulario-->
          </form>
        </ul>
        </div>
      </div><!--Fin tab6-->
    </div>
