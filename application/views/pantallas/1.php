<!DOCTYPE html>
<html lang="es">
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
	        <li class="collection-header grey"><h4 class="center">DATOS GENERALES DEL ESTUDIANTE</h4>
	        	<p class="center">Los datos que proporcione será utilizados únicamente en el área de Orientación</p></li>
			<!--Inicio del formulario-->
			<form action="" class="col s12">
				<!-- Inicio Fila 1-->
				<div class="row">
					<div class="input-field col s4">
						<input class="validate" id="nombre" type="text" name="nombre1" required>
						<label for="nombre">Nombre</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s4">
						<input class="validate" id="ap" type="text" name="paterno1" required>
						<label for="ap">Apellido Paterno</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s4">
						<input class="validate" id="am" type="text" name="materno1" required>
						<label for="am">Apellido Materno</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
				</div>
				<!-- Fin Fila 1-->
				<!-- Inicio Fila 2-->
				<div class="row">
					<div class="input-field col s4">
  						<input type="text" class="datepicker" id="nac" name="nacimiento1" required>
						<label for="nac">Fecha de Nacimiento</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="col s4">
						<h7>Sexo</h7>
					 	<p><label>
        					<input class="with-gap center" name="sexo1" type="radio" value="F"/>
        					<span>Femenino</span>
      					</label></p>

      					<p><label>
        					<input class="with-gap center" name="sexo1" type="radio" value="M"/>
        					<span>Masculino</span>
      					</label></p>
    				</div>

    				<div class="input-field col s4">
    					<input class="validate" id="lug" type="text" name="lugar1" required>
						<label for="lug">Lugar de Nacimiento</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    				</div>
				</div>
				<!--Fin Fila 2-->
				<!--Inicio Fila 3-->
				<div class="row">
    				<div class="input-field col s4">
    					<input class="validate" id="mun" type="text" name="municipio1" required>
						<label for="mun">Delegación o Municipio</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    				</div>

					<div class="input-field col s4">
			          <input type="text" id="ent" class="autocomplete validate" name="entidad1" required>
			          <label for="ent">Entidad Federativa</label>
			          <span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
    				</div>

					<div class="input-field col s4">
    					<select >
      					<option value="" disabled selected>Elige una opción</option>
								<option value="Afganistán" id="AF">Afganistán</option>
								<option value="Albania" id="AL">Albania</option>
								<option value="Alemania" id="DE">Alemania</option>
								<option value="Andorra" id="AD">Andorra</option>
								<option value="Angola" id="AO">Angola</option>
								<option value="Anguila" id="AI">Anguila</option>
								<option value="Antártida" id="AQ">Antártida</option>
								<option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
								<option value="Antillas holandesas" id="AN">Antillas holandesas</option>
								<option value="Arabia Saudí" id="SA">Arabia Saudí</option>
								<option value="Argelia" id="DZ">Argelia</option>
								<option value="Argentina" id="AR">Argentina</option>
								<option value="Armenia" id="AM">Armenia</option>
								<option value="Aruba" id="AW">Aruba</option>
								<option value="Australia" id="AU">Australia</option>
								<option value="Austria" id="AT">Austria</option>
								<option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
								<option value="Bahamas" id="BS">Bahamas</option>
								<option value="Bahrein" id="BH">Bahrein</option>
								<option value="Bangladesh" id="BD">Bangladesh</option>
								<option value="Barbados" id="BB">Barbados</option>
								<option value="Bélgica" id="BE">Bélgica</option>
								<option value="Belice" id="BZ">Belice</option>
								<option value="Benín" id="BJ">Benín</option>
								<option value="Bermudas" id="BM">Bermudas</option>
								<option value="Bhután" id="BT">Bhután</option>
								<option value="Bielorrusia" id="BY">Bielorrusia</option>
								<option value="Birmania" id="MM">Birmania</option>
								<option value="Bolivia" id="BO">Bolivia</option>
								<option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
								<option value="Botsuana" id="BW">Botsuana</option>
								<option value="Brasil" id="BR">Brasil</option>
								<option value="Brunei" id="BN">Brunei</option>
								<option value="Bulgaria" id="BG">Bulgaria</option>
								<option value="Burkina Faso" id="BF">Burkina Faso</option>
								<option value="Burundi" id="BI">Burundi</option>
								<option value="Cabo Verde" id="CV">Cabo Verde</option>
								<option value="Camboya" id="KH">Camboya</option>
								<option value="Camerún" id="CM">Camerún</option>
								<option value="Canadá" id="CA">Canadá</option>
								<option value="Chad" id="TD">Chad</option>
								<option value="Chile" id="CL">Chile</option>
								<option value="China" id="CN">China</option>
								<option value="Chipre" id="CY">Chipre</option>
								<option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
								<option value="Colombia" id="CO">Colombia</option>
								<option value="Comores" id="KM">Comores</option>
								<option value="Congo" id="CG">Congo</option>
								<option value="Corea" id="KR">Corea</option>
								<option value="Corea del Norte" id="KP">Corea del Norte</option>
								<option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
								<option value="Costa Rica" id="CR">Costa Rica</option>
								<option value="Croacia" id="HR">Croacia</option>
								<option value="Cuba" id="CU">Cuba</option>
								<option value="Dinamarca" id="DK">Dinamarca</option>
								<option value="Djibouri" id="DJ">Djibouri</option>
								<option value="Dominica" id="DM">Dominica</option>
								<option value="Ecuador" id="EC">Ecuador</option>
								<option value="Egipto" id="EG">Egipto</option>
								<option value="El Salvador" id="SV">El Salvador</option>
								<option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
								<option value="Eritrea" id="ER">Eritrea</option>
								<option value="Eslovaquia" id="SK">Eslovaquia</option>
								<option value="Eslovenia" id="SI">Eslovenia</option>
								<option value="España" id="ES">España</option>
								<option value="Estados Unidos" id="US">Estados Unidos</option>
								<option value="Estonia" id="EE">Estonia</option>
								<option value="c" id="ET">Etiopía</option>
								<option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
								<option value="Filipinas" id="PH">Filipinas</option>
								<option value="Finlandia" id="FI">Finlandia</option>
								<option value="Francia" id="FR">Francia</option>
								<option value="Gabón" id="GA">Gabón</option>
								<option value="Gambia" id="GM">Gambia</option>
								<option value="Georgia" id="GE">Georgia</option>
								<option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
								<option value="Ghana" id="GH">Ghana</option>
								<option value="Gibraltar" id="GI">Gibraltar</option>
								<option value="Granada" id="GD">Granada</option>
								<option value="Grecia" id="GR">Grecia</option>
								<option value="Groenlandia" id="GL">Groenlandia</option>
								<option value="Guadalupe" id="GP">Guadalupe</option>
								<option value="Guam" id="GU">Guam</option>
								<option value="Guatemala" id="GT">Guatemala</option>
								<option value="Guayana" id="GY">Guayana</option>
								<option value="Guayana francesa" id="GF">Guayana francesa</option>
								<option value="Guinea" id="GN">Guinea</option>
								<option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
								<option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
								<option value="Haití" id="HT">Haití</option>
								<option value="Holanda" id="NL">Holanda</option>
								<option value="Honduras" id="HN">Honduras</option>
								<option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
								<option value="Hungría" id="HU">Hungría</option>
								<option value="India" id="IN">India</option>
								<option value="Indonesia" id="ID">Indonesia</option>
								<option value="Irak" id="IQ">Irak</option>
								<option value="Irán" id="IR">Irán</option>
								<option value="Irlanda" id="IE">Irlanda</option>
								<option value="Isla Bouvet" id="BV">Isla Bouvet</option>
								<option value="Isla Christmas" id="CX">Isla Christmas</option>
								<option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
								<option value="Islandia" id="IS">Islandia</option>
								<option value="Islas Caimán" id="KY">Islas Caimán</option>
								<option value="Islas Cook" id="CK">Islas Cook</option>
								<option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
								<option value="Islas Faroe" id="FO">Islas Faroe</option>
								<option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
								<option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
								<option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
								<option value="Islas Marshall" id="MH">Islas Marshall</option>
								<option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
								<option value="Islas Palau" id="PW">Islas Palau</option>
								<option value="Islas Salomón" d="SB">Islas Salomón</option>
								<option value="Islas Tokelau" id="TK">Islas Tokelau</option>
								<option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
								<option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
								<option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
								<option value="Israel" id="IL">Israel</option>
								<option value="Italia" id="IT">Italia</option>
								<option value="Jamaica" id="JM">Jamaica</option>
								<option value="Japón" id="JP">Japón</option>
								<option value="Jordania" id="JO">Jordania</option>
								<option value="Kazajistán" id="KZ">Kazajistán</option>
								<option value="Kenia" id="KE">Kenia</option>
								<option value="Kirguizistán" id="KG">Kirguizistán</option>
								<option value="Kiribati" id="KI">Kiribati</option>
								<option value="Kuwait" id="KW">Kuwait</option>
								<option value="Laos" id="LA">Laos</option>
								<option value="Lesoto" id="LS">Lesoto</option>
								<option value="Letonia" id="LV">Letonia</option>
								<option value="Líbano" id="LB">Líbano</option>
								<option value="Liberia" id="LR">Liberia</option>
								<option value="Libia" id="LY">Libia</option>
								<option value="Liechtenstein" id="LI">Liechtenstein</option>
								<option value="Lituania" id="LT">Lituania</option>
								<option value="Luxemburgo" id="LU">Luxemburgo</option>
								<option value="Macao R. A. E" id="MO">Macao R. A. E</option>
								<option value="Madagascar" id="MG">Madagascar</option>
								<option value="Malasia" id="MY">Malasia</option>
								<option value="Malawi" id="MW">Malawi</option>
								<option value="Maldivas" id="MV">Maldivas</option>
								<option value="Malí" id="ML">Malí</option>
								<option value="Malta" id="MT">Malta</option>
								<option value="Marruecos" id="MA">Marruecos</option>
								<option value="Martinica" id="MQ">Martinica</option>
								<option value="Mauricio" id="MU">Mauricio</option>
								<option value="Mauritania" id="MR">Mauritania</option>
								<option value="Mayotte" id="YT">Mayotte</option>
								<option value="México" id="MX">México</option>
								<option value="Micronesia" id="FM">Micronesia</option>
								<option value="Moldavia" id="MD">Moldavia</option>
								<option value="Mónaco" id="MC">Mónaco</option>
								<option value="Mongolia" id="MN">Mongolia</option>
								<option value="Montserrat" id="MS">Montserrat</option>
								<option value="Mozambique" id="MZ">Mozambique</option>
								<option value="Namibia" id="NA">Namibia</option>
								<option value="Nauru" id="NR">Nauru</option>
								<option value="Nepal" id="NP">Nepal</option>
								<option value="Nicaragua" id="NI">Nicaragua</option>
								<option value="Níger" id="NE">Níger</option>
								<option value="Nigeria" id="NG">Nigeria</option>
								<option value="Niue" id="NU">Niue</option>
								<option value="Norfolk" id="NF">Norfolk</option>
								<option value="Noruega" id="NO">Noruega</option>
								<option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
								<option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
								<option value="Omán" id="OM">Omán</option>
								<option value="Panamá" id="PA">Panamá</option>
								<option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
								<option value="Paquistán" id="PK">Paquistán</option>
								<option value="Paraguay" id="PY">Paraguay</option>
								<option value="Perú" id="PE">Perú</option>
								<option value="Pitcairn" id="PN">Pitcairn</option>
								<option value="Polinesia francesa" id="PF">Polinesia francesa</option>
								<option value="Polonia" id="PL">Polonia</option>
								<option value="Portugal" id="PT">Portugal</option>
								<option value="Puerto Rico" id="PR">Puerto Rico</option>
								<option value="Qatar" id="QA">Qatar</option>
								<option value="Reino Unido" id="UK">Reino Unido</option>
								<option value="República Centroafricana" id="CF">República Centroafricana</option>
								<option value="República Checa" id="CZ">República Checa</option>
								<option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
								<option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
								<option value="República Dominicana" id="DO">República Dominicana</option>
								<option value="Reunión" id="RE">Reunión</option>
								<option value="Ruanda" id="RW">Ruanda</option>
								<option value="Rumania" id="RO">Rumania</option>
								<option value="Rusia" id="RU">Rusia</option>
								<option value="Samoa" id="WS">Samoa</option>
								<option value="Samoa occidental" id="AS">Samoa occidental</option>
								<option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
								<option value="San Marino" id="SM">San Marino</option>
								<option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
								<option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
								<option value="Santa Helena" id="SH">Santa Helena</option>
								<option value="Santa Lucía" id="LC">Santa Lucía</option>
								<option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
								<option value="Senegal" id="SN">Senegal</option>
								<option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
								<option value="Sychelles" id="SC">Seychelles</option>
								<option value="Sierra Leona" id="SL">Sierra Leona</option>
								<option value="Singapur" id="SG">Singapur</option>
								<option value="Siria" id="SY">Siria</option>
								<option value="Somalia" id="SO">Somalia</option>
								<option value="Sri Lanka" id="LK">Sri Lanka</option>
								<option value="Suazilandia" id="SZ">Suazilandia</option>
								<option value="Sudán" id="SD">Sudán</option>
								<option value="Suecia" id="SE">Suecia</option>
								<option value="Suiza" id="CH">Suiza</option>
								<option value="Surinam" id="SR">Surinam</option>
								<option value="Svalbard" id="SJ">Svalbard</option>
								<option value="Tailandia" id="TH">Tailandia</option>
								<option value="Taiwán" id="TW">Taiwán</option>
								<option value="Tanzania" id="TZ">Tanzania</option>
								<option value="Tayikistán" id="TJ">Tayikistán</option>
								<option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
								<option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
								<option value="Timor Oriental" id="TP">Timor Oriental</option>
								<option value="Togo" id="TG">Togo</option>
								<option value="Tonga" id="TO">Tonga</option>
								<option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
								<option value="Túnez" id="TN">Túnez</option>
								<option value="Turkmenistán" id="TM">Turkmenistán</option>
								<option value="Turquía" id="TR">Turquía</option>
								<option value="Tuvalu" id="TV">Tuvalu</option>
								<option value="Ucrania" id="UA">Ucrania</option>
								<option value="Uganda" id="UG">Uganda</option>
								<option value="Uruguay" id="UY">Uruguay</option>
								<option value="Uzbekistán" id="UZ">Uzbekistán</option>
								<option value="Vanuatu" id="VU">Vanuatu</option>
								<option value="Venezuela" id="VE">Venezuela</option>
								<option value="Vietnam" id="VN">Vietnam</option>
								<option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
								<option value="Yemen" id="YE">Yemen</option>
								<option value="Zambia" id="ZM">Zambia</option>
								<option value="Zimbabue" id="ZW">Zimbabue</option>
					    </select>
    					<label>País</label>
    				</div>
				</div>
				<!--Fin Fila 3-->
				<!--Inicio Fila 4-->
				<div class="row">
					<div class="input-field col s8">
    					<select>
      						<option value="" disabled selected>Elige una opción</option>
      						<!-- REVISAR POR QUE AUN FALTAN NACIONALIDADES
      						<option value="Afgano">Afgano</option>
					      	<option value="Albanés">Albanés</option>
					      	<option value="Argelino">Argelino</option>
					      	<option value="Americano">Americano</option>
					      	<option value="Andorrano">Andorrano</option>
					      	<option value="Angoleño">Angoleño</option>
					      	<option value="Antiguano">Antiguano</option>
					      	<option value="Argentino">Argentino</option>
					      	<option value="Armenio">Armenio</option>
					      	<option value="Australiano">Australiano</option>
					      	<option value="Austriaco">Austriaco</option>
					      	<option value="Azerbaiyán">Azerbaiyán</option>
					      	<option value="Bahamian">Bahamian</option>
					      	<option value="Bahraini">Bahraini</option>
					      	<option value="Bangladeshi">Bangladeshi</option>
					      	<option value="Barbados">Barbados</option>
					      	<option value="Barbudans">Barbudans</option>
					      	<option value="Batswana">Batswana</option>
					      	<option value="Bielorruso">Bielorruso</option>
					      	<option value="Belice">Belice</option>
					      	<option value="Beninés">Beninés</option>
					      	<option value="Bhutanese">Bhutanese</option>
					      	<option value="Boliviano">Boliviano</option>
					      	<option value="Bosnio">Bosnio</option>
					      	<option value="Brasileño">Brasileño</option>
					      	<option value="Británico">Británico</option>
					      	<option value="Bruneano">Bruneano</option>
					      	<option value="Búlgaro">Búlgaro</option>
					      	<option value="Burkinabe">Burkinabe</option>
					      	<option value="Birmano">Birmano</option>
					      	<option value="Burundi">Burundi</option>
					      	<option value="Camboyano">Camboyano</option>
					      	<option value="Camerún">Camerún</option>
					      	<option value="Canadiense">Canadiense</option>
					      	<option value="Cabo Verde">Cabo Verde</option>
					      	<option value="Africano central">Africano central</option>
					      	<option value="Chadiano">Chadiano</option>
					      	<option value="Chileno">Chileno</option>
					      	<option value="Chino">Chino</option>
					      	<option value="Colombiano">Colombiano</option>
					      	<option value="Comorano">Comorano</option>
					      	<option value="Congoleño">Congoleño</option>
					      	<option value="Costarricense">Costarricense</option>
					      	<option value="Croata">Croata</option>
					      	<option value="Cubano">Cubano</option>
					      	<option value="Chipriota">Chipriota</option>
					      	<option value="Checo">Checo</option>
					      	<option value="Danés">Danés</option>
					      	<option value="Djibouti">Djibouti</option>
					      	<option value="Dominicano">Dominicano</option>
					      	<option value="Holandés">Holandés</option>
					      	<option value="Timor Oriental">Timor Oriental</option>
					      	<option value="Ecuatoriano">Ecuatoriano</option>
					      	<option value="Egipcio">Egipcio</option>
					      	<option value="Emiriano">Emiriano</option>
					      	<option value="Ecuatorial Guinea">Ecuatorial Guinea</option>
					      	<option value="Estonio">Estonio</option>
					      	<option value="Etíope">Etíope</option>
					      	<option value="Fijiano">Fijiano</option>
					      	<option value="Filipino">Filipino</option>
					      	<option value="Finlandés">Finlandés</option>
					      	<option value="Francés">Francés</option>
					      	<option value="Gabonés">Gabonés</option>
					      	<option value="Gambiano">Gambiano</option>
					      	<option value="Georgiano">Georgiano</option>
					      	<option value="Alemán">Alemán</option>
					      	<option value="Ghanés">Ghanés</option>
					      	<option value="Griego">Griego</option>
					      	<option value="Granadino">Granadino</option>
					      	<option value="Guineano">Guineano</option>
					      	<option value="Guatemalteco">Guatemalteco</option>
					      	<option value="Guyanés">Guyanés</option>
					      	<option value="Haitiano">Haitiano</option>
					      	<option value="Huerzo">Huerzo</option>
					      	<option value="Hondureño">Hondureño</option>
					      	<option value="Húngaro">Húngaro</option>
					      	<option value="Islandés">Islandés</option>
					      	<option value="Indonesio">Indonesio</option>
					      	<option value="Iraní">Iraní</option>
					      	<option value="Iraquí">Iraquí</option>
					      	<option value="Irlandés">Irlandés</option>
					      	<option value="Israelí">Israelí</option>
					      	<option value="Italiano">Italiano</option>
					      	<option value="Marfileño">Marfileño</option>
					      	<option value="Jamaicano">Jamaicano</option>
					      	<option value="Japonés">Japonés</option>
					      	<option value="Jordano">Jordano</option>
					      	<option value="Kazajo">Kazajo</option>
					      	<option value="Keniata">Keniata</option>
					      	<option value="Kuwaití">Kuwaití</option>
					      	<option value="Kirguiz">Kirguiz</option>
					      	<option value="Laosiano">Laosiano</option>
					      	<option value="Letón">Letón</option>
					      	<option value="Libanés">Libanés</option>
					      	<option value="Libio">Libio</option>
					      	<option value="Leichtensteiner">Leichtensteiner</option>
					      	<option value="Luxemburgués">Luxemburgués</option>
					      	<option value="Macedonio">Macedonio</option>
					      	<option value="Malgache">Malgache</option>-->
					      	<option value="Mexicano">México</option>

					    </select>
    					<label>Nacionalidad</label>
    				</div>

					<div class="input-field col s4">
						<input class="validate" id="curp" name="curp1" type="text" pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)" data-length="18" maxlength="18" required onkeyup="mayus(this);">
						<label for="curp">CURP</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
				</div>
				<!--Fin Fila 4-->
				<!--Inicio Fila 5-->
				<div class="row">
					<div class="col s2">
						<ul class="collection"><li class="collection-item">Datos de la escuela en donde cursó el último ciclo escolar</li></ul>
					</div>

					<div class="input-field col s2">
						<input class="validate" id="esc" name="escuela1" type="text" required>
						<label for="esc">Nombre de la escuela</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s2">
						<input class="validate" id="dom" name="domEsc1" type="text" required>
						<label for="dom">Domicilio de la escuela</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="mun2" type="text" name="municipio2" required>
						<label for="mun2">Delegación o Municipio</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="autocomplete validate" id="ent2" type="text" name="entidad2" required>
						<label for="ent2">Entidad Federativa</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
				</div>
				<!--Fin Fila 5-->
				<!--Inicio Fila 6-->
				<div class="row">
					<div class="input-field col s4">
    					<select name="turno1">
      						<option value="" disabled selected>Elige una opción</option>
      						<option value="M">Matutino</option>
					      	<option value="V">Vespertino</option>
					      	<option value="D">Diurno</option>
					    </select>
    					<label>Turno</label>
    				</div>

					<div class="input-field col s8">
    					<select name="promedio1">
      						<option value="" disabled selected>Elige una opción</option>
      						<option value="1">Matutino</option>
					      	<option value="2">Vespertino</option>
					      	<option value="2">Diurno</option>
					    </select>
    					<label>Promedio de calificaciones en el ciclo escolar anterior</label>
    				</div>
				</div>
				<!--Fin Fila 6-->
				<!--Inicio Fila 7-->
				<div class="row">
					<div class="col s4">
						<h7>¿Recibió alguna beca?</h7>
						 <div class="switch">
							<label>No
					      <input type="checkbox" name="beca1">
					      <span class="lever"></span>Sí</label>
					  </div>
	    			</div>

	    			<div class="input-field col s8">
						<input class="validate" id="esp1" type="text" name="especificar1">
						<label for="esp1">Especificar</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
				</div>
				<!--Fin Fila 7-->
				<!--Inicio Fila 8-->
				<div class="row">
					<div class="col s4">
						<h7>¿Trabaja?</h7>
							<div class="switch">
					    	<label>No
					      	<input type="checkbox" name="trabaja1">
					      	<span class="lever"></span>Sí</label>
					  		</div>
	    			</div>

	    			<div class="input-field col s8">
						<input class="validate" id="esp2" type="text" name="especificar2">
						<label for="esp2">Especificar</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
				</div>
				<!--Fin Fila 8-->
				<!--Inicio Fila 9-->
				<div class="row">
					<div class="col s2">
						<ul class="collection"><li class="collection-item">En caso de que su respuesta sea afirmativa conteste lo siguiente:</li></ul>
					</div>

					<div class="input-field col s2">
						<input class="validate" id="emp" type="text" name="empresa1">
						<label for="emp">Nombre de la empresa</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s2">
						<input class="validate" id="ocu" type="text" name="ocupacion">
						<label for="ocu">Puesto u ocupación</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="col s2">
  						<input type="text" id="ini" class="timepicker" name="horaInicio">
						<label for="ini">Hora de inicio</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="col s2">
						<input type="text" id="fin" class="timepicker" name="horaFin">
  						<label for="fin">Hora de fin</label>
					</div>

					<div class="col s2">
						<p class="range-field">
      						<input type="range" id="numh" min="0" max="24" name="horas" />
      						<label for="numh">Número de horas a la semana</label>
    					</p>
					</div>
				</div>
				<!--Fin Fila 9-->
				<!--Encabezado-->
				<ul class="collection with-header"><li class="collection-header grey"><h5 class="center">DOMICILIO DEL ALUMNO</h5></li></ul>
				<!--Fin Encabezado-->
				<!--Inicio Fila 10-->
	        	<div class="row">
					<div class="input-field col s3">
						<input class="validate" id="cal" type="text" name="calle1" required>
						<label for="cal">Calle</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s2">
						<input class="validate" id="ext" type="number" name="exterior1" required>
						<label for="ext">No. Exterior</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s2">
						<input class="validate" id="int" type="number" name="interior1">
						<label for="int">No. Interior</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s2">
						<input class="validate" id="col" type="text" name="colonia1">
						<label for="col">Colonia</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="mun3" type="text" name="municipio3" required>
						<label for="mun3">Delegación o Municipio</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
				</div>
				<!--Fin Fila 10-->
				<!--Inicio Fila 11-->
				<div class="row">
					<div class="input-field col s3">
						<input class="autocomplete validate" id="ent3" type="text" name="entidad3" required>
						<label for="ent3">Entidad Federativa</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="post" name="postal1" type="number" required>
						<label for="post">Código Postal</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="tel" type="tel" name="telefono1" data-length="12" maxlength="12">
						<label for="tel">Teléfono de casa</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>

					<div class="input-field col s3">
						<input class="validate" id="cel" type="tel" name="celular1" data-length="10" maxlength="10">
						<label for="cel">Teléfono de celular</label>
						<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
					</div>
				</div>
				<!--Fin Fila 11-->
				<!--Encabezado-->
				<ul class="collection with-header"><li class="collection-header grey"><h5 class="center">DATOS FAMILIARES   <a href="#datosFamiliares" class="btn-floating btn-large waves-effect waves-light teal accent-3 modal-trigger"><i class="material-icons">add</i></a>       </h5><p class="center">(Únicamente proporcione los datos de las personas que viven en la misma casa)</p></li></ul>
				<table class="responsive-table">
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
			</form><!------------------------------------------------------>
			<!------------------------------------------------------>
			<!------------------------------------------------------>
			<!------------------------------------------------------>
			<!------------------------------------------------------>
			<!------------------------------------------------------>
			<!------------------------------------------------------>
			<!------------------------------------------------------>
			<!--Fin del formulario-->
		</ul>
		</div>

		<ul class="pagination center">
		    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
		    <li class="active"><a href="#!">1</a></li>
		    <li class="waves-effect"><a href="<?php base_url()?>dos">2</a></li>
		    <li class="waves-effect"><a href="3.php">3</a></li>
		    <li class="waves-effect"><a href="#!">4</a></li>
		    <li class="waves-effect"><a href="#!">5</a></li>
		    <li class="waves-effect"><a href="#!">6</a></li>
		    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
		</ul>
	</div> <!--Fin del contenedor-->

	<div class="modal" id="datosFamiliares">
	  <h5 class="modal-close right">&#10005;</h5>
	  <div class="modal-content center">
	    <h4>Datos familiares</h4><br>
	      <?php echo form_open(""); ?>
	      <div class="input-field">
	        <i class="material-icons prefix">person</i>
	        <input type="text" id="ape" name="apellidos">
	        <label for="ape">Apellidos</label>
	      </div><br>

	      <div class="input-field">
	        <i class="material-icons prefix">perm_identity</i>
	        <input type="password" id="nom2" name="nombre2">
	        <label for="nom2">Nombres</label>
	      </div><br>

	      <div class="input-field">
	        <i class="material-icons prefix">timer</i>
	        <input type="password" id="ed" name="edad1">
	        <label for="ed">Edad</label>
	      </div><br>

	      <div class="input-field">
	        <i class="material-icons prefix">work</i>
	        <input type="password" id="ocu2" name="ocupacion2">
	        <label for="ocu2">Ocupacion</label>
	      </div><br>

	      <div class="input-field">
	        <i class="material-icons prefix">group</i>
	        <input type="password" id="par" name="parentesco1">
	        <label for="par">Parentesco</label>
	      </div><br>

	      <div class="input-field">
	        <i class="material-icons prefix">school</i>
	        <input type="password" id="est" name="estudios1">
	        <label for="est">Grado máximo de estudios</label>
	      </div><br>

	      <div>
	        <i class="material-icons prefix">wc</i><br />
	        <p><label>
	              <input class="with-gap" name="sexo2" type="radio" value="F"/>
	              <span>Femenino</span>
	            </label></p>

	            <p><label>
	              <input class="with-gap" name="sexo2" type="radio" value="M"/>
	              <span>Masculino</span>
	            </label></p>
	      </div><br />

	      <input type="submit" value="Guardar" class="btn btn-large">
	    <?php echo form_close(); ?>
	  </div>
	</div>

	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/init.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/materialize.min.js"></script>
    </body>
</body>
</html>
