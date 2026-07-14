<?php
session_start();

include("includes/header.php");
include("includes/navbar.php");

if(!isset($_SESSION['email'])){
    include("includes/login-validation.php");
    include("includes/login-form.php");
}else{
    include("includes/profile-validation.php");
    include("includes/profile-form.php");
}
include("includes/footer.php");