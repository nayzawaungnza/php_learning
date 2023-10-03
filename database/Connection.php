<?php
class Connection{
    public static function make(){
        try{
            return $pdo = new PDO("mysql:host=localhost;dbname=to_do_db_php_learning","root","");
            //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    } 
}