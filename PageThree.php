<?php
//session_start();

if (isset($_POST["goStart"])) {
    header("Location:PageTwo.php");
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

    <div class="alert <?= $_SESSION["alert"] ?>" role="alert">
        <?= nl2br($_SESSION["msg"]) ?>
        <?= $_SESSION["name"] ?>
        <?= $_SESSION["phone"] ?>
    </div>
    <hr>
    <form class="d-flex justify-content-end mt-5" method="post">
        <img src="2.jpg" alt="Это изображение" class="rounded">
        <button class="btn btn-info mr-2" name="goStart" value="goStart">
            РУССКИЕ назад!</button>
    </form>

</div>
</body>
</html>