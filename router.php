<?php
require_once './app/controllers/productoController.php';
require_once './app/controllers/categoriaController.php';
require_once './app/controllers/authController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$prodController = new ProductoController();
$catController = new categoriaController();
$authController = new AuthController();

$action = 'productos'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);


//Respetar nombres de funciones en los controladores

switch($action){
    case 'productos':
        $prodController->mostrarProductos();
        break;
    case 'nuevoProducto':
        $prodController->agregarProducto(); 
        break;
    case 'editarProducto':
        $id = $params[1];
        $prodController->editarProducto($id);
        break;
    case 'eliminarProducto':
        $id = $params[1];
        $prodController->eliminarProducto($id);
        break;               
    case'categorias':
        $catController->mostrarCategorias();
        break;
    case 'nuevaCategoria':
        $catController->agregarCategoria();  
        break;
    case 'eliminarCategoria':
        $id = $params[1];
        $catController-> eliminarCategoria($id);
        break;
    case 'editarCategoria':
        $id = $params[1];
        $catController->editarCategoria($id);
        break;             
    default:
        break;    
}

?>