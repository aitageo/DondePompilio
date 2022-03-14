//por aitageo

let eliminar = document.getElementById("eliminar");

eliminar.addEventListener("click",(event)=>{
    let result = alert("Realmente quieres eliminar este usuario");
     if (result = true) {
          return true;
     } else {
          return false;
     }
});
   

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
     let result = alert("Datos guardados");
     if (result = true) {
          return true
     } else {
          return false;
     } 
     
});

