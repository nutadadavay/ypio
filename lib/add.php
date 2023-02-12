
<?php
require "connect.php";

$info = $_POST["info"];
$too = $_POST["tooinfo"];

$queryAdd = "INSERT into `popa` ( info, tooInfo) values ('$info', '$too');";
$add = mysqli_query($db,$queryAdd); //обязательных два парметра , отправляет запрос в бд

if(!$add){ // если адд не выполнился
    die('error add'); //убей текущий процесс
}

header("Location: /kaif/index.php");// указываем локацию в котором нужно перейти, куда нужно идти после указынного действия