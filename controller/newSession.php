 <?php

require '../model/usuario.php';

$email = $_GET['email'];
$senha = "senacrs||devweb||".$_GET['senha'];
$algoritmo = "AES-256-CBC";
$chave = 'senac@2127';
$iv = "QwebnmasDtyupOia";

$script = openssl_encrypt($senha, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);

$script64 = base64_encode($script); 
  
$login = get($email, $script64);
  

if($login === true){
    if(!isset($_SESSION)){
        session_start();
    }
    echo "<script>console.log('newSession.php line 14');</script>";
    $_SESSION['logged'] = true;
    header('location: ../view/read.php');
}else{
    header('location: ../index.php');
}