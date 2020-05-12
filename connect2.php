<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
error_reporting(0);

session_start();

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "users";

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

$username = $_POST['username'];
$password = $_POST['password'];
$pfirstname = "";
$plastname = "";
$pemailid = "";
$pusern="";

if (isset($_POST['uttasarga3'])){
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$emailid = $_POST['emailid'];
	
$query = "SELECT * FROM details WHERE username = '$username' AND password = '$password'";
$result = $conn->query($query);

if($result->num_rows > 0){

while ($row = mysqli_fetch_array($result)) 

{
		$pfirstname = $row["firstname"];
        $plastname = $row["lastname"];
		$pemailid = $row["emailid"];
		$pusern=$row["username"];
		$_SESSION['username']=$pusern;
}
}else{
	echo "No Records are present";
}
}

$conn->close();
 $_SESSION['firstname']=$pfirstname;
$_SESSION['lastname']=$plastname;
$_SESSION['emailid']=$emailid;
//$_SESSION['username']=$username; 
?>




<!doctype html>  
    <html>  
	<body>
	<fieldset>
	<legend><b>The Details are as below:-</b></legend>
	<table border="1">
	<tr>
	<td><b>First name:</td> <td><?php echo $pfirstname ?> </td>
	</tr>
    <tr>
	<td><b>Last name: </td>
	<td><?php echo $plastname ?> </td>
	</tr>
	<tr>
	<td><b>
   Email ID:</td>
	<td><?php echo $pemailid ?></td>
	<tr>
	</fieldset>
	</body>
	</html>
	
	<!DOCTYPE html>
<html>
<body>
<fieldset>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select File to upload:
    <input type="file" name="file">
    <input type="submit" value="Upload File" name= "file">
</form>
</fieldset>
</body>
</html>