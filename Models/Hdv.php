<?php

class Hdv
{
    private $idHDV;
    private $Cliente_id;
    private $Archivo;
    private $Fecha;
    private $Estado;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
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
    public function getIdHDV()
    {
        return $this->idHDV;
    }

    /**
     * @param mixed $idHDV
     */
    public function setIdHDV($idHDV)
    {
        $this->idHDV = $idHDV;
    }

    /**
     * @return mixed
     */
    public function getClienteId()
    {
        return $this->Cliente_id;
    }

    /**
     * @param mixed $Cliente_id
     */
    public function setClienteId($Cliente_id)
    {
        $this->Cliente_id = $Cliente_id;
    }

    /**
     * @return mixed
     */
    public function getArchivo()
    {
        return $this->Archivo;
    }

    /**
     * @param mixed $Archivo
     */
    public function setArchivo($Archivo)
    {
        $this->Archivo = $this->db->real_escape_string($Archivo);
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    /**
     * @param mixed $Fecha
     */
    public function setFecha($Fecha)
    {
        $this->Fecha = $Fecha;
    }


    public function Allh()
    {
        $All = $this->db->query("SELECT h.*, c.Entidad_C AS 'cliente' FROM hdv h INNER JOIN cliente c ON h.Cliente_id=C.idCliente ORDER BY h.idHDV ASC");
        return $All;
    }

    public function AllOne()
    {
        $hdv = $this->db->query("SELECT * FROM hdv WHERE idHDV = {$this->getIdHDV()}");
        return $hdv->fetch_object();
    }

    public function saveH()
    {
        $Sql = "INSERT INTO hdv VALUES(NULL, '{$this->getClienteId()}', '{$this->getArchivo()}', '{$this->getFecha()}', '{$this->getEstado()}');";
        $Save = $this->db->query($Sql);

        $Guardado = false;
        if ($Save) {
            $Guardado = true;
        }
        return $Guardado;
    }

    public function Edit()
    {

        $Sql = "UPDATE hdv SET Cliente_id = '{$this->getClienteId()}', Fecha = '{$this->getFecha()}', Estado = '{$this->getEstado()}'  ";

        if ($this->getArchivo() != null) {
            $Sql .= ", Archivo='{$this->getArchivo()}'";
        }

        $Sql .= " WHERE idHDV={$this->idHDV};";

        $Save = $this->db->query($Sql);

        $Guardado = false;
        if ($Save) {
            $Guardado = true;
        }
        return $Guardado;
    }
    public function EditEstado(){
        $Sql = "UPDATE hdv SET Estado='{$this->getEstado()}' WHERE idHDV={$this->getIdHDV()}";
        $save = $this->db->query($Sql);

        $Guardado = false;
        if ($save){
            $Guardado = true;
        }
        return $Guardado;
    }

    public function AllTotal(){
        $SQL = $this->db->query("SELECT COUNT(*) AS 'Totalhdv' From hdv");
        return $SQL->fetch_object();
    }


}