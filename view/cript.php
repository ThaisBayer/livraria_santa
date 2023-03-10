<?php
    echo $_GET['senha']."<br>";

    $senha = "senacrs||devweb||".$_GET['senha'];
    $algoritmo = "AES-256-CBC";
    $chave = 'senac@2127';
    $iv = "QwebnmasDtyupOia";

    $script = openssl_encrypt($senha, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);

    $script64 = base64_encode($script); 

    echo $script64."<br>";
 
    $decript64 = base64_decode($script64);

    $decript = openssl_decrypt($decript64, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);

    echo $decript;
            