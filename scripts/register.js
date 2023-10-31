//Tomar el form
document.addEventListener("DOMContentLoaded", function () {
  const formulario = document.querySelector("form");

  formulario.addEventListener("submit", function (event) {
    event.preventDefault();

    const contrasenia = document.getElementById("contrasenia").value;
    const confirmarContrasenia = document.getElementById(
      "confirmarContrasenia"
    ).value;

    if (contrasenia !== confirmarContrasenia) {
      alert("Las contraseñas no coinciden.");
      return;
    }

    // Si las contraseñas coinciden, se puede enviar el formulario
    formulario.submit();
  });
});
