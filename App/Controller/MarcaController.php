<?php 

namespace App\Controller;

use App\Model\MarcaModel;

class MarcaController extends Controller
{
    public static function index()
    {
        $model = new MarcaModel();
        $model->getAllRows();
       
        parent::render('Listagem/ListMarca', $model);
    }

    public static function form()
    {
        $model = new MarcaModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        
        parent::render('Cadastro/CadMarca', $model);
    }

    public static function save()
    {
        $model = new MarcaModel();

        $model->id = $_POST['id'];
        $model->marca = $_POST['nome_marca'];

        if (empty($model->id) or empty($model->marca))
        {
            header('Location: /marca/form');
        }
        else
        {
            $model->save();
            header('Location: /marca');
        }
    }

    public static function delete()
    {
        $model = new MarcaModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /marca"); 
    }
}