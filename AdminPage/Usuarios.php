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

        <!-- Add account modal start -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" id="adduser" role="dialog"
          aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Añadir Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="adduser.php" method='POST'>
                  <div class="mb-3">
                    <label for="user" class="form-label">Nombre</label>
                    <input required type="text" class="form-control" name="user" placeholder="Ingrese el nombre" required>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input required type="email" class="form-control" name="email" placeholder="Ingrese el correo electrónico"
                      required>
                  </div>
                  <div class="mb-3">
                    <label for="FNac" class="form-label">Fecha de nacimiento</label>
                    <input required type="date" class="form-control" name="FNac" required>
                  </div>
                  <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input required type="text" class="form-control" name="direccion" placeholder="Ingrese la dirección" required>
                  </div>
                  <div class="mb-3">
                    <label for="number" class="form-label">Número de tarjeta</label>
                    <input required type="number" class="form-control" name="number" placeholder="Ingrese el número de tarjeta"
                      required>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input required type="password" class="form-control" name="password" placeholder="Ingrese la contraseña"
                      required>
                  </div>
                  <div class="mb-3">
                    <label for="categoria" class="form-label">Tipo de usuario</label>
                    <select class="form-select" name="categoria" required>
                      <option value='Admin'>Administrador</option>
                      <option value='user'>Usuario</option>
                    </select>
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Add account modal end -->

        <!--  Edit modal start -->
        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
          aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Users</h5>
              </div>
              <div class="modal-body">
                <form action="edituser.php" method="POST">
                  <div class="mb-3">
                    <label for="user" class="form-label">Nombre</label>
                    <input required type="text" class="form-control" id="user" name="user" placeholder="Ingrese el nombre"
                      required>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input required type="email" class="form-control" id="email" name="email"
                      placeholder="Ingrese el correo electrónico" required>
                  </div>
                  <div class="mb-3">
                    <label for="FNac" class="form-label">Fecha de nacimiento</label>
                    <input required type="date" class="form-control" id="FNac" name="FNac" required>
                  </div>
                  <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input required type="text" class="form-control" id="direccion" name="direccion"
                      placeholder="Ingrese la dirección" required>
                  </div>
                  <div class="mb-3">
                    <label for="number" class="form-label">Número de tarjeta</label>
                    <input required type="number" class="form-control" id="number" name="number"
                      placeholder="Ingrese el número de tarjeta" required>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input required type="password" class="form-control" id="password" name="password"
                      placeholder="Ingrese la contraseña" required>
                  </div>
                  <div class="mb-3">
                    <label for="categoria" class="form-label">Tipo de usuario</label>
                    <select class="form-select" id="categoria" name="tuser" required>
                      <option value='Admin'>Administrador</option>
                      <option value='user'>Usuario</option>
                    </select>
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--  Edit modal end -->

        <!-- Delete  modal start -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
          aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete user</h5>
              </div>
              <div class="modal-body">
                <form action="deleteuser.php" method="POST">
                  <p>Are you sure you want to delete this user?</p>
                  <button type="submit" class="btn btn-danger">Delete</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Delete  modal end -->

        <!--  Content Start -->
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12">
                    <h5 class="card-title fw-semibold mb-4">User Administration</h5>
                    <div class="container-fluid">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adduser">
                        Añadir Usuario
                      </button>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Email</th>
                              <th scope="col">Password</th>
                              <th scope="col">Fecha de nacimiento</th>
                              <th scope="col">Numero de Tarjeta</th>
                              <th scope="col">Direccion Postal</th>
                              <th scope="col">Tipo de Usuario</th>
                              <th scope="col"></th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "Tienda");

                            if (mysqli_connect_errno()) {
                              echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }

                            $query = "SELECT * FROM Usuarios";
                            $result = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($result)) {
                              echo "<tr>";
                              echo "<td>" . $row['ID_Usuario'] . "</td>";
                              echo "<td>" . $row['Nombre_Usuario'] . "</td>";
                              echo "<td>" . $row['Email'] . "</td>";
                              echo "<td>" . $row['pass'] . "</td>";
                              echo "<td>" . $row['F_Nacimiento'] . "</td>";
                              echo "<td>" . $row['Numero_Tarjeta'] . "</td>";
                              echo "<td>" . $row['Direccion_Postal'] . "</td>";
                              echo "<td>" . $row['Tipo_Usuario'] . "</td>";
                              echo '<td> <button type="button"  class="btn btn-info" data-id="' . $row['ID_Usuario'] . '" data-toggle="editmodal">   <i class="ti ti-edit "></i>Edit </button> </td>';
                              echo '<td> <button type="button" class="btn btn-info" data-id="' . $row['ID_Usuario'] . '" data-toggle="deletemodal"> <i class="ti ti-trash"></i>Delete </button> </td>';
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



      <script>
        $(document).ready(function () {
          // Function to open delete modal and pass user ID
          $('[data-toggle="deletemodal"]').click(function () {
            var userId = $(this).data('id');

            // Set the user ID in the form action
            $('#deleteModal form').attr('action', 'deleteuser.php?id=' + userId);

            // Open the delete modal
            $('#deleteModal').modal('show');
          });
        });
      </script>

      <script>
        $(document).ready(function () {
          // Function to open edit modal and populate with user data
          $('.btn-info[data-toggle="editmodal"]').click(function () {
            // Get the user ID from the data-id attribute
            var userId = $(this).data('id');

            // Log the user ID to the console for debugging
            console.log('User ID:', userId);

            // Get the closest table row
            var row = $(this).closest('tr');

            // Retrieve user data from the row cells
            var userName = row.find('td:eq(1)').text();
            var userEmail = row.find('td:eq(2)').text();
            var userFNac = row.find('td:eq(4)').text();
            var userDireccion = row.find('td:eq(6)').text();
            var userNumber = row.find('td:eq(5)').text();
            var userPassword = row.find('td:eq(3)').text();
            var userCategoria = row.find('td:eq(7)').text();

            // Populate the modal fields with user data
            $('#editmodal #user').val(userName);
            $('#editmodal #email').val(userEmail);
            $('#editmodal #FNac').val(userFNac);
            $('#editmodal #direccion').val(userDireccion);
            $('#editmodal #number').val(userNumber);
            $('#editmodal #password').val(userPassword);
            $('#editmodal #categoria').val(userCategoria);

            // Set the user ID in the form action
            $('#editmodal form').attr('action', 'edituser.php?id=' + userId);

            // Open the edit modal
            $('#editmodal').modal('show');
          });
        });
      </script>

    <?php else:
    header('../shop.php') ?>
    <?php endif; ?>
</body>

</html>