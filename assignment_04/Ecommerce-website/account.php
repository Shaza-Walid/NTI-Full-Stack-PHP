<?php
//
//session_start();
//include("includes/navbar.php");

// If the user is not logged in
//if(!isset($_SESSION['email'])){
//    include("includes/login-validation.php");
//    include("includes/login-form.php");
//}
// If the user is already logged in
//else{
//   include("includes/profile-validation.php");
//    include("includes/profile-form.php");
//}
?>

<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <?php 
        include("includes/navbar.php");
        if(!isset($_SESSION['email'])){
            include("includes/login-validation.php");
            include("includes/login-form.php");
        }else{
            include("includes/profile-validation.php");
            include("includes/profile-form.php");
        }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>