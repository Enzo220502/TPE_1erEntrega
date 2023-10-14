<?php
class AuthHelper{
    
    public static function iniciarSession() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public static function login($usuario) {
        AuthHelper::iniciarSession();
        $_SESSION['ID_USUARIO'] = $usuario->id;
        $_SESSION['NOMBRE'] = $usuario->nombre; 
    }

    public static function logout() {
        AuthHelper::iniciarSession();
        unset($_SESSION['ID_USUARIO']);
        unset($_SESSION['NOMBRE']);
        session_destroy();
        header('Location: '.BASE_URL.'login');
    }

    public static function verificar() {
        AuthHelper::iniciarSession();
        if (!isset($_SESSION['ID_USUARIO'])) {
            header('Location: ' . BASE_URL . 'login');
            die();
        }
    }

}

?>