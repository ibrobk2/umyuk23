<?php 

// Database Connection
include "connection.php";


if(isset($_POST['btn_register'])){
    // variables
    $full_name = $_POST['fname'];
    $username = $_POST['user'];
    $state = $_POST['state'];
    $password = $_POST['pass'];

    echo $full_name." ".$username." ".$state." ".$password;
}




?>