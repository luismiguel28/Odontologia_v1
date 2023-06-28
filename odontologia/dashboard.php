<?php
session_start();

if (!isset($_SESSION['id_persona'])) {
    // El usuario no ha iniciado sesión
    // Redireccionar a la página de inicio de sesión o mostrar un mensaje de error
    header("Location: index.php");
    exit();
}
echo $rol =  $_SESSION['rol'];

// El usuario ha iniciado sesión
// Puedes mostrar el contenido de la página protegida aquí
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/plug-ins/1.11.2/i18n/es_es.json" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/estilo.css" />
    <title>Odontologia</title>
</head>

<body onload="javascript:  name(1);">
    <div class="d-flex " id="wrapper">
        <!-- Sidebar -->
        <div class="" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i class="fas fa-user-secret me-2"></i>odontologia</div>
            <div class=" container list-group list-group-flush my-3">
                <a href="#" class="px-4  fw-bold  list-group-item-action second-text bg-transparent btn btn-toggle d-inline-flex align-items-center " data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">Citas</a>
                <div class="collapse container " id="home-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="javascript:name(1)" class=" px-4 mb-1 link-dark d-inline-flex text-decoration-none rounded">Agregar cita</a></li>
                        <?php $rol = $_SESSION['rol'];
                        if ($rol === '1') { ?>
                            <li><a href="javascript:name(2)" class="px-4 mb-1 link-dark d-inline-flex text-decoration-none rounded">Mis citas</a></li>
                        <?php }
                        $rol = $_SESSION['rol'];
                        if ($rol === '2' || $rol === '4' || $rol === '3') { ?>
                            <li><a href="javascript:name(3)" class=" px-4 link-dark d-inline-flex text-decoration-none rounded">Citas Programadas</a></li>
                        <?php }
                        $rol = $_SESSION['rol'];
                        if ($rol === '2') { ?>
                            <li><a href="javascript:name(17);" class=" px-4 link-dark d-inline-flex text-decoration-none rounded">Eventos</a></li>
                        <?php }  ?>
                    </ul>
                </div>
                <?php $rol = $_SESSION['rol'];
                if ($rol === '2') { ?>
                    <a href="#" class="px-4  fw-bold  list-group-item-action second-text bg-transparent btn btn-toggle d-inline-flex align-items-center " data-bs-toggle="collapse" data-bs-target="#home-collapse2" aria-expanded="true">Seguridad</a>
                    <div class="collapse container " id="home-collapse2">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <!--   <li><a  href="javascript:name(4)" class=" px-4 mb-1 link-dark d-inline-flex text-decoration-none rounded">Roles de usuario</a></li>-->
                            <li><a href="javascript:name(5)" class="px-4 mb-1 link-dark d-inline-flex text-decoration-none rounded">Usuarios</a></li>
                            <li><a href="javascript:name(6)" class=" px-4 link-dark d-inline-flex text-decoration-none rounded">Areas</a></li>
                            <li><a href="javascript:name(7)" class=" px-4 link-dark d-inline-flex text-decoration-none rounded">Personal</a></li>
                        </ul>
                    </div>
                <?php }  ?>
                <a href="#" class=" px-4  fw-bold  list-group-item-action second-text bg-transparent btn btn-toggle d-inline-flex align-items-center " data-bs-toggle="collapse" data-bs-target="#home-collapse3" aria-expanded="true">Historia clinica </a>
                <div class="collapse container " id="home-collapse3">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <?php $rol = $_SESSION['rol'];
                        if ($rol === '2' || $rol === '4' || $rol === '3') { ?>
                            <li><a href="javascript:name(8)" class=" px-4 mb-1 link-dark d-inline-flex text-decoration-none rounded">Pacientes</a></li>
                        <?php }
                        $rol = $_SESSION['rol'];
                        if ($rol === '5') { ?>
                            <li><a href="javascript:name(9)" class=" px-4 mb-1 link-dark d-inline-flex text-decoration-none rounded">Antec. Familiares</a></li>
                        <?php }  ?>
                        <li><a href="javascript:name(10)" class=" px-4 mb-1 link-dark d-inline-flex text-decoration-none rounded">Hist. de consultas</a></li>

                    </ul>
                </div>
                <?php $rol = $_SESSION['rol'];
                if ($rol === '2') { ?>
                    <a href="#" class="px-4   fw-bold  list-group-item-action second-text bg-transparent btn btn-toggle d-inline-flex align-items-center " data-bs-toggle="collapse" data-bs-target="#home-collapse4" aria-expanded="true">Parametros</a>
                    <div class="collapse  container " id="home-collapse4">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" id="parametros">
                            <li><a href="javascript:name(11)" class=" px-4 mb-1 link-dark d-inline-flex text-decoration-none rounded">lista de examenes</a></li>
                            <li><a href="javascript:name(12)" class=" px-4 mb-1 link-dark d-inline-flex text-decoration-none rounded">Lista de tratamientos</a></li>
                            <li><a href="javascript:name(13)" class=" px-4 mb-1 link-dark d-inline-flex text-decoration-none rounded">Lista de Antec.</a></li>
                            <li><a href="javascript:name(14)" class=" px-4 mb-1 link-dark d-inline-flex text-decoration-none rounded">Lista de diagnostico</a></li>
                        </ul>
                    </div>
                <?php  } ?>
                <?php $rol = $_SESSION['rol'];
                if ($rol === '3' || $rol === '4') { ?>
                    <a href="#" class=" px-4  fw-bold  list-group-item-action second-text bg-transparent btn btn-toggle d-inline-flex align-items-center " data-bs-toggle="collapse" data-bs-target="#home-collapse5" aria-expanded="true">Consulta</a>
                    <div class="collapse  container " id="home-collapse5">
                        <?php $rol = $_SESSION['rol']; ?>
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                               <?php if ( $rol === '3' || $rol === '4' ) { ?>
                                <li><a  href="javascript:name(4)" class=" px-4 mb-1 link-dark d-inline-flex text-decoration-none rounded">Resepcion</a></li>
                                <?php  } if ( $rol === '4' ) { ?>
                                <li><a href="javascript:name(15)" class=" px-4 mb-1 link-dark d-inline-flex text-decoration-none rounded">Consulta</a></li>
                                <?php  } ?>
                            </ul>
                    </div>
                <?php  } ?>
                <a href="#" class=" px-4  h-50 fw-bold   text-danger bg-transparent btn btn-toggle d-inline-flex align-items-center ">Salir</a>



            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light  py-4 px-4" id="nav">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 id="namee" class="fs-2 m-0">d</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><?php echo $_SESSION['nombre']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#" id="">Profile</a></li>
                                <li><a class="dropdown-item">Settings</a></li>
                                <li><a class="dropdown-item" href="views/dashboard/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">

                <div id="contenido2">
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/funciones.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

</body>

</html>