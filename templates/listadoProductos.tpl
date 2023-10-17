{include file='header.tpl'}
    {if isset($smarty.session.ID_USUARIO)}{include file = 'formProducto.tpl'}{/if}
        <p class='nombre_tabla text-center m-4 mb-4'>Productos</p>
        {if !empty($mensaje)}
            <div class='alert alert-primary m-4 alert-dismissible' role='alert'>
            <button class="btn-close" data-bs-dismiss = "alert"></button>
                {$mensaje}
            </div>
        {/if}
        <div class='table-responsive-sm m-4'>
        <table class='table table-striped table-bordered'>
            <thead class=''>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Categoria</th>
                    <th>Descripcion</th>
                {if isset($smarty.session.ID_USUARIO)}
                    <th></th>
                    <th></th>
                {/if}
                </tr>
            </thead>
        <tbody>
        {foreach from = $productos  item = $producto}
            <tr>
                <td>{$producto->nombre}</td>
                <td>{$producto->precio}</td>
                <td>{$producto->marca}</td>
                <td>{$producto->nombre_categoria}</td>
                <td><div class='d-flex justify-content-center'><a type = 'button' href = '{$BASE_URL|cat:"info/{$producto->ID}"}' class='btn btn-primary btn-sm'>Ver Mas</a></td>
            {if isset($smarty.session.ID_USUARIO)}
                <td><div class='d-flex justify-content-center'><a type = 'button' href = '{$BASE_URL|cat:"formEditarProducto/{$producto->ID}"}' class='btn btn-warning btn-sm '>Editar</a></td>
                <td><div class='d-flex justify-content-center'><a type='button' href = '{$BASE_URL|cat :"eliminarProducto/{$producto->ID}"}' class='btn btn-danger btn-sm'>Borrar</a></div></td>
            {/if}    
            </tr>
        {/foreach}
        </tbody> </table> </div>
{include file = 'footer.tpl'}