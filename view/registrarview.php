<?php 
    require_once('libs/Smarty.class.php');
    
    class registrarview {

        function __construct(){
        }

        public function DisplayRegistro(){
            $smarty = new Smarty();

            $smarty->assign('titulo',"Registro");
            $smarty->assign('BASE_URL',BASE_URL);
            $smarty->display('templates/registro.tpl');
        }      
    }