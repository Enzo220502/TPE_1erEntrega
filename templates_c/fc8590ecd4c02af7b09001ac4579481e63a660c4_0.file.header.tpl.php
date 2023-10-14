<?php
/* Smarty version 4.3.4, created on 2023-10-13 20:09:17
  from 'C:\XAMPP\htdocs\web2_2023\tpe_web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652987cdba0f11_01326430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc8590ecd4c02af7b09001ac4579481e63a660c4' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\web2_2023\\tpe_web2\\templates\\header.tpl',
      1 => 1697220543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652987cdba0f11_01326430 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta base = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon de Belleza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="/css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<body class = "m-2">
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['URL_PRODUCTOS']->value;?>
">Productos de Belleza</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['URL_PRODUCTOS']->value;?>
">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['URL_CATEGORIAS']->value;?>
">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['URL_ABOUT']->value;?>
">Sobre Nosotros</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <?php if ((isset($_SESSION['ID_USUARIO']))) {?>
                        <a href ='<?php echo $_smarty_tpl->tpl_vars['LOGOUT']->value;?>
' class='btn btn-outline-success m-1'>Logout</a>
                    <?php } else { ?>
                        <a href ='<?php echo $_smarty_tpl->tpl_vars['LOGIN']->value;?>
' class='btn btn-outline-success m-1'>Login</a>
                    <?php }?>
                </div>
            </div>
        </nav>
    </div><?php }
}
