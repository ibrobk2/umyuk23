<?php 

// Database Connection
require "connection.php";


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




?>