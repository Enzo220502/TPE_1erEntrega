<?php
require_once './app/models/categoriaModel.php';
require_once './app/views/categoriaView.php';

class categoriaController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new categoriaModel();
        $this->view = new categoriaView();
    }

    public function mostrarCategorias(){
        //obtengo las categorias de la db
        $cat = $this->model->obtenerCategorias();

        if(!empty($cat)){
            //si no esta vacio muestro el resultado
            $this->view->verCategorias($cat); 
        }
        else{
            //en caso de estar vacio redirijo a 'productos'
            header('Location :'.BASE_URL );
        }
    }

    public function agregarCategoria(){
        
        if(!empty($_POST['nombre'])){
            $nombre = $_POST['nombre'];

            $this->model->addCategoria($nombre);

            header('Location: '.BASE_URL.'categorias');
        }
        else{
            header('Location: '.BASE_URL);
        }

    }

    public function eliminarCategoria($id){
        $eliminado = $this->model->borrarCategoria($id);
        header('Location: '.BASE_URL.'categorias');
        return $eliminado;
    }

    public function mostrarFormEditCategoria($id){
        $cat = $this->model->obtenerPorId($id);
        $this->view->mostrarEditar($cat);
    }   

    public  function actualizarCategoria($id){
        if(!empty($_POST['nombreEditado'])){
            $nuevoNombre = $_POST['nombreEditado'];
            $this->model->subirCambios($id,$nuevoNombre);
        }
        header('Location: '.BASE_URL.'categorias');
        return;
    }

}


?>