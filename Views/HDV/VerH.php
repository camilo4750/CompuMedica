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
            Datos de la cotizacion N°: <strong><?= isset($Cotizacion) && is_object($Cotizacion) ? $Cotizacion->N_Serial : "" ?></strong>
        </div>
        <div class="card-body">

            <table class="table table-hover responsive nowrap table-bordered ">
                <thead class="thead-dark">
                <tr>
                    <th>Campo</th>
                    <th>Valor</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Cliente:</td>
                    <td><?= isset($Hoja) && is_object($Hoja) ? $Hoja->Cliente_id : "" ?></td>
                </tr>

                <tr>
                    <td>Archivo HDV:</td>
                    <td><?= isset($Hoja) && is_object($Hoja) ? $Hoja->Archivo : "" ?></td>
                </tr>

                <tr>
                    <td>Fecha:</td>
                    <td><?= isset($Hoja) && is_object($Hoja) ? $Hoja->Fecha : "" ?></td>
                </tr>

                <tr>
                    <td>Estado:</td>
                    <td><?= isset($Hoja) && is_object($Hoja) ? $Hoja->Estado : "" ?></td>
                </tr>

                </tbody>
            </table>

        </div>
        <div class="card-footer small text-muted"></div>
    </div>
    <?php require_once 'Views/layout/footer2.php'; ?>
</div>

