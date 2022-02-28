
let slider = document.getElementById("slider");
let content = document.getElementsByClassName("content");
let lastContent = content[content.length-1];
slider.insertAdjacentElement("afterbegin",lastContent);

function nextRigth(){
    let FirstContent = content[0];
    slider.style.marginLeft="-200%";
    slider.style.transition="all 1s";
    setTimeout(()=>{
        slider.style.transition="none";
        slider.insertAdjacentElement("beforeend",FirstContent);
        slider.style.marginLeft="-100%";
    },4000);
    
}

setInterval(nextRigth,5000);


$(document).ready(function () {
    console.log("cargado");
});

/*
$(".encabezado h1").mouseover(function (){
    $(".encabezado h1").css("background","#000");
    $(".encabezado h1").css("transition","100ms all");
});

$(".encabezado h1").mouseout(function (){
    $(".encabezado h1").css("background","#980");
    $(".encabezado h1").css("transition","100ms all");
});
*/
