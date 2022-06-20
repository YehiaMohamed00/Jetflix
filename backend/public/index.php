<?php

use app\core\Application;

use app\controllers\SiteController;
use app\controllers\AdminController;

require_once __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();  //load the variables inside the .env into $_ENV



$config = [
    'db'=>[
        'dsn'=>$_ENV['DB_DSN'], // comes from the .env
        'user'=>$_ENV['DB_USER'], // comes from the .env
        'password'=>$_ENV['DB_PASSWORD'], // comes from the .env
    ],
    'port'=>8080
    ];

$app = new Application(dirname(__DIR__), $config);

$siteController = new SiteController($app);
$adminController = new AdminController($app);

$siteController->publishRoutes();
$adminController->publishRoutes();
$app->run();
