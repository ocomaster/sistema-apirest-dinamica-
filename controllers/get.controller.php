<?php 

require_once "models/get.model.php";
class GetController{
    static public  function getData($table){
        $response = GetModel::getData($table);
        $return  = new GetController();
        $return -> funcionResponse($response);

    }

    //Se crea metodo 

    /*===================================
    Las Respuestas del controlador
    ===================================*/

    public function funcionResponse($response){
        
        if (!empty($response)) {
    
        $json = array(

        'status' => 200,
        'total' => count($response),
        'result' => $response
     );
    }else{
        $json = array(

            'status' => 404,
            'result' => 'Not Found'
         );

    }
   
     echo json_encode($json, http_response_code($json["status"]));
    }
    
}
    