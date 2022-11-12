<?php 
class RegisterModel extends query{
    private $dni , $nom, $ap ,$usr , $mail , $clave , $dir ,$tel;
    public function __construct()
    {
        parent::__construct();
    }

    public function insertarDatos($dni , $nom, $ap ,$usr , $mail , $clave , $dir ,$tel)
    {   
        $this->dni = $dni;
        $this->nom = $nom;
        $this->ap = $ap;
        $this->usr = $usr;
        $this->mail = $mail;
        $this->clave = $clave;
        $this->dir = $dir;
        $this->tel = $tel;
        $sql = "CALL registrarCliente(?,?,?,?,?,?,?,?)";
        $lista = array($this->dni,$this->nom,$this->ap,$this->usr,$this->mail,$this->clave,$this->dir,$this->tel);
        $data = $this->save($sql,$lista);

        if ($data == 1) {
            $res='ok';
        }else{
            $res='error';
        }
        return $res;
    }
    
}

?>