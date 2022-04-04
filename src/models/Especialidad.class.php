<?php
require_once 'core/BaseModel.php';

class Especialidad extends BaseModel
{
  private $codigo;
  private $nombre;
  private $descripcion;

  public function __construct($codigo = null, $nombre = null, $descripcion = null)
  {
    $this->table = 'especialidad';
    $this->codigo = $codigo;
    $this->nombre = $nombre;
    $this->descripcion = $descripcion;

    parent::__construct();
  }

  public function getCodigo()
  {
    return $this->codigo;
  }

  public function setCodigo($codigo)
  {
    $this->codigo = $codigo;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  public function getDescripcion()
  {
    return $this->descripcion;
  }

  public function setDescripcion($descripcion)
  {
    $this->descripcion = $descripcion;
  }

  public function save()
  {
    $sql = $this->dbConnection->prepare("INSERT INTO especialidad VALUES (?,?,?)");

    $codigo = $this->getCodigo();
    $nombre = $this->getNombre();
    $descripcion = $this->getDescripcion();

    $sql->bindParam(1, $codigo);
    $sql->bindParam(2, $nombre);
    $sql->bindParam(3, $descripcion);

    $sql->execute();
  }
}
