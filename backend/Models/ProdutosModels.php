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

    public static function pesquisar($nome)
    {
        $pdo = \backend\Mysql::conectar();
        $sql = $pdo->prepare("SELECT * FROM produto where nomeProduto like '%$nome%'");
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            return $sql->fetch();
        }
        else{
            return "";
        }
    }

    public static function existeId($id)
    {
        $pdo = \backend\Mysql::conectar();
        $sql = $pdo->prepare("SELECT * FROM produto where id = :id");
        $sql->bindValue(":id",$id);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            return true;
        }else{
            return false;
        }
    }

    public static function selecionaId($id)
    {
        $pdo = \backend\Mysql::conectar();
        $sql = $pdo->prepare("SELECT * FROM produto where id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return $sql->fetch();
        } else {
            return "";
        }
    }
    public static function editar($id,$nome,$descricao,$preco,$imagem)
    {
        if (ProdutosModels::existeId($id)) {
            $pdo = \backend\Mysql::conectar();
            $sql= $pdo->prepare("UPDATE produto SET imagem = :imagem , nomeProduto = :nome ,descricao = :descricao, preco = :preco WHERE id = $id ");
            $sql->bindValue(":imagem", $imagem);
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":descricao", $descricao);
            $sql->bindValue(":preco", $preco);
            $sql->execute();
            return true;
        }else{
            return false;
        }
    }
    public static function deletar($id)
    {
        if(ProdutosModels::existeId($id))
        {
            $pdo = \backend\Mysql::conectar();
            $sql = $pdo->prepare("DELETE FROM produto where id = :id");
            $sql->bindValue(":id",$id);
            $sql->execute();
            return true;
        }else{
            return false;
        }
    }
}