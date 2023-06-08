<?php

namespace App\App\Controllers;

class TutorialController
{
    public function index()
    {
        // Logic to fetch and display a list of tutorials
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../Views');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('/pages/tutorials.twig');

    }

    public function show($id)
    {
        // Logic to fetch and display a specific tutorial by ID
    }

    // Other methods for creating, updating, and deleting tutorials
}

