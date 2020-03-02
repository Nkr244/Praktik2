<?php
require_once "Ex1.php";
$sql="select * from posts";
$query=$pdo->query($sql);
$data=$query->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="" integrity="" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<table class="table table-dark">
<?php foreach ($data as $v){echo "<tr><td>".$v->Fio."</td>  <td>".$v->Login."</td></tr>"; };
    echo "<hr>"; ?>
</table>
</div>
</body>
<script src=" js / jquery - 3.2.1 . min . js"></script>
<script src="js / popper . min . js"></script>
<script src="js / bootstrap . min . js"></script>
<script src="js/jquery-3.2.1.js"></script>
</html>



