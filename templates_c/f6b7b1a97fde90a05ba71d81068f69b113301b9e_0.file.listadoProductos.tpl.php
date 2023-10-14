<?php
/* Smarty version 4.3.4, created on 2023-10-13 20:09:20
  from 'C:\XAMPP\htdocs\web2_2023\tpe_web2\templates\listadoProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652987d01adf41_43922601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6b7b1a97fde90a05ba71d81068f69b113301b9e' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\web2_2023\\tpe_web2\\templates\\listadoProductos.tpl',
      1 => 1697220552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formProducto.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652987d01adf41_43922601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php if ((isset($_SESSION['ID_USUARIO']))) {
$_smarty_tpl->_subTemplateRender('file:formProducto.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
        <p class='nombre_tabla text-center m-4 mb-4'>Productos</p>
        <?php if ((isset($_smarty_tpl->tpl_vars['mensaje']->value))) {?>
            <div class='alert alert-primary m-4 alert-dismissible' role='alert'>
            <button class="btn-close" data-bs-dismiss = "alert"></button>
                <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

            </div>
        <?php }?>
        <div class='table-responsive-sm m-4'>
        <table class='table table-striped table-bordered'>
            <thead class=''>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Categoria</th>
                    <th>Descripcion</th>
                <?php if ((isset($_SESSION['ID_USUARIO']))) {?>
                    <th></th>
                    <th></th>
                <?php }?>
                </tr>
            </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_categoria;?>
</td>
                <td><div class='d-flex justify-content-center'><a type = 'button' href = '<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).("info/".((string)$_smarty_tpl->tpl_vars['producto']->value->ID));?>
' class='btn btn-primary btn-sm'>Ver Mas</a></td>
            <?php if ((isset($_SESSION['ID_USUARIO']))) {?>
                <td><div class='d-flex justify-content-center'><a type = 'button' href = '<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).("formEditarProducto/".((string)$_smarty_tpl->tpl_vars['producto']->value->ID));?>
' class='btn btn-warning btn-sm '>Editar</a></td>
                <td><div class='d-flex justify-content-center'><a type='button' href = '<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).("eliminarProducto/".((string)$_smarty_tpl->tpl_vars['producto']->value->ID));?>
' class='btn btn-danger btn-sm'>Borrar</a></div></td>
            <?php }?>    
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody> </table> </div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
