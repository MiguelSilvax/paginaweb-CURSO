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
        $this->views->getView('principal', 'login', $data);
    } 
}
