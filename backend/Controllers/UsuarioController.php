<?php

namespace backend\Controllers;

class UsuarioController{


    public function index()
    {
        \backend\Views\MainView::render('usuario');
    }
}