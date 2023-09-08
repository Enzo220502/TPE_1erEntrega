<?php

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = ''; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

// listar    ->    showTasks();
// agregar   ->    addTask();
// eliminar/:ID  -> removeTask($id); 
// finalizar/:ID  -> finishTask($id);

// parsea la accion para separar accion real de parametros
$params = explode('/', $action);

switch ($params[0]) {
    case '':
    default: 
        echo "404 Page Not Found";
        break;
}
