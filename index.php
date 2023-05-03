<!DOCTYPE html>
<html>
<head>
	<title>Login</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-Zkw/1FWv0YjhCly2QtrXnplfzKjv6PlCU+LysJh6U/Qn6nHjKU+oTxTpZVXJZgKGsLz7UrA0p1yq3dDqT2QV7Q==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos1.css">
	
</head>  
<body>

    <div class="head">
        <div>
            <a href="https://www.gov.co" target="_blank"><img src="IMG/govco-logo-1200x242-1-600x121.png" class="gov" height="28.22px" width="140px" alt=""></a>
        </div>
    </div>

    <form action="insertar.php" method="post" class="formulario" id="formulario1">
    <h1>1. Registrar Datos De Paciente</h1>
    <div class="contenedor">
        <div class="input-contenedor">
            <i class="far fa-id-card icon"></i>
            <input type="text" placeholder="ID De El Paciente" name="idpaciente" class="correo" Required>
        </div>
        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
        <input type="text" placeholder="Nombres" name="nombre" class="contra" Required>
        </div>
        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
        <input type="text" placeholder="Apellidos" name="apellido" class="contra" Required>
        </div>
        <div class="input-contenedor">
            <i class="fas fa-birthday-cake icon"></i>
        <input type="text" placeholder="Fecha De Nacimiento" name="fecha" class="contra" Required>
        </div>
        <div class="input-contenedor">
            <i class="fas fa-map icon"></i>
        <input type="text" placeholder="Direccion" name="direccion" class="contra" Required>
        </div>
        <div class="input-contenedor">
            <i class="fas fa-phone icon"></i>
        <input type="text" placeholder="Telefono" name="telefono" class="contra" Required>
        </div>
        <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
        <input type="text" placeholder="Email" name="email" class="contra" Required>
        </div>
        <button type="button" onclick="mostrarFormulario2()" class="button">Siguiente</button>
        <input type="submit" name="registrar" value="Registrar" class="button">
        <b><p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p></b>
    </div>
    </form>

    <form action="insertar2.php" method="post" class="formulario2" id="formulario2">
    <h1>2. Registrar Datos De Vacunas</h1>
    <div class="contenedor">
        <div class="input-contenedor">
            <i class="far fa-id-card icon"></i>
            <input type="text" placeholder="ID De La Vacuna" name="idvacuna" class="correo" Required>
        </div>
        <div class="input-contenedor">
            <i class="fas fa-syringe icon"></i>
        <input type="text" placeholder="Nombre De La Vacuna" name="nombre" class="contra" Required>
        </div>
        <div class="input-contenedor">
            <i class="fas fa-flag icon"></i>
        <input type="text" placeholder="Pais De Origen" name="pais" class="contra" Required>
        </div>
        <button type="button" onclick="mostrarFormulario1()" class="button">Anterior</button>
        <button type="button" onclick="mostrarFormulario3()" class="button">Siguiente</button>
        <input type="submit" name="registrar" value="Registrar" class="button">
        <b><p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p></b>
    </div>
    </form>

    <form action="insertar3.php" method="post" class="formulario3" id="formulario3">
    <h1>3. Registrar Historial De Vacunacion</h1>
    <div class="contenedor">
        <div class="input-contenedor">
            <i class="far fa-id-card icon"></i>
            <input type="text" placeholder="ID" name="id" class="correo" Required>
        </div>
        <div class="input-contenedor">
            <i class="far fa-id-card icon"></i>
        <input type="text" placeholder="ID Del Paciente" name="idpaciente" class="contra" Required>
        </div>
        <div class="input-contenedor">
            <i class="far fa-id-card icon"></i>
        <input type="text" placeholder="ID De La Vacuna" name="idvacuna" class="contra" Required>
        </div>
        <div class="input-contenedor">
            <i class="fas fa-calendar icon"></i>
        <input type="text" placeholder="Fecha De La Primera Dosis" name="primera" class="contra" Required>
        </div>
        <div class="input-contenedor">
            <i class="fas fa-calendar icon"></i>
        <input type="text" placeholder="Fecha De La Segunda Dosis" name="segunda" class="contra" Required>
        </div>
        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
        <input type="text" placeholder="Nombre De Quien Puso La Vacuna" name="doctor" class="contra" Required>
        </div>
        <button type="button" onclick="mostrarFormulario2()" class="button">Anterior</button>
        <input type="submit" name="registrar" value="Registrar" class="button">
        <b><p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p></b>
    </div>
    </form>
    <script>
    function mostrarFormulario1() {
        document.getElementById("formulario1").style.display = "block";
        document.getElementById("formulario2").style.display = "none";
        document.getElementById("formulario3").style.display = "none";
        document.getElementById("botones").style.display = "block";
    }
    function mostrarFormulario2() {
        document.getElementById("formulario1").style.display = "none";
        document.getElementById("formulario2").style.display = "block";
        document.getElementById("formulario3").style.display = "none";
        document.getElementById("botones").style.display = "block";
    }
    function mostrarFormulario3() {
        document.getElementById("formulario1").style.display = "none";
        document.getElementById("formulario2").style.display = "none";
        document.getElementById("formulario3").style.display = "block";
        document.getElementById("botones").style.display = "block";
    }
    </script>
    <a href="buscar.php"><input type="submit" value="Buscar Datos" class="button2"></a>
</body>
</html>
