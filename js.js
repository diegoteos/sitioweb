var boton = document.getElementById("copiador");
boton.addEventListener("click", copiarAlPortapapeles, false);

function copiarAlPortapapeles() {
  var valor = document.getElementById("valor");

  var inputFalso = document.createElement("input");
  inputFalso.setAttribute("value", valor.innerHTML);

  document.body.appendChild(inputFalso);

  inputFalso.select();

  document.execCommand("copy");

  document.body.removeChild(inputFalso);
  alert("ya se ha copiado");
}
