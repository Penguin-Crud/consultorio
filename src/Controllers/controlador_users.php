<?php 

class ControladorUsers{
    public function inicio(){
        include_once('users/inicio.php');
    }
    public function crear(){

        if($_POST){
            print_r($_POST);
        }
        include_once("../users/crear.php");

    }
    public function editar(){
        include_once('users/editar.php');

    }
    
}

?>