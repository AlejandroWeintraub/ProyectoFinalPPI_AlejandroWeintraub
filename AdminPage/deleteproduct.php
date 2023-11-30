<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

    $user_id = $_SESSION['user_id'];

    $con = mysqli_connect("localhost", "root", "", "Tienda");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // Get the category ID from the URL
    $p_id = $_GET['id'];

    // Delete the category
    $query = "DELETE FROM Product WHERE ID_Producto = $p_id";
    $result = mysqli_query($con, $query);
    if ($result) {
        header("Location: Productos.php");
    } else {
        echo "Error deleting category: " . mysqli_error($con);
    }
 
    mysqli_close($con);

?>
