<?php  include 'partials/header.php';?>
<h2 class='display-4'><h2 class='display-4'>Ingreso de citas</h2> 
<nav><a class='btn btn-info'href="lista-citas.php"><em class="bi bi-arrow-return-right"></em> Ver lista</a></nav>
<form method='post' action='controller-form.php'>
  <div class="row mb-3">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input required name='nombre'type="text" class="form-control" id="nombre">
    </div>
  </div>
  <div class="row mb-3">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input  required name='email'type="email" class="form-control" id="email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="teléfono" class="col-sm-2 col-form-label">Teléfono</label>
    <div class="col-sm-10">
      <input required name='telefono' type="tel" class="form-control" id="telefono">
    </div>
  </div>
  <div class="row mb-3">
    <label for="fecha-cita" class="col-sm-2 col-form-label">Fecha </label>
    <div class="col-sm-4">
      <input required name='fecha'type="date" class="form-control" id="fecha-cita">
    </div>
    <label for="hora-cita" class="col-sm-2 col-form-label">Hora</label>
    <div class="col-sm-4">
      <input required name ='hora' type="time" class="form-control" id="hora-cita">
    </div>
  </div>
  
  <div class="form-floating">
  <textarea name='observaciones' class="form-control" placeholder="Pon aquí tus comentarios" id="observaciones" style="height: 100px"></textarea>
  <label for="observaciones">Observaciones</label>
</div>
  
<div class="d-grid  col-6 mx-auto mt-3">
  <button type='submit' class="btn btn-primary" type="button">Solicitar cita</button>
 
</div>
  
</form>







<?php  include 'partials/footer.php';?>


