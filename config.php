<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "todo_app";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn === false) {
    die("ERROR Colud not connect.". mysqli_connect_error());
}

?>
