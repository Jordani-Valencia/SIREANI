<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class generarExcel extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('MGetInfo');
		$this->load->library('session');
    $this->load->library('FPDF/fpdf');


	}

  public function index(){

    header('Content-Type: application/vnd.ms-excel; charset-UTF-8');
    header('Content-Disposition: attachment; filename=Metadato.xls');
    header('Pragma: no-cache');
    header('Expires: 0');

    $datos=$this->MGetInfo->listado();
     ?>

     <h3 align="center">LISTA DE ALUMNOS</h3>
     <table width "80%" border="1" align="center">
       <tr align "center" class="encabezadotabla">

         <td>APELLIDO PATERNO</td>
         <td>APELLIDO MATERNO</td>
         <td>NOMBRE</td>
         <td>FECHA DE NACIMIENTO</td>
         <td><?php echo(utf8_decode("EDAD (CONSIDERANDO AÑO DE NACIMIENTO)")) ?></td>
         <td>SEXO</td>
         <td>ESTADO CIVIL</td>
         <td>NIVEL DE ESTUDIOS</td>
         <td>GRUPO</td>
         <td><?php echo(utf8_decode("PROMEDIO 3er AÑO DE SECUNDARIA"))?></td>
         <td>PAIS ORIGEN</td>
         <td>NACIONALIDAD</td>
         <td>ENTIDAD DE NACIMIENTO</td>
         <td>CURP</td>
         <!--  Domicilio-->
         <td>CALLE</td>
         <td>No. EXT.</td>
         <td>No. INT.</td>
         <td>ENTRE CALLE</td>
         <td>Y CALLE</td>
         <td>OTRA REFERENCIA</td>
         <td>COLONIA</td>
         <td>MUNICIPIO</td>
         <td>DELEGACION</td>
         <td>ENTIDAD</td>
         <td>C.P</td>
         <td>TELEFONO FIJO</td>
         <td>TELEFONO CELULAR</td>
         <td>CORREO ELECTRONICO</td>
         <td>FACEBOOK</td>
         <td>TWITTER</td>
         <td>TIPO DE SANGRE </td>
         <td>ALERGIA (S)</td>
         <td>ENFERMEDAD</td>
         <td>No. SEGURIDAD SOCIAL </td>
         <!-- Datos de padre o tutor-->
         <td>PARENTESCO</td>
         <td>A.PATERNO</td>
         <td>A.MATERNO</td>
         <td>NOMBRE(S)</td>
         <td>FECHA DE NACIMIENTO (DD/MM/AAAA)</td>
         <td>EDAD</td>
         <td>SEXO</td>
         <td>ESTADO CIVIL</td>
         <td>NIVEL DE ESTUDIOS</td>
         <td>IDENTIFICACION OFICIAL (INE)</td>
         <td>CLAVE DE ELECTOR</td>
         <td>PAIS ORIGEN</td>
         <td>NACIONALIDAD</td>
         <td>ENTIDAD DE NACIMIENTO </td>
         <td>OCUPACION</td>
         <td>CURP</td>
         <!--Domicilio tutor-->
         <td>CALLE </td>
         <td>No.EXT.</td>
         <td>No.INT.</td>
         <td>ENTRE CALLE</td>
         <td>Y CALLE</td>
         <td>OTRA REFERENCIA</td>
         <td>COLONIA</td>
         <td>LOCALIDAD</td>
         <td>MUNICIPIO</td>
         <td>ENTIDAD</td>
         <td>C.P</td>
         <td>TELEFONO FIJO INCLUIR CLAVE LADA</td>
         <td>TELEFONO CELULAR (DIEZ DIGITOS)</td>
         <td>CORREO ELECTRONICO</td>
         <td>FACEBOOK</td>
         <td>TWITTER</td>

       </tr>

<?php foreach ($datos->result() as $key) {
  ?>
  <tr>

    <td><?php echo(utf8_decode($key->paterno_al)) ?></td>
      <td><?php echo(utf8_decode($key->materno_al)) ?></td>
      <td><?php echo(utf8_decode($key->nombre_al)) ?></td>
      <td><?php echo($key->fecha_nacimiento_al) ?></td>
      <!-- edad pendiene -->

      <td></td>
      <td><?php echo($key->sexo) ?></td>
      <td><?php echo $key->civil ?></td>
      <td>Secundaria</td>
      <td>-</td>
      <td><?php echo($key->promedio) ?></td>
      <td><?php echo(utf8_decode($key->pais_nac)) ?></td>
      <td><?php echo(utf8_decode($key->nacionalidad)) ?></td>
      <td><?php echo(utf8_decode($key->estado_nacimiento)) ?></td>
    <td><?php echo($key->curp) ?></td>

    <?php
      $direccion=$this->MGetInfo->get_domicilio2($key->id_alumno);
      $cinco=$this->MGetInfo->get_movil($key->id_alumno)->row();
      $salud=$this->MGetInfo->get_salud1($key->id_alumno)->row();
        ?>
      <td><?php echo(utf8_decode($direccion->calle) ) ?></td>
        <td><?php echo($direccion->exterior ) ?></td>
        <td><?php echo($direccion->interior ) ?></td>
        <td><?php echo(utf8_decode($direccion->entreCalle1) ) ?></td>
        <td><?php echo(utf8_decode($direccion->entreCalle2 )) ?></td>
        <td><?php echo(utf8_decode($direccion->referencia) ) ?></td>
        <td><?php echo(utf8_decode($direccion->colonia) ) ?></td>
        <td><?php echo(utf8_decode($direccion->municipio) ) ?></td>
        <td><?php echo(utf8_decode($direccion->delegacion) ) ?></td>
        <td><?php echo(utf8_decode($direccion->estado) ) ?></td>
        <td><?php echo($direccion->codigoPostal ) ?></td>
        <td><?php echo($direccion->tel_casa ) ?></td>
        <td><?php echo($direccion->celular ) ?></td>
        <td><?php echo(utf8_decode($cinco->correo) ) ?></td>
        <td><?php echo(utf8_decode($cinco->facebook) ) ?></td>
        <td><?php echo(utf8_decode($cinco->twitter) ) ?></td>

        <td><?php echo($salud->tipo_sangre ) ?></td>
      <td><?php echo(utf8_decode($salud->alergias) ) ?></td>
        <?php
        $enfermedad=$this->MGetInfo->get_enfermedad($key->id_alumno);
        if ($enfermedad->num_rows()>0) {
          $enfermedad=$enfermedad->row();
          ?>
          <td><?php echo(utf8_decode($enfermedad->descripcion) ) ?></td>
          <?php
        }else{
          ?>
          <td></td>
          <?php
        }
         ?>
        <td><?php echo($salud->num_seguro ) ?></td>
        <?php
        $tutor1=$this->MGetInfo->get_madre($key->id_alumno);
        $tutor2=$this->MGetInfo->get_padres($key->id_alumno);
        $tutor3=$this->MGetInfo->get_tutor($key->id_alumno);

        $domicilio1=$this->MGetInfo->get_domicilio3($key->id_alumno);

        if ($tutor1->num_rows()>0) {
          $tutor1=$tutor1->row();
            ?>
            <td>Madre</td>
            <td><?php echo(utf8_decode($tutor1->paterno_padre)) ?></td>
            <td><?php echo(utf8_decode($tutor1->materno_padre)) ?></td>
            <td><?php echo(utf8_decode($tutor1->nombre_padre)) ?></td>
            <td><?php echo($tutor1->fecha_nacimiento) ?></td>
            <td></td>
            <td>F</td>
            <td><?php echo ($tutor1->civil) ?></td>
            <td><?php echo(utf8_decode($tutor1->grado_estudio)) ?></td>
            <td>IDENTIFICACION INE</td>
            <td><?php echo($tutor1->elector) ?></td>
            <td><?php  echo(utf8_decode($tutor1->pais))?></td>
            <td><?php echo( utf8_decode($tutor1->nacionalidad)) ?></td>
            <td><?php  echo(utf8_decode($tutor1->estado))?></td>
            <td><?php echo (utf8_decode($tutor1->ocupacion)) ?></td>
            <td><?php echo($tutor1->curp)?></td>
<?php
            if ($domicilio1->num_rows()>0) {
              $domicilio2=$domicilio1->row();
              ?>
              <td><?php echo(utf8_decode($domicilio2->calle)) ?></td>
              <td><?php echo($domicilio2->exterior) ?></td>
              <td><?php echo($domicilio2->interior) ?></td>
              <td><?php echo(utf8_decode($domicilio2->entreCalle1)) ?></td>
              <td><?php echo(utf8_decode($domicilio2->entreCalle2)) ?></td>
              <td><?php echo(utf8_decode($domicilio2->referencia)) ?></td>
              <td><?php echo(utf8_decode($domicilio2->colonia)) ?></td>
              <td><?php echo(utf8_decode($domicilio2->delegacion)) ?></td>
              <td><?php echo(utf8_decode($domicilio2->municipio)) ?></td>
              <td><?php echo(utf8_decode($domicilio2->estado)) ?></td>
              <td><?php echo($domicilio2->codigoPostal) ?></td>
              <td><?php echo($domicilio2->tel_casa) ?></td>
              <td><?php echo($tutor1->cel) ?></td>
              <td><?php echo($tutor1->correo) ?></td>
              <td><?php echo($tutor1->facebook) ?></td>
              <td><?php echo($tutor1->twitter) ?></td>
              <?php
            }else{
              ?>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <?php
            }
            ?>

            <?php
        }else if ($tutor2->num_rows()>0) {
          $tutor2=$tutor2->row();
            ?>
            <td>Padre</td>
            <td><?php echo(utf8_decode($tutor2->paterno_padre)) ?></td>
            <td><?php echo(utf8_decode($tutor2->materno_padre)) ?></td>
            <td><?php echo(utf8_decode($tutor2->nombre_padre)) ?></td>
            <td><?php echo($tutor2->fecha_nacimiento) ?></td>
            <td></td>
            <td>F</td>
            <td><?php echo($tutor2->civil) ?></td>
            <td><?php echo(utf8_decode($tutor2->grado_estudio)) ?></td>
            <td>IDENTIFICACION INE</td>
            <td><?php echo( $tutor2->elector) ?></td>
            <td><?php  echo(utf8_decode($tutor2->pais))?></td>
            <td><?php echo(utf8_decode($tutor2->nacionalidad)) ?></td>
            <td><?php  echo(utf8_decode($tutor2->estado))?></td>
            <td><?php echo(utf8_decode($tutor2->nacionalidad)) ?></td>
            <td><?php echo($tutor2->curp)?></td>
            <?php
                        if ($domicilio1->num_rows()>0) {
                          $domicilio2=$domicilio1->row();
                          ?>
                          <td><?php echo(utf8_decode($domicilio2->calle)) ?></td>
                          <td><?php echo($domicilio2->exterior) ?></td>
                          <td><?php echo($domicilio2->interior) ?></td>
                          <td><?php echo(utf8_decode($domicilio2->entreCalle1)) ?></td>
                          <td><?php echo(utf8_decode($domicilio2->entreCalle2)) ?></td>
                          <td><?php echo(utf8_decode($domicilio2->referencia)) ?></td>
                          <td><?php echo(utf8_decode($domicilio2->colonia)) ?></td>
                          <td><?php echo(utf8_decode($domicilio2->delegacion)) ?></td>
                          <td><?php echo(utf8_decode($domicilio2->municipio)) ?></td>
                          <td><?php echo(utf8_decode($domicilio2->estado)) ?></td>
                          <td><?php echo($domicilio2->codigoPostal) ?></td>
                          <td><?php echo($domicilio2->tel_casa) ?></td>
                          <td><?php echo($tutor2->cel) ?></td>
                          <td><?php echo($tutor2->correo) ?></td>
                          <td><?php echo($tutor2->facebook) ?></td>
                          <td><?php echo($tutor2->twitter) ?></td>
                          <?php
                        }else{
                          ?>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <?php
                        }
                        ?>

                        <?php
        }else if ($tutor3->num_rows()>0) {
          $tutor3=$tutor3->row();
            ?>
            <td>Tutor</td>
            <td><?php echo(utf8_decode($tutor3->paterno_padre)) ?></td>
            <td><?php echo(utf8_decode($tutor3->materno_padre)) ?></td>
            <td><?php echo(utf8_decode($tutor3->nombre_padre)) ?></td>
            <td><?php echo($tutor3->fecha_nacimiento) ?></td>
            <td>edad</td>
            <td>F</td>
            <td>estado civil</td>
            <td><?php echo(utf8_decode($tutor3->grado_estudio)) ?></td>
            <td>IDENTIFICACION INE</td>
            <td><?php echo ($tutor3->elector) ?></td>
            <td><?php  echo(utf8_decode($tutor3->pais))?></td>
            <td><?php  echo(utf8_decode($tutor3->nacionalidad))?></td>
            <td><?php  echo(utf8_decode($tutor3->estado))?></td>
            <td><?php  echo(utf8_decode($tutor3->ocupacion))?></td>
            <td><?php echo($tutor3->curp)?></td>
            <?php
                        if ($domicilio1->num_rows()>0) {
                          $domicilio2=$domicilio1->row();
                          ?>
                          <td><?php echo(utf8_decode($domicilio2->calle)) ?></td>
                          <td><?php echo($domicilio2->exterior) ?></td>
                          <td><?php echo($domicilio2->interior) ?></td>
                          <td><?php echo(utf8_decode($domicilio2->entreCalle1)) ?></td>
                          <td><?php echo(utf8_decode($domicilio2->entreCalle2)) ?></td>
                          <td><?php echo(utf8_decode($domicilio2->referencia)) ?></td>
                          <td><?php echo(utf8_decode($domicilio2->colonia)) ?></td>
                          <td><?php echo(utf8_decode($domicilio2->delegacion)) ?></td>
                          <td><?php echo(utf8_decode($domicilio2->municipio)) ?></td>
                          <td><?php echo(utf8_decode($domicilio2->estado)) ?></td>
                          <td><?php echo($domicilio2->codigoPostal) ?></td>
                          <td><?php echo($domicilio2->tel_casa) ?></td>
                          <td><?php echo($tutor3->cel) ?></td>
                          <td><?php echo($tutor3->correo) ?></td>
                          <td><?php echo($tutor3->facebook) ?></td>
                          <td><?php echo($tutor3->twitter) ?></td>
                          <?php
                        }else{
                          ?>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <?php
                        }
                        ?>

                        <?php
        }

        ?>


  </tr>
  <?php
} ?>

     </table>
<?php
  }
}
 ?>
