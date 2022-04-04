<div class="container">
  <div class="row">
    <div class="col-lg-4 mx-auto">
      <form action="<?php echo "index.php?controller=Especialidad&action=actualizar"; ?>" method="POST">
        <h2>Actualizar Especialidad</h2>
        <hr />
        <div class="form-group">
          <label for="codigo">Codigo: </label>
          <input type="text" disabled class="form-control" id="codigo" placeholder="" value="<?php echo $datos->codigo ?>">
        </div>
        <div class="form-group">
          <label for="nombre">Nombre: </label>
          <input type="text" disabled class="form-control" id="nombre" name="nombre" placeholder="" value="<?php echo $datos->nombre ?>">
        </div>
        <div class="form-group">
          <label for="descripcion">Descripcion: </label>
          <input type="text" disabled class="form-control" id="descripcion" name="descripcion" placeholder="" value="<?php echo $datos->descripcion ?>">
        </div>
        <a href="<?php echo "index.php?controller=Especialidad&action=index" ?>" class="btn btn-primary mt-4"> Home
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
          </svg>
        </a>
      </form>
    </div>
  </div>
</div>