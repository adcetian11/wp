<?php

    include('database.php');
    $msg = false;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_re_password = $_POST['user_re_password'];

    if (!empty($user_name) && !empty($user_email) && !empty($user_password) && !is_numeric($user_name)) {
        if ($user_password === $user_re_password) {
            $query = "insert into user (user, email, password) VALUES ('$user_name', '$user_email', '$user_password')";
            mysqli_query($conn, $query);
            header("Location: index.php");
        }
        else {
            $msg = "Password Not Match";
        }
    }    
    }
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
        background: #f5f5f5; 
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

#user_email{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
    margin-bottom: 10px; 
}  
#user_re_password{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
    margin-bottom: 10px; 
}  
.submit{  
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
</head>

<body>
    <header>
        
            <div class="login">
                <form id="login" method="post">
                    <h3>Sign Up</h3>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="user_name" id="user_name"placeholder="Enter your Username...." required>
                    </div>
                    <div class="card">
                        <label for="email">Email</label>
                        <input type="email" name="user_email" id="user_email" placeholder="Enter your Email...." required>
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" id="user_password" placeholder="Enter your Password...." required>
                    </div>
                    <div class="card">
                        <label for="re-password">Re-Password</label>
                        <input type="password" name="user_re_password" id="user_re_password" placeholder="Enter your Re-Password...." required>
                    </div>
                    <input type="submit" value="Sign Up" class="submit">
                    <div class="check">
                        <input type="checkbox" name="" id=""><span>Remeber Me.</span>
                    </div>
                    
                    <p>You have a account? <a href="index.php">Login</a></p>
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