<?php
require_once 'Views/layout/header.php';
?>
<!-- DataTables Example -->
<div class="container-fluid">

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
            <i class="fas fa-table"></i>
            Tabla Cotizaciónes</div>
        <div class="card-body">

            <?php if (isset($_SESSION['Editado'])) : ?>
                <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                    <strong><?=$_SESSION['Editado']?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php if (isset($_SESSION['Borrado'])) : ?>
                <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
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
                        <th>Nota</th>
                        <th>Caduca</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $Notas = Utilidades::ShowNotas() ?>
                    <?php while ($Nota = $Notas->fetch_object()) : ?>
                        <tr>
                            <td><?= $Nota->Nota ?></td>
                            <td><?= $Nota->Caduca ?></td>
                            <td><?= $Nota->Estado ?></td>
                            <td>
                                <a href="<?= Base_url ?>index/editar&id=<?= $Nota->idNotas ?>" type="button" data-toggle="tooltip" title="Editar" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="<?= Base_url ?>index/ver&id=<?= $Nota->idNotas ?>" type="button" data-toggle="tooltip" title="Ver" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="<?= Base_url ?>index/eliminar&id=<?= $Nota->idNotas  ?>" type="button" data-toggle="tooltip" title="Eliminar" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>

                    <tfoot  class="thead-dark">
                    <tr>
                        <th>Nota</th>
                        <th>Caduca</th>
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
