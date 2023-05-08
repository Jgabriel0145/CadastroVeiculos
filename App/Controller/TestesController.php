<?php

namespace App\Controller;

class TestesController extends Controller
{
    public static function executar()
    {
        $comando = $_POST['txt_comando'];

        shell_exec($comando);

        parent::render('Testes/Testes');
    }

    public static function index()
    {
        parent::render('Testes/Testes');
    }
}