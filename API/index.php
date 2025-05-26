<?php

require __DIR__ . "/Config/config.php";

$uri = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);


print_r($_SERVER);
exit;

if( (isset ($uri[1])  && $uri[1] != 'api') || (isset($uri[2]) && $uri[2] != 'v1' )) {
    header("HTTP/1.1 404 Not Found");
}else if ( (isset($uri[3]) && $uri[3] != 'user') || !isset($uri[4]) ){
    header("HTTP/1.1 404 Not Found");
    exit();
}

require ROOT_PATH . "/Controller/Api/UserController.php";

$user = new UserController();

$methodName = $uri[4] . 'Action';
//print_r($methodName);
$user->{$methodName}();





/******
 * Explicação como funciona o arquivo de configuração da API
 * 
 * 
 * Esse arquivo PHP é um controlador de requisições para uma API REST e faz o seguinte:

🔹 1. Carrega configurações
php
require __DIR__ . "/Config/config.php";
Ele inclui um arquivo de configuração (config.php), que pode conter variáveis do ambiente, conexão com banco de dados, ou outras definições importantes.

🚀 2. Processa a URL da requisição
php
$uri = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);
Ele pega a URL requisitada e a divide em segmentos usando / como delimitador.

Se a URL for http://example.com/api/v1/user/123, então $uri conterá:

[
    0 => '',
    1 => 'api',
    2 => 'v1',
    3 => 'user',
    4 => '123'
]
🚫 3. Valida a estrutura da URL
php
if( (isset ($uri[1])  && $uri[1] != 'api') || (isset($uri[2]) && $uri[2] != 'v1' )) {
    header("HTTP/1.1 404 Not Found");
}
Se o primeiro segmento não for api, ou o segundo não for v1, ele retorna 404 (não encontrado).

php
else if ( (isset($uri[3]) && $uri[3] != 'user') || !isset($uri[4]) ){
    header("HTTP/1.1 404 Not Found");
    exit();
}
Se o terceiro segmento não for user, ou o quarto não existir, também retorna 404.

🏗 4. Instancia o controlador e executa um método
php
require ROOT_PATH . "/Controller/Api/UserController.php";

$user = new UserController();
Ele carrega o controlador UserController, que provavelmente gerencia ações relacionadas a usuários.

php
$methodName = $uri[4] . 'Action';
$user->{$methodName}();
Ele chama um método do controlador dinamicamente, baseado no quarto segmento da URL.

Se a URL for http://example.com/api/v1/user/get, ele executa:

php
$user->getAction();
 * 
 * 
 *****/