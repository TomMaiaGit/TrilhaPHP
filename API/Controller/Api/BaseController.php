<?php

class BaseController{


    //**Metodo magico do PHP que é chamado quando nenhum outro metodo existenda na classe for chamado ** */
    public function __call($name, $arguments){
        $this->sendOutput('', array ('HTTP/1.1 404 Not Found'));

    }

    protected function getStringParams() : array {
        parse_str($_SERVER ['QUERY_STRING'], $query);
        return $query;
    }

    protected function sendOutput($data, $httpHeaders=array()){

        header_remove('Set-Cookie');

        if(is_array($httpHeaders) && count ($httpHeaders)){
            foreach($httpHeaders as $httpHeaders){
                header($httpHeaders);
            }
        }
        echo $data;
        exit;
    }
}