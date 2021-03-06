<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  	<title>SIREANI</title>
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php echo base_url();?>assets/img/ce.ico">

  	<!-- CSS  -->
  	<!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/index.css">
  	<link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  	<link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<div id="container">
	<nav class="teal accent-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="assets/img/cecytem.gif" width="70" height="65"/></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo base_url();?>registro/uno">Iniciar registro</a></li>
        <li><a href="#login" class="modal-trigger">Iniciar sesión</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="<?php echo base_url();?>index.php/registro/uno">Iniciar registro</a></li>
        <li><a href="#login" class="modal-trigger">Iniciar sesión</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center blue-grey-text">Colegio de Estudios Científicos Y Tecnológicos del Estado de México</h1></h1>
      <div class="row center">
        <div class="col s12">
          <div class="slider">
            <ul class="slides">
              <li>
                <img src="<?php echo base_url();?>/assets/img/CECYTEM.jpg">
              </li>
              <li>
                <img src="<?php echo base_url();?>/assets/img/cecyto1.jpeg">    
              </li>
              <li>
                <img src="<?php echo base_url();?>/assets/img/cecyto2.png">    
              </li>
              <li>
                <img src="<?php echo base_url();?>/assets/img/cecyto3.jpeg">
              </li>
            </ul>
          </div>
        </div>
      </div>
      <br><br>
    </div>
  </div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <!--<h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>-->
            <h2 class="center"><img src="assets/img/icono-mision.png" width="60" height="60"/></h2>
            <h5 class="center">Misión</h5>

            <p class="light">Asumir el compromiso de impartir educación media superior de calidad, en su modalidad de bachillerato tecnológico bivalente, contribuyendo a la formación integral de los jóvenes, para que sean capaces de continuar con estudios de nivel superior y/o incorporarse al mercado laboral.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <!--<h2 class="center light-blue-text"><i class="material-icons">group</i></h2>-->
            <h2 class="center"><img src="assets/img/icono-vision.png" width="60" height="60"/></h2>
            <h5 class="center">Visión</h5>

            <p class="light">Ser la mejor opción en educación media superior en su modalidad de bachillerato tecnológico bivalente en el Sistema Nacional de los CECyTE’s, así como en el Estado de México.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">

            <img src="assets/img/cecyto.png" width="250" height="300"/>

          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  <footer class="page-footer teal accent-4">
    <div class="container">
      <div class="row">
        <div class="col l8 s12">
          <h5 class="white-text">CECYTEM Plantel Atlautla</h5>
          <p class="grey-text text-darken-3">Dirección: Corregidora No.3, Barrio de Santo Domingo, Atlautla, Estado de México, C.P. 56970</p>
          <p class="grey-text text-darken-3">Teléfono: (01 597) 976 22 68</p>
          <p class="grey-text text-darken-3">E-mail: <a href="mailto:plantel.atlautla@cecytem.mx" class="black-text">plantel.atlautla@cecytem.mx</a></p>
        </div>

        <div class="col l4 s12">
          <h5 class="white-text">Sitios de interés</h5>
          <ul>
            <li><a class="grey-text text-darken-3" href="http://edomex.gob.mx/" target="_blank">Portal del gobierno del Estado de México</a></li>
            <li><a class="grey-text text-darken-3" href="http://cecytem.edomex.gob.mx/" target="_blank">Portal CECYTEM</a></li>
            <li><a class="grey-text text-darken-3" href="https://consultas.curp.gob.mx/CurpSP/inicio2_2.jsp" target="_blank">Consulta de CURP</a></li>
          </ul>

        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Sistema Elaborado por: <a class="orange-text text-lighten-3" href="#">Ing. Ruben Sandoval Valencia e Ing. Jordani Valencia Rosas</a>
      </div>
    </div>
  </footer>


<!--Login-->
<div class="modal" id="login">
    <h5 class="modal-close right">&#10005;</h5>
    <div class="modal-content center">
      <h4>Pantalla de Logueo</h4><br>
      <!--<form action="">-->
        <?php echo form_open("admin/index"," id=loginF"); ?>
        <div class="input-field">
          <i class="material-icons prefix">person</i>
          <input type="text" id="username" name="username">
          <label for="username">Usuario</label>
        </div><br>

        <div class="input-field">
          <i class="material-icons prefix">lock</i>
          <input type="password" id="pass" name="pass">
          <label for="pass">Contraseña</label>
        </div><br>

        <input type="submit" id="btnlogin"  value="Login" class="btn btn-large">
      <!--</form>-->
      <?php echo form_close(); ?>
    </div>
  </div>

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="assets/js/materialize.min.js"></script>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/init.js"></script>

</div>

</body>
</html>
