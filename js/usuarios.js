//por aitageo

let eliminar = document.getElementById("eliminar");

eliminar.addEventListener("click",(event)=>{
     event.preventDefault();
     alert("Realmente quieres eliminar este usuario");
});    

$(".nav-link").mouseover(function () { 
 $(this).css("color","#26ca"); 
});

$(".nav-link").mouseleave(function () { 
     $(this).css("color","#fff"); 
    });

