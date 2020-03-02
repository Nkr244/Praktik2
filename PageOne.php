<?php
session_start();?>
<!doctype html>
<html lang="en">
<head>
    <?php
    $title="Step #1";
require_once "header.php";
    ?>
</head>
<body>

<div class="container col-md-5 col-offset-3">
    <div class="alert <?=$_SESSION["alert"] ?>" role="alert">
        <?= nl2br($_SESSION["msg"]) ?>
    </div>
    <form action="action.php" method="POST">
        <div class="form-group">
            <label for="name">Ваше имя:</label>
            <input type="text" class="form-control"
                   id="name" name="name" autofocus value="<?=$_SESSION["name"]?>">
        </div>
        <div class="form-group">
            <label for="login">Ваш логин:</label>
            <input type="text" class="form-control"
                   id="login" name="login" autofocus value="<?=$_SESSION["login"]?>">
        </div>
        <div class="form-group">
            <label for="pass">Ваш пароль:</label>
            <input type="text" class="form-control"
                   id="pass" name="pass" autofocus value="<?=$_SESSION["pass"]?>">
        </div>
            <p>
            <button type="submit "class="btn btn-primary" name="goNext" value="goNext">
                Дальше..</button></p>
        </div>

    </form>
</div>
</body>
</html>