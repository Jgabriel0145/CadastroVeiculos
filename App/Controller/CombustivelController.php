<?php 

namespace App\Controller;

use App\Model\CombustivelModel;

class CombustivelController extends Controller
{
    public static function index()
    {
        $model = new CombustivelModel();
        $model->getAllRows();
       
        parent::render('Listagem/ListCombustivel', $model);
    }

    public static function form()
    {
        $model = new CombustivelModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        
        parent::render('Cadastro/CadCombustivel', $model);
    }

    public static function save()
    {
        $model = new CombustivelModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome_combustivel'];

        if ($model->id == 0 or trim($model->nome) == '')
        {
            header('Location: /combustivel/form');
        }
        else
        {
            $model->save();

            header("Location: /combustivel");
        }
        
    }

    public static function delete()
    {
        $model = new CombustivelModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /combustivel"); 
    }
}