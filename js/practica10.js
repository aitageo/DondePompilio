$('.nav-link').mouseover(function () { 
    $(this).css("color","rgb(2, 25, 231)");
});


$('.nav-link').mouseout(function () { 
    $(this).css("color","#fff");
});


$(".movido").wheel(function (){ 
    var e = document.querySelector(".movido");
    console.log(e);
    e.addEventListener("animationstart",start,false);
    e.addEventListener("animationend",end,false);
    e.addEventListener("animationiteration",update,false); 


    function start() {
        e.classList('.movido');
    }

    function update(){
        e.css("@keyframes","slidein");
    }

    function end(params) {
         e.css("@keyframes","slidein");
        
    }
});

