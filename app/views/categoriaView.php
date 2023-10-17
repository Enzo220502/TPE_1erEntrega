<?php
require_once './libs/smarty-4.3.4/libs/Smarty.class.php';

class categoriaView{

    private $smarty;

    function __construct(){
    
        $this->smarty = new Smarty();

        $this->smarty->assign('BASE_URL',BASE_URL);
        $this->smarty->assign('URL_PRODUCTOS',PRODUCTOS);
        $this->smarty->assign('URL_CATEGORIAS',CATEGORIAS);
        $this->smarty->assign('LOGIN',LOGIN);
        $this->smarty->assign('LOGOUT',LOGOUT);
    }

    public function verCategorias($categorias,$mensaje){

        $this->smarty->assign('URL_FILTRO',BASE_URL."filtroCategorias/");
        $this->smarty->assign('URL_BORRAR',BASE_URL."eliminarCategoria/");
        $this->smarty->assign('URL_EDITAR',BASE_URL."formEditarCategoria/");
        $this->smarty->assign('mensaje',$mensaje);
        $this->smarty->assign('categorias',$categorias);

        $this->smarty->display('listadoCategorias.tpl');
    }

    public function mostrarEditar($cat){
        
        $this->smarty->assign('URL_EDITAR',BASE_URL."editarCategoria/");
        $this->smarty->assign('cat',$cat);

        $this->smarty->display('formEditarCategoria.tpl');

    }

}
?>