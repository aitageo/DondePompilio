#!por aitageo


let nombre = document.getElementById("nombre");
let nuevo = document.getElementById("nuevo");
let eliminar = document.getElementById("eliminar");
let actualizar = document.getElementById("actualizar");
let buscar = document.getElementById("buscar");

const nuevo_elemento = ()=>{
  nuevo.addEventListener("click",function(e){
     if(nombre.value === ""){
         alert("Debes ingresar un nombre");
         return false;
     }
     else {
         alert("datos guardados exitosamente");
         return true;
     }
  });
}

nuevo_elemento();


const actualizando = ()=>{
    actualizar.addEventListener("click",function(e){
           alert("Redireccionando a nuevo formulario");
           return true;
       
    });
  }

  actualizando();


  const eliminando = ()=>{
    eliminar.addEventListener("click",function(e){
       if(nombre.value === ""){
           alert("Debes ingresar un nombre");
           return false;
       }
       else {
           alert("Realmente quieres borrar");
           alert("borrado exitoso");
           return true;
       }
    });
  }
  
  eliminando();


  const buscando = ()=>{
    buscar.addEventListener("click",function(e){
       if(nombre.value === ""){
           alert("Debes ingresar un nombre");
           return false;
           stop;//detiene el evento
       }
       else {
           alert("Mostrando Resultados");
           return true;
       }
    });
  }
  
buscando();