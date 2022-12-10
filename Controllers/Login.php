<?php
class Login extends controller
{

    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['title'] = "Iniciar sesión";
        $data['estilo'] = "estilo-login.css";
        $data['js'] = "login.js";
        $this->views->getView('principal', 'login', $data);
    }
    
    public function validarUsuario()
    {
        if (isset($_POST['username']) && isset($_POST['clave'])) {

            if (!empty($_POST['username']) && !empty($_POST['clave'])) {
            
                $usuario = $_POST['username'];
                $clave = $_POST['clave'];
                $data = $this->model->getLoginUsuario($usuario,$clave);
                if (empty($data)) {
                    $res = array('msg' => 'Este usuario no existe', 'type' => 'warning');
                }else{
                    $res = array('msg' => 'Datos correctos', 'type' => 'success');
                }
            }else{
                $res = array('msg' => "Los campos están vacíos", 'type' => 'warning');
            }
        }

       echo json_encode($res,JSON_UNESCAPED_UNICODE);
       die();    
    }
    
}
