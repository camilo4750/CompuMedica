<?php

require_once 'Models/Persona.php';

class personaController
{

    public function indexP()
    {
        Utilidades::isAdmin();

        $Persona = new Persona();
        $Personas = $Persona->All();
        require_once "Views/Persona/vistaP.php";
    }

    public function inicioS()
    {
        $personas = new Persona();
        $Total = $personas->AllT();
        require_once 'Views/Web/InicioSesion.php';
    }

    public function registroP()
    {
        Utilidades::isAdmin();

        require_once "Views/Persona/RegistroP.php";
    }


    public function save()
    {
        Utilidades::isAdmin();
        if (isset($_POST)) {

            $Persona = new Persona();
            $Persona->setDocumentoP($_POST['Documento_P']);
            $Persona->setNombreP($_POST['Nombre_P']);
            $Persona->setApellidoP($_POST['Apellido_P']);
            $Persona->setTelefono($_POST['Telefono']);
            $Persona->setDireccionP($_POST['Direccion_P']);
            $Persona->setRhP($_POST['Rh_P']);
            $Persona->setRolP($_POST['Rol_P']);
            $Persona->setEmailP($_POST['Email_P']);
            $Persona->setPassword($_POST['Password']);
            $Persona->setArlP($_POST['Arl_P']);
            $Persona->setEpsP($_POST['Eps_P']);


            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $Persona->setIdPersona($id);

                $Edit = $Persona->Edit();
            } else {
                $Save = $Persona->Save();
            }

            if ($Edit) {
                $_SESSION['Editado'] = "La Persona se editado correctamente";
            } else {
                $_SESSION['EditadoFail'] = "Error al editar";
            }
            if ($Save) {
                $_SESSION['Registrado'] = "La Persona se ha creado correctamente";
            }
        } else {
            $_SESSION['RegistroFail'] = "Error al guardar la Persona";
        }
        header("Location:" . Base_url . 'persona/indexP');
    }

    public function editar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Editar = true;
            $Persona = new Persona();
            $Persona->setIdPersona($id);

            $Per = $Persona->AllOne();
            require_once 'Views/Persona/RegistroP.php';
        } else {
            header("Location:" . Base_url . "producto/indexP");
        }
    }

    public function eliminar()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Persona = new Persona();
            $Persona->setIdPersona($id);

            $Delete = $Persona->delete();
            if ($Delete) {
                $_SESSION['Eliminado'] = "La Persona se ha eliminado correctamente";
            } else {
                $_SESSION['False'] = "Error al eliminar los datos de esta persona se encuentran en otra tabla";
            }
        } else {
            $_SESSION['False'] = "Error al eliminar el producto";
        }
        header("Location:" . Base_url . "persona/indexP");
    }

    public function ver()
    {
        Utilidades::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Ver = true;
            $Persona = new  Persona();
            $Persona->setIdPersona($id);

            $Per = $Persona->AllOne();
            require_once 'Views/persona/VerP.php';
        } else {
            header("Location:" . Base_url . "cliente/VistaC");
        }
    }

    public function login()
    {
        if (isset($_POST)) {
            $Persona = new Persona();
            $Persona->setEmailP($_POST['Email_P']);
            $Persona->setPassword($_POST['Password']);
            $Identificado = $Persona->login();
            if ($Identificado && is_object($Identificado)) {
                $_SESSION['Identificado'] = $Identificado;
                if ($Identificado->Rol_P == 'Administrador') {
                    $_SESSION['Administrador'] = true;
                }
                header("Location:" . Base_url . "index/principal");
            } else {
                $_SESSION['Error_Login'] = "Identificacion Fallida";
                header("Location:" . Base_url . "persona/inicioS");
            }
        }
    }

    public function logout()
    {
        Utilidades::isAdmin();
        if (isset($_SESSION['Identificado'])) {
            unset($_SESSION['Identificado']);
        }
        if (isset($_SESSION['Administrador'])) {
            unset($_SESSION['Administrador']);
        }

        header("Location:" . Base_url);
    }

    public function SaveAd(){
        if (isset($_POST)) {

            $Persona = new Persona();
            $Persona->setDocumentoP($_POST['Documento_P']);
            $Persona->setNombreP($_POST['Nombre_P']);
            $Persona->setApellidoP($_POST['Apellido_P']);
            $Persona->setTelefono($_POST['Telefono']);
            $Persona->setDireccionP($_POST['Direccion_P']);
            $Persona->setRhP($_POST['Rh_P']);
            $Persona->setRolP($_POST['Rol_P']);
            $Persona->setEmailP($_POST['Email_P']);
            $Persona->setPassword($_POST['Password']);
            $Persona->setArlP($_POST['Arl_P']);
            $Persona->setEpsP($_POST['Eps_P']);

            $Save = $Persona->Save();

            if ($Save) {
                $_SESSION['Registrado'] = "La Persona se ha creado correctamente";
            }
        }
        header("Location:" . Base_url . "persona/inicioS");
    }
}
