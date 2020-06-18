<?php
class Viaje
{
    private $idViajes;
    private $Persona_Id;
    private $Motivo;
    private $Inicio;
    private $Fin;
    private $Gastos;
    private $Apuntes;
    private $Estado;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * @return mixed
     */
    public function getIdViajes()
    {
        return $this->idViajes;
    }

    /**
     * @param mixed $idViajes
     */
    public function setIdViajes($idViajes)
    {
        $this->idViajes = $idViajes;
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
    public function getMotivo()
    {
        return $this->Motivo;
    }

    /**
     * @param mixed $Motivo
     */
    public function setMotivo($Motivo)
    {
        $this->Motivo = $this->db->real_escape_string($Motivo);
    }

    /**
     * @return mixed
     */
    public function getInicio()
    {
        return $this->Inicio;
    }

    /**
     * @param mixed $Inicio
     */
    public function setInicio($Inicio)
    {
        $this->Inicio = $Inicio;
    }

    /**
     * @return mixed
     */
    public function getFin()
    {
        return $this->Fin;
    }

    /**
     * @param mixed $Fin
     */
    public function setFin($Fin)
    {
        $this->Fin = $Fin;
    }

    /**
     * @return mixed
     */
    public function getGastos()
    {
        return $this->Gastos;
    }

    /**
     * @param mixed $Gastos
     */
    public function setGastos($Gastos)
    {
        $this->Gastos = $Gastos;
    }

    /**
     * @return mixed
     */
    public function getApuntes()
    {
        return $this->Apuntes;
    }

    /**
     * @param mixed $Apuntes
     */
    public function setApuntes($Apuntes)
    {
        $this->Apuntes = $this->db->real_escape_string($Apuntes);
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

    public function saveV()
    {
        $Sql = "INSERT INTO viajes VALUE (NULL, '{$this->getPersonaId()}', '{$this->getMotivo()}', '{$this->getInicio()}', '{$this->getFin()}', {$this->getGastos()}, '{$this->getApuntes()}', 'Activo');";
        $save = $this->db->query($Sql);

        $Guardado = false;
        if ($save) {
            $Guardado = true;
        }
        return $Guardado;
    }

    public function Edit()
    {
        $Sql = "UPDATE viajes SET Persona_Id='{$this->getPersonaId()}', Motivo='{$this->getMotivo()}', Inicio='{$this->getInicio()}', Fin='{$this->getFin()}', Gastos={$this->getGastos()}, Apuntes='{$this->getApuntes()}' WHERE idViajes={$this->getIdViajes()};";
        $save = $this->db->query($Sql);

        $Guardado = false;
        if ($save) {
            $Guardado = true;
        }
        return $Guardado;
    }

    public function AllV()
    {
        $Viaje = $this->db->query("SELECT v.*, p.Nombre_P AS 'persona' FROM viajes v INNER JOIN persona p ON v.Persona_Id = p.Id_Persona ORDER BY idViajes ASC;");
        return $Viaje;
    }

    public function AllOne()
    {
        $Viaje = $this->db->query("SELECT * FROM viajes WHERE idViajes = {$this->getIdViajes()}");
        return $Viaje->fetch_object();
    }

    public function EditEstado()
    {
        $Sql = "UPDATE viajes SET Estado='{$this->getEstado()}' WHERE idViajes={$this->getIdViajes()}";
        $save = $this->db->query($Sql);

        $Guardado = false;
        if ($save) {
            $Guardado = true;
        }
        return $Guardado;
    }

    public function total()
    {
        $Total = $this->db->query("SELECT SUM(Gastos) AS 'total', COUNT(*) AS 'personas' FROM viajes");
        return $Total->fetch_object();
    }

    public function AllTotal(){
        $SQL = $this->db->query("SELECT COUNT(*) AS 'TotalViajes' From viajes");
        return $SQL->fetch_object();
    }
}
