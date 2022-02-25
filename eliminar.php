<?php
// comprovando que recoje el numero del id
//echo $_GET['id'];
//comprobamos si existe
if (isset($_GET['id'])) {
    $id =$_GET['id'];

    include 'conexion-db.php';

    $sql = " DELETE FROM citas
    WHERE id = $id;    
    ";
    $resultado = $conn -> query($sql);

    if ($resultado) {
        header('location: lista-citas.php?eliminar=ok');
    }else{
        header('location: lista-citas.php?eliminar=ko');

    }
}



?>