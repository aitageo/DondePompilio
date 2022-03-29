#!por aitageo


let eliminar = document.getElementById("eliminar");
let email = document.getElementById("email");

eliminar.addEventListener("click",function(e){
  if (email.value ==="") {
      alert("Debes ingresar un correo");
      stop;
      return false;
  } else {
    var result = alert("Realmente quieres eliminar o desactivar este cargo");
      if (result = true) {
          return true;
      } else {
          return false;
      }
  }

}

)
