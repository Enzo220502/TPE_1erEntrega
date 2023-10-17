<div class="m-3">
  <p class="text-center">Form Agregar Categoria</p>    
  <form class="row g-3" action = "nuevaCategoria" method="POST">
    <div class = 'col-md-10 row'>
      <div class="col-md-2">
        <label for="inputNombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="inputNombre" name="nombre" placeholder="Ingrese un Nombre..." required>
      </div>
      <div class='col-md-5 d-flex flex-wrap'>
            <div class = "col-md-8">
                <label for='inputDescripcion' class='form-label'>Descripcion:</label>
                <input type='text' class='form-control' id='inputDescripcion'name='descripcion' placeholder='Ingrese una descripcion...'>
            </div>
            <div class = "m-4">
                <button type='submit' class='btn btn-primary mt-2'>Agregar</button>
            </div>
        </div>
    </div>
  </form>
</div>


        