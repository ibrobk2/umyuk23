<?php
require_once("constants.php");

$conn = mysqli_connect(HOST, USER, PASS, DB);
// $conn = new mysqli("localhost", "root", "", "umyuk23");

if(!$conn){
    echo "Failed to connect to database";
}
// else{
//     echo "Connection established successfully....";
// }



?>