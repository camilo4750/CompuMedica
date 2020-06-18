<?php
class Cliente
{
    private $idCliente;
    private $Entidad_C;
    private $Ciudad_C;
    private $Telefono_C;
    private $Direccion_C;
    private $Correo_C;
    private $Nit_C;
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
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * @param mixed $idCliente
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    /**
     * @return mixed
     */
    public function getEntidadC()
    {
        return $this->Entidad_C;
    }

    /**
     * @param mixed $Entidad_C
     */
    public function setEntidadC($Entidad_C)
    {
        $this->Entidad_C = $this->db->real_escape_string($Entidad_C);
    }

    /**
     * @return mixed
     */
    public function getCiudadC()
    {
        return $this->Ciudad_C;
    }

    /**
     * @param mixed $Ciudad_C
     */
    public function setCiudadC($Ciudad_C)
    {
        $this->Ciudad_C = $this->db->real_escape_string($Ciudad_C);
    }

    /**
     * @return mixed
     */
    public function getTelefonoC()
    {
        return $this->Telefono_C;
    }

    /**
     * @param mixed $Telefono_C
     */
    public function setTelefonoC($Telefono_C)
    {
        $this->Telefono_C = $Telefono_C;
    }

    /**
     * @return mixed
     */
    public function getDireccionC()
    {
        return $this->Direccion_C;
    }

    /**
     * @param mixed $Direccion_C
     */
    public function setDireccionC($Direccion_C)
    {
        $this->Direccion_C = $this->db->real_escape_string($Direccion_C);
    }

    /**
     * @return mixed
     */
    public function getCorreoC()
    {
        return $this->Correo_C;
    }

    /**
     * @param mixed $Correo_C
     */
    public function setCorreoC($Correo_C)
    {
        $this->Correo_C = $this->db->real_escape_string($Correo_C);
    }

    /**
     * @return mixed
     */
    public function getNitC()
    {
        return $this->Nit_C;
    }

    /**
     * @param mixed $Nit_C
     */
    public function setNitC($Nit_C)
    {
        $this->Nit_C = $Nit_C;
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

    public function saveC()
    {
        $Sql = "INSERT INTO cliente VALUES(NULL, '{$this->getEntidadC()}', '{$this->getCiudadC()}', {$this->getTelefonoC()}, '{$this->getDireccionC()}', '{$this->getCorreoC()}', {$this->getNitC()}, '{$this->getEstado()}', CURDATE());";
        $save = $this->db->query($Sql);


        $Guardado = false;
        if ($save) {
            $Guardado = true;
        }
        return $Guardado;
    }

    public function Edit()
    {
        $Sql = "UPDATE cliente SET Entidad_C='{$this->getEntidadC()}', Ciudad_C='{$this->getCiudadC()}', Telefono_C={$this->getTelefonoC()}, Direccion_C='{$this->getDireccionC()}', Correo_C='{$this->getCorreoC()}', Nit_C={$this->getNitC()}, Estado='{$this->getEstado()}' WHERE idCliente={$this->getIdCliente()};";
        $save = $this->db->query($Sql);

        $Guardado = false;
        if ($save) {
            $Guardado = true;
        }
        return $Guardado;
    }

    public function AllC()
    {
        $Cliente = $this->db->query("SELECT * FROM cliente;");
        return $Cliente;
    }

    public function AllOne()
    {
        $Cliente = $this->db->query("SELECT * FROM cliente WHERE idCliente = {$this->getIdCliente()}");
        return $Cliente->fetch_object();
    }

    public function EditEstado()
    {
        $Sql = "UPDATE cliente SET Estado='{$this->getEstado()}' WHERE idCliente={$this->getIdCliente()}";
        $save = $this->db->query($Sql);

        $Guardado = false;
        if ($save) {
            $Guardado = true;
        }
        return $Guardado;
    }

    public function AllTotal(){
        $SQL = $this->db->query("SELECT COUNT(*) AS 'TotalClientes' From cliente");
        return $SQL->fetch_object();
    }
}
