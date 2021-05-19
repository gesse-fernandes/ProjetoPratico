<?php

namespace backend\Views;

class MainView{
    public static function render($fileName)
    {
        include('pages/'.$fileName. '.php');
    }
}