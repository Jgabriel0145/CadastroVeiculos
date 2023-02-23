<?php

namespace App\DAO;

use App\Model\MarcaModel;
use \PDO;

class MarcaDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(MarcaModel $model)
    {
        $sql = "INSERT INTO marcas (marca) VALUES (?)";
        $stmt = $this->conexao->prepare($sql);


        $stmt->bindValue(1, $model->marca);

        $stmt->execute();
    }

    public function update(MarcaModel $model)
    {
        $sql = "UPDATE marcas SET marca=? WHERE id=? ";
        $stmt = $this->conexao->prepare($sql);
        
        
        $stmt->bindValue(1, $model->marca);
        $stmt->bindValue(2, $model->id);
        
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM marcas";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM marcas WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\MarcaModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM marcas WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}