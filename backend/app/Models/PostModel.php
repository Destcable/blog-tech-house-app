<?php

namespace App\Models;

use PDO;

class PostModel
{
    public static function get()
    { 
        $conn = new PDO('mysql:host=localhost;dbname=house_blog', 'root', '');
        $result = $conn->query('SELECT * FROM post');
        $data = [];
        foreach ($result as $row) {
            $title = $row['title'];
            $body = $row['body'];
            $created_at = $row['created_at'];
            array_push($data, [
                'title' => $title,
                'body' => $body,
                'created_at' => $created_at
            ]);
        }
        return $data;
    }
}