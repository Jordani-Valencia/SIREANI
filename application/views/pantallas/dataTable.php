<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/datatable/datatables.min.js"></script>

  <!--<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" />
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
        <!--<link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js">-->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>

        <script type="text/javascript">
          $(document).ready(function(){
            var editor;
            $('#tabla-alumno').DataTable({
              "ajax":{
                url : "<?php echo site_url("CPrueba/alumnos") ?>",
                type: 'GET'
              },
                });

          });
        </script>

<div class="container">
  <div class="row">
    <div class="col s10">
  <table id="tabla-alumno" class="mdl-data-table" style="width:100%">
    <thead>
      <tr>
        <th>CURP</th>
        <th>Nombre</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>Editar</th>
      </tr>
    </thead>
  </table>
  </div>
</div>
</div>
