{include  file='header.tpl'}

{if isset($smarty.session.ID_USUARIO)}
    {include file='formCategoria.tpl'}
{/if}
    <p class='text-center nombre_tabla m-4'>Categorias</p>
{if !empty({$mensaje})}
    <div class='alert alert-primary m-4' role='alert'>{$mensaje}</div>
{/if}
<div class='table table-responsive-sm m-4 tabla'>
    <table class='table table-striped table-bordered'>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                {if isset($smarty.session.ID_USUARIO)}
                    <th></th>
                    <th></th>
                    <th></th>
                {/if}
            </tr>
        </thead>
        <tbody>
        {foreach from=$categorias item=$cat}
            <tr>
                <td>{$cat->nombre_categoria}</td>
                <td>{$cat->descripcion_categoria|truncate:10}</td>
                <td>
                    <div class='d-flex justify-content-center'>
                        <a type = 'button' href = '{$URL_FILTRO|cat:{$cat->id}}' class='btn btn-primary btn-sm'>Ver Productos</a>
                    </div>
                </td>
                {if isset($smarty.session.ID_USUARIO)}
                    <td>
                    <div class='d-flex justify-content-center'>
                    <a type = 'button' href = '{$URL_EDITAR|cat:{$cat->id}}' class='btn btn-warning btn-sm'>Editar</a>
                    </div>
                    <td>
                        <div class='d-flex justify-content-center'>
                            <a type='button' href = '{$URL_BORRAR|cat:{$cat->id}}' class='btn btn-danger btn-sm'>Borrar</a> 
                        </div>
                    </td>
                {/if}    
            </tr>
        {/foreach}
        </tbody>
    </table>    
</div>
{include file='footer.tpl'}