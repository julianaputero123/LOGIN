<?php
    $errorLogin = false;
    function login($user, $password){
        $accessFile = file_get_contents("./access/credentials.txt");
        $credentials=explode(" ", $accessFile);
        if ($user==$credentials[0] && $password==$credentials[1]) {
            header('Location:gestionEscuela.php');
            return;
        }
        return 'Error en el Login'; 
    }
?>