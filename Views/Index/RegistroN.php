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
            <?php if (isset($Edit) && isset($Nota) && is_object($Nota)) : ?>
            <i class="fas fa-chart-area"></i>
            Editar: <strong>Nota</strong> </div>
                <?php $Url_Accion = Base_url . "index/save&id=" . $Nota->idNotas ?>
            <?php else : ?>
        <i class="fas fa-chart-area"></i>
        Crear Nota</div>
                <?php $Url_Accion = Base_url . "index/save"  ?>
            <?php endif; ?>
        <div class="card-body">

            <form action="<?= $Url_Accion ?>" method="POST">

                <div class="form-row">
                    <div class="col">
                        <label>Nota:</label>
                        <input type="text" class="form-control " name="Nota" required value="<?= isset($Nota) && is_object($Nota) ? $Nota->Nota : "" ?>">
                    </div>
                    <div class="col">
                        <label>Fecha de caducidad:</label>
                        <input type="date" class="form-control" name="Caduca" required value="<?= isset($Nota) && is_object($Nota) ? $Nota->Caduca : "" ?>">
                    </div>
                </div>

                <input type="submit" class="btn btn-success btn-block mt-4">
            </form>

            </div>

        <div class="card-footer small text-muted"></div>
    <?php require_once 'Views/layout/footer2.php'; ?>
</div>
