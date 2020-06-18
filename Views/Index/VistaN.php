<?php require_once 'Views/layout/header.php'; ?>
<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="background: #F7F7F7">
        <li class="breadcrumb-item">
            <strong>Gestion de datos</strong>
    </ol>

    <!-- Icon Cards-->
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="totales">
                <div class="card text-white color1 o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="mr-5"><strong>Total Personas: <?= isset($TPersonas) ? $TPersonas->TotalPersonas : false; ?> </strong></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?= Base_url ?>Persona/IndexP">
                        <span class="float-left">Ver detalles</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="totales">
                <div class="card text-white color3 o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-user-tag"></i>
                        </div>
                        <div class="mr-5"><strong>Total Clientes: <?= isset($Tcliente) ? $Tcliente->TotalClientes : false; ?> </strong></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?= Base_url ?>cliente/IndexC">
                        <span class="float-left">Ver detalles</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="totales">
                <div class="card text-white color1 o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-hammer"></i>
                        </div>
                        <div class="mr-5"><strong>Total Proveedores: <?= isset($Tproveedores) ? $Tproveedores->TotalProveedores : false; ?> </strong></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?= Base_url ?>proveedor/indexPr">
                        <span class="float-left">Ver detalles</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="totales">
                <div class="card text-white color3 o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-address-book"></i>
                        </div>
                        <div class="mr-5"><strong>Total Hojas de vida: <?= isset($Thdv) ? $Thdv->Totalhdv : false; ?> </strong></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?= Base_url ?>hdv/indexH">
                        <span class="float-left">Ver detalles</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="totales">
                <div class="card text-white color3 o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-car-side"></i>
                        </div>
                        <div class="mr-5"><strong>Total Viajes: <?= isset($Tviajes) ? $Tviajes->TotalViajes : false; ?> </strong></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?= Base_url ?>viaje/indexV">
                        <span class="float-left">Ver detalles</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="totales">
                <div class="card text-white color1 o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-money-check-alt"></i>
                        </div>
                        <div class="mr-5"><strong>Total de Pagos: <?= isset($TPagos) ? $TPagos->TotalPagos : false; ?> </strong></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?= Base_url ?>Pago/indexPa">
                        <span class="float-left">Ver detalles</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="totales">
                <div class="card text-white color3 o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-sms"></i>
                        </div>
                        <div class="mr-5"><strong>Total Mensajes: <?= isset($Tmensajes) ? $Tmensajes->TotalMensajes : false; ?> </strong></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?= Base_url ?>mensaje/indexM">
                        <span class="float-left">Ver detalles</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <ol class="breadcrumb" style="background: #F7F7F7">
            <li class="breadcrumb-item">
                <a class="text-warning" href="<?= Base_url ?>index/registroN">Crear Nota</a>
            </li>
            <li class="breadcrumb-item active">
                <a class="text-warning" href="<?= Base_url ?>index/gestion">Ver tabla Notas</a>
            </li>
        </ol>
        <div class="card mb-3">
            <div class="card-header">
                <?php if (isset($Editar) && isset($Cotizacion) && is_object($Cotizacion)) : ?>
                    <i class="fas fa-chart-area"></i>
                    Editar: <strong> <?= $Cotizacion->N_Serial ?></strong> </div>
            <?php $AccionUrl = Base_url . "cotizacion/save&id=" . $Cotizacion->IdC ?>
        <?php else : ?>
            <i class="fas fa-chart-area"></i>
            Crear Notas
        </div>

        <?php $AccionUrl = Base_url . "cotizacion/save" ?>
    <?php endif; ?>


    <div class="card-body">
        <?php if (isset($_SESSION['Editado'])) : ?>
            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <i class="fas fa-exclamation-triangle"></i> -
                <strong><?= $_SESSION['Editado'] ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['Registrado'])) : ?>
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <i class="fas fa-check-circle"></i> -
                <strong><?= $_SESSION['Registrado'] ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php Utilidades::DeleteSession(); ?>
        <div class="TituloP">Tus Notas Diarias</div>
        <?php $Notas  = Utilidades::ShowNotas(); ?>

        <?php while ($Nota = $Notas->fetch_object()) : ?>
            <article>
                <a href="<?= Base_url ?>index/ver&id=<?= $Nota->idNotas ?>" class="text-warning" style="text-decoration: none;">
                    <h2 class="Titulo">Nota: <?= $Nota->Nota ?></h2>
                    <span class="fecha">Caduca: <?= $Nota->Caduca ?></span> |
                    <span class="fecha">Estado: <?= $Nota->Estado ?></span>
                </a>
            </article>

        <?php
        endwhile;

        ?>
    </div>
    </div>
    <?php require_once 'Views/layout/footer2.php'; ?>