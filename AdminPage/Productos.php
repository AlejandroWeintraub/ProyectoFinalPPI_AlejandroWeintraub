<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./admin.html" class="text-nowrap logo-img">
            <img src="../assets/img/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./admin.html" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Administración</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./Usuarios.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Usuarios</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./categorias.php" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Categorias</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./Productos.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Productos</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./Historial.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Historial</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/img/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->

      <!--  Add Product modal start -->
      <div class="modal fade bd-example-modal-l" tabindex="-1" id="adduser" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-l">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Añadir Producto</h5>
            </div>
            <form method='POST' action="subirproducto.php" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="mb-3">
                  <label for="NombreProducto" class="form-label">Nombre</label>
                  <input type="Text" class="form-control" id="Producto" name ="Producto">
                </div>
                <div class="mb-3">
                  <label for="descripcion" class="form-label">Descripción</label>
                  <textarea class="form-control" id="descripcion" name="descripcion" rows="4"
                    placeholder="Ingrese la descripción"></textarea>
                </div>
                <div class="mb-3">
                  <label for="precio" class="form-label">Precio</label>
                  <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input type="number" class="form-control" id="precio" name="precio" placeholder="Ingrese el precio">
                  </div>
                </div>
                <div class="mb-3">
                  <label for="cantidad" class="form-label">Cantidad</label>
                  <div class="input-group">
                    <input type="number" class="form-control" id="Cantidad" name="Cantidad" placeholder="Ingrese la cantidad que hay en el inventario">
                  </div>
                </div>
                <div class="mb-3">
                  <label for="fabricante" class="form-label">Fabricante</label>
                  <input type="text" class="form-control" id="fabricante" name="fabricante" placeholder="Ingrese el fabricante">
                </div>
                <div class="mb-3">
                  <label for="origen" class="form-label">Origen</label>
                  <input type="text" class="form-control" id="origen"  name="origen" placeholder="Ingrese el origen">
                </div>
                <div class="mb-3">
                  <label for="categoria" class="form-label">Categoría</label>
                  <select class="form-select" id="categoria" name="categoria">
                    <?php
                    $con = $con = mysqli_connect("localhost", "root", "", "Tienda");


                    if (mysqli_connect_errno()) {
                      echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $query = "SELECT Distinct * from Categorias";
                    $result = mysqli_query($con, $query);

                    while ($row = mysqli_fetch_array($result)) {
                      echo "<option value='" . $row['ID_Categoria'] . "'>" . $row['Nombre'] . "</option>";

                    }
                    mysqli_close($con);
                    ?>
                  </select>
                  <div class="mb-3">
                    <label for="imagen" class="form-label">Subir Imagen</label>
                    <input type="file" class="form-control" id="imagen" name="imagen">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--  Add Product modal end -->
    



    <!--  Content Start -->
    <div class="container-fluid">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <h5 class="card-title fw-semibold mb-4">Product Administration</h5>
                <div class="container-fluid">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adduser">
                    Añadir Producto
                  </button>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Producto</th>
                          <th scope="col">Descripcion</th>
                          <th scope="col">Precio</th>
                          <th scope="col">Fabricante</th>
                          <th scope="col">Origen</th>
                          <th scope="col">Categoria</th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $con = $con = mysqli_connect("localhost", "root", "", "Tienda");


                        if (mysqli_connect_errno()) {
                          echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }

                        $query = "SELECT ID_Producto, p.Nombre, Descripcion, Precio, Cantidad, Fabricante, Origen, c.Nombre as NC FROM Product p, Categorias c where p.ID_Categoria = c.ID_Categoria";
                        $result = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($result)) {
                          echo "<tr>";
                          echo "<td>" . $row['ID_Producto'] . "</td>";
                          echo "<td>" . $row['Nombre'] . "</td>";
                          echo "<td>" . $row['Descripcion'] . "</td>";
                          echo "<td>" . $row['Precio'] . "</td>";
                          echo "<td>" . $row['Fabricante'] . "</td>";
                          echo "<td>" . $row['Origen'] . "</td>";
                          echo "<td>" . $row['NC'] . "</td>";
                          echo '<td> <button type="button" class="btn btn-info">   <i class="ti ti-edit "></i>Edit </button> </td>';
                          echo '<td> <button type="button" class="btn btn-info"> <i class="ti ti-trash"></i>Delete </button> </td>';
                          echo "</tr>";
                        }

                        mysqli_close($con);
                        ?>

                      </tbody>
                    </table>
                  </div>


                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  Content End -->
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>