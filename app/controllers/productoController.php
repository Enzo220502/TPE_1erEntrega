<?php
require_once './app/models/productoModel.php';
require_once './app/views/productoView.php';

class ProductoController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new productoModel();
        $this->view = new productoView();
    }






}
?>