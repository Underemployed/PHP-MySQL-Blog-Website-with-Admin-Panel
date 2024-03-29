<?php
include 'config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNDEREMPLOYED</title>
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONT(MONTSERATE) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,800;1,700&display=swap" rel="stylesheet"> 
</head>
<body>
<section class="form__section">
    <div class="container form__section-container">
        <h2>Sign In</h2> 
        <?php
        if(isset($_SESSION['signup-success'])): 
        ?> 
            <div class="alert__message success">
            <p>
                <?= $_SESSION['signup-success'];
                unset($_SESSION['signup-success']);
                ?>
            </p>
            </div>
        <?php elseif(isset($_SESSION['signin'])): ?>
            <div class="alert__message error">
                <p>
                    <?=$_SESSION['signin'];
                    unset($_SESSION['signin']); 
                    ?>
                </p>
            </div>
        <?php endif; ?>
        <form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
            <input type="text" name="username_email" value='<?= $username_email ?>' placeholder="Username or Email">
            <input type="password" name="password" value='<?= $password ?>' placeholder=" Password">
            <button type="submit" class="btn" name="submit">Sign in</button>
            <small>Don't have an account? <a href="signup.php">Sign up</a></small>
        </form>
    </div>
</section>
</body>
</html>