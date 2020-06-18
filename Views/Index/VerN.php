<?php
require_once 'Views/layout/header.php';
?>
<!-- DataTables Example -->
<div class="container-fluid">

    <ol class="breadcrumb" style="background: #F7F7F7">
        <li class="breadcrumb-item">
            <a class="text-warning" href="<?= Base_url ?>index/registroN">Crear Nota</a>
        </li>
        <li class="breadcrumb-item active">
            <a class="text-warning" href="<?= Base_url ?>index/gestion">Ver tabla Notas</a>
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Datos de la cotizacion N°: <strong><?= isset($Cotizacion) && is_object($Cotizacion) ? $Cotizacion->N_Serial : "" ?></strong>
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
                    <td>Nota:</td>
                    <td><?= isset($Notas) && is_object($Notas) ? $Notas->Nota : "" ?></td>
                </tr>

                <tr>
                    <td>Caduca:</td>
                    <td><?= isset($Notas) && is_object($Notas) ? $Notas->Caduca : "" ?></td>
                </tr>

                <tr>
                    <td>Estado:</td>
                    <td><?= isset($Notas) && is_object($Notas) ? $Notas->Estado : "" ?></td>
                </tr>

                </tbody>
            </table>
        </div>
        <div class="card-footer small text-muted"></div>
    </div>
</div>
<?php require_once 'Views/layout/footer2.php';?>