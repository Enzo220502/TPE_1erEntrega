<?php
require_once './app/models/categoriaModel.php';
require_once './app/views/categoriaView.php';
require_once './app/helpers/authHelper.php';

class categoriaController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new categoriaModel();
        $this->view = new categoriaView();
    }

    public function mostrarCategorias($mensaje = null){
        AuthHelper::iniciarSession();
        //obtengo las categorias de la db
        $cat = $this->model->obtenerCategorias();

        if(!empty($cat)){
            if(empty($mensaje)){
                //si no esta vacio muestro el resultado
                $this->view->verCategorias($cat,null); 
            }else{
                $this->view->verCategorias($cat,$mensaje);
            }
        }
        else{
            //en caso de estar vacio redirijo a 'productos'
            $this->view->verCategorias($cat,"No hay productos que mostrar");
        }
    }

    public function agregarCategoria(){
        AuthHelper::verificar();
        if(!empty($_POST['nombre'])){
            $nombre = $_POST['nombre'];
            $desc = $_POST['descripcion'];

            $this->model->addCategoria($nombre,$desc);

            header('Location: '.BASE_URL.'categorias');
        }
        else{
            header('Location: '.BASE_URL);
        }

    }

    public function eliminarCategoria($id,$cant){
        AuthHelper::verificar();
        if(empty($cant)){
            $this->model->borrarCategoria($id);
            header('Location: '.CATEGORIAS);
        }
        else{
            $this->mostrarCategorias("No fue posible eliminar la categoria,ya que esta hace referencia a otros productos");
        }
    }

    public function mostrarFormEditCategoria($id){
        AuthHelper::verificar();
        $cat = $this->model->obtenerPorId($id);
        $this->view->mostrarEditar($cat);
    }   

    public  function actualizarCategoria($id){
        AuthHelper::verificar();
        if(!empty($_POST['nombreEditado'])){
            $nuevoNombre = $_POST['nombreEditado'];
            $nuevoDesc = $_POST['descripcionEditado'];
            $res = $this->model->subirCambios($id,$nuevoNombre,$nuevoDesc);
            if($res){
                $this->mostrarCategorias("Se actualizo correctamente la categoria");
            }
        }
        return;
    }

    public function obtenerCategorias(){
        $categorias = $this->model->obtenerCategorias();
        return $categorias;
    }

}


?>