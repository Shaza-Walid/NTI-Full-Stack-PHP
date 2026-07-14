<?php
// Start the session only if one isn't already running.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!-- ===================== NAVBAR START ===================== -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- Website Logo -->
        <a class="navbar-brand fw-bold" href="index.php">SmartMart</a>
        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Navigation Links -->
            <ul class="navbar-nav ms-auto">
                <!-- Home Page -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <!-- Products Page -->
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
                <?php
                // Check if the user is logged in.
                if(isset($_SESSION['email'])){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="account.php">Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="logout.php">Logout</a>
                </li>
                <?php
                }else{
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="account.php">Account</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<!-- ===================== NAVBAR END ===================== -->