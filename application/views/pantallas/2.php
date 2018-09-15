<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curso de Materialize</title>
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/index.css">

</head>
<body>
	
	<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>

<ul id="dropdown2" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>

<ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Inicio<i class="material-icons left">home</i></a></li>
    <li><a href="badges.html">Contacto<i class="material-icons left">call</i></a></li>
    <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Correo<i class="material-icons left">email</i><i class="material-icons right">arrow_drop_down</i></a></li>
  </ul>

<nav>
  <div class="nav-wrapper light-blue accent-2">
    <a href="#!" class="brand-logo">Logo</a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="sass.html">Inicio<i class="material-icons left">home</i></a></li>
      <li><a href="badges.html">Contacto<i class="material-icons left">call</i></a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Correo<i class="material-icons left">email</i><i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>

	<div class="container">
		<div class="row">

	      <ul class="collection with-header">
	        <li class="collection-header grey"><h5 class="center">DATOS DE LA MADRE</h5>
			<!--Inicio del formulario-->
			<form action="" class="col s12">
				<!--Inicio Fila 1-->
				<div class="row">
					<div class="input-field col s4">
						<input class="validate" id="nom" type="text" name="nombre2" required>
						<label for="nombre">Nombre</label>
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
					<div class="input-field col s4">
  						<input type="text" class="datepicker" id="nac2" name="nacimiento2">
						<label for="nac2">Fecha de Nacimiento</label>
					</div>

    				<div class="input-field col s4">
    					<input class="validate" id="lug2" type="text" name="lugar2" required>
						<label for="lug2">Lugar de Nacimiento</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    				</div>

    				<div class="input-field col s4">
    					<input class="validate" id="mun4" type="text" name="municipio4" required>
						<label for="mun4">Delegación o Municipio</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    				</div>
				</div>
				<!--Fin Fila 2-->
				<!--Inicio Fila 3-->
				<div class="row">
					<div class="input-field col s4">
    					<input type="text" id="ent" class="autocomplete validate" name="entidad1" required>
			          <label for="ent">Entidad Federativa</label>
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
						<input class="validate" id="curp" type="text">
						<label for="curp">CURP</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s3">
    					<p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Sin estudios</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Primaria incompleta</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Primaria concluida</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Secundaria incompleta</span>
					      </label>
					    </p>
    				</div>
					
					<div class="input-field col s3">
    					<p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Secundaria concluida</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Carrera Técnica</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Bachillerato incompleto</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Bachillerato concluido</span>
					      </label>
					    </p>
    				</div>

    				<div class="input-field col s3">
    					<p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Tec. Sup. Universitario</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Licenciatura incompleta</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Licenciatura concluida</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Especialidad</span>
					      </label>
					    </p>
    				</div>

    				<div class="input-field col s3">
    					<p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Maestría</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Doctorado</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Otro</span>
					      </label>
					    </p>
						
						<!--<div class="input-field cols3">
							<input class="validate" id="gradoesp" type="text">
							<label for="gradoesp">Especificar</label>
						</div>-->
    				</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
							<h7>¿Trabaja?</h7>
						 <div class="switch">
					    <label>
					      No
					      <input type="checkbox">
					      <span class="lever"></span>
					      Sí
					    </label>
					  </div>
	    			</div>

	    			<div class="input-field col s2">
						<p class="range-field">
      						<input type="range" id="hrsemana" min="0" max="24" />
      						<label for="hrsemana">Número de horas a la semana</label>
    					</p>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						<input class="validate" id="tel" type="tel">
						<label for="tel">Teléfono de casa:</label>	
					</div>

					<div class="input-field col s4">
						<input class="validate" id="cel" type="tel">
						<label for="cel">Teléfono del trabajo</label>
					</div>

					<div class="input-field col s4">
						<input class="validate" id="cel" type="tel">
						<label for="cel">Teléfono de celular</label>
					</div>
				</div>
					
				<ul class="collection with-header">
	        	<li class="collection-header grey"><h5 class="center">DATOS DEL PADRE</h5></li></ul>

				<div class="row">
					<div class="input-field col s4">
						<input class="validate" id="nombre" type="text">
						<label for="nombre">Nombre</label>
						<span class="helper-text" data-error="wrong" data-success="right">Mensaje</span>
					</div>
					<div class="input-field col s4">
						<input class="validate" id="ap" type="text">
						<label for="ap">Apellido Paterno</label>
					</div>
					<div class="input-field col s4">
						<input class="validate" id="am" type="text">
						<label for="nombre">Apellido Materno</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
  						<input type="text" class="datepicker">
						<label for="nacimiento">Fecha de Nacimiento</label>
					</div>

    				<div class="input-field col s4">
    					<select>
      						<option value="" disabled selected>Elige una opción</option>
      						<option value="1">Option 1</option>
					      	<option value="2">Option 2</option>
					      	<option value="3">Option 3</option>
					    </select>
    					<label>Lugar de Nacimiento</label>
    				</div>

    				<div class="input-field col s4">
    					<select>
      						<option value="" disabled selected>Elige una opción</option>
      						<option value="1">Option 1</option>
					      	<option value="2">Option 2</option>
					      	<option value="3">Option 3</option>
					    </select>
    					<label>Delegación o Municipio</label>
    				</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
    					<select>
      						<option value="" disabled selected>Elige una opción</option>
      						<option value="1">Option 1</option>
					      	<option value="2">Option 2</option>
					      	<option value="3">Option 3</option>
					    </select>
    					<label>Entidad Federativa</label>
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
						<input class="validate" id="curp" type="text">
						<label for="curp">CURP</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s3">
    					<p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Sin estudios</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Primaria incompleta</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Primaria concluida</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Secundaria incompleta</span>
					      </label>
					    </p>
    				</div>
					
					<div class="input-field col s3">
    					<p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Secundaria concluida</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Carrera Técnica</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Bachillerato incompleto</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Bachillerato concluido</span>
					      </label>
					    </p>
    				</div>

    				<div class="input-field col s3">
    					<p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Tec. Sup. Universitario</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Licenciatura incompleta</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Licenciatura concluida</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Especialidad</span>
					      </label>
					    </p>
    				</div>

    				<div class="input-field col s3">
    					<p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Maestría</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Doctorado</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input class="with-gap" name="group1" type="radio"  />
					        <span>Otro</span>
					      </label>
					    </p>
						
						<!--<div class="input-field cols3">
							<input class="validate" id="gradoesp" type="text">
							<label for="gradoesp">Especificar</label>
						</div>-->
    				</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
							<h7>¿Trabaja?</h7>
						 <div class="switch">
					    <label>
					      No
					      <input type="checkbox">
					      <span class="lever"></span>
					      Sí
					    </label>
					  </div>
	    			</div>

	    			<div class="input-field col s2">
						<p class="range-field">
      						<input type="range" id="hrsemana" min="0" max="24" />
      						<label for="hrsemana">Número de horas a la semana</label>
    					</p>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						<input class="validate" id="tel" type="tel">
						<label for="tel">Teléfono de casa</label>	
					</div>

					<div class="input-field col s4">
						<input class="validate" id="cel" type="tel">
						<label for="cel">Teléfono del trabajo</label>
					</div>

					<div class="input-field col s4">
						<input class="validate" id="cel" type="tel">
						<label for="cel">Teléfono de celular</label>
					</div>
				</div>

				<ul class="collection with-header">
	        	<li class="collection-header grey"><h5 class="center">INGRESOS FAMILIARES</h5></li></ul>
				
				<div class="row">
					<div class="input-field col s12">
						<select>
      						<option value="" disabled selected>Elige una opción</option>
      						<option value="1">1</option>
					      	<option value="2">2</option>
					      	<option value="3">3</option>
					      	<option value="3">4</option>
					      	<option value="3">5 o más</option>
					    </select>
    					<label>¿Cuántas personas que viven en su casa tienen ingresos?</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s8">
						<select>
	      						<option value="" disabled selected>Elige una opción</option>
	      						<option value="padre">Padre</option>
						      	<option value="madre">Madre</option>
						      	<option value="hermano">Hermano</option>
						      	<option value="otro">Otro</option>
						</select>
	    				<label>¿De quién depende económicamente?</label>
    				</div>

					<div class="input-field col s4">
						<input class="validate" id="otro" type="text">
						<label for="otro">Otro, especificar</label>
					</div>
				</div>

				<ul class="collection with-header">
	        	<li class="collection-header grey"><h5 class="center">INGRESOS FAMILIARES MENSUALES   <a class="btn-floating btn-large waves-effect waves-light teal accent-3"><i class="material-icons">add</i></a></h5></li></ul>

				<table class="responsive-table">
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

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/init.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</body>
</html>