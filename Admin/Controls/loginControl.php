<?php
    if(isset($_REQUEST["login"])) {
        $is_found = false;
        if(empty($_REQUEST["Email"])) {
            echo "Please enter your Email address";
        } elseif(empty($_REQUEST["Password"])) {
            echo "Please enter your password";
        } else {
            $filedata = file_get_contents("../data/jsondata.json");
            $phpobj = json_decode($filedata);
            foreach($phpobj as $myobj) {
                if($myobj->Email == $_REQUEST["Email"] && $myobj->Password == $_REQUEST["Password"]) {
                    $is_found = true;
                }
            }
            if($is_found) {
               header("Location: ../view/profile.php");
            } else {
                echo "login failed";
            }
        }
    }
?>