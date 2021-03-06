	<nav>
    <div class="nav-wrapper">
      <div class="col s12 orange">
        <a href="#" class="breadcrumb">Hoja 1</a>
    	</a>
      </div>
    </div>
  </nav>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/val.js"></script> <!--Validacion de los select-->

	<div class="container">
		<div class="row">
	      <ul class="collection with-header">
	        <li class="collection-header grey lighten-2"><h4 class="center">DATOS GENERALES DEL ESTUDIANTE</h4>
	        	<p class="center">Los datos que proporcione será utilizados únicamente en el área de Orientación</p></li>
			<!--Inicio del formulario-->
			<form action="../CInserciones/datosGenerales" method="post" class="col s12" id="form1" onsubmit="cambio('btn1')">
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
					<div class="input-field col s2">
  						<input type="text" class="datepicker" id="nac" name="nacimiento1" required>
						<label for="nac">Fecha de Nacimiento</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
					<!-- adicion 28 dic -->
					<div class="input-field col s2">
						<input class="validate" id="edadAlumno" type="number" min="14" max="40" name="edadAlumno" required>
						<label for="edadAlumno">Edad</label>
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

					<div class="input-field col s3" id="nacionalidad1" name="nacionalidad1">
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
						<!-- adicion 28 de dic -->
						<div class="input-field col s2" id="" name="">
							<select name="civilAlumno" id="civilAlumno">
								<option value="Soltero">Soltero</option>
								<option value="Casado">Casado</option>
								<option value="Otro">Otro</option>
							</select>
							<label>Estado Civil</label>
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
					<div class="input-field col s5">
						<input class="validate" id="esc" name="escuela1" type="text" required>
						<label for="esc">Nombre de la escuela</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s5">
						<input class="validate" id="dom" name="domEsc1" type="text" required>
						<label for="dom">Domicilio de la escuela</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s2">
						<input class="validate" id="ct" name="cct" type="text" data-length="12" maxlength="12" required>
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
					      <input type="checkbox" name="beca1" onchange="checkbeca()">
					      <span class="lever"></span>Sí</label>
					  </div>
	    			</div>

	    			<div class="input-field col s8">
						<input class="validate" id="esp1" type="text" name="especificar1" >
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
      						<input type="range" id="numh" min="0" max="48" name="horas" />
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

				<!--Entre calles-->
				<div class="row">
					<div class="input-field col s4" id="c1">
						<input type="text" name="entrec1" id="c1" class="validate" required>
						<label for="c1">Entre calle</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s4" id="c2">
						<input type="text" name="entrec2" id="c2" class="validate" required>
						<label for="c2">Y calle</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s4" id="ref">
						<input type="text" name="referencia" id="c2" class="validate" required>
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
					<div class="input-field col s3">
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

					<div class="input-field col s3">
						<input class="validate" id="c" type="tel" name="emergencia" data-length="12" maxlength="12" required>
						<label for="c">Teléfono de emergencia</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
				</div>
				<!--Fin Fila 11-->
				<div class="row center">
			<input type="submit" id="btn1" value="Guardar/Siguiente" class="btn btn-large center" >
		</div>
