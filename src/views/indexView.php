<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="libs/bootstrap-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mycss.css">
</head>

<body>
  <header class="container-fluid backg1">
    HEADER MENU
  </header></br>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <form action="<?php echo "index.php?controller=paciente&action=create"; ?>" method="post">
          <h2>Añadir Paciente</h2>
          <hr />
          <div class="form-group">
            <label for="txtDocumento">Documento: </label>
            <input type="text" class="form-control" id="txtDocumento" name="txtDocumento" placeholder="">
          </div>
          <div class="form-group">
            <label for="txtNombre">Nombre: </label>
            <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="">
          </div>
          <div class="form-group">
            <label for="txtFechaNacimiento">Fecha Nacimiento: </label>
            <input type="date" class="form-control" id="txtFechaNacimiento" name="txtFechaNacimiento" placeholder="">
          </div>
          <div class="form-group">
            <label for="txtDireccion">Dirección: </label>
            <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" placeholder="">
          </div>
          <div class="form-group">
            <label for="txtTelefono">Telefono: </label>
            <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="">
          </div>
          <div class="form-group">
            <label for="txtGenero">Genero: </label>
            <select class="form-control" id="txtGenero" name="txtGenero">
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
            </select>
          </div>
          <div class="form-group">
            <label for="txtEstado">Estado: </label>
            <select class="form-control" id="txtEstado" name="txtEstado">
              <option value="activo">Activo</option>
              <option value="inactivo">Inactivo</option>
              <option value="multado">Con multa</option>
            </select>
          </div>
          <div class="form-group">
            <label for="txtEps">EPS: </label>
            <input type="text" class="form-control" id="txtEps" name="txtEps" placeholder="">
          </div>
          <div class="form-group">
            <label for="txtEmail">Email: </label>
            <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="">
          </div>
          <div class="form-group">
            <label for="txtPassword">Contraseña: </label>
            <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="">
          </div>
          <button type="submit" class="btn btn-success">Guardar</button>
        </form>
      </div>
      <div class="col-lg-8">
        <div>
          <h2>Pacientes</h2>
          <hr />
        </div>
        <div class="row">
          <div class="col-lg-2 ">Documento</div>
          <div class="col-lg-3 ">Nombre</div>
          <div class="col-lg-3 ">Telefono</div>
          <div class="col-lg-2 ">Eps</div>
          <div class="col-lg-2 ">Opciones</div>
        </div>
        <?php
        if (isset($allPacientes)) {
          foreach ($allPacientes as $row) { //recorremos el array de objetos y obtenemo //el valor de las propiedades
        ?>
            <div class="row">
              <div class="col-lg-2"><?php echo $row->documento ?></div>
              <div class="col-lg-3"><?php echo $row->nombre; ?></div>
              <div class="col-lg-3"><?php echo $row->telefono; ?></div>
              <div class="col-lg-2"><?php echo $row->eps; ?></div>
              <div class="col-lg-2">
                <div class="right col-1">
                  <a href="<?php echo
                            "index.php?controller=Paciente&action=borrar&id=" . $row->documento; ?>" class="btn btn-danger">Borrar</a>
                </div>
              </div>
            </div><br>
        <?php
          }
        }
        ?>
      </div>
    </div> <!-- row -->
    <br><br>
  </div>
  <footer class="container-fluid backg1">
    Senamás - Ejemplo PHP con POO/MVC/PDO - <?php echo date("Y"); ?>
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="libs/bootstrap-dist/js/bootstrap.min.js"></script>
</body>

</html>