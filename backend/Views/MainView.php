<?php

namespace backend\Views;

class MainView{
    public function render($fileName)
    {
        include('pages/'.$fileName. '.php');
    }
}