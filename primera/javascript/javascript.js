
function validacion() {

  var passA = document.getElementById("passA").value;
  var passN = document.getElementById("passN").value;
  var passCn = document.getElementById("passCn").value;

  var espacios = false;
  var cont = 0;

  while (!espacios && (cont < passA.length) ||!espacios && (cont < passN.length)) {
    if (passA.charAt(cont) == " " || passN.charAt(cont) == " ")
      espacios = true;
    cont++;
  }
  
  if (passA.length == 0 || passN.length == 0 || passCn.length == 0) {
    alert("Los campos de las contraseña no pueden quedar vacías");
    document.getElementById('passA').focus();
    return false;
  }

  if (espacios) {
    alert ("La contraseña no puede contener espacios en blanco");
    document.getElementById("login").reset();
    document.getElementById('passA').focus();
    return false;
  }

  if (passA === passN) {
    alert("La contraseña nueva debe ser distinta a la actual");  
    document.getElementById('passN').value = ''; 
    document.getElementById('passCn').value = ''; 
    document.getElementById('passN').focus(); 
    return false;
  } else if (passN != passCn) {
    alert("El campo de nueva y confirmar contraseña deben de coincidir");
    document.getElementById('passN').value = ''; 
    document.getElementById('passCn').value = ''; 
    document.getElementById('passN').focus(); 
    return false;
    } else {
      alert("Todo esta correcto");
      document.getElementById("login").reset();
      return true; 
    }
}

function limpiar() {
    document.getElementById("login").reset();
    document.getElementById('passA').focus();
  }