let carrito = []; // Declaración de variable carrito como array vacío

function agregarAlCarrito(nombre, precio) {
  carrito.push({ nombre, precio });
  actualizarCarrito();
}

function eliminarDelCarrito(index) {
  carrito.splice(index, 1);
  actualizarCarrito();
}

function actualizarCarrito() {
  const carritoLista = document.getElementById("carrito-lista");
  const carritoTotal = document.getElementById("carrito-total");
  const carritoDatos = document.getElementById("carrito-datos");

  carritoLista.innerHTML = "";
  let total = 0;

  carrito.forEach((producto, index) => {
    const item = document.createElement("li");
    item.classList.add("carrito-item"); // Agrega la clase "carrito-item"
    item.innerHTML = `${producto.nombre} - $${producto.precio.toFixed(2)}`;

    const eliminarBtn = document.createElement("button");
    eliminarBtn.innerText = "Eliminar";
    eliminarBtn.addEventListener("click", () => eliminarDelCarrito(index));

    item.appendChild(eliminarBtn);
    carritoLista.appendChild(item);
    total += producto.precio;
  });

  carritoTotal.innerText = `$${total.toFixed(2)}`;
  carritoDatos.value = JSON.stringify(carrito);
}

function vaciarCarrito() {
  carrito = [];
  actualizarCarrito();
}

// Cargar el carrito desde el almacenamiento local si existe (opcional)
const carritoGuardado = localStorage.getItem("carrito");
if (carritoGuardado) {
  carrito = JSON.parse(carritoGuardado);
  actualizarCarrito();
}

function validarFormulario() {
  const usuario = document.getElementById("usuario").value;
  const contrasenia = document.getElementById("contrasenia").value;

  if (usuario.trim() === "" || contrasenia.trim() === "") {
    alert("Por favor, complete todos los campos.");
    return false;
  }

  // Si la validación es exitosa, el formulario se enviará
  return true;
}
