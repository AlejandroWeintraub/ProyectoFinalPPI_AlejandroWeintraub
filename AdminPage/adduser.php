<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $con = mysqli_connect("localhost", "root", "", "Tienda");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    $Nombre_Usuario = mysqli_real_escape_string($con, $_POST['user']);
    $Email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);
    $F_Nacimiento = mysqli_real_escape_string($con, $_POST['FNac']);
    $Numero_Tarjeta = mysqli_real_escape_string($con, $_POST['number']);
    $Direccion_Postal = mysqli_real_escape_string($con, $_POST['direccion']);
    $tuser = mysqli_real_escape_string($con, $_POST['categoria']);

    $query = "INSERT INTO Usuarios (Nombre_Usuario, Email, pass, F_Nacimiento, Numero_Tarjeta, Direccion_Postal, Tipo_Usuario) 
              VALUES ('$Nombre_Usuario', '$Email', '$pass', '$F_Nacimiento', '$Numero_Tarjeta', '$Direccion_Postal', '$tuser')";
    echo $query;
    if (mysqli_query($con, $query)) {
        // Insertion successful, redirect to desired page
        header("Location: Usuarios.php");
        exit();
    } else {
        // Insertion failed, handle the error
        echo "Error en la consulta: " . mysqli_error($con);
        header("Location: login.php?error=2");
        exit();
    }

    // Close the connection
    mysqli_close($con);
} else {
    // Handle non-POST requests or direct access to the script
    echo "Invalid request";
}
?>