<div class="container">
  <div class="row">
    <div class="col-lg-4 mx-auto">
      <form action="<?php echo "index.php?controller=Especialidad&action=actualizar"; ?>" method="POST">
        <h2>Edit de <?php echo $resultado->nombre; ?></h2>
        <hr />
        <div class="form-group">
          <label for="codigo">Codigo: </label>
          <input type="text" disabled class="form-control" id="codigo" placeholder="" value="<?php echo $resultado->codigo ?>">
          <input type="text" hidden value="<?php echo $resultado->codigo ?>" name="codigo">
        </div>
        <div class="form-group">
          <label for="nombre">Nombre: </label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="<?php echo $resultado->nombre ?>">
        </div>
        <div class="form-group">
          <label for="descripcion">Descripcion: </label>
          <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="" value="<?php echo $resultado->descripcion ?>">
        </div>
        <button type="submit" class="btn btn-success mt-4">Guardar</button>
      </form>
    </div>
  </div>
</div>