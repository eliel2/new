<?php

require_once('libs/Smarty.class.php');
class generosview {
    private $smarty;

    function __construct(){

        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL',BASE_URL);
        $this->smarty->assign('BASE_URL',BASE_GENERO);
       
    }
    public function ShowGenero($genero,$id) {
        $this->smarty->assign('genero', $genero);
        $this->smarty->assign('titulo',"genero");
        $this->smarty->assign('id_usuario', $id);
        $this->smarty->display('templates/genero.tpl');
    }
    public function MostrarEditarG($id,$genero){
        $this->smarty->assign('titulo',"Generos");
        $this->smarty->assign('genero',$genero);
        $this->smarty->assign('id_usuario', $id);
        
        $this->smarty->display('templates/editargenero.tpl');
    }  
    public function ShowGeneros($generos,$id) {
        $this->smarty->assign('titulo',"generos");
        $this->smarty->assign('generos', $generos);
        $this->smarty->assign('id_usuario', $id);
        $this->smarty->display('templates/generos.tpl');
    }
};