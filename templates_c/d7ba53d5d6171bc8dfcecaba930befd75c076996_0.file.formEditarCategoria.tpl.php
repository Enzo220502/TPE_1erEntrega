<?php
/* Smarty version 4.3.4, created on 2023-10-11 23:10:11
  from 'C:\XAMPP\htdocs\web2_2023\tpe_web2\templates\formEditarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65270f33445a22_68298121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7ba53d5d6171bc8dfcecaba930befd75c076996' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\web2_2023\\tpe_web2\\templates\\formEditarCategoria.tpl',
      1 => 1697058123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65270f33445a22_68298121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <form action ='<?php ob_start();
echo $_smarty_tpl->tpl_vars['cat']->value->id;
$_prefixVariable1 = ob_get_clean();
echo ($_smarty_tpl->tpl_vars['URL_EDITAR']->value).($_prefixVariable1);?>
' method = 'POST'>
        <div class='mb-3'>
            <p class='text-center'>Editar Categoria</p>
            <label for='disabledTextInput' class='form-label'>Nombre</label>
            <input type='text' class='form-control' placeholder='Ingrese Nombre' name = 'nombreEditado' value='<?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre_categoria;?>
' required>
            <label for='disabledTextInput' class='form-label'>Descripcion</label>
            <input type='text' class='form-control' placeholder='Ingrese Descripcion' name = 'descripcionEditado' value='<?php echo $_smarty_tpl->tpl_vars['cat']->value->descripcion_categoria;?>
'>
        </div>
        <button type='submit' class='btn btn-primary'>Actualizar</button>
    </form>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
