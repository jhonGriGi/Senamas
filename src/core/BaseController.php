<?php
class BaseController
{
  public function __construct()
  {
    require_once __DIR__ . '/Connection.php';
    require_once __DIR__ . '/BaseModel.php';

    //Incluir todos los modelos
    /*
    foreach (glob("models/*.php") as $file) {
      require_once $file;
    }
    */
    require_once 'models/Paciente.class.php';
  }

  // Crear los Métodos que sean comunes para todos los controladores
}