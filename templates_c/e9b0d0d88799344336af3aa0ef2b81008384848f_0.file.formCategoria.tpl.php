<?php
/* Smarty version 4.3.4, created on 2023-10-11 23:00:59
  from 'C:\XAMPP\htdocs\web2_2023\tpe_web2\templates\formCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65270d0bd52467_06822154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9b0d0d88799344336af3aa0ef2b81008384848f' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\web2_2023\\tpe_web2\\templates\\formCategoria.tpl',
      1 => 1697058042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65270d0bd52467_06822154 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="m-3">
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
</div><?php }
}
