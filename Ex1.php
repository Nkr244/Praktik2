<?php
$host = "localhost";
$db = "bd_rusakov";//name DataBase
$login = "root";
$password = "";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
];
$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $login, $password,$opt);
