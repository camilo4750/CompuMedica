<?php
require_once 'Models/Cliente.php';
class clienteController
{
    public function indexC()
    {
        Utilidades::isAdmin();
        $Cliente = new Cliente();
        $Clientes = $Cliente->AllC();
        require_once 'Views/Cliente/VistaC.php';
    }

    public function registroC()
    {
        Utilidades::isAdmin();
        require_once 'Views/Cliente/RegistroC.php';
    }

    public function saveC()
    {
        Utilidades::isAdmin();
        if (isset($_POST)) {
            $Cliente = new Cliente();
            $Cliente->setEntidadC($_POST['Entidad_C']);
            $Cliente->setCiudadC($_POST['Ciudad_C']);
            $Cliente->setTelefonoC($_POST['Telefono_C']);
            $Cliente->setDireccionC($_POST['Direccion_C']);
            $Cliente->setCorreoC($_POST['Correo_C']);
            $Cliente->setNitC($_POST['Nit_C']);
            $Cliente->setEstado('Activo');


            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $Cliente->setIdCliente($id);
                $Edit = $Cliente->Edit();
            } else {
                $Save = $Cliente->saveC();
            }


            if ($Edit) {
                $_SESSION['Editado'] = "El cliente se ha Editado correctamente";
            } else {
                $_SESSION['EditadoFail'] = "Error al editar";
            }
            if ($Save) {
                $_SESSION['Registrado'] = "El Cliente se ha creado correctamente";
            }
        } else {
            $_SESSION['AgregadoFail'] = "Fallo al agregar el cliente";
        }
        header("Location:" . Base_url . "cliente/indexC");
    }

    public function editar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Editar = true;
            $Cliente = new  Cliente();
            $Cliente->setIdCliente($id);

            $Cli = $Cliente->AllOne();
            require_once 'Views/Cliente/RegistroC.php';
        } else {
            header("Location:" . Base_url . "cliente/VistaC");
        }
    }

    public function ver()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Ver = true;
            $Cliente = new  Cliente();
            $Cliente->setIdCliente($id);

            $Cli = $Cliente->AllOne();
            require_once 'Views/Cliente/VerC.php';
        } else {
            header("Location:" . Base_url . "cliente/VistaC");
        }
    }

    public function inactivar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Cliente = new Cliente();
            $Cliente->setIdCliente($id);
            $Cliente->setEstado('Inactivo');
            $Cli = $Cliente->EditEstado();
        }
        header("Location:" . Base_url . "cliente/indexC");
    }

    public function activar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Cliente = new Cliente();
            $Cliente->setIdCliente($id);
            $Cliente->setEstado('Activo');
            $Cli = $Cliente->EditEstado();
        }
        header("Location:" . Base_url . "cliente/indexC");
    }
}
