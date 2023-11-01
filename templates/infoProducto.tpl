{include file='header.tpl'}
<div class="container">
    <div class="d-flex flex-row">
        <div class="col-md-9">
          <h1>Nombre: {$producto->nombre}</h1>
          
          <p>Descripcion: {$producto->descripcion}</p>
          
          <p>Precio: ${$producto->precio}</p>
          
          <p>Marca: {$producto->marca}</p>
          
          <p>Categoria: {$producto->nombre_categoria}</p>
          
        </div>  
        <div class="text-center">
          {if isset($producto->imagen)}
            <img src="{$producto->imagen}"  alt = "imagen ilustrativa del producto {$producto->nombre}" class="img-fluid img-thumbnail" width="350px">
          {/if}
        </div>
    </div>
    <a type="button" class='btn btn-primary btn-sm ' href = "{PRODUCTOS}">Volver</a>
</div>
{include file='footer.tpl'}
