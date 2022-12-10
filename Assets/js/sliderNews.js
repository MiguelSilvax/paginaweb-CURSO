
let news = document.getElementsByClassName("animation");


for (let i = 0; i < news.length; i++) {
    news[i].style.display = "none";
}
news[0].style.display = "grid";


const clickContent = ( n ) =>{
    for (let i = 0; i < news.length; i++) {
            news[i].style.display = "none";
    }
    news[n].style.display = "grid";
}
