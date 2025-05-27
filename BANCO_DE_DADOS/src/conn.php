<?php

    //phpinfo();

$serverName = "localhost";
$connectionOptions = array(
    "Database" => "Berp",
    "Uid" => "sa",
    "PWD" => "rqqo231",
    "Encrypt" => true,
    "TrustServerCertificate" => true
);
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn) {
    echo "Conexão bem-sucedida!";
} else {
    echo "Erro na conexão.";
    print_r(sqlsrv_errors());
}


?>