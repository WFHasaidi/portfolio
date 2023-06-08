<?php

namespace App\App\Models;

class Article
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAllArticles()
    {
        // Implement the logic to fetch all articles from the 'Articles' table
        // Example code:
        $query = "SELECT * FROM Articles";
        $result = mysqli_query($this->connection, $query);

        // Process the query result and return the data
        // You can return an array of article objects or any other format based on your needs
        // Example code to fetch data and return an array of article objects
        $articles = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $article = new Article();
            $article->id = $row['id'];
            $article->title = $row['title'];
            $article->content = $row['content'];
            // Assign other properties
            $articles[] = $article;
        }

        return $articles;
    }

    // Add more methods as needed, such as getArticleById, createArticle, updateArticle, deleteArticle, etc.
}
