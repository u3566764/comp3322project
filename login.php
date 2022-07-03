<?php
#???
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
	





session_start();
#Set a predefined account
define("SYSUSER",'admin');
define("SYSPASSWORD",'secret');
#Debug: show current session data
print_r($_SESSION); 

#Our main() function
start();




function start(){
 if(isset($_POST['login'])){
 if(authenticate()){
 display_secured_content();
 }else{
 display_login_form('Invalid username or password.');
 }
 }else if(isset($_GET['action']) && $_GET['action'] == 'logout'){
 logout();
 }else{
 display_login_form();
 }
}

/*function display_login_form($msg=''){
 <form action="login.php" method="post">
 <p class="error">
 <?php echo $msg; ?>
 </p>
 <fieldset name="logininfo">
 <legend>Login</legend>
 <label for="username">Username:</label> 
 <input type="text" name="username" id="username" /><br /> 
 <label for="password">Password:</label>
 <input type="password" name="password" id="password" /><br /> 
 <input type="submit" name="login" value="Login">
 </fieldset>
 </form>

}*/

function authenticate(){
	if(isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		setcookie("username", $_POST['username'], time()+3600);
		setcookie("password", $_POST['password'], time()+3600);
		
		if (mysqli_num_rows($Std_record) > 0) {
			while ($row =mysqli_fetch_array($Std_record)) {
				if(.$row['name']. == $username && .$row['password']. == $password){
					$_SESSION['username'] = .$row['name'].;
					session_write_close();
					return true;
				}
			
			}
			return false;

		}
	}
}

function logout(){
	if(isset($_COOKIE[session_name()])){
		setcookie(session_name,'',time() - 3600, '/');
	}
	$_SESSION = array();
	session_destroy();
	header('location: main.html');
}





?>


<html>
<head>
<title>Accessing Cookies with PHP</title>
</head>
<body>

<p>
<?php
	if (isset($_COOKIE["password"])) {
	echo $_COOKIE["password"]. "<br>";
	}else {
	echo "Cookie page is not set\n";
	}
?>
</p>
</body>
</html>