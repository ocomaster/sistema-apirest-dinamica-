<?php 

require_once "connection.php";
//Clase retorna la sentencia SQL que hagamos hacia la base de datos
 class GetModel{
    static public function getData($table){
        $sql = "SELECT * FROM $table";

        $stmt = Connection::connect()->prepare($sql);
        $stmt -> execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }
}