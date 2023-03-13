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
    <form action="../Controls/changePicture.php" method="POST" enctype="multipart/form-data">
        <table border="1" style="border-collapse: collapse;" cellpadding="10">
            <tr>
                <td> <a href="dashboard.php"> Dashboard </a> </td>
                <td rowspan="5"> 
                    <fieldset>
                        <legend> Change Profile Picture </legend>
                        <table>
                            <tr>  
                                <td>Current Picture</td>
                                <td> <img src="<?php echo $current_user->file; ?>" alt="Profile Picture" width="50px" height="50px"> </td>
                            </tr>
                            <tr>  
                                <td>New Picture</td>
                                <td><input type="file" name="image"></td>
                            </tr>
                            <tr>
                                <td> <input type="submit" value="Submit"> </td>
                                <td> <input type="reset" value="Reset"> </td>
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
    </form>
    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>