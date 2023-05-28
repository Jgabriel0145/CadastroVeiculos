<?php

namespace App\Controller;

use Exception;

class BackupController extends Controller
{
    public static function ExportarBanco()
    {
        try
        {
            if(!is_dir('C:/JoaoGabriel_Lucas_3DS/Backup'))
            {
                if(file_exists(BASEDIR . '/App/Controller/Assets/CriarRepos.bat'))
                    exec(BASEDIR . '/App/Controller/Assets/CriarRepos.bat');
            }
            
            if(file_exists(BASEDIR . '/App/Controller/Assets/Export.bat'))
                exec(BASEDIR . '/App/Controller/Assets/Export.bat');


            header("Location: /");
        }
        catch(Exception $ex)
        {
            throw new Exception($ex->getMessage());
        }
    }

    public static function ImportarBanco()
    {
        if(is_dir('C:/JoaoGabriel_Lucas_3DS/Backup'))
        {
            if(file_exists('C:/JoaoGabriel_Lucas_3DS/Backup/banco_backup.sql'))
            {
                if(file_exists(BASEDIR . '/App/Controller/Assets/Import.bat'))
                    exec(BASEDIR . '/App/Controller/Assets/Import.bat');
            }
        }

        header("Location: /");
    }
}