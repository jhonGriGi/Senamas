<?php

class EspecialidadController extends BaseController
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    //Creamos el objeto usuario
    $especialidad_obj = new Especialidad();
    //Conseguimos todos los usuarios
    $allEspecialidades = $especialidad_obj->getAll();
    // $especialidad = new Especialidad();
    // $lista_especialidades = $especialidad->getAll();
    require_once 'views/especialidadView.php';
  }

  public function create()
  {
    if (isset($_POST['codigo'])) {
      $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";
      $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
      $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : "";

      $especialidad_obj = new Especialidad($codigo, $nombre, $descripcion);
      $especialidad_obj->save();
    }
    header("Location:index.php?controller=Especialidad&action=index");
  }

  public function borrar()
  {
    $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";

    if ($codigo) {
      $especialidad = new Especialidad($codigo);

      $especialidad->borrar($codigo);
    }
    header("Location: index.php?controller=Especialidad&action=index");
  }

  public function seleccionar()
  {
    $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";

    if ($codigo) {
      $especialidad = new Especialidad($codigo);

      $resultado = $especialidad->seleccionar($codigo);

      require_once 'views/editarEspecialidadView.php';
    }
  }

  public function actualizar()
  {
    if (isset($_POST['codigo'])) {
      $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";
      $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
      $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : "";

      $especialidad = new Especialidad($codigo, $nombre, $descripcion);

      $especialidad->actualizar();
    }
    header("Location: index.php?controller=Especialidad&action=index");
  }
}
