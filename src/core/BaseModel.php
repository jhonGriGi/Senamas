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

  public function update($array, $column_db, $primary_key)
  {
    try {
      foreach ($array as $key => $value) {
        $sql = $this->dbConnection->prepare("UPDATE $this->table SET $key = ? WHERE $column_db = ?");
        $sql->bindParam(1, $value);
        $sql->bindParam(2, $primary_key);
        $sql->execute();
      }
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
