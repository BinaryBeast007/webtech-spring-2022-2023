<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include '../Controls/profile_process.php'; ?>
    <table>
        <tr>
            <td> <img src="http://localhost/WT%20Project/webtech-spring-2022-2023/Assets/rent-logo.png" width="50px" height="50px"> </td>
            <td> ABC Rental Service </td>
        </tr>
        <tr>
            <td align="center"> <a href="#"> Home </a> </td>
            <td align="center"> Logged in as <a href="../View/view_profile.php"> <?php echo $current_user->Name ?> </a> </td>
            <td align="center"> <a href="../Controls/logout.php"> Logout </a> </td>
        </tr>
    </table>
    <br><br>
</body>
</html>