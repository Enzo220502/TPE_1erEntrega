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

    public function mostrarProductos($id){
        $productos = $this->model->obtenerProductos($id);
        if(!empty($productos)){
            $this->view->imprimirFiltrados($productos);
        }
        else{
            header("Location: ".BASE_URL."categorias");
        }
    }





}
?>