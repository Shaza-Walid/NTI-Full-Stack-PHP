<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SmartMart</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <?php
        // Include the navigation bar.
        // This file already starts the session.
        include("includes/navbar.php");
        ?>
        <!-- ===================== HERO SECTION ===================== -->
        <header class="hero">
            <!-- Dark Overlay -->
            <div class="overlay">
                <div class="container text-center">
                    <!-- Main Heading -->
                    <h1>Welcome To SmartMart</h1>
                    <!-- Small Description -->
                    <p>Discover the best products with amazing prices.</p>
                    <!-- Shop Button -->
                    <a href="products.php" class="btn btn-warning btn-lg">Shop Now</a>
                </div>
            </div>
        </header>
        <!-- ===================== END HERO ===================== -->
        <!-- Small About Section -->
        <section class="container my-5">
            <h2 class="text-center">Why Choose Us?</h2>
            <p class="text-center">We provide high quality products with affordable prices.
                                Our goal is customer satisfaction and fast delivery.</p>
        </section>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>