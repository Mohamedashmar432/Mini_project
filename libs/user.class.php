<?php
include_once 'database.class.php';
class user
{
    public static function signup($user, $pass, $Email)
    {
        $option = ['cost' => 9,];
        $pass = password_hash($pass, PASSWORD_BCRYPT, $option);
        // Get the database connection
        $conn = database::get_connect();

        $sql = "INSERT INTO `auth` (`username`, `password`, `Email`)
                VALUES ('$user', '$pass', '$Email');";

        $result = false;

        if ($conn->query($sql) === TRUE) {
            $result = true;
            $_SESSION['username']= $user;
            $_SESSION['Loggedin'] =true;
        } else {
            $result = $conn->error; // Change $conn->result to $conn->error to get the error message
        }

        $conn->close();
        return $result;
    }
    public static function login($user, $pass)
    {
        $conn = database::get_connect();

        $sql = "SELECT * FROM `auth` WHERE `username` = '$user'";
        $result = $conn->query($sql);
        if (!$result) {
            echo "Error: " . $conn->error;
        } else {
            if ($result->num_rows == 1) {
                // Fetch the user data
                $rows = $result->fetch_assoc();
                if (password_verify($pass, $rows['password'])) {
                    $_SESSION['username'] = $rows['username'];
                    $_SESSION['Loggedin'] =true;
                    return $rows['username'];
                } else {
                    return false;
                }
            } else {
                echo "No user found with username: $user";
                return false;
            }
        }
    }

    public static function sell($headline, $price, $address, $email)
    {
        $conn = database::get_connect();
        $sql = "INSERT INTO `sell` (`Headline`, `price`, `Address`, `Email`, `image`)
        VALUES ('$headline', '$price', '$address', '$email', 'image.jpeg' )";

        $result = false;

        if ($conn->query($sql) === TRUE) {
            $result = true;
        } else {
            $result = $conn->error; // Change $conn->result to $conn->error to get the error message
        }

        $conn->close();
        return $result;
    }
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    public static function destroy()
    {
        session_destroy();
        /*
        If UserSession is active, set it to inactive.
        */
    }
    public static function logout()
    {
        if (isset($_GET['logout'])) {
            session_unset();
        }
    }
}
