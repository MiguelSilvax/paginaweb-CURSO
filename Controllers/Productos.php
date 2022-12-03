<?php
class Productos extends controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['title'] = "Productos";
        $this->views->getView('productos', 'index', $data);
    }
}
