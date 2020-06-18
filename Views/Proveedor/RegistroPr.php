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
            <?php if (isset($Editar) && isset($Prov) && is_object($Prov)) : ?>
                <i class="fas fa-chart-area"></i>
                Editar <strong><?= isset($Prov) && is_object($Prov) ? $Prov->Fabricante : "" ?></strong>
                <?php $Url_Action = Base_url . "proveedor/save&id=" . $Prov->idProveedores ?>
            <?php else : ?>
                <i class="fas fa-chart-area"></i>
                Agregar Proveedor
                <?php $Url_Action = Base_url . "proveedor/save" ?>
            <?php endif; ?>
        </div>
        <div class="card-body">
            <form action="<?= $Url_Action ?>" method="POST">

                <label>Fabricante:</label>
                <input type="text" class="form-control " name="Fabricante" required value="<?= isset($Prov) && is_object($Prov) ? $Prov->Fabricante : "" ?>">
                <div class="form-row">
                    <div class="col">
                        <label>Telefono:</label>
                        <input type="number" class="form-control" name="Telefono" required value="<?= isset($Prov) && is_object($Prov) ? $Prov->Telefono : "" ?>">
                    </div>
                    <div class="col">
                        <label>Correo:</label>
                        <input type="text" class="form-control" name="Correo" required value="<?= isset($Prov) && is_object($Prov) ? $Prov->Correo : "" ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label>Nit:</label>
                        <input type="text" class="form-control" name="Nit" required value="<?= isset($Prov) && is_object($Prov) ? $Prov->Nit : "" ?>">
                    </div>
                    <div class="col">
                        <label>Area:</label>
                        <input type="text" class="form-control" name="Area" required value="<?= isset($Prov) && is_object($Prov) ? $Prov->Area : "" ?>">
                    </div>
                </div>

                <?php if (isset($Editar)) : ?>
                    <input type="submit" class="btn btn-warning btn-block mt-4" value="Editar">
                <?php else : ?>
                    <input type="submit" class="btn btn-success btn-block mt-4">
                <?php endif; ?>
            </form>
        </div>

        <div class="card-footer small text-muted"></div>
        <?php require_once 'Views/layout/footer2.php'; ?>
    </div>




