<div class="container">
  <div class="col-8 mx-auto">
    <h2>Info de <?php echo $datos->nombre; ?></h2>
    <hr />
  </div>
  <div class="row">
    <div class="col-6 text-center">
      <output>Documento:</output>
    </div>
    <div class="col-6">
      <output><?php echo $datos->documento; ?></output>
    </div>
    <div class="col-6 text-center">
      <output>Nombre:</output>
    </div>
    <div class="col-6">
      <output><?php echo $datos->nombre ?></output>
    </div>
    <div class="col-6 text-center">
      <output>Fecha de nacimiento:</output>
    </div>
    <div class="col-6">
      <output><?php echo $datos->fecha_nacimiento ?></output>
    </div>
    <div class="col-6 text-center">
      <output>Direccion:</output>
    </div>
    <div class="col-6">
      <output><?php echo $datos->direccion ?></output>
    </div>
    <div class="col-6 text-center">
      <output>Direccion:</output>
    </div>
    <div class="col-6">
      <output><?php echo $datos->telefono ?></output>
    </div>
    <div class="col-6 text-center">
      <output>Genero:</output>
    </div>
    <div class="col-6">
      <output><?php echo $datos->genero == "M" ? "Masculino" : "Femenino" ?></output>
    </div>
    <div class="col-6 text-center">
      <output>Estado:</output>
    </div>
    <div class="col-6">
      <output><?php echo $datos->estado ?></output>
    </div>
    <div class="col-6 text-center">
      <output>Eps:</output>
    </div>
    <div class="col-6">
      <output><?php echo $datos->eps ?></output>
    </div>
    <div class="col-6 text-center">
      <output>Email:</output>
    </div>
    <div class="col-6">
      <output><?php echo $datos->email == "" ? "No tiene email" : $datos->email ?></output>
    </div>
  </div>
  <div class="col-8 text-center">
    <a href="<?php echo "index.php?controller=Paciente&action=index" ?>" class="btn btn-primary mt-4"> Home
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
      </svg>
    </a>
  </div>
</div>
</div>