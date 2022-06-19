<?php

namespace app\models;

use app\core\Application;

class AdminModel extends RootModel{

    public function __construct(Application &$app)
    {
        parent::__construct($app);
    }

    public function insert($vals)
    {
        
    }

    public function delete($id)
    {
        
    }

    public function update($id, $param)
    {
        
    }

    public function getAll()
    {
        $query = "SELECT * FROM admin;";
        $stmt = $this->db->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function getByEmail($email){
        try{
            $query = 'SELECT Password FROM admin where Email=(?);';
            $stmt = $this->db->pdo->prepare($query);
            $stmt->execute([$email]);
            $result = $stmt->fetch();
            return $result;
        } catch(\PDOException $e){
            return null;
        }
    }

    public function getById($id){
        try{
            $query = "SELECT * FROM admin where id=$id;";
            $stmt = $this->db->pdo->prepare($query);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch(\PDOException $e){
            return null;
        }
    }
}