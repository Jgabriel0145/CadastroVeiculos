<?php

namespace App\Model;

use App\DAO\FabricanteDAO;

class FabricanteModel extends Model
{
    public $id, $nome, $cnpj;

    public function validar_cnpj($cnpj)
    {
        $cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);
        
        if (strlen($cnpj) != 14)
            return false;

        if (preg_match('/(\d)\1{13}/', $cnpj))
            return false;	

        for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++)
        {
            $soma += $cnpj[$i] * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }

        $resto = $soma % 11;

        if ($cnpj[12] != ($resto < 2 ? 0 : 11 - $resto))
            return false;

        for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++)
        {
            $soma += $cnpj[$i] * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }

        $resto = $soma % 11;

        return $cnpj[13] == ($resto < 2 ? 0 : 11 - $resto);
    }

    public function save()
    {
        $dao = new FabricanteDAO();

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
        $dao = new FabricanteDAO();
        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new FabricanteDAO();

        $obj = $dao->selectById($id);
        
        return ($obj) ? $obj : new FabricanteModel();
    }

    public function delete(int $id)
    {
        $dao = new FabricanteDAO();
        $dao->delete($id);
    }
}