<?php
/* Smarty version 4.3.4, created on 2023-10-12 04:40:05
  from 'C:\XAMPP\htdocs\web2_2023\tpe_web2\templates\listadoCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65275c8584ddd4_33759893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ddc367028f244aae5747391b7e293563857d351' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\web2_2023\\tpe_web2\\templates\\listadoCategorias.tpl',
      1 => 1697078380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formCategoria.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65275c8584ddd4_33759893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\XAMPP\\htdocs\\web2_2023\\tpe_web2\\libs\\smarty-4.3.4\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_SESSION['ID_USUARIO']))) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:formCategoria.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
    <p class='text-center nombre_tabla m-4'>Categorias</p>
<?php ob_start();
echo $_smarty_tpl->tpl_vars['mensaje']->value;
$_prefixVariable1 = ob_get_clean();
if (!empty($_prefixVariable1)) {?>
    <div class='alert alert-primary m-4' role='alert'><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
<?php }?>
<div class='table table-responsive-sm m-4 tabla'>
    <table class='table table-striped table-bordered'>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <?php if ((isset($_SESSION['ID_USUARIO']))) {?>
                    <th></th>
                    <th></th>
                    <th></th>
                <?php }?>
            </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre_categoria;?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['cat']->value->descripcion_categoria,10);?>
</td>
                <td>
                    <div class='d-flex justify-content-center'>
                        <a type = 'button' href = '<?php ob_start();
echo $_smarty_tpl->tpl_vars['cat']->value->id;
$_prefixVariable2 = ob_get_clean();
echo ($_smarty_tpl->tpl_vars['URL_FILTRO']->value).($_prefixVariable2);?>
' class='btn btn-primary btn-sm'>Ver Productos</a>
                    </div>
                </td>
                <?php if ((isset($_SESSION['ID_USUARIO']))) {?>
                    <td>
                    <div class='d-flex justify-content-center'>
                    <a type = 'button' href = '<?php ob_start();
echo $_smarty_tpl->tpl_vars['cat']->value->id;
$_prefixVariable3 = ob_get_clean();
echo ($_smarty_tpl->tpl_vars['URL_EDITAR']->value).($_prefixVariable3);?>
' class='btn btn-warning btn-sm'>Editar</a>
                    </div>
                    <td>
                        <div class='d-flex justify-content-center'>
                            <a type='button' href = '<?php ob_start();
echo $_smarty_tpl->tpl_vars['cat']->value->id;
$_prefixVariable4 = ob_get_clean();
echo ($_smarty_tpl->tpl_vars['URL_BORRAR']->value).($_prefixVariable4);?>
' class='btn btn-danger btn-sm'>Borrar</a> 
                        </div>
                    </td>
                <?php }?>    
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>    
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
