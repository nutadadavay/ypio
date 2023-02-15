<?php
require "connect.php";
$email = $_POST["email"];
$pass = $_POST["pass"];
$conf = $_POST["conf"];
if ($pass == $conf) {
    $queryUser = "SELECT*from `User` where email='$email'";
    $mbUser = mysqli_query($db, $queryUser);

    if (!$mbUser) {
   $queryAddUser="INSERT into `User` (id,email,pass) values (NULL, '$email', '$pass')";
   $addU = mysqli_query($db, $queryAddUser);
}
   else{
        ?><a href="/kaif/auth.php">123</a><?
        die();
   }
    

    
}
else{
      ?> <a href="../index.php"> tyts </a><?
    die();
}

header("Location: /kaif/auth.php");

?>