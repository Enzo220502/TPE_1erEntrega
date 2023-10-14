<div class="m-3">
  <p class="text-center">Form Agregar Categoria</p>    
  <form class="row g-3" action = "nuevaCategoria" method="POST">
    <div class="col-md-2">
      <label for="inputNombre" class="form-label">Nombre:</label>
      <input type="text" class="form-control" id="inputNombre" name="nombre" placeholder="Ingrese un Nombre..." required>
    </div>
    <div class="col-md-2">
      <label for="inputNombre" class="form-label">Descripcion:</label>
      <input type="text" class="form-control" id="inputNombre" name="descripcion" placeholder="Ingrese una descripcion...">
    </div>
    <div class="col-md-1">
        <label for="btnSubmit" class="form-label vissuaylly-hidden" ></label>
        <button type="submit" class="btn btn-primary" id="btnSubmit">Agregar</button>
    </div>
  </form>
</div>