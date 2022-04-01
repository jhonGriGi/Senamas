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
  </br>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <form action="<?php echo "index.php?controller=Especialidad&action=create"; ?>" method="POST">
          <h2>Añadir Especialidad</h2>
          <hr />
          <div class="form-group">
            <label for="codigo">Codigo: </label>
            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="">
          </div>
          <div class="form-group">
            <label for="nombre">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="">
          </div>
          <div class="form-group">
            <label for="descripcion">Descripcion: </label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="">
          </div>
          <button type="submit" class="btn btn-success mt-4">Guardar</button>
        </form>
      </div>
      <div class="col-lg-8">
        <div>
          <h2>Pacientes</h2>
          <hr />
        </div>
        <div class="row">
          <div class="col-lg-2 ">Codigo</div>
          <div class="col-lg-3 ">Nombre</div>
          <div class="col-lg-3 ">Descripcion</div>
          <div class="col-lg-3 ">Opciones</div>
        </div>
        <?php
        if (isset($allEspecialidades)) {
          foreach ($allEspecialidades as $row) { //recorremos el array de objetos y obtenemo //el valor de las propiedades
        ?>
            <div class="row">
              <div class="col-lg-3"><?php echo $row->codigo; ?></div>
              <div class="col-lg-3"><?php echo $row->nombre; ?></div>
              <div class="col-lg-3"><?php echo $row->descripcion; ?></div>
              <div class="col-lg-3 d-flex justify-between">
                <div class=" col-1 me-4">
                  <a href="<?php echo
                            "index.php?controller=Especialidad&action=borrar&codigo=" . $row->codigo; ?>" class="btn btn-danger">B<i class="fa-thin fa-trash-can"></i></a>
                </div>
                <div class=" col-1 mx-2">
                  <a href="<?php echo
                            "index.php?controller=Especialidad&action=seleccionar&codigo=" . $row->codigo; ?>" class="btn btn-warning">E</a>
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
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="libs/bootstrap-dist/js/bootstrap.min.js"></script>
</body>

</html>