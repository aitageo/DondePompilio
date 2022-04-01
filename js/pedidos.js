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






