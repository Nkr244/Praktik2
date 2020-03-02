<?php

session_start();
if (!$_SESSION["auth"]) {
    header("Location:index.php");
    die();
}
if (isset($_POST["goStart"])) {
    header("Location:index.php");
}
if (isset($_POST["goNext"])) {
    header("Location:PageThree.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    $title = "Шаг №2";
    require_once "header.php";
    ?>
</head>

<body>

<div class="container col-md-5 col-offset-3">
    <hr>
    <img src="2.jpg" alt="Это изображение" class="rounded">
    <hr>
    <form class="d-flex justify-content-end mt-5" method="POST">
        <button class="btn btn-info mr-2" name="goStart" value="goStart">
            Назад...</button>
        <button class="btn btn-primary" name="goNext" value="goNext">
            Русские ВПЕРЕТ!...</button>
    </form>
</div>
</body>

</html>
