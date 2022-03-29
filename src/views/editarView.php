<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/mycss.css">
</head>

<body>
  <?php require_once 'views/templates/header.php'; ?>
  </br>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mx-auto">
        <form action="<?php echo "index.php?controller=paciente&action=actualizar"; ?>" method="POST">
          <h2>Añadir Paciente</h2>
          <hr />
          <div class="form-group">
            <label for="txtDocumento">Documento: </label>
            <input type="text" class="form-control" id="txtDocumento" name="txtDocumento" placeholder="" value="<?php echo $resultado->documento ?>">
          </div>
          <div class="form-group">
            <label for="txtNombre">Nombre: </label>
            <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="" value="<?php echo $resultado->nombre ?>">
          </div>
          <div class="form-group">
            <label for="txtFechaNacimiento">Fecha Nacimiento: </label>
            <input type="date" class="form-control" id="txtFechaNacimiento" name="txtFechaNacimiento" placeholder="" value="<?php echo $resultado->fecha_nacimiento ?>">
          </div>
          <div class="form-group">
            <label for="txtDireccion">Dirección: </label>
            <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" placeholder="" value="<?php echo $resultado->direccion ?>">
          </div>
          <div class="form-group">
            <label for="txtTelefono">Telefono: </label>
            <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="" value="<?php echo $resultado->telefono ?>">
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
            <input type="text" class="form-control" id="txtEps" name="txtEps" placeholder="" value="<?php echo $resultado->eps ?>">
          </div>
          <div class="form-group">
            <label for="txtEmail">Email: </label>
            <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="" value="<?php echo $resultado->email ?>">
          </div>
          <div class="form-group">
            <label for="txtPassword">Contraseña: </label>
            <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="">
          </div>
          <button type="submit" class="btn btn-success mt-4">Guardar</button>
        </form>
      </div>

      <?php require_once 'views/templates/footer.php'; ?>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="libs/bootstrap-dist/js/bootstrap.min.js"></script>
</body>

</html>