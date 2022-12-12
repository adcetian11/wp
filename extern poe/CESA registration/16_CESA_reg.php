<html>
<head>  
	<style>
form
{
 background-color: lightblue;
 box-sizing: border-box;
 margin: 70px;
 border: 3px solid black; 
 margin-left: 300px;
 margin-right: 300px;
 padding: 30px;
 
}
h1 {
  color: brown;
}
label{
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
}
div{
border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;}

select {
    width: 40%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
  }
input   {
    width: 40%;
    padding: 5px ;
    margin: 5px;
   border: 2px solid skyblue;
   border-radius: 4px;
   box-sizing: border-box;
   font-size: 20px;
}
 input[type=submit] {
    background-color: #04AA6D;
    border: none;
    color: white;
    padding:  16px;
    text-decoration: none;
    margin:  2px;
    cursor: pointer;
    width: 200px;
  }


</style>


</head> 
<form method="POST" >
<center>
<h2>CESA Registration Form <h2><br><br>
<label> Name</label> <input type="text" name="name" required><br><br>
<label> URN</label> <input type ="text" name="urn"><br><br> 
<label> Class</label> <select name="class" id="class"><br><br>
<option value="SY A"> SY A</option>
<option value="SY B"> SY B</option>
<option value="TY A"> TY A</option>
<option value="TY B"> TY B</option>
<option value="BTech A"> BTech A</option>
<option value="BTech B"> BTech B</option>
</select><br><br>
<label> Email </label> <input type="text" name="name"  pattern="[^ @]*@[^ @]*" required><br><br>
<label> Contact No</label> <input type="text" name="contact" pattern="[0-9]{10}" required><br><br>
<label> Address </label> <input type="text" name="address" required><br><br>
<label> Select Post</label> <select name="post" id="post"><br><br>
<option value="President"> President</option>
<option value="Vice President"> Vice President</option>
<option value="Cultureal Head">Cultureal Head</option>
<option value="Placement Head"> Placement Head</option>
<option value="Sports Head"> Sports Head</option>
<option value="Ladies Representative"> Ladies Representative</option>
</select><br><br>
<label> Password</label> <input type="text" name="password" required><br><br>

<input type="submit" value="Register" name="register"><br><br>
</center>
</form>
</html>
