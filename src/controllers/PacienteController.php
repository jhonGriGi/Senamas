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

    // archivo vista que debe incluirse en el layout
    $current_view = "paciente/pacienteView.php";
    // se incluye el layout actual
    require_once 'views/layouts/' . $this->layout;
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

      $paciente->delete("documento", $documento);
    }
    header("Location: index.php?controller=Paciente&action=index");
  }

  public function seleccionar()
  {
    $documento = isset($_GET['documento']) ? $_GET['documento'] : "";

    if ($documento) {
      $paciente = new Paciente($documento);

      $resultado = $paciente->getOne("documento", $documento);

      $current_view = "paciente/editarPacienteView.php";
      require_once 'views/layouts/' . $this->layout;
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

      $array_paciente = array(
        "nombre" => $nombre,
        "direccion" => $direccion,
        "telefono" => $telefono,
        "fecha_nacimiento" => $fecha_nac,
        "estado" => $estado,
        "genero" => $genero,
        "eps" => $eps,
        "email" => $email,
      );
      $paciente_obj->update($array_paciente, "documento", $documento);
    }
    header("Location: index.php?controller=Paciente&action=index");
  }

  public function mostrar()
  {
    if (isset($_GET['documento'])) {
      $documento = $_GET['documento'];
      $paciente_obj = new Paciente($documento);
      $datos = $paciente_obj->getOne("documento", $documento);
      $current_view = "paciente/listarPacienteView.php";
      require_once 'views/layouts/' . $this->layout;
    }
  }
}
