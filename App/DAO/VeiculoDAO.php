<?php

namespace App\DAO;

use App\Model\VeiculoModel;
use \PDO;

class VeiculoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(VeiculoModel $model)
    {
        $sql = "INSERT INTO veiculos (modelo, ano, cor, numero_chassi, km, revisao, sinistro, roubo_furto, aluguel, venda, particular, observacao, id_marca, id_fabricante, id_tipo, id_combustivel) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = $this->conexao->prepare($sql);


        $stmt->bindValue(1, $model->modelo);
        $stmt->bindValue(2, $model->ano);
        $stmt->bindValue(3, $model->cor);
        $stmt->bindValue(4, $model->numero_chassi);
        $stmt->bindValue(5, $model->km);
        $stmt->bindValue(6, $model->revisao);
        $stmt->bindValue(7, $model->sinistro);
        $stmt->bindValue(8, $model->roubo_furto);
        $stmt->bindValue(9, $model->aluguel);
        $stmt->bindValue(10, $model->venda);
        $stmt->bindValue(11, $model->particular);
        $stmt->bindValue(12, $model->observacao);
        $stmt->bindValue(13, $model->id_marca);
        $stmt->bindValue(14, $model->id_fabricante);
        $stmt->bindValue(15, $model->id_tipo);
        $stmt->bindValue(16, $model->id_combustivel);

        $stmt->execute();
    }

    public function update(VeiculoModel $model)
    {
        $sql = "UPDATE veiculos SET modelo=?, ano=?, cor=?, numero_chassi=?, km=?, revisao=?, sinistro=?, roubo_furto=?, aluguel=?, venda=?, particular=?, observacao=?, id_marca=?, id_fabricante=?, id_tipo=?, id_combustivel=? WHERE id=? ";
        $stmt = $this->conexao->prepare($sql);
        
        
        $stmt->bindValue(1, $model->modelo);
        $stmt->bindValue(2, $model->ano);
        $stmt->bindValue(3, $model->cor);
        $stmt->bindValue(4, $model->numero_chassi);
        $stmt->bindValue(5, $model->km);
        $stmt->bindValue(6, $model->revisao);
        $stmt->bindValue(7, $model->sinistro);
        $stmt->bindValue(8, $model->roubo_furto);
        $stmt->bindValue(9, $model->aluguel);
        $stmt->bindValue(10, $model->venda);
        $stmt->bindValue(11, $model->particular);
        $stmt->bindValue(12, $model->observacao);
        $stmt->bindValue(13, $model->id_marca);
        $stmt->bindValue(14, $model->id_fabricante);
        $stmt->bindValue(15, $model->id_tipo);
        $stmt->bindValue(16, $model->id_combustivel);
        $stmt->bindValue(17, $model->id);
        
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT v.id, v.modelo, v.ano, v.cor, v.numero_chassi, v.km, v.revisao, v.sinistro, v.roubo_furto, v.aluguel, v.venda, v.particular, v.observacao, m.marca, f.nome as fabricante, t.tipo, c.nome as combustivel FROM veiculos v
                JOIN marcas m ON (v.id_marca = m.id)
                JOIN fabricantes f ON (v.id_fabricante = f.id)
                JOIN tipos t ON (v.id_tipo = t.id)
                JOIN combustiveis c ON (v.id_combustivel = c.id);";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }

    public function selectById(int $id)
    {
        $sql = "SELECT v.id, v.modelo, v.ano, v.cor, v.numero_chassi, v.km, v.revisao, v.sinistro, v.roubo_furto, v.aluguel, v.venda, v.particular, v.observacao, m.marca, f.nome as fabricante, t.tipo, c.nome as combustivel FROM veiculos v
                JOIN marcas m ON (v.id_marca = m.id)
                JOIN fabricantes f ON (v.id_fabricante = f.id)
                JOIN tipos t ON (v.id_tipo = t.id)
                JOIN combustiveis c ON (v.id_combustivel = c.id) 
                WHERE v.id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\VeiculoModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM veiculos WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}