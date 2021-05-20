<?php

namespace backend\Models;


class UsuariosModels{


    public static function cadastra($nome,$login,$senha)
    {
       $pdo = \backend\Mysql::conectar();
       $sql = $pdo->prepare("INSERT INTO usuario(login,nome,senha) values(:login,:nome,:senha)");
       $sql->bindValue(":login",$login);
       $sql->bindValue(":nome",$nome);
       $sql->bindValue(":senha",$senha);
       $sql->execute();

    }
    public static function existe($login)
    {
        $pdo = \backend\Mysql::conectar();
        $sql = $pdo->prepare("SELECT login from usuario where login = :login");
        $sql->bindValue(":login",$login);
        $sql->execute();
        if($sql->rowCount() == 1)
        {
            return true;
        }
        else{
            return false;
        }
    }
}