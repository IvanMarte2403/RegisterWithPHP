<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@700&family=Raleway:ital,wght@0,400;0,500;0,800;1,300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6bbb91872d.js" crossorigin="anonymous"></script>

    
    
    <title>Registro</title>

</head>
<body>
    
    <div class="contenedor">
        <h1 class="titulo">Registro</h1>
        <hr class="border">
        
        <!-- Evitar que nos inyecten código  -->
        <!-- El name nos va a ayudar a despues enviar el formulario  -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="formulario" name="login"> 
            <div class="form-group">
                <!-- Las Clases van a traer el icono de FontAwesome -->
                <i class="icono izquierda fa-solid fa-user"></i><input  type="text" name="usuario" class="usuario inputJs" placeholder="Usuario">
            </div>

            <div class="form-group">
                <i class="icono izquierda fa-solid fa-lock"></i><input type="password" name="password" class="password inputJs" placeholder="Contraseña  ">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa-solid fa-lock"></i><input type="password" name="password2" class="password_btn inputJs" placeholder="Repetir Contraseña">
                <!-- Se usa el placeholder para enviar la información directamente al name del Formulario -->
                <i class="submit-btn fa-solid fa-arrow-right" onclick="login.submit()"></i>
            </div>
        </form>   
        
        <p class="texto-registrate">
            ¿Ya tienes cuenta=

            <a href="login.php">Iniciar Sesion</a>
        </p>
    </div>



</body>

    <script src="js/estilos.js"></script>
</html> 