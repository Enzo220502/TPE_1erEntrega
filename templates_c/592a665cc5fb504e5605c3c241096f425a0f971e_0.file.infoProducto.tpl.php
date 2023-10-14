<?php
/* Smarty version 4.3.4, created on 2023-10-14 19:34:53
  from 'C:\XAMPP\htdocs\web2_2023\tpe_web2\templates\infoProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652ad13d3876c4_60330601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '592a665cc5fb504e5605c3c241096f425a0f971e' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\web2_2023\\tpe_web2\\templates\\infoProducto.tpl',
      1 => 1697304888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652ad13d3876c4_60330601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="d-flex flex-row">
        <div class="col-md-9">
          <h1>Nombre: <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h1>
          
          <p>Descripcion: <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</p>
          
          <p>Precio: $<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</p>
          
          <p>Marca: <?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
</p>
          
          <p>Categoria: <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_categoria;?>
</p>
          
        </div>  
        <div class="text-center">
          <?php if ((isset($_smarty_tpl->tpl_vars['producto']->value->imagen))) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
"  alt = "imagen ilustrativa del producto <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
" class="img-fluid img-thumbnail" width="350px">
          <?php }?>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
