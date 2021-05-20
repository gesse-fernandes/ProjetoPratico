<?php

namespace backend\Controllers;


class HomeController
{
    public function index()
    {
        if(isset($_GET['loggout'])){
            session_unset();
            session_destroy();
            \backend\Utilidades::redirect(INCLUDE_PATH);
        }

        if(isset($_POST['editar']))
        {
            \backend\Views\MainView::render('editarProduto');
        }
        \backend\Views\MainView::render("home");
    }


}