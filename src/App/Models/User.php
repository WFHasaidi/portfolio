<?php

namespace App\App\Models;

class User
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function registerUser($name, $email, $password)
    {
        // Implement the logic to register a new user in the 'Users' table
        // You can use the provided $connection to execute the necessary SQL queries
        // Example code:
        $query = "INSERT INTO Users (name, email, password) VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($this->connection, $query);

        // Handle the query result and return success or failure status
        // You can return a boolean or any other format based on your needs
        if ($result) {
            return true; // User registered successfully
        } else {
            return false; // Error registering the user
        }
    }

    // Add more methods as needed, such as getUserById, updateUser, deleteUser, etc.
}
