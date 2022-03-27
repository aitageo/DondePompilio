//por aitageo
   
$(".nav-link").mouseover(function () { 
 $(this).css("color","#26ca"); 
});

$(".nav-link").mouseleave(function () { 
     $(this).css("color","#fff"); 
    });

 
$("#nuevo").click(function () { 
     let result = alert("Datos guardados");
     if (result = true) {
          return true
     } else {
          return false;
     }
     
});



$("#actualizar").click(function (e) { 
     e.preventDefault();
var nombre = getElementById("nombre");
var nuevoNombre = getElementById("nuevo_nombre");
stop;
  if (nombre === "") {
       alert("Debes ingresar un nombre");
       return false;
  }else if (nuevoNombre === "") {
       alert("Debes ingresar el nuevo nombre");
       return false;
  } else {
       return true;
  }
});


$("#eliminar_usuario").click(function (e) { 
     alert("Redireccionando");
     
});

let numero_cedula = document.getElementById("numero_cedula");

$("#eliminar").click(function (e) { 
     if (numero_cedula.value === "") {
          alert("Debes ingresar un numero de cedula");
          return false;
     } else {
          alert("Eliminando");
          return true;
     }

     /*let result = alert("Datos guardados");
     if (result = true) {
          return true
     } else {
          return false;
     }
     */
});





$("#buscar").click(function (e) { 
     if (numero_cedula.value === "") {
          alert("Debes ingresar un numero de cedula");
          return false;
     } else {
          alert("Mostrando Resultados");
          return true;
     }

     /*let result = alert("Datos guardados");
     if (result = true) {
          return true
     } else {
          return false;
     }
     */
});


