<nav>
    <div class="nav-wrapper">
      <div class="col s12 orange">
      	<a href="#" class="breadcrumb">Hoja 1</a>
        <a href="#" class="breadcrumb">Hoja 2</a>
    	</a>
      </div>
    </div>
  </nav>

	<div class="container">
		<div class="row">
	      <ul class="collection with-header">
	        <li class="collection-header grey lighten-2"><h5 class="center">DATOS DE LA MADRE</h5>
			<!--Inicio del formulario-->
			<form action="" class="col s12">
				<!--Inicio Fila 1-->
				<div class="row">
					<div class="input-field col s4">
						<input class="validate" id="nom3" type="text" name="nombre3" required>
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
						<select name="municipio4" required>
							<option value="" disabled selected>Elige una opción</option>
						</select>
						<label>Municipio</label>	
    				</div>

    				<div class="input-field col s3" id="del4">
						<select name="delegacion4" required>
							<option value="" disabled selected>Elige una opción</option>
						</select>
						<label>Delegación</label>	
    				</div>
				</div>
				<!--Fin Fila 2-->
				<!--Inicio Fila 3-->
				<div class="row">
					<div class="input-field col s4">
    					<input type="text" id="ent3" class="autocomplete validate" name="entidad3" required>
			          <label for="ent3">Entidad Federativa</label>
			          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    				</div>

					<div class="input-field col s4" id="pais2">
    					<select>
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
					        <input class="with-gap" name="grupo1" type="radio"  />
					        <span>Sin estudios</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio"  />
					        <span>Primaria incompleta</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio"  />
					        <span>Primaria concluida</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio"  />
					        <span>Secundaria incompleta</span>
					      </label>
    				</div>

					<div class="col s3">
    					<label>
					        <input class="with-gap" name="grupo1" type="radio"  />
					        <span>Secundaria concluida</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio"  />
					        <span>Carrera Técnica</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio"  />
					        <span>Bachillerato incompleto</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio"  />
					        <span>Bachillerato concluido</span>
					      </label>
    				</div>

    				<div class="col s3">
    					<label>
					        <input class="with-gap" name="grupo1" type="radio"  />
					        <span>Tec. Sup. Universitario</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio"  />
					        <span>Licenciatura incompleta</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio"  />
					        <span>Licenciatura concluida</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio"  />
					        <span>Especialidad</span>
					      </label>
    				</div>

    				<div class="col s3">
    					<label>
					        <input class="with-gap" name="grupo1" type="radio"  />
					        <span>Maestría</span><br>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio"  />
					        <span>Doctorado</span><br>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio"  />
					        <span>Otro</span>
					      </label>

						<!--<div class="input-field cols3">
							<input class="validate" id="gradoesp" type="text">
							<label for="gradoesp">Especificar</label>
						</div>-->
    				</div>
				</div>
				<!--Fin Fila 4-->
				<!--Inicio Fila 5-->
				<div class="row">
					<div class="input-field col s6 center">
						<h7>¿Trabaja?</h7>
							<div class="switch">
					    		<label>No
					      		<input type="checkbox" name="trabaja">
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
						<select name="municipio5" required>
							<option value="" disabled selected>Elige una opción</option>
						</select>
						<label>Municipio</label>	
    				</div>

    				<div class="input-field col s3" id="del5">
						<select name="delegacion5" required>
							<option value="" disabled selected>Elige una opción</option>
						</select>
						<label>Delegación</label>	
    				</div>
				</div>
				<!--Fin Fila 9-->
				<!--Inicio Fila 10-->
				<div class="row">
					<div class="input-field col s4">
						<input type="text" id="ent4" class="autocomplete validate" name="entidad4" required>
						<label for="ent4">Entidad Federativa</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    				</div>

					<div class="input-field col s4">
    					<select>
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
					        <input class="with-gap" name="grupo0" type="radio"  />
					        <span>Sin estudios</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio"  />
					        <span>Primaria incompleta</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio"  />
					        <span>Primaria concluida</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio"  />
					        <span>Secundaria incompleta</span>
					      </label>
    				</div>
					
					<div class="col s3">
    					<label>
					        <input class="with-gap" name="grupo2" type="radio"  />
					        <span>Secundaria concluida</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio"  />
					        <span>Carrera Técnica</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio"  />
					        <span>Bachillerato incompleto</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio"  />
					        <span>Bachillerato concluido</span>
					      </label>
    				</div>
    				
    				<div class="col s3">
    					<label>
					        <input class="with-gap" name="grupo2" type="radio"  />
					        <span>Tec. Sup. Universitario</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio"  />
					        <span>Licenciatura incompleta</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio"  />
					        <span>Licenciatura concluida</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio"  />
					        <span>Especialidad</span>
					      </label>
    				</div>

    				<div class="col s3">
    					<label>
					        <input class="with-gap" name="grupo2" type="radio"  />
					        <span>Maestría</span><br>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio"  />
					        <span>Doctorado</span><br>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio"  />
					        <span>Otro</span>
					      </label>
						<!--<div class="input-field cols3">
							<input class="validate" id="gradoesp" type="text">
							<label for="gradoesp">Especificar</label>
						</div>-->
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
						<label for="tel">Teléfono del trabajo</label>
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
						<select name="ingresos1">
      					<option value="" disabled selected>Elige una opción</option>
      					<option value="1">1</option>
					      <option value="2">2</option>
					      <option value="3">3</option>
					      <option value="4">4</option>
					      <option value="5+">5 o más</option>
					    </select>
    					<label>¿Cuántas personas que viven en su casa tienen ingresos?</label>
					</div>
				</div>
				<!--Fin Fila 14-->
				<!--Inicio Fila 15-->
				<div class="row">
					<div class="input-field col s8">
						<select name="economico1">
	      				<option value="" disabled selected>Elige una opción</option>
	      				<option value="padre">Padre</option>
						    <option value="madre">Madre</option>
						    <option value="hermano">Hermano</option>
						    <option value="otro">Otro</option>
						</select>
	    			<label>¿De quién depende económicamente?</label>
    				</div>

					<div class="input-field col s4">
						<input class="validate" id="esp3" name="especificar3" type="text">
						<label for="esp3">Otro, especificar</label>
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
		</div>

	<div class="modal" id="ingreso">
	  <h5 class="modal-close right">&#10005;</h5>
	  <div class="modal-content center">
	    <h4>Ingresos Familiares Mensuales</h4><br>
	      <?php echo form_open(""); ?>
	      <div class="input-field">
	        <i class="material-icons prefix">person</i>
	        <input class="validate" type="text" id="ing2" name="ingresos2" required>
	        <label for="ing2">Persona con ingresos</label>
					<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
	      </div><br>

				<i class="material-icons prefix left">attach_money</i>
				<select class="left" name="ingresos3">
						<option value="" disabled selected>Elige una opción</option>
						<option value="padre">Hasta $2,000</option>
						<option value="madre">$2,0001 a $6,000</option>
						<option value="hermano">$6,0001 a $10,000</option>
						<option value="otro">$10,0001 a $20,000</option>
						<option value="">$20,001 a $30,000</option>
						<option value="">Más de $30,000</option>
				</select>
				<label>¿De quién depende económicamente?</label>

				<div class="input-field">
	        <i class="material-icons prefix">pie_chart</i>
	        <input class="validate" type="number" id="por" name="porcentaje" min="0" max="100" required>
	        <label for="por">Porcentaje destinado al gasto familiar</label>
					<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
	      </div><br>

	      <input type="submit" value="Guardar" class="btn btn-large">
	    <?php echo form_close(); ?>
	  </div>
	</div>