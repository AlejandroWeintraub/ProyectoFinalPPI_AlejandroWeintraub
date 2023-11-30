<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
$user_id = $_SESSION['user_id'];
$con = mysqli_connect("localhost", "root", "", "Tienda");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Eliminar la cuenta del usuario
$query = "DELETE FROM Usuarios WHERE id_usuario = $user_id";
$result = mysqli_query($con, $query);

if ($result) {
    session_destroy();
    echo "Cuenta eliminada correctamente. Redirigiendo al índice...";
    header("index.html");
} else {
    echo "Error al eliminar la cuenta: " . mysqli_error($con);
}

mysqli_close($con);
header("Location: shop.php");
?>