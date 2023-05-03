<?php

$conexion=mysqli_connect("localhost","root", "", "hospital");

if(isset($_POST['registrar'])){
    $codigo2=$_POST['idvacuna'];
    $nombre2=$_POST['nombre'];
    $pais2=$_POST['pais'];

$consulta= "insert into vacunas values($codigo2,'$nombre2','$pais2')";

$resultado= mysqli_query($conexion,$consulta);

if($resultado)
{

    echo "<script> alert('La Vacuna $nombre2 Se Agrego Correctamente'); location.href='index.php'; </script>";

}
else
{

    echo "Error al ingresar los datos";
}
mysqli_close($conexion);
}
?>

