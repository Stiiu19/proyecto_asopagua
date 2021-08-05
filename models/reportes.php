<?php
date_default_timezone_set("America/Guayaquil");
class ModelReportes{
    public static function getInformation($table){
        try{
            $query = Conexion::conectar()->prepare("SELECT * FROM $table");
            $query->execute();
            return $query->fetchAll();
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}