<?php

namespace App\App\Controllers;


class ProjectController
{
    public function index()
    {
        // Logic to fetch and display a list of projects
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../Views');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('/pages/projects.twig');

    }

    public function show($id)
    {
        // Logic to fetch and display a specific project by ID
    }

    // Other methods for creating, updating, and deleting projects
}

