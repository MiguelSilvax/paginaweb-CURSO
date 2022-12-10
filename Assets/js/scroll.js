


function up() {
    const scrollInit = document.querySelector('.titleInit');
    let rec = scrollInit.getBoundingClientRect();
    if (rec.top < 0) {
        scrollInit.classList.add('scrolled');
    } else {
        scrollInit.classList.remove('scrolled');
        scrollInit.classList.add('js-scroll');

    }
}

window.addEventListener('scroll', up);
up();


/*-----------------------------------------------------*/

/* Scroll para las descripciones*/

/*-----------------------------------------------------*/ 

function showScroll() {
    let fadeContent = document.querySelectorAll('.fadeContent');
    for (let i = 0; i < fadeContent.length; i++) {
        let rec = fadeContent[i].getBoundingClientRect();
        if (rec.top < 700) {
            fadeContent[i].style.opacity = 1;
            fadeContent[i].classList.add("animadoDireccion");
        }
    }

}

window.addEventListener('scroll', showScroll);

