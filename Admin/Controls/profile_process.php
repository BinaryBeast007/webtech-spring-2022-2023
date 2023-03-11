<?php
    session_start();
    $name = $email = "";
    if(empty($_SESSION["Email"])) {
        header("Location: ../View/login.php");
    }
    $jsondata = file_get_contents("../Data/jsondata.json");
    $phpdata = json_decode($jsondata);
    foreach($phpdata as $myobj) {
        if($_SESSION["Email"] == $myobj->Email) {
            $name = $myobj->Name."<br>";
            $email= $myobj->Email."<br>";
            break;
        }
    }
    
?>