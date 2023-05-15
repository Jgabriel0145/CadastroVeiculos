<?php 

namespace App\Model;

use App\DAO\TestesDAO;

class TestesModel extends Model
{
    public function backupbanco()
    {
        $dao = new TestesDAO();

        $dao->backupbanco();
    }
}