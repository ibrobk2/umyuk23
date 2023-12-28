<?php 
session_start();
// Database Connection
require "connection.php";

// REGISTRATION SECTION
if(isset($_POST['btn_register'])){
    // variables
    $full_name = $_POST['fname'];
    $username = $_POST['user'];
    $state = $_POST['state'];
    $password = md5($_POST['pass']);

    // echo $full_name." ".$username." ".$state." ".$password;
    $sql = "INSERT INTO `users` (`fullName`, `username`, `state`, `password`) VALUES ('$full_name', '$username', '$state', '$password')";
    $result = mysqli_query($conn, $sql);

    // if($result){
    //     header("Location: login.php");
    // }

    if($result){
        echo "
            <script>
                alert('Registration Successful, You can now Login..');
                window.location = 'login.php';
            </script>        
        ";
    }
}


// LOGIN SECTION
if(isset($_POST['btn_login'])){
    $username = $_POST['user'];
    $password = md5($_POST['pwd']);
    $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        $_SESSION['user'] = $username;
        header("Location: home.php");
    }else{
        echo "Invalid Username/Password";
    }
}




?>