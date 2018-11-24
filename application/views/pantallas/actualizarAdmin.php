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
          <form action="../CInserciones/datosGenerales" method="post" class="col s12" id="form1" onsubmit="return validar()">
            <!-- Inicio Fila 1-->
            <div class="row">
              <div class="input-field col s4">
                <input class="validate" id="nombre" type="text" name="nombre1" required>
                <label for="nombre">Nombre(s)</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s4">
                <input class="validate" id="ap" type="text" name="paterno1" required>
                <label for="ap">Apellido Paterno</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s4">
                <input class="validate" id="am" type="text" name="materno1" required>
                <label for="am">Apellido Materno</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
            </div>
            <!-- Fin Fila 1-->
            <!-- Inicio Fila 2-->
            <div class="row">
              <div class="input-field col s4">
                  <input type="text" class="datepicker" id="nac" name="nacimiento1" required>
                <label for="nac">Fecha de Nacimiento</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="center col s4">
                <h7>Sexo</h7>
                <p><label>
                      <input class="with-gap center" name="sexo1" type="radio" value="F"/>
                      <span>Femenino</span>
                    </label></p>

                    <p><label>
                      <input class="with-gap center" name="sexo1" type="radio" value="M"/>
                      <span>Masculino</span>
                    </label></p>
                </div>

                <div class="input-field col s4">
                  <input class="validate" id="lug" type="text" name="lugar1" required>
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
    <!-------------------------------------->
                <div class="input-field col s4" id="mun">
                  <input class="validate" id="municipio1" type="text" name="municipio1" required>
                <label for="municipio1">Municipio</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>

                <div class="input-field col s4" id="del">
                <input class="validate" id="delegacion1" type="text" name="delegacion1" required>
                <label for="delegacion1">Delegación</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
                <!-------------------------------------->
            </div>
            <!--Fin Fila 3-->
            <!--Inicio Fila 4-->
            <div class="row">
              <div class="input-field col s4">
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

              <div class="input-field col s4" id="nacionalidad1" name="nacionalidad1">
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

              <div class="input-field col s4">
                <input class="validate" id="curp" name="curp1" type="text" pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)" data-length="18" maxlength="18" required onkeyup="mayus(this);">
                <label for="curp">CURP</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
            </div>
            <!--Fin Fila 4-->

            <ul class="collection center"><li class="collection-item">Datos de la escuela en donde cursó el último ciclo escolar</li></ul>
            <!--Inicio Fila 5-->
            <div class="row">
              <div class="input-field col s6">
                <input class="validate" id="esc" name="escuela1" type="text" required>
                <label for="esc">Nombre de la escuela</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s6">
                <input class="validate" id="dom" name="domEsc1" type="text" required>
                <label for="dom">Domicilio de la escuela</label>
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

              <div class="input-field col s4" id="mun2">
                <input class="validate" id="municipio2" type="text" name="municipio2" required>
              <label>Municipio</label>
              <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s4" id="del2">
                <input class="validate" id="delegacion2" type="text" name="delegacion2" required>
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

              <div class="input-field col s8">
                <input class="validate" id="prom" type="number" name="promedio1" step="0.1" max="10.0" min="1.0" maxlength="3">
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
                    <input type="checkbox" name="beca1">
                    <span class="lever"></span>Sí</label>
                </div>
                </div>

                <div class="input-field col s8">
                <input class="validate" id="esp1" type="text" name="especificar1">
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
                      <input type="checkbox" name="trabaja1">
                      <span class="lever"></span>Sí</label>
                    </div>
                </div>

                <div class="input-field col s8">
                <input class="validate" id="esp2" type="text" name="especificar2">
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
                <input class="validate" id="emp" type="text" name="empresa1">
                <label for="emp">Nombre de la empresa</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s2">
                <input class="validate" id="ocu" type="text" name="ocupacion">
                <label for="ocu">Puesto u ocupación</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="col s2">
                  <input type="text" id="ini" class="timepicker" name="horaInicio" placeholder="Hora de inicio">
                <!--<label for="ini">Hora de inicio</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>-->
              </div>

              <div class="col s2">
                <input type="text" id="fin" class="timepicker" name="horaFin" placeholder="Hora de fin">
                  <!--<label for="fin">Hora de fin</label>-->
              </div>

              <div class="col s2">
                <p class="range-field">
                      <input type="range" id="numh" min="0" max="24" name="horas" />
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
              <div class="input-field col s3">
                <input class="validate" id="cal" type="text" name="calle1" required>
                <label for="cal">Calle</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s2">
                <input class="validate" id="ext" type="number" name="exterior1" required>
                <label for="ext">No. Exterior</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s2">
                <input class="validate" id="int" type="number" name="interior1">
                <label for="int">No. Interior</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s4">
                <input class="validate" id="col" type="text" name="colonia1">
                <label for="col">Colonia</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
            </div>

            <!--Fin Fila 10-->
            <!--Inicio Fila 11-->
            <div class="input-field col s3">
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
            <div class="row">
              <div class="input-field col s4" id="mun3">
                <input class="validate" id="municipio3" type="text" name="municipio3" required>
              <label>Municipio</label>
              <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s4" id="del3">
                <input class="validate" id="delegacion3" type="text" name="delegacion3" required>
                <label>Delegación</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s2">
                <input class="validate" id="post" name="postal1" type="number" required>
                <label for="post">Código Postal</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s3">
                <input class="validate" id="tel" type="tel" name="telefono1" data-length="12" maxlength="12">
                <label for="tel">Teléfono de casa</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>

              <div class="input-field col s3">
                <input class="validate" id="cel" type="tel" name="celular1" data-length="10" maxlength="10">
                <label for="cel">Teléfono de celular</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
            </div>
            <!--borrado-->
            <!--Fin Fila 11-->
            <!--ADICCIÓN TABLA DE DATOS FAMILIARES-->
            <!--Encabezado-->
            <ul class="collection with-header"><li class="collection-header grey lighten-2"><h5 class="center">DATOS FAMILIARES   <a href="#datosFamiliares" class="btn-floating btn-large waves-effect waves-light teal accent-3 modal-trigger"><i class="material-icons">add</i></a>       </h5><p class="center">(Únicamente proporcione los datos de las personas que viven en la misma casa)</p></li></ul>
            <table class="responsive-table" id="tablaFamiliares">
                  <thead class="orange">
                    <tr>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Nombre</th>
                        <th>Sexo</th>
                        <th>Edad</th>
                        <th>Ocupación</th>
                        <th>Parentesco</th>
                        <th>Grado máx de estudios</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>Alvin</td>
                      <td>Eclair</td>
                      <td>$0.87</td>
                    </tr>
                    <tr>
                      <td>Alan</td>
                      <td>Jellybean</td>
                      <td>$3.76</td>
                    </tr>
                    <tr>
                      <td>Jonathan</td>
                      <td>Lollipop</td>
                      <td>$7.00</td>
                    </tr>
                  </tbody>
                </table>
        </ul>

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

            <input type="submit" onclick="return modal1()"  value="Guardar"  class="btn btn-Large">
          <?php echo form_close(); ?>
        </div>
      </div>
            <div class="row center">
              <input type="submit" value="Guardar/Siguiente" class="btn btn-large center">
          </div>
          </div>
      </div><!--Fin tab1-->
      <div class="" id="2"> <!--Inicio tab2-->
        <div class="row">
    	      <ul class="collection with-header">
    	        <li class="collection-header grey lighten-2"><h5 class="center">DATOS DE LA MADRE</h5></li>
    			<!--Inicio del formulario-->
    			<form action="" class="col s12">
    				<!--Inicio Fila 1-->
    				<div class="row">
    					<div class="input-field col s4">
    						<input class="validate" id="nom3" type="text" name="nombre3" required>
    						<label for="nom3">Nombre(s)</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<input class="validate" id="ap2" type="text" name="paterno2" required>
    						<label for="ap2">Apellido Paterno</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<input class="validate" id="am2" type="text" name="materno2" required>
    						<label for="am2">Apellido Materno</label>
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
        					<input class="validate" id="lug2" type="text" name="lugar2" required>
    						<label for="lug2">Lugar de Nacimiento</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
        				</div>

                <div class="input-field col s3" id="mun4">
                  <input class="validate" id="municipio4" type="text" name="municipio4" required>

    						<label for="municipio4">Municipio</label>
        				</div>

                <div class="input-field col s3" id="del4">
    						        <input class="validate" id="delegacion4" type="text" name="delegacion4" required>
    						<label for="delegacion4">Delegación</label>
        				</div>
    				</div>
    				<!--Fin Fila 2-->
    				<!--Inicio Fila 3-->
    				<div class="row">
              <div class="input-field col s4">
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

                <div class="input-field col s4" id="pais2">
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

    						<div class="input-field col s4">
    							<input class="validate" id="cur" name="curp2" type="text" pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)" data-length="18" maxlength="18" required onkeyup="mayus(this);">
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
                    <span>Sin estudios</span>
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
    					        <span>Licenciatura concluida</span>
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
    					<div class="input-field col s6 center">
    						<h7>¿Trabaja?</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="trabaja" value="1">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    	    		</div>

    	    			<div class="col s6">
    						<p class="range-field">
          					<input type="range" id="hrsemana" min="0" max="24" name="semana"/>
          					<label for="hrsemana">Número de horas a la semana</label>
        					</p>
    						</div>
    			</div>
    				<!--Fin Fila 5-->
    				<!--Inicio Fila 6-->
    				<div class="row">
    					<div class="input-field col s4">
    						<input class="validate" id="tel2" type="tel" name="telefono2" data-length="12" maxlength="12">
    						<label for="tel2">Teléfono de casa</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<input class="validate" id="tel3" type="tel" name="telefono3" data-length="12" maxlength="12">
    						<label for="tel3">Teléfono de trabajo</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<input class="validate" id="cel2" type="tel" name="celular2" data-length="10" maxlength="10">
    						<label for="cel2">Teléfono de celular</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila 7-->
    				<!--Encabezado-->
    				<ul class="collection with-header">
    	        	<li class="collection-header grey lighten-2"><h5 class="center">DATOS DEL PADRE</h5></li></ul>
    				<!--Inicio Fila 8-->
    				<div class="row">
    					<div class="input-field col s4">
    						<input class="validate" id="nom4" type="text" name="nombre4" required>
    						<label for="nom4">Nombre</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<input class="validate" id="ap3"  name="paterno3" type="text" required>
    						<label for="ap3">Apellido Paterno</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<input class="validate" id="am3" name="materno3" type="text">
    						<label for="am3">Apellido Materno</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila 8-->
    				<!--Inicio Fila 9-->
    				<div class="row">
    					<div class="input-field col s3">
      					<input type="text" class="datepicker" id="nac3" name="nacimiento3" required>
    						<label for="nac3">Fecha de Nacimiento</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

        				<div class="input-field col s3">
    							<input class="validate" id="lug3" type="text" name="lugar3" required>
    							<label for="lug3">Lugar de Nacimiento</label>
    							<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
        				</div>

                <div class="input-field col s3" id="mun5">
                  <input class="validate" id="municipio5" type="text" name="municipio5" required>
    						<label for="municipio5">Municipio</label>
        				</div>

                <div class="input-field col s3" id="del5">
    						  <input class="validate" id="delegacion5" type="text" name="delegacion5" required>
    						<label for="delegacion5">Delegación</label>
        				</div>
    				</div>
    				<!--Fin Fila 9-->
    				<!--Inicio Fila 10-->
    				<div class="row">
              <div class="input-field col s4">
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

    					<div class="input-field col s4">
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

        				<div class="input-field col s4">
    							<input class="validate" id="cu" name="curp3" type="text" pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)" data-length="18" maxlength="18" required onkeyup="mayus(this);">
    							<label for="cu">CURP</label>
    							<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila 10-->
    				<!--Inicio Fila 11-->
    				<div class="row">
    					<div class="col s3">
                <label>
                    <input class="with-gap" name="grupo0" type="radio" value="1" />
                    <span>Sin estudios</span>
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
    					        <span>Licenciatura concluida</span>
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
    					        <input class="with-gap" 5name="grupo2" type="radio" value="15" />
    					        <span>Otro</span>
    					      </label>
        				</div>
    				</div>
    				<!--Fin Fila 11-->
    				<!--Inicio Fila 12-->
    				<div class="row">
    					<div class="col s6 center">
    						<h7>¿Trabaja?</h7>
    						 	<div class="switch">
    					    	<label>No
    					      <input type="checkbox" name="trabaja3">
    					      <span class="lever"></span>
    								Sí</label>
    					  	</div>
    	    			</div>

    	    			<div class="input-field col s6">
    							<p class="range-field">
          					<input type="range" id="hrsemana2" min="0" max="24" name="semana2"/>
          					<label for="hrsemana2">Número de horas a la semana</label>
        					</p>
    					</div>
    				</div>
    				<!--Fin Fila 12-->
    				<!--Inicio Fila 13-->
    				<div class="row">
    					<div class="input-field col s4">
    						<input class="validate" id="tel4" type="tel" name="telefono4" data-length="12" maxlength="12">
    						<label for="tel4">Teléfono de casa</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<input class="validate" id="tel5" type="tel" name="telefono5" data-length="12" maxlength="12">
    						<label for="tel5">Teléfono del trabajo</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<input class="validate" id="cel3" type="tel" name="celular3" data-length="10" maxlength="10">
    						<label for="cel3">Teléfono de celular</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila 13-->
    				<!--Encabezado-->
    				<ul class="collection with-header">
    	        	<li class="collection-header grey lighten-2"><h5 class="center">INGRESOS FAMILIARES</h5></li></ul>
    				<!--Inicio Fila 14-->
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
    				<!--Fin Fila 15-->
    				<!--Encabezado-->
    				<ul class="collection with-header">
    	        	<li class="collection-header grey lighten-2"><h5 class="center">INGRESOS FAMILIARES MENSUALES   <a href="#ingreso" class="btn-floating btn-large waves-effect waves-light teal accent-3 modal-trigger"><i class="material-icons">add</i></a></h5></li></ul>

    				<table class="responsive-table" id="tablaIngresos">
    			        <thead class="orange">
    			          <tr>
    			              <th>Persona con ingresos económicos</th>
    			              <th>Ingreso mensual en pesos</th>
    			              <th>Porcentaje destinado al gasto familiar</th>
    			          </tr>
    			        </thead>

    			        <tbody>
    			          <tr>
    			            <td>Alvin</td>
    			            <td>Eclair</td>
    			            <td>$0.87</td>
    			          </tr>
    			          <tr>
    			            <td>Alan</td>
    			            <td>Jellybean</td>
    			            <td>$3.76</td>
    			          </tr>
    			          <tr>
    			            <td>Jonathan</td>
    			            <td>Lollipop</td>
    			            <td>$7.00</td>
    			          </tr>
    			        </tbody>
          			</table>
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

    	      <input type="submit" value="Guardar" onclick="return modal2()" class="btn btn-large">
    	    <?php echo form_close(); ?>
    	  </div>
    	</div>
    </div>
    </div> <!--Fin tab2-->
      <div class="" id="3"> <!--Inicio tab3-->
        <div class="row">
    	    <ul class="collection with-header">
    	      <li class="collection-header grey lighten-2"><h5 class="center">AMBIENTE SOCIOECONÓMICO</h5>

    			<form action="../CInserciones3/ambienteSocioEconomico" method="post" class="col s12">
    				<!--Inicio Fila 1-->
    				<div class="row"><br>
    					<div class="col s3 center">
    						<h7>Agua Potable</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="agua">
    					      		<span class="lever"></span>
    					      		Sí</label>
    								</div>
    					</div>

    					<div class="col s3 center">
    						<h7>Computadora</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="computadora">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s3 center">
    						<h7>Drenaje</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="drenaje">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s3 center">
    						<h7>Laptop</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="laptop">
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
    					      		<input type="checkbox" name="electricidad">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s3 center">
    						<h7>Tableta</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="tableta1">
    					      		<span class="lever"></span>
    					      		Sí</label>
    								</div>
    					</div>

    					<div class="col s3 center">
    						<h7>Lavadora de ropa</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="lavadora">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s3 center">
    						<h7>Internet</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="internetAS">
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
    					      		<input type="checkbox" name="estufa">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s3 center">
    						<h7>Televisión de paga (Sky, Dish, Cable)</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="television">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s3 center">
    						<h7>Horno de microondas</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="horno">
    					      		<span class="lever"></span>
    					      		Sí</label>
    						</div>
    					</div>

    					<div class="col s3 center">
    						<h7>VHS</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="vhs">
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
    					      		<input type="checkbox" name="refrigerador">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s3 center">
    						<h7>DVD</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="dvd">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s3 center">
    						<h7>Línea telefónica</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="linea">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s3 center">
    						<h7>Blu-Ray</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="blue">
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
    						<h7>Reproductor digital portátil de música</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="reproductor">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s4 center">
    						<h7>Tableta</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="tableta2">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s4 center">
    						<h7>Laptop</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="laptop2">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>
    				</div>
    				<!--Fin Fila5-->
    				<!--Inicio Fila Fila6-->
    				<div class="row">
    					<div class="input-field col s6">
        					<select name="focos">
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
        					<select name="televisores">
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
    					        <input class="with-gap" name="grupo3" type="radio" value="1" />
    					        <span>Endomorfo o grueso</span>
    					      </label></p>
    					</div>

    					<div class="input-field col s4">
    						<p><label>
    					        <input class="with-gap" name="grupo3" type="radio" value="2" />
    					        <span>Ectomorfo o delgado</span>
    					      </label></p>
    					</div>

    					<div class="input-field col s4">
    						<p><label>
    					        <input class="with-gap" name="grupo3" type="radio" value="3" />
    					        <span>Mesoformo o atlético</span>
    					      </label></p>
    					</div>
    				</div>
    				<!--Fin Fila8-->
    				<!--Inicio Fila9-->
    				<div class="row">
    					<div class="input-field col s4">
    						<input class="validate" id="estatu" type="number" name="estatura" step="0.01" max="2.50"required>
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
    						<input class="validate" id="pes" type="number" name="peso" step="0.001" placeholder="kg" required>
    						<label for="pes">Peso</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

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
    				<!--Fin Fila10-->
    				<!--Inicio Fila11-->
    				<div class="row">
    					<div class="col s12 center"><h5 class="collection">¿Actualmente cuenta con algún tipo de servicio de salud?</h5></div>
    				</div>
    				<!--Fin Fila11-->
    				<!--Inicio Fila12-->
    				<div class="row">
    					<div class="col s4">
    						<label><input type="checkbox" name="imss" value="1"/>
    					    <span>IMSS</span></label>
    					</div>

    					<div class="col s4">
    						<label><input type="checkbox" name="ejercito" value="4"/>
    					    <span>Ejército o Marina</span></label>
    					</div>

    					<div class="col s4">
    						<label><input type="checkbox" name="privado" value="7"/>
    					    <span>Médico privado</span></label>
    					</div>
    				</div>
    				<!--Fin Fila12-->
    				<!--Inicio Fila13-->
    				<div class="row">
    					<div class="col s4">
    						<label><input type="checkbox" name="isste" value="2"/>
    					    <span>ISSTE</span></label>
    					</div>

    					<div class="col s4">
    						<label><input type="checkbox" name="sec_salud" value="5"/>
    					    <span>Secretaría de Salud</span></label>
    					</div>

    					<div class="col s4">
    						<label><input type="checkbox" name="otro" value="8"/>
    					    <span>Otro</span></label>
    					</div>
    				</div>
    				<!--Fin Fila14-->
    				<!--Inicio Fila15-->
    				<div class="row">
    					<div class="col s4">
    						<label><input type="checkbox" name="pemex" value="3"/>
    					    <span>PEMEX</span></label>
    					</div>

    					<div class="col s4">
    						<label><input type="checkbox" name="seg_popular" value="6"/>
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
    				<!--Inicio Fila16-->
    				<div class="center row">
    					<div class="col s4 center">
    						<h5 class="collection">¿Con qué frecuencia asiste al médico?</h5>
    					</div>

    					<div class="col s8">
    						<select name="medico">
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
    						<select name="dentista">
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
    						<select name="anteojos">
                  <option value=10>No los necesito</option>
                  <option value=11>Solo para leer</option>
                  <option value=12>Si los uso</option>
                  <option value=13>Si los necesito pero no los uso</option>
                  <option value=14>No lo se</option>
    						</select>
    					</div>
    				</div>
    				<!--Fin Fila18-->
    				<!--Inicio Fila19-->
    				<div class="row">
    					<div class="col s8 center">
    						<h5 class="collection">¿Actualmente se encuentra bajo tratamiento?</h5>
    					</div>

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
    				<!--Fin Fila20-->
    				<!--Inicio Fila21-->
    				<div class="row">
    					<div class="col s4">
    						<h5 class="collection">¿Tiene alguna discapacidad física?</h5>
    					</div>

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
    				<div class="row">
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
    				</div>
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
    				<form action="../CInserciones4/deportes" method="post" class="col s12">
    				<!--Inicio Fila1-->
    				<div class="row">
    					<div class="col s8"><h5 class="collection center">¿Cuántas veces a la semana haces ejercicio?</h5></div>

    					<div class="col s4">
                <select name="ejercicio">
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
    					      		<input type="checkbox" name="deporte" value="1">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s8">
    						<h5 class="collection">Selecciona cúal de los siguientes:</h5>
    					</div>
    				</div>
    				<!--Fin Fila2-->
    				<!--Inicio Fila3-->
    				<div class="row">
    					<div class="col s3">
    					 	<label><input type="checkbox" name="futbol" value="1"/>
    					  	<span>Futbol</span></label>
    					</div>

    					<div class="col s3">
    						<label><input type="checkbox" name="beisbol" value="4"/>
    					  	<span>Béisbol</span></label>
    					</div>

    					<div class="col s3">
    						<label><input type="checkbox" name="basquetbol" value="7"/>
    					  	<span>Basquetbol</span></label>
    					</div>

    					<div class="col s3">
    					  <label><input type="checkbox" name="natacion" value="10"/>
    					  <span>Natación</span></label>
    					</div>
    				</div>
    				<!--Fin Fila3-->
    				<!--Inicio Fila4-->
    				<div class="row">
              <div class="col s3">
    					  <label><input type="checkbox" name="atletismo" value="13"/>
    					  <span>Atletismo</span></label>
    					</div>

    					<div class="col s3">
    					  <label><input type="checkbox" name="tenis" value="2"/>
    					  <span>Tenis</span></label>
    					</div>

    					<div class="col s3">
    					  <label><input type="checkbox" name="gimnasia" value="5"/>
    					  <span>Gimnasia</span></label>
    					</div>

    					<div class="col s3">
    					  <label><input type="checkbox" name="judo" value="8"/>
    					  <span>Judo</span></label>
    					</div>
    				</div>
    				<!--Fin Fila4-->
    				<!--Inicio Fila5-->
    				<div class="row">
              <div class="col s3">
    					  <label><input type="checkbox" name="karate" value="11"/>
    					  <span>Karate</span></label>
    					</div>

    					<div class="col s3">
    					  <label><input type="checkbox" name="halterofilia" value="14"/>
    					  <span>Halterofilia</span></label>
    					</div>

    					<div class="col s3">
    					  <label><input type="checkbox"name="boxeo" value="3"/>
    					  <span>Boxeo</span></label>
    					</div>

    					<div class="col s3">
    					  <label><input type="checkbox" name="lucha" value="6"/>
    					  <span>Lucha</span></label>
    					</div>
    				</div>
    				<!--Fin Fila5-->
    				<!--Inicio Fila6-->
    				<div class="row">
              <div class="col s3">
    					  <label><input type="checkbox" name="ciclismo" value="9"/>
    					  <span>Ciclismo</span></label>
    					</div>

    					<div class="col s3">
    					  <label><input type="checkbox" name="charreria" value="12"/>
    					  <span>Charrería</span></label>
    					</div>

    					<div class="col s3">
    					  <label><input type="checkbox" name="otro" value="15"/>
    					  <span>Otro</span></label>
    					</div>

    					<div class="input-field col s3">
    						<input class="validate" id="esp8" type="text" name="especificar8">
    						<label for="esp8">Especificar</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila6-->
    				<!--Encabezado-->
    				<li class="collection-header grey lighten-2"><h5 class="center">HÁBITOS DE CONSUMO</h5></li>
    				<!--Inicio Fila7-->
    				<div class="row">
    					<div class="col s4 center">
    						<h7>¿Fuma?</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="fuma" value="1">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s8 center">
    						<select name="frecfuma">
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
    					      		<input type="checkbox" name="cerveza" value="1">
    					      		<span class="lever"></span>
    					      		Sí</label>
    						</div>
    					</div>

    					<div class="col s8 center">
    						<select name="freccerveza">
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
    					      		<input type="checkbox" name="vino">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s8 center">
    						<select name="frecvino">
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
    					      		<input type="checkbox" name="coctel">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s8 center">
    						<select name="freccoctel">
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
    					      		<input type="checkbox" name="licor">
    					      		<span class="lever"></span>
    					      		Sí</label>
    						</div>
    					</div>

    					<div class="col s8 center">
    						<select name="freclicor">
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
    					      		<input type="checkbox" name="otro1">
    					      		<span class="lever"></span>
    					      		Sí</label>
    						</div>
    					</div>

    					<div class="input-field col s8 center">
    						<select name="frecotro">
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
    					      		<input type="checkbox" name="adiccion" value="1">
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
    					      		<input type="checkbox" name="droga">
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
    				<!--Encabezado-->
    				<li class="collection-header grey lighten-2"><h5 class="center">RECREACIÓN Y TIEMPO LIBRE</h5></li>
    				<!--Inicio Fila19-->
    				<div class="row">
              <div class="col s4">
    					  <label><input type="checkbox" name="parque" value="1"/>
    					  <span>Ir al parque</span></label>
    					</div>

    					<div class="col s4">
    					  <label><input type="checkbox" name="deporte1" value="6"/>
    					  <span>Hacer deporte</span></label>
    					</div>

    					<div class="col s4">
    					  <label><input type="checkbox" name="tele" value="11"/>
    					  <span>Ver televisión</span></label>
    					</div>
    				</div>
    				<!--Fin Fila19-->
    				<!--Inicio Fila20-->
    				<div class="row">
              <div class="col s4">
    					  <label><input type="checkbox" name="cine" value="2"/>
    					  <span>Ir al cine</span></label>
    					</div>

    					<div class="col s4">
    					  <label><input type="checkbox" name="amigos" value="7"/>
    					  <span>Reunirse con amigos</span></label>
    					</div>

    					<div class="col s4">
    					  <label><input type="checkbox" name="peliculas" value="12"/>
    					  <span>Ver películas en casa</span></label>
    					</div>
    				</div>
    				<!--Fin Fila20-->
    				<!--Inicio Fila21-->
    				<div class="row">
              <div class="col s4">
    					  <label><input type="checkbox" name="bailar" value="3"/>
    					  <span>Ir a bailar</span></label>
    					</div>

    					<div class="col s4">
    					  <label><input type="checkbox" name="pareja" value="8"/>
    					  <span>Salir con mi pareja</span></label>
    					</div>

    					<div class="col s4">
    					  <label><input type="checkbox" name="leer" value="18"/>
    					  <span>Leer</span></label>
    					</div>
    				</div>
    				<!--Fin Fila21-->
    				<!--Inicio Fila22-->
    				<div class="row">
              <div class="col s4">
    					  <label><input type="checkbox" name="videojuegos" value="4"/>
    					  <span>Jugar videojuegos</span></label>
    					</div>

    					<div class="col s4">
    					  <label><input type="checkbox" name="musica" value="9"/>
    					  <span>Escuchar música</span></label>
    					</div>

    					<div class="col s4">
    					  <label><input type="checkbox" name="compras" value="5"/>
    					  <span>Ir de compras</span></label>
    					</div>
    				</div>
    				<!--Fin Fila22-->
    				<!--Inicio Fila23-->
    				<div class="row">
              <div class="col s4">
    					  <label><input type="checkbox" name="computadora" value="10"/>
    					  <span>Usar la computadora</span></label>
    					</div>

    					<div class="col s4">
    					  <label><input type="checkbox" name="otro2" value="13"/>
    					  <span>Otro</span></label>
    					</div>

    					<div class="input-field col s4">
    						<input class="validate" id="esp11" type="text" name="especificar11">
    						<label for="esp11">Especificar</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila23-->
    				<!--Encabezado-->
    				<li class="collection-header grey lighten-2"><h5 class="center">GUSTOS E INTERESES</h5></li>
    				<!--Inicio Fila24-->
    				<div class="row">
              <div class="input-field col s6">
    			          <textarea id="textarea1" class="materialize-textarea validate" name="libre" required></textarea>
    			          <label for="textarea1">¿Qué hago en mi tiempo libre?</label>
    								<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
              <div class="input-field col s6">
    			          <textarea id="textarea2" class="materialize-textarea validate" name="libro" required></textarea>
    			          <label for="textarea2">Ultima vez que leí un libro</label>
    								<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila24-->
    				<!--Inicio Fila25-->
    				<div class="row">
              <div class="input-field col s6">
    			          <textarea id="textarea3" class="materialize-textarea validate" name="gusta" required></textarea>
    			          <label for="textarea3">¿Qué es lo que más me gusta hacer?</label>
    								<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
              <div class="input-field col s6">
    			          <textarea id="disgusta" class="materialize-textarea validate" name="disgusta" required></textarea>
    			          <label for="disgusta">¿Qué es lo que me disgusta hacer?</label>
    								<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila25-->
    				<!--Inicio Fila26-->
    				<div class="row">
    					<div class="col s4 center"><h6>Libros que haz leído</h6></div>
    					<div class="col s4 center"><h6>Mis película preferidas son</h6></div>
    					<div class="col s4 center"><h6>¿Cuántos amigos tengo?</h6></div>
    				</div>
    				<!--Fin Fila26-->
    				<!--Inicio Fila27-->
    				<div class="row">
    					<div class="input-field col s4">
    						<textarea id="textarea4" class="materialize-textarea validate" name="libro1" required></textarea>
    			      <label for="textarea4">1.- </label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<textarea id="textarea5" class="materialize-textarea validate" name="pelicula1" required></textarea>
    			      <label for="textarea5">1.- </label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<input class="validate" id="ami" type="number" step="1" name="amigos2" required>
    						<label for="ami">Número de amigos</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila27-->
    				<!--Inicio Fila28-->
    				<div class="row">
    					<div class="input-field col s4">
    						<textarea id="textarea6" class="materialize-textarea validate" name="libro2" required></textarea>
    			      <label for="textarea6">2.- </label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<textarea id="textarea7" class="materialize-textarea validate" name="pelicula2" required></textarea>
    			      <label for="textarea7">2.- </label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="col s4 center"><h6>¿Qué lugares frecuento con ellos?</h6></div>
    				</div>
    				<!--Fin Fila28-->
    				<!--Inicio Fila29-->
    				<div class="row">
    					<div class="input-field col s4">
    						<textarea id="textarea8" class="materialize-textarea validate" name="libro3" required></textarea>
    			      <label for="textarea8">3.- </label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<textarea id="textarea9" class="materialize-textarea validate" name="pelicula3" required></textarea>
    			      <label for="textarea9">3.- </label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<textarea id="textarea10" class="materialize-textarea validate" name="lugares" required></textarea>
    			      <label for="textarea10">1.- </label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila29-->
    				<!--Inicio Fila30-->
    				<div class="row">
    					<div class="input-field col s4">
    						<textarea id="textarea11" class="materialize-textarea validate" name="libro4" required></textarea>
    			      <label for="textarea11">4.- </label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<textarea id="textarea12" class="materialize-textarea validate" name="pelicula4" required></textarea>
    			      <label for="textarea12">4.- </label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<textarea id="textarea13" class="materialize-textarea validate" name="lugares2" required></textarea>
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
    				<!--Fin Fila33-->
    				<!--Encabezado-->
    				<li class="collection-header grey lighten-2"><h5 class="center">INTERNET</h5></li>
    				<!--Inicio Fila34-->
    				<div class="row">
    					<div class="col s4 center"><h5 class="collection">¿Sabes usar internet?</h5></div>

    					<div class="col s2">
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="internet">
    					      		<span class="lever"></span>
    					      		Sí</label>
    						</div>
    					</div>

    					<div class="col s4 center"><h5 class="collection">¿Tienes acceso a internet?</h5></div>

    					<div class="col s2">
    						<h7> </h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="internet2">
    					      		<span class="lever"></span>
    					      		Sí</label>
    						</div>
    					</div>
    				</div>
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
                    <input class="with-gap" name="accesoI" type="radio" value="1" />
                    <span>Casa</span>
                  </label>
    					</div>
    					<div class="col s4">
                <label>
                    <input class="with-gap" name="accesoI" type="radio" value="2" />
                    <span>Escuela</span>
                  </label>
    					</div>
    					<div class="col s4">
                <label>
                    <input class="with-gap" name="accesoI" type="radio" value="3" />
                    <span>Trabajo</span>
                  </label>
    					</div>
    				</div>
    				<!--Fin Fila36-->
    				<!--Inicio Fila37-->
    				<div class="row">
              <div class="col s4">
                <label>
                  <input class="with-gap" name="accesoI" type="radio" value="4" />
                  <span>Café Internet</span>
                </label>
    					</div>

    					<div class="col s4">
                <label >
                  <input class="with-gap" name="accesoI" type="radio" value="5" />
                  <span>Casa de algún amigo o familiar</span>
                </label>
    					</div>
    					<div class="col s2">
    					  <label>
                  <input class="with-gap" name="accesoI" type="radio" value="6" />
                  <span>Otro</span>
                </label>
    					</div>

    					<div class="input-field col s2">
    						<input class="validate" id="esp13" type="text" name="especificar13">
    						<label for="esp13">Especificar</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
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
    					      		<input type="checkbox" name="correo">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s3 center">
    						<h7>Intercambiar información</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="info">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s3 center">
    						<h7>Entretenimiento</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="entre">
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
    					      		<input type="checkbox" name="pagina">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s3 center">
    						<h7>Relaciones de amistad</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="amistad">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s3 center">
    						<h7>Buscar amigos</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="buscar">
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
    					      		<input type="checkbox" name="social">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s3 center">
    						<h7>Relaciones profesionales</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="profesionales">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s3 center">
    						<h7>Comunicarte</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="com">
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
    					      		<input type="checkbox" name="blog">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="col s3 center">
    						<h7>Buscar pareja</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="pareja2">
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
    			<form action="" class="col s12">
    				<!--Inicio Fila1-->
    				<div class="row">
    					<br>
    					<div class="center col s4"><h5 class="collection">¿Tiene teléfono celular?</h5></div>
    					<div class="center col s2">
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="celular4">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="center col s4"><h5 class="collection">Si es afirmativo, ¿tiene acceso a Internet?</h5></div>

    					<div class="center col s2">
    						<h7> </h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="internet3">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>
    				</div>
    				<!--Fin Fila1-->
    				<!--Inicio Fila2-->
    				<div class="row">
    					<div class="input-field col s12">
    						<input type="email" class="validate" id="co" name="correo2" required>
    						<label for="co">Correo electrónico</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila2-->
    				<!--Inicio Fila3-->
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
    						<input class="validate" id="nom5" type="text" name="nombre5" required>
    						<label for="nom5">Nombre</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<input class="validate" id="ap4" type="text" name="paterno4" required>
    						<label for="ap4">Apellido Paterno</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<input class="validate" id="am4" type="text" name="materno4" required>
    						<label for="am4">Apellido Materno</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila4-->
    				<!--Inicio Fila5-->
    				<div class="row">
    					<div class="input-field col s3">
      					<input type="text" id="nac4" class="datepicker" name="nacimiento4" required>
    						<label for="nac4">Fecha de Nacimiento</label>
    					</div>

        				<div class="input-field col s3">
    							<input class="validate" id="lug4" type="text" name="lugar4" required>
    							<label for="lug4">Lugar de Nacimiento</label>
    							<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
        				</div>

                <div class="input-field col s3" id="mun6">
                  <input class="validate" id="municipio6" type="text" name="municipio6" required>
    						<label for="municipio6">Municipio</label>
        				</div>

                <div class="input-field col s3" id="del6">
    						  <input class="validate" id="delegacion6" type="text" name="delegacion6" required>
    						<label for="delegacion6">Delegación</label>
        				</div>
    				</div>
    				<!--Fin Fila5-->
    				<!--Inicio Fila6-->
    				<div class="row">
              <div class="input-field col s4">
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

    					<div class="input-field col s4" id="pais3">
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

        				<div class="input-field col s4">
    							<input class="validate" id="c" name="curp4" type="text" pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)" data-length="18" maxlength="18" required onkeyup="mayus(this);">
    							<label for="c">CURP</label>
    							<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila6-->
    				<!--Inicio Fila7-->
    				<div class="row">
    					<div class="col s3">
                <label><input class="with-gap" name="grupo4" type="radio" value="1" />
                <span>Sin estudios</span></label>

                <label><input class="with-gap" name="grupo4" type="radio" value="2" />
                <span>Primaria incompleta</span></label>

                <label><input class="with-gap" name="grupo4" type="radio" value="3" />
                <span>Primaria concluida</span></label>

                <label><input class="with-gap" name="grupo4" type="radio" value="4" />
                <span>Secundaria incompleta</span></label>
        			</div>

    					<div class="col s3">
                <label><input class="with-gap" name="grupo4" type="radio" value="5" />
                <span>Secundaria concluida</span></label>

                <label><input class="with-gap" name="grupo4" type="radio" value="6" />
                  <span>Carrera Técnica</span></label>

                <label><input class="with-gap" name="grupo4" type="radio" value="7" />
                <span>Bachillerato incompleto</span></label>

                <label><input class="with-gap" name="grupo4" type="radio" value="8" />
                <span>Bachillerato concluido</span></label>
        			</div>

        				<div class="col s3">
                  <label><input class="with-gap" name="grupo4" type="radio" value="9" />
    					    <span>Tec. Sup. Universitario</span></label>

    					    <label><input class="with-gap" name="grupo4" type="radio" value="10" />
    					    <span>Licenciatura incompleta</span></label>

    					    <label><input class="with-gap" name="grupo4" type="radio" value="11" />
    					    <span>Licenciatura concluida</span></label>

    					    <label><input class="with-gap" name="grupo4" type="radio" value="12" />
    					    <span>Especialidad</span></label>
        				</div>

        				<div class="col s3">
                  <label><input class="with-gap" name="grupo4" type="radio" value="13" />
    					    <span>Maestría</span><br></label>

    					    <label><input class="with-gap" name="grupo4" type="radio" value="14" />
    					    <span>Doctorado</span><br></label>

    					    <label><input class="with-gap" name="grupo4" type="radio" value="15" />
    					    <span>Otro</span></label>

    							<div class="input-field cols3">
    								<input class="validate" id="gradoesp" type="text" name="especificar14">
    								<label for="gradoesp">Especificar</label>
    							</div>
        				</div>
    				</div>
    				<!--Fin Fila7-->
    				<!--Inicio Fila8-->
    				<div class="center row">
    					<div class="input-field col s6">
    						<h7>¿Trabaja?</h7>
    						 <div class="switch">
    					    <label>No
    					      <input type="checkbox" name="trabaja4">
    					      <span class="lever"></span>
    					      Sí</label>
    					  	</div>
    	    			</div>

    	    			<div class="col s6">
    						<p class="range-field">
          				<input type="range" id="hrsemana3" min="0" max="24" name="semana3"/>
          				<label for="hrsemana3">Número de horas a la semana</label>
        				</p>
    					</div>
    				</div>
    				<!--Fin Fila8-->
    				<!--Encabezado-->
    				<ul class="collection with-header">
    	        	<li class="collection-header grey lighten-2"><h5 class="center">RELACIONES/ASPECTOS INTERPERSONALES</h5></li></ul>
    				<!--inicio Fila9-->
    				<div class="row">
    					<div class="input-field col s12">
    						<select name="hermanos">
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
    				<!--Inicio Fila9-->
    				<div class="row">
    					<div class="col s12"><h5 class="collection">¿Cómo es la relación con sus hermanos? (Seleccione al menos 2 opciones)<br /></h5></div>
    				</div>
    				<!--Fin Fila9-->
    				<!--Inicio Fila10-->
    				<div class="row">
    					<div class="col s4">
    						<label><input type="checkbox" name="plat"/>
    					   	<span>Platicamos</span></label>
    					</div>

    					<div class="col s4">
    						<label><input type="checkbox" name="respeto"/>
    					   	<span>Hay respeto</span></label>
    					</div>

    					<div class="col s4">
    						<label><input type="checkbox" name="apoyo"/>
    					   	<span>Nos apoyamos</span></label>
    					</div>
    				</div>
    				<!--Fin Fila10-->
    				<!--Inicio Fila11-->
    				<div class="row">
    					<div class="col s4">
    						<label><input type="checkbox" name="jugar"/>
    					  	<span>Jugamos</span></label>
    					</div>

    					<div class="col s4">
    						<label><input type="checkbox" name="no"/>
    					  	<span>No nos llevamos</span></label>
    					</div>

    					<div class="col s4">
    						<label><input type="checkbox" name="pelear"/>
    					  	<span>Siempre estamos peleando</span></label>
    					</div>
    				</div>
    				<!--Fin Fila11-->
    				<!--Inicio Fila12-->
    				<div class="row">
    					<div class="input-field col s4">
    						<input class="validate" id="novio" type="number" step="1" max="100" min="1" name="primernovio">
    						<label for="novio">¿A qué edad tuvo su primer noviazgo?</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="col s3 center">
    						<h7>Actualmente tiene novio</h7>
    							<div class="switch">
    					    		<label>No
    					      		<input type="checkbox" name="novio">
    					      		<span class="lever"></span>
    					      		Sí</label>
    							</div>
    					</div>

    					<div class="input-field col s5">
    						<input class="validate" id="tie" type="text" name="tiempo">
    						<label for="tie">¿Cuánto tiempo llevas con él (ella)?</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila12-->
    				<!--Inicio Fila13-->
    				<div class="row">
              <div class="input-field col s4">
    						<input type="text" class="validate" id="parejas" name="parejas">
    						<label for="parejas">¿Cuántas parejas sentimentales has tenido?</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<input type="text" class="validate" id="pro" name="promedio2">
    						<label for="pro">En promedio ¿Cuánto tiempo ha durado con sus parejas?</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s4">
    						<input type="text" class="validate" id="rup" name="ruptura">
    						<label for="rup">¿Cuál ha sido el principal motivo de ruptura?</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila13-->
    				<!--Inicio Fila14-->
    				<div class="row">
    					<div class="input-field col s6">
    						<input type="text" class="validate" id="per" name="persona" required>
    						<label for="per">La persona a la que más confianza le tiene es</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>

    					<div class="input-field col s6">
    						<input type="text" class="validate" id="con" name="confianza" required>
    						<label for="con">¿Por qué le tiene confianza?</label>
    						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    					</div>
    				</div>
    				<!--Fin Fila14-->
    				<!--Inicio Fila15-->
    				<div class="row">
    					<div class="input-field col s4 center">
    						<select name="decision">
          						<option value="" disabled selected>Elige una opción</option>
          						<option value="1">Papá</option>
    					      	<option value="2">Mamá</option>
    					      	<option value="3">Ambos</option>
    					      	<option value="4">Hermanos</option>
    					    </select>
        					<label>¿Quién toma las decisiones definitivas en casa?</label>
    					</div>

    					<div class="input-field col s4 center">
    						<select name="flexible">
          						<option value="" disabled selected>Elige una opción</option>
          						<option value="1">Papá</option>
    					      	<option value="2">Mamá</option>
    					      	<option value="3">Ambos</option>
    					    </select>
        					<label>¿Quién es el más flexible en los problemas?</label>
    					</div>

    					<div class="input-field col s4 center">
    						<select name="comunicacion">
          						<option value="" disabled selected>Elige una opción</option>
          						<option value="1">Papá</option>
    					      	<option value="2">Mamá</option>
    					      	<option value="3">Ambos</option>
    					    </select>
        					<label>¿Con quién hay más problemas de comunicación?</label>
    					</div>
    				</div>
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
    					      <label><input type="checkbox" name="lavarpapa"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" name="lavarmama"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" name="lavarhermano"/>
    					      <span></span></label>
          				</div>

          				<div class="col s1">
    					      <label><input type="checkbox" name="lavaryo"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" name="lavarpersona"/>
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
    					      <label><input type="checkbox" name="barrerpapa"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" name="barrermama"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" name="barrerhermano"/>
    					      <span></span></label>
          				</div>

          				<div class="col s1">
    					      <label><input type="checkbox" name="barreryo"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" name="barrerpersona"/>
    					      <span></span></label>
          				</div>
          			</div>
    						<!--Fin Fila18-->

          			<div class="row center">
          				<div class="col s3">
          					<h7>Cocinar</h7>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" name="cocinarpapa"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" name="cocinarmama"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" name="cocinarhermano"/>
    					      <span></span></label>
          				</div>

          				<div class="col s1">
    					      <label><input type="checkbox" name="cocinaryo"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" name="cocinarpersonatraste"/>
    					      <span></span></label>
          				</div>
          			</div>

          			<div class="row center">
          				<div class="col s3">
          					<h7>Lavar trastes</h7>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" name="trastepapa"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" name="trastemama"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" name="trastehermano"/>
    					      <span></span></label>
          				</div>

          				<div class="col s1">
    					      <label><input type="checkbox" name="trasteyo"/>
    					      <span></span></label>
          				</div>

          				<div class="col s2">
    					      <label><input type="checkbox" name="trastepersona"/>
    					      <span></span></label>
          				</div>
          			</div>

                <div class="row"> <!--Negocio familiar-->
                  <div class="input-field col s6 center">
        						<h7>¿Sus padres cuentan con algún negocio familiar?</h7>
        							<div class="switch">
        					    		<label>No
        					      		<input type="checkbox" name="negocio" value="1">
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
          <form action="../CInserciones6/proyVida" method="post" class="col s12">
            <div class="row"><br>
              <div class="center col s12"><h5 class="collection">¿Por qué decidió estudiar su bachillerato en CECYTEM? (Seleccione al menos tres opciones)</h5></div>
            </div>
            <!--Inicio Fila1-->
            <div class="row">
              <div class="col s6">
                <label><input type="checkbox" name="instalacion"/>
                <span>Por que le gustan las instalaciones</span></label>
              </div>

              <div class="col s6">
                <label><input type="checkbox" name="carrera"/>
                <span>La carrera de técnico en programación</span></label>
              </div>
            </div>
            <!--Fin Fila1-->
            <!--Inicio Fila2-->
            <div class="row">
              <div class="col s6">
                <label><input type="checkbox" name="ensenanza"/>
                <span>Por que le gusta el modelo de enseñanza</span></label>
              </div>

              <div class="col s6">
                <label><input type="checkbox" name="recomendacion"/>
                <span>Por recomendación de familiares o amigos</span></label>
              </div>
            </div>
            <!--Fin Fila2-->
            <!--Inicio Fila3-->
            <div class="row">
              <div class="col s6">
                <label><input type="checkbox" name="documento"/>
                <span>La documentación que se obtiene al egresar</span></label>
              </div>

              <div class="col s6">
                <label><input type="checkbox" name="obligado"/>
                <span>Le obligaron sus padres</span></label>
              </div>
            </div>
            <!--Fin Fila3-->
            <!--Inicio Fila4-->
            <div class="row">
              <div class="col s6">
                <label><input type="checkbox" name="economia"/>
                <span>Por mi situación económica</span></label>
              </div>

              <div class="col s6">
                <label><input type="checkbox" name="opcion"/>
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
            <!--Fin Fila5-->
            <!--Inicio Fila6-->
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea14" class="materialize-textarea validate" name="metas" required></textarea>
                <label for="textarea14">Sus metas en la escuela son</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
            </div>
            <!--Fin Fila6-->
            <!--Inicio Fila7-->
            <div class="row">
              <div class="input-field col s12">
                <input type="text" class="validate" id="textarea15" name="metavida" required>
                <label for="textarea15">Su principal meta en la vida es</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
            </div>
            <!--Fin Fila7-->
            <!--Inicio Fila8-->
            <div class="row">
              <div class="input-field col s12">
                <input type="text" class="validate" id="textarea16" name="lograr" required>
                <label for="textarea16">¿Cómo piensa lograrla?</label>
                <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
              </div>
            </div>
            <!--Fin Fila8-->
            <!--Inicio Fila9-->
            <div class="row">
              <div class="input-field col s12">
                <input type="text" class="validate" id="textarea17" name="estancia" required>
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
                        <input type="checkbox" name="continua">
                        <span class="lever"></span>
                        Sí</label>
                  </div>
              </div>

              <div class="input-field col s6">
                <input type="text" class="validate" id="q" name="que">
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
                        <input type="checkbox" name="promedio2">
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
                        <input type="checkbox" name="reprobado">
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
                        <input type="checkbox" name="eleccion">
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
                        <input type="checkbox" name="asistir">
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
                        <input type="checkbox" name="escuela">
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
                        <input type="checkbox" name="bueno">
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
                        <input type="checkbox" name="maestro">
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
                        <input type="checkbox" name="dudas">
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
                        <input type="checkbox" name="molestaban">
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
                        <input type="checkbox" name="reprobado2">
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
                        <input type="checkbox" name="personal">
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
                        <input type="checkbox" name="eua">
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
                        <input type="checkbox" name="pareja">
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
                        <input type="checkbox" name="probleco">
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
                        <input type="checkbox" name="trabajar">
                        <span class="lever"></span>
                        Verdadero</label>
                </div>
              </div>
            </div>
            <!--Fin Fila27-->

          <div class="row">
            <div class="col s12">
              <h7>Elabora un croquis donde coloques 5 referencias como mínimo para localizar tu domicilio (el croquis debe ser bien detallado, tiene que coincidir con el que aparece en GOOGLE MAPS)</h7>

              <a href="https://www.google.com.mx/maps" target="_blank">Google Maps</a>
            </div>
          </div>
          <div class="row center">
            <input type="submit" value="Guardar/Siguiente" class="btn btn-large center">
          </div>
          <!--Fin del formulario-->
          </form>
        </ul>
        </div>
      </div><!--Fin tab6-->
    </div>
