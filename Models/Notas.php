<?php
class Notas
{
    private $idNotas;
    private $Nota;
    private $Caduca;
    private $Estado;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * @return mixed
     */
    public function getIdNotas()
    {
        return $this->idNotas;
    }

    /**
     * @param mixed $idNotas
     */
    public function setIdNotas($idNotas)
    {
        $this->idNotas = $idNotas;
    }

    /**
     * @return mixed
     */
    public function getNota()
    {
        return $this->Nota;
    }

    /**
     * @param mixed $Nota
     */
    public function setNota($Nota)
    {
        $this->Nota = $Nota;
    }

    /**
     * @return mixed
     */
    public function getCaduca()
    {
        return $this->Caduca;
    }

    /**
     * @param mixed $Caduca
     */
    public function setCaduca($Caduca)
    {
        $this->Caduca = $Caduca;
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

    public function Save()
    {
        $Sql = "INSERT INTO notas VALUES (NULL, '{$this->getNota()}', '{$this->getCaduca()}', 'Activo');";
        $save = $this->db->query($Sql);

        $Guardado = false;
        if ($save) {
            $Guardado = true;
        }
        return $Guardado;
    }
    public function Edit()
    {
        $Sql = "UPDATE notas SET Nota='{$this->getNota()}', Caduca='{$this->getCaduca()}' WHERE idNotas = {$this->getIdNotas()};";
        $save = $this->db->query($Sql);

        $Guardado = false;
        if ($save) {
            $Guardado = true;
        }
        return $Guardado;
    }

    public function AllN()
    {
        $notas = $this->db->query("SELECT * FROM notas ORDER BY idNotas DESC LIMIT 10;");
        return $notas;
    }



    public function Allone()
    {
        $notas = $this->db->query("SELECT * FROM notas WHERE idNotas = {$this->getIdNotas()}");
        return $notas->fetch_object();
    }

    public function delete()
    {
        $Sql = "DELETE FROM notas WHERE idNotas={$this->idNotas}";
        $delete = $this->db->query($Sql);

        $Eliminado = false;
        if ($delete) {
            $Eliminado = true;
        }
        return $Eliminado;
    }
}
