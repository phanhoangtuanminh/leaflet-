<?php
    session_start();
    include 'config.php';
    if(isset($_POST['submit']) ) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        echo '<h2>Add new User</h2>';
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])
            && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confirmPassword'])) {
            if ( $password != $confirmPassword) {
                $_SESSION['message4'] = '<span style = "color:red";>Password not match, please try again';
                header('location:register.php');
            } else {
                $sql = "SELECT * FROM user WHERE username = '". $username ."' ";
                $old = mysqli_query($conn,$sql);
                $password = md5($password);
                $sql = "INSERT INTO user (name,email,phone,username,password) VALUES ('$name','$email','$phone'$username','$password')";
                mysqli_query($conn,$sql);
                echo 'Register successfully<br><a href="ListUser.php">Login</a>';
            }

    }
}
?>
