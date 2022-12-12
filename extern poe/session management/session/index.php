<?php

include('database.php');
$msg = false;

if (isset ($_POST['submit'])) {
    $user = $_POST['user_name'];
    $password = $_POST['user_password'];

    $query = "select * from user where user = '$user'";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
      if($password == $row['password']){
        $_SESSION["login"] = true;
        $_SESSION["id"] = $row["id"];
        header("Location: indexr.php");
      
      }
      else{
        echo
        "<script> alert('Wrong Password'); </script>";
      }
    }
    else{
      echo
      "<script> alert('User Not Registered'); </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
                 body  
{  
    margin: 0;  
    padding: 0;  
    background-color:#89CFF0;  
    font-family: 'Arial';  
}  
.login{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background: f5f5f5; 
        border-radius: 15px ;  
          
}  
h1{  
    text-align: center;  
    color: #277582;  
    padding: 20px;  
}  
label{  
    color:black  
    font-size: 17px;  
}  
#user_name{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
    margin-bottom: 10px; 
}  
#user_password{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
    margin-bottom: 10px; 
}  
#submit{  
    width: 350px;  
    height: 40px;  
    border: none;  
    border-radius: 17px;  
    background-color: black;
    font-size: 20px;
    color: #fff;  
  
  
}  
#logi{  
    width: 350px;  
    height: 40px;  
    border: none;  
    border-radius: 17px;  
    background-color: black;
    font-size: 20px;
    color: #fff;  
  
  
}  
span{  
    color: black;  
    font-size: 17px;  
}  
    </style>
    <title>login</title>
</head>

<body>
    <header>
        <div class="login">
            
                <form id="login" method="post">
                    <h3>Login</h3>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="user_name" id="user_name" placeholder="Enter your Username...." required><br>
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" id="user_password" placeholder="Enter your Password...." required><br>
                    </div>
                    <input type="submit" value="Login" name="submit" id="submit">
                    <div class="check">
                        <input type="checkbox" name="" id=""><span>Remeber Me.</span>
                    </div>
                    <p>Dont't have a account yet? <a href="signup.php">Sign Up</a></p>
                </form>
           
        </div>
        <div class="right_bx1">
            <img src="login_png.jpg" alt="">
           <!-- <h3>Incorrect Password</h3>-->
           <?php
                echo ('<h3>'.$msg.'</h3>');
           ?>
        </div>
    </header>
</body>
</html>