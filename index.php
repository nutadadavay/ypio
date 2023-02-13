<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>


<tr> 
<td>  id </td>  
<td>  info </td>  
<td>  tooinfo </td>  
</tr>

<?php

require "lib/connect.php";
$queryAll="SELECT * from `popa`;";//выбери все из popa(буквально)
$all=mysqli_query($db,$queryAll);//функц которая обращается к базе данных и содержит два параметра для себя 
//1 то где лежит бд, к какой вы собираетесь обращаться ($db)
//2 опция сама строка запроса с которой нужно обратится в бд($queryAll)
$all=mysqli_fetch_all($all);// преобразовывает все виды данных в массив 
foreach($all as $val){
    if ($val) {
        
        ?>

        <tr>
            <td> <?= $val[0] ?></td>
            <td> <?= $val[1] ?></td>
            <td> <?= $val[2] ?></td>
            <td><a href="about.php?id=<?=$val[0]?>">about</td>
            <td><form action="lib/del.php?id=<?= $val[0]; ?>" method="POST"><button type="submit">delete</button></form></td>
        </tr>


        <?php


    }
}
?>

</table>

 <form action="lib/add.php" method="POST">
     <input type="text" name="info" required>  <br>
     <input type="text" name="tooinfo" required><br>
    <input type="submit" value="send" ><br>
</form>
<a href="/kaif/auth.php">a</a>



</body>