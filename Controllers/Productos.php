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
        $data['js'] = "productosModal.js";
        $this->views->getView('productos', 'index', $data);
    }

    public function insertarProductos()
    {
        $producto = json_decode($_POST['json'] , true);
        $marca = $producto['marca'];
        $sistemOperativo = $producto['sistemOperativo'];
        $modelo = $producto['modelo'];

        
        print_r($producto);
    }
}
