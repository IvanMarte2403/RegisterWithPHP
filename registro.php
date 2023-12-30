<?php session_start(); 

    // Una vez inicie sesión no podra acceder a los formularios 
    if(isset($_SESSION['usuario'])){
        header('Location: index.php');
    }
    
    // Condicional para leer los datos y el Filtro del Código
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Los datos si se enviaros, Los DATOS se estan enviando por Name

        $filters =array(
            'usuario' => array(
                'filter' => FILTER_SANITIZE_STRING,
                'flags' => FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH
            ),

            'password' => FILTER_DEFAULT,
            'password2' => FILTER_DEFAULT
        );

        $postData = filter_input_array(INPUT_POST, $filters);

        $usuario = strtolower($postData['usuario']);
        $password = $_POST['password'];
        $password2= $_POST['password2'];
        
        echo "$usuario . $password . $password2";
        
        // Queremos guardar en la base de datos en minusculas
    }
    
    require 'view/registro.view.php';

?>