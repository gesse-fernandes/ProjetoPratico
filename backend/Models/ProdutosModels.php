<?php

namespace backend\Models;


class ProdutosModels
{
    public static function adicionar($imagem,$nome,$descricao,$preco)
    {
        $pdo = \backend\Mysql::conectar();
        $sql = $pdo->prepare("INSERT INTO produto(imagem,nomeProduto,descricao,preco) values(:img,:nome,:descri,:preco)");
        $sql->bindValue(":img",$imagem);
        $sql->bindValue(":nome",$nome);
        $sql->bindValue(":descri",$descricao);
        $sql->bindValue(":preco",$preco);
        $sql->execute();
    }

    public static function listarProdutos()
    {
        $pdo = \backend\Mysql::conectar();
        $sql = $pdo->query("SELECT * FROM  produto");
        if($sql-> rowCount() > 0)
        {
            return $sql->fetchAll();
        }else{
            return array();
        }
    }
}