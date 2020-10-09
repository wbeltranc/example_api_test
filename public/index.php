<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../vendor/autoload.php';

use BeltranC\Controller\Service;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

if ($uri[1] !== 'api') {
    echo json_encode(['error' => 'Invalid url'], true);
    exit();
}

$controller = new Service($uri[2]);
if (!isset($uri[3])) {
    $controller->processRequest();
} else {
    $controller->processRequest($uri[3]);
}