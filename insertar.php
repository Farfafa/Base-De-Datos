<?php

$conexion=mysqli_connect("localhost","root", "", "hospital");

if(isset($_POST['registrar'])){
    $codigo=$_POST['idpaciente'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $fecha=$_POST['fecha'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];

$consulta= "insert into paciente values($codigo,'$nombre','$apellido','$fecha','$direccion',$telefono,'$email')";

$resultado= mysqli_query($conexion,$consulta);

if($resultado)
{

    echo "<script> alert('El Paciente $nombre $apellido Se Agrego Correctamente'); location.href='index.php'; </script>";

}
else
{

    echo "Error al ingresar los datos";
}
mysqli_close($conexion);
}
?>