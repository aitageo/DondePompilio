#!por aitageo


let actualizando = document.getElementById("actualizando");
let nombre = document.getElementById("nombre");
let NuevoNombre = document.getElementById("nuevo_nombre");


const actualizar = ()=> {
actualizando.addEventListener("click",function(e){
    e.preventDefault();
  if (nombre.value==="") {
      alert("Debes ingresar un nombre");
      return false;
  } else if (NuevoNombre.value === "")  {
    alert("Debes ingresar un nuevo nombre");
    return false;
  } else {
     return true; 
  }

})

};

actualizar();
