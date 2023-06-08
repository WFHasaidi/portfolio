<?php

namespace App\App\Models;

class Link
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAllLinks()
    {
        // Implement the logic to fetch all links from the 'Links' table
        // Example code:
        $query = "SELECT * FROM Links";
        $result = mysqli_query($this->connection, $query);

        // Process the query result and return the data
        // You can return an array of link objects or any other format based on your needs
        // Example code to fetch data and return an array of link objects
        $links = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $link = new Link();
            $link->id = $row['id'];
            $link->title = $row['title'];
            $link->url = $row['url'];
            // Assign other properties
            $links[] = $link;
        }

        return $links;
    }

    // Add more methods as needed, such as get
}