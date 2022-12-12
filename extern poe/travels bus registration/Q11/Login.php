<?php
include "db.php";
if(isset($_POST['Login']))
{
    $u = $_POST['user'];
    $p = $_POST['pass'];
    $qs = "select password from registration where username = '$u' ";
    $rs = mysqli_query($con,$qs);
    if(mysqli_fetch_array($rs) !=NULL)
    {
    $qs = "select password from registration where username = '$u' ";
    $rs = mysqli_query($con,$qs);
    while($row  = mysqli_fetch_array($rs))
    {
        $pass = $row['password'];
    }
}
    if($u == $u and $p == $pass)
    {
        session_start();
        $_SESSION['user'] = $u;
        echo '<script type="text/javascript">';
        echo 'alert("Login Successfully");';
        echo 'window.location = "Booking.php";';
        echo '</script>';
    }
    else
    {
        echo "<script type='text/javascript'> alert('User not found') </script>";
    }
}
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title></title>
        <link rel="stylesheet" href="style.css">
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
.link{
    margin-top:30px;
}
</style>
    </head>

    <body>
        <!-- partial:index.partial.html -->
        <div id="bg"></div>
        <form method="POST">
            <div class="form-field">
                <input type="text" placeholder="Email / Username" name="user" required/>
            </div>
            <div class="form-field">
                <input type="password" placeholder="Password" name="pass" required/> </div>
            <input type="submit" value="Login" name="Login" class="txt">
            <a class="link" href="Register.php">Register</a>
        </form>

        
    </body>

    </html>