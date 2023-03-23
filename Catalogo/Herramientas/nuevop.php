<?php 
require_once("./conexion.php");

if(isset($_REQUEST['btn']))
{
    $nombre = $_REQUEST['Nombre'];
    $precio = $_REQUEST['Precio'];
    $nombreimg = $_FILES['foto']['name'];
    $temporal = $_FILES['foto']['tmp_name'];
    $carpeta = './img';
    $ruta = $carpeta.'/'.$nombreimg;
    move_uploaded_file($temporal, $ruta);
    $query = "insert into articulos(nombre,precio,img) values('$nombre',$precio,'$nombreimg')";
    $execute = mysqli_query($conexion, $query);
    
    if($execute){ header("Location: ../index.php");}
}
?>