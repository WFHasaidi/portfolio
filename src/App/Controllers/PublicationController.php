<?php

namespace App\App\Controllers;

class PublicationController
{
    public function index()
    {
        // Logic to fetch and display a list of publications
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../Views');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('/pages/publications.twig');

    }

    public function show($id)
    {
        // Logic to fetch and display a specific publication by ID
    }

    // Other methods for creating, updating, and deleting publications
}

