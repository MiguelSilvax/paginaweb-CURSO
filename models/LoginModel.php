<?php
class LoginModel extends query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getLoginUsuario( $usuario , $pass )
    {
        $sql = "SELECT Usuario,clave from  login_cliente where Usuario = '$usuario' and clave = '$pass'";
        return $this->select($sql);
    }
}
