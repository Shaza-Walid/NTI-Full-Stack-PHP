<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Invoice and Discount Calculator</title>
        <style>
            body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.8; }
            .error { color: red; font-weight: bold; }
            .success { color: green; font-weight: bold; }
            .invoice-box { border: 1px solid #ccc; padding: 15px; margin-top: 20px; width: 350px; }
        </style>
    </head>
    <body>

        <h2>Discount and Invoice System</h2>
        
        <form method="POST" action="">
            <label>Product Price:</label><br>
            <input type="text" name="price" required><br><br>
            
            <label>Quantity:</label><br>
            <input type="text" name="quantity" required><br><br>
            
            <input type="submit" name="submit" value="Calculate Invoice">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {    // Check if the user has clicked the Submit button

            // Receive data from the form
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];

            echo "<div class='invoice-box'>";

            // 1. Check if the inputs are numbers only (No letters allowed)
            if(!is_numeric($price) || !is_numeric($quantity))
                echo "<p class='error'>Error: You must enter numbers only, letters are not allowed.</p>";
            // 2. Check if the numbers are negative
            elseif($price < 0 || $quantity < 0)
                echo "<p class='error'>Error: Negative numbers are not allowed.</p>";
            // 3. If the data is valid, proceed with calculations
            else{
                $total_before = $price * $quantity;    // Calculate the total price before discount

                // Determine the discount percentage based on the total price
                if($total_before < 1000)
                    $discount_percentage = 10; // 10% discount
                else
                    $discount_percentage = 15; // 15% discount

                $discount_value = $total_before * ($discount_percentage / 100);  // Calculate the actual discount value
                $total_after = $total_before - $discount_value;                 // Calculate the final price after discount

                // Print the invoice for the customer
                echo "<h3>Invoice Details:</h3>";
                echo "Total before discount: <strong>" . $total_before . " EGP</strong><br>";
                echo "Discount percentage: <strong>" . $discount_percentage . "%</strong><br>";
                echo "Discount amount: <strong>" . $discount_value . " EGP</strong><br>";
                echo "<hr>";
                echo "<span class='success'>Final price after discount: " . $total_after . " EGP</span>";
            }

            echo "</div>";
        }
        ?>

    </body>
</html>