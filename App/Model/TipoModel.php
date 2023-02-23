<?php 

namespace App\Model;

use App\DAO\TipoDAO;

class TipoModel extends Model
{
    public $id, $tipo;

    public function save()
    {
        $dao = new TipoDAO();

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
        $dao = new TipoDAO();
        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new TipoDAO();

        $obj = $dao->selectById($id);
        
        return ($obj) ? $obj : new TipoModel();
    }

    public function delete(int $id)
    {
        $dao = new TipoDAO();
        $dao->delete($id);
    }
}