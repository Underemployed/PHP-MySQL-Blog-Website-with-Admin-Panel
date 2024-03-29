<?php
require "config/database.php";
if(!isset($_SESSION['user_is_admin'])){
    header("location: " . ROOT_URL . "logout.php");
    //destroy all sessions and redirect user to login page
    session_destroy();
}
//get add-user form data if sbmit button is clicked

if(isset($_POST["submit"])){
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);
    $avatar = $_FILES['avatar'];
    if(!$firstname){
        $_SESSION['add-user'] = 'Please enter your First Name';
    }elseif(!$lastname){
        $_SESSION['add-user'] = 'Please enter your Last Name';
    }elseif(!$username){
        $_SESSION['add-user'] = 'Please enter your Username';
    }elseif(!$email){
        $_SESSION['add-user'] = 'Please enter your Email';
    }elseif(!($is_admin == 1 || $is_admin == 0 )){
        $_SESSION['add-user'] = 'Please select user role';
    }elseif(strlen($createpassword)<8 || strlen($confirmpassword)<8){
        $_SESSION['add-user'] = 'Password should be 8+ characters';
    }elseif(!$avatar['name']){
        $_SESSION['add-user'] = 'Please add Avatar ';
    }else{
        if($createpassword !== $confirmpassword){
            $_SESSION['add-user']="Passwords donot match";

        }else{


            $hashed_password = password_hash($createpassword,PASSWORD_DEFAULT);
            


            $user_check_query="SELECT * FROM users WHERE username='$username' OR email ='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if(mysqli_num_rows($user_check_result)>0){
                $_SESSION['add-user'] = "Username or Email already exists";
            }else{
                //WORK ON AVATAR
                //rename avatar
                $time = time(); // make each image name unique using current timestamp 
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name=$avatar['tmp_name'];
                $avatar_destination_path='../images/' . $avatar_name;

                //,ake sure file is an image
                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extension = explode('.', $avatar_name);
                $extension = end($extension);

                if(in_array($extension,$allowed_files)){

                    //if image not too large
                    if($avatar['size']<1000000){

                        //upload avatar
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    }else{
                        $_SESSION['add-user']="Folder size too big.Should be less than 1mb";
                    }
                }else{
                    $_SESSION['add-user']="File should be png, jpg or jpeg";
                }
            }



        }
    }
    // redirect back t add-user on error
    if(isset($_SESSION['add-user'])){
        // pass data back to sign up page
        $_SESSION['add-user-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin/add-user.php');
        die();
        
    }else{
        //insert new user into users table
        $inset_user_query = "INSERT INTO users SET firstname ='$firstname' ,lastname='$lastname',username='$username',email ='$email' ,password='$hashed_password',avatar='$avatar_name',is_admin='$is_admin'";
        $inset_user_result = mysqli_query($connection, $inset_user_query);
        if(!mysqli_errno($connection)){
            $_SESSION['add-user-success'] = "Registration Successful";
            header('location: ' . ROOT_URL . 'admin/manage-users.php');
            die();
        }
    }
}else{
    //button not clicked
    header('location: ' . ROOT_URL . "admin/add-user.php");
    die();
}