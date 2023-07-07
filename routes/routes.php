<?php 
/*===================================
Capturar datos de la url
===================================*/
$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);

/*===================================
Cuando no se realiza peticion en la api
===================================*/
if (count($routesArray) == 0) {
    $json = array(

        'status' => 404,
        'result' => 'Not found'
     );
    
     echo json_encode($json, http_response_code($json["status"]));
     return;
}

/*===================================
Cuando si se hace una peticion a la api
===================================*/

if (count($routesArray) == 1 && isset($_SERVER['REQUEST_METHOD'])) {

    /*===================================
   Peticiones GET
    ===================================*/   
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        include "servicios/get.php";
    }

    /*===================================
    Peticiones POST
    ===================================*/   
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $json = array(

            'status' => 200,
            'result' => 'Solicitud POST'
         );
        
         echo json_encode($json, http_response_code($json["status"]));
    }

    /*===================================
    Peticiones POST
    ===================================*/   
    if ($_SERVER['REQUEST_METHOD'] == "PUT") {
        $json = array(

            'status' => 200,
            'result' => 'Solicitud PUT'
         );
        
         echo json_encode($json, http_response_code($json["status"]));
    }

    /*===================================
    Peticiones POST
    ===================================*/   
    if ($_SERVER['REQUEST_METHOD'] == "DELETE") {
        $json = array(

            'status' => 200,
            'result' => 'Solicitud DELETE'
         );
        
         echo json_encode($json, http_response_code($json["status"]));
    }



    //echo '<pre>'; print_r($_SERVER['REQUEST_METHOD']); echo '</pre>';#Metodo el cual identifica el tipo se servicio http requerido
}









