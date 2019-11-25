<?php 

$db_name = "guess";
$host = "localhost";
$user="root";
$password= "123456123Mo";

$conn=mysqli_connect($host,$user,$password,$db_name);
if (mysqli_errno($conn)) {
    echo mysqli_error($conn);
}

