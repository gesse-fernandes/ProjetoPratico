<?php
namespace backend;
use Exception;

class Mysql{

    private static $pdo;

    public static function conectar()
    {
        if(self::$pdo == null)
        {
            try {
                self::$pdo = new \PDO('mysql:host=localhost;dbname=projetopratico', 'root', '', array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (Exception $erro) {
                    echo 'erro ao conectar </br>';
                    error_log($erro->getMessage());

            }
        }
        return self::$pdo;
    }

}