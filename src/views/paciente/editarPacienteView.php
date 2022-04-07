<div class="container">
  <div class="row">
    <div class="col-lg-4 mx-auto">
      <form action="<?php echo "index.php?controller=paciente&action=actualizar"; ?>" method="POST">
        <h2>Edit de <?php echo $resultado->nombre; ?></h2>
        <hr />
        <div class="form-group">
          <label for="txtDocumento">Documento: </label>
          <input type="text" disabled class="form-control" id="txtDocumento" placeholder="" value="<?php echo $resultado->documento ?>">
          <input type="text" hidden value="<?php echo $resultado->documento ?>" name="txtDocumento">
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
  </div>
</div>