<nav>
    <div class="nav-wrapper">
      <div class="col s12 orange">
      	<a href="#" class="breadcrumb">Hoja 1</a>
        <a href="#" class="breadcrumb">Hoja 2</a>
        <a href="#" class="breadcrumb">Hoja 3</a>
        <a href="#" class="breadcrumb">Hoja 4</a>
    	</a>
      </div>
    </div>
  </nav>

	<div class="container">
		<div class="row">
	      <ul class="collection with-header">
	        <li class="collection-header grey lighten-2"><h5 class="center">EJERICIO Y DEPORTES</h5>
				<!--Inicio del formulario-->
				<form action="../CInserciones4/deportes" method="post" onsubmit="cambio('btn4')" class="col s12">
				<!--Inicio Fila1-->
				<div class="row">
          <br>
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
          <div class="collection green lighten-4 col s4 center"><h6>Libros que has leído</h6></div>
  					<div class="collection red lighten-4 col s4 center"><h6>Mis película preferidas son</h6></div>
  					<div class="collection blue lighten-4 col s4 center"><h6>¿Cuántos amigos tengo?</h6></div>
				</div>
				<!--Fin Fila26-->
        <!--Inicio Fila27-->
				<div class="row">
					<div class="collection green lighten-5 input-field col s4">
						<textarea id="textarea4" class="materialize-textarea validate" name="libro1" required></textarea>
			      <label for="textarea4">1.- </label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="collection red lighten-5 input-field col s4">
						<textarea id="textarea5" class="materialize-textarea validate" name="pelicula1" required></textarea>
			      <label for="textarea5">1.- </label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="collection blue lighten-5 input-field col s4">
						<input class="validate" id="ami" type="number" step="1" name="amigos2" required>
						<label for="ami">Número de amigos</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
				</div>
				<!--Fin Fila27-->
				<!--Inicio Fila28-->
				<div class="row">
					<div class="collection green lighten-5 input-field col s4">
						<textarea id="textarea6" class="materialize-textarea validate" name="libro2" required></textarea>
			      <label for="textarea6">2.- </label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="collection red lighten-5 input-field col s4">
						<textarea id="textarea7" class="materialize-textarea validate" name="pelicula2" required></textarea>
			      <label for="textarea7">2.- </label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="collection brown lighten-4 col s4 center"><h6>¿Qué lugares frecuento con ellos?</h6></div>
				</div>
				<!--Fin Fila28-->
				<!--Inicio Fila29-->
				<div class="row">
					<div class="collection green lighten-5 input-field col s4">
						<textarea id="textarea8" class="materialize-textarea validate" name="libro3" ></textarea>
			      <label for="textarea8">3.- </label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="collection red lighten-5 input-field col s4">
						<textarea id="textarea9" class="materialize-textarea validate" name="pelicula3" ></textarea>
			      <label for="textarea9">3.- </label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="collection brown lighten-5 input-field col s4">
						<textarea id="textarea10" class="materialize-textarea validate" name="lugares" required></textarea>
			      <label for="textarea10">1.- </label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
				</div>
				<!--Fin Fila29-->
				<!--Inicio Fila30-->
				<div class="row">
					<div class="collection green lighten-5 input-field col s4">
						<textarea id="textarea11" class="materialize-textarea validate" name="libro4" ></textarea>
			      <label for="textarea11">4.- </label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="collection red lighten-5 input-field col s4">
						<textarea id="textarea12" class="materialize-textarea validate" name="pelicula4" ></textarea>
			      <label for="textarea12">4.- </label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="collection brown lighten-5 input-field col s4">
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
					<input type="submit" value="Guardar/Siguiente" id="btn4" class="btn btn-large center">
				</div>
			</form><!--Fin del formulario-->
		</ul>
		</div>
	</div> <!--Fin del contenedor-->
