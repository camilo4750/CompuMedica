<?php
require_once 'Models/Pago.php';

class pagoController
{
    public function indexPa()
    {
        Utilidades::isAdmin();
        $Pagos = new Pago();
        $Pago = $Pagos->All();

        $MONTO = $Pagos->total();
        require_once 'Views/Pagos/VistaPa.php';
    }

    public function registroPa()
    {
        Utilidades::isAdmin();
        require_once 'Views/Pagos/RegistroPa.php';
    }

    public function save()
    {
        Utilidades::isAdmin();
        if (isset($_POST)) {
            $Pago = new Pago();
            $Pago->setPersonaId($_POST['Persona_Id']);
            $Pago->setFechaPag($_POST['FechaPag']);
            $Pago->setValorT($_POST['ValorT']);
            $Pago->setEstado('Activo');


            if (isset($_FILES['Archivo'])) {
                $file = $_FILES['Archivo'];
                $filename = $file['name'];
                $mimetype = $file['type'];

                if ($mimetype == "application/pdf" || $mimetype == "application/msword") {
                    if (!is_dir('Uploads/ArchivosPago')) {
                        mkdir('Uploads/ArchivosPago', 0777, true);
                    }
                    $Pago->setArchivo($filename);
                    move_uploaded_file($file['tmp_name'], 'Uploads/ArchivosPago/' . $filename);
                }
            }

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $Pago->setIdPagos($id);

                $Edit = $Pago->Edit();
            } else {
                $Save = $Pago->savePa();
            }

            if ($Edit) {
                $_SESSION['Editado'] = "El Pago se ha editado correctamente";
            } else {
                $_SESSION['EditadoFail'] = "Error al editar";
            }
            if ($Save) {
                $_SESSION['Registrado'] = "El Pago se ha creado correctamente";
            }
        } else {
            $_SESSION['Fail'] = "Error al guardar";
        }
        header("Location:" . Base_url . "pago/indexPa");
    }

    public function editar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Editar = true;
            $Pago = new Pago();
            $Pago->setIdPagos($id);

            $PAGO = $Pago->AllOne();
            require_once 'Views/Pagos/RegistroPa.php';
        } else {
            header(Base_url . "pago/indexPa");
        }
    }

    public function ver()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $pago = new Pago();
            $pago->setIdPagos($id);

            $Pagos = $pago->AllOne();
            require_once 'Views/Pagos/VerP.php';
        } else {
            header(Base_url . "pago/indexPa");
        }
    }

    public function inactivar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $pago = new Pago();
            $pago->setIdPagos($id);
            $pago->setEstado('Inactivo');
            $PAGO = $pago->EditEstado();
        }
        header("Location:" . Base_url . "pago/indexPa");
    }

    public function activar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $pago = new Pago();
            $pago->setIdPagos($id);
            $pago->setEstado('Activo');
            $PAGO = $pago->EditEstado();
        }
        header("Location:" . Base_url . "pago/indexPa");
    }
}
