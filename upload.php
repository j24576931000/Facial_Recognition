<?php
$db_servername = "localhost";
$db_username = "root";
$db_password = "root";
$db_dbname = "facial_recognition";

#$user_name = "default";
#$embedding = "[1.7935325]";
$user_name = $_POST["user_name"];
$embedding = $_POST["embedding"];

// Create connection
$conn = new mysqli($db_servername, $db_username, $db_password,$db_dbname);


$sql ="INSERT INTO users(user_name,embedding) VALUES ('$user_name','$embedding')";
$result = $conn ->query($sql);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*
$sql2= "DELETE FROM `users`
		WHERE `embedding` IN (SELECT u2.`embedding` 
								FROM `users` as u2 
								WHERE u1.`user_name`= u2.`user_name`
								AND u1.`embedding`= u2.`embedding` 
								AND u1.`number` <> u2.`number`)";
*/


echo "user_name=".$user_name."\n"."embedding=".$embedding;
// closing connection 

mysqli_close($conn); 
?>