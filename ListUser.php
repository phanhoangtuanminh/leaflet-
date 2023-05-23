<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
	table {
		border: 1px solid #aaa;
		border-collapse: collapse;
		background-color: white;
		font-family: Verdana;
		font-size: 12px;
	}
	td {
		border: 1px solid #aaa;
		border-collapse: collapse;
		height: 30px;
	}
	th {
		border: 1px solid #ccc;
		border-collapse: collapse;
		height: 40px;
	}
</style>
<body>
    <form action="search.php" method="POST">
        <h2>List users</h2>
        <td><a span style: style="color:purple"; href="adduser.php">Add new user</a></td>
        <br><br>
        <td><input type="text" name="username" value="<?php echo @$_SESSION['username']; ?>"/></td>
        <td><button type="submit" name="Search">Search</button></td>
        <td><button type="reset">Reset</button></td>
        <br><br>
        <table border="0">
            <th>No</th>
            <th span style="text-align: center">Name</th>
            <th span style="text-align: center">Email</th>
            <th span style="text-align: center">Phone</th>
            <th span style="text-align: center">username</th>
            <th span style="text-align: center">Action</th>


        </table>
    </form>
</body>
</html>

<?php
    include 'config.php';
?>