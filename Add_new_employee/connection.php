<?php

error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";
$conn=mysqli_connect($servername,$username,$password);
mysqli_select_db($conn,'id19679193_add_new_employee');
if($conn){
    echo "Connection OK";
}
else{
    echo "Connection failed".mysqli_connect_error();
}
?>