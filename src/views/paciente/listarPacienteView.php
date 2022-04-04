<div class="container">
  <div class="row">
    <div class="col-lg-4 mx-auto">
      <form action="<?php echo "index.php?controller=paciente&action=actualizar"; ?>" method="POST">
        <h2>Añadir Paciente</h2>
        <hr />
        <div class="form-group">
          <label for="txtDocumento">Documento: </label>
          <input type="text" disabled class="form-control" id="txtDocumento" placeholder="" value="<?php echo $datos->documento ?>">
        </div>
        <div class="form-group">
          <label for="txtNombre">Nombre: </label>
          <input type="text" disabled class="form-control" id="txtNombre" name="txtNombre" placeholder="" value="<?php echo $datos->nombre ?>">
        </div>
        <div class="form-group">
          <label for="txtFechaNacimiento">Fecha Nacimiento: </label>
          <input type="date" disabled class="form-control" id="txtFechaNacimiento" name="txtFechaNacimiento" placeholder="" value="<?php echo $datos->fecha_nacimiento ?>">
        </div>
        <div class="form-group">
          <label for="txtDireccion">Dirección: </label>
          <input type="text" disabled class="form-control" id="txtDireccion" name="txtDireccion" placeholder="" value="<?php echo $datos->direccion ?>">
        </div>
        <div class="form-group">
          <label for="txtTelefono">Telefono: </label>
          <input type="text" disabled class="form-control" id="txtTelefono" name="txtTelefono" placeholder="" value="<?php echo $datos->telefono ?>">
        </div>
        <div class="form-group">
          <label for="txtGenero">Genero: </label>
          <select class="form-control" disabled id="txtGenero" name="txtGenero">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
          </select>
        </div>
        <div class="form-group">
          <label for="txtEstado">Estado: </label>
          <select class="form-control" disabled id="txtEstado" name="txtEstado">
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
            <option value="multado">Con multa</option>
          </select>
        </div>
        <div class="form-group">
          <label for="txtEps">EPS: </label>
          <input type="text" disabled class="form-control" id="txtEps" name="txtEps" placeholder="" value="<?php echo $datos->eps ?>">
        </div>
        <div class="form-group">
          <label for="txtEmail">Email: </label>
          <input type="text" disabled class="form-control" id="txtEmail" name="txtEmail" placeholder="" value="<?php echo $datos->email ?>">
        </div>
        <div class="form-group">
          <label for="txtPassword">Contraseña: </label>
          <input type="password" disabled class="form-control" id="txtPassword" name="txtPassword" placeholder="">
        </div>
        <a href="<?php echo "index.php?controller=Paciente&action=index" ?>" class="btn btn-primary mt-4"> Home
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
          </svg>
        </a>
      </form>
    </div>
  </div>
</div>