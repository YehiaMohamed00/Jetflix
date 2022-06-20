<?php

namespace app\core;


use function app\controllers\printContent;

class Database{
    public \PDO $pdo;
    public $name = 'ahmed';

    public function __construct(array $config){
        $dbServername = 'localhost';
        $dbUsername = "root";
        $dbPassword = "123456789";
        $dbName = "jetflix";
        $charset = "utf8mb4";

        $dsn = "mysql:host=$dbServername;dbname=$dbName;charset=$charset";

        $this->pdo  = new \PDO($dsn, $dbUsername, $dbPassword);

        $this->pdo ->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
}