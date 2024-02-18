<?php

class database
{
    public static function get_connect()
    {
        $servername = "localhost";
        $username = "";
        $password = "";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password);
        
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
    }
}    