<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trying to get php to work</title>
    <meta charset="utf-8">
</head>
<body>

<?php

#get form values
$sName = $_POST["sName"];
$author = $_POST["author"];
$fileType = $_POST["fileType"];

echo "Got: <br>";
echo "sName:". $sName ."author:". $author ."fileType:". $fileType;

//Log into server
$servername = "localhost";
$username = "noahzs";
$password = "1999mazdarx-7";
$dbname = "audio_db";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed ". $conn->connect_error);
}else{
echo"Connected Successfully<br><br>";
}


// $sql = "CREATE TABLE audioData (
//     fileID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     dispName VARCHAR(50) NOT NULL,
//     author VARCHAR(50) NOT NULL,
//     fileType ENUM('mp3','wav') NOT NULL
//     )";

// $sql = "SELECT * FROM audioData";
$sql = "INSERT INTO audioData (dispName, author, fileType)
VALUES ('$sName', '$author', '$fileType')";

if ($conn->query($sql) === TRUE) {
    echo "Some shit was successful idk man i just work here";
}else{
    echo "Oh wow i sure hope my sql works. Fuck you. said the sql who was actually the fuck you guy.<br><br>Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
</body>
</html>