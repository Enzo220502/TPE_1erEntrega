<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta base = <?php echo BASE_URL?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon de Belleza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Productos de Belleza</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="productos">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="productos">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="about">Sobre Nosotros</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <button class="btn btn-outline-success">Login</button>
                    <button class="btn btn-outline-success">Logout</button>
                </form>
                </div>
            </div>
        </nav>
    </div>