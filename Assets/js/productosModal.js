var pasarela = document.getElementById("myModal");

var btnModal = document.querySelectorAll("#myBtn");

var span = document.getElementsByClassName("close")[0];





span.onclick = function () {
    pasarela.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == pasarela) {
        pasarela.style.display = "none";
    }
}





/* LÓGICA DEL MODAL */

let modelo = document.querySelectorAll(".modeloProducto");
let data = [];

for (let i = 0; i < modelo.length; i++) {
    data.push({
        'marca' : 'samsung',
        'sistemOperativo' : 'android',
        'modelo': modelo[i].innerHTML
    });    
}

let objetoCompra;

const mostrarPasarela = (id) => {
    const imgPasarela = document.getElementById('imgPasarela');
    let marcaPasarela = document.querySelector(".marcaPasarela");
    let sistemaOperativoPasarela = document.querySelector(".sistemaOperativoPasarela");
    let modeloPasarela = document.querySelector(".modeloPasarela");
    btnModal[id].onclick = function () {
        pasarela.style.display = "block";
       switch(id){
        case 0 : 
               imgPasarela.src = img_sam + "galaxyS20FE/3.png";
        break;
           case 1:
               imgPasarela.src = img_sam + "galaxys215g/1.png";
               break;
           case 2:
               imgPasarela.src = img_sam + "galaxy-s22/1.png";
               break;
           case 3:
               imgPasarela.src = img_sam + "galaxy-fold/2.png";
               break;
           case 4:
               imgPasarela.src = img_sam + "galaxy-flip/1.png";
               break;
           case 5:
               imgPasarela.src = img_sam + "galaxyS22Ultra/1.png";
               break;
           case 6:
               imgPasarela.src = img_sam + "galaxyA71/img1.png";
               break;
           case 7:
               imgPasarela.src = img_sam + "galaxym32/img1.png";
               break;
           case 8:
               imgPasarela.src = img_sam + "galaxym12/img1.png";
               break;
        default: break;
       }
        marcaPasarela.textContent = data[id].marca;
        sistemaOperativoPasarela.textContent = data[id].sistemOperativo;
        modeloPasarela.textContent = data[id].modelo;

        objetoCompra = {
            'marca': 'samsung',
            'sistemOperativo': 'android',
            'modelo': modelo[id].innerHTML
        };
    }
}


function save (){
    let json  = JSON.stringify(objetoCompra);
    $.ajax({
        type: "POST",
        ult : "Productos.php",
        data: "json="+json,
        success: function(res){
            console.log(res);
            location.reload();
        }

    });
}








