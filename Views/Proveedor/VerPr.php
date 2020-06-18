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
            Datos de <strong><?= isset($Prov) && is_object($Prov) ? $Prov->Fabricante : "" ?></strong>
        </div>
        <div class="card-body">

            <table class="table table-hover table-bordered table-responsive-sm">
                <thead class="thead-dark">
                <tr>
                    <th>Campo</th>
                    <th>Valor</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Fabricante:</td>
                    <td><?= isset($Prov) && is_object($Prov) ? $Prov->Fabricante : "" ?></td>
                </tr>
                <tr>
                    <td>Telefono:</td>
                    <td><?= isset($Prov) && is_object($Prov) ? $Prov->Telefono : "" ?></td>
                </tr>
                <tr>
                    <td>Correo:</td>
                    <td><?= isset($Prov) && is_object($Prov) ? $Prov->Correo : "" ?></td>
                </tr>
                <tr>
                    <td>Nit:</td>
                    <td><?= isset($Prov) && is_object($Prov) ? $Prov->Nit : "" ?></td>
                </tr>
                <tr>
                    <td>Area:</td>
                    <td><?= isset($Prov) && is_object($Prov) ? $Prov->Area : "" ?></td>
                </tr>
                <tr>
                    <td>Estado:</td>
                    <td><?= isset($Prov) && is_object($Prov) ? $Prov->Estado : "" ?></td>
                </tr>
                <tr>
                    <td>Fecha insert:</td>
                    <td><?= isset($Prov) && is_object($Prov) ? $Prov->FechaInsert : "" ?></td>
                </tr>

                </tbody>
            </table>
        </div>
        <div class="card-footer small text-muted"></div>
    </div>
    <?php require_once 'Views/layout/footer2.php'; ?>
</div>

