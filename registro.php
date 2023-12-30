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
        
        // echo "$usuario . $password . $password2";

        // Mas adelante vamos a comprobar si esta vacia o no
        $errores = ''; 

        if(empty($usuario) or empty($password) or empty($password2)){
            $errores.='<li>Porfavor rellena los datos correctamente</li>';
        }else{
            // Comprobar que el usuario no exista ya
            try{    //Hacer la conexion
                $conexion = new PDO('mysql:host=localhost;dbname=formularioprácticaphp','root','');

            }catch(PDOException $e){
                echo "Error: " .$e->getMessage();
            }
            
        //    Traime el usuario igual al que ingresemos, si hay uno que exista marca error  
           $statement = $conexion -> prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
        //    Cambiando el placeholder 
           $statement ->execute(array(':usuario' => $usuario));

        //    Va a recibir false o true 
           $resultado = $statement->fetch();

        //   print_r($resultado);
        //   var_dump($resultado); //Imprime el valor falso en caso de que no hay otro usuario igual
         
          if($resultado != false){
            $errores.='<li>El usuario ya existe </li>';
          }
    }

}
    
    require 'view/registro.view.php';

?>