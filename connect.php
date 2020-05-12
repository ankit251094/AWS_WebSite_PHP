<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
error_reporting(0);
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "users";

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

$username = "";
$password = "";
$usererror = "";

/* if($_SERVER["REQUEST METHOD"] == "POST") */
if (isset($_POST['uttasarga']))
{
	
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$query = "select * from details where username = '$username'";
$check1 = mysqli_query($conn, $query);

	if (mysqli_num_rows($check1) > 0){
	$usererror = "This username is already taken";
    echo 'This username is already taken. Values entered will not be stored.';
	}
	else
	{
			if(empty($usererror))
			{
				$sql2 = "INSERT INTO details(username, password) values ('$username','$password')";
			}
		mysqli_query($conn, $sql2);

		session_start();
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['firstname']=$firstname;
		$_SESSION['lastname']=$lastname;
		$_SESSION['emailid']=$emailid;
		header("location: connect.php");
		exit();
	}
}
?>

<html>
<body>
<fieldset>
<legend><b>Kindly enter the below details:-</b></legend>
<form method="POST" action="final.php">
First Name : <input type="text" name="firstname"><br><br>
Last Name : <input type="text" name="lastname"><br><br>
Email Id : <input type="text" name="emailid"><br><br>
<input type="submit" value="Submit" name="uttasarga2">
</form>
</fieldset>
</body>
</html>






