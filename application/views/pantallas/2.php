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
			<!--Inicio del formulario-->
			<form action="../CInserciones2/padre" method="post" class="col s12" onsubmit="cambio('btn2')">

        <!--  -->
        <!--  -->
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
						<input class="validate" id="nom5" type="text" name="nombre5">
						<label for="nom5">Nombre(s)</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="ap4" type="text" name="paterno4">
						<label for="ap4">Apellido Paterno</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="am4" type="text" name="materno4">
						<label for="am4">Apellido Materno</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
<!--adicion 28 de dic  -->
          <div class="input-field col s2">
            <input class="validate" id="edadTutor" type="number" min="15" max="100" name="edadTutor">
            <label for="edadTutor">Edad</label>
            <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
          </div>

				</div>
				<!--Fin Fila4-->
				<!--Inicio Fila5-->
				<div class="row">
					<div class="input-field col s3">
  					<input type="text" id="nac4" class="datepicker" name="nacimiento4">
						<label for="nac4">Fecha de Nacimiento</label>
					</div>

    				<div class="input-field col s3">
							<input class="validate" id="lug4" type="text" name="lugar4">
							<label for="lug4">Lugar de Nacimiento</label>
							<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    				</div>

            <div class="input-field col s3" id="mun6">
              <input class="validate" id="municipio6" type="text" name="municipio6">
						<label for="municipio6">Municipio</label>
    				</div>

    				<div class="input-field col s3" id="del6">
						  <input class="validate" id="delegacion6" type="text" name="delegacion6">
						<label for="delegacion6">Delegación</label>
    				</div>
				</div>
				<!--Fin Fila5-->
				<!--Inicio Fila6-->
				<div class="row">
          <div class="input-field col s3">
              <select name="entidad6" id="ent6">
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
			          <label for="ent6">Entidad Federativa</label>
			          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    				</div>

					<div class="input-field col s3" id="pais3">
    					<select name="paisTutor">
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

            <!--  adicion 28 de dic-->
            <div class="input-field col s3" id="nacionalidadTutor" name="nacionalidadTutor">
      					<select name="nacionalidadTutor" id="tres">
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

    				<div class="input-field col s3">
							<input class="validate" id="c" name="curp4" type="text" pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)" data-length="18" maxlength="18" onkeyup="mayus(this);">
							<label for="c">CURP</label>
							<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
				</div>
				<!--Fin Fila6-->
				<!--Inicio Fila7-->
				<div class="row">
					<div class="col s3">
            <label>
                <input class="with-gap" name="grupo4" type="radio" value="1" />
                <span>Sin estudios</span><br>
              </label>

            <label>
                <input class="with-gap" name="grupo4" type="radio" value="2" />
                <span>Primaria incompleta</span>
              </label>

            <label>
                <input class="with-gap" name="grupo4" type="radio" value="3" />
                <span>Primaria concluida</span>
              </label>

            <label>
                <input class="with-gap" name="grupo4" type="radio" value="4" />
                <span>Secundaria incompleta</span>
              </label>
    				</div>

					<div class="col s3">
            <label>
                <input class="with-gap" name="grupo4" type="radio" value="5" />
                <span>Secundaria concluida</span>
              </label>

            <label>
                <input class="with-gap" name="grupo4" type="radio" value="6" />
                <span>Carrera Técnica</span>
              </label>

            <label>
                <input class="with-gap" name="grupo4" type="radio" value="7" />
                <span>Bachillerato incompleto</span>
              </label>

            <label>
                <input class="with-gap" name="grupo4" type="radio" value="8" />
                <span>Bachillerato concluido</span>
              </label>
    				</div>

    				<div class="col s3">
              <label>
					        <input class="with-gap" name="grupo4" type="radio" value="9" />
					        <span>Tec. Sup. Universitario</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo4" type="radio" value="10" />
					        <span>Licenciatura incompleta</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo4" type="radio" value="11" />
					        <span>Licenciatura concluida</span><br>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo4" type="radio" value="12" />
					        <span>Especialidad</span>
					      </label>
    				</div>

    				<div class="col s3">
              <label>
					        <input class="with-gap" name="grupo4" type="radio" value="13" />
					        <span>Maestría</span><br>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo4" type="radio" value="14" />
					        <span>Doctorado</span><br>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo4" type="radio" value="15" />
					        <span>Otro</span>
					      </label>

							<div class="input-field cols3">
								<input class="validate" id="gradoesp" type="text" name="especificar14">
								<label for="gradoesp">Especificar</label>
							</div>
    				</div>
				</div>
				<!--Fin Fila7-->
				<!--Inicio Fila8-->
				<div class="center row">

          <div class="input-field col s2" id="civilTutor" name="civilTutor">
            <select name="civilTutor" id="civilTutor">
              <option value="Casado">Casado</option>
              <option value="Soltero">Soltero</option>
              <option value="Otro">Otro</option>
            </select>
            <label>Estado Civil</label>
          </div>
          <!-- Adicion 28 de dic -->
          <div class="input-field col s3">
            <input class="validate" id="ocupacionTutor" type="text" name="ocupacionTutor">
            <label for="ocupacionTutor">Ocupación</label>
          </div>

					<div class="input-field col s3">
						<h7>¿Trabaja?</h7>
						 <div class="switch">
					    <label>No
					      <input type="checkbox" name="trabaja4">
					      <span class="lever"></span>
					      Sí</label>
					  	</div>
	    			</div>

	    			<div class="col s4">
						<p class="range-field">
      				<input type="range" id="hrsemana3" min="0" max="48" name="semana3"/>
      				<label for="hrsemana3">Número de horas a la semana</label>
    				</p>
					</div>
				</div>
        <!--  -->
        <div class="center row">
          <!-- adicion 28 de dic -->
          <div class="input-field col s3">
						<input type="text" class="validate" id="electorTutor" name="electorTutor" >
						<label for="electorTutor">Clave de Elector</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

          <div class="input-field col s3">
						<input type="email" class="validate" id="co" name="correoTutor" >
						<label for="correoTutor">Correo electrónico</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
          <!-- adicion 28 de dic -->
          <div class="input-field col s3">
    				<input class="validate" id="faceTutor" name="faceTutor" type="text" >
    				<label for="faceTutor">Facebook</label>
    				<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    			</div>
          <!-- adicion 28 de dic -->
    			<div class="input-field col s3">
    				<input class="validate" id="TwitterTutor" name="TwitterTutor" type="text" >
    				<label for="TwitterTutor">Twitter</label>
    				<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    			</div>

				</div>
        <!--  -->
				<!--Inicio Fila 1-->
        <div class="row">
          <ul class="collection with-header">
            <li class="collection-header grey lighten-2"><h5 class="center">DATOS DE LA MADRE</h5>

            </ul>
				<div class="row">
					<div class="input-field col s4">
						<input class="validate" id="nom3" type="text" name="nombre3">
						<label for="nom3">Nombre(s)</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="ap2" type="text" name="paterno2">
						<label for="ap2">Apellido Paterno</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="am2" type="text" name="materno2">
						<label for="am2">Apellido Materno</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

          <div class="input-field col s2">
            <input class="validate" id="edadMadre" type="number" min="15" max="100" name="edadMadre">
            <label for="edadMadre">Edad</label>
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
    					<input class="validate" id="lug2" type="text" name="lugar2">
						<label for="lug2">Lugar de Nacimiento</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    				</div>

    				<div class="input-field col s3" id="mun4">
              <input class="validate" id="municipio4" type="text" name="municipio4">

						<label for="municipio4">Municipio</label>
    				</div>

    				<div class="input-field col s3" id="del4">
						        <input class="validate" id="delegacion4" type="text" name="delegacion4">
						<label for="delegacion4">Delegación</label>
    				</div>
				</div>
				<!--Fin Fila 2-->
				<!--Inicio Fila 3-->
				<div class="row">
					<div class="input-field col s3">
              <select name="entidad3" id="ent3">
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

					<div class="input-field col s3" id="pais2">
    					<select name="pais2">
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

            <!--  adicion 28 de dic-->
            <div class="input-field col s3" id="nacionalidadMadre" name="nacionalidadMadre">
      					<select name="nacionalidadMadre" id="tres">
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

						<div class="input-field col s3">
							<input class="validate" id="cur" name="curp2" type="text" pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)" data-length="18" maxlength="18" onkeyup="mayus(this);">
							<label for="cur">CURP</label>
							<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
						</div>
				</div>
				<!--Fin Fila 3-->
				<!--Inicio Fila 4-->
				<div class="row">
					<div class="col s3">
    					<label>
					        <input class="with-gap" name="grupo1" type="radio" value="1" />
					        <span>Sin estudios</span><br>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio" value="2" />
					        <span>Primaria incompleta</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio" value="3" />
					        <span>Primaria concluida</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio" value="4" />
					        <span>Secundaria incompleta</span>
					      </label>
    				</div>

					<div class="col s3">
    					<label>
					        <input class="with-gap" name="grupo1" type="radio" value="5" />
					        <span>Secundaria concluida</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio" value="6" />
					        <span>Carrera Técnica</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio" value="7" />
					        <span>Bachillerato incompleto</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio" value="8" />
					        <span>Bachillerato concluido</span>
					      </label>
    				</div>

    				<div class="col s3">
    					<label>
					        <input class="with-gap" name="grupo1" type="radio" value="9" />
					        <span>Tec. Sup. Universitario</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio" value="10" />
					        <span>Licenciatura incompleta</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio" value="11" />
					        <span>Licenciatura concluida</span><br>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio" value="12" />
					        <span>Especialidad</span>
					      </label>
    				</div>

    				<div class="col s3">
    					<label>
					        <input class="with-gap" name="grupo1" type="radio" value="13" />
					        <span>Maestría</span><br>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio" value="14" />
					        <span>Doctorado</span><br>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo1" type="radio" value="15" />
					        <span>Otro</span>
					      </label>

                <div class="input-field cols3">
                  <input class="validate" id="gradoesp" type="text" name="especificar14">
                  <label for="gradoesp">Especificar</label>
                </div>
    				</div>
				</div>
				<!--Fin Fila 4-->
				<!--Inicio Fila 5-->
				<div class="row">
          <!--  adicion 28 dic-->
          <div class="input-field col s2" id="civilMadre" name="civilMadre">
            <select name="civilMadre" id="civilMadre">
              <option value="Casado">Casado</option>
              <option value="Soltero">Soltero</option>
              <option value="Otro">Otro</option>
            </select>
            <label>Estado Civil</label>
          </div>

          <!-- Adicion 28 de dic -->
          <div class="input-field col s3">
            <input class="validate" id="ocupacionMadre" type="text" name="ocupacionMadre">
            <label for="ocupacionMadre">Ocupación</label>
          </div>

					<div class="input-field col s3 center">
						<h7>¿Trabaja?</h7>
							<div class="switch">
					    		<label>No
					      		<input type="checkbox" name="trabaja" value="1">
					      		<span class="lever"></span>
					      		Sí</label>
							</div>
	    		</div>

	    			<div class="col s4">
						<p class="range-field">
      					<input type="range" id="hrsemana" min="0" max="48" name="semana"/>
      					<label for="hrsemana">Número de horas a la semana</label>
    					</p>
						</div>
			</div>
				<!--Fin Fila 5-->

				<!--Inicio Fila 6-->
				<div class="row">
          <!-- adicion 28 de dic -->
          <div class="input-field col s3">
						<input type="text" class="validate" id="electorMadre" name="electorMadre" >
						<label for="electorMadre">Clave de Elector</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="tel2" type="tel" name="telefono2" data-length="12" maxlength="12">
						<label for="tel2">Teléfono de casa</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="tel3" type="tel" name="telefono3" data-length="12" maxlength="12">
						<label for="tel3">Teléfono de trabajo</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="cel2" type="tel" name="celular2" data-length="10" maxlength="10">
						<label for="cel2">Teléfono de celular</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
				</div>
				<!--Fin Fila 7-->
        <div class="center row">
          <div class="input-field col s4">
						<input type="email" class="validate" id="co" name="correoMadre" >
						<label for="correoMadre">Correo electrónico</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
          <!-- adicion 28 de dic -->
          <div class="input-field col s4">
    				<input class="validate" id="faceMadre" name="faceMadre" type="text" >
    				<label for="faceMadre">Facebook</label>
    				<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    			</div>
          <!-- adicion 28 de dic -->
    			<div class="input-field col s4">
    				<input class="validate" id="TwitterMadre" name="TwitterMadre" type="text" >
    				<label for="TwitterMadre">Twitter</label>
    				<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    			</div>

				</div>
				<!--Encabezado-->
				<ul class="collection with-header">
	        	<li class="collection-header grey lighten-2"><h5 class="center">DATOS DEL PADRE</h5></li></ul>
				<!--Inicio Fila 8-->
				<div class="row">
					<div class="input-field col s4">
						<input class="validate" id="nom4" type="text" name="nombre4">
						<label for="nom4">Nombre</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="ap3"  name="paterno3" type="text">
						<label for="ap3">Apellido Paterno</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="am3" name="materno3" type="text">
						<label for="am3">Apellido Materno</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
          <!-- adicion 28 de dic -->
          <div class="input-field col s2">
            <input class="validate" id="edadPadre" type="number" min="15" max="100" name="edadPadre" >
            <label for="edadPadre">Edad</label>
            <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
          </div>
				</div>
				<!--Fin Fila 8-->
				<!--Inicio Fila 9-->
				<div class="row">
					<div class="input-field col s3">
  					<input type="text" class="datepicker" id="nac3" name="nacimiento3">
						<label for="nac3">Fecha de Nacimiento</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

    				<div class="input-field col s3">
							<input class="validate" id="lug3" type="text" name="lugar3">
							<label for="lug3">Lugar de Nacimiento</label>
							<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    				</div>

            <div class="input-field col s3" id="mun5">
              <input class="validate" id="municipio5" type="text" name="municipio5">
						<label for="municipio5">Municipio</label>
    				</div>

    				<div class="input-field col s3" id="del5">
						  <input class="validate" id="delegacion5" type="text" name="delegacion5">
						<label for="delegacion5">Delegación</label>
    				</div>
				</div>
				<!--Fin Fila 9-->
				<!--Inicio Fila 10-->
				<div class="row">
					<div class="input-field col s3">
            <select class="" name="entidad4" id="tres">
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
						<label for="ent4">Entidad Federativa</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    				</div>

					<div class="input-field col s3">
    					<select name="pais3">
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

            <!--  adicion 28 de dic-->
            <div class="input-field col s3" id="nacionalidadPadre" name="nacionalidadPadre">
                <select name="nacionalidadPadre" id="tres">
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

    				<div class="input-field col s3">
							<input class="validate" id="cu" name="curp3" type="text" pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)" data-length="18" maxlength="18" onkeyup="mayus(this);">
							<label for="cu">CURP</label>
							<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
				</div>
				<!--Fin Fila 10-->
				<!--Inicio Fila 11-->
				<div class="row">
					<div class="col s3">
    					<label>
					        <input class="with-gap" name="grupo2" type="radio" value="1" />
					        <span>Sin estudios</span><br>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio" value="2"  />
					        <span>Primaria incompleta</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio" value="3" />
					        <span>Primaria concluida</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio" value="4" />
					        <span>Secundaria incompleta</span>
					      </label>
    				</div>

					<div class="col s3">
    					<label>
					        <input class="with-gap" name="grupo2" type="radio" value="5" />
					        <span>Secundaria concluida</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio" value="6" />
					        <span>Carrera Técnica</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio" value="7" />
					        <span>Bachillerato incompleto</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio" value="8" />
					        <span>Bachillerato concluido</span>
					      </label>
    				</div>

    				<div class="col s3">
    					<label>
					        <input class="with-gap" name="grupo2" type="radio" value="9" />
					        <span>Tec. Sup. Universitario</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio" value="10" />
					        <span>Licenciatura incompleta</span>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio" value="11" />
					        <span>Licenciatura concluida</span><br>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio" value="12" />
					        <span>Especialidad</span>
					      </label>
    				</div>

    				<div class="col s3">
    					<label>
					        <input class="with-gap" name="grupo2" type="radio" value="13" />
					        <span>Maestría</span><br>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio" value="14" />
					        <span>Doctorado</span><br>
					      </label>

					    <label>
					        <input class="with-gap" name="grupo2" type="radio" value="15" />
					        <span>Otro</span>
					      </label>
    				</div>
				</div>
				<!--Fin Fila 11-->
				<!--Inicio Fila 12-->
				<div class="row">

          <div class="input-field col s2" id="civilPadre" name="civilPadre">
            <select name="civilPadre" id="civilPadre">
              <option value="Casado">Casado</option>
              <option value="Soltero">Soltero</option>
              <option value="Otro">Otro</option>
            </select>
            <label>Estado Civil</label>
          </div>

          <!-- Adicion 28 de dic -->
          <div class="input-field col s3">
            <input class="validate" id="ocupacionPadre" type="text" name="ocupacionPadre">
            <label for="ocupacionPadre">Ocupación</label>
          </div>

					<div class="col s3 center">
						<h7>¿Trabaja?</h7>
						 	<div class="switch">
					    	<label>No
					      <input type="checkbox" name="trabaja3">
					      <span class="lever"></span>
								Sí</label>
					  	</div>
	    			</div>

	    			<div class="input-field col s4">
							<p class="range-field">
      					<input type="range" id="hrsemana2" min="0" max="48" name="semana2"/>
      					<label for="hrsemana2">Número de horas a la semana</label>
    					</p>
					</div>
				</div>
				<!--Fin Fila 12-->
				<!--Inicio Fila 13-->
				<div class="row">
          <!-- adicion 28 de dic -->
          <div class="input-field col s3">
						<input type="text" class="validate" id="electorPadre" name="electorPadre" >
						<label for="electorPadre">Clave de Elector</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="tel4" type="tel" name="telefono4" data-length="12" maxlength="12">
						<label for="tel4">Teléfono de casa</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="tel5" type="tel" name="telefono5" data-length="12" maxlength="12">
						<label for="tel5">Teléfono del trabajo</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="cel3" type="tel" name="celular3" data-length="10" maxlength="10">
						<label for="cel3">Teléfono de celular</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
				</div>
				<!--Fin Fila 13-->
        <div class="center row">
          <div class="input-field col s4">
						<input type="email" class="validate" id="co" name="correoPadre" >
						<label for="correoPadre">Correo electrónico</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
          <!-- adicion 28 de dic -->
          <div class="input-field col s4">
    				<input class="validate" id="facePadre" name="facePadre" type="text" >
    				<label for="facePadre">Facebook</label>
    				<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    			</div>
          <!-- adicion 28 de dic -->
    			<div class="input-field col s4">
    				<input class="validate" id="TwitterPadre" name="TwitterPadre" type="text" >
    				<label for="TwitterPadre">Twitter</label>
    				<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    			</div>

				</div>
