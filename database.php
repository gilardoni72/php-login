<?php

$server = 'php-login-database1.ctrb6a5sfu5g.us-west-2.rds.amazonaws.com:3306';
$username = 'root';
$password = '12345678';
$database = 'phplogin';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
