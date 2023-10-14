<?php
/* Smarty version 4.3.4, created on 2023-10-11 17:20:46
  from 'C:\XAMPP\htdocs\web2_2023\tpe_web2\templates\formProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6526bd4e8bb902_16986104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '918455386291dc54877e834823bef1eccebfa582' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\web2_2023\\tpe_web2\\templates\\formProducto.tpl',
      1 => 1697036435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6526bd4e8bb902_16986104 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="m-3">
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                <option value='<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre_categoria;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
    <div class="col-md-4">
        <label for="inputMarca" class="form-label">Imagen</label>
        <input type="file" class="form-control" id="inputMarca" name="imagen" placeholder="seleccione una imagen...">
    </div>
    <div class="col-4">
        <label for="btnSubmit" class="form-label" ></label>
        <button type="submit" class="btn btn-primary" id="btnSubmit">Agregar</button>
    </div>
    </form>
</div><?php }
}
