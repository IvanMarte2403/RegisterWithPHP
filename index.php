<!-- Se hara la comprobación si el usua rio tiene una sesión -->

<?php session_start();  

if (isset($_SESSION['usuario'])){

    header('location: contenido.php');

    }else{
    // Validaciones para bases de datos 
    header('location: registro.php');
}


?>