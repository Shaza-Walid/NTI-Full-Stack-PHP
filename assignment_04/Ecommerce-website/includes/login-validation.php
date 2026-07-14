<?php

$errors = [];   // Create an array to store validation errors

// Check if Login button was clicked
if(isset($_POST['login'])){
    // Read user inputs
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    // ==========================
    // Email Validation
    // ==========================
    if(empty($email))
        $errors['email']="Email is required.";
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
        $errors['email']="Invalid Email.";
    // ==========================
    // Password Validation
    // ==========================
    if(empty($password))
        $errors['password']="Password is required.";
    elseif(strlen($password)<6)
        $errors['password']="Password must be at least 6 characters.";
    // ==========================
    // If there are no errors Save data inside Session
    // ==========================
    if(empty($errors)){
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        header("Location: products.php");        // Redirect user
        exit();
    }
}