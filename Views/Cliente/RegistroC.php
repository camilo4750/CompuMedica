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
            <?php if (isset($Editar) && isset($Cli) && is_object($Cli)) : ?>
                <i class="fas fa-chart-area"></i>
                Editar: <strong><?= isset($Cli) && is_object($Cli) ? $Cli->Entidad_C : "" ?></strong>
                <?php $Accion_Url = Base_url . "cliente/saveC&id=" . $Cli->idCliente ?>
            <?php else : ?>
                <i class="fas fa-chart-area"></i>
                Crear Cliente
                <?php $Accion_Url = Base_url . "cliente/saveC" ?>
            <?php endif; ?>
        </div>
        <div class="card-body">
            <form action="<?= $Accion_Url ?>" method="POST">

                <div class="form-row">
                    <div class="col">
                        <label>Entidad:</label>
                        <input type="text" class="form-control " name="Entidad_C" required value="<?= isset($Cli) && is_object($Cli) ? $Cli->Entidad_C : "" ?>">
                    </div>
                    <div class="col">
                        <label>Ciudad:</label>
                        <input type="text" class="form-control" name="Ciudad_C" required value="<?= isset($Cli) && is_object($Cli) ? $Cli->Ciudad_C : "" ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label>Telefono:</label>
                        <input type="number" class="form-control" name="Telefono_C" required value="<?= isset($Cli) && is_object($Cli) ? $Cli->Telefono_C : "" ?>">
                    </div>
                    <div class="col">
                        <label>Direccion:</label>
                        <input type="text" class="form-control" name="Direccion_C" required value="<?= isset($Cli) && is_object($Cli) ? $Cli->Direccion_C : "" ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label>Correo Electronico:</label>
                        <input type="text" class="form-control" name="Correo_C" required value="<?= isset($Cli) && is_object($Cli) ? $Cli->Correo_C : "" ?>">
                    </div>
                    <div class="col">
                        <label>Nit:</label>
                        <input type="text" class="form-control" name="Nit_C" required value="<?= isset($Cli) && is_object($Cli) ? $Cli->Nit_C : "" ?>">
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



