<?php
require_once 'Models/Hdv.php';

class hdvController
{
    public function indexH()
    {
        Utilidades::isAdmin();
        $HDV = new Hdv();
        $HDV = $HDV->Allh();
        require_once 'Views/HDV/VistaH.php';
    }

    public function registroH()
    {
        Utilidades::isAdmin();
        require_once 'Views/HDV/RegistroH.php';
    }

    public function save()
    {
        Utilidades::isAdmin();
        if (isset($_POST)) {
            $HDV = new Hdv();
            $HDV->setClienteId($_POST['Cliente_id']);
            $HDV->setFecha($_POST['Fecha']);
            $HDV->setEstado('Activo');

            if (isset($_FILES['Archivo'])) {
                $file = $_FILES['Archivo'];
                $filename = $file['name'];
                $mimetype = $file['type'];

                if ($mimetype == "application/pdf" || $mimetype == "application/msword") {
                    if (!is_dir('Uploads/Archivos')) {
                        mkdir('Uploads/Archivos', 0777, true);
                    }
                    $HDV->setArchivo($filename);
                    move_uploaded_file($file['tmp_name'], 'Uploads/Archivos/' . $filename);
                }
            }

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $HDV->setIdHDV($id);

                $Edit = $HDV->Edit();
            } else {
                $Save = $HDV->saveH();
            }

            if ($Edit) {
                $_SESSION['Editado'] = "La Hoja de vida se editado correctamente";
            } else {
                $_SESSION['EditadoFail'] = "Error al editar";
            }
            if ($Save) {
                $_SESSION['Registrado'] = "La Hoja de vida se ha creado correctamente";
            }
        } else {
            $_SESSION['Producto_fail'] = "Failed";
        }
        header("Location:" . Base_url . "hdv/indexH");
    }

    public function editar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Editar = true;
            $HDV = new Hdv();
            $HDV->setIdHDV($id);

            $Hoja = $HDV->AllOne();
            require_once 'Views/HDV/RegistroH.php';
        } else {
            header(Base_url . "hdv/VistaH");
        }
    }

    public function ver()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $hdv = new Hdv();
            $hdv->setIdHDV($id);

            $Hoja = $hdv->AllOne();
            require_once 'Views/HDV/VerH.php';
        } else {
            header(Base_url . "hdv/VistaH");
        }
    }

    public function inactivar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $hdv = new Hdv();
            $hdv->setIdHDV($id);
            $hdv->setEstado('Inactivo');
            $Hoja = $hdv->EditEstado();
        }
        header("Location:" . Base_url . "hdv/indexH");
    }

    public function activar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $hdv = new Hdv();
            $hdv->setIdHDV($id);
            $hdv->setEstado('Activo');
            $Hoja = $hdv->EditEstado();
        }
        header("Location:" . Base_url . "hdv/indexH");
    }
}
