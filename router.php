<?php
require_once './app/controllers/productoController.php';
require_once './app/controllers/categoriaController.php';
require_once './app/controllers/authController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'productos'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch($action){
    case 'productos':
        $controller = new ProductoController();
        $controller->mostrarProductos();
        break;
    case'categorias':
        $controller = new categoriaController();
        $controller->mostrarCategorias();
    case 'addCategoria':
        $controller = new categoriaController();
        $controller->addCategoria();        
    default:
        break;    
}

?>