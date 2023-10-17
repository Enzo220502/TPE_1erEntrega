<?php
require_once './app/models/productoModel.php';
require_once './app/views/productoView.php';
require_once './app/helpers/authHelper.php';

class ProductoController{

    private $model;
    private $view;

    public function __construct(){
        $this->model = new productoModel();
        $this->view = new productoView();
    }

    public function mostrarProductos($categorias){
        AuthHelper::iniciarSession();

        $productos = $this->model->obtenerProductos();

        if(!empty($productos)){
            if(!empty($_SESSION['MENSAJE'])){
                $mensaje = $_SESSION['MENSAJE'];
                $_SESSION['MENSAJE'] = null;
                $this->view->mostrarProductos($productos,$mensaje,$categorias);
            }
            else{
                $this->view->mostrarProductos($productos,null,$categorias);
            }
        }
        else {
            $this->view->mostrarProductos($productos,"No hay productos que mostrar",$categorias);
        }
    }

    public function agregarProducto($cats) {
        AuthHelper::verificar();

        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $marca = $_POST['marca'];
        $cat = $_POST['categoria'];

       
        if(!empty($nombre)&&!empty($cat)&&!empty($descripcion)&&!empty($precio)&&!empty($marca)){
            if($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png" ) {
                $res = $this->model->agregarProducto($nombre, $descripcion, $precio, $marca,$cat,$_FILES['imagen']);
            }else{
                $res = $this->model->agregarProducto($nombre, $descripcion, $precio, $marca,$cat);
            }
        }
        else{
            $_SESSION['MENSAJE'] = "No se añadio el producto,por favor complete todos los campos!";
        }

        if($res){
            $_SESSION['MENSAJE'] = "Se añadio el producto con exito";
        }

        header('Location: '.PRODUCTOS);
    }

    public function mostrarFormEditarProducto($id,$cats){
        AuthHelper::verificar();

        $prod = $this->model->obtenerUnProductoPorId($id);

        $this->view->mostrarFormEditarProducto($prod,$cats);
    }

    public function eliminarProducto($id){
        AuthHelper::verificar();

        $prod = $this->model->obtenerUnProductoPorId($id);

        if($prod){

            $res = $this->model->eliminarProducto($id);
            
            if($res){
                $_SESSION['MENSAJE'] = "Se elimino correctamente el producto";
            }
            else{   
                $_SESSION['MENSAJE'] = "No se pudo eliminar el producto,algo fallo";
            }
        }
        else{
            $_SESSION['MENSAJE'] = "No existe ningun producto con el ID= ".$id;
        }

        header('Location: '.PRODUCTOS);

    }

    public function actualizarProducto($id,$cats){
        AuthHelper::verificar();

        $prod = $this->model->obtenerUnProductoPorId($id);
        //verifico que exista un producto en nuestra base de datos con ese id
        if($prod){
            $nombre = $_POST['nombreNuevo'];
            $descripcion = $_POST['descripcionNuevo'];
            $precio = $_POST['precioNuevo'];
            $marca = $_POST['marcaNuevo'];
            $cat = $_POST['categoriaNuevo'];
            
            if(!empty($nombre)&&!empty($descripcion)&&!empty($precio)&&!empty($marca)&&!empty($cat)){
                
                if($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png" ) {
                    $res = $this->model->actualizarProducto($id,$nombre, $descripcion, $precio, $marca,$cat,$_FILES['imagen']);
                }
                else{
                    $res = $this->model->actualizarProducto($id,$nombre,$descripcion,$precio,$marca,$cat);
                }
                if($res){
                    $_SESSION['MENSAJE'] = "Se actualizo el producto con exito";
                }
                else{
                    $_SESSION['MENSAJE'] = "No se logro actualizar el producto con el ID = ".$id;
                }

            }else{
                $_SESSION['MENSAJE'] = "Completa todos los datos del formulario por favor!";
                header('Location: '.BASE_URL.'formEditarProducto/'.$id);
            }

            
        }
        else{
            $_SESSION['MENSAJE'] = "Error! No se encontro el producto.";
        }

        header('Location: '.PRODUCTOS);
    }

    public function mostrarProductosPorId($id,$cats){
        AuthHelper::iniciarSession();

        $productos = $this->model->obtenerProductosPorId($id);

        if(!empty($productos)){
            $this->view->mostrarProductos($productos,"Estos son los productos encontrados de la categoria:",$cats);
        }else{
            $this->view->mostrarProductos($productos,"No encontramos productos:",$cats);
        }
    }

    public function verInfo($id){
        AuthHelper::iniciarSession();
        
        $prod = $this->model->obtenerUnProductoPorId($id);
        
        if(!empty($prod)){
            $this->view->mostrarInfo($prod);
        }
        else{
            $_SESSION['MENSAJE'] = "No existe el producto que ha seleccionado.";
            header('Location: '.PRODUCTOS);    
        }

        
    }

    public function obtenerProductosPorCategoria($id){
        $cant = null;
        if(!empty($id)){
            $cant = $this->model->obtenerProductosPorCategoria($id);
        }
        return $cant;
    }

    public function notFoundError(){
        $this->view->mostrarError();
    }

}
?>