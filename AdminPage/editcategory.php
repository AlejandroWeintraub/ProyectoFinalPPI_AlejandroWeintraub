<?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the category ID from the URL
        $categoryId = $_GET['id'];

        // Get the updated category name from the form
        $updatedCategoryName = $_POST['Nombre'];

        // Perform the database update
        $con = mysqli_connect("localhost", "root", "", "Tienda");

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        // Update the category name in the 'Categorias' table
        $query = "UPDATE Categorias SET Nombre = '$updatedCategoryName' WHERE ID_Categoria = $categoryId";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "Category updated successfully.";
        } else {
            echo "Error updating category: " . mysqli_error($con);
        }

        mysqli_close($con);
    } else {

        exit();
    }
    header("Location: categorias.php");
?>
