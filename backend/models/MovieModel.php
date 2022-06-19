<?php

namespace app\models;

use app\core\Application;

class MovieModel extends RootModel{

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

    public function update($id, $vals)
    {
        
    }

    public function getAll()
    {
        $query = "SELECT * FROM movie;";
        $stmt = $this->db->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function getById($id){
        try{
            $query = "SELECT * FROM movie where id=$id;";
            $stmt = $this->db->pdo->prepare($query);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch(\PDOException $e){
            return null;
        }
    }
}