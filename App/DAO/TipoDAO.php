<?php

namespace App\DAO;

use App\Model\TipoModel;
use \PDO;

class TipoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(TipoModel $model)
    {
        $sql = "INSERT INTO tipos (tipo) VALUES (?)";
        $stmt = $this->conexao->prepare($sql);


        $stmt->bindValue(1, $model->tipo);

        $stmt->execute();
    }

    public function update(TipoModel $model)
    {
        $sql = "UPDATE tipos SET tipo=? WHERE id=? ";
        $stmt = $this->conexao->prepare($sql);
        
        
        $stmt->bindValue(1, $model->tipo);
        $stmt->bindValue(2, $model->id);
        
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM tipos";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM tipos WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\TipoModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM tipos WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}