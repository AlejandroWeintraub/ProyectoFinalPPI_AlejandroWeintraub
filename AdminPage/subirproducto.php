<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);




// Conexión a la base de datos
$con = mysqli_connect("localhost", "root", "", "Tienda");
mysqli_set_charset($con, "utf8mb4");
$producto = mysqli_real_escape_string($con, $_POST['Producto']);
$descripcion = mysqli_real_escape_string($con, $_POST['descripcion']);
$precio = $_POST['precio'];
$cantidad = $_POST['Cantidad'];
$fabricante = mysqli_real_escape_string($con, $_POST['fabricante']);
$origen = mysqli_real_escape_string($con, $_POST['origen']);
$categoria = mysqli_real_escape_string($con, $_POST['categoria']);


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Verifica si se ha enviado un archivo de imagen
if (isset($_FILES["imagen"]) && !empty($_FILES["imagen"]["tmp_name"])) {
    // Escapa los datos para prevenir inyección de SQL (puedes ajustar según tus necesidades)


    // Ruta del archivo temporal (imagen)
    $rutaImagen = $_FILES["imagen"]["tmp_name"];

    // Verifica si la ruta de la imagen existe
    if (!file_exists($rutaImagen)) {
        echo "Error: La ruta de la imagen no existe.";
        mysqli_close($con);
        header("Location: Productos.php");
        exit();
    }

    // Lee el contenido de la imagen desde el sistema de archivos
    $imagenContent = file_get_contents($rutaImagen);

    // Verifica si la lectura del contenido de la imagen fue exitosa
    if ($imagenContent === false) {
        echo "Error al leer el contenido de la imagen.";
        mysqli_close($con);
        header("Location: Productos.php");
        exit();
    }

    // Escapa el contenido de la imagen para prevenir inyección de SQL
    $imagenContentEscaped = mysqli_real_escape_string($con, $imagenContent);

    // Realiza la inserción en la base de datos
    $query = "INSERT INTO Product (Nombre, Descripcion, Precio, Cantidad ,Fabricante, Origen, ID_Categoria, Imagen) 
              VALUES ('$producto', '$descripcion', $precio, $cantidad ,'$fabricante', '$origen', $categoria, '$imagenContentEscaped')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "Los datos se han insertado correctamente en la base de datos.";
        mysqli_close($con);
        header("Location: Productos.php");
    } else {
        echo "Error al insertar en la base de datos: " . mysqli_error($con);
        mysqli_close($con);
        header("Location: Productos.php");
    }

} else {
    echo "Error: No se ha enviado ningún archivo de imagen.";
}
mysqli_close($con);
header("Location: Productos.php");
?>