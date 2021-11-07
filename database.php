<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "members_db";

$pdo = new PDO("mysql:host=$servername:3306;dbname=$database", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $pdo;