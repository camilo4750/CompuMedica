
<?php
require_once 'Views/layout/header.php';
?>
<!-- DataTables Example -->
<div class="container-fluid">

    <ol class="breadcrumb" style="background: #F7F7F7">
        <li class="breadcrumb-item">
            <a class="text-warning" href="<?= Base_url ?>hdv/registroH">Crear HDV</a>
        </li>
        <li class="breadcrumb-item active">
            <a class="text-warning" href="<?= Base_url ?>hdv/indexH">Ver tabla HDV</a>
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Tabla Hojas De Vida</div>
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
                        <th>Cliente</th>
                        <th>Archivo</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($hdv = $HDV->fetch_object()) : ?>
                        <tr>
                            <td><?= $hdv->idHDV ?></td>
                            <td><?= $hdv->cliente ?></td>
                            <td><a class="text-success" href="<?= Base_url ?>Uploads/Archivos/<?= $hdv->Archivo ?>"><?= $hdv->Archivo ?></a></td>
                            <td><?= $hdv->Fecha ?></td>
                            <?php if ($hdv->Estado == 'Activo') : ?>
                                <td class="text-success"><?= $hdv->Estado ?></td></a>
                            <?php else : ?>
                                <td class="text-danger"><?= $hdv->Estado ?></td>
                            <?php endif; ?>
                            <td>
                                <a href="<?= Base_url ?>hdv/editar&id=<?= $hdv->idHDV ?>" type="button" data-toggle="tooltip" title="Actualizar" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="<?= Base_url ?>hdv/ver&id=<?= $hdv->idHDV ?>" type="button" data-toggle="tooltip" title="Ver" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                                <?php if ($hdv->Estado == 'Activo') : ?>
                                    <a href="<?= Base_url ?>hdv/inactivar&id=<?= $hdv->idHDV ?>" type="button" data-toggle="tooltip" title="Inactivar" class="btn btn-danger btn-sm"><i class="fas fa-bell"></i></a>
                                <?php else : ?>
                                    <a href="<?= Base_url ?>hdv/activar&id=<?= $hdv->idHDV ?>" type="button" data-toggle="tooltip" title="Activar" class="btn btn-info btn-sm"><i class="fas fa-bell"></i></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>

                    <tfoot  class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Archivo</th>
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
