<?php 

namespace App\Controller;

use App\Model\VeiculoModel;
use App\Model\MarcaModel;
use App\Model\FabricanteModel;
use App\Model\TipoModel;
use App\Model\CombustivelModel;

class VeiculoController extends Controller
{
    public static function index()
    {
        $model = new VeiculoModel();
        $model->getAllRows();

        parent::render('Listagem/ListVeiculo', $model);
    }

    public static function form()
    {
        $model_veiculo = new VeiculoModel();
        $model_veiculo->getAllRows();

        $model_marca = new MarcaModel();
        $model_marca->getAllRows();

        $model_fabricante = new FabricanteModel();
        $model_fabricante->getAllRows();

        $model_tipo = new TipoModel();
        $model_tipo->getAllRows();

        $model_combustivel = new CombustivelModel();
        $model_combustivel->getAllRows();

        $model_geral = [$model_veiculo, $model_marca, $model_fabricante, $model_tipo, $model_combustivel];

        if(isset($_GET['id']))
            $model_geral[0] = $model_veiculo->getById( (int) $_GET['id']);
        
        parent::render('Cadastro/CadVeiculo', $model_geral);
    }

    public static function save()
    {
        $model = new VeiculoModel();

        $model->id = $_POST['id'];
        $model->modelo = $_POST['modelo_veiculo'];
        $model->ano = $_POST['ano_veiculo'];
        $model->cor = $_POST['cor_veiculo'];
        $model->numero_chassi = $_POST['numero_chassi_veiculo'];
        $model->km = $_POST['km_veiculo'];


        $model->revisao = ( isset($_POST['revisao_veiculo']) ) ? 1 : 0;

        $model->sinistro = ( isset($_POST['sinistro_veiculo']) ) ? 1 : 0;
    
        $model->roubo_furto = ( isset($_POST['roubo_furto_veiculo']) ) ? 1 : 0;

        $model->aluguel = ( isset($_POST['aluguel_veiculo']) ) ? 1 : 0;

        $model->venda = ( isset($_POST['venda_veiculo']) ) ? 1 : 0;

        $model->particular = ( isset($_POST['particular_veiculo']) ) ? 1 : 0;

        $model->observacao = $_POST['observacao_veiculo'];
        $model->id_marca = $_POST['id_marca_veiculo'];
        $model->id_fabricante = $_POST['id_fabricante_veiculo'];
        $model->id_tipo = $_POST['id_tipo_veiculo'];
        $model->id_combustivel = $_POST['id_combustivel_veiculo'];
        
        $model->save();

        header("Location: /veiculo");
    }

    public static function delete()
    {
        $model = new VeiculoModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /veiculo"); 
    }
}