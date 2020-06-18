<?php
class Mensaje
{
    private $idMensajes;
    private $nombre;
    private $Email;
    private $Tema;
    private $mensaje;
    private $fecha;
    private $Estado;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * @return mixed
     */
    public function getIdMensajes()
    {
        return $this->idMensajes;
    }

    /**
     * @param mixed $idMensajes
     */
    public function setIdMensajes($idMensajes)
    {
        $this->idMensajes = $idMensajes;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getTema()
    {
        return $this->Tema;
    }

    /**
     * @param mixed $Tema
     */
    public function setTema($Tema)
    {
        $this->Tema = $Tema;
    }

    /**
     * @return mixed
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * @param mixed $mensaje
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
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

    public function save()
    {
        $Sql = "INSERT INTO mensajes VALUES(NULL, '{$this->getNombre()}', '{$this->getEmail()}','{$this->getTema()}', '{$this->getMensaje()}', CURDATE(), '{$this->getEstado()}');";
        $Save = $this->db->query($Sql);

        $Guardado = false;
        if ($Save) {
            $Guardado = true;
        }
        return $Guardado;
    }

    public function AllM()
    {
        $Mensaje = $this->db->query("SELECT * FROM mensaje;");
        return $Mensaje;
    }

    public function AllOne()
    {
        $Mensaje = $this->db->query("SELECT * FROM mensaje WHERE idMensajes = {$this->getIdMensajes()}");
        return $Mensaje->fetch_object();
    }

    public function EditEstado()
    {
        $Sql = "UPDATE mensaje SET Estado='{$this->getEstado()}' WHERE idMensajes ={$this->getIdMensajes()}";
        $save = $this->db->query($Sql);

        $Guardado = false;
        if ($save) {
            $Guardado = true;
        }
        return $Guardado;
    }

    public function AllTotal(){
        $SQL = $this->db->query("SELECT COUNT(*) AS 'TotalMensajes' From mensaje");
        return $SQL->fetch_object();
    }


}
