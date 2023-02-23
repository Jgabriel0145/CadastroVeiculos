<?php 

namespace App\Model;

use App\DAO\VeiculoDAO;

class VeiculoModel extends Model
{
    public $id, $modelo, $ano, $cor, $numero_chassi, $km, $revisao, $sinistro, $roubo_furto, $aluguel, $venda, $particular, $observacao, $id_marca, $id_fabricante, $id_tipo, $id_combustivel;

    public function save()
    {
        $dao = new VeiculoDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        } 
        else 
        {
            $dao->update($this);
        } 
    }

    public function getAllRows()
    {      
        $dao = new VeiculoDAO();
        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new VeiculoDAO();

        $obj = $dao->selectById($id);
        
        return ($obj) ? $obj : new TipoModel();
    }

    public function delete(int $id)
    {
        $dao = new VeiculoDAO();
        $dao->delete($id);
    }
}