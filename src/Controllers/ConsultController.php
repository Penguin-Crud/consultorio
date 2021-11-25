<?php 
namespace App\Controllers;
use App\Models\Consulta;
class ConsultController{

    public function principalPage() {
        
        require_once __DIR__ . '/../Views/pages/listaConsultas.php';

    }

    public function newConsult() {
        require_once __DIR__ . '/../Views/pages/newConsult.php';
    }
    public function updateConsult(){
        require_once __DIR__ . '/../Views/pages/updateConsult.php';
    }
}
