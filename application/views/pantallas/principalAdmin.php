<nav>
    <div class="nav-wrapper">
      <div class="col s12 orange">
        <a href="#!" class="breadcrumb">Inicio</a>
    	</a>
      </div>
    </div>
  </nav>

	<div class="row orange lighten-2">
		<ul id="slide-out" class="sidenav">
				<li><a href="<?php echo base_url();?>admin/adminUno">1</a></li>
				<li><a href="<?php echo base_url();?>admin/adminDos">2</a></li>
				<li><a href="<?php echo base_url();?>admin/adminTres">3</a></li>
				<li><a href="<?php echo base_url();?>admin/adminCuatro">4</a></li>
				<li><a href="<?php echo base_url();?>admin/adminCinco">5</a></li>
				<li><a href="<?php echo base_url();?>admin/adminSeis">6</a></li>
			</ul>
		<a href="<?php echo base_url();?>admin/prinAdmin" data-target="slide-out" class="right"><i class="material-icons small">home</i></a>
		<a href="#" data-target="slide-out" class="sidenav-trigger right"><i class="material-icons small">menu</i></a>
	</div>

	<div class="chip">
    <img src="<?php echo base_url(); ?>assets/img/cecyto.png" alt="Contact Person" width="500" height="500">
    Bienvenido Administrador !!!
  </div>

<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/datatable/datatables.min.css"/>
  <script type="text/javascript" src="<?php echo base_url();?>assets/datatable/datatables.min.js"></script>

<div class="container">

</div>
  <table id="tabla-alumno" class="responsive-table">
    <thead class="orange">
      <tr>
        <td>Id alumno</td>
        <td>Nombre</td>
        <td>Apellido paterno</td>
        <td>Apellido materno</td>
      </tr>
    </thead>
  </table>
</div>
