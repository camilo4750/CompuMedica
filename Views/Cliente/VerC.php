<?php
require_once 'Views/layout/header.php';
?>
<!-- DataTables Example -->
<div class="container-fluid">

    <ol class="breadcrumb" style="background: #F7F7F7">
        <li class="breadcrumb-item">
            <a class="text-warning" href="<?= Base_url ?>cliente/registroC">Crear Cliente</a>
        </li>
        <li class="breadcrumb-item active">
            <a class="text-warning" href="<?= Base_url ?>cliente/indexC">Ver tabla Clientes</a>
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Datos de <strong><?= isset($Cli) && is_object($Cli) ? $Cli->Entidad_C : "" ?></strong>
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
                    <td>Entidad:</td>
                    <td><?= isset($Cli) && is_object($Cli) ? $Cli->Entidad_C : "" ?></td>
                </tr>
                <tr>
                    <td>Ciudad:</td>
                    <td><?= isset($Cli) && is_object($Cli) ? $Cli->Ciudad_C : "" ?></td>
                </tr>
                <tr>
                    <td>Telefono:</td>
                    <td><?= isset($Cli) && is_object($Cli) ? $Cli->Telefono_C : "" ?></td>
                </tr>
                <tr>
                    <td>Direccion:</td>
                    <td><?= isset($Cli) && is_object($Cli) ? $Cli->Direccion_C : "" ?></td>
                </tr>
                <tr>
                    <td>Correo:</td>
                    <td><?= isset($Cli) && is_object($Cli) ? $Cli->Correo_C : "" ?></td>
                </tr>

                <tr>
                    <td>Nit:</td>
                    <td><?= isset($Cli) && is_object($Cli) ? $Cli->Nit_C : "" ?></td>
                </tr>
                <tr>
                    <td>Estado:</td>
                    <td><?= isset($Cli) && is_object($Cli) ? $Cli->Estado : "" ?></td>
                </tr>
                <tr>
                    <td>Fecha insert:</td>
                    <td><?= isset($Cli) && is_object($Cli) ? $Cli->FechaInsert : "" ?></td>
                </tr>

                </tbody>
            </table>


        </div>
        <div class="card-footer small text-muted"></div>
    </div>
    <?php require_once 'Views/layout/footer2.php'; ?>
</div>
