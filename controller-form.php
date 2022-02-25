<?php
// declaramos las varibles y las inicializamos con cadena vacía.
$nombre=$email=$telefono=$fecha=$hora=$observaciones='';
$fechasolicitud = date("d-m-Y H:i:s");

// recojemos las variables que nos llegan por el formulario
if($_SERVER['REQUEST_METHOD']=='POST'){
    // las asignamos a las variables filtradas
   
    $nombre =htmlspecialchars($_POST['nombre']);
    $email =htmlspecialchars($_POST['email']);
    $telefono =htmlspecialchars($_POST['telefono']);
    $fecha =htmlspecialchars($_POST['fecha']);
    $hora =htmlspecialchars($_POST['hora']);
    $observaciones =htmlspecialchars($_POST['observaciones']);

}
/* //enviar por email
$asunto ="cita médico para $nombre";
$msg="
Datos de la cita:
realizada con Fecha: $fechasolicitud
nombre: $nombre
email: $email
telefono: $telefono
fecha:$fecha
hora:$hora
Observaciones: $observaciones
";
$headers= "CC: $email";
mail("canodelacuadra@gmail.com",$asunto,$msg, $headers);
 */
//registrarlo en la base de datos
$fechahora="$fecha $hora";
include 'conexion-db.php';
$sql= "INSERT INTO citas(paciente,telefono,email,fecha_cita,observaciones)
VALUES('$nombre','$telefono','$email','$fechahora','$observaciones')";
$result = $conn -> query($sql);

$conn->close();
 // le mandamos a lista-citas.php
 header('location:lista-citas.php');




