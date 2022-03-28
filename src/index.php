<?php
// Configuracion global
require_once __DIR__ . '/config/Global.php';

// Base para los controladores
require_once __DIR__ . '/core/BaseController.php';

// Se capturan el controlador y la accion que vienen por metodo GET
$controller = isset($_GET['controller']) ? $_GET['controller'] : "";
$accion = isset($_GET['accion']) ? $_GET['accion'] : "";

# Se evalua el controlador que llega por URL, en caso que no llegue nada, se toma el Controlador por defecto
switch (ucwords($controller)) {
    # EN la medidad que se incluyan más controladores, se deben referenciar en un case
  case 'Paciente':
    $controlador = 'PacienteController';
    break;
  default:
    $controlador = CONTROLADOR_DEFECTO;
    break;
}
$strFileController = 'controllers/' . $controlador . '.php';
# Si el archivo existe se procede a crear un objeto de dicha clase controlador
if (is_file($strFileController)) {
  # Se incluye el archivo del controlador para poder ser instanciado
  require_once $strFileController;
  # Se crea un objeto de la clase del controlador segun la peticion del usuario
  $controllerObj = new $controlador();
  # Si no llega ninguna accion por GET se toma la acción por defecto
  if ($action == "") {
    $action = ACCION_DEFECTO;
  }
  // Se comprueba que la acción o método que solicita el usuario existe en ese
  //controlador
  if (method_exists($controllerObj, $action)) {
    // Se carga la accion requerida, es decir, se llama al metodo del controlador
    $controllerObj->$action();
  } else {
    echo "No existe el método en el controlador";
  }
}