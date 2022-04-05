$("#cargar").click(function (e) { 
  $("#Mimodal").fadeIn('slow');
  $("#Mimodal").modal('show');
  
});
  
$("#close").click(function (e) {
  $("#Mimodal").fadeOut('slow');
  $("#Mimodal").modal('hide');
  $("#Mimodal").css('display', 'none');
});


$(".close").click(function (e) { 
  $("#Mimodal").fadeOut('slow');
  $("#Mimodal").modal('hide');
  $("#Mimodal").css('display', 'none');
});



$("#actualizar").click(function (e) {
    alert("hola");
  var  seleccion1 = document.getElementById("select1");
  var  seleccion2 = document.getElementById("select2");
   if (seleccion1.value === "") {
       alert("Debes ingresar el pedido")
       return false;
   } else if(seleccion2.value === "") {
    alert("Debes ingresar el pedido")
    return false;
   }else {
    alert("Datos guardados");
    stop;
     return true;
   }
});





