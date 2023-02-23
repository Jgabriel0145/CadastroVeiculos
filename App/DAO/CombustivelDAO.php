<?php

namespace App\DAO;

use App\Model\CombustivelModel;
use \PDO;

class CombustivelDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(CombustivelModel $model)
    {
        $sql = "INSERT INTO combustiveis (nome) VALUES (?)";
        $stmt = $this->conexao->prepare($sql);


        $stmt->bindValue(1, $model->nome);

        $stmt->execute();
    }

    public function update(CombustivelModel $model)
    {
        $sql = "UPDATE combustiveis SET nome=? WHERE id=? ";
        $stmt = $this->conexao->prepare($sql);
        
        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id);
        
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM combustiveis ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM combustiveis WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\CombustivelModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM combustiveis WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}