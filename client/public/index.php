<?php
// require_once 'config/database.php';
require_once '../routes/routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$baseUri = '/Web-Tech-Project-Copy/';

if ($uri === $baseUri || $uri === '/') {
    require '../app/controller/LandingPage.php';
    
}
else if (isset($routes[$uri])) {
    $controllerAction = explode('@', $routes[$uri]);
    $controllerName = $controllerAction[0];
    $actionName = $controllerAction[1];

    require_once "app/controller/{$controllerName}.php";
    $controller = new $controllerName;
    $controller->$actionName();
} else {
    require '..\app\controller\LandingPage.php';
}
?>