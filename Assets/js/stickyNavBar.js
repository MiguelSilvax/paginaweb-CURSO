const encabezado = document.querySelector(".header");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        encabezado.style.opacity = "0.7";
        encabezado.style.backgroundColor = "#fff";
  
  }else{
    encabezado.style.opacity = "1";

     encabezado.style.backgroundColor = "";
  }
}