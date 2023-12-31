<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zay Shop Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="../assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <?php
  session_start();
  if (isset($_SESSION['user_id']) && $_SESSION['tipo'] === 'Admin'): ?>
    ?>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
      data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Sidebar Start -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./Usuarios.php" class="text-nowrap logo-img">
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
                      <a href="../index.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Go to the store</a>
                      <a href="../logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </header>
        <!--  Header End -->

      <!--  Content Start -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <h5 class="card-title fw-semibold mb-4">Sells Administration</h5>
                  <div class="container-fluid">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col"># de Compra</th>
            
                            <th scope="col">Nombre del usuario</th>
                            <th scope="col">Nombre del producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $con = $con = mysqli_connect("localhost", "root", "", "Tienda");


                          if (mysqli_connect_errno()) {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                          }

                          $query = "SELECT ID_Compra, u.ID_Usuario, Nombre_Usuario, Nombre, h.cantidad, Precio, Fecha  FROM Historial h , Product p, Usuarios u where p.ID_Producto = h.ID_Producto and u.ID_Usuario = h.ID_Usuario";
                          $result = mysqli_query($con, $query);

                          while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['ID_Compra'] . "</td>";
                            echo "<td>" . $row['Nombre_Usuario'] . "</td>";
                            echo "<td>" . $row['Nombre'] . "</td>";
                            echo "<td>" . $row['cantidad'] . "</td>";
                            echo "<td>" . $row['Precio'] . "</td>";
                            echo "<td>" . $row['Fecha'] . "</td>";
                            echo "<td>" . $row['cantidad'] * $row['Precio'] . "</td>";
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
    <?php else:
    header('../shop.php') ?>
      <?php endif; ?>
</body>

</html>