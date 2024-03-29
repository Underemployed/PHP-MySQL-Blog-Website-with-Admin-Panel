<?php
session_start();
define("ROOT_URL", "http://localhost/blog/");
define('DB_HOST', 'localhost');
define('DB_USER', 'underemployed');
define('DB_PASS', 'admin1234');
define('DB_NAME', 'blog');
if (!isset($_SESSION['user-id'])) {
    header("location: " . ROOT_URL . "logout.php");
    //destroy all sessions and redirect user to login page
    session_destroy();
    die();
    header("location: " . ROOT_URL . "signin.php");
}