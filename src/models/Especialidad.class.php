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

  public function borrar($codigo)
  {
    $sql = $this->dbConnection->prepare("DELETE from especialidad where codigo = ?");
    $sql->bindParam(1, $codigo);
    $sql->execute();
  }

  public function seleccionar($codigo)
  {
    $sql = $this->dbConnection->prepare("SELECT * FROM especialidad WHERE codigo = ?");

    $sql->bindParam(1, $codigo);
    $sql->execute();

    $resultSet = null;
    // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
    if ($row = $sql->fetch(PDO::FETCH_OBJ)) {
      $resultSet = $row;
    }
    return $resultSet;
  }

  public function actualizar()
  {
    $sql = $this->dbConnection->prepare("UPDATE especialidad SET nombre = ?, descripcion = ? WHERE codigo = ?");

    $codigo = $this->getCodigo();
    $nombre = $this->getNombre();
    $descripcion = $this->getDescripcion();

    $sql->bindParam(1, $nombre);
    $sql->bindParam(2, $descripcion);
    $sql->bindParam(3, $codigo);

    $sql->execute();
  }
}
