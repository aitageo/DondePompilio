
$(".clientes").click(function (e) { 
    alert("Redireccionando");
});


var nuevo = document.getElementById("nuevo");
var numero_cedula = document.getElementById("numero_cedula");
var nombre = document.getElementById("nombre");
var apellido = document.getElementById("apellido");
var direccion = document.getElementById("direccion");
var email = document.getElementById("email");
var telefono = document.getElementById("telefono");


const validarCampos =()=>{
    nuevo.addEventListener("click",function(){
  if (numero_cedula.value === "") {
      alert("Debes ingresar una cedula");
      return false;
  } else if (nombre.value === "") {
    alert("Debes ingresar un nombre");
  } else if (apellido.value === "") {
    alert("Debes ingresar un apellido");
  }else if (direccion.value === "") {
    alert("Debes ingresar una direccion");
    }else if (email.value === "") {
        alert("Debes ingresar un email");
    }else if (telefono.value === "") {
        alert("Debes ingresar un telefono");
    }else {
       return true;
    }
})
}

validarCampos();