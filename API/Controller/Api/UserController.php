<?php

class UserController  extends BaseController{
    // Métodos da classe aqui

       public function listAction() {


        //echo "Executando listAction!";
        $erroDescription = '';
        $requestMethod = $_SERVER["REQUEST_METHOD"];
        $stringParamsArray = $this->getStringParams();

        if (strtoupper($requestMethod) == 'GET'){

            try {
                $userModel = new UserModel();

                $intLimit = 10;
                if(isset ($stringParamsArray['limit']) && $stringParamsArray['limit']) {
                    $intLimit = $stringParamsArray['limit'];
                }
                $usersArray = $userModel->getUSers($intLimit);
                $resposeData = json_encode($usersArray);

            } catch (Error $e){
                $erroDescription = $e->getMessage() . 'Something went wrong! Please contact support';
                $errorHeader = 'HTTP/1.1 500 Internal Server Error';
            } 
              
        } else {
                $erroDescription = 'Method not supported';
                $errorHeader = 'HTTP/1.1 422 Unprocesssable Entity';
                }

            if (!$erroDescription){
                $this->sendOutput(
                    $resposeData,
                    array('Content-Type: application/json','HTTP/1.1 200 OK')
                );
                
            } else {
                $this->sendOutput(json_encode (array ('error' => $erroDescription)),
                    array('Content-Type: application/json', $errorHeader)
                );
            }
        
    }
}