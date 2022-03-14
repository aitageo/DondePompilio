
addEventListener("load",function(){

let enviar = document.getElementById("enviar");

enviar.addEventListener("click",function(e){
let email = document.getElementById("email").value;
let password = document.getElementById("password").value;
 if (email === "") {
     alert("debes ingresar un email");
     e.preventDefault();
     return false;
 } else if(password === "") {
     alert("debes ingresar un password");
     e.preventDefault();
     return false;
 }
});
});


$(document).ready(function () {
    console.log("cargado");
});


document.querySelector("#btn_iniciar-sesion").addEventListener("click",iniciarSesion);
document.getElementById("btn_registrarse").addEventListener("click",register);
window.addEventListener("resize",anchoPagina);

var contenedor_login_register = document.querySelector(".contenedor_login_register")
var formulario_login = document.querySelector(".formulario_login")
var formulario_register = document.querySelector(".formulario_register")

var caja_trasera_login = document.querySelector(".caja_trasera_login")
var caja_trasera_register = document.querySelector(".caja_trasera_register")



function anchoPagina(){
    if(window.innerWidth > 850){
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.display ="block";
    }else{
        caja_trasera_register.style.display ="block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display ="block";
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
     }
}

anchoPagina();

function iniciarSesion(){
    if(window.innerWidth > 850){
    formulario_register.style.display = "none";
    contenedor_login_register.style.left ="10px";
    formulario_login.style.display ="block";
    caja_trasera_register.style.opacity = "1";
    caja_trasera_login.style.opacity = "0";
  }else {
    formulario_register.style.display = "none";
    contenedor_login_register.style.left ="0px";
    formulario_login.style.display ="block";
    caja_trasera_register.style.display = "block";
    caja_trasera_login.style.display = "none";
  }

}




function register(){

  if(window.innerWidth > 850) {
    formulario_register.style.display = "block";
    contenedor_login_register.style.left ="410px";
    formulario_login.style.display ="none";
    caja_trasera_register.style.opacity = "0";
    caja_trasera_login.style.opacity = "1";
  } else {
    formulario_register.style.display = "block";
    contenedor_login_register.style.left ="0px";
    formulario_login.style.display ="none";
    caja_trasera_register.style.display = "none";
    caja_trasera_login.style.display = "block";
    caja_trasera_login.style.opacity = "1";
  }


}

