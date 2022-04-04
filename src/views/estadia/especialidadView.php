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