<?php
namespace backend\Models;


class LoginModels{

    public static function logar($login)
    {
        $pdo = \backend\Mysql::conectar();
        $sql = $pdo->prepare("SELECT * FROM usuario where login = :login");
        $sql->bindValue(":login",$login);
        $sql->execute();
    }

    public static function existeLogin($login)
    {
        $pdo = \backend\Mysql::conectar();
        $sql = $pdo->prepare("SELECT * FROM usuario where login = :login");
        $sql->bindValue(":login", $login);
        $sql->execute();
        if($sql->rowCount()  == 0 )
        {
            return true;
        }
    }

    public static function recuperaDados($login)
    {
        $pdo = \backend\Mysql::conectar();
        $sql = $pdo->prepare("SELECT * FROM usuario where login = :login");
        $sql->bindValue(":login", $login);
        $sql->execute();
        $dados = $sql->fetch();
        return $dados;
    }

}