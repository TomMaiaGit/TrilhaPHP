<?php


try{

    $pdo = new PDO('sqlsrv:Server=localhost;Database=Loja', 'sa', 'H@!fa123');
   // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexão bem-sucedida!";

    //var_dump($pdo);
}catch (PDOException $e){
     echo "Erro na conexão: " . $e->getMessage();
}