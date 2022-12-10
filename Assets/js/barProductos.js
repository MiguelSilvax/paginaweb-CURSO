let btn = document.getElementById("btnMove");
let navBar = document.querySelector(".mainBar");;

let cont = 0 ; 

btn.addEventListener('click', saludar);

function saludar(){ 
    cont++;

    if (cont%2 != 0) {
       navBar.classList.add("off");
    }else{
        navBar.classList.remove("off");
        
    }
}