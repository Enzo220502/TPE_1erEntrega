<?php

class categoriaView{

    function __construct(){
        
    }

    public function verCategorias($categorias){
        require_once 'templates/header.php';
        require_once 'templates/formCategoria.php';
        echo "<div class='d-column-flex justify-content-center'> <table class='table table-bordered table-responsive '>
        <thead><th class = 'text-center'>Categorias</th>
        </thead><tbody>";
        foreach($categorias as $cat){
            $urlFiltro = BASE_URL."filtroCategorias/$cat->id";
            echo "
                <tr>
                    <td>
                        <p class='text-center'>$cat->categoria</p>
                    </td>
                    <td>
                        <a type='button' href = 'eliminarCategoria/$cat->id' class='btn btn-primary btn-sm'>Borrar</a> 
                    </td>
                    <td>
                        <a type = 'button' href = 'formEditarCategoria/$cat->id' class='btn btn-primary btn-sm mb-3'>Editar</a>
                    </td>
                    <td>
                        <a type = 'button' href = '$urlFiltro' class='btn btn-primary btn-sm'>Ver Productos</a>
                    </td>
                </tr>
            ";
        }
        echo "</tbody></table></div>";
        require_once 'templates/footel.php';
    }

    public function mostrarEditar($cat){
        $url = BASE_URL."editarCategoria/".$cat->id;
        include_once 'templates/header.php';
        echo"<form action ='$url' method = 'POST'>
                <p class='text-center'>Editar Categoria</p>
                <div class='mb-3'>
                    <label for='disabledTextInput' class='form-label'>Nombre</label>
                    <input type='text' class='form-control' placeholder='Ingrese Nombre' name = 'nombreEditado' value='$cat->categoria'>
                </div>
                <button type='submit' class='btn btn-primary'>Actualizar</button>
            </form>";
        include_once 'templates/footel.php';
    }

}
?>