<?php
    /*
    * Date: 2021-09-22
    * Author: boss
    * Description: This file the input data the database
    */

//1. get the data

$todo = "";
$errors = [];

if (!isset($_POST['todo_to_add'])) {
    echo "You did not send nothing to add...";
    die();
}

//2. validate the data
$todo = htmlspecialchars($_POST['todo_to_add']);

//3. business logic

//db config
$dbhost = 'localhost';
$dbname = 'todo_db';
$dbusername = 'root';
$dbpassword = '';

try {
    //connect database
    $link = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

    //insert in database
    $statement = $link->prepare('INSERT INTO todo_table (task) VALUES (:task)');

    $statement->execute([
        'task' => $todo
    ]);

    //close the connection
    unset($link);

} catch (PDOException $e) {
    $errors[] = "error with database: " . $e->getMessage() . " code : " . $e->getCode();
}

//4. output
//normally we should output db errors
if (count($errors) > 0) {
    var_dump($errors);
} else {
    echo "Insertion successfull!";
}
?>