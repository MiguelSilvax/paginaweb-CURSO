let indice = 1 ; 
muestraSlides(indice);

function avanzaSlide(n){
    muestraSlides(indice+=n);
}

function posicionSlide(n){
    muestraSlides(indice = n);
}



setInterval (function tiempo(){
    muestraSlides(indice += 1)
},4500);

function muestraSlides(n){
    let i ; 
    let slides = document.getElementsByClassName('mySlider');
    let cantSlide = slides.length;
    
    if(n > cantSlide){
        indice = 1; 
    }
    if ( n < 1){
        indice  = cantSlide;
    }

    for(i = 0 ; i < cantSlide ; i++){
        slides[i].style.display ='';
    }
    
    slides[indice-1].style.display = 'flex';
}