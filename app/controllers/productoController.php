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

    public function mostrarProductos (){
        $productos = $this -> model->obtenerProductos();
        $cat = $this->model->obtenerCategorias();
        $this-> view-> mostrarProductos ($productos, $cat);
    }

    function agregarProducto() {
        if((isset($_POST['nombre'])&&isset($_POST['descripcion'])&&isset($_POST['precio'])&&isset($_POST['marca']))&&!empty($_POST['nombre'])&&!empty($_POST['descripcion'])&&!empty($_POST['precio'])&&!empty($_POST['marca'])){      
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $marca = $_POST['marca'];

            $this->model->nuevoProducto($nombre, $descripcion, $precio, $marca);
            $id = $this->model->nuevoProducto($nombre, $descripcion, $precio, $marca);
        }
        header("Location: " . BASE_URL. 'productos');
            
    }






}
?>