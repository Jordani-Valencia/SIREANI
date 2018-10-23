<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s4"><a href="#tele">Teléfonia móvil</a></li>
				<li class="tab col s4"><a href="#tutor">Datos del Tutor</a></li>
        <li class="tab col s4"><a href="#sociales">Relaciones sociales/ Aspectos interpersonales</a></li>
      </ul>
    </div>


<div class="container">
<div id="tele" class="col s12">
	<ul class="collection with-header">
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
      </div>
		</div> <!--Tabs-->

<div id="tutor" class="col s12">
  <ul class="collection with-header">
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
						<select name="municipio6" required>
							<option value="" disabled selected>Elige una opción</option>
						</select>
						<label>Municipio</label>
    				</div>

    				<div class="input-field col s3" id="del6">
						<select name="delegacion6" required>
							<option value="" disabled selected>Elige una opción</option>
						</select>
						<label>Delegación</label>
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

					<div class="input-field col s4" id="pais3">
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
    					<label><input class="with-gap" name="grupo4" type="radio"  />
					     <span>Sin estudios</span></label><br>

					    <label><input class="with-gap" name="grupo4" type="radio"  />
					     <span>Primaria incompleta</span></label>

					    <label><input class="with-gap" name="grupo4" type="radio"  />
					     <span>Primaria concluida</span></label>

					    <label><input class="with-gap" name="grupo4" type="radio"  />
					     <span>Secundaria incompleta</span></label>
    				</div>

					<div class="col s3">
    					<label><input class="with-gap" name="grupo4" type="radio"  />
					     <span>Secundaria concluida</span></label>

					    <label><input class="with-gap" name="grupo4" type="radio"  />
					     <span>Carrera Técnica</span></label>

					    <label><input class="with-gap" name="grupo4" type="radio"  />
					     <span>Bachillerato incompleto</span></label>

					    <label><input class="with-gap" name="grupo4" type="radio"  />
					     <span>Bachillerato concluido</span></label>
    				</div>

    				<div class="col s3">
    					<label><input class="with-gap" name="grupo4" type="radio"  />
					     <span>Tec. Sup. Universitario</span></label>

					    <label><input class="with-gap" name="grupo4" type="radio"  />
					     <span>Licenciatura incompleta</span></label>

					    <label><input class="with-gap" name="grupo4" type="radio"  />
					     <span>Licenciatura concluida</span></label>

					    <label><input class="with-gap" name="grupo4" type="radio"  />
					     <span>Especialidad</span></label>
    				</div>

    				<div class="col s3">
    					<label><input class="with-gap" name="group1" type="radio"  />
					     <span>Maestría</span></label><br>

					    <label><input class="with-gap" name="group1" type="radio"  />
					     <span>Doctorado</span></label><br>

					    <label><input class="with-gap" name="group1" type="radio"  />
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
	     </div>

       <div id="sociales" class="col s12">
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
     <input class="validate" id="novio" type="number" step="1" max="100" min="1">
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
   <div class="input-field col s6">
     <input type="text" class="validate" id="pro" name="promedio2">
     <label for="pro">En promedio ¿Cuánto tiempo ha durado con sus parejas?</label>
     <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
   </div>

   <div class="input-field col s6">
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
 <?php echo form_open(""); ?>
 <div class="input-field">
<select name="sustancia" required>
 <option value="" disabled selected>Elige una opción</option>
 <option value="Alcohol">Alcohol</option>
 <option value="Cigarros">Cigarros</option>
 <option value="Alguna droga">Algúna droga</option>
</select>
<label>Algún integrante de su familia consume:</label>

 <div class="input-field">

   <input type="text" id="nom2" name="nombre2" class="validate" required>
   <label for="nom2">Integrante de la familia</label>
   <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
 </div>

 <div class="input-field">
   <select name="sustancia" required>
     <option value="" disabled selected>Elige una opción</option>
     <option value="Diario">Diario</option>
     <option value="1 vez a la semana">1 vez a la semana</option>
     <option value="3 veces a la semana">3 veces a la semana</option>
     <option value="1 vez al mes">1 vez al mes</option>
     <option value="Ocasionalmente">Ocasionalmente</option>
     <option value="Casi nunca">Casi nunca</option>
     <option value="Nunca">Nunca</option>
   </select>
   <label>Frecuencia:</label>
 </div>

 <input type="submit" value="Guardar" class="btn btn-large">
<?php echo form_close(); ?>
</div>
</div>
</div>
       </div>
  </div>
