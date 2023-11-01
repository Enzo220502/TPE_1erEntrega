<?php
require_once './app/controllers/productoController.php';
require_once './app/controllers/categoriaController.php';
require_once './app/controllers/authController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
define('LOGIN', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/login');
define('LOGOUT', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/logout');
define('PRODUCTOS', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/productos');
define('CATEGORIAS', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/categorias');

$prodController = new ProductoController();
$catController = new categoriaController();
$authController = new AuthController();

$action = 'productos'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);


switch($params[0]){
    case 'login':
        $authController->mostrarLogin();
        break;
    case 'logout':
        $authController->desloguear();    
    case 'validar':
        $authController->verificarLogin();
        break;
    case 'registrar':
        $authController->registrarUsuario();
        break;  
    case 'productos':
        $cats = $catController->obtenerCategorias();
        $prodController->mostrarProductos($cats);
        break;
    case 'nuevoProducto':
        $cats = $catController->obtenerCategorias();
        $prodController->agregarProducto($cats); 
        break;
    case 'formEditarProducto':
        $id = $params[1];
        $cats = $catController->obtenerCategorias();
        $prodController->mostrarFormEditarProducto($id,$cats);
        break;     
    case 'eliminarProducto':
        $id = $params[1];
        $prodController->eliminarProducto($id);
        break;      
    case 'actualizarProducto':
        $id = $params[1];
        $cats = $catController->obtenerCategorias(); 
        $prodController->actualizarProducto($id,$cats);
        break;
    case 'info':
        $id = $params[1];
        $prodController->verInfo($id);
        break;             
    case'categorias':
        $catController->mostrarCategorias();
        break;
    case 'nuevaCategoria':
        $catController->agregarCategoria();  
        break;
    case 'eliminarCategoria':
        $id = $params[1];
        $cant = $prodController->obtenerProductosPorCategoria($id);
        $catController->eliminarCategoria($id,$cant);
        break;
    case 'formEditarCategoria':
        $id = $params[1];
        $catController->mostrarFormEditCategoria($id);
        break;
    case 'editarCategoria':
        $id = $params[1];
        $catController->actualizarCategoria($id);
        break;
    case'filtroCategorias':
        $id = $params[1];
        $cats = $catController->obtenerCategorias();
        $prodController->mostrarProductosPorId($id,$cats);
        break;                     
    default:
        $prodController->notFoundError();
        break;    
}

?>