<?php
//db-connect.php

$dsn = "mysql:host=localhost;dbname=xuanx_imm2022;charset=utf8mb4";

$dbusername = "xuanx_imm2022user";
$dbpassword = "password";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
?>