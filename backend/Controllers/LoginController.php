<?php
namespace backend\Controllers;

class LoginController
{
    public function index()
    {
        \backend\Views\MainView::render('login');
    }
}