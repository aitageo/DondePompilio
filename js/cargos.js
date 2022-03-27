#!por aitageo

$("#actualizar").click(function (e) { 
    e.preventDefault();
    document.getElementById("renombre").setAttribute('type','text');
    document.getElementById("email").setAttribute('type','hidden');
});