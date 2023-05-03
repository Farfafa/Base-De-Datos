<?php

$conexion=mysqli_connect("localhost","root", "", "hospital");

if(isset($_POST['eliminar'])){
    $id = $_POST['IDPaciente'];
    $name = $_POST['Nombres'];

    $consulta= "DELETE FROM paciente WHERE IDPaciente ='$id'";

    $resultado= mysqli_query($conexion,$consulta);

    if($resultado) {
        echo "<script> alert('El Paciente $name Se Borro Correctamente'); location.href='buscar.php'; </script>";
    }
    else {
        echo "Error al eliminar el paciente";
    }
}

mysqli_close($conexion);
?>

<?php

$conexion=mysqli_connect("localhost","root", "", "hospital");

if(isset($_POST['eliminar2'])){
    $id = $_POST['IdVacunas'];
    $name = $_POST['Nombre'];

    $consulta= "DELETE FROM vacunas WHERE IdVacunas ='$id'";

    $resultado= mysqli_query($conexion,$consulta);

    if($resultado) {
        echo "<script> alert('La Vacuna $name Se Borro Correctamente'); location.href='buscar.php'; </script>";
    }
    else {
        echo "Error al eliminar el paciente";
    }
}

mysqli_close($conexion);
?>

<?php

$conexion=mysqli_connect("localhost","root", "", "hospital");

if(isset($_POST['eliminar3'])){
    $id = $_POST['ID'];
    $idp = $_POST['ID_Paciente'];
    $idv = $_POST['ID_Vacuna'];
    $consulta= "DELETE FROM  historial_vacunas WHERE ID ='$id'";

    $resultado= mysqli_query($conexion,$consulta);

    if($resultado) {
        echo "<script> alert('La ID $idp Se Borro Correctamente'); location.href='buscar.php'; </script>";
    }
    else {
        echo "Error al eliminar el paciente";
    }
}

mysqli_close($conexion);
?>