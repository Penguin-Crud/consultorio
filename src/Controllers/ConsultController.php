<?php 

class ConsultController{

    public function principalPage() {
        require_once __DIR__ . '/Views/pages/listaConsultas.php';
    }

    public function newConsult() {
        require_once __DIR__ . '/Views/pages/newConsult.php';
    }

}

?>