<?php
require ('../model/usuario.php');

    function encript(){
        $email = $_POST['email'];
        $senha = "senacrs||devweb||".$_POST['senha'];
        $algoritmo = "AES-256-CBC";
        $chave = 'senac@2127';
        $iv = "QwebnmasDtyupOia";

    $script = openssl_encrypt($senha, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);

    $script64 = base64_encode($script); 

    $register = register($email, $script64);

    return $register;
    }