<?php
require "config/database.php";


if(isset($_POST['submit'])){
    // getting input
    $username_email = filter_var($_POST['username_email'] , FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var(($_POST['password']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$username_email){
        $_SESSION['signin'] = 'Username or Email is Inccorrect';

    }
    elseif(!$password){
        $_SESSION['signin'] = 'Password required';
 
    }else{  
        // fetch user from database
        $fetch_user_query = "SELECT * FROM users WHERE username = '$username_email' OR email = '$username_email'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);

        if(mysqli_num_rows($fetch_user_result) == 1){
            //convert the record into assoc array
            $user_record=mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];

            // compare form password with database password
            if(password_verify($password,$db_password)){

                // set session for access control
                $_SESSION['user-id'] = $user_record['id'];
                $_SESSION['signin-success'] = "User successfully logged in";

                //set session if user is  admin
                if($user_record['is_admin']==1){
                    $_SESSION['user_is_admin'] = true;

                }
                //log in user
                header('location: ' . ROOT_URL . 'admin/index.php');
                
            }else{
                $_SESSION['signin'] = "Please check your input";
            }
        }else{
            $a = mysqli_num_rows($fetch_user_result);
            echo mysqli_num_rows($fetch_user_result);
            $_SESSION['signin'] = "User Not found";
        }
    }

    //if any problem, redirect back to signin page
    if(isset($_SESSION['signin'])){
        $_SESSION['signin-data'] = $_POST;
        header('location: ' . ROOT_URL . 'signin.php');
        die();
    }

}else{
    header('location: ' . ROOT_URL . "signin.php");
    die();
}
// error_log();