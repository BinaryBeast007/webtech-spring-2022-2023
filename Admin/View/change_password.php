<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <?php include '../../Layouts/logged_in_header.php'; ?>
    
    <table border="1" style="border-collapse: collapse;" cellpadding="10">
        <tr>
            <td> <a href="dashboard.php"> Dashboard </a> </td>
            <td rowspan="5">  
                <fieldset>
                    <legend> Change Password </legend>
                    <table>
                        <tr>  
                            <td>Current Password</td>
                            <td><input type="text" name="current_pass" placeholder="Enter current password"></td>
                        </tr>
                        <tr>  
                            <td>New Password</td>
                            <td><input type="text" name="new_pass" placeholder="Enter new password"></td>
                        </tr>
                        <tr>  
                            <td>Retype New Password</td>
                            <td><input type="text" name="retype_pass" placeholder="Retype new password"></td>
                        </tr>
                    </table>
                </fieldset>
            </td>
        </tr>
        <tr><td> <a href="view_profile.php"> View Profile </a> </td></tr>
        <tr><td> <a href="edit_profile.php"> Edit Profile </a> </td></tr>
        <tr><td> <a href="change_profile_picture.php"> Change Profile Picture </a> </td></tr>
        <tr><td> <a href="change_password.php"> Change Password </a> </td></tr>
    </table>

    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>