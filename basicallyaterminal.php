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

# echo what php got as form values (should be user input from form)
echo "Got: <br>";
echo "sName: ". $sName . '<br>' ."author: ". $author . '<br>' ."fileType: ". $fileType . "<br>";

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
if ($sName === "" and $author === "") { # if sName and author === nothing dont put into database
    echo "YOU SUCK LOSERRRRRRRRRR";
} else { # put data into database
$sql = "INSERT INTO audioData (dispName, author, fileType)
VALUES ('$sName', '$author', '$fileType')";
}


if ($conn->query($sql) === TRUE) {
    echo "Some shit was successful idk man i just work here";
}else{
    echo "Oh wow i sure hope my sql works. Fuck you. said the sql who was actually the fuck you guy.<br><br>Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT fileID, dispName, author, fileType FROM audioData";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //output the data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["fileID"] ." - Sound Name: " . $row["dispName"] . " - author: ". $row["author"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

<!-- get user input and set sqlk -->

<!-- <form action="basicallyaaterminal.php" method="POST">
    <textarea name="sqlUserInp" rows="3" cols="20">tee hee</textarea>
</form>

 -->

<img src="media/spongebobmeboy.gif" alt="grooving">

</body>
</html>