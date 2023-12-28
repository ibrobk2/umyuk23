<?php
require "connection.php";
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}else{
    $user = $_SESSION['user'];

    $sql = "SELECT * FROM users WHERE username='$user'";
    $res = mysqli_query($conn, $sql);

    if($res){
        $row = mysqli_fetch_assoc($res);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h2>User Dashboard</h2>
        <h1>Welcome, <?php echo $row['fullName'];  ?></h1>
        <button style="background-color: brown;color:white;border-radius:5px; padding: 8px;cursor:pointer;"><a href="logout.php" style="text-decoration: none;color:white;">Logout</a></button>
    </div>
</body>
</html>