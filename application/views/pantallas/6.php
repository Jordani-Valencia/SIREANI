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
	        <li class="collection-header grey"><h5 class="center">PROYECTO DE VIDA</h5>
			<form action="" class="col s12">
				<div class="row">
					<br>
					<div class="center col s12"><h5 class="collection">¿Por qué decidió estudiar su bachillerato en CECYTEM? (Seleccione al menos tres opciones)</h5></div>
				</div>

				<div class="row">
					<div class="col s6">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span>Por que le gustan las instalaciones</span>
					      </label>
					    </p>
					</div>

					<div class="col s6">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span>La carrera de técnico en programación</span>
					      </label>
					    </p>
					</div>
				</div>

				<div class="row">
					<div class="col s6">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span>Por que le gusta el modelo de enseñanza</span>
					      </label>
					    </p>
					</div>

					<div class="col s6">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span>Por recomendación de familiares o amigos</span>
					      </label>
					    </p>
					</div>
				</div>

				<div class="row">
					<div class="col s6">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span>La documentación que se obtiene al egresar</span>
					      </label>
					    </p>
					</div>

					<div class="col s6">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span>Le obligaron sus padres</span>
					      </label>
					    </p>
					</div>
				</div>

				<div class="row">
					<div class="col s6">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span>Por mi situación económica</span>
					      </label>
					    </p>
					</div>

					<div class="col s6">
      					<p>
					      <label>
					        <input type="checkbox" />
					        <span>Fue otra de sus opciones</span>
					      </label>
					    </p>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<input type="text" class="validate" id="especifique">
						<label for="especifique">Otra especifique</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
			          <textarea id="textarea1" class="materialize-textarea"></textarea>
			          <label for="textarea1">Sus metas en la escuela son</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<input type="text" class="validate" id="especifique">
						<label for="especifique">Su principal meta en la vida es</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<input type="text" class="validate" id="especifique">
						<label for="especifique">¿Cómo piensa lograrla?</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<input type="text" class="validate" id="especifique">
						<label for="especifique">¿Qué espera durante su estancia en el plantel?</label>
					</div>
				</div>

				<div class="row">
					<div class="col s6">
						<h7>Al terminar el bachillerato, piensa continuar estudiando</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="input-field col s6">
						<input type="text" class="validate" id="que">
						<label for="que">¿Qué?</label>
					</div>
				</div>
					
				<ul class="collection with-header">
	        	<li class="collection-header grey"><h5 class="center">PERFIL PERSONAL Y ACADÉMICO DE LOS ESTUDIANTES</h5></li></ul>

	        	<div class="row">
	        		<div class="col s12">
	        			<h7>1.- Mi promedio en la escuela es igual o mayor a 7.</h7>
							<div class="switch">
					    		<label>
					      		Falso
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Verdadero
					    	</label>
						</div>
	        		</div>
				</div>

				<div class="row">
	        		<div class="col s12">
	        			<h7>2.- Reprobé 2 o más materias de la secundaria.</h7>
							<div class="switch">
					    		<label>
					      		Falso
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Verdadero
					    	</label>
						</div>
	        		</div>
	        	</div>

				<div class="row">
	        		<div class="col s12">
	        			<h7>3.- Yo elegí el plantel de bachillerato al que asisto.</h7>
							<div class="switch">
					    		<label>
					      		Falso
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Verdadero
					    	</label>
						</div>
	        		</div>
	        	</div>
				
				<div class="row">
	        		<div class="col s12">
	        			<h7>4.- Asisto a la eduación media superior porque creo que me será muy útil.</h7>
							<div class="switch">
					    		<label>
					      		Falso
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Verdadero
					    	</label>
						</div>
	        		</div>
	        	</div>

				<div class="row">
	        		<div class="col s12">
	        			<h7>5.- Me gusta la escuela.</h7>
							<div class="switch">
					    		<label>
					      		Falso
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Verdadero
					    	</label>
						</div>
	        		</div>
	        	</div>
				
				<div class="row">
	        		<div class="col s12">
	        			<h7>6.- Soy bueno para estudiar.</h7>
							<div class="switch">
					    		<label>
					      		Falso
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Verdadero
					    	</label>
						</div>
	        		</div>
	        	</div>

	        	<div class="row">
	        		<div class="col s12">
	        			<h7>7.- En la secundaria sentía confianza con algún maestro(a) como para platicar con él (ella).</h7>
							<div class="switch">
					    		<label>
					      		Falso
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Verdadero
					    	</label>
						</div>
	        		</div>
	        	</div>

	        	<div class="row">
	        		<div class="col s12">
	        			<h7>8.- En la secundaria preguntaba mis dudas al maestro(a).</h7>
							<div class="switch">
					    		<label>
					      		Falso
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Verdadero
					    	</label>
						</div>
	        		</div>
	        	</div>

	        	<div class="row">
	        		<div class="col s12">
	        			<h7>9.- En la secundaria me molestaban con frecuencia otro u otros compañeros (burlas, intimidación, golpes, extorsiones, etc.).</h7>
							<div class="switch">
					    		<label>
					      		Falso
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Verdadero
					    	</label>
						</div>
	        		</div>
	        	</div>

	        	<div class="row">
	        		<div class="col s12">
	        			<h7>10.- Si yo reprobara alguna materia, se lo platicaría a mi mamá o mi papá.</h7>
							<div class="switch">
					    		<label>
					      		Falso
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Verdadero
					    	</label>
						</div>
	        		</div>
	        	</div>

	        	<div class="row">
	        		<div class="col s12">
	        			<h7>11.- Si tuviera un problema personal, se lo platicaría a mi mamá o mi papá.</h7>
							<div class="switch">
					    		<label>
					      		Falso
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Verdadero
					    	</label>
						</div>
	        		</div>
	        	</div>

	        	<div class="row">
	        		<div class="col s12">
	        			<h7>12.- Me gustaría emigrar a Estados Unidos en los próximos 5 años.</h7>
							<div class="switch">
					    		<label>
					      		Falso
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Verdadero
					    	</label>
						</div>
	        		</div>
	        	</div>

	        	<div class="row">
	        		<div class="col s12">
	        			<h7>13.- Es posible que me case o viva con mi pareja antes de terminar el bachillerato.</h7>
							<div class="switch">
					    		<label>
					      		Falso
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Verdadero
					    	</label>
						</div>
	        		</div>
	        	</div>

	        	<div class="row">
	        		<div class="col s12">
	        			<h7>14.- En mi casa hemos tenido problemas económicos serios (deudas, no alcanza para los gastos del diario, etc.).</h7>
							<div class="switch">
					    		<label>
					      		Falso
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Verdadero
					    	</label>
						</div>
	        		</div>
	        	</div>

	        	<div class="row">
	        		<div class="col s12">
	        			<h7>15.- Es más importante trabajar que estudiar.</h7>
							<div class="switch">
					    		<label>
					      		Falso
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Verdadero
					    	</label>
						</div>
	        		</div>
	        	</div>

			<div class="row">
				<div class="col s12">
					<h7>Elabora un croquis donde coloques 5 referencias como mínimo para localizar tu domicilio (el croquis debe ser bien detallado, tiene que coincidir con el que aparece en GOOGLE MAPS)</h7>

					<a href="https://www.google.com.mx/maps">Google Maps</a>
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

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/init.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</body>
</html>