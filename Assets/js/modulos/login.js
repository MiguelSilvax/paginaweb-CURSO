let formulario = document.getElementById('formularioLogin');
let usuario = document.getElementById('username');
let clave = document.getElementById('clave');
document.addEventListener('DOMContentLoaded',function(){
    formulario.addEventListener('submit', function ( e ){
        e.preventDefault();
        if (usuario.value == '' && clave.value == '' ) {
        }else{
            const data = new FormData(this);
            const url = base_url + 'login/validarUsuario';
            const http = new XMLHttpRequest();
            http.open("POST", url, true);
            http.send(data);
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                 const res = JSON.parse(this.responseText);
                    swal({
                        title: "Aviso!",
                        text: res.msg,
                        icon: res.type,
                    });
                    //console.log(this.responseText);
                }
            }
            formulario.reset();
            setInterval(() => {
                window.location = base_url + "productos";
            }, 2000);
        }

    });
});