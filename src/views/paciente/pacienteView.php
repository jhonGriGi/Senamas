<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <form action="<?php echo "index.php?controller=paciente&action=create"; ?>" method="POST">
        <h2>Añadir Paciente</h2>
        <hr />
        <div class="form-group">
          <label for="txtDocumento">Documento: </label>
          <input type="text" required class="form-control" id="txtDocumento" name="txtDocumento" placeholder="">
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
        <button type="submit" class="btn btn-success mt-4">Guardar</button>
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
            <div class="col-lg-2 d-flex justify-between">
              <div class="col-3 mx-3">
                <a href="<?php echo
                          "index.php?controller=Paciente&action=borrar&documento=" . $row->documento; ?>" class="btn btn-danger">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                  </svg>
                </a>
              </div>
              <div class=" col-3 mx-3">
                <a href="<?php echo
                          "index.php?controller=Paciente&action=seleccionar&documento=" . $row->documento; ?>" class="btn btn-warning">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                  </svg>
                </a>
              </div>
              <div class=" col-3 mx-3">
                <a href="<?php echo
                          "index.php?controller=Paciente&action=mostrar&documento=" . $row->documento; ?>" class="btn btn-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                  </svg>
                </a>
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