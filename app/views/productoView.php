<?php
require_once 'templates/header.php';
require_once 'templates/formProductos.php';
require_once 'templates/footer.php';

class productoView{

    function __construct(){
        
    }

    public function productos($productos){

        echo " <table class='table'>
        <thead class='table-dark'>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>id_categoria</th>
            </tr>
        </thead>
        <tbody>";
        foreach($productos as $producto){
               echo" <tr>
                    <td>{$producto->id}</td>
                    <td>{$producto->nombre}</td>
                    <td>{$producto->descripcion}</td>
                    <td>{$producto->precio}</td>
                    <td>{$producto->marca}</td>
                    <td>{$producto->id_categoria}</td>
                </tr>";
            }
       echo " </tbody> </table> ";

    }


?>