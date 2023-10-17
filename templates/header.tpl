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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{$URL_PRODUCTOS}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{$URL_CATEGORIAS}">Categorias</a>
                    </li>
                </ul>
                <div class="d-flex">
                    {if isset($smarty.session.ID_USUARIO)}
                        <a href ='{$LOGOUT}' class='btn btn-outline-success m-1'>Logout</a>
                    {else}
                        <a href ='{$LOGIN}' class='btn btn-outline-success m-1'>Login</a>
                    {/if}
                </div>
            </div>
        </nav>
    </div>