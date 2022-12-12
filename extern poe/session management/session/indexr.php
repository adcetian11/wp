<?php
require 'database.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
             body  
{  
    margin: 0;  
    padding: 0;  
    background-color:#f5f5f5;  
    font-family: 'Arial';  
}  
    </style>
  </head>
  <body>
    <div class="indexa">
    <h1>Welcome <?php echo $row["user"]; ?></h1>
    
  </body>
</html>
