<?php
require_once 'Models/Proveedor.php';

class proveedorController
{
    public function indexPr()
    {
        Utilidades::isAdmin();
        $Proveedor = new Proveedor();
        $Proveedores = $Proveedor->AllPr();
        require_once 'Views/Proveedor/VistaPr.php';
    }

    public function registroPr()
    {
        Utilidades::isAdmin();
        require_once 'Views/Proveedor/RegistroPr.php';
    }

    public function save()
    {
        Utilidades::isAdmin();
        if (isset($_POST)) {
            $Proveedor = new Proveedor();
            $Proveedor->setFabricante($_POST['Fabricante']);
            $Proveedor->setTelefono($_POST['Telefono']);
            $Proveedor->setCorreo($_POST['Correo']);
            $Proveedor->setNit($_POST['Nit']);
            $Proveedor->setArea($_POST['Area']);


            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $Proveedor->setIdProveedores($id);
                $Edit = $Proveedor->Edit();
            } else {
                $save = $Proveedor->SavePr();
            }


            if ($Edit) {
                $_SESSION['Editado'] = "El Proveedor se  ha Editado correctamente";
            } else {
                $_SESSION['EditadoFail'] = "Error al editar";
            }
            if ($save) {
                $_SESSION['Registrado'] = "El Proveedor se ha creado correctamente";
            }
        } else {
            $_SESSION['AgregadoFail'] = "Fallo al agregar el usuario";
        }
        header("Location:" . Base_url . "proveedor/indexPr");
    }

    public function editar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Editar = true;
            $Proveedor = new Proveedor();
            $Proveedor->setIdProveedores($id);

            $Prov = $Proveedor->AllOne();
            require_once 'Views/Proveedor/RegistroPr.php';
        } else {
            header('Location:' . Base_url . 'proveedor/VistaPr');
        }
    }

    public function ver()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Ver = true;
            $Proveedor = new  Proveedor();
            $Proveedor->setIdProveedores($id);

            $Prov = $Proveedor->AllOne();
            require_once 'Views/proveedor/VerPr.php';
        } else {
            header("Location:" . Base_url . "cliente/VistaPr");
        }
    }

    public function inactivar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Cliente = new Proveedor();
            $Cliente->setIdProveedores($id);
            $Cliente->setEstado('Inactivo');
            $Cli = $Cliente->EditEstado();
        }
        header("Location:" . Base_url . "proveedor/indexPr");
    }

    public function activar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Cliente = new Proveedor();
            $Cliente->setIdProveedores($id);
            $Cliente->setEstado('Activo');
            $Cli = $Cliente->EditEstado();
        }
        header("Location:" . Base_url . "proveedor/indexPr");
    }
}
