<?php
// Start the session.
// We need the session to know if the user is logged in.
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
// ======================================================
// Create an associative array that contains all products.
// The key represents the product name.
// The value is another associative array
// that contains the price, image, and description.
// ======================================================
$products = [
    "Laptop" => [
        "price" => 25000,
        "img" => "images/laptop.jpg",
        "desc" => "High performance laptop for programming."
    ],
    "Smart Phone" => [
        "price" => 15000,
        "img" => "images/smartPhone.jpg",
        "desc" => "Latest smartphone with amazing camera."
    ],
    "Gaming Headset" => [
        "price" => 1200,
        "img" => "images/gamingHeadset.jpg",
        "desc" => "Crystal clear sound for gaming."
    ],
    "Smart Watch" => [
        "price" => 3500,
        "img" => "images/smartWatch.jpg",
        "desc" => "Track your health and notifications."
    ],
    "Keyboard" => [
        "price" => 900,
        "img" => "images/keyboard.jpg",
        "desc" => "Mechanical RGB Keyboard."
    ],
    "Camera" => [
        "price" => 18000,
        "img" => "images/camera.jpg",
        "desc" => "Professional DSLR Camera."
    ]
];
// Include the navigation bar.
include("includes/header.php");
include("includes/navbar.php");
?>
<div class="container my-5">
    <h1 class="text-center mb-5">Our Products</h1>
    <div class="row">
        <?php
        // ===================================================
        // Loop through every product inside the array.
        // $productName contains the key.
        // $details contains the value (price, image, description).
        // ===================================================
        foreach($products as $productName => $details){
        ?>
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100">
                <!-- Product Image -->
                <img
                    src="<?= $details['img']; ?>"
                    class="card-img-top"
                    alt="<?= $productName; ?>">
                <div class="card-body">
                    <!-- Product Name -->
                    <h3 class="card-title"><?= $productName; ?></h3>
                    <!-- Product Description -->
                    <p class="card-text"><?= $details['desc']; ?></p>
                    <!-- Product Price -->
                    <h5 class="text-success">$<?= $details['price']; ?></h5>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary w-100">Buy Now</button>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<?php
include("includes/footer.php");
?>