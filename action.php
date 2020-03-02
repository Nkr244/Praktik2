<?php
session_start();
require_once "Ex1.php";
$_SESSION["Fio"] = trim(filter_var($_POST["name"] ?? "", FILTER_SANITIZE_STRING));
$_SESSION["Password"] = trim(filter_var($_POST["pass"] ?? "", FILTER_SANITIZE_STRING));
$_SESSION["Login"] = trim(filter_var($_POST["login"] ?? "", FILTER_SANITIZE_STRING));

$_SESSION["auth"] = false;

if (isset($_POST["goNext"])) {

    $sql = $pdo->prepare("select *  from bloggers where Login= :Login and Password= :Password");
    $sql->execute(["Login" => $_SESSION["Login"],"Password" => $_SESSION["Password"]]);
    $res = $sql->fetchAll();

    $error = [];

    if (strlen($_SESSION["Password"]) < 5) {
        $error[] = "Password({$_SESSION['Password']})-некорректен";
        $_SESSION["alert"] = "alert-danger";
    }
    if (strlen($_SESSION["Fio"]) < 5) {
        $error[] = "Name({$_SESSION['Fio']})-некорректен";
        $_SESSION["alert"] = "alert-danger";
    }
    if (strlen($_SESSION["Login"]) < 5) {
        $error[] = "Login({$_SESSION['Login']})-некорректен";
        $_SESSION["alert"] = "alert-danger";
    }
    if (count($res) > 0) {
        $error[] = "Login({$_SESSION['Login']})-пользователь с таким логином уже существует!";
        $_SESSION["alert"] = "alert-danger";
    }

    if(count($error)==0){
        $_SESSION["msg"] = "Все поля заполнены и добавлены в БД,все впорядке!\n";
        $_SESSION["alert"] = "alert-success";
        $_SESSION["auth"] = true;
    }
    else{
        $_SESSION["msg"] = implode("\n",$error);
        //$_SESSION["auth"] = false;
    }

}
if (!$_SESSION["auth"]) {
    header("Location:PageOne.php");

} else {
    $sql = $pdo->prepare("INSERT into bloggers(Fio,Password,Login)values(?,?,?)");
    $sql->execute([$_SESSION["Fio"], $_SESSION["Password"], $_SESSION["Login"]]);

    header("Location:config.php");
}

