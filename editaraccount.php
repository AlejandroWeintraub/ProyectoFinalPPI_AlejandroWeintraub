<?php
session_start();
$user_id = $_SESSION['user_id'];
$con = mysqli_connect("localhost", "root", "", "Tienda");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Recuperar los datos del formulario de edición
$editedUsername = mysqli_real_escape_string($con, $_POST['editarUsername']);
$editedEmail = mysqli_real_escape_string($con, $_POST['editarEmail']);
$editedPassword = mysqli_real_escape_string($con, $_POST['editarPassword']);
$editedBirthdate = mysqli_real_escape_string($con, $_POST['editarBirthdate']);
$editedAddress = mysqli_real_escape_string($con, $_POST['editarAddress']);

// Actualizar los datos en la base de datos
$query = "UPDATE Usuarios SET
            Nombre_Usuario = '$editedUsername',
            Email = '$editedEmail',
            pass = '$editedPassword',
            F_Nacimiento = '$editedBirthdate',
            Direccion_Postal = '$editedAddress'
          WHERE id_usuario = $user_id";

$result = mysqli_query($con, $query);

if ($result) {
    echo "Actualización exitosa";
} else {
    echo "Error al actualizar: " . mysqli_error($con);
}

mysqli_close($con);
header("Location: shop.php");
?>
