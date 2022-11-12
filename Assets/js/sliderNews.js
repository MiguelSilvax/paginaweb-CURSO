
let news = document.getElementsByClassName("animation");


const clickContent = ( n ) =>{
    for (let i = 0; i < news.length; i++) {
      
            news[i].style.display = "none";

              
    }
    news[n].style.display = "grid";
}