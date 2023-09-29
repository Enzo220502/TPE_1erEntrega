
<h1>Editar Formulario</h1>
<form action="editarProducto/{$producto->id}" method="POST" class="my-4">
    <div class="mb-3">
        {foreach from=$productos item=$producto }
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{$producto->nombre}">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" value="{$producto->descripcion}">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" value="{$producto->precio}">
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" name="marca" value="{$producto->marca}">
            {/foreach}
            <label class="form-label">Seleccione una opcion:</label>
            <select name="productoOpcion" class="form-control">
                {foreach from=$categorias item=$producto }
                    <option value="{$producto->id_categoria}">{$producto->nombre}</option>
                {/foreach}
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Editar</button>
</form>

