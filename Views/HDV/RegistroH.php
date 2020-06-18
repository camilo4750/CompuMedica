<?php
    require_once 'Views/layout/header.php';
    ?>
    <!-- DataTables Example -->
    <div class="container-fluid">


        <ol class="breadcrumb" style="background: #F7F7F7">
            <li class="breadcrumb-item">
                <a class="text-warning" href="<?= Base_url ?>hdv/registroH">Crear HDV</a>
            </li>
            <li class="breadcrumb-item active">
                <a class="text-warning" href="<?= Base_url ?>hdv/indexH">Ver tabla HDV</a>
            </li>
        </ol>

        <div class="card mb-3">
            <div class="card-header">
                <?php if (isset($Editar) && isset($Hoja) && is_object($Hoja)) : ?>
                    <i class="fas fa-chart-area"></i>
                    Editar: <strong>HDV</strong>
                    <?php $Accion_Url = Base_url . "hdv/save&id=" . $Hoja->idHDV ?>
                <?php else : ?>
                    <i class="fas fa-chart-area"></i>
                    Agregar
                    <?php $Accion_Url = Base_url . "hdv/save" ?>
                <?php endif; ?>
            </div>
            <div class="card-body">


                <form action="<?= $Accion_Url ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col">
                            <label>Cliente:</label>
                            <?php $hdv = Utilidades::ShowClientes(); ?>
                            <select class="form-control" name="Cliente_id">
                                <?php while ($Cli = $hdv->fetch_object()) : ?>
                                    <option value="<?= $Cli->idCliente ?>" <?= isset($Hoja) && is_object($Hoja) && $Cli->idCliente == $Hoja->Cliente_id ? 'selected' : ""; ?>>
                                        <?= $Cli->Entidad_C ?>
                                    </option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="col">
                            <label>Hoja de vida:</label>
                            <?php if (isset($Hoja) && !empty($Hoja->Archivo)) : ?>
                                <a class="text-success" href="<?= Base_url ?>Uploads/Archivos/<?= $Hoja->Archivo ?>"><?= $Hoja->Archivo ?></a>
                            <?php endif; ?>
                            <input type="file" class="form-control" name="Archivo">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label>Fecha:</label>
                            <input type="date" class="form-control" name="Fecha" required value="<?= isset($Hoja) && is_object($Hoja) ? $Hoja->Fecha : ""; ?>">
                        </div>
                        <div class="col">

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


