const boton = document.querySelector("#modoOscuro");

boton.addEventListener("click", function () {
    document.body.classList.toggle("oscuro");
});

const formularioContacto = document.querySelector("#form-contacto");
const avisoError = document.querySelector("#error-contacto");

// La función recibe el evento como parámetro. Se llama "event"
// por costumbre; es la información de lo que acaba de pasar.
function revisarContacto(event) {
  // Freno de mano: sin esta línea la página se recarga y no
  // llegamos ni a revisar. Es LA línea nueva del día.
  event.preventDefault();

  // .value es lo que hay escrito adentro de la casilla, ahora.
  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#correo").value;

  if (nombre === "") {
    // Dos comillas pegadas significan "texto vacío": no escribió nada.
    avisoError.textContent = "Falta tu nombre, caserito.";
    avisoError.classList.add("error");
    avisoError.classList.remove("exito");
  } else if (correo.includes("@") === false) {
    // includes revisa si un texto contiene otro. No comprueba que
    // el correo exista: comprueba que PAREZCA un correo.
    avisoError.textContent = "Ese correo no parece correo: le falta el @.";
    avisoError.classList.add("error");
    avisoError.classList.remove("exito");
  } else {
    // Pasó las dos revisiones: recién ahí avisamos que está bien.
    avisoError.textContent = "Mensaje enviado, caserito. Te contactamos pronto.";
    avisoError.classList.add("exito");
    avisoError.classList.remove("error");

  }
}
formularioContacto.addEventListener("submit", revisarContacto);
