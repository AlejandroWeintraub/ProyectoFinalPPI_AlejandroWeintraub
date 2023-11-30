<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$con = mysqli_connect("localhost", "root", "", "Tienda");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Debugging Output
var_dump($_POST); // Add this line to check what data is being sent via POST

$userId = mysqli_real_escape_string($con, $_GET['id']); 
$Nombre_Usuario = mysqli_real_escape_string($con, $_POST['user']);
$Email = mysqli_real_escape_string($con, $_POST['email']);
$pass = mysqli_real_escape_string($con, $_POST['password']);
$F_Nacimiento = mysqli_real_escape_string($con, $_POST['FNac']);
$Numero_Tarjeta = mysqli_real_escape_string($con, $_POST['number']);
$Direccion_Postal = mysqli_real_escape_string($con, $_POST['direccion']);
$user = mysqli_real_escape_string($con, $_POST['tuser']);
echo $user;

$query = "UPDATE Usuarios SET Nombre_Usuario='$Nombre_Usuario', Email='$Email', pass='$pass',
    F_Nacimiento='$F_Nacimiento', Numero_Tarjeta='$Numero_Tarjeta', Direccion_Postal='$Direccion_Postal',
    Tipo_Usuario='$user' WHERE ID_Usuario=$userId";

$result = mysqli_query($con, $query);

if ($result) {
    mysqli_close($con);
    // Set a session variable to indicate success
    session_start();
    $_SESSION['update_success'] = true;
    header("Location: Usuarios.php");
    exit();
} else {
    // Set a session variable to indicate failure
    session_start();
    echo "Error en la consulta: " . mysqli_error($con);
    mysqli_close($con);
    header("Location: Usuarios.php?error=2");
    exit();
}
mysqli_close($con);
?>
