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

/*
$("#nuevo").click(function (e) { 
    e.preventDefault();
    console.log("hola aqui");
$.ajax({
     type: "POST",
     url: "../modal/insertar.php",
     data: {json_succes:json_succes},
     dataType: "json",
     success: function (data) {
          if(data.status == 200){
               var json = JSON.parse(data);
               console.log(json);
               console.log(data);
               console.log("cargado");
          }
     }
});
});

*/
$("#nuevo ").click(function (e) { 
window.onload = function () {
 $.getJSON("../modal/insertar.php", exito);
};

function exito(data) {
  alert(data.mensaje);
}
});

$("#buscar").click(function (e) { 
     if (numero_cedula.value === "") {
          alert("Debes ingresar un numero de cedula");
          return false;
     } else {
          alert("Mostrando Resultados");
          return true;
     }

});


