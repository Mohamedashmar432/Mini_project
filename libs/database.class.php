<?php

class database
{
    public static $conn = null;
    public static function get_connect()
    {
        if (database::$conn == null) {
            $servername = "localhost";
            $username = "root1";
            $password = "Root@098";
            $dbname = "mini_project";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } else {
                database::$conn = $conn;
                return database::$conn;
            }
        } else {
            return database::$conn;
        }
    }
}
