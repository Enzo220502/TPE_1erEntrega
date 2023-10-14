<?php
/* Smarty version 4.3.4, created on 2023-10-14 19:21:01
  from 'C:\XAMPP\htdocs\web2_2023\tpe_web2\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652acdfd454249_97969720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '415461b03c81d6c5982021da4c57149f39dd3452' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\web2_2023\\tpe_web2\\templates\\formLogin.tpl',
      1 => 1697304059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652acdfd454249_97969720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<form action="validar" method="POST" class="col-md-4 offset-md-4 mt-4">
    <h1>Iniciar Sesion</h1>

    <div class="form-group m-2">
        <label>Nombre de Usuario</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre...">
    </div>

    <div class="form-group m-2">
        <label>Contraseña</label>
        <input type="password" name="clave" class="form-control" placeholder="Ingrese contraseña...">
    </div>

    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    <?php }?>

    <div class = "form-group row mt-3">
        <button type="submit" class="btn btn-primary m-1">Ingresar</button>

        <a class="btn btn-primary m-1" href = "<?php echo $_smarty_tpl->tpl_vars['URL_PRODUCTOS']->value;?>
">Ingresar como invitado</a>
    </div>

</form>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
