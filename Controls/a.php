<?php
    $name = $gender = $email = $phone = $dob = $address = $joiningDate = $password = "";
    $name = $_REQUEST["Name"];
    $gender = $_REQUEST["Gender"];
    $email = $_REQUEST["Email"];
    $phone = $_REQUEST["Phone"];
    $dob = $_REQUEST["Dob"];
    $address = $_REQUEST["Address"];
    $joiningDate = $_REQUEST["JoinDate"];
    $password = $_REQUEST["Password"];
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    // }
    if (empty($name)) {
        echo "Name is required";
    } else {
        // $name = $_REQUEST["firstname"];
        echo "Your name is ". $fname;
    }
    if(isset($_REQUEST["Gender"])) {
        // $gender=$_REQUEST["gender"];
        echo "Your gender is ". $gender;
    } else {
        echo "<br> Gender is required";
    }
    if (empty($_POST["email"])) {
        echo "<br> Email is required";
    } else {
        if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST["email"])) {
            echo "<br> Please enter a valid email address";
        }else {
            $email = test_input($_POST["email"]);
        }
    }
    if (empty($_POST["phone"])) {
        echo "<br> Phone is required";
    } else {
        $phone = _REQUEST["phone"];
    }
    if (empty($_POST["dob"])) {
        echo "<br> Dob is required";
    } else {
        $dob = _REQUEST["dob"];
    }
    if (empty($_POST["address"])) {
        echo "<br> Address is required";
    } else {
        $address = _REQUEST["address"];
    }
    if (empty($_POST["joinDate"])) {
        echo "<br> Joining Date is required";
    } else {
        $joiningDate = _REQUEST["joinDate"];
    }
    if (empty($_POST["password"]) or empty($_POST["ConfirmPassword"])) {
        echo "<br> Password and Confirm Password is required";
    } elseif (_REQUEST["password"] == _REQUEST["ConfirmPassword"]) {
        $password = _REQUEST["password"];
    } else {
        echo "<br> Password and Confirm Password must be same";
    }
    
?>