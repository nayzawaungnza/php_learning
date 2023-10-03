<?php
function dd($data){
    echo "<pre>";
    die(var_dump($data));
}
function dbConnection(){
    try{
        return $pdo = new PDO("mysql:host=localhost;dbname=to_do_db_php_learning","root","");
        //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
}

function fetchTasks($pdo){
    $statement = $pdo->prepare("select * from tasks");
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_OBJ);
}