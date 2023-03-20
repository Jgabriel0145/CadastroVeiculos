<?php 

namespace App\Controller;

use App\Model\TipoModel;

class TipoController extends Controller
{
    public static function index()
    {
        $model = new TipoModel();
        $model->getAllRows();
       
        parent::render('Listagem/ListTipo', $model);
    }

    public static function form()
    {
        $model = new TipoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        
        parent::render('Cadastro/CadTipo', $model);
    }

    public static function save()
    {
        $model = new TipoModel();

        $model->id = $_POST['id'];
        $model->tipo = $_POST['nome_tipo'];

        if ($model->id == 0 or trim($model->tipo) == '' or strlen($model->tipo) >= 256)
        {
            header('Location: /tipo/form');
        }
        else
        {
            $model->save();
            header('Location: /tipo');
        }
    }

    public static function delete()
    {
        $model = new TipoModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /tipo"); 
    }
}