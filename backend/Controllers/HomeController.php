<?php

namespace backend\Controllers;


class HomeController
{
    public function index()
    {
        \backend\Views\MainView::render("home");
    }
}