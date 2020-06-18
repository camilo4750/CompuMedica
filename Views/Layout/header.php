<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Taller</title>

    <!-- Custom fonts for this template-->
    <link href="<?= Base_url ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?= Base_url ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?= Base_url ?>Assets/Css/sb-admin.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="<?= Base_url ?>Assets/Css/Style2.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

</head>

<body id="page-top" style="background: #E9E9E9 ">

    <nav class="navbar navbar-expand navbar-dark static-top" style="background: white ">

        <a class="navbar-brand" href="<?= Base_url ?>index/principal"><img class="md2" style="width: 140px; height: 40px;" src="<?= Base_url ?>assets/img/logo-compumedica-nuevo-2014.png"></a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0 text-dark" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <?php if (isset($_SESSION['Administrador']) || isset($_SESSION['Usuario'])) : ?>
                    <h6 class="text-black mt-2 mr-3">Bienvenido: <?= $_SESSION['Identificado']->Rol_P ?> - <strong><?= $_SESSION['Identificado']->Nombre_P ?> <?= $_SESSION['Identificado']->Apellido_P ?></strong></h6>

                <?php endif; ?>
            </div>
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">

            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-tie fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?= Base_url ?>persona/logout">Cerrar session</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav" style="background: white">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-users"></i>

                    <span>Persona</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="<?= Base_url ?>persona/registroP">Crear</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= Base_url ?>persona/indexP">Ver</a>
                </div>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-tag"></i>
                    <span>Cliente</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="<?= Base_url ?>cliente/registroC">Crear</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= Base_url ?>cliente/indexC">Ver</a>

                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-hammer"></i>
                    <span>proveedor</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="<?= Base_url ?>proveedor/registroPr">Crear</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= Base_url ?>proveedor/indexPr">Ver</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-address-book"></i>
                    <span>Hoja de vida</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="<?= Base_url ?>hdv/registroH">Crear</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= Base_url ?>hdv/indexH">Ver</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-car-side"></i>
                    <span>Viajes</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="<?= Base_url ?>viaje/registroV">Crear</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= Base_url ?>viaje/indexV">Ver</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-money-check-alt"></i>
                    <span>Pago personas</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="<?= Base_url ?>pago/registroPa">Crear</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= Base_url ?>pago/indexPa">Ver</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-sms"></i>
                    <span>Mensajes</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="<?= Base_url ?>mensaje/indexM">Ver</a>
                </div>
            </li>


        </ul>

        <div id="content-wrapper">

            <?php require_once 'Views/layout/footer2.php'; ?>