<!--  -->
<!--En caso de que el padre, madre o tutor no viva con el alumno se llena este apartado-->
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><h4>En caso de que los padres o tutor no vivan con el alumno llenar lo siguiente dando click aquí</h4></div>
            <div class="collapsible-body">
              <div class="row">
                <ul class="collection with-header"><li class="collection-header grey lighten-2"><h5 class="center">DOMICILIO DEL TUTOR ESCOLAR</h5></li></ul>
                <div class="input-field col s4">
                  <input class="validate" id="cal" type="text" name="calle1Tutor">
                  <label for="cal">Calle</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>

                <div class="input-field col s2">
                  <input class="validate" id="ext" type="number" name="exterior1Tutor">
                  <label for="ext">No. Exterior</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>

                <div class="input-field col s2">
                  <input class="validate" id="int" type="number" name="interior1Tutor">
                  <label for="int">No. Interior</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>

                <div class="input-field col s4">
                  <input class="validate" id="col" type="text" name="colonia1Tutor">
                  <label for="col">Colonia</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s4" id="c1">
                  <input type="text" name="entrec1Tutor" id="c1" class="validate">
                  <label for="c1">Entre calle</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>

                <div class="input-field col s4" id="c2">
                  <input type="text" name="entrec2Tutor" id="c2" class="validate">
                  <label for="c2">Y calle</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>

                <div class="input-field col s4" id="ref">
                  <input type="text" name="referenciaTutor" id="c2" class="validate">
                  <label for="ref">Referencia</label>
                  <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <!--Termina domicilio padre, madre, tutor-->
