<html>
<center>
<h2> Login page <h2>
<form method="POST" action="Profile.php">
<label> Username </label> <input type ="text" name="username"><br><br>
<label> Password </label> <input type ="password" name="password"><br><br>
<input type="submit" value="Login" name="Login">
</form>
<form method="POST" action="registration.php">
<input type="submit" value="Click for new user" name="newreg">
</form>
</center>

<?php
include "conn.php";
if(isset($_POST["Login"]))
{
	$Username=trim($_POST['username']);
	$Password=trim($_POST['password']);
	$sql="select * from registration where Username='$Username' and Password='$Password'";
	if($result=mysqli_query($con,$sql))
	{
		session_start();
		session_registration('$Username');
		$_SESSION['$Username'];
		session_registration('$Password');
		$_SESSION['$Password'];
		echo'<script type="text/javascript">';
		echo'window.location="Profile.php"';
		echo'</script>';
		
	}
	else
	{
		echo"error";
	}
	
}
if(isset($_POST["newreg"]))
{
	echo'<script type="text/javascript">';
		echo'window.location="registration.php"';
		echo'</script>';

}
?>
</html>
