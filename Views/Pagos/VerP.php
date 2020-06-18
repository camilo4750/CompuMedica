<?php
require_once 'Views/layout/header.php';
?>
<!-- DataTables Example -->
<div class="container-fluid">

    <ol class="breadcrumb" style="background: #F7F7F7">
        <li class="breadcrumb-item">
            <a class="text-warning" href="<?= Base_url ?>viaje/registroV">Crear Viaje</a>
        </li>
        <li class="breadcrumb-item active">
            <a class="text-warning" href="<?= Base_url ?>viaje/indexV">Ver tabla Viajes</a>
        </li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Pago persona <strong><?= isset($Pagos) && is_object($Pagos) ? $Pagos->Persona_Id : "" ?></strong>
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
                    <td>Persona:</td>
                    <td><?= isset($Pagos) && is_object($Pagos) ? $Pagos->Persona_Id : "" ?></td>
                </tr>
                <tr>
                    <td>Fecha de pago:</td>
                    <td><?= isset($Pagos) && is_object($Pagos) ? $Pagos->FechaPag : "" ?></td>
                </tr>
                <tr>
                    <td>Archivo de pago:</td>
                    <td><?= isset($Pagos) && is_object($Pagos) ? $Pagos->Archivo : "" ?></td>
                </tr>
                <tr>
                    <td>Valor total:</td>
                    <td><?= isset($Pagos) && is_object($Pagos) ? $Pagos->ValorT : "" ?></td>
                </tr>
                <tr>
                    <td>Estado:</td>
                    <td><?= isset($Pagos) && is_object($Pagos) ? $Pagos->Estado : "" ?></td>
                </tr>



                </tbody>
            </table>
        </div>
        <div class="card-footer small text-muted"></div>
    </div>
    <?php require_once 'Views/layout/footer2.php'; ?>
</div>



