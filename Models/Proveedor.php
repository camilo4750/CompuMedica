<?php
class Proveedor
{
    private $idProveedores;
    private $Fabricante;
    private $Telefono;
    private $Correo;
    private $Nit;
    private $Area;
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
    public function getIdProveedores()
    {
        return $this->idProveedores;
    }

    /**
     * @param mixed $idProveedores
     */
    public function setIdProveedores($idProveedores)
    {
        $this->idProveedores = $idProveedores;
    }

    /**
     * @return mixed
     */
    public function getFabricante()
    {
        return $this->Fabricante;
    }

    /**
     * @param mixed $Fabricante
     */
    public function setFabricante($Fabricante)
    {
        $this->Fabricante = $this->db->real_escape_string($Fabricante);
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
    public function getCorreo()
    {
        return $this->Correo;
    }

    /**
     * @param mixed $Correo
     */
    public function setCorreo($Correo)
    {
        $this->Correo = $this->db->real_escape_string($Correo);
    }

    /**
     * @return mixed
     */
    public function getNit()
    {
        return $this->Nit;
    }

    /**
     * @param mixed $Nit
     */
    public function setNit($Nit)
    {
        $this->Nit = $Nit;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->Area;
    }

    /**
     * @param mixed $Area
     */
    public function setArea($Area)
    {
        $this->Area = $this->db->real_escape_string($Area);
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

    public function SavePr()
    {
        $Sql = "INSERT INTO proveedores VALUES(NULL, '{$this->getFabricante()}', {$this->getTelefono()}, '{$this->getCorreo()}', {$this->getNit()}, '{$this->getArea()}', 'Activo', CURDATE());";
        $Save = $this->db->query($Sql);

        $Guardado = false;
        if ($Save) {
            $Guardado = true;
        }
        return $Guardado;
    }

    public function Edit()
    {
        $Sql = "UPDATE proveedores SET Fabricante='{$this->getFabricante()}', Telefono={$this->getTelefono()}, Correo='{$this->getCorreo()}', Nit={$this->getNit()}, Area='{$this->getArea()}' WHERE idProveedores={$this->getIdProveedores()};";
        $Save = $this->db->query($Sql);

        $Guardado = false;
        if ($Save) {
            $Guardado = true;
        }
        return $Guardado;
    }


    public function AllPr()
    {
        $Proveedor = $this->db->query("SELECT * FROM proveedores;");
        return $Proveedor;
    }

    public function AllOne()
    {
        $Proveedor = $this->db->query("SELECT * FROM proveedores WHERE idProveedores = {$this->getIdProveedores()}");
        return $Proveedor->fetch_object();
    }

    public function EditEstado()
    {
        $Sql = "UPDATE proveedores SET Estado='{$this->getEstado()}' WHERE idProveedores={$this->getIdProveedores()}";
        $save = $this->db->query($Sql);

        $Guardado = false;
        if ($save) {
            $Guardado = true;
        }
        return $Guardado;
    }

    public function AllTotal(){
        $SQL = $this->db->query("SELECT COUNT(*) As 'TotalProveedores' FROM Proveedores");
        return $SQL->fetch_object();
    }
}
