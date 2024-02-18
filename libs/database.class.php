<?php

class database
{
    public static function get_connect()
    {
        $servername = "localhost";
        $username = "mini_project";
        $password = "Root123";
        $db_name = "mini_project";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password,$db_name);
        
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
    }
}    