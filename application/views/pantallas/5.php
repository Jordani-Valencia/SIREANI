<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curso de Materialize</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/materialize.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/index.css">
</head>
<body>
	<div class="container">
		<div class="row">
	      <ul class="collection with-header">
	        <li class="collection-header grey"><h5 class="center">TELEFONÍA MÓVIL</h5>
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
						<h5 class="center">¡ATENCIÓN!</h5>
						<h6 class="center">Si no vives con alguno de tus padres: completa el siguiente apartado (Pueden ser Abuelos, tíos, hermanos, etc.)</h6>
						<div class="divider black"></div>
					</div>
				</div>
				<!--Fin Fila3-->
				<!--Encabezado-->
				<ul class="collection with-header">
	        	<li class="collection-header grey"><h5 class="center">DATOS DEL TUTOR</h5></li></ul>
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
					<div class="input-field col s4">
  					<input type="text" id="nac4" class="datepicker" name="nacimiento4" required>
						<label for="nac4">Fecha de Nacimiento</label>
					</div>

    				<div class="input-field col s4">
							<input class="validate" id="lug4" type="text" name="lugar4" required>
							<label for="lug4">Lugar de Nacimiento</label>
							<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    				</div>

    				<div class="input-field col s4">
							<input class="validate" id="mun6" type="text" name="municipio6" required>
							<label for="mun6">Delegación o Municipio</label>
							<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    				</div>
				</div>
				<!--Fin Fila5-->
				<!--Inicio Fila6-->
				<div class="row">
					<div class="input-field col s4">
						<input type="text" id="ent5" class="autocomplete validate" name="entidad5" required>
						<label for="ent5">Entidad Federativa</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    			</div>

					<div class="input-field col s4">
    					<select>
      						<option value="" disabled selected>Elige una opción</option>
      						<option value="1">Option 1</option>
					      	<option value="2">Option 2</option>
					      	<option value="3">Option 3</option>
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
    					<p><label>
					     <input class="with-gap" name="grupo4" type="radio"  />
					     <span>Sin estudios</span></label></p>

					    <p><label>
					     <input class="with-gap" name="grupo4" type="radio"  />
					     <span>Primaria incompleta</span></label></p>

					    <p><label>
					     <input class="with-gap" name="grupo4" type="radio"  />
					     <span>Primaria concluida</span></label></p>

					    <p><label>
					     <input class="with-gap" name="grupo4" type="radio"  />
					     <span>Secundaria incompleta</span></label></p>
    				</div>

					<div class="col s3">
    					<p><label>
					     <input class="with-gap" name="group4" type="radio"  />
					     <span>Secundaria concluida</span></label></p>

					    <p><label>
					     <input class="with-gap" name="group4" type="radio"  />
					     <span>Carrera Técnica</span></label></p>

					    <p><label>
					     <input class="with-gap" name="group4" type="radio"  />
					     <span>Bachillerato incompleto</span></label></p>

					    <p><label>
					     <input class="with-gap" name="group4" type="radio"  />
					     <span>Bachillerato concluido</span></label></p>
    				</div>

    				<div class="col s3">
    					<p><label>
					     <input class="with-gap" name="group4" type="radio"  />
					     <span>Tec. Sup. Universitario</span></label></p>

					    <p><label>
					     <input class="with-gap" name="group4" type="radio"  />
					     <span>Licenciatura incompleta</span></label></p>

					    <p><label>
					     <input class="with-gap" name="group4" type="radio"  />
					     <span>Licenciatura concluida</span></label></p>

					    <p><label>
					     <input class="with-gap" name="group4" type="radio"  />
					     <span>Especialidad</span></label></p>
    				</div>

    				<div class="col s3">
    					<p><label>
					     <input class="with-gap" name="group1" type="radio"  />
					     <span>Maestría</span></label></p>

					    <p><label>
					     <input class="with-gap" name="group1" type="radio"  />
					     <span>Doctorado</span></label></p>

					    <p><label>
					     <input class="with-gap" name="group1" type="radio"  />
					     <span>Otro</span></label></p>

							<div class="input-field cols3">
								<input class="validate" id="gradoesp" type="text" name="especificar14">
								<label for="gradoesp">Especificar</label>
							</div>
    				</div>
				</div>
				<!--Fin Fila7-->
				<!--Inicio Fila8-->
				<div class="row">
					<div class="input-field col s4">
						<h7>¿Trabaja?</h7>
						 <div class="switch">
					    <label>No
					      <input type="checkbox" name="trabaja4">
					      <span class="lever"></span>
					      Sí</label>
					  	</div>
	    			</div>

	    			<div class="col s2">
						<p class="range-field">
      				<input type="range" id="hrsemana3" min="0" max="24" name="semana3"/>
      				<label for="hrsemana3">Número de horas a la semana</label>
    				</p>
					</div>
				</div>
				<!--Fin Fila8-->
				<!--Encabezado-->
				<ul class="collection with-header">
	        	<li class="collection-header grey"><h5 class="center">RELACIONES/ASPECTOS INTERPERSONALES</h5></li></ul>
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
					<div class="col s12"><h5 class="collection">¿Cómo es la relación con sus hermanos? (Seleccione al menos 2 opciones)</h5></div>
				</div>
				<!--Fin Fila9-->
				<!--Inicio Fila10-->
				<div class="row">
					<div class="col s4">
						<p><label>
					   <input type="checkbox" name="plat"/>
					   <span>Platicamos</span></label></p>
					</div>

					<div class="col s4">
						<p><label>
					   <input type="checkbox" name="respeto"/>
					   <span>Hay respeto</span></label></p>
					</div>

					<div class="col s4">
						<p><label>
					   <input type="checkbox" name="apoyo"/>
					   <span>Nos apoyamos</span></label></p>
					</div>
				</div>
				<!--Fin Fila10-->
				
				<div class="row">
					<div class="col s4">
						<p>
					    	<label>
					    		<input type="checkbox" />
					        	<span>Jugamos</span>
					    	</label>
						</p>
					</div>

					<div class="col s4">
						<p>
					    	<label>
					    		<input type="checkbox" />
					        	<span>No nos llevamos</span>
					    	</label>
						</p>
					</div>

					<div class="col s4">
						<p>
					    	<label>
					    		<input type="checkbox" />
					        	<span>Siempre estamos peleando</span>
					    	</label>
						</p>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						<input class="validate" id="novio" type="number">
						<label for="novio">¿A qué edad tuvo su primer noviazgo?</label>
						<span class="helper-text" data-error="wrong" data-success="right">Mensaje</span>
					</div>

					<div class="col s3 center">
						<h7>Actualmente tiene novio</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="input-field col s5">
						<input class="validate" id="tiempo" type="text">
						<label for="tiempo">¿Cuánto tiempo llevas con él (ella)?</label>
						<span class="helper-text" data-error="wrong" data-success="right">Mensaje</span>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s6">
						<input type="text" class="validate" id="prom">
						<label for="prom">En promedio ¿Cuánto tiempo ha durado con sus parejas?</label>
						<span class="helper-text" data-error="wrong" data-success="right"></span>
					</div>

					<div class="input-field col s6">
						<input type="text" class="validate" id="ruptura">
						<label for="ruptura">¿Cuál ha sido el principal motivo de ruptura?</label>
						<span class="helper-text" data-error="wrong" data-success="right"></span>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s6">
						<input type="text" class="validate" id="persona">
						<label for="persona">La persona a la que más confianza le tiene es</label>
						<span class="helper-text" data-error="wrong" data-success="right"></span>
					</div>

					<div class="input-field col s6">
						<input type="text" class="validate" id="confianza">
						<label for="confianza">¿Por qué le tiene confianza?</label>
						<span class="helper-text" data-error="wrong" data-success="right"></span>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4 center">
						<select>
      						<option value="" disabled selected>Elige una opción</option>
      						<option value="1">Papá</option>
					      	<option value="2">Mamá</option>
					      	<option value="3">Ambos</option>
					      	<option value="4">Hermanos</option>
					    </select>
    					<label>¿Quién toma las decisiones definitivas en casa?</label>
					</div>

					<div class="input-field col s4 center">
						<select>
      						<option value="" disabled selected>Elige una opción</option>
      						<option value="1">Papá</option>
					      	<option value="2">Mamá</option>
					      	<option value="3">Ambos</option>
					    </select>
    					<label>¿Quién es el más flexible en los problemas?</label>
					</div>

					<div class="input-field col s4 center">
						<select>
      						<option value="" disabled selected>Elige una opción</option>
      						<option value="1">Papá</option>
					      	<option value="2">Mamá</option>
					      	<option value="3">Ambos</option>
					    </select>
    					<label>¿Con quién hay más problemas de comunicación?</label>
					</div>
				</div>


	        	<h5 class="center">Agregar integrante   <a class="btn-floating btn-large waves-effect waves-light teal accent-3"><i class="material-icons">add</i></a></h5>

				<table class="responsive-table">
			        <thead class="orange">
			          <tr>
			              <th>Algún integrante de su familia consume</th>
			              <th>Integrante de la familia</th>
			              <th>Frecuencia</th>
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

      			<div class="row">
      				<div class="col s12"><h5 class="collection center">¿Quién realiza las siguientes actividades en el hogar?</h5></div>
      			</div>

      			<div class="row center">
      				<div class="col s3"></div>
      				<div class="col s2"><h5>Papá</h5></div>
      				<div class="col s2"><h5>Mamá</h5></div>
      				<div class="col s2"><h5>Hermano</h5></div>
      				<div class="col s1"><h5>Yo</h5></div>
      				<div class="col s2"><h5>Persona de servicio</h5></div>
      			</div>

      			<div class="row center">
      				<div class="col s3">
      					<h7>Lavar, planchar su ropa</h7>
      				</div>

      				<div class="col s2">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>

      				<div class="col s2">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>

      				<div class="col s2">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>

      				<div class="col s1">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>

      				<div class="col s2">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>
      			</div>


      			<div class="row center">
      				<div class="col s3">
      					<h7>Barrer, trapear (aseo general)</h7>
      				</div>

      				<div class="col s2">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>

      				<div class="col s2">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>

      				<div class="col s2">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>

      				<div class="col s1">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>

      				<div class="col s2">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>
      			</div>


      			<div class="row center">
      				<div class="col s3">
      					<h7>Cocinar</h7>
      				</div>

      				<div class="col s2">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>

      				<div class="col s2">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>

      				<div class="col s2">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>

      				<div class="col s1">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>

      				<div class="col s2">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>
      			</div>


      			<div class="row center">
      				<div class="col s3">
      					<h7>Lavar trastes</h7>
      				</div>

      				<div class="col s2">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>

      				<div class="col s2">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>

      				<div class="col s2">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>

      				<div class="col s1">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>

      				<div class="col s2">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span></span>
					      </label>
					    </p>
      				</div>
      			</div>

			</form>
		</ul>

		</div>

		<ul class="pagination center">
		    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
		    <li class="active"><a href="#!">1</a></li>
		    <li class="waves-effect"><a href="2.php">2</a></li>
		    <li class="waves-effect"><a href="3.php">3</a></li>
		    <li class="waves-effect"><a href="#!">4</a></li>
		    <li class="waves-effect"><a href="#!">5</a></li>
		    <li class="waves-effect"><a href="#!">6</a></li>
		    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
		</ul>
	</div> <!--Fin del contenedor-->

	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/init.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/materialize.min.js"></script>
    </body>
</body>
</html>
