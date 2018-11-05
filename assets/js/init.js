(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
    $('.datepicker').datepicker({
    	selectMonths: true,
    	selectYears:30,
    	format: 'yyyy-mm-dd'});
    $('select').formSelect();
    $('.timepicker').timepicker();
    $('.modal').modal();
    $('input#curp, input#tel, input#cel, input#cur, input#tel2, input#tel3, input#cel2, input#cu, input#tel4, input#tel5, input#cel3, input#c').characterCounter();
    $('.tabs').tabs();
    $('.chips').chips();

    $('#tabla-alumno').DataTable();


    $('input.autocomplete').autocomplete({
      data: {
        "Aguascalientes": '../assets/img/aguascalientes.png',
        "Baja California": '../assets/img/bajacalifornia.png',
        "Baja California Sur": '../assets/img/bajacaliforniasur.png',
        "Campeche":'../assets/img/campeche.png',
        "Chiapas":'../assets/img/chiapas.png',
        "Chihuahua":'../assets/img/chihuahua.png',
        "Coahuila":'../assets/img/coahuila.png',
        "Colima":'../assets/img/colima.jpg',
        "Ciudad de México":'../assets/img/ciudaddemexico.png',
        "Durango":'../assets/img/durango.png',
        "Guanajuato":'../assets/img/guanajuato.png',
        "Guerrero":'../assets/img/guerrero.png',
        "Hidalgo":'../assets/img/hidalgo.png',
        "Jalisco":'../assets/img/jalisco.png',
        "México":'../assets/img/mexico.png',
        "Michoacán":'../assets/img/michoacan.png',
        "Morelos":'../assets/img/morelos.png',
        "Nayarit":'../assets/img/nayarit.png',
        "Nuevo Léon":'../assets/img/nuevoleon.png',
        "Oaxaca":'../assets/img/oaxaca.png',
        "Puebla":'../assets/img/puebla.png',
        "Querétaro":'../assets/img/queretaro.png',
        "Quintana Roo":'../assets/img/quintanaroo.png',
        "San Luis Potosí":'../assets/img/sanluispotosi.png',
        "Sinaloa":'../assets/img/sinaloa.png',
        "Sonora":'../assets/img/sonora.png',
        "Tabasco":'../assets/img/tabasco.png',
        "Tamaulipas":'../assets/img/tamaulipas.png',
        "Tlaxcala":'../assets/img/tlaxcala.png',
        "Veracruz":'../assets/img/veracruz.png',
        "Yucatán":'../assets/img/yucatan.png',
        "Zacatecas":'../assets/img/zacatecas.png'
      },
    });
  }); // end of document ready
})(jQuery); // end of jQuery name space

function mayus(e){
    e.value=e.value.toUpperCase();
}

function checkbeca(){
  document.getElementById('esp1').disabled=TRUE;
}

//login
$("#loginF").submit(function(event){
  event.preventDefault();
  $.ajax({
    url:$(this).attr("action"),
    type:$(this).attr("method"),
    data:$(this).serialize(),
    success:function(resp){
      if (resp=="error") {
        M.toast({html: 'Usuario o contraseña incorrectos'});
      }else{
        window.location.href="http://localhost/SIREANI/admin/prinAdmin";
      }
    }
  });
});
//



function modal1(){
  var nombre=document.getElementById('nom2').value;
  var paterno=document.getElementById('apeP').value;
  var materno=document.getElementById('apeM').value;
  var edad=document.getElementById('ed').value;
  var ocupacion=document.getElementById('ocu2').value;
  var parentesco=document.getElementById('parentesco1').value;
  var grado=document.getElementById('est').value;
  var sexo=null;
  if (document.getElementById('sexM').checked==true) {
    sexo="M";
  }else if(document.getElementById('sexF').checked==true){
    sexo="F";
  }
  if (nombre=="" || paterno=="" || materno=="" || edad=="" || ocupacion==""|| parentesco=="0" || grado=="0" || sexo==null) {
    //alert("Datos incompletos, por favor llena todos los campos");
    return false;
  }else{
    var datos="nombre="+nombre+"&paterno="+paterno+"&materno="+materno+"&edad="+edad+
    "&ocupacion="+ocupacion+"&parentesco="+parentesco+"&grado="+grado+"&sexo="+sexo;

    $.post(base+"CInserciones2/ajaxFamiliar",datos,function(data){

    });
    document.getElementById('nom2').value=null;
    document.getElementById('apeP').value=null;
    document.getElementById('apeM').value=null;
    document.getElementById('ed').value=null;
    document.getElementById('ocu2').value=null;
    document.getElementById('parentesco1').value=0;
    document.getElementById('est').value=0;
    document.getElementById('sexM').checked=false;
    document.getElementById('sexF').checked=false;

    $("#estudios1").val(0);
    $("#estudios1").material_select;
    $("#parentesco1").val(0);
    $("#parentesco1").material_select;
    alert("hola");
    //return false;
  }
}
function modal3(){
  var valores=$("#modal33").serialize();

  $.ajax({
    url:base+"CInserciones5/ajaxConsumo",
    type:"POST",
    data:valores,
    success:function(resp){
      alert(resp);
    }
  });
  
  return false;

}

function modal2(){
  var persona=document.getElementById('ingresos2').value;
  var ingreso=document.getElementById('ingresos3').value;
  var porcentaje=document.getElementById('porcentaje').value;

  if (persona=="" || ingreso=="" || porcentaje=="") {
    alert("Datos incompletos, por favor llena todos los campos");

  }else{
    var datos="persona="+persona+"&ingreso="+ingreso+"&porcentaje="+porcentaje;

    $.post(base+"CInserciones2/ajaxIngresos",datos,function(data){

    });
    document.getElementById('ingresos2').value=null;
    document.getElementById('ingresos3').value=0;
    document.getElementById('porcentaje').value=null;

    $("#estudios1").val(0);
    $("#estudios1").material_select;
    alert("hola");
    //return false;

  }


}
