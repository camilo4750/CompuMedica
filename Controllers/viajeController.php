<?php
require_once 'Models/Viaje.php';

class viajeController
{
    public function indexV()
    {
        Utilidades::isAdmin();
        $Viaje = new Viaje();
        $Viajes = $Viaje->AllV();

        $MONTO = $Viaje->total();
        require_once 'Views/Viajes/VistaV.php';
    }

    public function registroV()
    {
        require_once 'Views/Viajes/agregarV.php';
    }

    public function save()
    {
        Utilidades::isAdmin();
        if (isset($_POST)) {
            $Viajes = new Viaje();
            $Viajes->setPersonaId($_POST['Persona_Id']);
            $Viajes->setMotivo($_POST['Motivo']);
            $Viajes->setInicio($_POST['Inicio']);
            $Viajes->setFin($_POST['Fin']);
            $Viajes->setGastos($_POST['Gastos']);
            $Viajes->setApuntes($_POST['Apuntes']);

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $Viajes->setIdViajes($id);

                $Edit = $Viajes->Edit();
            } else {
                $Save = $Viajes->saveV();
            }


            if ($Edit) {
                $_SESSION['Editado'] = "El Viaje se editado correctamente";
            } else {
                $_SESSION['EditadoFail'] = "Error al editar";
            }
            if ($Save) {
                $_SESSION['Registrado'] = "El Viaje se ha creado correctamente";
            }
        } else {
            $_SESSION['AgregadoFail'] = "Fallo al agregar";
        }
        header("Location:" . Base_url . "viaje/indexV");
    }

    public function editar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Editar = true;
            $Viaje = new Viaje();
            $Viaje->setIdViajes($id);
            $Via = $Viaje->AllOne();
            require_once 'Views/Viajes/agregarV.php';
        } else {
            header("Location:" . Base_url . "viaje/VistaV");
        }
    }

    public function ver()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Ver = true;
            $Viaje = new  Viaje();
            $Viaje->setIdViajes($id);

            $Via = $Viaje->AllOne();
            require_once 'Views/viajes/VerV.php';
        } else {
            header("Location:" . Base_url . "viajes/indexV");
        }
    }


    public function inactivar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Cliente = new Viaje();
            $Cliente->setIdViajes($id);
            $Cliente->setEstado('Inactivo');
            $Cli = $Cliente->EditEstado();
        }
        header("Location:" . Base_url . "viaje/indexV");
    }

    public function activar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Cliente = new Viaje();
            $Cliente->setIdViajes($id);
            $Cliente->setEstado('Activo');
            $Cli = $Cliente->EditEstado();
        }
        header("Location:" . Base_url . "viaje/indexV");
    }
}
