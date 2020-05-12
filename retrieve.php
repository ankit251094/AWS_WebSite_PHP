<!DOCTYPE html>
<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
error_reporting(0);

session_start();
$_SESSION['username']=$username;
$_SESSION['password']=$password;
$_SESSION['firstname']=$firstname;
$_SESSION['lastname']=$lastname;
$_SESSION['emailid']=$emailid;
?>

<html>
<body>
<fieldset>
<legend> <b> Enter user name and password to retrieve Information</legend>
<form method="POST" action="connect2.php">
Username : <input type="text" name="username"><br><br>
Password : <input type="password" name="password"><br><br>
<input type="submit" value="Submit" name="uttasarga3">
<button type="reset" onclick="location.href='index.html'">
    Exit
</button>
</form>
</fieldset>
</body>
</html>





