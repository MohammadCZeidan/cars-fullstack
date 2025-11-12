<?php 
require_once("./services/ResponseService.php");

$base_dir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');//http://localhost/phpmyadmin/
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);/CARS/AHMAD/ZEHRA

if (strpos($request /*http://localhost/phpmyadmin/*/, $base_dir/*http://localhost/phpmyadmin/*/) === 0) {
    $request = substr($request, strlen($base_dir));
}

if ($request == '') {
    $request = '/';
}

//array of routes - a mapping between routes and controller name and method!
//remove routes from here!! 
$apis = [
    '/cars'         => ['controller' => 'CarController', 'method' => 'getCarByID'],//http://localhost/phpmyadmin/CARS
    '/users'         => ['controller' => 'UserController', 'method' => 'getUsers']
];

if (isset($apis[$request])) {//CARS
    $controller_name = $apis[$request]['controller']; 
    $method = $apis[$request]['method'];
    require_once "controllers/{$controller_name}.php";
    
    $controller = new $controller_name();
    if (method_exists($controller, $method)) {
        $controller->$method();//NON SSTATIC ::
    } else {
        echo ResponseService::response(500, "Error: Method {$method} not found in {$controller_name}");
    }
} else {
    echo ResponseService::response(404, "Route Not Found");
}