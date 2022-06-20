<?php

use app\core\Application;

use app\controllers\SiteController;

require_once __DIR__.'/../vendor/autoload.php';



$config = [
    'db'=>[
        'name'=>'jetflix', // comes from the .env
        'server'=>'localhost', // comes from the .env
        'user'=>'root', // comes from the .env
        'password'=>'123456789', // comes from the .env
    ],
    'port'=>8080
    ];

$app = new Application(dirname(__DIR__), $config);

$siteController = new SiteController($app);

$siteController->publishRoutes();
$app->run();
