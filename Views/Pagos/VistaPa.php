<?php
require_once 'Views/layout/header.php';
?>
<!-- DataTables Example -->
<div class="container-fluid">

    <ol class="breadcrumb" style="background: #F7F7F7">
        <li class="breadcrumb-item">
            <a class="text-info" href="<?= Base_url ?>pago/registroPa">Crear Pago</a>
        </li>
        <li class="breadcrumb-item active">
            <a class="text-info" href="<?= Base_url ?>pago/indexPa">Ver tabla Pagos</a>
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Tabla Pagos</div>
        <div class="card-body">
            <?php if (isset($_SESSION['Registrado'])) : ?>
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    <i class="fas fa-check-circle"></i> -
                    <strong><?= $_SESSION['Registrado'] ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['Editado'])) : ?>
                <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                    <i class="fas fa-exclamation-triangle"></i> -
                    <strong><?= $_SESSION['Editado'] ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php if (isset($_SESSION['Borrado'])) : ?>
                <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                    <i class="fas fa-skull-crossbones"></i> -
                    <strong><?= $_SESSION['Borrado'] ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php Utilidades::DeleteSession(); ?>
            <div class="table-responsive">
                <table id="example" class="display table responsive nowrap table-striped table-bordered" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Persona</th>
                            <th>Fecha de pago</th>
                            <th>Archivo</th>
                            <th>Total</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($Pagos = $Pago->fetch_object()) : ?>
                            <tr>
                                <td><?= $Pagos->idPagos ?></td>
                                <td><?= $Pagos->persona ?></td>
                                <td><?= $Pagos->FechaPag ?></td>
                                <td><a class="text-success" href="<?= Base_url ?>Uploads/ArchivosPago/<?= $Pagos->Archivo ?>"><?= $Pagos->Archivo ?></a></td>
                                <td><?= $Pagos->ValorT ?></td>
                                <?php if ($Pagos->Estado == 'Activo') : ?>
                                    <td class="text-success"><?= $Pagos->Estado ?></td></a>
                                <?php else : ?>
                                    <td class="text-danger"><?= $Pagos->Estado ?></td>
                                <?php endif; ?>
                                <td>
                                    <a href="<?= Base_url ?>pago/editar&id=<?= $Pagos->idPagos ?>" type="button" data-toggle="tooltip" title="Actualizar" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="<?= Base_url ?>pago/ver&id=<?= $Pagos->idPagos ?>" type="button" data-toggle="tooltip" title="Ver" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                                    <?php if ($Pagos->Estado == 'Activo') : ?>
                                        <a href="<?= Base_url ?>pago/inactivar&id=<?= $Pagos->idPagos ?>" type="button" data-toggle="tooltip" title="Inactivar" class="btn btn-danger btn-sm"><i class="fas fa-bell"></i></a>
                                    <?php else : ?>
                                        <a href="<?= Base_url ?>pago/activar&id=<?= $Pagos->idPagos ?>" type="button" data-toggle="tooltip" title="Activar" class="btn btn-info btn-sm"><i class="fas fa-bell"></i></a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>

                    <tfoot class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Persona</th>
                            <th>Fecha de pago</th>
                            <th>Archivo</th>
                            <th>Total</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                    <tbody>

                </table>
            </div>

        </div>
        <div style="margin-left: 70%;">
            <b><h2>Total: <?= isset($MONTO) ? $MONTO->total : 0; ?></h2></b>
            <b><h4>Total de viajes: <?= isset($MONTO) ? $MONTO->personas : 0; ?></h4></b>
        </div>
        <div class="card-footer small text-muted"></div>
    </div>
    <?php require_once 'Views/layout/footer2.php'; ?>
</div>