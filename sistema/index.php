<?php
if(isset($_POST['envio'])){
    include "servicios/iniciarsesion.php";
    if($result != null){
        header('Location: '."redireccion.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCCA - Login</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    
</head>

<body class="bodyBack">
    <div class="divFormulario">
        <form action="index.php" class="formularioLogin" method="POST">
            <div class="divTituloLogin">
                <h3>Sistema de Control de Condiciones Ambientales</h3>
            </div>
            <br>
            <div class="mb-3">
                <img src="img/user.png">
                <label for="usuario" class="form-label" style="font-weight:bold;">Usuario</label>
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingrese su usuario">
            </div>
            <div class="mb-3">
                <img src="img/password.png">
                <label for="clave" class="form-label" style="font-weight:bold">Contraseña</label>
                <input type="password" class="form-control" name="clave" id="clave" placeholder="Ingrese su contraseña">
            </div>
            <div>
                <button type="submit" class="form-control" id="envio" name="envio" style="background-color:green; color:white">Ingresar</button>
            </div>
        </form>
    </div>

</body>

</html>