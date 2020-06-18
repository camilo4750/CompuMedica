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
            Mensaje de <strong><?= isset($Msj) && is_object($Msj) ? $Msj->nombre : "" ?></strong>
        </div>
        <div class="card-body">

            <table class="table table-hover table-bordered table-responsive-sm ">
                <thead class="thead-dark">
                <tr>
                    <th>Campo</th>
                    <th>Valor</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Nombre:</td>
                    <td><?= isset($Msj) && is_object($Msj) ? $Msj->nombre : "" ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?= isset($Msj) && is_object($Msj) ? $Msj->Email : "" ?></td>
                </tr>
                <tr>
                    <td>Tema:</td>
                    <td><?= isset($Msj) && is_object($Msj) ? $Msj->Tema : "" ?></td>
                </tr>
                <tr>
                    <td>mensaje:</td>
                    <td><?= isset($Msj) && is_object($Msj) ? $Msj->mensaje : "" ?></td>
                </tr>
                <tr>
                    <td>Fecha:</td>
                    <td><?= isset($Msj) && is_object($Msj) ? $Msj->fecha : "" ?></td>
                </tr>
                <tr>
                    <td>Estado:</td>
                    <td><?= isset($Msj) && is_object($Msj) ? $Msj->Estado : "" ?></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer small text-muted"></div>
    </div>
    <?php require_once 'Views/layout/footer2.php'; ?>
</div>
