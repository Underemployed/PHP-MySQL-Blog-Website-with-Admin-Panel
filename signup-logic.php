<?php
require "config/database.php";
session_start();

if (isset($_POST["submit"])) {
    // Sanitize and validate inputs
    $firstname = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var(trim($_POST['username']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email_raw = trim($_POST['email']);
    $email = filter_var($email_raw, FILTER_VALIDATE_EMAIL);
    $createpassword = $_POST['createpassword'];
    $confirmpassword = $_POST['confirmpassword'];
    $avatar = $_FILES['avatar'];

    // Store input data for repopulating form on error
    $_SESSION['signup-data'] = [
        'firstname' => $firstname,
        'lastname' => $lastname,
        'username' => $username,
        'email' => htmlspecialchars($email_raw)
    ];

    // Validation
    if (!$firstname) {
        $_SESSION['signup'] = 'Please enter your First Name';
    } elseif (!$lastname) {
        $_SESSION['signup'] = 'Please enter your Last Name';
    } elseif (!$username) {
        $_SESSION['signup'] = 'Please enter your Username';
    } elseif (!$email) {
        $_SESSION['signup'] = 'Please enter a valid Email';
    } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['signup'] = 'Password should be at least 8 characters';
    } elseif ($createpassword !== $confirmpassword) {
        $_SESSION['signup'] = 'Passwords do not match';
    } elseif (!$avatar['name']) {
        $_SESSION['signup'] = 'Please upload an avatar image';
    } else {
        // Check if username or email exists
        $stmt = $connection->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['signup'] = "Username or Email already exists";
        } else {
            // Validate and process avatar
            $time = time();
            $avatar_name = $time . '-' . basename($avatar['name']);
            $avatar_tmp_name = $avatar['tmp_name'];
            $avatar_destination_path = 'images/' . $avatar_name;
            $extension = strtolower(pathinfo($avatar_name, PATHINFO_EXTENSION));
            $allowed_extensions = ['png', 'jpg', 'jpeg'];

            if (in_array($extension, $allowed_extensions)) {
                if ($avatar['size'] < 1000000) {
                    $mime = mime_content_type($avatar_tmp_name);
                    if (in_array($mime, ['image/jpeg', 'image/png', 'image/jpg'])) {
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);

                        // Hash password
                        $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

                        // Insert user
                        $insert_stmt = $connection->prepare("INSERT INTO users (firstname, lastname, username, email, password, avatar, is_admin) VALUES (?, ?, ?, ?, ?, ?, 0)");
                        $insert_stmt->bind_param("ssssss", $firstname, $lastname, $username, $email, $hashed_password, $avatar_name);
                        $insert_stmt->execute();

                        if (!$insert_stmt->error) {
                            $_SESSION['signup-success'] = "Registration successful. Please log in.";
                            header('Location: ' . ROOT_URL . 'signin.php');
                            exit;
                        } else {
                            $_SESSION['signup'] = "Something went wrong. Please try again.";
                        }
                    } else {
                        $_SESSION['signup'] = "Only PNG and JPEG images are allowed.";
                    }
                } else {
                    $_SESSION['signup'] = "Avatar size must be less than 1MB.";
                }
            } else {
                $_SESSION['signup'] = "Avatar must be a PNG, JPG, or JPEG file.";
            }
        }
        $stmt->close();
    }

    // Redirect on error
    if (isset($_SESSION['signup'])) {
        header('Location: ' . ROOT_URL . 'signup.php');
        exit;
    }
} else {
    // Redirect if accessed without form submission
    header('Location: ' . ROOT_URL . 'signup.php');
    exit;
}
