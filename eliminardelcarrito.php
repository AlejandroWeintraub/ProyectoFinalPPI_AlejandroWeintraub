<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "Tienda");
$product_id = $_POST['product_id'];
$user_id = $_SESSION['user_id'];
$query2 = "DELETE FROM Carrito WHERE ID_Producto = $product_id and ID_Usuario = $user_id";
$result2 = mysqli_query($con, $query2);
mysqli_close($con);
header("Location: shop.php");
?>