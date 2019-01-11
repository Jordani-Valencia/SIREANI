<nav>
    <div class="nav-wrapper">

      <div class="col s12 orange">

        <a href="#!" class="breadcrumb">Inicio</a>
        <a href="#cambioContra" class="breadcrumb modal-trigger" >Cambiar contraseña</a>
        <a href="../generarExcel" class="breadcrumb">Generar Excel</a>
        <a class="breadcrumb" href="../CadminAlumnos/depurar" onclick="return vaciar()">Vaciar Base de Datos</a>
      </div>

    </div>

  </nav>

	<div class="row orange lighten-2">
		<a href="<?php echo base_url();?>admin/prinAdmin" data-target="slide-out" class="right"><i class="material-icons small">home</i></a>
		<a href="<?php echo base_url();?>admin/cerrarSesion" data-target="slide-out" class="sidenav-trigger right"><i class="material-icons small">close</i></a>
	</div>


	<div class="chip">
    <img src="<?php echo base_url(); ?>assets/img/cecyto.png" alt="Contact Person" width="500" height="500">
    Bienvenido Administrador !!!
  </div>

  <div class="modal" id="cambioContra">
	  <h5 class="modal-close right">&#10005;</h5>
	  <div class="modal-content center">
	    <h4>Cambio de contraseña</h4><br>
	      <form action="../CadminAlumnos/cambioC" method="post" id="modalContraseñaCambio" method="post">

        <div class="input-field">
	        <i class="material-icons prefix">person</i>
	        <input class="validate" type="text" name="nueva" id="nueva" required>
	        <label for="ingresos2">Nueva contraseña</label>
					<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
	      </div>

        <div class="input-field">
	        <i class="material-icons prefix">person</i>
	        <input class="validate" type="text" name="nueva2" id="nueva2" required>
	        <label for="ingresos2">Repetir nueva contraseña</label>
					<span class="helper-text" data-error="Campo vacío o Incorrecto" data-success="Bien"></span>
	      </div>

	      <input type="submit" value="Guardar"  class="btn btn-large">
	    </form>
	  </div>
	</div>
