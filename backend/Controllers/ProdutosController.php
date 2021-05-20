<?php

namespace backend\Controllers;


class ProdutosController{


    public function index()
    {
        if(isset($_POST['cadProd']))
        {
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = $_POST['preco'];
            $imagem = $_FILES['imagem']['name'];
            if($nome == '')
            {
                \backend\Utilidades::alerta("Nome Obrigatorio");
                \backend\Utilidades::redirect(INCLUDE_PATH . 'produtos');
            }
            else if($descricao == '')
            {
                \backend\Utilidades::alerta("Descrição Obrigatorio");
                \backend\Utilidades::redirect(INCLUDE_PATH . 'produtos');
            }
            else if($preco =='')
            {
                \backend\Utilidades::alerta("Preço Obrigatorio");
                \backend\Utilidades::redirect(INCLUDE_PATH . 'produtos');
            }
            else if($imagem == '')
            {
                \backend\Utilidades::alerta("Imagem Obrigatorio");
                \backend\Utilidades::redirect(INCLUDE_PATH . 'produtos');
            }else{
                $permitidos = array('image/jpeg', 'image/jpg', 'image/png');
                if (in_array($_FILES['imagem']['type'], $permitidos)) {
                    //$nome = md5(time() . rand(0, 1000)) . '.PNG';
                    move_uploaded_file($_FILES['imagem']['tmp_name'], 'C:\\xampp\htdocs\\videoPratico\\uploads\\' . $imagem);
                    //echo "Arquivo salvo com sucesso";
                }

          
                \backend\Models\ProdutosModels::adicionar($imagem, $nome, $descricao, $preco);
                \backend\Utilidades::alerta("Cadastro com sucesso!");
                \backend\Utilidades::redirect(INCLUDE_PATH);
            }
        }

        if(isset($_POST['acao'])){
            $id = $_POST['idProd'];
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = $_POST['preco'];
            $imagem = $_FILES['imagem']['name'];
            $permitidos = array('image/jpeg', 'image/jpg', 'image/png');
            if (in_array($_FILES['imagem']['type'], $permitidos)) {
                //$nome = md5(time() . rand(0, 1000)) . '.PNG';
                move_uploaded_file($_FILES['imagem']['tmp_name'], 'C:\\xampp\htdocs\\videoPratico\\uploads\\' . $imagem);
                //echo "Arquivo salvo com sucesso";

            }
            \backend\Models\ProdutosModels::editar($id,$nome,$descricao,$preco,$imagem);
            \backend\Utilidades::alerta("Atualizado com sucesso!");
            \backend\Utilidades::redirect(INCLUDE_PATH);

        }else{
            if (isset($_POST['deletar'])) {
                $id = $_POST['idProd'];
                if (isset($id)) {
                    if (\backend\Models\ProdutosModels::deletar($id)) {
                        \backend\Utilidades::alerta("Deletado com sucesso!");
                        \backend\Utilidades::redirect(INCLUDE_PATH);
                    } else {
                        \backend\Utilidades::alerta("Aconteceu Algum problema");
                        \backend\Utilidades::redirect(INCLUDE_PATH);
                    }
                }
            }
        }

      
     
        
      


        \backend\Views\MainView::render('produtos');
    }
}