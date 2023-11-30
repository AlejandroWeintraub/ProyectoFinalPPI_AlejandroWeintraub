<?php
    
    $con = $con = mysqli_connect("localhost", "root", "", "Tienda"); 
    $user = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);
    
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $query = "SELECT ID_Usuario, Tipo_Usuario FROM Usuarios WHERE Email = '$user' AND pass = '$pass'";
    $result = mysqli_query($con, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            session_start();
            $_SESSION['user_id'] = $row['ID_Usuario'];
            $tipousuario = $row['Tipo_Usuario'];
            $_SESSION['tipo'] = $tipousuario;
            mysqli_close($con);
            if ($tipousuario == 'user') {
                header("Location: index.php");
                exit();
            } else{
                header("Location: AdminPage/categorias.php");
                exit();
            }
            
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