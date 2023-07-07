<?php

/*===================================
Mostrar errores
===================================*/

ini_set('display_errors',1);//Permitira evidenciar errores desde navegador o Postman
ini_set("log_errors",1);//Crear el archivo a nivel local del error
ini_set("error_log", "C:/xampp/htdocs/apirest-dinaminca/php_error_log");//Ruta donde queremos que se cree el archivo

/*===================================
Requerimientos
===================================*/
// require_once "models/connection.php";
// //Connection::infoDatabase()
// echo '<pre>'; print_r(Connection::connect()); echo '</pre>';  Probar conexion a la base de datos
// return;

require_once "controllers/routes.controller.php";

$index = new RoutesController();
$index->index();







//Capturar datos de url
//$routesArray = explode("/", $_SERVER['REQUEST_URI']);
//$routesArray = array_filter($routesArray);


//echo "holaaa";

// $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $uri = explode( '/', $uri );


//La idea es capturar lo que venga en la url


//echo $_SERVER['SCRIPT_NAME'];

// return;



// if (count($uri) == 0) {
//     $json = array(

//         'status' => 404,
//         'result' =>'Not found'
//     );
    
//     echo json_encode($json, http_response_code($json["status"]));
    
//     return;
// }
// if (count($uri) == 1 && isset($_SERVER['REQUEST_METHOD'])) {
//     echo '<pre>'; print_r($_SERVER['REQUEST_METHOD']); echo '</pre>';
// }

// $json = array(

//     'status' => 200,
//     'result' => 'success'
// );

// echo json_encode($json);
// return;


