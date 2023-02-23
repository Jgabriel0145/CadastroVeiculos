<?php

namespace App\DAO;

use Exception;
use \PDO;

abstract class DAO 
{
    protected $conexao;

    public function __construct()
    {   
        //Apenas alterando a porta do localhost de 3307 para 3306
        try
        {
            $dsn = "mysql:host=" . $_ENV['db']['host'] . ";dbname=" . $_ENV['db']['database'];
            $this->conexao = new PDO($dsn, $_ENV['db']['user'], $_ENV['db']['pass']);
        }
        catch(Exception $ex)
        {
            $_ENV['db']['host'] = 'localhost:3306';
            
            $dsn = "mysql:host=" . $_ENV['db']['host'] . ";dbname=" . $_ENV['db']['database'];
            $this->conexao = new PDO($dsn, $_ENV['db']['user'], $_ENV['db']['pass']);
        }
    }

    
}