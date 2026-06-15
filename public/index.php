<?php
require_once __DIR__ . '/../app/bootstrap.php';

// Simple routing example
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        require __DIR__ . '/../app/controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;
    default:
        http_response_code(404);
        echo '404 - Page not found';
}
