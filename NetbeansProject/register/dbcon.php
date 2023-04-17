<?php
$username = "root";
$password ="CUK984myhart.";
$database = "voting";
$host = "localhost";
$port = "3307";

$conn = new mysqli($host, $username, $password, $database, $port);

if($conn->errno){
    echo "Error:".$conn->connect_error;
}else{
//    echo 'success';
}