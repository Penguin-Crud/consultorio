<?php
namespace App;
use App\Controllers\ConsultController;
//require_once __DIR__ . '/Controllers/ConsultController.php';

$controller = new ConsultController();
$uri = $_SERVER["REQUEST_URI"];

//echo $uri;

if ($_POST){
    $controller -> store($_POST);
}


if ($uri == '/consultas' || $uri == '/') {
    $controller->principalPage();
};

if ($uri == '/consultas/new-consult') {
    $controller->newConsult();
};

if ($uri == '/consultas/update-consult') {
    $controller->updateConsult();
}
