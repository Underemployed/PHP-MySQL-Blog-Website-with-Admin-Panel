<?php
require "config/database.php";
if(!isset($_SESSION['user_is_admin'])){
    header("location: " . ROOT_URL . "logout.php");
    //destroy all sessions and redirect user to login page
    session_destroy();
}
if(isset($_POST['submit'])){    
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $title=filter_var($_POST['title'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$title || !$description){
        $_SESSION['edit-category'] = "Invalid form input on edit category page";
    }else{
        $query = "UPDATE categories SET title='$title',description='$description' WHERE id=$id LIMIT 1";
        $result=mysqli_query($connection, $query);  

        if(mysqli_errno($connection)){
            $_SESSION['edit-category'] = "Couldnt update category";

        }else{
            $_SESSION['edit-category-success'] = "$title Category was updated successfully";
        }
    }
}

header('location: ' . ROOT_URL . "admin/manage-categories.php");
die();