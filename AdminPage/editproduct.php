<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verifying if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Extracting form data
    $id = $_GET['id'];
    $producto = $_POST['Nombre'];
    $descripcion = $_POST['Descripcion'];
    $precio = $_POST['Precio'];
    $cantidad = $_POST['Cantidad'];
    $fabricante = $_POST['Fabricante'];
    $origen = $_POST['Origen'];
    $categoria = $_POST['categoria'];

    // Database connection
    $con = mysqli_connect("localhost", "root", "", "Tienda");
    mysqli_set_charset($con, "utf8mb4");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // Update the product without changing the image
    $query = "UPDATE Product SET Nombre='$producto', Descripcion='$descripcion', Precio=$precio, Cantidad=$cantidad,
              Fabricante='$fabricante', Origen='$origen', ID_Categoria=$categoria
              WHERE ID_Producto=$id";

    // Debugging: Print the SQL query
    echo $query;

    $result = mysqli_query($con, $query);

    if ($result) {
        echo "Data updated successfully in the database.";
        mysqli_close($con);
        header("Location: Productos.php");
    } else {
        echo "Error updating the database: " . mysqli_error($con);
        mysqli_close($con);
        header("Location: Productos.php");
    }
} else {
    echo "Invalid request.";
    header("Location: Productos.php");
}
?>