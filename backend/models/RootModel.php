<?php
namespace app\models;

use app\core\Application;

abstract class RootModel{
    private Application $app;
    private string $host;
    private string $DBname;
    private string $tablename;
    
    public function __construct(Application $app)
    {
        $this->app = $app;
    }
    abstract function insert($id);
    abstract function delete($id);
    abstract function update($id);
    abstract function getAll($id);

    public function loadData($data){
        foreach($data as $key => $value){
            if (property_exists($this, $key)){
                $this->{$key} = $value;  
            }
        }
    }

    function setHost(string $host){
        $this->host = $host;
    }
    function setDBName(string $DBName){
        $this->DBName = $DBName;
    }
    function setTableName(string $tablename){
        $this->tablename = $tablename;
    }
}