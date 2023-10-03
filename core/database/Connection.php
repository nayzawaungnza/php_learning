<?php
class Connection{
    public static function make($config){
        try{
            return $pdo = new PDO(
                "{$config['db_connection']}:host={$config['db_host']};dbname={$config['db_name']}",
                "{$config['db_username']}",
                "{$config['db_password']}"
            );
            //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    } 
}