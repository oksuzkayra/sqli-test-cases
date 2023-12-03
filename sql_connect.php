<?php
$user = "root";
$password = "password";

$database = "example";
$table = "todo_list";
$db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
?>
