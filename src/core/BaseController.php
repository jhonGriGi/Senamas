<?php
class BaseController
{
  protected $layout;

  public function __construct()
  {
    // Se asigna a la variable un valor de plantilla por defecto
    $this->layout = "admin_layout.php";

    require_once 'Connection.php';
    require_once 'BaseModel.php';

    //Incluir todos los modelos
    foreach (glob("models/*.php") as $file) {
      require_once $file;
    }
    // require_once 'models/Paciente.class.php';
  }

  // Crear los Métodos que sean comunes para todos los controladores
}
