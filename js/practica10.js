$('.nav-link').mouseover(function () { 
    $(this).css("color","rgb(2, 25, 231)");
});


$('.nav-link').mouseout(function () { 
    $(this).css("color","#fff");
});

/* animacion */
let movido = document.getElementById("movido");

const cargarSlider =(entrys,observer)=>{
    //console.log(entrys);
    //console.log(observer); 

    entrys.forEach((entry) => {
        if (entry.isIntersecting ){
            entry.target.classList.add('visible'); 
            console.log("En pantalla");  
        }else {
            entry.target.classList.remove('visible');
        }
    });

}

    let observable = new IntersectionObserver(cargarSlider,{
       root:null,
       rootMargin: '0px 0px 0px 0px',
       threshold: 1.0   
    });


    observable.observe(movido);
