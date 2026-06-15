<?php
// Autoloader and bootstrap
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/controllers/' . $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
    $file = __DIR__ . '/models/' . $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});
