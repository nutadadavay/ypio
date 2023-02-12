<?php
require "connect.php";
$id = $_GET["id"];
$queryDel = "DELETE from `popa` WHERE id=$id;";
$del = mysqli_query($db, $queryDel);
if (!$del){
    die('error delete');
}
$fix = "SELECT * from `popa`";
$all=mysqli_query($db,$fix);
$all=mysqli_fetch_all($all);

// foreach($all as $item){
    
    // for($i = 0; $i < count($all); $i++){
    //     print_r($all[$i]);
    //     $info =  $all[$i][1];
    //     $too = $all[$i][2];
    //     $fixID =  "UPDATE `popa` SET  `id`={$i} WHERE `info`='{$info}',`tooinfo`='{$too}'";
    //     $FixedID = mysqli_query($db, $fixID);
    // }
// }


header("Location: /kaif/index.php");