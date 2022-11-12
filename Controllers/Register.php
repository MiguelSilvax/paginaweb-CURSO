<?php 
 class Register extends controller  {
    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    public function index()

    {
        $data['title'] = "Iniciar sesión";
        $this->views->getView('principal', 'register', $data);
    } 

    public function registrar()
    {
        if (isset($_POST)) {
            if (empty($_POST["nombre"])) {
                $res = array('msg' => 'El nombre es requerido', 'type' => 'warning');
            }else if(empty($_POST["apellido"])){
                $res = array('msg' => 'El apellido es requerido', 'type' => 'warning');
            }else if(empty($_POST["usuario"])){
                $res = array('msg' => 'El usuario es requerido', 'type' => 'warning');
            } else if (empty($_POST["mail"])) {
                $res = array('msg' => 'El mail es requerido', 'type' => 'warning');
            }else if (empty($_POST["telefono"])) {
                $res = array('msg' => 'El teléfono es requerido', 'type' => 'warning');
            }else if (empty($_POST["clave"]) && empty($_POST["claveConfirm"])) {
                $res = array('msg' => 'La contraseña es requerida', 'type' => 'warning');
            }else if (empty($_POST["direccion"])) {
                $res = array('msg' => 'La dirección es requerida', 'type' => 'warning');
            }else if (empty($_POST["dni"])) {
                $res = array('msg' => 'El DNI es requerido', 'type' => 'warning');
            }else{
                $nom = $_POST["nombre"];
                $ap = $_POST["apellido"];
                $usuario = $_POST["usuario"];
                $mail = $_POST["mail"];
                $telefono = $_POST["telefono"];
                $clave = $_POST["clave"];
                $claveConfirm = $_POST["claveConfirm"];
                $direccion = $_POST["direccion"];
                $dni = $_POST["dni"];
                
                if ($clave == $claveConfirm) {
                    $data = $this->model->insertarDatos($dni, $nom, $ap, $usuario, $mail, $clave, $direccion, $telefono);
                    if ($data == 'ok') {
                        $res = array('msg' => 'Usuario registrado', 'type' => 'success');
                    } else {
                        $res = array('msg' => 'Error al registrar', 'type' => 'error');
                    }
                }else{
                    $res = array('msg' => 'Las contraseñas no concuerdan', 'type' => 'warning');
                }
            }
        }else{
            $res = array('msg' => 'Error desconocido', 'type' => 'error');
        }

        
       echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
    }
 }

?>