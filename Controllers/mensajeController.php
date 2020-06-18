<?php
require_once 'Models/Mensaje.php';
class mensajeController
{

    public function indexM()
    {
        Utilidades::isAdmin();
        $mensaje = new Mensaje();
        $MSJ = $mensaje->AllM();
        require_once 'Views/Mensajes/VistaM.php';
    }

    public function save()
    {
        Utilidades::isAdmin();
        if (isset($_POST)) {
            $Mensaje = new Mensaje();
            $Mensaje->setNombre($_POST['nombre']);
            $Mensaje->setEmail($_POST['Email']);
            $Mensaje->setTema($_POST['Tema']);
            $Mensaje->setMensaje($_POST['mensaje']);
            $Mensaje->setEstado('Activo');

            $Save = $Mensaje->save();

            if ($Save) {
                header("Location:" . Base_url);
            }
        }
    }


    public function ver()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $mensaje = new  Mensaje();
            $mensaje->setIdMensajes($id);

            $Msj = $mensaje->AllOne();
            require_once 'Views/Mensajes/VerM.php';
        } else {
            header("Location:" . Base_url . "mensaje/VistaM");
        }
    }

    public function inactivar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $mensaje = new Mensaje();
            $mensaje->setIdMensajes($id);
            $mensaje->setEstado('Inactivo');
            $Msj = $mensaje->EditEstado();
        }
        header("Location:" . Base_url . "mensaje/indexM");
    }

    public function activar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $mensaje = new Mensaje();
            $mensaje->setIdMensajes($id);
            $mensaje->setEstado('Activo');
            $Msj = $mensaje->EditEstado();
        }
        header("Location:" . Base_url . "mensaje/indexM");
    }
}
