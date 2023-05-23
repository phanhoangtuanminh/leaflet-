<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     .heading .content {
        margin-left: 122px;
    }
</style>
<body>
    <div class="heading">
        <h2>Add new user </h2>
        <form action="addUser_submit.php" method="POST">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name='name' /></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name='email' /></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name='phone' /></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" /></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" /></td>
                </tr>
                <tr>
                    <td>Retype password:</td>
                    <td><input type="password" name="confirmPassword" /></td>
                </tr>
                <div class="content">
                    <tr>
                        <td></td>
                        <td colspan="2"?>
                            <button type="submit" name="submit">Save</button>
                            <button type="reset">Cancel</button>
                        </td>
                    </tr>
            </table>
        </form>
    </div>
</body>
</html>
