<?php 
$server = 'mysql-mariadb-sea01-10-101.zap-hosting.com';
$username = 'zap1140889-6';
$password = 'jvoug7xJFlElrLIc';
$database = 'zap1140889-6'; 

$connection = mysqli_connect($server, $username, $password, $database);
$connectionobj = new mysqli($server, $username, $password, $database);
?>
