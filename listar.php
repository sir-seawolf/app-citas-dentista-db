<?php
include 'conexion-db.php';
// haremos la consulta
$sql="SELECT * FROM citas";

$result = $conn -> query($sql);

if($result->num_rows >0) {
 
    while($row = $result->fetch_assoc()){
        $id = $row['id'];
        echo "<tr>";
        echo "<td>".  $row['id']."</td>";
        echo "<td>".  $row['paciente']."</td>";
        echo "<td>".  $row['telefono']."</td>";
        echo "<td>".  $row['email']."</td>";
        echo "<td>".  $row['fecha_cita']."</td>";
        echo "<td>".  $row['observaciones']."</td>";
        echo "<td> <a href='editar.php?id=$id'><i class='bi bi-pencil-square'></i><a></td>";
        echo "<td> <a href='eliminar.php?id=$id'><i class='bi bi-trash'></i><a></td>";
        echo "</tr>";
     }
    

}else{
    echo 'No tenemos registros para su consulta';
}

// cerraremos la conexión
$conn->close();