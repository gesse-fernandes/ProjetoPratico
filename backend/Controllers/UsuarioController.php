<?php

namespace backend\Controllers;

class UsuarioController{


    public function index()
    {
        if(isset($_POST['registrar']))
        {
            $nome = $_POST['nome'];
            $nomeLogin = $_POST['login'];
            $senha = $_POST['senha'];

           if(\backend\Models\UsuariosModels::existe($nomeLogin))
           {
               \backend\Utilidades::alerta("Ja existe este login use outro nome para cadastro");
               \backend\Utilidades::redirect(INCLUDE_PATH . 'usuario');
           }
           if(strlen($senha)< 6)
           {
               \backend\Utilidades::alerta("A senha é muita é muito curta");
               \backend\Utilidades::redirect(INCLUDE_PATH . 'usuario');
           }
           else{
               $senha = \backend\Bcrypt::hash($senha);
               \backend\Models\UsuariosModels::cadastra($nome,$nomeLogin,$senha);
               \backend\Utilidades::alerta("Registrado com sucesso");
               \backend\Utilidades::redirect(INCLUDE_PATH . 'login');
           }

        }
        \backend\Views\MainView::render('usuario');
    }
}