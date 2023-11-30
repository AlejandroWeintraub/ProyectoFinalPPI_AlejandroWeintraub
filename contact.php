<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <?php
    session_start();

    ?>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none"
                        href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i
                            class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i
                            class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i
                            class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i
                            class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <!-- Logo -->
            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                Zay
            </a>

            <!-- Toggle Button for Responsive Design -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#templatemo_main_nav" aria-controls="templatemo_main_nav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between"
                id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- User Actions -->
                <div class="navbar align-self-center d-flex">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Cart Icon -->
                        <a class="nav-icon position-relative text-decoration-none" href="#" data-bs-toggle="modal"
                            data-bs-target="#shoppingcart">
                            <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        </a>

                        <!-- User Profile Dropdown -->
                        <div class="dropdown">
                            <a class="nav-icon position-relative text-decoration-none" href="#" id="profileDropdown"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-fw fa-user text-dark mr-3"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                <!-- User Account Options -->
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#miCuentaModal">
                                    <i class="ti ti-user fs-6"></i>
                                    <span class="ms-2">Mi cuenta</span>
                                </a>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#historialModal">
                                    <i class="ti ti-list-check fs-6"></i>
                                    <span class="ms-2">Historial de compras</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <!-- Logout Option -->
                                <a href="./logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                            </div>
                        </div>
                    <?php else: ?>
                        <!-- Login Option -->
                        <a href="./login.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->


    <!-- Shopping Cart Modal -->
    <div class="modal fade bd-example-modal-xl" tabindex="-1" id="shoppingcart" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Shopping cart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <div class="modal-body">
                        <div class="container py-5 h-100">
                            <div class="row">
                                <div class="col-lg-7">

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <p class="mb-1">Shopping cart</p>
                                        </div>
                                    </div>

                                    <!-- Starts Products on the Shopping Cart -->
                                    <?php
                                    $user_id = $_SESSION['user_id'];
                                    $con = mysqli_connect("localhost", "root", "", "Tienda");

                                    if (mysqli_connect_errno()) {
                                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                    }

                                    $query = "SELECT p.ID_Producto, Nombre, Descripcion, c.cantidad, precio, Imagen FROM Carrito c, Product p WHERE p.ID_Producto = c.ID_Producto and id_usuario = $user_id";
                                    $result = mysqli_query($con, $query);
                                    $total = 0.0;

                                    while ($row = mysqli_fetch_array($result)) {
                                        $imagen_base64 = base64_encode($row['Imagen']);
                                        $imagen_src = 'data:image/jpeg;base64,' . $imagen_base64;
                                        $precio = $row['precio'];
                                        $cantidad = $row['cantidad'];
                                        ?>
                                        <div class="card mb-3 border">
                                            <div class="card-body">
                                                <form action="actualizar_cantidad.php" method="post">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row align-items-center">
                                                            <div>
                                                                <img src=<?= $imagen_src ?> class="img-fluid rounded-3"
                                                                    alt="Shopping item" style="width: 128px;">
                                                            </div>
                                                            <div class="ms-3">
                                                                <h5>
                                                                    <?= $row['Nombre'] ?>
                                                                </h5>
                                                                <p class="small mb-0">
                                                                    <?= $row['Descripcion'] ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row align-items-center">
                                                            <!-- Minus Button -->
                                                            <button type="submit" name="quantity_change" value="-1"
                                                                class="btn btn-link btn-sm">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <!-- Quantity -->
                                                            <span id="quantity_<?= $row['ID_Producto'] ?>"
                                                                class="fw-normal mx-2">
                                                                <?= $cantidad ?>
                                                            </span>
                                                            <!-- Plus Button -->
                                                            <button type="submit" name="quantity_change" value="1"
                                                                class="btn btn-link btn-sm">
                                                                <i class="fas fa-plus"></i>
                                                            </button>

                                                            <div style="width: 80px;">
                                                                <h5 class="mb-0">
                                                                    &nbsp; &nbsp$
                                                                    <span class="price" data-precio="<?= $precio ?>"
                                                                        data-product="<?= $row['ID_Producto'] ?>">
                                                                        <?= $precio ?>
                                                                    </span>
                                                                </h5>
                                                            </div>

                                                            <!-- Product ID -->
                                                            <input required type="hidden" name="product_id"
                                                                value="<?= $row['ID_Producto'] ?>">
                                                        </div>
                                                </form>
                                                <div>
                                                    <form action="eliminardelcarrito.php" method="post">
                                                        <button type="submit" class="btn btn-link" style="color: #cecece;">
                                                            <i class="fas fa-trash-alt"></i>
                                                            <input required type="hidden" name="product_id"
                                                                value="<?= $row['ID_Producto'] ?>">
                                                        </button>

                                                </div>

                                            </div>

                                            </form>

                                        </div>
                                    </div>
                                    <?php
                                    $total += intval($row['cantidad']) * floatval($row['precio']);
                                    }
                                    ?>
                                <!-- End Products on the Shopping Cart -->

                            </div>

                            <!-- Start Credit details -->
                            <div class="col-lg-5">
                                <div class="card bg-primary text-white rounded-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h5 class="mb-0">Card details</h5>
                                        </div>

                                        <!-- Start Form -->
                                        <form action='procesarpago.php' method='post'>
                                            <div class='form-outline form-white mb-4'>
                                                <input required type='text' id='typeText' class='form-control form-control-lg'
                                                    size='17' placeholder='1234 5678 9012 3457' minlength='19'
                                                    maxlength='19' />
                                                <label class='form-label' for='typeText'>Card Number</label>
                                            </div>
                                            <div class='row mb-4'>
                                                <div class='col-md-6'>
                                                    <div class='form-outline form-white'>
                                                        <input required type='text' id='typeExp' class='form-control form-control-lg'
                                                            placeholder='MM/YYYY' size='7' id='exp' minlength='7'
                                                            maxlength='7' />
                                                        <label class='form-label' for='typeExp'>Expiration</label>
                                                    </div>
                                                </div>
                                                <div class='col-md-6'>
                                                    <div class='form-outline form-white'>
                                                        <input required type='password' id='typeCvv'
                                                            class='form-control form-control-lg'
                                                            placeholder='&#9679;&#9679;&#9679;' size='1' minlength='3'
                                                            maxlength='3' />
                                                        <label class='form-label' for='typeCvv'>Cvv</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class='my-4'>
                                            <div class='d-flex justify-content-between mb-4'>
                                                <p class='mb-2'>Total (Incl. taxes)</p>
                                                <p class='mb-2 total-amount' id='total'>$
                                                    <?= number_format($total, 2) ?>
                                                </p>
                                            </div>
                                            <button type='submit' class='btn btn-info btn-block btn-lg'>
                                                <div class='d-flex justify-content-between'>
                                                    <span>Checkout <i class='fas fa-long-arrow-alt-right ms-2'></i></span>
                                                </div>
                                            </button>
                                        </form>


                                        <!-- End Form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="modal-body">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div>
                                    <h2>To continue shopping please login first or create an account</h2>
                                    <a href="login.php" class="btn btn-primary">Go to Login Page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    </div>


    <!-- Thanks for your purchase modal-->
    <?php if (isset($_SESSION['user_id'])): ?>
        <div class="modal fade" id="thanksModal" tabindex="-1" role="dialog" aria-labelledby="thanksModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="thanksModalLabel">¡Gracias por tu compra!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Tu pedido ha sido procesado con éxito. ¡Gracias por comprar con nosotros!</p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- Thanks for your purchase modal-->

    <?php if (isset($_SESSION['user_id'])): ?>
        <!-- My account modal -->
        <div class="modal fade" id="miCuentaModal" tabindex="-1" aria-labelledby="miCuentaModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="miCuentaModalLabel">Mi cuenta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php
                        session_start();
                        $user_id = $_SESSION['user_id'];
                        $con = mysqli_connect("localhost", "root", "", "Tienda");

                        if (mysqli_connect_errno()) {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }

                        $query = "SELECT * FROM Usuarios WHERE id_usuario = $user_id";
                        $result = mysqli_query($con, $query);
                        $total = 0.0;

                        while ($row = mysqli_fetch_array($result)) {
                            $nombre = $row['Nombre_Usuario'];
                            $Email = $row['Email'];
                            $Pass = $row['pass'];
                            $FN = $row['F_Nacimiento'];
                            $Dir = $row['Direccion_Postal'];


                            ?>
                            <!-- Información del usuario -->
                            <div>
                                <label for="username">Nombre de Usuario:</label>
                                <p id="username">
                                    <?= $nombre ?>
                                </p>
                            </div>
                            <div>
                                <label for="email">Email:</label>
                                <p id="email">
                                    <?= $Email ?>
                                </p>
                            </div>
                            <div>
                                <label for="password">Contraseña:</label>
                                <p id="password">
                                    <?= $Pass ?>
                                </p>
                            </div>
                            <div>
                                <label for="birthdate">Fecha de Nacimiento:</label>
                                <p id="birthdate">
                                    <?= $FN ?>
                                </p>
                            </div>
                            <div>
                                <label for="address">Dirección Postal:</label>
                                <p id="address">
                                    <?= $Dir ?>
                                </p>
                            </div>
                        <?php } ?>
                        <div class="mt-3">
                            <button class="btn btn-primary" onclick="abrirModalEdicion()">Editar Datos</button>
                            <button class="btn btn-danger" onclick="confirmarEliminar()">Eliminar Cuenta</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- my account modal end-->
        <!-- Edit my account modal-->
        <div class="modal fade" id="editarDatosModal" tabindex="-1" aria-labelledby="editarDatosModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editarDatosModalLabel">Editar Datos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editarDatosForm" action="editaraccount.php" method="POST">
                            <div class="mb-3">
                                <label for="editarUsername" class="form-label">Nombre de Usuario:</label>
                                <input required type="text" class="form-control" name="editarUsername" value="<?= $nombre ?>">
                            </div>
                            <div class="mb-3">
                                <label for="editarEmail" class="form-label">Email:</label>
                                <input required type="email" class="form-control" name="editarEmail" value="<?= $Email ?>">
                            </div>
                            <div class="mb-3">
                                <label for="editarPassword" class="form-label">Contraseña:</label>
                                <input required type="password" class="form-control" name="editarPassword" value="<?= $Pass ?>">
                            </div>
                            <div class="mb-3">
                                <label for="editarBirthdate" class="form-label">Fecha de Nacimiento:</label>
                                <input required type="date" class="form-control" name="editarBirthdate" value="<?= $FN ?>">
                            </div>
                            <div class="mb-3">
                                <label for="editarAddress" class="form-label">Dirección Postal:</label>
                                <input required type="text" class="form-control" name="editarAddress" value="<?= $Dir ?>">
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit my account modal end-->
        <!-- Delete my account modal start-->
        <div class="modal fade" id="confirmarEliminarModal" tabindex="-1" aria-labelledby="confirmarEliminarModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmarEliminarModalLabel">Confirmar Eliminación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editarDatosForm" action="eliminaraccount.php" method="POST">
                            <p>¿Estás seguro de que quieres eliminar tu cuenta?</p>
                            <button type="submit" class="btn btn-danger" id="confirmarEliminar">Sí, eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete my account modal end-->

        <script>
            function abrirModalEdicion() {
                $('#miCuentaModal').modal('hide');
                $('#editarDatosModal').modal('show');
            }

            function confirmarEliminar() {
                $('#miCuentaModal').modal('hide');
                $('#confirmarEliminarModal').modal('show');
            }

        </script>
    <?php endif; ?>

    <?php if (isset($_SESSION['user_id'])): ?>
        <div class="modal fade" id="historialModal" tabindex="-1" aria-labelledby="historialModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="historialModalLabel">Historial de compras</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <?php
                            $user_id = $_SESSION['user_id'];
                            $con = mysqli_connect("localhost", "root", "", "Tienda");

                            if (mysqli_connect_errno()) {
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }

                            $query = "SELECT p.ID_Producto, Nombre, Descripcion, c.cantidad, Fecha , precio, Imagen FROM Historial c, Product p WHERE p.ID_Producto = c.ID_Producto and id_usuario = $user_id";
                            $result = mysqli_query($con, $query);
                            $total = 0.0;

                            while ($row = mysqli_fetch_array($result)) {
                                $imagen_base64 = base64_encode($row['Imagen']);
                                $imagen_src = 'data:image/jpeg;base64,' . $imagen_base64;
                                $precio = $row['precio'];
                                $cantidad = $row['cantidad'];
                                ?>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <img src="<?= $imagen_src ?>" class="img-fluid rounded-3" alt="Shopping item">
                                    </div>
                                    <div class="col-md-9">
                                        <h5>
                                            <?= $row['Nombre'] ?>
                                        </h5>
                                        <p class="small mb-2">Cantidad:
                                            <?= $cantidad ?>
                                        </p>
                                        <p class="small mb-2">Fecha:
                                            <?= $row['Fecha'] ?>
                                        </p>
                                        <p class="mb-2">Precio: $
                                            <?= $precio ?>
                                        </p>
                                        <p class="mb-2">Total: $
                                            <?= $precio * $cantidad ?>
                                        </p>
                                    </div>
                                </div>
                                <?php
                                $total += intval($row['cantidad']) * floatval($row['precio']);
                            }
                            mysqli_close($con);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contact Us</h1>

        </div>
    </div>

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form" id="contact-form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Name</label>
                        <input required type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input required type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Subject</label>
                    <input required type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject">
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Message</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Message"
                        rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Let’s Talk</button>
                    </div>
                </div>
            </form>
        </div>
        <div id="thank-you-message" style="display: none;">
            <h2>¡Gracias por ponerte en contacto! Nos pondremos en contacto contigo pronto.</h2>
        </div>
    </div>
    <!-- End Contact -->


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const contactForm = document.getElementById('contact-form');
            const thankYouMessage = document.getElementById('thank-you-message');

            contactForm.addEventListener('submit', function (event) {
                event.preventDefault();
                contactForm.style.display = 'none';
                thankYouMessage.style.display = 'block';
            });
        });
    </script>



    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Zay Shop</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Explore our store at 123 Consectetur, Ligula 10660
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">Call us at 010-020-0340</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">Send us an email at
                                info@company.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Explore More</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="index.php">Home</a></li>
                        <li><a class="text-decoration-none" href="about.php">About Us</a></li>
                        <li><a class="text-decoration-none" href="shop.php">Browse Our Shop</a></li>
                        <li><a class="text-decoration-none" href="Contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i
                                    class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank"
                                href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i
                                    class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank"
                                href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-100 bg-black py-3">
                <div class="container">
                    <div class="row pt-2">
                        <div class="col-12">
                            <p class="text-left text-light">
                                &copy; 2023 Zay Shop. All rights reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

    <<script>
        document.addEventListener('DOMContentLoaded', function () {
        const contactForm = document.getElementById('contact-form');
        const thankYouMessage = document.getElementById('thank-you-message');

        contactForm.addEventListener('submit', function (event) {
        event.preventDefault();
        contactForm.style.display = 'none';
        thankYouMessage.style.display = 'block';
        });
        });
        </script>
</body>

</html>