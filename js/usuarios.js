//por aitageo
   
$(".nav-link").mouseover(function () { 
 $(this).css("color","#26ca"); 
});

$(".nav-link").mouseleave(function () { 
     $(this).css("color","#fff"); 
    });

/* 
$("#nuevo").click(function () { 
     let result = alert("Datos guardados");
     if (result = true) {
          return true
     } else {
          return false;
     }
     
});

*/

$("#actualizar").click(function (e) { 
var nombre =  document.getElementById("nombre");
var apellido = document.getElementById("apellido");
var telefono = document.getElementById("telefono");
  if (nombre.value === "") {
       alert("Debes ingresar un nombre");
       stop;
       return false;
  }else if (apellido.value === "") {
       alert("Debes ingresar el apellido");
       stop;
       return false;
  } else if(telefono.value === ""){
      alert("Debes ingresar un telefono");
      stop;
      return false;
  }
  else {
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
});


$("#nuevo").click(function (e) { 
     e.preventDefault();
     $.ajax({
          type: "POST",
          url: "http://localhost:8282/DondePompilio1.0/modal/insertar.php", //entro aqui
          data: "data",
          dataType: "json",
          success : function(json) {
               console.log(json);
           },
          error : function(xhr, status) {
               alert('Disculpe, existió un problema');//entro aqui tambien
           },

     }).done(function(data) {
          console.log("hola");
          if (data.exito) {
               alert("Datos guardados" + data.exito)
               stop;
          } else {
               stop;
               alert( "Error el usuario ya existe" + data.error);
          }
     })

});//cierre del ready






/*

let nuevo = document.getElementById("nuevo");

nuevo.addEventListener("click",function(e) {
       e.preventDefault();
     fetch('http://localhost:8282/DondePompilio1.0/modal/insertar.php')
     .then(respuesta => respuesta.json())
     .then(respuesta => console.log(respuesta))
     
});

*/



$("#buscar").click(function (e) { 
     if (numero_cedula.value === "") {
          alert("Debes ingresar un numero de cedula");
          return false;
     } else {
          alert("Mostrando Resultados");
          return true;
     }

});


