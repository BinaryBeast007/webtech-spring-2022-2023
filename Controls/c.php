<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $gender = $email = $phone = $dob = $address = $joiningDate = $password = $confirmPassword = ""; 
        $isAllDataSet = true;

        if (empty($_REQUEST["Name"])) {
            echo "Name is required";
            $isAllDataSet = false;
        } else {
            $name = $_REQUEST["Name"];
        }
        if(isset($_REQUEST["Gender"])) {
            $gender = $_REQUEST["Gender"];
        } else {
            $isAllDataSet = false;
            echo "<br> Gender is required";
        }
        if (empty($_REQUEST["Email"])) {
            $isAllDataSet = false;
            echo "<br> Email is required";
        } else {
            if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_REQUEST["Email"])) {
                $isAllDataSet = false;
                echo "<br> Please enter a valid email address";
            }else {
                $email = $_REQUEST["Email"];
            }
        }
        if (empty($_REQUEST["Phone"])) {
            $isAllDataSet = false;
            echo "<br> Phone is required";
        } else {
            $phone = $_REQUEST["Phone"];
        }
        if (empty($_REQUEST["Dob"])) {
            $isAllDataSet = false;
            echo "<br> Dob is required";
        } else {
            $dob = $_REQUEST["Dob"];
        }
        if (empty($_REQUEST["Address"])) {
            $isAllDataSet = false;
            echo "<br> Address is required";
        } else {
            $address = $_REQUEST["Address"];
        }
        if (empty($_REQUEST["JoinDate"])) {
            $isAllDataSet = false;
            echo "<br> Joining Date is required";
        } else {
            $joiningDate = $_REQUEST["JoinDate"];
        }
        if (empty($_REQUEST["Password"]) or empty($_REQUEST["ConfirmPassword"])) {
            $isAllDataSet = false;
            echo "<br> Password and Confirm Password is required";
        } elseif ($password == $confirmPassword) {
            $password = $_REQUEST["Password"];
            $confirmPassword = $_REQUEST["ConfirmPassword"];
        } else {
            $isAllDataSet = false;
            echo "<br> Password and Confirm Password must be same";
        }
        if ($isAllDataSet == true) {
            echo "Registration Successfull";
        }

        if($isAllDataSet) {
            $existingdata = file_get_contents("../data/jsondata.json");
            $phpdata = json_decode($existingdata);
            $formdata = array(
                "name"=>$_REQUEST["firstname"],
                "lname"=>$_REQUEST["lastname"],
                "gender"=>$_REQUEST["gender"],
                "email"=>$_REQUEST["email"],
                "password"=>$_REQUEST["pass"],
                "course"=>$_REQUEST["course"],
                "file"=>"../uploads/".$_REQUEST["email"].".jpg",
            );
            $phpdata[] = $formdata;
            $jsondata = json_encode($phpdata,JSON_PRETTY_PRINT);
            if(file_put_contents("../data/jsondata.json", $jsondata)) {
                echo "file written successfully";
            }else {
                echo "file written failed";
            }
        }
?>