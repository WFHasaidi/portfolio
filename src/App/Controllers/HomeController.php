<?php

namespace App\App\Controllers;

class HomeController
{
    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../Views');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('/pages/home.twig');
    }
}

