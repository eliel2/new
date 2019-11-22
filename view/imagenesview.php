<?php

require_once('libs/Smarty.class.php');
class imagenesview {
    private $smarty;

    function __construct(){

        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL',BASE_URL);
        //$this->smarty->assign('BASE_URL',BASE_IMG);
       
    }
    public function ShowImagenes($imagen,$id) {
        $this->smarty->assign('titulo',"imagenes");
        $this->smarty->assign('imagenes', $imagenes);
        $this->smarty->assign('id_usuario', $id);
        $this->smarty->display('templates/imagenes.tpl');
    }
}