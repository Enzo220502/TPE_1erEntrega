<?php
require_once 'templates/header.php';
require_once 'templates/formProductos.php';
require_once 'templates/footer.php';

class productoView{

    function __construct(){
        
    }

    public function imprimirFiltrados($productos){
        require_once 'templates/header.php';
        $categoria = $productos[0]->categoria;
        echo "<div class='d-column-flex justify-content-center'> <table class='table table-bordered table-responsive '>
        <thead><th class = 'text-center'>Se estan mostrando productos de $categoria</th>
        <th class = 'text-center'>Nombre</th>
        <th class = 'text-center'>Descripcion</th>
        <th class = 'text-center'>Precio</th>
        <th class = 'text-center'>Marca</th>
        </thead><tbody>";
        foreach($productos as $prod){
            echo "
                <tr>
                    <td>
                        <p class='text-center'>$prod->nombre</p>
                    </td>
                    <td>
                        <p class='text-center'>$prod->descripcion</p>
                    </td>
                    <td>
                        <p class='text-center'>$prod->precio</p>    
                    </td>
                    <td>
                        <p class='text-center'>$prod->marca</p>    
                    </td>
                </tr>
            ";
        }
        echo "</tbody></table></div>";
        require_once 'templates/footel.php';
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
    
}

?>