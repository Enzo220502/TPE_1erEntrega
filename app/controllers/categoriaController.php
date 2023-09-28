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

            header('Location: '.'categorias');
        }
        else{
            header('Location: '.BASE_URL);
        }

    }

    public function eliminarCategoria($id){
        if(!empty($id)){
            $this->model->borrarCategoria($id);    
            header('Location: '.'categorias');
        }
        else{
            header('Location: '.'categorias');
        }
    }


}


?>