<?php
namespace backend\Controllers;

class LoginController
{
    public function index()
    {
        if(isset($_POST['entrar']))
        {
            $login = $_POST['login'];
            $senha = $_POST['senha'];

             \backend\Models\LoginModels::logar($login);
            if(\backend\Models\LoginModels::existeLogin($login))
            {
                \backend\Utilidades::alerta("Não existe nehum usuario com este nome de login...");
                \backend\Utilidades::redirect(INCLUDE_PATH . 'login');
            }else{
                $dados = \backend\Models\LoginModels::recuperaDados($login);
                $senhaBanco = $dados['senha'];
                if(\backend\Bcrypt::check($senha,$senhaBanco))
                {
                    $_SESSION['login'] = $dados['login'];
                    \backend\Utilidades::alerta("Logado com sucesso!");
                    \backend\Utilidades::redirect(INCLUDE_PATH);
                    
                }else{
                    \backend\Utilidades::alerta("Senha incorreta");
                    \backend\Utilidades::redirect(INCLUDE_PATH . 'login');
                }
                
            }
        }
        \backend\Views\MainView::render('login');
    }
}