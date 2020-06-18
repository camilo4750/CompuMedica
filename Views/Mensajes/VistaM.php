
<?php
require_once 'Views/layout/header.php';
?>
<!-- DataTables Example -->
<div class="container-fluid">

    <ol class="breadcrumb" style="background: #F7F7F7">
        <li class="breadcrumb-item active">
            <a class="text-warning" href="<?= Base_url ?>mensaje/indexM">Ver tabla Mensajes</a>
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Tabla Mensajes</div>
        <div class="card-body">

            <?php if (isset($_SESSION['Editado'])) : ?>
                <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <i class="fas fa-exclamation-triangle"></i> -
                    <strong><?=$_SESSION['Editado']?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php if (isset($_SESSION['Borrado'])) : ?>
                <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <i class="fas fa-skull-crossbones"></i> -
                    <strong><?=$_SESSION['Borrado']?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php Utilidades::DeleteSession(); ?>
            <div class="table-responsive">
                <table id="example" class="display table responsive nowrap table-striped table-bordered" style="width:100%" >
                    <thead  class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Tema</th>
                        <th>Mensaje</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($msj = $MSJ->fetch_object()) : ?>
                        <tr>
                            <td><?= $msj->idMensajes ?></td>
                            <td><?= $msj->nombre ?></td>
                            <td><?= $msj->Email ?></td>
                            <td><?= $msj->Tema ?></td>
                            <td><?= $msj->mensaje ?></td>
                            <td><?= $msj->fecha ?></td>
                            <?php if ($msj->Estado == 'Activo') : ?>
                                <td class="text-success"><?= $msj->Estado ?></td></a>
                            <?php else : ?>
                                <td class="text-danger"><?= $msj->Estado ?></td>
                            <?php endif; ?>
                            <td>
                                <a href="<?= Base_url ?>mensaje/ver&id=<?= $msj->idMensajes ?>" type="button" data-toggle="tooltip" title="Ver" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                                <?php if ($msj->Estado == 'Activo') : ?>
                                    <a href="<?= Base_url ?>mensaje/inactivar&id=<?= $msj->idMensajes ?>" type="button" data-toggle="tooltip" title="Inactivar" class="btn btn-danger btn-sm"><i class="fas fa-bell"></i></a>
                                <?php else : ?>
                                    <a href="<?= Base_url ?>mensaje/activar&id=<?= $msj->idMensajes ?>" type="button" data-toggle="tooltip" title="Activar" class="btn btn-info btn-sm"><i class="fas fa-bell"></i></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>

                    <tfoot  class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Tema</th>
                        <th>Mensaje</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                    </tfoot>
                    <tbody>

                </table>
            </div>

        </div>
        <div class="card-footer small text-muted"></div>
    </div>
    <?php require_once 'Views/layout/footer2.php'; ?>
</div>


