<?php

use App\Controller\CombustivelController;
use App\Controller\FabricanteController;
use App\Controller\MarcaController;
use App\Controller\TipoController;
use App\Controller\VeiculoController;

use App\Controller\BackupController;

use App\Controller\TestesController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    //Combustível
    case '/combustivel/form':
        CombustivelController::form();
        break;

    case '/combustivel/form/save':
        CombustivelController::save();
        break;

    case '/combustivel':
        CombustivelController::index();
        break;

    case '/combustivel/delete':
        CombustivelController::delete();
        break;

    //Fabricante
    case '/fabricante/form':
        FabricanteController::form();
        break;

    case '/fabricante/form/save':
        FabricanteController::save();
        break;

    case '/fabricante':
        FabricanteController::index();
        break;

    case '/fabricante/delete':
        FabricanteController::delete();
        break;

    //Marca
    case '/marca/form':
        MarcaController::form();
        break;

    case '/marca/form/save':
        MarcaController::save();
        break;

    case '/marca':
        MarcaController::index();
        break;

    case '/marca/delete':
        MarcaController::delete();
        break;

    //Tipo
    case '/tipo/form':
        TipoController::form();
        break;

    case '/tipo/form/save':
        TipoController::save();
        break;

    case '/tipo':
        TipoController::index();
        break;

    case '/tipo/delete':
        TipoController::delete();
        break;

    //Veículo
    case '/veiculo/form':
        VeiculoController::form();
        break;

    case '/veiculo/form/save':
        VeiculoController::save();
        break;

    case '/veiculo':
        VeiculoController::index();
        break;

    case '/veiculo/delete':
        VeiculoController::delete();
        break;

    
    //Backup
    case '/backup/exportar':
        BackupController::ExportarBanco();
        break;

    case '/backup/importar':
        BackupController::ImportarBanco();
        break;

    
    //Testes
    case '/testes':
        TestesController::index();
        break;

    case '/testes/fazer':
        TestesController::executar();
        header('Location: /testes');
        break;

    default:
        include 'Views/Inicio.php';
        break;
}