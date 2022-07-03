<?php
#???
$servername = 'sophia.cs.hku.hk';
$username = "nhlam";
$password = "654321";
$dbname = "Questions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT * FROM Questions";
//$question_list = $conn->query($sql);
//$query="SELECT * FROM stdRecord";
$Std_record=mysqli_query($conn, $sql)
	or die("Query Error!".mysqli_error($conn));


if($_POST[space]!=null){
	
	
}

if (mysqli_num_rows($Std_record) > 0) {
	while ($row =mysqli_fetch_array($Std_record)) {
		if ($_POST[space]=="all" |$_POST[space] == .$row['space'].){
			echo "<div>";
			echo "<p id='space'>".$row['space']."</p><br>";
			echo "<p id='name'>".$row['name']."</p>";
			echo "<p id='time'>".$row['time']."</p>";
			echo "<p id='table'>".$row['table']."</p>";
			echo "<p id='content'>".$row['content']."</p>";
			echo "<p id='upvote'>".$row['upvote']."</p>";
			echo "<p id='answer'>".$row['answer']."</p>";
			
			echo "</div>";
		}
	}
else{
	echo"<p>No record!!</p>";
}


$conn->close();

mysqli_free_result($Std_record);
mysqli_close($conn);
}
?>