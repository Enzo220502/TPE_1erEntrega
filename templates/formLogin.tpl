{include file='header.tpl'}
<div class="container">
<form action="validar" method="POST" class="col-md-4 offset-md-4 mt-4">
    <h1>Iniciar Sesion</h1>

    <div class="form-group m-2">
        <label>Nombre de Usuario</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre...">
    </div>

    <div class="form-group m-2">
        <label>Contraseña</label>
        <input type="password" name="clave" class="form-control" placeholder="Ingrese contraseña...">
    </div>

    {if $error}
        <div class="alert alert-danger" role="alert">
            {$error}
        </div>
    {/if}

    <div class = "form-group row mt-3">
        <button type="submit" class="btn btn-primary m-1">Ingresar</button>

        <a class="btn btn-primary m-1" href = "{$URL_PRODUCTOS}">Ingresar como invitado</a>
    </div>

</form>

</div>
{include file = 'footer.tpl'}
