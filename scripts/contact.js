function validarFormulario() {
  // Obtener los valores ingresados por el usuario
  var nombre = document.getElementById("nombre").value;
  var apellido = document.getElementById("apellido").value;
  var email = document.getElementById("email").value;
  var consulta = document.getElementById("consulta").value;

  //En caso de que algún dato se encuentre vacío mostrará una alerta y no enviará el formulario
  if (nombre === "" || apellido === "" || email === "" || consulta === "") {
    alert("Por favor, ingrese todos los datos");
    return false;
  }

  //En caso positivo se envía el formulario
  return true;
}
