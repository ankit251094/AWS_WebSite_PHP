<?php
session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$emailid = $_SESSION['emailid'];
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
error_reporting(0);

/* session_start();
$_SESSION['username']=$username;
$_SESSION['password']=$password;
$_SESSION['firstname']=$firstname;
$_SESSION['lastname']=$lastname;
$_SESSION['emailid']=$emailid; */


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "users";

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

/* $firstname = "";
$lastname = "";
$emailid = "";
$username = "";
$password = ""; */


/* if($_SERVER["REQUEST METHOD"] == "POST") */
if (isset($_POST['uttasarga2'])){

/* if (isset($_POST['username'])){*/
/*  $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$emailid = mysqli_real_escape_string($conn, $_POST['emailid']); */

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emailid = $_POST['emailid'];

/* mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); */

$sql = "UPDATE details SET firstname= '$firstname', lastname='$lastname', emailid='$emailid' WHERE username='$username' and password='$password'";

/* $sql = "INSERT INTO users (firstname, lastname, emaailid) VALUES ('$firstname', '$lastname', '$emailid')"; */

 /* $sql = "Insert into details ('firstname' ,'lastname', 'emailid') values ('$firstname, $lastname, $emailid) where username = $username and password = $password; */


if(mysqli_query($conn, $sql)){
	echo "Details entered Successfully!";

}else {
	echo "Error. Could not be able to execute $sql. " . mysqli_error($conn);
}
		echo"<fieldset>";
echo"<p><b>Please verify the displayed information <p>";
	 echo'<table border="1">';
	 echo"<tr>";
	 echo"<td>Firstname</td>";
	 echo"<td>".$firstname."</td><br>";
	 echo"</tr>";
	 echo"<tr>";
	 echo"<td>Lastname </td> ";
	 echo"<td>".$lastname."</td>";
	 echo"</tr>";
	 echo"<tr>";
	 echo"<td>EmailId </td>";
	 echo"<td>".$emailid."</td>";
	 echo"</tr>";
	 echo"</table> <br>";
echo"</fieldset>";
}
?>

<button type="reset" onclick="location.href='index.html'">
    Exit
</button>