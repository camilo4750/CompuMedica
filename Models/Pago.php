<?php
class Pago
{
    private $idPagos;
    private $Persona_Id;
    private $FechaPag;
    private $Archivo;
    private $ValorT;
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
    public function getIdPagos()
    {
        return $this->idPagos;
    }

    /**
     * @param mixed $idPagos
     */
    public function setIdPagos($idPagos)
    {
        $this->idPagos = $idPagos;
    }

    /**
     * @return mixed
     */
    public function getPersonaId()
    {
        return $this->Persona_Id;
    }

    /**
     * @param mixed $Persona_Id
     */
    public function setPersonaId($Persona_Id)
    {
        $this->Persona_Id = $Persona_Id;
    }

    /**
     * @return mixed
     */
    public function getFechaPag()
    {
        return $this->FechaPag;
    }

    /**
     * @param mixed $FechaPag
     */
    public function setFechaPag($FechaPag)
    {
        $this->FechaPag = $this->db->real_escape_string($FechaPag);
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
        $this->Archivo = $Archivo;
    }

    /**
     * @return mixed
     */
    public function getValorT()
    {
        return $this->ValorT;
    }

    /**
     * @param mixed $ValorT
     */
    public function setValorT($ValorT)
    {
        $this->ValorT = $ValorT;
    }

    public function All()
    {
        $Pago = $this->db->query("SELECT g.*, p.Nombre_P AS 'persona' FROM pagos g INNER JOIN persona p ON g.Persona_Id = p.Id_Persona ORDER BY idPagos ASC ");
        return $Pago;
    }

    public function AllOne()
    {
        $Pago = $this->db->query("SELECT * FROM pagos WHERE idPagos = {$this->getIdPagos()}");
        return $Pago->fetch_object();
    }

    public function savePa()
    {
        $Sql = "INSERT INTO pagos VALUES(NULL, '{$this->getPersonaId()}', '{$this->getFechaPag()}', '{$this->getArchivo()}', {$this->getValorT()}, '{$this->getEstado()}');";
        $Save = $this->db->query($Sql);

        $Guardado = false;
        if ($Save) {
            $Guardado = true;
        }
        return $Guardado;
    }

    public function Edit()
    {
        $Sql = "UPDATE pagos SET Persona_Id = '{$this->getPersonaId()}', FechaPag = '{$this->getFechaPag()}', ValorT = {$this->getValorT()}, Estado = '{$this->getEstado()}'  ";

        if ($this->getArchivo() != null) {
            $Sql .= ", Archivo = '{$this->getArchivo()}'";
        }

        $Sql .= " WHERE idPagos ={$this->idPagos}";

        $Save = $this->db->query($Sql);

        $Guardado = false;
        if ($Save) {
            $Guardado = true;
        }
        return $Guardado;
    }

    public function EditEstado()
    {
        $Sql = "UPDATE pagos SET Estado='{$this->getEstado()}' WHERE idPagos={$this->getIdPagos()}";
        $save = $this->db->query($Sql);

        $Guardado = false;
        if ($save) {
            $Guardado = true;
        }
        return $Guardado;
    }

    public function total()
    {
        $Total = $this->db->query("SELECT SUM(ValorT) AS 'total', COUNT(*) AS 'personas' FROM pagos");
        return $Total->fetch_object();
    }

    public function AllTotal(){
        $SQL = $this->db->query("SELECT COUNT(*) AS 'TotalPagos' From pagos");
        return $SQL->fetch_object();
    }
}
