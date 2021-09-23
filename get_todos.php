<?php

    /*  
    *  Date: 2021-09-22
    *  Author: boss
    *  Description: This file the output data the database
    */

//1. get the data

$errors = [];

//2. validate the data
//3. business logic

//db config
$dbhost = 'localhost';
$dbname = 'todo_db';
$dbusername = 'root';
$dbpassword = '';

$data = "";

try {
    //connect database
    $link = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

    //insert in database
    $statement = $link->prepare('SELECT * FROM todo_table ORDER BY id DESC LIMIT 100');

    $statement->execute([]);

    $data = $statement->fetchAll();

    //close the connection
    unset($link);

} catch (PDOException $e) {
    $errors[] = "error with database: " . $e->getMessage() . " code : " . $e->getCode();
}

//4. output
if (count($errors) > 0) {
    var_dump($errors);
} else {
    $number_rows = count($data);
    for ($i = 0; $i < $number_rows; $i++) {
        echo $data[$i]['timestamp'] . " > " . $data[$i]['task'] . "<br><br>";
    }
}
?>