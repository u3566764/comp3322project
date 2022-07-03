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

$sql = "INSERT INTO User (name, email, password)
VALUES ('.$_GET[name]', '.$_GET[email]', '.$_GET[password]')";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}






$conn->close();
?>