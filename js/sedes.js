//por aitageo

let sede1 = document.getElementById("sede1");
let sede2 = document.getElementById("sede2");
let titulo = document.getElementById("titulo");

//funcion que carga la imagen
function cargarImagen(entry,observador){
    console.log("ejecuta");
    //console.log(entry);
    //console.log(observador);
    entry.forEach((entry)=> {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible')
            console.log("la imagen esta en el viewport");
        } else {
            entry.target.classList.remove('visible');
            
        }
    });
}

//se crea un nuevo objeto de la api(interfaz de programacion de aplicacion) IntersectionObserver
let observer = new IntersectionObserver(cargarImagen,{
    root: null,//es el elemento padre
    rootMargin:'0px 0px 0px 0px', //margen del observador que es el padre si entra aqui la imagen se ejecuta el codigo en px
    threshold:  0.2  //este es el umbral 0.2 cuando apenas entro un poquito 1.0 para cuando entro todo

});

observer.observe(sede1);//se establece el objetivo del observer
observer.observe(sede2);
observer.observe(titulo);