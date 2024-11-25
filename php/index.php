<?php 

//Log into server
$servername = "";
$username = "";
$password = "";

//create connection
$conn = new mysqli($servername, $username, $password);

//check connection
if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}else{
echo"Connected Successfully";
}

//the following code is Noah goofing off. you can delete at any time

$sql = "CREATE DATABASE people";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
}else{
    echo "Error creating database:" . $conn->error;
}

?>