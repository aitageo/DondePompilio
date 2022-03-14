
function validarUsuario(){
$("#nuevo").submit(function (e) { 
    let result = alert("El usuario ya existe");
    if (result = true) {
        return false;
    } else {
        return true;
        
    }
})
};


$("#nuevo").click(function (e) { 
    let res = alert("datos guardados");
    if (res = true) {
        return true;
    } else {
        return false;
        
    }
    
});


$("#eliminar").click(function (e) { 
    let res = alert("realmente quieres eliminar este usuario");
    if (res = true) {
        return true;
    } else {
        return false;
        
    }
    
});