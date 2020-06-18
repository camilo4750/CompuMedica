<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../assets/css/login.css?v=<?php echo time(); ?>" />
  <link href="<?= Base_url ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="<?= Base_url ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <title>Inicio Sesion</title>
</head>

<body>
  <div class="col-md-12">
    <?php if (isset($_SESSION['Registrado'])) : ?>
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong><?= $_SESSION['Registrado'] ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>
    <?php if (isset($_SESSION['Error_Login'])) : ?>
      <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong><?= $_SESSION['Error_Login'] ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>
    <?php Utilidades::DeleteSession(); ?>
    <div class="formulario">
      <center>
        <div class="login mb-5">
          <article class="fondo">
            <img src="../assets/img/comp.png" alt="usuario">
            <h3>Inicio de Sesión</h3>

            <?php if (isset($Total) && $Total->Total == 0) : ?>



              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Registrar Administrador</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= Base_url ?>persona/saveAd" method="POST">
                        <label for="">Documento</label>
                        <input type="number" class="form-control " name="Documento_P" required>
                        <div class="row">
                          <div class="col">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="Nombre_P" required>

                          </div>
                          <div class="col">
                            <label for="">Apellido</label>
                            <input type="text" class="form-control" name="Apellido_P" required>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col">
                            <label for="">Telefono</label>
                            <input type="number" class="form-control" name="Telefono">

                          </div>
                          <div class="col">
                            <label for="">Direccion</label>
                            <input type="text" class="form-control" name="Direccion_P" required>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col">
                            <label for="">Rh</label>
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
                            </select>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="Email_P" required>
                          </div>
                          <div class="col">
                            <label for="">Contraseña</label>
                            <input type="text" class="form-control" name="Password" required>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col">
                            <label for="">Arl</label>
                            <input type="text" class="form-control" name="Arl_P" required>
                          </div>
                          <div class="col">
                            <label for="">Eps</label>
                            <input type="text" class="form-control" name="Eps_P" required>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-info mt-4 float-right">Guargar Usuario</button>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <?php else : ?>
              <form action="<?= Base_url ?>persona/login" method="post">
                <span><i class="fas fa-users"></i></span><input class="inp" type="text" name="Email_P" required><br>

                <span><i class="fas fa-key"></i></span><input class="inp" type="password" name="Password" required><br>
                <a href="" class="he">He olvidado mi contraseña</a>
                <input class="boton" type="submit" value="Iniciar Sesion">
              </form>
            <?php endif; ?>
          </article>
        </div>
      </center>

    </div>
  </div>
</body>

</html>


<script src="<?= Base_url ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= Base_url ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>