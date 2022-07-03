<?php
//define("USERNAME", '3015999999');

$servername = "'sophia.cs.hku.hk";
$username = "nhlam";
$password = "654321";
$dbname = "User";

// Create connection
$conn = new mysqli($servername, $sqlusername, $sqlpassword, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql = "SELECT * FROM Users";
$Std_record=mysqli_query($conn, $sql)
	or die("Query Error!".mysqli_error($conn));
	


		if (mysqli_num_rows($Std_record) > 0) {
			while ($row =mysqli_fetch_array($Std_record)) {
				if (isset($_GET['email']) && ($_GET['email'] == USERNAME)) {
					echo "You have registered before!!";
				} else {
					echo "";
				}
			}
		}
		
		
		

?>
