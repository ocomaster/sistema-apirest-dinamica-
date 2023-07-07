<?php 
require_once "controllers/get.controller.php";

// echo '<pre>'; print_r($routesArray[1]); echo '</pre>';
// return;
$table = $routesArray[1];

$response = new GetController();
$response ->getData($table);


// $response = new GetController::getData();

// echo '<pre>'; print_r($response); echo '</pre>';

// return;



