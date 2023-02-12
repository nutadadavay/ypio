<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
</head>
<body>
<?php
require "lib/connect.php";
$id=$_GET['id'];
$queryOne = "SELECT*from `popa` where `id`=$id";
$one = mysqli_query($db, $queryOne);
$one = mysqli_fetch_assoc($one);


?>

<form action="lib/redact.php" method="POST">
    <a>info</a><br>
    <input type="hidden" name="id" value="<?=$one['id']?>">
    <input type="text" required name="info" value="<?=$one['info'];?>"> <br>
    <a>tooinfo</a><br>
    <input type="text" required name="tooinfo" value="<?=$one['tooInfo'];?>"><br>
    <input type="submit" value="send" ><br> 
</form>

</body>