<?php

require_once './libs/smarty-4.3.4/libs/Smarty.class.php';

class AuthView{

    private $smarty;

    function __construct(){
    
        $this->smarty = new Smarty();
        
        $this->smarty->assign('BASE_URL',BASE_URL);
        $this->smarty->assign('URL_PRODUCTOS',PRODUCTOS);
        $this->smarty->assign('URL_CATEGORIAS',CATEGORIAS);
        $this->smarty->assign('LOGIN',LOGIN);
        $this->smarty->assign('LOGOUT',LOGOUT);
    }

    public function mostrarLogin($error = null){
        
        $this->smarty->assign('error',$error);
        
        $this->smarty->display('formLogin.tpl');
    }

}
?>