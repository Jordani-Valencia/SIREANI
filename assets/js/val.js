  function validar() {
   var uno = document.getElementById("uno").value;
   var dos = document.getElementById("dos").value;
   var tres = document.getElementById("tres").value;
   var cuatro = document.getElementById("cuatro").value;
   var cinco = document.getElementById("cinco").value;
   var seis = document.getElementById("seis").value;
   if(uno == ""){
       alert('Entidad Federativa del estudiante vacío');
       return false;
   }else if (dos=="") {
      alert('País del estudiante vacío');
      return false;
   }else if (tres=="") {
    alert('Nacionalidad del estudiante vacío');
    return false;
  }else if (cuatro=="") {
    alert('Entidad Federativa de la escuela vacío')
    return false;
  }else if (cinco=="") {
    alert('Turno de la escuela vacío');
    return false;
  }else if (seis=="") {
    alert('Entidad Federativa del domicilio del alumno vacío');
    return false;
  }
   return true;
   }
