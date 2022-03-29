<?php

class PacienteController extends BaseController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    //Creamos el objeto usuario
    $paciente_obj = new Paciente();
    //Conseguimos todos los usuarios
    $allPacientes = $paciente_obj->getAll();
    // $especialidad = new Especialidad();
    // $lista_especialidades = $especialidad->getAll();
    require_once 'views/indexView.php';
  }

  public function create()
  {
    if (isset($_POST["txtNombre"])) {
      $nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";
      $documento = isset($_POST['txtDocumento']) ? $_POST['txtDocumento'] : "";
      $fecha_nac = isset($_POST['txtFechaNacimiento']) ? $_POST['txtFechaNacimiento'] : "";
      $direccion = isset($_POST['txtDireccion']) ? $_POST['txtDireccion'] : "";
      $telefono = isset($_POST['txtTelefono']) ? $_POST['txtTelefono'] : "";
      $estado = isset($_POST['txtEstado']) ? $_POST['txtEstado'] : "";
      $genero = isset($_POST['txtGenero']) ? $_POST['txtGenero'] : "";
      $eps = isset($_POST['txtEps']) ? $_POST['txtEps'] : "";
      $email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : "";
      $password = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : "";
      // Crear Objeto Paciente con los datos del formulario
      $paciente_obj = new Paciente(
        $documento,
        $nombre,
        $direccion,
        $telefono,
        $fecha_nac,
        $estado,
        $genero,
        $eps,
        $email,
        $password
      );
      // Se llama al metodo que inserta en la base de datos.
      $paciente_obj->save();
    }
    header("Location:index.php?controller=Paciente&action=index");
  }
  public function hola()
  {
    echo "Hola ADSI día";
  }

  public function twoSum()
  {
    $num1 = isset($_GET['num1']) ? $_GET['num1'] : "";
    $num2 = isset($_GET['num2']) ? $_GET['num2'] : "";

    echo $num1 + $num2;
  }

  public function borrar()
  {
    $documento = isset($_GET['documento']) ? $_GET['documento'] : "";

    if ($documento) {
      $paciente = new Paciente($documento);

      $paciente->borrar($documento);
    }
    header("Location: index.php?controller=Paciente&action=index");
  }

  public function seleccionar()
  {
    $documento = isset($_GET['documento']) ? $_GET['documento'] : "";

    if ($documento) {
      $paciente = new Paciente($documento);

      $resultado = $paciente->seleccionar($documento);

      require_once 'views/editarView.php';
    }
  }

  public function actualizar()
  {
    if (isset($_POST["txtNombre"])) {
      $nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";
      $documento = isset($_POST['txtDocumento']) ? $_POST['txtDocumento'] : "";
      $fecha_nac = isset($_POST['txtFechaNacimiento']) ? $_POST['txtFechaNacimiento'] : "";
      $direccion = isset($_POST['txtDireccion']) ? $_POST['txtDireccion'] : "";
      $telefono = isset($_POST['txtTelefono']) ? $_POST['txtTelefono'] : "";
      $estado = isset($_POST['txtEstado']) ? $_POST['txtEstado'] : "";
      $genero = isset($_POST['txtGenero']) ? $_POST['txtGenero'] : "";
      $eps = isset($_POST['txtEps']) ? $_POST['txtEps'] : "";
      $email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : "";
      $password = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : "";
      // Crear Objeto Paciente con los datos del formulario
      $paciente_obj = new Paciente(
        $documento,
        $nombre,
        $direccion,
        $telefono,
        $fecha_nac,
        $estado,
        $genero,
        $eps,
        $email,
        $password
      );
    }

    $paciente_obj->actualizar();

    header("Location: index.php?controller=Paciente&action=index");
  }
}
