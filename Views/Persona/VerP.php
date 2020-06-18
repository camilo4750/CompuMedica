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
            <a class="text-warning" href="<?= Base_url ?>persona/indexP">Ver tabla Personas</a>
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Datos de <strong><?= isset($Per) && is_object($Per) ? $Per->Nombre_P : "" ?></strong></strong>
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
                    <td>Documento:</td>
                    <td><?= isset($Per) && is_object($Per) ? $Per->Documento_P : "" ?></td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><?= isset($Per) && is_object($Per) ? $Per->Nombre_P : "" ?></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><?= isset($Per) && is_object($Per) ? $Per->Apellido_P : "" ?></td>
                </tr>
                <tr>
                    <td>Telefono:</td>
                    <td><?= isset($Per) && is_object($Per) ? $Per->Telefono : "" ?></td>
                </tr>
                <tr>
                    <td>Direccion:</td>
                    <td><?= isset($Per) && is_object($Per) ? $Per->Direccion_P : "" ?></td>
                </tr>

                <tr>
                    <td>Rh:</td>
                    <td><?= isset($Per) && is_object($Per) ? $Per->Rh_P : "" ?></td>
                </tr>
                <tr>
                    <td>Rol:</td>
                    <td><?= isset($Per) && is_object($Per) ? $Per->Rol_P : "" ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?= isset($Per) && is_object($Per) ? $Per->Email_P : "" ?></td>
                </tr>

                <tr>
                    <td>Arl:</td>
                    <td><?= isset($Per) && is_object($Per) ? $Per->Arl_P : "" ?></td>
                </tr>

                <tr>
                    <td>Eps:</td>
                    <td><?= isset($Per) && is_object($Per) ? $Per->Eps_P : "" ?></td>
                </tr>

                <tr>
                    <td>Estado:</td>
                    <td><?= isset($Per) && is_object($Per) ? $Per->Estado : "" ?></td>
                </tr>
                <tr>
                    <td>Fecha insert:</td>
                    <td><?= isset($Per) && is_object($Per) ? $Per->FechaInsert : "" ?></td>
                </tr>

                </tbody>
            </table>

        </div>
        <div class="card-footer small text-muted"></div>
    </div>
    <?php require_once 'Views/layout/footer2.php'; ?>
</div>



