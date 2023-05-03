<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buscador</title>
    <link rel="stylesheet" href="estilos2.css">
</head>
<body>
    <div class="head">
        <div>
            <a href="https://www.gov.co" target="_blank"><img src="IMG/govco-logo-1200x242-1-600x121.png" class="gov" height="28.22px" width="140px" alt=""></a>
        </div>
    </div>
    
    <div class="head2">
        <div>
            <a href="https://web.facebook.com/esecarmenemiliaospina"  target="_blank" title="Facebook"><img src="IMG/facebook.png" class="logo" height="32.22px" width="32.22px"></a>
            <a href="https://twitter.com/CarmenEmiliaESE" target="_blank" title="Twitter"><img src="IMG/gorjeo.png" class="logo" height="32.22px" width="32.22px"></a>
            <a href="https://www.instagram.com/esecarmenemiliaospina/" target="_blank" title="Instagram"><img src="IMG/instagram.png" class="logo" height="32.22px" width="32.22px"></a>
            <a href="https://www.youtube.com/channel/UCiBJ-_Re-yKriwrHogHzvlQ" target="_blank" title="Youtube"><img src="IMG/youtube.png" class="logo" height="32.22px" width="32.22px"></a>
        </div>
    </div>

    <div class="head3">
        <div>
            <a href="https://esecarmenemiliaospina.gov.co"><img src="IMG/logo-eseceo.jpg" class="logo2" height="190px" width="289px"></a>
        </div>
    </div>
    
    <center>
    <h1>Buscador De Datos</h1>
    <br>
    <form action="" method="POST">
        <input type="text" name="busqueda">
        <br>
        <br>
        <input type="submit" name="enviar" value="Buscar Paciente" class="button">
    </form>
    </center>
<br>
    <?php
    $conexion=mysqli_connect("localhost","root", "", "hospital");

    if(isset($_POST['enviar'])){
        $busqueda=$_POST['busqueda'];

        $consulta = "SELECT * FROM `hospital`.`paciente` WHERE (CONVERT(`IDPaciente` USING utf8) LIKE '%$busqueda%' OR CONVERT(`Nombres` USING utf8) LIKE '%$busqueda%' OR CONVERT(`Apellidos` USING utf8) LIKE '%$busqueda%' OR CONVERT(`Fecha_de_nacimiento` USING utf8) LIKE '%$busqueda%' OR CONVERT(`Dirección` USING utf8) LIKE '%$busqueda%' OR CONVERT(`Teléfono` USING utf8) LIKE '%$busqueda%' OR CONVERT(`Email` USING utf8) LIKE '%$busqueda%')";
        $resultado = mysqli_query($conexion, $consulta);

        while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            ?>
        <tr>
        <table>
        <tr>
        <th>ID</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Fecha De Nacimiento</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Email</th> 
        <th>Eliminar</th>
        </tr>
            <td><?php echo $fila['IDPaciente'];?></td>;
            <td><?php echo $fila['Nombres'];?></td>
            <td><?php echo $fila['Apellidos'];?></td>
            <td><?php echo $fila['Fecha_de_nacimiento'];?></td>
            <td><?php echo $fila['Dirección'];?></td>
            <td><?php echo $fila['Teléfono'];?></td>
            <td><?php echo $fila['Email'];?></td>
            <td><form action="eliminar.php" method="POST">
            <input type="hidden" name="IDPaciente" class="button3" value="<?php echo $fila['IDPaciente']; ?>">
            <input type="hidden" name="Nombres" class="button3" value="<?php echo $fila['Nombres']; ?>">
            <input type="submit" name="eliminar" value="Eliminar" class="button3">
            </form>
        </td>
        </tr>
        </table>
        <?php
        }
    }
    mysqli_close($conexion);
    ?>

    <br>
    <br>
    <center>
<form action="" method="POST">
        <input type="text" name="encontrar">
        <br>
        <br>
        <input type="submit" name="enviar2" value="Buscar Vacunas" class="button">
    </form>
    </center>
