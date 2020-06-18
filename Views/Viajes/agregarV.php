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
            <?php if (isset($Editar) && isset($Via) && is_object($Via)) : ?>
                <i class="fas fa-chart-area"></i>
                Editar <strong><?= isset($Via) && is_object($Via) ? $Via->Motivo : "" ?></strong>
                <?php $Url_Accion = Base_url . "viaje/save&id=" . $Via->idViajes ?>
            <?php else : ?>
                <i class="fas fa-chart-area"></i>
                Agregar Viaje
                <?php $Url_Accion = Base_url . "viaje/save" ?>
            <?php endif; ?>
        </div>
        <div class="card-body">
            <form action="<?= $Url_Accion ?>" method="POST">
                <div class="form-row">
                    <div class="col">
                        <label>Persona:</label>
                        <?php $Persona = Utilidades::ShowPersonas(); ?>
                        <select class="form-control" name="Persona_Id">
                            <?php while ($Per = $Persona->fetch_object()) : ?>
                                <option value="<?= $Per->Id_Persona ?>" <?= isset($Via) && is_object($Via) && $Per->Id_Persona == $Via->Persona_Id ? 'selected' : ""; ?>>
                                    <?= $Per->Nombre_P ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="col">
                        <label>Motivo:</label>
                        <input type="text" class="form-control" name="Motivo" required value="<?= isset($Via) && is_object($Via) ? $Via->Motivo : ""; ?>">
                    </div>
                </div>


                <div class="form-row">
                    <div class="col">
                        <label>Fecha de inicio:</label>
                        <input type="date" class="form-control" name="Inicio" required value="<?= isset($Via) && is_object($Via) ? $Via->Inicio : ""; ?>">
                    </div>
                    <div class="col">
                        <label>Fecha fin:</label>
                        <input type="date" class="form-control" name="Fin" required value="<?= isset($Via) && is_object($Via) ? $Via->Fin : ""; ?>">
                    </div>
                </div>


                <div class="form-row">
                    <div class="col">
                        <label>Gastos:</label>
                        <input type="number" class="form-control" name="Gastos" required value="<?= isset($Via) && is_object($Via) ? $Via->Gastos : ""; ?>">
                    </div>
                    <div class="col">
                        <label>Apuntes:</label>
                        <input type="text" class="form-control" name="Apuntes" required value="<?= isset($Via) && is_object($Via) ? $Via->Apuntes : ""; ?>">
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

