<?php
require_once("./view/imagenesview.php");
require_once("./model/imagenesmodel.php");

class imagenescontroller {

    private $model;
    private $view;

    function __construct(){
        $this->view = new imagenesview();
        $this->model = new imagenesmodel();
    }
    public function checkLogIn(){
        session_start();
        
        if(!isset($_SESSION['id_usuario'])){
            header("Location: " . URL_LOGIN);
            die();
        }

        if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5000)) { 
            header("Location: " . URL_LOGOUT);
            die();
        } 
        $_SESSION['LAST_ACTIVITY'] = time();
        
    }
    public function checkUser (){
        $id_usuario = $_SESSION['administrador'];
        return $id_usuario;
    }
    public function GetImagenes($params = null){
        $this->checkLogIn();
        $imagenes = $this->model->GetImagenes();

        $id = $this->checkUser();

        $this->view->ShowImagenes($imagenes,$id);
    }
    public function InsertarImagenes(){
        $this->model->InsertarImagenes($_POST['id:'],$_FILES['input_name'],$_POST['id_peliculasfk']);
        die();
        header("Location: " . BASE_URL);
    }
}