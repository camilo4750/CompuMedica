
<?php
require_once 'Views/layout/header.php';
?>
<!-- DataTables Example -->
<div class="container-fluid">

    <ol class="breadcrumb" style="background: #F7F7F7">
        <li class="breadcrumb-item">
            <a class="text-warning" href="<?= Base_url ?>persona/registroP">Crear Persona</a>
        </li>
        <li class="breadcrumb-item active">
            <a class="text-warning" href="<?= Base_url ?>persona/indexP">Ver tabla Persona</a>
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Tabla Personas</div>
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
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Rh</th>
                        <th>Rol</th>
                        <th>Email</th>
                        <th>Arl</th>
                        <th>Eps</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($Per = $Personas->fetch_object()) : ?>
                        <tr>
                            <td><?= $Per->Documento_P ?></td>
                            <td><?= $Per->Nombre_P ?></td>
                            <td><?= $Per->Apellido_P ?></td>
                            <td><?= $Per->Telefono ?></td>
                            <td><?= $Per->Direccion_P ?></td>
                            <td><?= $Per->Rh_P ?></td>
                            <td><?= $Per->Rol_P ?></td>
                            <td><?= $Per->Email_P ?></td>
                            <td><?= $Per->Arl_P ?></td>
                            <td><?= $Per->Eps_P ?></td>
                            <td>
                                <a href="<?= Base_url ?>persona/editar&id=<?= $Per->Id_Persona ?>" type="button" data-toggle="tooltip" title="Editar" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="<?= Base_url ?>persona/ver&id=<?= $Per->Id_Persona ?>" type="button" data-toggle="tooltip" title="Ver" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="<?= Base_url ?>persona/eliminar&id=<?= $Per->Id_Persona ?>" type="button" data-toggle="tooltip" title="Eliminar" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>

                    <tfoot  class="thead-dark">
                    <tr>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Rh</th>
                        <th>Rol</th>
                        <th>Email</th>
                        <th>Arl</th>
                        <th>Eps</th>
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
