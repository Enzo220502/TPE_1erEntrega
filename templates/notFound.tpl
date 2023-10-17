<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta base = "{$BASE_URL}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon de Belleza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="/css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body class = "m-2">
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{$URL_PRODUCTOS}">Productos de Belleza</a>
            </div>
        </nav>
    </div>
<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <h1 class="display-1 fw-bold">404</h1>
        <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
        <p class="lead">
            La pagina a la que intentas acceder, no existe.
          </p>
        <a href="{PRODUCTOS}" class="btn btn-primary">Productos</a>
    </div>
</div>
{include file = 'footer.tpl'}
