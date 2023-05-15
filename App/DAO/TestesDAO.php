<?php

namespace App\DAO;

use App\Model\TestesModel;
use \PDO;
use Symfony\Component\Process\Process;

class TestesDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function backupbanco()
    {
        $backup = BACKUP . 'backup2.sql';

        // Comando para gerar o backup usando o mysqldump
        $comando = "mysqldump --opt --user={$_ENV['db']['user']} --password={$_ENV['db']['pass']} --host={$_ENV['db']['host']} {$_ENV['db']['database']} > {$backup}";

        // Cria um processo para executar o comando
        /*$process = new Process($comando);

        // Executa o processo e obtém o resultado
        $result = $process->run();

        if (!$result) {
            echo 'Backup gerado com sucesso';
        } else {
            echo 'Erro ao gerar backup';
        }*/
    }
}