let formulario = document.querySelector("#frmSignIn");

document.addEventListener("DOMContentLoaded", function(){
    formulario.addEventListener("submit",function(e){
        e.preventDefault();
        //CREAR FORM DATA
        const data = new FormData(this);
        const url = base_url + 'register/registrar';
        const http = new XMLHttpRequest();
        //Abrir una conexion - POST- GET
        http.open("POST", url, true);
        //Enviar datos
        http.send(data);
        //Verificar estados
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const json = JSON.parse(this.responseText);
                swal({
                    title: "Aviso",
                    text: json.msg,
                    icon: json.type,
                    button: "Ok",
                });
                formulario.reset();
            }
        }
    });
});