<?php
include "db.php";
if(isset($_POST['reg']))
{
    $name = $_POST['name'];
    
    $email = $_POST['email'];
    $contact = $_POST['con'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $add = $_POST['add'];
    $s = "insert into registration(name,email,contact,username,password,address) values ('$name','$email','$contact','$user','$pass','$add')";
    $result = $con->query($s);
    if($result == TRUE)
    {
        echo "<script type='text/javascript'> alert('Register Successfully'); </script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Error.......'); </script>";
    }
}
?>




<html>
<head>
    <link rel="stylesheet" href="reg.css">
<style>
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding:14px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
.reg{
margin-top:200px;

}
.btn{
    background-color: #f44336;
  color: white;
  padding:14px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
</style>
</head>
<body>
    <form  class="reg" align="center" method="POST">
    <lable>Name: </lable><input type="text" name="name"><br><br>
    <lable>Email: </lable><input type="email" name="email"><br><br>
    <lable>Contact: </lable><input type="con" name="con"><br><br>
    <lable>Username: </lable><input type="text" name="user"><br><br>
    <lable>Password: </lable><input type="text" name="pass"><br><br>
    <lable>Address: </lable><input type="text" name="add"><br><br>

    <input class="btn" type="submit" value="Register" name="reg">
    <a href="Login.php">Back to Login</a>

</form>
</body>
</html>
