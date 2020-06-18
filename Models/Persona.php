<?php
class Persona
{
    private $Id_Persona;
    private $Documento_P;
    private $Nombre_P;
    private $Apellido_P;
    private $Telefono;
    private $Direccion_P;
    private $Rh_P;
    private $Rol_P;
    private $Email_P;
    private $Password;
    private $Arl_P;
    private $Eps_P;
    private $Estado;
    private $FechaInsert;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * @return mixed
     */
    public function getIdPersona()
    {
        return $this->Id_Persona;
    }

    /**
     * @param mixed $Id_Persona
     */
    public function setIdPersona($Id_Persona)
    {
        $this->Id_Persona = $Id_Persona;
    }

    /**
     * @return mixed
     */
    public function getDocumentoP()
    {
        return $this->Documento_P;
    }

    /**
     * @param mixed $Documento_P
     */
    public function setDocumentoP($Documento_P)
    {
        $this->Documento_P = $Documento_P;
    }

    /**
     * @return mixed
     */
    public function getNombreP()
    {
        return $this->Nombre_P;
    }

    /**
     * @param mixed $Nombre_P
     */
    public function setNombreP($Nombre_P)
    {
        $this->Nombre_P = $this->db->real_escape_string($Nombre_P);
    }

    /**
     * @return mixed
     */
    public function getApellidoP()
    {
        return $this->Apellido_P;
    }

    /**
     * @param mixed $Apellido_P
     */
    public function setApellidoP($Apellido_P)
    {
        $this->Apellido_P = $this->db->real_escape_string($Apellido_P);
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->Telefono;
    }

    /**
     * @param mixed $Telefono
     */
    public function setTelefono($Telefono)
    {
        $this->Telefono = $Telefono;
    }

    /**
     * @return mixed
     */
    public function getDireccionP()
    {
        return $this->Direccion_P;
    }

    /**
     * @param mixed $Direccion_P
     */
    public function setDireccionP($Direccion_P)
    {
        $this->Direccion_P = $this->db->real_escape_string($Direccion_P);
    }

    /**
     * @return mixed
     */
    public function getRhP()
    {
        return $this->Rh_P;
    }

    /**
     * @param mixed $Rh_P
     */
    public function setRhP($Rh_P)
    {
        $this->Rh_P = $this->db->real_escape_string($Rh_P);
    }

    /**
     * @return mixed
     */
    public function getRolP()
    {
        return $this->Rol_P;
    }

    /**
     * @param mixed $Rol_P
     */
    public function setRolP($Rol_P)
    {
        $this->Rol_P = $this->db->real_escape_string($Rol_P);
    }

    /**
     * @return mixed
     */
    public function getEmailP()
    {
        return $this->Email_P;
    }

    /**
     * @param mixed $Email_P
     */
    public function setEmailP($Email_P)
    {
        $this->Email_P = $this->db->real_escape_string($Email_P);
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return password_hash($this->db->real_escape_string($this->Password), PASSWORD_BCRYPT, ['COST' => 4]);
    }

    /**
     * @param mixed $Password
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    /**
     * @return mixed
     */
    public function getArlP()
    {
        return $this->Arl_P;
    }

    /**
     * @param mixed $Arl_P
     */
    public function setArlP($Arl_P)
    {
        $this->Arl_P = $this->db->real_escape_string($Arl_P);
    }

    /**
     * @return mixed
     */
    public function getEpsP()
    {
        return $this->Eps_P;
    }

    /**
     * @param mixed $Eps_P
     */
    public function setEpsP($Eps_P)
    {
        $this->Eps_P = $this->db->real_escape_string($Eps_P);
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * @param mixed $Estado
     */
    public function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }

    /**
     * @return mixed
     */
    public function getFechaInsert()
    {
        return $this->FechaInsert;
    }

    /**
     * @param mixed $FechaInsert
     */
    public function setFechaInsert($FechaInsert)
    {
        $this->FechaInsert = $FechaInsert;
    }

    public function Save()
    {
        $Sql = "INSERT INTO persona VALUES(NULL, {$this->getDocumentoP()}, '{$this->getNombreP()}', '{$this->getApellidoP()}', {$this->getTelefono()}, '{$this->getDireccionP()}', '{$this->getRhP()}', '{$this->getRolP()}', '{$this->getEmailP()}', '{$this->getPassword()}', '{$this->getArlP()}', '{$this->getEpsP()}', 'Activo', CURDATE());";
        $save = $this->db->query($Sql);


        $Guardado = false;
        if ($save) {
            $Guardado = true;
        }
        return $Guardado;
    }

    public function Edit()
    {
        $Sql = "UPDATE persona SET Documento_P={$this->getDocumentoP()}, Nombre_P='{$this->getNombreP()}', Apellido_P='{$this->getApellidoP()}', Telefono={$this->getTelefono()}, Direccion_P='{$this->getDireccionP()}', Rh_P='{$this->getRhP()}', Rol_P='{$this->getRolP()}', Email_P='{$this->getEmailP()}', Arl_P='{$this->getArlP()}', Eps_P='{$this->getEpsP()}' WHERE Id_Persona={$this->getIdPersona()};";
        $save = $this->db->query($Sql);


        $Guardado = false;
        if ($save) {
            $Guardado = true;
        }
        return $Guardado;
    }

    public function All()
    {
        $Persona = $this->db->query("SELECT * FROM persona;");
        return $Persona;
    }

    public function AllOne()
    {
        $Persona = $this->db->query("SELECT * FROM persona WHERE Id_Persona = {$this->getIdPersona()}");
        return $Persona->fetch_object();
    }

    public function AllT()
    {
        $Persona = $this->db->query("SELECT COUNT(Id_Persona) AS 'Total' FROM persona");
        return $Persona->fetch_object();
    }

    public function delete()
    {
        $Sql = "DELETE FROM persona WHERE Id_Persona={$this->Id_Persona}";
        $delete = $this->db->query($Sql);

        $Eliminado = false;
        if ($delete) {
            $Eliminado = true;
        }
        return $Eliminado;
    }

    public function login()
    {
        $Result = false;
        $email = $this->Email_P;
        $password = $this->Password;

        //Comprobar si existe usuario
        $Sql = "SELECT * FROM persona Where Email_P = '$email'";
        $Login = $this->db->query($Sql);

        if ($Login && $Login->num_rows == 1) {
            $Usuario = $Login->fetch_object();
            $Verify = password_verify($password, $Usuario->Password);

            if ($Verify) {
                $Result = $Usuario;
            }
        }
        //var_dump($Result);
        //die();
        return $Result;
    }

    public function AllTotal(){
        $SQL = $this->db->query("SELECT COUNT(*) As 'TotalPersonas' FROM persona");
        return $SQL->fetch_object();
    }
}
