<?php
require_once 'Views/layout/header.php';
?>
<!-- DataTables Example -->
<div class="container-fluid">


    <ol class="breadcrumb" style="background: #F7F7F7">
        <li class="breadcrumb-item">
            <a class="text-warning" href="<?= Base_url ?>pago/registroPa">Crear Pago</a>
        </li>
        <li class="breadcrumb-item active">
            <a class="text-warning" href="<?= Base_url ?>pago/indexPa">Ver tabla Pagos</a>
        </li>
    </ol>


    <div class="card mb-3">
        <div class="card-header">
            <?php if (isset($Editar) && isset($PAGO) && is_object($PAGO)) : ?>
                <i class="fas fa-chart-area"></i>
                Editar <strong><?= isset($Pagos) && is_object($Pagos) ? $Pagos->Persona_Id : "" ?></strong>
                <?php $Url_Accion = Base_url . "pago/save&id=" . $PAGO->idPagos ?>
            <?php else : ?>
                <i class="fas fa-chart-area"></i>
                Agregar
                <?php $Url_Accion = Base_url . "pago/save" ?>
            <?php endif; ?>
        </div>
        <div class="card-body">
            <form action="<?= $Url_Accion ?>" method="POST" enctype="multipart/form-data">

                <div class="form-row">
                    <div class="col">
                        <label>Persona:</label>
                        <?php $Persona = Utilidades::ShowPersonas(); ?>
                        <select class="form-control" name="Persona_Id">
                            <?php while ($Per = $Persona->fetch_object()) : ?>
                                <option value="<?= $Per->Id_Persona ?>" <?= isset($PAGO) && is_object($PAGO) && $Per->Id_Persona == $PAGO->Persona_Id ? 'selected' : ""; ?>>
                                    <?= $Per->Nombre_P ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="col">
                        <label>Fecha de pago:</label>
                        <input type="date" class="form-control" id="FechaPag" name="FechaPag" required value="<?= isset($PAGO) && is_object($PAGO) ? $PAGO->FechaPag : "" ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label>Archivo:</label>
                        <?php if (isset($PAGO) && !empty($PAGO->Archivo)) : ?>
                            <a class="text-success" href="<?= Base_url ?>Uploads/ArchivosPago/<?= $PAGO->Archivo ?>"><?= $PAGO->Archivo ?></a>
                        <?php endif; ?>
                        <input type="file" class="form-control" name="Archivo">
                    </div>
                    <div class="col">
                        <label>Pago total:</label>
                        <input type="number" class="form-control" name="ValorT" required value="<?= isset($PAGO) && is_object($PAGO) ? $PAGO->ValorT : "" ?>">
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



