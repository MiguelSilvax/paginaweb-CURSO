let scroll = document.querySelectorAll(".animado");
let scroll1 = document.querySelectorAll(".animando");


function mostrarScroll1(){
let scrollTop = document.documentElement.scrollTop;
    for(var i = 0 ; i < scroll1.length ; i ++ ){
        let alturaElemento = scroll1[i].offsetTop;
       
        if(alturaElemento - 700  < scrollTop){
            
            scroll1[i].style.opacity = 1;
            scroll1[i].classList.add("animadoDireccion");
        }
    }
}

function mostrarScroll(){
let scrollTop = document.documentElement.scrollTop;
    for(var i = 0 ; i < scroll.length ; i ++ ){
        let alturaElemento = scroll[i].offsetTop;
       
        if(alturaElemento   < scrollTop){
            
            scroll[i].style.opacity = 1;
            scroll[i].classList.add("animadoDireccion");
        }
    }
}





window.addEventListener('scroll',mostrarScroll());
window.addEventListener('scroll',mostrarScroll1());