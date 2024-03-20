<?php
session_start();
error_reporting(0);
include_once 'database.class.php';
include_once 'user.class.php';
session_start();
user::set($_POST['username'], true);
function load($template)
{
    include $_SERVER['DOCUMENT_ROOT'] . "/Mini_project/_template/$template.php";
}
