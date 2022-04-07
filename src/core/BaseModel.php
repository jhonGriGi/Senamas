<?php

class BaseModel extends Connection
{
  protected $table;

  public function __construct()
  {
    // Se llama al constructor de la clase padre
    parent::__construct();
  }

  public function getAll()
  {
    try {
      // FETCH_OBJ
      $sql = $this->dbConnection->prepare("SELECT * FROM " . $this->table);

      // Ejecutamos
      $sql->execute();
      $resultSet = null;
      // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
      while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
        $resultSet[] = $row;
      }
      return $resultSet;
    } catch (PDOException $ex) {
      echo $ex->getMessage();
      die();
    }
  }

  public function getOne($column_db, $primary_key)
  {
    try {
      $sql = $this->dbConnection->prepare("SELECT * FROM $this->table WHERE $column_db = ?");

      $sql->bindParam(1, $primary_key);
      $sql->execute();

      $resultSet = null;
      // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
      if ($row = $sql->fetch(PDO::FETCH_OBJ)) {
        $resultSet = $row;
      }
      return $resultSet;
    } catch (PDOException $ex) {
      echo $ex->getMessage();
      die();
    }
  }

  public function delete($column_db, $primary_key)
  {
    try {
      $sql = $this->dbConnection->prepare("DELETE from $this->table where $column_db = ?");
      $sql->bindParam(1, $primary_key);
      $sql->execute();
    } catch (PDOException $ex) {
      $ex->getMessage();
      die();
    }
  }

  public function update($array, $primary_columns, $primary_key)
  {
    try {
      $array_values = [];
      $initial_consult = "UPDATE " . $this->table . " SET ";
      foreach ($array as $key => $value) {
        if (!empty($value)) {
          $initial_consult .= $key . " = ?, ";
          $array_values[] = $value;
        }
      }
      $final_consult = "";
      $final_consult .= rtrim($initial_consult, ", ");
      $final_consult .= " WHERE " . $primary_columns . " = ? ";
      $array_values[] = $primary_key;
      $sql = $this->dbConnection->prepare($final_consult);
      $sql->execute($array_values);

      // UPDATE  especialidad SET nombre = ?, descripcion = ? WHERE codigo = ?
      // $array_values = ["Darwin", "ninja", 102]
    } catch (PDOException $ex) {
      $ex->getMessage();
      die();
    }
  }

  public function save($array)
  {
    try {
      $initial_consult = "INSERT INTO $this->table (";
      $array_values = [];
      foreach ($array as $key => $value) {
        $initial_consult .= $key . ", ";
      }
      $medium_consult = "";
      $medium_consult .= rtrim($initial_consult, ", ");
      $medium_consult .= ") VALUES (";
      foreach ($array as $key => $value) {
        $medium_consult .= "?,";
        $array_values[] = $value;
      }
      $final_consult = "";
      $final_consult .= rtrim($medium_consult, ", ");
      $final_consult .= ")";
      $sql = $this->dbConnection->prepare($final_consult);
      $sql->execute($array_values);
      // INSERT INTO especialidad (documento, nombre, descripcion) VALUES (?, ?, ?)
      // $array_values = [102, "cardiologia", "aaa"]
    } catch (PDOException $ex) {
      $ex->getMessage();
      die();
    }
  }
  /*
 * Aqui podemos incluir los demás métodos que nos ayuden
 * a hacer operaciones con la base de datos de forma común
 */
}
