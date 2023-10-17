<div class="m-3">
    <p class="text-center">Form Agregar Producto</p>    
    <form class="row g-3 justify-content-between" action = "nuevoProducto" method="POST" enctype="multipart/form-data">
        <div class="col-md-2">
            <label for="inputNombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="inputNombre" name="nombre" placeholder="Ingrese un Nombre...">
        </div>
        <div class="col-md-4">
            <label for="inputDescripcion" class="form-label">Descripcion:</label>
            <input type="text" class="form-control" id="inputDescripcion" name="descripcion" placeholder="Ingrese una descripcion...">
        </div>
        <div class="col-md-2">
            <label for="inputPrecio" class="form-label">Precio:</label>
            <input type="text" class="form-control" id="inputPrecio" name="precio" placeholder="Ingrese un precio...">
        </div>
        <div class="col-md-2">
            <label for="inputMarca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="inputMarca" name="marca" placeholder="Ingrese una marca...">
        </div>
        <div class="col-md-2">
            <label for="inputCategoria" class="form-label">Categoria:</label>
            <select id="inputCategoria" class="form-select" name="categoria">
                {foreach from = $cats item = $cat}
                    <option value='{$cat->id}'>{$cat->nombre_categoria}</option>
                {/foreach}
            </select>
        </div>
        <div class='col-md-15 d-flex flex-wrap'>
            <div class = "col-md-4">
                <label for='inputImagen' class='form-label'>Imagen:</label>
                <input type='file' class='form-control' id='inputImagen'name='imagen' placeholder='Seleccione una imagen...'>
            </div>
            <div class = "m-4">
                <button type='submit' class='btn btn-primary mt-2'>Agregar</button>
            </div>
        </div>
    </form>
</div>