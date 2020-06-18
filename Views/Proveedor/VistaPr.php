
<?php
require_once 'Views/layout/header.php';
?>
<!-- DataTables Example -->
<div class="container-fluid">

    <ol class="breadcrumb" style="background: #F7F7F7">
        <li class="breadcrumb-item">
            <a class="text-warning" href="<?= Base_url ?>proveedor/registroPr">Crear Proveedor</a>
        </li>
        <li class="breadcrumb-item active">
            <a class="text-warning" href="<?= Base_url ?>proveedor/indexPr">Ver tabla Proveedores</a>
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Tabla Proveedor</div>
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
                        <th>Fabricante</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Nit</th>
                        <th>Area</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($Prov = $Proveedores->fetch_object()) : ?>
                        <tr>
                            <td><?= $Prov->idProveedores ?></td>
                            <td><?= $Prov->Fabricante ?></td>
                            <td><?= $Prov->Telefono ?></td>
                            <td><?= $Prov->Correo ?></td>
                            <td><?= $Prov->Nit ?></td>
                            <td><?= $Prov->Area ?></td>
                            <?php if ($Prov->Estado == 'Activo') : ?>
                                <td class="text-success"><?= $Prov->Estado ?></td></a>
                            <?php else : ?>
                                <td class="text-danger"><?= $Prov->Estado ?></td>
                            <?php endif; ?>
                            <td>
                                <a href="<?= Base_url ?>proveedor/editar&id=<?= $Prov->idProveedores ?>" type="button" data-toggle="tooltip" title="Actualizar" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="<?= Base_url ?>proveedor/ver&id=<?= $Prov->idProveedores ?>" type="button" data-toggle="tooltip" title="Ver" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                                <?php if ($Prov->Estado == 'Activo') : ?>
                                    <a href="<?= Base_url ?>proveedor/inactivar&id=<?= $Prov->idProveedores ?>" type="button" data-toggle="tooltip" title="Inactivar" class="btn btn-danger btn-sm"><i class="fas fa-bell"></i></a>
                                <?php else : ?>
                                    <a href="<?= Base_url ?>proveedor/activar&id=<?= $Prov->idProveedores ?>" type="button" data-toggle="tooltip" title="Activar" class="btn btn-info btn-sm"><i class="fas fa-bell"></i></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>

                    <tfoot  class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Fabricante</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Nit</th>
                        <th>Area</th>
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


