<?php
/* Smarty version 4.3.4, created on 2023-10-13 20:40:29
  from 'C:\XAMPP\htdocs\web2_2023\tpe_web2\templates\formEditarProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65298f1d8e36f6_34565865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a34b7c8a78193fc44012ba6717f0922f2da91aa0' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\web2_2023\\tpe_web2\\templates\\formEditarProductos.tpl',
      1 => 1697222323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65298f1d8e36f6_34565865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class = 'm-3'>
        <p class='text-center'>Form Editar Producto</p>
        <form class='row g-3' action='<?php echo ((BASE_URL).("actualizarProducto/")).($_smarty_tpl->tpl_vars['producto']->value->ID);?>
' method='POST'>
        <div class='col-md-2'>
            <label for='inputNombre' class='form-label'>Nombre</label>
            <input type='text' class='form-control' id='inputNombre' name='nombreNuevo' value='<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
'>
        </div>
        <div class='col-md-4'>
            <label for='inputDescripcion' class='form-label'>Descripcion</label>
            <input type='text' class='form-control' id='inputDescripcion' name='descripcionNuevo' value='<?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
'>
        </div>
        <div class='col-md-2'>
            <label for='inputPrecio' class='form-label'>Precio</label>
            <input type='text' class='form-control' id='inputPrecio'name='precioNuevo' value='<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
'>
        </div>
        <div class='col-md-2'>
            <label for='inputMarca' class='form-label'>Marca</label>
            <input type='text' class='form-control' id='inputMarca'name='marcaNuevo' value='<?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
'>
        </div>
        <div class='col-md-2'>
            <label class='form-label'>Seleccione una opcion:</label>
                <select name='categoriaNuevo' class='form-control'>";
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['cat']->value->id == $_smarty_tpl->tpl_vars['producto']->value->ID) {?>
                            <option value='<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
' selected><?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre_categoria;?>
</option>        
                        <?php } else { ?>
                            <option value='<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre_categoria;?>
</option>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                </select>
        </div>
        <div class='col-4'>
            <button type='submit' class='btn btn-primary mt-2'>Editar</button>
        </div>
    </form></div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
