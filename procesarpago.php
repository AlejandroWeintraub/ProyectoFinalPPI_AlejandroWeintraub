<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "Tienda");

// Check if the connection was successful
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$user_id = (int)$_SESSION['user_id']; // Cast to integer to ensure it's a number

// Retrieve items from the user's cart along with their quantities
$query2 = "SELECT ID_Producto, Cantidad FROM carrito WHERE ID_Usuario = $user_id";
$result2 = mysqli_query($con, $query2);

$purchaseSuccessful = true;

while ($row = mysqli_fetch_array($result2)) {
    $valorcarrito = $row["Cantidad"];

    // Check the available stock for each product in the cart
    $query3 = "SELECT Cantidad FROM product WHERE ID_Producto = " . $row['ID_Producto'];
    $result3 = mysqli_query($con, $query3);

    while ($row3 = mysqli_fetch_array($result3)) {
        $stock = $row3["Cantidad"];

        if ($stock >= $valorcarrito) {
            $faltante = $stock - $valorcarrito;

            if ($faltante < 0) {
                // Si el faltante es negativo, vender solo la cantidad en stock
                $faltante = 0;
            }

            // Update the product quantity in the Product table
            $query4 = "UPDATE Product SET Cantidad = $faltante WHERE ID_Producto = " . $row['ID_Producto'];
            $result4 = mysqli_query($con, $query4);

            // Check for errors in the update query
            if (!$result4) {
                $purchaseSuccessful = false;
                break;
            }

            // Insert a record into the historial table to keep a history of the user's purchases
            $query = "INSERT INTO historial (ID_Usuario, ID_Producto, Fecha, Cantidad)
                      SELECT $user_id, " . $row['ID_Producto'] . ", NOW(), $valorcarrito";

            $result = mysqli_query($con, $query);

            // Check for errors in the insert query
            if (!$result) {
                $purchaseSuccessful = false;
            }
        } else {
            $purchaseSuccessful = false;
            break;
        }
    }
}

if ($purchaseSuccessful) {
    // Delete items from the user's cart
    $query = "DELETE FROM Carrito WHERE ID_Usuario = $user_id";
    $result = mysqli_query($con, $query);

    // Check for errors in the delete query
    if (!$result) {
        $purchaseSuccessful = false;
    }
}

// Close the database connection
mysqli_close($con);

// Redirect the user to the shop page with a parameter indicating success or failure
header("Location: shop.php?reload=2&purchase=" . ($purchaseSuccessful ? "success" : "failure"));
exit();
?>
