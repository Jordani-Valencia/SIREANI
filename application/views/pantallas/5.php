<nav>
    <div class="nav-wrapper">
      <div class="col s12 orange">
      	<a href="#" class="breadcrumb">Hoja 1</a>
        <a href="#" class="breadcrumb">Hoja 2</a>
        <a href="#" class="breadcrumb">Hoja 3</a>
        <a href="#" class="breadcrumb">Hoja 4</a>
        <a href="#" class="breadcrumb">Hoja 5</a>
    	</a>
      </div>
    </div>
  </nav>

	<div class="container">
		<div class="row">
	      <ul class="collection with-header">
	        <li class="collection-header grey lighten-2"><h5 class="center">TELEFONÍA MÓVIL</h5>
			<form action="../CInserciones5/sociales" method="post" class="col s12">
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
</div> <!--Fin del contenedor-->
