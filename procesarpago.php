<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "Tienda");
$currentDate = date("Y-m-d");
$user_id = $_SESSION['user_id'];

$query = "INSERT INTO historial (ID_Usuario, ID_Producto, Fecha, Cantidad)
SELECT ID_Usuario, ID_Producto, '$currentDate', Cantidad
FROM Carrito WHERE ID_Usuario = $user_id;";
echo $query;

$result = mysqli_query($con, $query);

if ($result) {
    $query = "DELETE FROM Carrito WHERE ID_Usuario = $user_id";
    $result = mysqli_query($con, $query);
}

mysqli_close($con);
header("Location: shop.php");
?>