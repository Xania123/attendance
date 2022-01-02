<?php 
    //$host='localhost'; //'127.0.0.1' works too
    //$db='attendance_db';
    //$user= 'root';
    //$pass= '';
    //$charset= 'utf8mb4';

    $host='remotemysql.com'; 
    $db='f5g0nNWIu2';
    $user= 'f5g0nNWIu2';
    $pass= 'Cf5g0nNWIu2';
    $charset= 'utf8mb4';

    $dsn="mysql:host=$host; dbname=$db; charset=$charset";

    try{
        $pdo = new PDO($dsn,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        throw new PDOException($e->getMessage()); 
        //echo "<h1 class='text-danger'> NO Database Found ヽ(・∀・)ﾉ</h1>"; this is just a neat message for above
    }

    require_once 'crud.php';
    $crud= new crud($pdo);

?>