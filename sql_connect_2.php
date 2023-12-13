<?php
$user = "root";
$password = "password";

$database = "test";
$table = "users";
$db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
?>
