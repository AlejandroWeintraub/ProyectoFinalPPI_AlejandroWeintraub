<?php
    $con = $con = mysqli_connect("localhost", "root", "", "Tienda"); 
    $user = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);
    
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $query = "SELECT ID_Usuario FROM Usuarios WHERE Email = '$user' AND pass = '$pass'";
    $result = mysqli_query($con, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
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