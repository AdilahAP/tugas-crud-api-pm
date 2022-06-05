<?php
define('HOST', 'localhost');
define('USER', 'root');
define('DB', 'tugas-crud-api');
define('PASS', '');

$conn = new mysqli(HOST,USER,DB,PASS) or die('Koneksi error!');
?>