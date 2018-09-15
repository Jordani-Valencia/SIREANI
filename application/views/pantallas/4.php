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
	        <li class="collection-header grey"><h5 class="center">EJERICIO Y DEPORTES</h5>
			<form action="" class="col s12">

				<div class="row">
					<div class="col s8"><h5 class="collection center">¿Cuántas veces a la semana haces ejercicio?</h5></div>

					<div class="col s4">
						<select>
							<option value="" disabled selected>Elige una opción</option>
							<option value="">De 1 a 2 veces</option>
							<option value="">De 3 a 4 veces</option>
							<option value="">De 5 a 7 veces</option>
							<option value="">Nunca</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4 center">
						<h7>¿Practicas algún deporte?</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="col s8">
						<h5 class="collection">Selecciona cúal de los siguientes</h5>
					</div>
				</div>

				<div class="row">
					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Futbol</span>
					      </label>
					    </p>
					</div>

					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Béisbol</span>
					      </label>
					    </p>
					</div>

					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Basquetbol</span>
					      </label>
					    </p>
					</div>

					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Natación</span>
					      </label>
					    </p>
					</div>
				</div>

				<div class="row">
					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Atletismo</span>
					      </label>
					    </p>
					</div>

					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Tenis</span>
					      </label>
					    </p>
					</div>

					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Gimnasia</span>
					      </label>
					    </p>
					</div>

					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Judo</span>
					      </label>
					    </p>
					</div>
				</div>

				<div class="row">
					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Karate</span>
					      </label>
					    </p>
					</div>

					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Halterofilia</span>
					      </label>
					    </p>
					</div>

					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Boxeo</span>
					      </label>
					    </p>
					</div>

					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Lucha</span>
					      </label>
					    </p>
					</div>
				</div>

				<div class="row">
					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Ciclismo</span>
					      </label>
					    </p>
					</div>

					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Charrería</span>
					      </label>
					    </p>
					</div>

					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Otro</span>
					      </label>
					    </p>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="especificar" type="text">
						<label for="especificar">Especificar</label>
						<span class="helper-text" data-error="wrong" data-success="right">Mensaje</span>
					</div>
				</div>

				<li class="collection-header grey"><h5 class="center">HÁBITOS DE CONSUMO</h5></li>

				<div class="row">
					<div class="input-field col s4 center">
						<h7>¿Fuma?</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="input-field col s8 center">
						<select>
							<option value="" disabled selected>Elige una opción</option>
							<option value="">1 a 5</option>
							<option value="">6 a 10</option>
							<option value="">10 o más</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="col s12"><h5 class="collection">Seleccione las opciones que considere necesarias</h5></div>
				</div>

				<div class="row">
					<div class="col s4"><h5 class="collection center">¿Consume?</h5></div>
					<div class="col s8"><h5 class="collection center">¿Cuántas veces a la semana?</h5></div>
				</div>

				<div class="row">
					<div class="col s4 center">
						<h7>Cerveza</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="input-field col s8 center">
						<select>
							<option value="" disabled selected>Elige una opción</option>
							<option value="">Una</option>
							<option value="">2 o 3</option>
							<option value="">4 o más</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="col s4 center">
						<h7>Vinos de mesa</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="input-field col s8 center">
						<select>
							<option value="" disabled selected>Elige una opción</option>
							<option value="">Una</option>
							<option value="">2 o 3</option>
							<option value="">4 o más</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="col s4 center">
						<h7>Cocteles</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="input-field col s8 center">
						<select>
							<option value="" disabled selected>Elige una opción</option>
							<option value="">Una</option>
							<option value="">2 o 3</option>
							<option value="">4 o más</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="col s4 center">
						<h7>Licores</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="input-field col s8 center">
						<select>
							<option value="" disabled selected>Elige una opción</option>
							<option value="">Una</option>
							<option value="">2 o 3</option>
							<option value="">4 o más</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="col s4 center">
						<h7>Otros</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="input-field col s8 center">
						<select>
							<option value="" disabled selected>Elige una opción</option>
							<option value="">Una</option>
							<option value="">2 o 3</option>
							<option value="">4 o más</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="col s12"><h5 class="collection center">Considera que sus amigos</h5></div>
				</div>

				<div class="row">
					<div class="col s4 center">
						<h7>¿Tienen alguna adicción?</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="input-field col s8">
						<input class="validate" id="otro" type="text">
						<label for="otro">Especifique</label>
						<span class="helper-text" data-error="wrong" data-success="right">Mensaje</span>
					</div>
				</div>

				<div class="row">
					<div class="col s4 center">
						<h7>¿Consumen alguna droga?</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="input-field col s8">
						<input class="validate" id="otro" type="text">
						<label for="otro">Especifique</label>
						<span class="helper-text" data-error="wrong" data-success="right">Mensaje</span>
					</div>
				</div>

				<li class="collection-header grey"><h5 class="center">RECREACIÓN Y TIEMPO LIBRE</h5></li>

				<div class="row">
					<div class="col s4">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Ir al parque</span>
					      </label>
					    </p>
					</div>

					<div class="col s4">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Hacer deporte</span>
					      </label>
					    </p>
					</div>

					<div class="col s4">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Ver televisión</span>
					      </label>
					    </p>
					</div>
				</div>

				<div class="row">
					<div class="col s4">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Ir al cine</span>
					      </label>
					    </p>
					</div>

					<div class="col s4">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Reunirse con amigos</span>
					      </label>
					    </p>
					</div>

					<div class="col s4">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Ver películas en casa</span>
					      </label>
					    </p>
					</div>
				</div>

				<div class="row">
					<div class="col s4">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Ir a bailar</span>
					      </label>
					    </p>
					</div>

					<div class="col s4">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Salir con mi pareja</span>
					      </label>
					    </p>
					</div>

					<div class="col s4">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Leer</span>
					      </label>
					    </p>
					</div>
				</div>

				<div class="row">
					<div class="col s4">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Jugar videojuegos</span>
					      </label>
					    </p>
					</div>

					<div class="col s4">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Escuchar música</span>
					      </label>
					    </p>
					</div>

					<div class="col s4">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Ir de compras</span>
					      </label>
					    </p>
					</div>
				</div>

				<div class="row">
					<div class="col s4">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Usar la computadora</span>
					      </label>
					    </p>
					</div>

					<div class="col s4">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Otro</span>
					      </label>
					    </p>
					</div>

					<div class="input-field col s4">
						<input class="validate" id="otro" type="text">
						<label for="otro">Especificar</label>
						<span class="helper-text" data-error="wrong" data-success="right">Mensaje</span>
					</div>
				</div>

				<li class="collection-header grey"><h5 class="center">GUSTOS E INTERESES</h5></li>

				<div class="row">
					<div class="input-field col s12">
			          <textarea id="textarea1" class="materialize-textarea"></textarea>
			          <label for="textarea1">¿Qué hago en mi tiempo libre?</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s6">
			          <textarea id="textarea1" class="materialize-textarea"></textarea>
			          <label for="textarea1">Ultima vez que leí un libro</label>
					</div>

					<div class="input-field col s6">
			          <textarea id="textarea1" class="materialize-textarea"></textarea>
			          <label for="textarea1">¿Qué es lo que más me gusta hacer?</label>
					</div>
				</div>

				<div class="row">
					<div class="col s4 center"><h6>Libros que haz leído</h6></div>
					<div class="col s4 center"><h6>Mis película preferidas son</h6></div>
					<div class="col s4 center"><h6>¿Cuántos amigos tengo?</h6></div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						<textarea id="textarea1" class="materialize-textarea"></textarea>
			          	<label for="textarea1">1.- </label>
					</div>

					<div class="input-field col s4">
						<textarea id="textarea1" class="materialize-textarea"></textarea>
			          	<label for="textarea1">1.- </label>
					</div>

					<div class="input-field col s4">
						<input class="validate" id="amigos" type="number">
						<label for="amigos">Número de amigos</label>
						<span class="helper-text" data-error="wrong" data-success="right">Mensaje</span>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						<textarea id="textarea1" class="materialize-textarea"></textarea>
			          	<label for="textarea1">2.- </label>
					</div>

					<div class="input-field col s4">
						<textarea id="textarea1" class="materialize-textarea"></textarea>
			          	<label for="textarea1">2.- </label>
					</div>

					<div class="col s4 center"><h6>¿Qué lugares frecuento con ellos?</h6></div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						<textarea id="textarea1" class="materialize-textarea"></textarea>
			          	<label for="textarea1">3.- </label>
					</div>

					<div class="input-field col s4">
						<textarea id="textarea1" class="materialize-textarea"></textarea>
			          	<label for="textarea1">3.- </label>
					</div>

					<div class="input-field col s4">
						<textarea id="textarea1" class="materialize-textarea"></textarea>
			          	<label for="textarea1">1.- </label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						<textarea id="textarea1" class="materialize-textarea"></textarea>
			          	<label for="textarea1">4.- </label>
					</div>

					<div class="input-field col s4">
						<textarea id="textarea1" class="materialize-textarea"></textarea>
			          	<label for="textarea1">4.- </label>
					</div>

					<div class="input-field col s4">
						<textarea id="textarea1" class="materialize-textarea"></textarea>
			          	<label for="textarea1">2.- </label>
					</div>
				</div>

				<li class="collection-header grey"><h5 class="center">PARTICIPACIÓN SOCIAL</h5></li>

				<div class="row">
					<div class="col s10 center"><h5 class="collection">¿Actualmente participa en alguna organización, asociación, equipo o grupo?</h5></div>

					<div class="col s2 center">
						<h7> </h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Estudiantil</span>
					      </label>
					    </p>
					</div>

					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Beneficiencia</span>
					      </label>
					    </p>
					</div>

					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Político</span>
					      </label>
					    </p>
					</div>

					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Otro</span>
					      </label>
					    </p>
					</div>					
				</div>

				<div class="row">
					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Deportivo</span>
					      </label>
					    </p>
					</div>

					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Religioso</span>
					      </label>
					    </p>
					</div>

					<div class="col s3">
						<p>
					      <label>
					        <input type="checkbox" />
					        <span>Académico</span>
					      </label>
					    </p>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="esp" type="text">
						<label for="esp">Especificar</label>
						<span class="helper-text" data-error="wrong" data-success="right">Mensaje</span>
					</div>
				</div>

				<li class="collection-header grey"><h5 class="center">INTERNET</h5></li>

				<div class="row">
					<div class="col s4 center"><h5 class="collection">¿Sabes usar internet?</h5></div>
					
					<div class="col s2">
						<h7> </h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="col s4 center"><h5 class="collection">¿Tienes acceso a internet?</h5></div>
					
					<div class="col s2">
						<h7> </h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col s12 center"><h5 class="collection">En caso afirmativo, seleccione el lugar principal en el que tiene acceso.</h5></div>
				</div>

				<div class="row">
					<div class="col s4">
						<p>
					    	<label>
					    		<input type="checkbox" />
					        	<span>Casa</span>
					    	</label>
						</p>
					</div>

					<div class="col s4">
						<p>
					    	<label>
					    		<input type="checkbox" />
					        	<span>Escuela</span>
					    	</label>
						</p>
					</div>

					<div class="col s4">
						<p>
					    	<label>
					    		<input type="checkbox" />
					        	<span>Trabajo</span>
					    	</label>
						</p>
					</div>
				</div>

				<div class="row">
					<div class="col s4">
						<p>
					    	<label>
					    		<input type="checkbox" />
					        	<span>Café Internet</span>
					    	</label>
						</p>
					</div>

					<div class="col s4">
						<p>
					    	<label>
					    		<input type="checkbox" />
					        	<span>Casa de algún amigo o familiar</span>
					    	</label>
						</p>
					</div>

					<div class="col s2">
						<p>
					    	<label>
					    		<input type="checkbox" />
					        	<span>Otro</span>
					    	</label>
						</p>
					</div>

					<div class="input-field col s2">
						<input class="validate" id="especificar" type="text">
						<label for="especificar">Especificar</label>
					</div>
				</div>

				<div class="row">
					<div class="col s12 center"><h5 class="collection">¿Para qué utiliza el internet? (Seleccione las opciones necesarias).</h5></div>
				</div>

				<div class="row">
					<div class="col s6 center"><h5 class="collection">¿Tiene?</h5></div>

					<div class="col s6 center"><h5 class="collection">¿Para qué lo utiliza?</h5></div>
				</div>

				<div class="row">
					<div class="col s6 center">
						<h7>Correo electrónico</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="col s3 center">
						<h7>Intercambiar información</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="col s3 center">
						<h7>Entretenimiento</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col s6 center">
						<h7>Página web personal</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="col s3 center">
						<h7>Relaciones de amistad</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="col s3 center">
						<h7>Buscar amigos</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col s6 center">
						<h7>Red Social (Facebook, Twitter, etc.)</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="col s3 center">
						<h7>Relaciones profesionales</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="col s3 center">
						<h7>Comunicarte</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col s6 center">
						<h7>Blog/Web blog</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="col s3 center">
						<h7>Buscar pareja</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
					</div>

					<div class="col s3 center">
						<h7>Otro</h7>
							<div class="switch">
					    		<label>
					      		No
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Sí
					    	</label>
						</div>
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