<?php
require_once 'Models/Notas.php';
require_once 'Models/Cliente.php';
require_once 'Models/Hdv.php';
require_once 'Models/Mensaje.php';
require_once 'Models/Pago.php';
require_once 'Models/Persona.php';
require_once 'Models/Proveedor.php';
require_once 'Models/Viaje.php';


class indexController
{

    public function principal()
    {
        $Cliente = new Cliente();
        $Tcliente = $Cliente->AllTotal();

        $Persona = new Persona();
        $TPersonas = $Persona->AllTotal();

        $hdv = new Hdv();
        $Thdv = $hdv->AllTotal();

        $mensajes = new Mensaje();
        $Tmensajes = $mensajes->AllTotal();

        $pagos = new Pago();
        $TPagos = $pagos->AllTotal();

        $proveedor = new Proveedor();
        $Tproveedores = $proveedor->AllTotal();

        $viajes = new Viaje();
        $Tviajes = $viajes->AllTotal();

        $Notas = new Notas();
        $Notass = true;
        $Session = false;
        $Nota = $Notas->AllN();
        require_once "Views/Index/VistaN.php";
    }

    public function gestion()
    {
        Utilidades::isAdmin();
        $Gestion = true;
        require_once 'Views/Index/TblNotas.php';
    }

    public function registroN()
    {
        Utilidades::isAdmin();
        $Edit = true;
        require_once 'Views/Index/RegistroN.php';
    }

    public function save()
    {
        Utilidades::isAdmin();

        if (isset($_POST)) {
            $Notas = new Notas();
            $Notas->setNota($_POST['Nota']);
            $Notas->setCaduca($_POST['Caduca']);
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $Notas->setIdNotas($id);
                $Edit = $Notas->Edit();
            } else {
                $Save = $Notas->Save();
            }


            if ($Edit) {
                $_SESSION['Editado'] = "La Nota se ha Editado correctamente";
            } else {
                $_SESSION['EditadoFail'] = "Error al editar";
            }
            if ($Save) {
                $_SESSION['Registrado'] = "La Nota se ha creado correctamente";
            }
        } else {
            $_SESSION['Exito'] = "La nota no se ha creado";
        }
        header('Location:' . Base_url . "index/principal");
    }

    public function ver()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Ver = true;
            $Nota = new Notas();
            $Nota->setIdNotas($id);

            $Notas = $Nota->Allone();
            require_once 'Views/Index/VerN.php';
        } else {
            header("Location:" . Base_url . "index/principal");
        }
    }

    public function editar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Edit = true;
            $Notas = new Notas();
            $Notas->setIdNotas($id);

            $Nota = $Notas->Allone();
            require_once 'Views/Index/RegistroN.php';
        } else {
            header("Location:" . Base_url . "index/VistaN");
        }
    }

    public function eliminar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Notas = new Notas();
            $Notas->setIdNotas($id);

            $Delete = $Notas->delete();
            if ($Delete) {
                $_SESSION['Eliminado'] = "La nota se ha eliminado correctamente";
            } else {
                $_SESSION['False'] = "Error al eliminar";
            }
        } else {
            $_SESSION['False'] = "Error al eliminar el producto";
        }
        header("Location:" . Base_url . "index/gestion");
    }
}
