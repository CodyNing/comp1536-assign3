<?php
    extract($_POST);
    $temp = file("credentials.config");
    for($i=0; $i<count($temp);$i++){
        $match = explode(",", $temp[$i]);
        if ($email == trim($match[0]) and $password == trim($match[1])){
            header("Location: index.php?"); die();
        }
    }
    header("Location: login.php?msg=Incorrect E-mail or password."); die();
?>