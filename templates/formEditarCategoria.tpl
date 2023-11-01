{include file='header.tpl'}
    <form action ='{$URL_EDITAR|cat:{$cat->id}}' method = 'POST'>
        <div class='mb-3'>
            <p class='text-center'>Editar Categoria</p>
            <label for='disabledTextInput' class='form-label'>Nombre</label>
            <input type='text' class='form-control' placeholder='Ingrese Nombre' name = 'nombreEditado' value='{$cat->nombre_categoria}' required>
            <label for='disabledTextInput' class='form-label'>Descripcion</label>
            <input type='text' class='form-control' placeholder='Ingrese Descripcion' name = 'descripcionEditado' value='{$cat->descripcion_categoria}'>
        </div>
        <button type='submit' class='btn btn-primary'>Actualizar</button>
    </form>
    <a type="button" class='btn btn-primary btn-sm ' href = "{CATEGORIAS}">Volver</a>
{include file='footer.tpl'}