<?php

namespace App\DAO;

use App\Model\FabricanteModel;
use \PDO;

class FabricanteDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(FabricanteModel $model)
    {
        $sql = "INSERT INTO fabricantes (nome, cnpj) VALUES (?, ?)";
        $stmt = $this->conexao->prepare($sql);


        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cnpj);

        $stmt->execute();
    }

    public function update(FabricanteModel $model)
    {
        $sql = "UPDATE fabricantes SET nome=?, cnpj=? WHERE id=? ";
        $stmt = $this->conexao->prepare($sql);
        
        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cnpj);
        $stmt->bindValue(3, $model->id);
        
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM fabricantes ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM fabricantes WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\FabricanteModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM fabricantes WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}