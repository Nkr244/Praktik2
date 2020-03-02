<?php
//if(!isset($_COOKIE['counter'])){setcookie("counter",0);}
//setcookie("counter",++$_COOKIE['counter']);
//setcookie("name", $_POST["name"] ?? "Заполните все поля анкеты..");
//setcookie("alert", $_POST["alert"] ?? "alert-warning");
session_start();
$_SESSION["msg"] = $_SESSION["msg"] ?? "Заполните все поля анкеты..";
$_SESSION["alert"] = $_SESSION["alert"] ?? "alert-warning";
require_once "pageOne.php";