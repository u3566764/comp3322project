<?php
#???
$servername = "'sophia.cs.hku.hk";
$username = "nhlam";
$password = "654321";
$dbname = "User";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";


//gen qid 
$sql = "INSERT INTO Questions (qid, title, content, answer, up, time, creatorid, creatorName)
VALUES (qid, '.$_POST[email]', '.$_POST[password]')";//todo

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>