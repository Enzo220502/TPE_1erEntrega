<?php
require_once './app/models/categoriaModel.php';
require_once './app/views/categoriaView.php';

class categoriaController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new categoriaModel("productos_tpe");
        $this->view = new categoriaView();
    }


}


?>