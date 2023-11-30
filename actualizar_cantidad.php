<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "Tienda");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$product_id = $_POST['product_id'];
$user_id = $_SESSION['user_id'];
$value = $_POST['quantity_change'];

// Realizar la actualización en la base de datos (asegúrate de validar y sanear los datos)
$query_check = "SELECT cantidad FROM Carrito WHERE ID_Producto = $product_id AND ID_Usuario = $user_id";
$result_check = mysqli_query($con, $query_check);

if ($result_check) {
    $row = mysqli_fetch_assoc($result_check);
    if ($row) {
        $existingQuantity = $row['cantidad'];
        $newQuantity = $existingQuantity + $value;
        if ($newQuantity > 0) {
            $query_update = "UPDATE Carrito SET cantidad = $newQuantity WHERE ID_Producto = $product_id AND ID_Usuario = $user_id";
            echo $query_update;
            $result_update = mysqli_query($con, $query_update);
            if (!$result_update) {
                echo "Error updating quantity: " . mysqli_error($con);
            } else {
                header("Location: shop.php?reload=1");
                exit();
            }
        }
    }
}

mysqli_close($con);
?>