<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "Tienda");
$product_id = $_POST['product_id'];
$user_id = $_SESSION['user_id'];
$query2 = "SELECT cantidad FROM Carrito WHERE ID_Producto = $product_id and ID_Usuario = $user_id";
$result2 = mysqli_query($con, $query2);

if ($result2) {
    $row = mysqli_fetch_assoc($result2);
    if ($row) {
        $existingQuantity = $row['cantidad'];
        $newQuantity = $existingQuantity + 1;
        $Query = "UPDATE Carrito SET cantidad = $newQuantity WHERE ID_Producto = $product_id and ID_Usuario = $user_id";
        $Result = mysqli_query($con, $Query);
        mysqli_close($con);
        header("Location: shop.php");
    } else {
        $currentDate = date("Y-m-d");
        $Query = "INSERT INTO Carrito (ID_Usuario, ID_Producto, Fecha, cantidad) VALUES ('{$_SESSION['user_id']}', '$product_id', '$currentDate', 1)";
        $Result = mysqli_query($con, $Query);
        mysqli_close($con);
        header("Location: shop.php");
    }
} else {
    echo "Error checking if the product exists in the cart: " . mysqli_error($con);
}


mysqli_close($con);

?>