<?php

$errors = [];  // Create an array to store validation errors

// Check if the Save button was clicked.
if(isset($_POST['save'])){
    // Read all user inputs.
    // trim() removes unnecessary spaces.
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $facebook = trim($_POST['facebook']);
    $twitter = trim($_POST['twitter']);
    $instagram = trim($_POST['instagram']);
    // ==================================================
    // Username Validation
    // ==================================================
    // Check if username is empty.
    if(empty($username))
        $errors['username'] = "Username is required.";
    // Username should contain at least 3 characters.
    elseif(strlen($username) < 3)
        $errors['username'] = "Username must be at least 3 characters.";
    // ==================================================
    // Password Validation
    // ==================================================
    if(empty($password))
        $errors['password'] = "Password is required.";
    elseif(strlen($password) < 6)
        $errors['password'] = "Password must contain at least 6 characters.";
    // ==================================================
    // Email Validation
    // ==================================================
    if(empty($email))
        $errors['email'] = "Email is required.";
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
        $errors['email'] = "Invalid email format.";
    // ==================================================
    // Phone Number Validation
    // ==================================================
    if(empty($phone))
        $errors['phone'] = "Phone number is required.";
    // Egyptian phone number validation.
    elseif(!preg_match("/^01[0125][0-9]{8}$/",$phone))
        $errors['phone'] = "Invalid phone number.";
    // ==================================================
    // Facebook URL Validation
    // ==================================================
    if(empty($facebook))
        $errors['facebook'] = "Facebook URL is required.";
    elseif(!filter_var($facebook,FILTER_VALIDATE_URL))
        $errors['facebook'] = "Invalid Facebook URL.";
    // ==================================================
    // Twitter URL Validation
    // ==================================================
    if(empty($twitter))
        $errors['twitter'] = "Twitter URL is required.";
    elseif(!filter_var($twitter,FILTER_VALIDATE_URL))
        $errors['twitter'] = "Invalid Twitter URL.";
    // ==================================================
    // Instagram URL Validation
    // ==================================================
    if(empty($instagram))
        $errors['instagram'] = "Instagram URL is required.";
    elseif(!filter_var($instagram,FILTER_VALIDATE_URL))
        $errors['instagram'] = "Invalid Instagram URL.";

    // ==================================================
    // If there are no validation errors,save all information inside the session.
    // ==================================================
    if(empty($errors)){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['facebook'] = $facebook;
        $_SESSION['twitter'] = $twitter;
        $_SESSION['instagram'] = $instagram;
        header("Location: index.php");    // Redirect the user to Home page.
        exit();
    }
}