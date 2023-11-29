<?php
$con = $con = mysqli_connect("localhost", "root", "", "Tienda");


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "SELECT Distinct  from Categorias";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['ID_Categoria'] . "'>". $row['Nombre'] ."</option>";

}

mysqli_close($con);
?>