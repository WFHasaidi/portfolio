<?php

namespace App\App\Models;

class Comment
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function addComment($userId, $articleId, $content)
    {
        // Implement the logic to add a comment to the 'Comments' table
        // You can use the provided $connection to execute the necessary SQL queries
        // Example code:
        $query = "INSERT INTO Comments (user_id, article_id, content) VALUES ('$userId', '$articleId', '$content')";
        $result = mysqli_query($this->connection, $query);

        // Handle the query result and return success or failure status
        // You can return a boolean or any other format based on your needs
        if ($result) {
            return true; // Comment added successfully
        } else {
            return false; // Error adding the comment
        }
    }

    public function getCommentsByArticle($articleId)
    {
        // Implement the logic to fetch comments for a specific article from the 'Comments' table
        // Example code:
        $query = "SELECT * FROM Comments WHERE article_id = '$articleId'";
        $result = mysqli_query($this->connection, $query);

        // Process the query result and return the data
        // You can return an array of comment objects or any other format based on your needs
        // Example code to fetch data and return an array of comment objects
        $comments = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $comment = new Comment();
            $comment->id = $row['id'];
            $comment->userId = $row['user_id'];
            $comment->articleId = $row['article_id'];
            $comment->content = $row['content'];
            // Assign other properties
            $comments[] = $comment;
        }

        return $comments;
    }

    // Add more methods as needed, such as getCommentById, updateComment, deleteComment, etc.
}
