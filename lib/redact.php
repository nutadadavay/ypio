<?php
require "connect.php";
$info = $_POST["info"];
$too = $_POST["tooinfo"];
$id=$_POST["id"];
$queryRed = "UPDATE `popa` SET `info`='$info',`tooinfo`='$too' WHERE `id`=$id";
$red = mysqli_query($db, $queryRed);

header("Location: /kaif/index.php");
?>