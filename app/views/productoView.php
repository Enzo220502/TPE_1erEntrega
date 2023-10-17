<?php
require_once './libs/smarty-4.3.4/libs/Smarty.class.php';

class productoView{

    private $smarty;

    function __construct(){

        $this->smarty = new Smarty();
        
        $this->smarty->assign('BASE_URL',BASE_URL);
        $this->smarty->assign('URL_PRODUCTOS',PRODUCTOS);
        $this->smarty->assign('URL_CATEGORIAS',CATEGORIAS);
        $this->smarty->assign('LOGIN',LOGIN);
        $this->smarty->assign('LOGOUT',LOGOUT);
    }


    public function mostrarProductos($productos,$mensaje,$categorias){
        
        $this->smarty->assign('mensaje',$mensaje);
        $this->smarty->assign('cats',$categorias);
        $this->smarty->assign('productos',$productos);

        $this->smarty->display('listadoProductos.tpl');

    }

    public function mostrarFormEditarProducto($producto,$categorias){

        $this->smarty->assign('categorias',$categorias);
        $this->smarty->assign('producto',$producto);

        $this->smarty->display('formEditarProductos.tpl');
    }

    public function mostrarInfo($prod){

        $this->smarty->assign('producto',$prod);

        $this->smarty->display('infoProducto.tpl');
    }
    
    public function mostrarError(){

        $this->smarty->display('notFound.tpl');
    }
}

?>