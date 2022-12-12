<html>
<form method="POST">
<center>
<h2> Registration Form <h2><br><br>
<label> Name :-</label> <input type="text" name="name"><br><br>
<label> URN :- </label> <input type ="number" name="urn"><br><br>
<label> Class:- </label> <select name="class" id="class"><br><br>
<option value="SY A"> SY A</option>
<option value="SY B"> SY B</option>
<option value="TY A"> TY A</option>
<option value="SY A"> TY B</option>
<option value="SY A"> BTech A</option>
<option value="SY A"> BTech B</option>
</select><br><br>
<label> Email:- </label> <input type="text" name="email"><br><br>
<label> Contact No:- </label> <input type="number" name="contact"><br><br>
<label> Username:- </label> <input type="text" name="username"><br><br>
<label> Password:- </label> <input type="password" name="password"><br><br>
<label> Address:- </label> <input type="text" name="address"><br><br>
<input type="submit" value="Register" name="registration"><br><br>
</center>
</form>
<?php
include "conn.php";
if(isset($_POST["registration"]))
{
	$Name=$_POST['name'];
	$URN=$_POST['urn'];
	$Class=$_POST['class'];
	$Email=$_POST['email'];
	$Contact_No=$_POST['contact'];
	$Username=$_POST['username'];
	$Password=$_POST['password'];
	$Address=$_POST['address'];

$sqlquery="Insert into registration values('$Name','$URN','$Class','$Email','$Contact_No','$Username','$Password','$Address')";
if(mysqli_query($con,$sqlquery))
{
	echo"Data inserted sucessfully";
	
}
else
{
	echo"Error ";
}
}
?>
</html>
