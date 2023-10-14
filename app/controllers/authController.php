<?php
require_once './app/models/authModel.php';
require_once './app/views/authView.php';
require_once './app/helpers/authHelper.php';

class AuthController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new AuthModel();
        $this->view = new AuthView();
    }

    public function mostrarLogin($mensaje = null){
        $this->view->mostrarLogin($mensaje);
    }

    public function verificarLogin(){
        if(!empty($_POST['nombre']) && !empty($_POST['clave'])){
            $usuario = $_POST['nombre'];
            $clave = $_POST['clave'];    
            $usuarioDb = $this->model->obtenerUsuario($usuario);
            
            if($usuarioDb && password_verify($clave,$usuarioDb->clave)){
                AuthHelper::login($usuarioDb);
                header('Location: '.BASE_URL);
            }
            else{
                $this->mostrarLogin("Usuario y/o clave incorrecta");
            }
        }
        else{
            $this->mostrarLogin("Debe completar correctamente los campos");
        }
    }

    public function registrarUsuario(){
        $usuario = $_POST['nombre'];
        $clave = $_POST['clave'];

        $clave_hash = password_hash($clave,PASSWORD_BCRYPT);

        $this->model->registrar($usuario,$clave_hash);
        
        header('Location: '.LOGIN);
    }

    public function desloguear(){
        AuthHelper::logout();
    }

}

?>