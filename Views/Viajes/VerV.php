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
            Datos de <strong><?= isset($Via) && is_object($Via) ? $Via->Motivo : "" ?></strong>
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
                    <td>Persona_Id:</td>
                    <td><?= isset($Via) && is_object($Via) ? $Via->Persona_Id : "" ?></td>
                </tr>
                <tr>
                    <td>Motivo:</td>
                    <td><?= isset($Via) && is_object($Via) ? $Via->Motivo : "" ?></td>
                </tr>
                <tr>
                    <td>Fecha de Inicio:</td>
                    <td><?= isset($Via) && is_object($Via) ? $Via->Inicio : "" ?></td>
                </tr>
                <tr>
                    <td>Fecha Fin:</td>
                    <td><?= isset($Via) && is_object($Via) ? $Via->Fin : "" ?></td>
                </tr>
                <tr>
                    <td>Gastos:</td>
                    <td><?= isset($Via) && is_object($Via) ? $Via->Gastos : "" ?></td>
                </tr>

                <tr>
                    <td>Apuntes:</td>
                    <td><?= isset($Via) && is_object($Via) ? $Via->Apuntes : "" ?></td>
                </tr>
                <tr>
                    <td>Estado:</td>
                    <td><?= isset($Via) && is_object($Via) ? $Via->Estado : "" ?></td>
                </tr>


                </tbody>
            </table>
        </div>
        <div class="card-footer small text-muted"></div>
    </div>
    <?php require_once 'Views/layout/footer2.php'; ?>
</div>


