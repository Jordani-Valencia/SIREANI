(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
    $('.datepicker').datepicker({
    	selectMonths: true,
    	selectYears:30,
    	format: 'dd-mm-yyyy'});
    $('select').formSelect();
    $('.timepicker').timepicker();
    $('.modal').modal();
    $('input#curp, input#tel, input#cel, input#cur, input#tel2, input#tel3, input#cel2, input#cu, input#tel4, input#tel5, input#cel3, input#c').characterCounter();
    $('.tabs').tabs();
    $('.chips').chips();

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
