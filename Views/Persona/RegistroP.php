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
            <?php if (isset($Editar) && isset($Per) && is_object($Per)) : ?>
                <i class="fas fa-chart-area"></i>
                Editar: <strong><?= isset($Per) && is_object($Per) ? $Per->Nombre_P : "" ?></strong>
                <?php $Url_Accion = Base_url . "persona/save&id=" . $Per->Id_Persona ?>
            <?php else : ?>
                <i class="fas fa-chart-area"></i>
                Crear Persona
                <?php $Url_Accion = Base_url . "persona/save" ?>
            <?php endif; ?>
        </div>
        <div class="card-body">
            <form action="<?= $Url_Accion ?>" method="POST">

                <label>Documento:</label>
                <input type="number" class="form-control " name="Documento_P" required value="<?= isset($Per) && is_object($Per) ? $Per->Documento_P : "" ?>">

                <div class="form-row">
                    <div class="col">
                        <label>Nombres:</label>
                        <input type="text" class="form-control" name="Nombre_P" required value="<?= isset($Per) && is_object($Per) ? $Per->Nombre_P : "" ?>">
                    </div>
                    <div class="col">
                        <label>Apellidos:</label>
                        <input type="text" class="form-control" name="Apellido_P" required value="<?= isset($Per) && is_object($Per) ? $Per->Apellido_P : "" ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label>Telefono:</label>
                        <input type="number" class="form-control" name="Telefono" required value="<?= isset($Per) && is_object($Per) ? $Per->Telefono : "" ?>">
                    </div>
                    <div class="col">
                        <label>Direccion:</label>
                        <input type="text" class="form-control" name="Direccion_P" required value="<?= isset($Per) && is_object($Per) ? $Per->Direccion_P : "" ?>">

                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label>Rh</label>
                        <select class="form-control" name="Rh_P" id="Rh_P" required>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                    <div class="col">
                        <label>Rol</label>
                        <select class="form-control" name="Rol_P" id="Rol_P" required>
                            <option value="Administrador">Administrador</option>
                            <option value="Cliente">Cliente</option>
                            <option value="Secretaria">Secretaria</option>
                        </select>

                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label>Email:</label>
                        <input type="text" class="form-control" name="Email_P" required value="<?= isset($Per) && is_object($Per) ? $Per->Email_P : "" ?>">
                    </div>

                    <div class="col">
                        <label>Contraseña:</label>
                        <input type="text" class="form-control" name="Password">

                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label>Arl:</label>
                        <input type="text" class="form-control" name="Arl_P" required value="<?= isset($Per) && is_object($Per) ? $Per->Arl_P : "" ?>">
                    </div>
                    <div class="col">
                        <label>Eps:</label>
                        <input type="text" class="form-control" name="Eps_P" required value="<?= isset($Per) && is_object($Per) ? $Per->Eps_P : "" ?>">

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







