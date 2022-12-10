<?php
class Nosotros extends controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function index()
    {
        $data['info'] = "Quienes somos";
        $data['estilo'] = "nosotros.css";
        $data['js'] = "contacto.js";
        $this->views->getView('nosotros', 'nosotros', $data);
    }

    public function setContacto()
    {
        if (isset($_POST)) {
            if (empty($_POST['nombre']) && empty($_POST['mail']) && empty($_POST['numero']) && empty($_POST['direccion']) && empty($_POST['asunto'])) {
                $res = array('msg' => 'Todos los campos son requeridos', 'type' => 'warning');
            }else{
                $nombre = $_POST['nombre'];
                $mail = $_POST['mail'];
                $numero = $_POST['numero'];
                $direc = $_POST['direccion'];
                $asunto = $_POST['asunto'];
                $data = $this->model->setContacto($nombre,$mail,$numero,$direc,$asunto);
                if ($data == 'ok') {
                    $res = array('msg' => 'Se envió el mensaje', 'type' => 'success');
                }else{

                    $res = array('msg' => 'Error al enviar mensaje', 'type' => 'success');
                }
            }
        }else{
            $res = array('msg' => 'Error desconocido', 'type' => 'error');
        }

        echo json_encode($res, JSON_UNESCAPED_UNICODE);
        die();


    }
}
