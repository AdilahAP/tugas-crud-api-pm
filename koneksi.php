<?php
$server     = "localhost";
$username   = "root";
$password   = "";
$db         = "tugas-crud-api";
$dsn        = "mysql:host={$server};dbname={$db}";

try {
    $connection = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
}
?>