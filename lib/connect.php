<?php
$db= mysqli_connect(
    "127.0.0.1:3307",//апи коннекта
    "root",//имя пользователя 
    "",//парол
    "test"//(назв бд)
);
if (!$db){
    echo('нет соед');
    die();//убивает текущий process это наш файол коннектпхп

}


// if (!$db){
//     die('нет соединения');

// }

