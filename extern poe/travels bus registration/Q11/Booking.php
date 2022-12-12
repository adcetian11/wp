<?php
include "db.php";
if(isset($_POST['login']))
{
    $busno = $_POST['busno'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $passen = $_POST['passen'];

    if ($busno == '1' and $passen<=20)
    {
    $s = "insert into `bus1`(`busno`,`from`,`to`,`passengers`) values ('$busno','$from','$to','$passen')";
    $result = $con->query($s);
    if($result == TRUE)
    {
        echo "<script type='text/javascript'> alert('Successful booking in Bus 1'); </script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Error.......'); </script>";
    }
    

    $avail = "select concat(20 - sum(passengers)) as seat from bus1" ;
    $query_run1=mysqli_query($con,$avail);
             while($row=mysqli_fetch_assoc($query_run1))
             {
                 $output = "Available seats in Bus 1 is: "." ".$row['seat'];
             }
             echo $output;
            }
elseif($passen>20)
{
    echo "<script type='text/javascript'> alert('Sorry only 20 seats are available'); </script>";
}
             elseif ($busno == '2' and $passen<=20) 
             {
             $s = "insert into `bus2`(`busno`,`from`,`to`,`passengers`) values ('$busno','$from','$to','$passen')";
             $result = $con->query($s);
             if($result == TRUE)
             {
                 echo "<script type='text/javascript'> alert('Successful booking in Bus 2'); </script>";
             }
             else{
                 echo "<script type='text/javascript'> alert('Error.......'); </script>";
             }
             
         
             $avail = "select concat(20 - sum(passengers)) as seat from bus2" ;
             $query_run1=mysqli_query($con,$avail);
                      while($row=mysqli_fetch_assoc($query_run1))
                      {
                          $output = "Available seats in Bus 2 is: "." ".$row['seat'];
                      }
                      echo $output;        
                    }
}

 

?>








<html>
    <head>
        <link rel="stylesheet" href="Book.css">
    </head>
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
    </style>

    <body>
        <form align="center" method="POST" class="form">
            <h1>Total 20 seats in Bus</h1>
            <label>Bus No - </label><input type="text" name="busno"><br><br>
            <label>From - </label><input type="text" name="from"><br><br>
            <label>To - </label><input type="text" name="to"><br><br>
            <label>No of person - </label><input type="text" name="passen"><br><br>
            <input class="btn" type="submit" name="login" value="Book">

            <a href="login.php">Back To Login</a>
           
        </form>
    </body>
</html>