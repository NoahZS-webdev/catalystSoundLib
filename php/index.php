<?php 

//Log into server
$servername = "";
$username = "";
$password = "";
$dbname = "";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}else{
echo"Connected Successfully";
}

//the following code is Noah goofing off. you can delete at any time

$sql = "CREATE TABLE people (
id INT NOT NULL,

)";

?>