<br>
    <?php
    $conexion=mysqli_connect("localhost","root", "", "hospital");

    if(isset($_POST['enviar2'])){
        $busqueda2=$_POST['encontrar'];

        $consulta = "SELECT * FROM `hospital`.`vacunas` WHERE (CONVERT(`IdVacunas` USING utf8) LIKE '%$busqueda2%' OR CONVERT(`Nombre` USING utf8) LIKE '%$busqueda2%' OR CONVERT(`País_de_origen` USING utf8) LIKE '%$busqueda2%')";
        $resultado = mysqli_query($conexion, $consulta);

        while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            ?>
        <tr>
        <table>
        <tr>
        <th>ID</th>
        <th>Nombre Vacuna </th>
        <th>Pais De Origen</th>
        <th>Eliminar</th>
        </tr>
            <td><?php echo $fila['IdVacunas'];?></td>;
            <td><?php echo $fila['Nombre'];?></td>
            <td><?php echo $fila['País_de_origen'];?></td>
            <td><form action="eliminar.php" method="POST">
            <input type="hidden" name="IdVacunas" class="button3" value="<?php echo $fila['IdVacunas']; ?>">
            <input type="hidden" name="Nombre" class="button3" value="<?php echo $fila['Nombre']; ?>">
            <input type="submit" name="eliminar2" value="Eliminar" class="button3">
            </form>
        </td>
        </tr>
        </table>
        <?php
        }
    }
    mysqli_close($conexion);
?>

<br>
<br>
<center>
<form action="" method="POST">
        <input type="text" name="busqueda3">
        <br>
        <br>
        <input type="submit" name="enviar3" value="Buscar Historial" class="button">
    </form>
</center>
<br>
    <?php
    $conexion=mysqli_connect("localhost","root", "", "hospital");

    if(isset($_POST['enviar3'])){
        $busqueda3=$_POST['busqueda3'];

        $consulta = "SELECT * FROM `hospital`.`historial_vacunas` WHERE (CONVERT(`ID` USING utf8) LIKE '%$busqueda3%' OR CONVERT(`ID_Paciente` USING utf8) LIKE '%$busqueda3%' OR CONVERT(`ID_Vacuna` USING utf8) LIKE '%$busqueda3%' OR CONVERT(`Fecha_de_la_primera_dosis` USING utf8) LIKE '%$busqueda3%' OR CONVERT(`Fecha_de_la_segunda_dosis` USING utf8) LIKE '%$busqueda3%' OR CONVERT(`Nombre_del_profesional_que_administró_la_vacuna` USING utf8) LIKE '%$busqueda3%')";
        $resultado = mysqli_query($conexion, $consulta);

        while ($fila = mysqli_fetch_assoc($resultado)) {
            ?>
        <tr>
        <table>
        <tr>
        <th>ID</th>
        <th>ID Del Paciente</th>
        <th>ID De La Vacuna</th>
        <th>Fecha De La Primera Dosis</th>
        <th>Fecha De La Segunda Dosis</th>
        <th>Encargado De Aplicar La Dosis</th>
        <th>Eliminar</th>
        </tr>
            <td><?php echo $fila['ID'];?></td>;
            <td><?php echo $fila['ID_Paciente'];?></td>
            <td><?php echo $fila['ID_Vacuna'];?></td>
            <td><?php echo $fila['Fecha_de_la_primera_dosis'];?></td>
            <td><?php echo $fila['Fecha_de_la_segunda_dosis'];?></td>
            <td><?php echo $fila['Nombre_del_profesional_que_administró_la_vacuna'];?></td>
            <td><form action="eliminar.php" method="POST">
            <input type="hidden" name="ID" class="button3" value="<?php echo $fila['ID']; ?>">
            <input type="hidden" name="ID_Paciente" class="button3" value="<?php echo $fila['ID_Paciente']; ?>">
            <input type="hidden" name="ID_Vacuna" class="button3" value="<?php echo $fila['ID_Vacuna']; ?>">
            <input type="submit" name="eliminar3" value="Eliminar" class="button3">
            </form>
        </td>
        </tr>
        </table>
        <?php
        }
    }
    mysqli_close($conexion);
    ?>
<br>
<br>
<center>
<a href="buscar.php"><input type="submit" value="Buscar Otro Dato" class="button"></a>
<br>
<br>
<a href="index.php"><input type="submit" value="Registrar Un Nuevo Dato" class="button2"></a>
</center>
</body>
</html>