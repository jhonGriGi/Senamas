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
}
