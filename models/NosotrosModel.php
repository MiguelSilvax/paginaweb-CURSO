<?php 
class NosotrosModel extends query{
    private $nombre , $mail, $numero , $direcc , $asunto;
    public function __construct()
    {
        parent::__construct();
    }


    public function setContacto( $nombre, $mail , $numero, $direcc , $asunto)
    {
     $this-> $nombre = $nombre;
     $this-> $mail = $mail;
     $this-> $numero = $numero;
     $this->$direcc = $direcc;
     $this->$asunto = $asunto;
     
     
     $sql = "INSERT INTO contactos (nombre,mail,numero,direccion,asunto) VALUES(?,?,?,?,?)";
     $lista = array($this->$nombre,$this->$mail,$this->$numero,$this->$direcc,$this->$asunto);
     $data = $this-> save($sql,$lista);
        if ($data == 1) {
            $res = 'ok';
        } else {
            $res = 'error';
        }

        return $res; 
    }
}


?>