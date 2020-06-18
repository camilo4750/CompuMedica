<?php
class Utilidades
{
    public static function DeleteSession()
    {
        $Borrado = false;
        if (isset($_SESSION['Registrado'])) {
            $_SESSION['Registrado'] = null;
            $Borrado = true;
        }
        if (isset($_SESSION['Eliminado'])) {
            $_SESSION['Eliminado'] = null;
            $Borrado = true;
        }

        if (isset($_SESSION['AgregadoFail'])) {
            $_SESSION['AgregadoFail'] = null;
            $Borrado = true;
        }

        if (isset($_SESSION['Error_Login'])) {
            $_SESSION['Error_Login'] = null;
            $Borrado = true;
        }

        if (isset($_SESSION['entrar'])) {
            $_SESSION['entrar'] = null;
            $Borrado = true;
        }


        if (isset($_SESSION['Editado'])) {
            $_SESSION['Editado'] = null;
            $Borrado = true;
        }
        return $Borrado;
    }

    public static function ShowPersonas()
    {
        require_once 'Models/Persona.php';
        $Persona = new Persona();
        $Personas = $Persona->All();
        return $Personas;
    }

    public static function ShowClientes()
    {
        require_once 'Models/Cliente.php';
        $Cliente = new Cliente();
        $Clientes = $Cliente->AllC();
        return $Clientes;
    }

    public static function ShowNotas()
    {
        require_once 'Models/Notas.php';
        $Nota = new Notas();
        $Notas = $Nota->AllN();
        return  $Notas;
    }
    public static function isAdmin()
    {
        if (!isset($_SESSION['Administrador'])) {
            header("Location:" . Base_url);
        } else {
            return true;
        }
    }

    public static function TotalesP()
    {
        if (isset($_SESSION['Administrador'])) {
            require_once 'Models/Persona.php';
            $TotalPersona = new Persona();
            $TotalPersona = $TotalPersona->AllTotal();
            return $TotalPersona;
        }
    }
    public static function TotalCli()
    {
        if (isset($_SESSION['Administrador'])) {
            require_once 'Models/Cliente.php';
            $TotalCliente = new Cliente();
            $TotalCliente = $TotalCliente->AllTotal();
            return $TotalCliente;
        }
    }

    public static function TotalPro()
    {
        if (isset($_SESSION['Administrador'])) {
            require_once 'Models/Proveedor.php';
            $TotalProveedor = new Proveedor();
            $TotalProveedor = $TotalProveedor->AllProveedor();
            return $TotalProveedor;
        }
    }
}
