<nav>
    <div class="nav-wrapper">
      <div class="col s12 orange">
      	<a href="#" class="breadcrumb">Hoja 1</a>
        <a href="#" class="breadcrumb">Hoja 2</a>
        <a href="#" class="breadcrumb">Hoja 3</a>
        <a href="#" class="breadcrumb">Hoja 4</a>
        <a href="#" class="breadcrumb">Hoja 5</a>
        <a href="#" class="breadcrumb">Hoja 6</a>
    	</a>
      </div>
    </div>
  </nav>

	<!--Inicio del contenedor-->
	<div class="container">
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
	</div> <!--Fin del contenedor-->
