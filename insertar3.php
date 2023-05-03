<?php

$conexion=mysqli_connect("localhost","root", "", "hospital");

if(isset($_POST['registrar'])){
    $codigo3=$_POST['id'];
    $codigo=$_POST['idpaciente'];
    $codigo2=$_POST['idvacuna'];
    $fecha2=$_POST['primera'];
    $fecha3=$_POST['segunda'];
    $doctor=$_POST['doctor'];

$consulta= "insert into historial_vacunas values($codigo3,$codigo,$codigo2,'$fecha2','$fecha3','$doctor')";

$resultado= mysqli_query($conexion,$consulta);

if($resultado)
{

    echo "<script> alert('La id $codigo Se Agrego Correctamente'); location.href='index.php'; </script>";

}
else
{

    echo "Error al ingresar los datos";
}
mysqli_close($conexion);
}
?>

