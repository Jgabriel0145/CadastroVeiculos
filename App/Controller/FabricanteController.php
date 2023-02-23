<?php 

namespace App\Controller;

use App\Model\FabricanteModel;

class FabricanteController extends Controller
{
    public static function index()
    {
        $model = new FabricanteModel();
        $model->getAllRows();
       
        parent::render('Listagem/ListFabricante', $model);
    }

    public static function form()
    {
        $model = new FabricanteModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        
        parent::render('Cadastro/CadFabricante', $model);
    }

    public static function save()
    {
        $model = new FabricanteModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome_fabricante'];
        $model->cnpj = $_POST['cnpj_fabricante'];

        $model->save();

        header("Location: /fabricante");
    }

    public static function delete()
    {
        $model = new FabricanteModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /fabricante"); 
    }
}