<!--  -->
        <ul class="collection with-header">
	        	<li class="collection-header grey lighten-2"><h5 class="center">INGRESOS FAMILIARES</h5></li></ul>
				<!--Inicio Fila 14-->
				<div class="row">
					<div class="input-field col s12">
						<select name="ingresos1" id="ingresos1">
      					<option value=0 disabled selected>Elige una opción</option>
      					<option value=1>1</option>
					      <option value=2>2</option>
					      <option value=3>3</option>
					      <option value=4>4</option>
					      <option value=5>5 o más</option>
					    </select>
    					<label>¿Cuántas personas que viven en su casa tienen ingresos?</label>
					</div>
				</div>
				<!--Fin Fila 14-->
				<!--Inicio Fila 15-->
				<div class="row">
					<div class="input-field col s8">
						<select name="economico1" id="economico1">
	      				<option value="0" disabled selected>Elige una opción</option>
	      				<option value="1">Padre</option>
						    <option value="2">Madre</option>
						    <option value="3">Hermano(a)</option>
						    <option value="8">Otro</option>
						</select>
	    			<label>¿De quién depende económicamente?</label>
    				</div>

					<div class="input-field col s4">
						<input class="validate" id="especificar3" name="especificar3" type="text">
						<label for="especificar3">Otro, especificar</label>
					</div>
				</div>
				<!--Fin Fila 15-->
        <!--ADICCIÓN TABLA DE DATOS FAMILIARES-->
        <!--Encabezado-->
        <ul class="collection with-header" id="df"><li class="collection-header grey lighten-2"><h5 class="center">DATOS FAMILIARES   <a href="#datosFamiliares" class="btn-floating btn-large waves-effect waves-light teal accent-3 modal-trigger"><i class="material-icons">add</i></a>       </h5><p class="center">(Únicamente proporcione los datos de las personas que viven en la misma casa)</p></li></ul>
        <div id="tablaFamiliares">
          <table class="responsive-table" >
            <thead class="orange">
              <tr>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombre</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th>Ocupación</th>
                <th>Parentesco</th>
                <th>Grado máx de estudios</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

            </tbody>
          </table>

        </div>
    </ul>
    </div>


        <!--Continua normal-->
				<!--Encabezado-->

				<!--Encabezado-->
				<ul class="collection with-header">
	        	<li class="collection-header grey lighten-2"><h5 class="center">INGRESOS FAMILIARES MENSUALES   <a href="#ingreso" class="btn-floating btn-large waves-effect waves-light teal accent-3 modal-trigger"><i class="material-icons">add</i></a></h5></li></ul>


        <div id="tablaIngresos">
          <table class="responsive-table" >
            <thead class="orange">
              <tr>
                <th>Persona con ingresos económicos</th>
                <th>Ingreso mensual en pesos</th>
                <th>Porcentaje destinado al gasto familiar</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>

            </tbody>
          </table>

        </div>
			<div class="row center">
				<input type="submit" value="Guardar/Siguiente" id="btn2" class="btn btn-large center">
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
	        <input class="validate" type="text" id="ingresos2" name="ingresos2" required>
	        <label for="ingresos2">Persona con ingresos</label>
					<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
	      </div><br>

				<i class="material-icons prefix left">attach_money</i>
				<select class="left" id="ingresos3" name="ingresos3">
						<option value="0" disabled selected>Ingreso mensual</option>
						<option value="1">Hasta $2,000</option>
            <option value="2">$2,001 a $6,000</option>
            <option value="3">$6,001 a $10,000</option>
            <option value="4">$10,001 a $20,000</option>
            <option value="5">$20,001 a $30,000</option>
            <option value="6">Más de $30,000</option>
				</select>

				<!-- <label>¿De quién depende económicamente?</label> -->
        <br>
				<div class="input-field">
	        <i class="material-icons prefix">pie_chart</i>
	        <input class="validate" type="number" id="porcentaje" name="porcentaje" min="0" max="100" required>
	        <label for="porcentaje">Porcentaje destinado al gasto familiar</label>
					<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
	      </div><br>

	      <input type="submit" value="Guardar" onclick="return modal2()" class="btn btn-large">
	    <?php echo form_close(); ?>
	  </div>
	</div>

  <div class="modal" id="datosFamiliares" name='datosFamiliares'>
    <h5 class="modal-close right">&#10005;</h5>
    <div class="modal-content center">
      <h4>Datos familiares</h4><br>
        <?php echo form_open(""); ?>
        <!-- <form class="" action="" method="post" name="modal1" id="modal1"> -->
        <div class="input-field">
          <i class="material-icons prefix">person</i>
          <input type="text" id="apeP" name="modalPAterno" class="validate" required>
          <label for="apeP">Apellido Paterno</label>
          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
        </div><br>

        <div class="input-field">
          <i class="material-icons prefix">person</i>
          <input type="text" id="apeM" name="modalMaterno" class="validate" required>
          <label for="apeM">Apellido Materno</label>
          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
        </div><br>

        <div class="input-field">
          <i class="material-icons prefix">perm_identity</i>
          <input type="text" id="nom2" name="nombre2" class="validate" required>
          <label for="nom2">Nombres</label>
          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
        </div><br>

        <div class="input-field">
          <i class="material-icons prefix">timer</i>
          <input type="number" id="ed" name="edad1" max="100" min="1" required step="1" class="validate">
          <label for="ed">Edad</label>
          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
        </div><br>

        <div class="input-field">
          <i class="material-icons prefix">work</i>
          <input type="text" id="ocu2" name="ocupacion2" class="validate" required>
          <label for="ocu2">Ocupacion</label>
          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
        </div><br>
        <!-- revisar modal parentescos -->

          <i class="material-icons prefix left">group</i>
          <select id="parentesco1" name="parentesco1" required>
            <option value="0" disabled selected>Parentesco</option>
            <option value=1>Padre</option>
            <option value=2>Madre</option>
            <option value=3>Hermano(a)</option>
            <option value=4>Tío(a)</option>
            <option value=5>Primo(a)</option>
            <option value=6>Abuelo(a)</option>
            <option value=7>Sobrino(a)</option>
            <option value=8>Cuñado(a)</option>
          </select>
          <!-- <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span> -->

          <br><br>
          <i class="material-icons prefix left">school</i>
          <select  id="est" name="estudios1" id="estudios1" required>
            <option value="0" disabled selected>Grado de estudio</option>
            <option value=1>Sin estudios</option>
            <option value=2>Primaria incompleta</option>
            <option value=3>Primaria concluída</option>
            <option value=4>Secundaria incompleta</option>
            <option value=5>Secundaria concluída</option>
            <option value=6>Carrera técnica</option>
            <option value=7>Bachillerato incompleto</option>
            <option value=8>Bachillerato concluído</option>
            <option value=9>Tec. Sup. Universitario</option>
            <option value=10>Licenciatura incompleta</option>
            <option value=11>Licenciatura concluída</option>
            <option value=12>Especialidad</option>
            <option value=13>Maestría</option>
            <option value=14>Doctorado</option>
          </select>
          <label for="est">Grado máximo de estudios</label>
          <!-- <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span> -->


        <div>
          <i class="material-icons prefix">wc</i><br />
          <label>
                <input class="with-gap" id="sexF" name="sexo2" type="radio" value="F"/>
                <span>Femenino</span>
              </label>

              <label>
                <input class="with-gap" id="sexM" name="sexo2" type="radio" value="M"/>
                <span>Masculino</span>
              </label>
        </div><br />
<!-- class="btn btn-large" -->
        <input type="submit" onclick="return modal1()"  value="Guardar"  class="btn btn-Large">
      <?php echo form_close(); ?>

      </form>
    </div>
  </div>
