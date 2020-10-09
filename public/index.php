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

// all of our endpoints start with /person
// everything else results in a 404 Not Found
if ($uri[1] !== 'api') {
    echo '<h1>Welcome</h1>';
}

#var_dump(json_decode(file_get_contents('php://input'), TRUE));
#$request = json_decode(file_get_contents('php://input'), TRUE);
#echo str_replace(' ', '+', $request['terms']);
#exit();

// the user id is, of course, optional and must be a number:
/*$userId = null;
if (isset($uri[2])) {
    $userId = (int) $uri[2];
}*/

#$requestMethod = $_SERVER["REQUEST_METHOD"];

// pass the request method and user ID to the PersonController and process the HTTP request:
$controller = new Service($uri[2]);
if (!isset($uri[3])) {
    $controller->processRequest();
} else {
    $controller->processRequest($uri[3]);
}