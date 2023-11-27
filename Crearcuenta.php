<?php
    error_reporting(E_ALL);
    $con = mysqli_connect("localhost", "root", "", "Tienda"); 
    
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    
    $Nombre_Usuario = mysqli_real_escape_string($con, $_POST['user']);
    $Email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);
    $F_Nacimiento = mysqli_real_escape_string($con, $_POST['FNac']);
    $Numero_Tarjeta = mysqli_real_escape_string($con, $_POST['number']);
    $Direccion_Postal = mysqli_real_escape_string($con, $_POST['direccion']);

    $query = "INSERT INTO Usuarios (Nombre_Usuario, Email, pass, F_Nacimiento, Numero_Tarjeta, Direccion_Postal, Tipo_Usuario) 
    VALUES ('$Nombre_Usuario', '$Email', '$pass', '$F_Nacimiento', '$Numero_Tarjeta', '$Direccion_Postal', 'user')";    
    $result = mysqli_query($con, $query);

    if ($result) {
        $query2 = "SELECT ID_Usuario FROM Usuarios WHERE Email = '$Email' AND pass = '$pass'";
        $result2 = mysqli_query($con, $query2);
        $row = mysqli_fetch_assoc($result2);
        if ($row) {
            session_start();
            $_SESSION['user_id'] = $row['ID_Usuario'];
            mysqli_close($con);
            header("Location: index.html");
            exit();
        } else {
            header("Location: login.php?error=1");
            mysqli_close($con);
            exit();
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($con);
        mysqli_close($con);
        header("Location: login.php?error=2");
        exit();
    }
    mysqli_close($con);
?>
