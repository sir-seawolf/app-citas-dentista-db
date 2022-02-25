<?php 
//cogemos la variable GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
include 'conexion-db.php';

$sql=" SELECT * FROM citas WHERE id = $id;";

$resultado = $conn -> query($sql);

while($fila = $resultado -> fetch_assoc()){
    $filas[]=$fila;
}

$id = $filas[0]['id']; 
$paciente = $filas[0]['paciente']; 
$email = $filas[0]['email']; 
$telefono = $filas[0]['telefono']; 
$observaciones = $filas[0]['observaciones']; 
$fecha = substr($filas[0]['fecha_cita'],0,10); 
$hora = substr($filas[0]['fecha_cita'],-8); 
 
?>
<?php  include 'partials/header.php';?>

<h2 class='display-5'>Edición de citas</h2> 
<nav><a class='btn btn-info'href="lista-citas.php"><em class="bi bi-arrow-return-right"></em> Ver lista</a></nav>
<form method='post' action='modificar.php'>
    <input type="hidden" name="id" value ="<?php echo $id ?>">
  <div class="row mb-3">
    <label for="nombre" class="col-sm-2 col-form-label">Paciente</label>
    <div class="col-sm-10">
      <input required name='nombre'type="text" class="form-control" id="nombre" value="<?php echo $paciente ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input  required name='email'type="email" class="form-control" id="email" value="<?php echo $email ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="teléfono" class="col-sm-2 col-form-label">Teléfono</label>
    <div class="col-sm-10">
      <input required name='telefono' type="tel" class="form-control" id="telefono" value="<?php echo $telefono ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="fecha-cita" class="col-sm-2 col-form-label">Fecha </label>
    <div class="col-sm-4">
      <input required name='fecha'type="date" class="form-control" id="fecha-cita" value="<?php echo $fecha ?>">
    </div>
    <label for="hora-cita" class="col-sm-2 col-form-label">Hora</label>
    <div class="col-sm-4">
      <input required name ='hora' type="time" class="form-control" id="hora-cita" value="<?php echo $hora ?>">
    </div>
  </div>
  
  <div class="form-floating">
  <textarea name='observaciones' class="form-control" placeholder="Pon aquí tus comentarios" id="observaciones" style="height: 100px"  > <?php echo $observaciones ?></textarea>
  <label for="observaciones">Observaciones</label>
</div>
  
<div class="d-grid  col-6 mx-auto mt-3">
  <button type='submit' class="btn btn-primary" type="button">Modificar cita</button>
 
</div>
  
</form>

<?php  include 'partials/footer.php';?>


