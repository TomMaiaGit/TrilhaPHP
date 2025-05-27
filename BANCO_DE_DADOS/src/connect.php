<?php

declare(strict_types=1);
/*
$dsn = "sqlsrv:Server=localhost;Database=Berp";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //PDO::SQLSRV_ATTR_ENCRYPT => true,
    //PDO::SQLSRV_ATTR_TRUST_SERVER_CERTIFICATE => true
);

try {
    $conn = new PDO($dsn, "sa", "rqqo231", $options);
    echo "Conexão via PDO bem-sucedida!\n";
} catch (PDOException $e) {
    echo "Erro na conexão via PDO: " . $e->getMessage() . "\n";
}
*/


//$pdo = null;
$server = "DESKTOP-FORIJ5L";
$db = "Berp";
$user = "sa";
$pass = "rqqo231";

try{
     
    $pdo = new PDO("sqlsrv:server=$server;Database=$db","$user","$pass");
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
   //echo "Conectado!!";
    return $pdo;



} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

//return $pdo;
?>