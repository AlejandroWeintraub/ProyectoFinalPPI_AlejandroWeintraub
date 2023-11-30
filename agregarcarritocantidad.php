<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
$con = mysqli_connect("localhost", "root", "", "Tienda");

// Check if the connection was successful
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$product_id = mysqli_real_escape_string($con, $_POST['product_id']);
$user_id = mysqli_real_escape_string($con, $_SESSION['user_id']);
$quantity = mysqli_real_escape_string($con, $_POST['product-quanity']); // Updated to match the input field name

// Get the available stock for the product
$query_stock = "SELECT Cantidad FROM Product WHERE ID_Producto = '$product_id'";
$result_stock = mysqli_query($con, $query_stock);

if ($result_stock) {
    $row_stock = mysqli_fetch_assoc($result_stock);
    $stock_available = $row_stock['Cantidad'];

    // Check if the requested quantity exceeds the available stock
    if ($quantity <= $stock_available) {
        // Check if the product is already in the cart
        $query_cart = "SELECT cantidad FROM Carrito WHERE ID_Producto = '$product_id' AND ID_Usuario = '$user_id'";
        $result_cart = mysqli_query($con, $query_cart);

        if ($result_cart) {
            $row_cart = mysqli_fetch_assoc($result_cart);

            if ($row_cart) {
                $existingQuantity = $row_cart['cantidad'];
                $newQuantity = $existingQuantity + $quantity; // Use the posted quantity

                // Update the quantity in the cart
                $updateQuery = "UPDATE Carrito SET cantidad = '$newQuantity' WHERE ID_Producto = '$product_id' AND ID_Usuario = '$user_id'";
                $updateResult = mysqli_query($con, $updateQuery);

                if (!$updateResult) {
                    echo "Error updating quantity: " . mysqli_error($con);
                }
            } else {
                // Insert the product into the cart
                $currentDate = date("Y-m-d");
                $query_insert = "INSERT INTO Carrito (ID_Usuario, ID_Producto, Fecha, cantidad) VALUES ('$user_id', '$product_id', '$currentDate', $quantity)";
                $result_insert = mysqli_query($con, $query_insert);

                if (!$result_insert) {
                    echo "Error inserting into cart: " . mysqli_error($con);
                }
            }
        } else {
            echo "Error checking if the product exists in the cart: " . mysqli_error($con);
        }
    } else {
        // Redirect to shop.php with an error parameter
        header("Location: shop.php?error=stock");
        exit();
    }
} else {
    echo "Error retrieving stock information: " . mysqli_error($con);
}

mysqli_close($con);

// Redirect to shop.php
header("Location: shop.php");
?>
