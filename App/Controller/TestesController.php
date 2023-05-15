<?php

namespace App\Controller;

use App\Model\TestesModel;

class TestesController extends Controller
{
    public static function executar()
    {
        $model = new TestesModel();

        $model->backupbanco();


        parent::render('Testes/Testes');
    }

    public static function index()
    {
        parent::render('Testes/Testes');
    }
}