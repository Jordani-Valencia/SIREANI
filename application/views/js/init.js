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
    $('input#curp, input#tel, input#cel, input#c').characterCounter();


    $('input.autocomplete').autocomplete({
      data: {
        "Aguascalientes": 'img/aguascalientes.png',
        "Baja California": 'img/bajacalifornia.png',
        "Baja California Sur": 'img/bajacaliforniasur.png',
        "Campeche":'img/campeche.png',
        "Chiapas":'img/chiapas.png',
        "Chihuahua":'img/chihuahua.png',
        "Coahuila":'img/coahuila.png',
        "Colima":'img/colima.jpg',
        "Ciudad de México":'img/ciudaddemexico.png',
        "Durango":'img/durango.png',
        "Guanajuato":'img/guanajuato.png',
        "Guerrero":'img/guerrero.png',
        "Hidalgo":'img/hidalgo.png',
        "Jalisco":'img/jalisco.png',
        "México":'img/mexico.png',
        "Michoacán":'img/michoacan.png',
        "Morelos":'img/morelos.png',
        "Nayarit":'img/nayarit.png',
        "Nuevo Léon":'img/nuevoleon.png',
        "Oaxaca":'img/oaxaca.png',
        "Puebla":'img/puebla.png',
        "Querétaro":'img/queretaro.png',
        "Quintana Roo":'img/quintanaroo.png',
        "San Luis Potosí":'img/sanluispotosi.png',
        "Sinaloa":'img/sinaloa.png',
        "Sonora":'img/sonora.png',
        "Tabasco":'img/tabasco.png',
        "Tamaulipas":'img/tamaulipas.png',
        "Tlaxcala":'img/tlaxcala.png',
        "Veracruz":'img/veracruz.png',
        "Yucatán":'img/yucatan.png',
        "Zacatecas":'img/zacatecas.png'
      },
    });
  }); // end of document ready
})(jQuery); // end of jQuery name space

function mayus(e){
    e.value=e.value.toUpperCase();
}
