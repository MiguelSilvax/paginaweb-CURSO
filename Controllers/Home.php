<?php
class Home extends controller
{

    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    public function index()

    {
        $data['title'] = "Inicio";
        $this->views->getView('principal', 'index', $data);
    }



    
}
