<?php
    $usuario =
    [
        'Diana' => '123123',
        'Paola' => '123456',
        'Mishel' => '987456',
        'Juan' => '147852',
        'Andres' => '369852'
    ];
    
    $nombre = $_POST["nombre"];
    $contrasena = $_POST["password"];
    $user_found = false;
    foreach($usuario as $user => $pass)
    {
      
        if($nombre == $user && $contrasena == $pass)
        {
            echo $user . " contraseña: " . $pass;
            $user_found= true;
            break;
        }
    }
    if(!$user_found){
        echo "usuario o contraseña incorrectas";
        
    } 
?>