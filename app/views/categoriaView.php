<?php

class categoriaView{

    function __construct(){
        
    }

    public function verCategorias($categorias){
        require_once 'templates/header.php';
        require_once 'templates/formCategoria.php';
        echo "<div class='d-column-flex justify-content-center'> <table class='table table-success table-striped'>
        <thead><th class = 'text-center'>Categorias</th>
        </thead><tbody>";
        foreach($categorias as $cat){
            echo "
                <tr>
                    <td class=''>
                        <p class='text-center'>$cat->categoria</p>
                    </td>
                    <td class=''>
                        <a type='button' href = 'eliminarCategoria/$cat->id_categoria' class='btn btn-danger'>Borrar</a> 
                    </td>
                    <td class=''>
                        <a type = 'button' href = 'editarCategoria/$cat->id_categoria' class='btn btn-warning'>Editar</a>
                    </td>
                    <td class=''>
                        <a type = 'button' href = 'productos/$cat->id_categoria' class='btn btn-primary btn-sm'>Ver Productos</a>
                    </td>
                </tr>
            ";
        }
        echo "</tbody></table></div>";
        require_once 'templates/footer.php';
    }

}
?>