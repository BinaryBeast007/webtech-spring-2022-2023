<?php
// define variables and set to empty values
$name = $gender = $email = $phone = $dob = $address = $joining_date = $password = $confirm_password = "";
$nameErr = $genderErr = $emailErr = $phoneErr = $dobErr = $addressErr = $joiningDateErr = $passwordErr = $confirmPasswordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // validate name
    
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        echo "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    // validate gender
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    // validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // validate phone number
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone number is required";
    } else {
        $phone = test_input($_POST["phone"]);
        // check if phone number only contains digits
        if (!preg_match("/^[0-9]*$/", $phone)) {
            $phoneErr = "Only digits allowed";
        }
    }

    // validate date of birth
    if (empty($_POST["dob"])) {
        $dobErr = "Date of birth is required";
    } else {
        $dob = test_input($_POST["dob"]);
    }

    // validate address
    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
    } else {
        $address = test_input($_POST["address"]);
    }

    // validate joining date
    if (empty($_POST["joining_date"])) {
        $joiningDateErr = "Joining date is required";
    } else {
        $joining_date = test_input($_POST["joining_date"]);
    }

    // validate password
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        // check if password contains at least 8 characters, at least one uppercase letter, one lowercase letter, one number, and one special character
        if (!preg_match("/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){8,16}$/",$password)) {
            $passwordErr = "Password must contain at least 8 characters, including one uppercase letter, one lowercase letter, one number, and one special character";
        }
    }

    // validate confirm password
    if (empty($_POST["confirm_password"])) {
        $confirmPasswordErr = "Confirm password is required";
    } else {
        $confirm_password = test_input($_POST["confirm_password"]);
        // check if confirm password matches password
        if ($confirm_password != $password) {
            $confirmPasswordErr = "Confirm password does not match password";
        }
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
