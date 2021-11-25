<?php
namespace App;
use App\Controllers\ConsultController;
//require_once __DIR__ . '/Controllers/ConsultController.php';

$controller = new ConsultController();
$uri = $_SERVER["REQUEST_URI"];

//echo $uri;

if ($uri == '/') {
    $controller->principalPage();
};

if ($uri == '/new-consult') {
    $controller->newConsult();
};

if ($uri == '/update-consult') {
    $controller->updateConsult();
}
