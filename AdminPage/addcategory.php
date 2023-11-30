<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $con = mysqli_connect("localhost", "root", "", "Tienda");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    $Nombre = mysqli_real_escape_string($con, $_POST['Nombre']);

    $query = "INSERT INTO Categorias (Nombre) 
              VALUES ('$Nombre')";
    if (mysqli_query($con, $query)) {
        // Insertion successful, redirect to desired page
        header("Location: Categorias.php");
        exit();
    } else {
        // Insertion failed, handle the error
        echo "Error en la consulta: " . mysqli_error($con);
        header("Location: Categorias.php?error=2");
        exit();
    }

    // Close the connection
    mysqli_close($con);
} else {
    // Handle non-POST requests or direct access to the script
    echo "Invalid request";
}
?>