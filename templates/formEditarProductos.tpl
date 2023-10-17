{include file='header.tpl'}
        <div class = 'm-3'>
        <p class='text-center'>Form Editar Producto</p>
        <form class='row g-3' action='{BASE_URL|cat:"actualizarProducto/"|cat:$producto->ID}' method='POST' enctype='multipart/form-data'>
        <div class='col-md-2'>
            <label for='inputNombre' class='form-label'>Nombre</label>
            <input type='text' class='form-control' id='inputNombre' name='nombreNuevo' value='{$producto->nombre}'>
        </div>
        <div class='col-md-4'>
            <label for='inputDescripcion' class='form-label'>Descripcion</label>
            <input type='text' class='form-control' id='inputDescripcion' name='descripcionNuevo' value='{$producto->descripcion}'>
        </div>
        <div class='col-md-2'>
            <label for='inputPrecio' class='form-label'>Precio</label>
            <input type='text' class='form-control' id='inputPrecio'name='precioNuevo' value='{$producto->precio}'>
        </div>
        <div class='col-md-2'>
            <label for='inputMarca' class='form-label'>Marca</label>
            <input type='text' class='form-control' id='inputMarca'name='marcaNuevo' value='{$producto->marca}'>
        </div>
        <div class='col-md-2'>
            <label class='form-label'>Seleccione una opcion:</label>
                <select name='categoriaNuevo' class='form-control'>";
                    {foreach from = $categorias  item = $cat}
                        {if $cat->id == $producto->ID}
                            <option value='{$cat->id}' selected>{$cat->nombre_categoria}</option>        
                        {else}
                            <option value='{$cat->id}'>{$cat->nombre_categoria}</option>
                        {/if}
                    {/foreach}    
                </select>
        </div>
        <div class='col-md-15 d-flex'>
            <div class = "col-md-4">
                <label for='inputImagen' class='form-label'>Imagen:</label>
                <input type='file' class='form-control' id='inputImagen'name='imagen' value='{$producto->imagen}'>
            </div>
            <div class = "m-4">
                <button type='submit' class='btn btn-primary mt-2'>Editar</button>
            </div>
        </div>
    </form></div>
{include file = 'footer.tpl'}