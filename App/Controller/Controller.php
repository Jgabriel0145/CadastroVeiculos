<?php

namespace App\Controller;

abstract class Controller
{
    protected static function render($view, $model = null)
    {
        
        $arquivo_view = VIEWS . $view . '.php';
        /*var_dump($arquivo_view); 
        exit;*/

        if(file_exists($arquivo_view))
            include $arquivo_view;
        else
            exit('Arquivo da View não encontrado. Arquivo: ' . $view);
    }
}